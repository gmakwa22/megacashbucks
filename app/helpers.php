<?php

function motivational_quote()
{
  return 'You are Awesome';
}

function setpurlads()
{

  $utm_campaign = request()->get('utm_campaign');
  $utm_medium = request()->get('utm_medium');
  $utm_source = request()->get('utm_source');

  $newbackendlink = 'https://paydayloan.azurewebsites.net/home/Index/'.$utm_campaign.':'.$utm_medium.':'.$utm_source;
  $encodedurl = urlencode($newbackendlink);
  $builturl = 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_PayDayLoansSignUp_1&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri='.$encodedurl.'&scope=openid&response_type=id_token&prompt=login';

  if ($utm_campaign == 'goo' || $utm_campaign == 'fvr' || $utm_campaign == 'eml' || $utm_campaign == 'def'){
    if (Session::has('purl')){
          // key exists do nothing
      }else{
          Session::put('purl', $builturl);
    }
    }else{
      // $newbackendlink = $utm_campaign;
      // Session::forget('purl');
  }


}

function customfrontbanner()
{
  $monthMap = [
   'b0' => 'l2',
   'b1' => 'l2',
   'b2' => 'l2',
   'b3' => 'l2',
   'b4' => 'l2',
   'b5' => 'l2',
   'b6' => 'l2',
   'b7' => 'l2',
   'b8' => 'l2',
   'b9' => 'l2',
   'b00' => '10',
   'b01' => '10',
   'b02' => '12',
   'b03' => '12',
   'b04' => '22',
   'b05' => '13',
   'b06' => '17',
   'b07' => '17',
   'b08' => '19',
   'b09' => '19',
   'b10' => '21',
   'b11' => '21',
   'b12' => '22',
   'b13' => 'coffee',
   'b14' => 'coffee',
   'b15' => '23',
   'b16' => '13',
   'b17' => '25',
   'b18' => '26',
   'b19' => '26',
   'b20' => '27',
   'b21' => '27',
   'b22' => 'l3',
   'b23' => 'l3',
   'b24' => 'l7',
   'b25' => 'l7',
   'b26' => 'l6',
   'b27' => 'l6',
   'b28' => '3',
   'b29' => '26',
   'b30' => '26',
   'b31' => '3', ];
   $today = date("d");
   $b = "b".$today;
   $monthday = $monthMap[$b];

   return $monthday;
}
