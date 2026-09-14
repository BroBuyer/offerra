<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class GoogleOAuthService
{
    public function isConfigured(): bool
    {
        return filled(config('services.google.client_id'))
            && filled(config('services.google.client_secret'))
            && filled(config('services.google.redirect_uri'));
    }

    /**
     * @param  array<string, mixed>  $statePayload
     */
    public function authorizationUrl(array $statePayload): string
    {
        if (! $this->isConfigured()) {
            throw new RuntimeException('Google OAuth is not configured.');
        }

        $state = encrypt($statePayload);

        $query = http_build_query([
            'client_id' => config('services.google.client_id'),
            'redirect_uri' => config('services.google.redirect_uri'),
            'response_type' => 'code',
            'scope' => implode(' ', config('services.google.scopes', [])),
            'access_type' => 'offline',
            'include_granted_scopes' => 'true',
            'prompt' => 'consent',
            'state' => $state,
        ]);

        return 'https://accounts.google.com/o/oauth2/v2/auth?'.$query;
    }

    /**
     * @return array{access_token: string, refresh_token: ?string, expires_in: int, email: ?string}
     */
    public function exchangeCode(string $code): array
    {
        $response = Http::asForm()->timeout(20)->post('https://oauth2.googleapis.com/token', [
            'code' => $code,
            'client_id' => config('services.google.client_id'),
            'client_secret' => config('services.google.client_secret'),
            'redirect_uri' => config('services.google.redirect_uri'),
            'grant_type' => 'authorization_code',
        ]);

        if (! $response->successful()) {
            throw new RuntimeException('Google OAuth token exchange failed: '.$response->body());
        }

        $data = $response->json();
        $accessToken = (string) ($data['access_token'] ?? '');
        if ($accessToken === '') {
            throw new RuntimeException('Google OAuth did not return an access token.');
        }

        return [
            'access_token' => $accessToken,
            'refresh_token' => isset($data['refresh_token']) ? (string) $data['refresh_token'] : null,
            'expires_in' => (int) ($data['expires_in'] ?? 3600),
            'email' => $this->fetchEmail($accessToken),
        ];
    }

    public function accessTokenFor(UserSetting $settings): string
    {
        $refresh = trim((string) ($settings->google_oauth_refresh_token ?? ''));
        if ($refresh === '') {
            throw new RuntimeException('Google account is not connected.');
        }

        $response = Http::asForm()->timeout(20)->post('https://oauth2.googleapis.com/token', [
            'client_id' => config('services.google.client_id'),
            'client_secret' => config('services.google.client_secret'),
            'refresh_token' => $refresh,
            'grant_type' => 'refresh_token',
        ]);

        if (! $response->successful()) {
            throw new RuntimeException('Google OAuth refresh failed: '.$response->body());
        }

        $token = (string) ($response->json('access_token') ?? '');
        if ($token === '') {
            throw new RuntimeException('Google OAuth refresh returned an empty access token.');
        }

        return $token;
    }

    private function fetchEmail(string $accessToken): ?string
    {
        try {
            $response = Http::timeout(15)
                ->withToken($accessToken)
                ->get('https://openidconnect.googleapis.com/v1/userinfo');

            if (! $response->successful()) {
                return null;
            }

            $email = trim((string) ($response->json('email') ?? ''));

            return $email !== '' ? $email : null;
        } catch (\Throwable) {
            return null;
        }
    }
}
