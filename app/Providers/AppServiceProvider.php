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
      View::share('corpsignin', 'https://paydayloan.azurewebsites.net/');
  View::share('corpregister', 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_PayDayLoansSignUp_1&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri=https%3A%2F%2Fpaydayloan.azurewebsites.net%2Fhome%2FIndex%2Fdef%3Asearch%3Amegacashcom&scope=openid&response_type=id_token&prompt=login');
      View::share('corpname', 'Mega Cash Bucks');
      View::share('corplogo', 'images2/logo/megacashbucks.png');
      View::share('privname', 'Mega Cash Bucks');
      View::share('privoff', 'AJ Keefe');
      View::share('privurl', 'https://www.megacashbucks.com/');
      View::share('privaddress', '4501 Kingsway Pl');
      View::share('privcity', 'Brooklyn');
      View::share('privprov', 'NY');
      View::share('privphone', '604-568-8091');
      View::share('privpostal', '11234');
      View::share('privcountry', 'USA');
      View::share('privemail', 'privacy@megacashbucks.com');
      View::share('suportemail', 'support@megacashbucks.com');
      View::share('consumernum', '');
      View::share('gooid', 'UA-143026661-1');
      View::share('licloc', 'BusinessLicense-19-11-033.pdf');
      View::share('nametogether', 'megacashbucks');
      View::share('provbc', 'Maximum charges permitted in British Columbia for payday loan: 15% of the principal. We charge: 15% of the principal. For a $300 loan for 14 days: Total cost for borrowing = $45 Annual Percentage rate = 391.07%');
      View::share('provlic', 'Brittish Columbia');
      View::share('frontpop', 'n');
      View::share('randomalt', 'Mega cash bucks, minimum net pay requirements, payday loans and fast cash advances for Canadians and Our lending process has no hidden fees.');
    }
}
