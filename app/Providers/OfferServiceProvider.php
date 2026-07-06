<?php

namespace App\Providers;

use App\Services\DeployConnection;
use App\Services\DeployService;
use App\Services\KeitaroClient;
use App\Services\OfferConfigBuilder;
use App\Services\OfferGenerator;
use App\Services\OfferScanner;
use App\Services\OfferStatusReconciler;
use App\Services\OfferVerificationFileService;
use App\Services\TemplateCatalog;
use Illuminate\Support\ServiceProvider;

class OfferServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(OfferScanner::class, function () {
            return new OfferScanner(config('offerra.offers_path'));
        });

        $this->app->singleton(TemplateCatalog::class, function () {
            return new TemplateCatalog(
                config('offerra.templates_path'),
            );
        });

        $this->app->singleton(KeitaroClient::class);
        $this->app->singleton(OfferConfigBuilder::class);
        $this->app->singleton(DeployConnection::class);

        $this->app->singleton(OfferVerificationFileService::class, function () {
            return new OfferVerificationFileService(config('offerra.offers_path'));
        });

        $this->app->singleton(DeployService::class, function ($app) {
            return new DeployService(
                $app->make(DeployConnection::class),
                $app->make(OfferGenerator::class),
                config('offerra.offers_path'),
            );
        });

        $this->app->singleton(OfferGenerator::class, function ($app) {
            return new OfferGenerator(
                $app->make(OfferConfigBuilder::class),
                $app->make(KeitaroClient::class),
                $app->make(TemplateCatalog::class),
                $app->make(OfferVerificationFileService::class),
                config('offerra.offers_path'),
                config('offerra.templates_path'),
            );
        });

        $this->app->singleton(OfferStatusReconciler::class, function ($app) {
            return new OfferStatusReconciler(
                $app->make(DeployConnection::class),
                $app->make(KeitaroClient::class),
                config('offerra.offers_path'),
            );
        });
    }
}
