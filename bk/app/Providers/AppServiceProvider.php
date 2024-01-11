<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //Import Schema
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      View::share('comp', 'Mega Cash Bucks');
      View::share('login', 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_mcsignin2&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri=https%3A%2F%2Fpaydayloan.azurewebsites.net%2F&scope=openid&response_type=id_token&prompt=login');
  View::share('register', 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_mcsignup&client_id=d9ef21f6-959f-47d4-9a34-a660f70a28c6&nonce=defaultNonce&redirect_uri=https%3A%2F%2Flocalhost%3A5001%2Fauthentication%2Flogin-callback&scope=openid&response_type=id_token&prompt=login');
  View::share('privaddress', '4501 Kingsway Pl');
  View::share('privcity', 'Brooklyn');
  View::share('privprov', 'NY');
  View::share('privphone', '+1 (855) 942-4422');
  View::share('privpostal', '11234');
  View::share('privcountry', 'USA');
  View::share('privemail', 'privacy@megacashbucks.com');
  View::share('suportemail', 'support@megacashbucks.com');
      View::share('privurl', 'https://www.megacashbucks.com/');
    }
}
