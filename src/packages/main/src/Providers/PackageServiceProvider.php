<?php

namespace ZhuiTech\App\Main\Providers;

use ZhuiTech\BootLaravel\Providers\AbstractServiceProvider;

class PackageServiceProvider extends AbstractServiceProvider
{
    public function boot()
    {
        $this->loadRoutes();
        $this->loadMigrations();

        parent::boot();
    }

    public function register()
    {
        parent::register();
    }
}
