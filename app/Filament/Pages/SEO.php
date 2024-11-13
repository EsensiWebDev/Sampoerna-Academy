<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class SEO extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.s-e-o';

    protected static ?string $slug = '../seo/dashboard';
}
