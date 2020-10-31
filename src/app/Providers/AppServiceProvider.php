<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use ZhuiTech\BootAdmin\Providers\AdminServiceProvider;
use ZhuiTech\BootLaravel\Providers\AbstractServiceProvider;
use ZhuiTech\BootLaravel\Providers\LaravelProvider;
use ZhuiTech\BootLaravel\Providers\ProxyAuthProvider;

class AppServiceProvider extends AbstractServiceProvider
{
    protected $providers = [
        LaravelProvider::class,

	    AdminServiceProvider::class,

	    // 代理端没有同步用户表时启用
	    // ProxyAuthProvider::class,

        // 模块
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 中文
        Carbon::setLocale('zh');

	    // 解决代理问题
	    \URL::forceRootUrl(config('app.url'));

        parent::boot();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (!empty(env('CUSTOM_PROVIDER'))) {
            $this->providers[] = env('CUSTOM_PROVIDER');
        }

        parent::register();
    }
}
