<?php

namespace ZhuiTech\App\Main\Providers;

use ZhuiTech\App\Main\Admin\Extension;
use ZhuiTech\BootLaravel\Providers\AbstractServiceProvider;

class PackageServiceProvider extends AbstractServiceProvider
{
    public function boot()
    {
        $this->loadRoutes();
        $this->loadMigrations();

        Extension::boot();

        parent::boot();
    }

    public function register()
    {
        parent::register();
    }
}
