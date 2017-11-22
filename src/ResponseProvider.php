<?php

namespace Linyuee;

use Illuminate\Support\ServiceProvider;

class ResponseProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('ApiResponse', function () {
            return new \ApiResponse();
        });

    }

    /**
     * 获取由提供者提供的服务.
     *
     * @return array
     */
    public function provides()
    {
        return ['ApiResponse'];
    }
}
