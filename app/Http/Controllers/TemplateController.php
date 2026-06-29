<?php

namespace App\Http\Controllers;

use App\Services\TemplateCatalog;
use Inertia\Inertia;
use Inertia\Response;

class TemplateController extends Controller
{
    public function index(TemplateCatalog $catalog): Response
    {
        return Inertia::render('Panel/Templates/Index', [
            'templates' => $catalog->forLibrary(),
        ]);
    }
}
