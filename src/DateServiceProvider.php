<?php

namespace Sara\Serverdate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;
class OpoplogServiceProvider extends ServiceProvider
{

    /**
     * 注册应用服务
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        // 单例绑定服务

        $this->app->singleton('serverdate',function () {
            return new DateService();
        });
    }

    /**
     * 引导启动应用服务
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }


}
