<?php

namespace Flashtag\Themes\CleanCreative;

use Illuminate\Support\ServiceProvider;
use Flashtag\Front\Theme;

class CleanCreativeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $config = require __DIR__.'/../theme.php';
        $theme = new Theme($config);

        $this->publishes($theme->publishes(), 'public');
    }

    public function register()
    {
        //
    }
}
