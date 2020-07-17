<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use DB;
use App\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('settings')){
            view()->share('app_name', $this->getSetting('app_name'));
            view()->share('latitude_centre', $this->getSetting('latitude_centre'));
            view()->share('longitude_centre', $this->getSetting('longitude_centre'));
            view()->share('set_zoom', $this->getSetting('set_zoom'));
            view()->share('gmaps_api_key', $this->getSetting('gmaps_api_key'));
        }

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Appzcoder\CrudGenerator\CrudGeneratorServiceProvider');
        }
    }


    public function getSetting($setting_name)
    {
        $data = Setting::where('setting_name',$setting_name)->first();
        if($data==null){
            return null;
        }else{
               return $data->setting_value;
        }
    }
}