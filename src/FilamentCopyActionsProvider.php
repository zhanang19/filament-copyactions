<?php

namespace Webbingbrasil\FilamentCopyActions;

use Filament\Facades\Filament;
use function Filament\get_asset_id;
use Filament\Navigation\UserMenuItem;
use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Webbingbrasil\FilamentJetstreamTheme\Pages\Profile;

class FilamentCopyActionsProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-copyactions')
            ->hasViews();

    }
}
