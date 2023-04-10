<?php

namespace Mstfkhazaal\FilamentPasswordReveal;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentPasswordRevealServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-password-reveal';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-password-reveal' => __DIR__.'/../resources/dist/filament-password-reveal.css',
    ];

    protected array $scripts = [
        'plugin-filament-password-reveal' => __DIR__.'/../resources/dist/filament-password-reveal.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-password-reveal' => __DIR__ . '/../resources/dist/filament-password-reveal.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)->hasViews();
    }
}
