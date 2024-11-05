<?php

namespace Bosqro\TimelineManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TimelineManagerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-timeline';

    public static string $viewNamespace = 'filament-timeline';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations()
            ->hasViews(static::$viewNamespace);
    }
}
