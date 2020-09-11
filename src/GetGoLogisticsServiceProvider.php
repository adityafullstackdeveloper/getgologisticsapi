<?php

  namespace Adityafullstackdeveloper\GetGoLogistics;

  use Illuminate\Support\ServiceProvider;
  use Adityafullstackdeveloper\GetGoLogistics\ShiprocketApi;

  class GetGoLogisticsServiceProvider extends ServiceProvider
  {
    public function boot()
    {
      if ($this->app->runningInConsole()) {
        $this->publishes([
          __DIR__.'/../config/getgologistics.php' => config_path('getgologistics.php'),
        ], 'config');
      }
    }

    public function register()
    {
      $this->app->alias(GetGoLogisticsApi::class, 'getgologistics');
      $this->mergeConfigFrom(__DIR__.'/../config/getgologistics.php', 'getgologistics');
    }
  }
