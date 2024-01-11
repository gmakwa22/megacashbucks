<?php
$utm_campaign = request()->get('utm_campaign');
$utm_medium = request()->get('utm_medium');
$utm_source = request()->get('utm_source');

$newbackendlink = 'https://paydayloan.azurewebsites.net/home/Index/'.$utm_campaign.':'.$utm_medium.':'.$utm_source;
$encodedurl = urlencode($newbackendlink);
$builturl = 'https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_PayDayLoansSignUp_1&client_id=e4e47530-323f-4cf2-865c-47b561f90813&nonce=defaultNonce&redirect_uri='.$encodedurl.'&scope=openid&response_type=id_token&prompt=login';

if ($utm_campaign == 'goo' || $utm_campaign == 'fvr'){
  if (Session::has('purl')){
        // key exists do nothing
    }else{
        Session::put('purl', $builturl);
  }
  }else{
    // $newbackendlink = $utm_campaign;
    Session::forget('purl');
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{!! SEOMeta::generate() !!}
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="icon" href="{{url('/images/fav.png')}}" type="image/gif">
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link rel="stylesheet" type="text/css" href="/C45/css/plugins-css.css" />
<link rel="stylesheet" type="text/css" href="/C45/css/typography.css" />
<link rel="stylesheet" type="text/css" href="/C45/css/shortcodes/shortcodes.css" />
<link rel="stylesheet" type="text/css" href="/C45/css/stylelp.css" />
<link rel="stylesheet" type="text/css" href="/C45/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="/C45/css/custom.css" />
<link rel="stylesheet" type="text/css" href="/X45/plugins/themify-icons.css">
<link rel="stylesheet" type="text/css" href="/X45//X45.css">
<link rel="stylesheet" type="text/css" href="/X45/action-box.css">
<link rel="canonical" href="{{ Request::fullUrl() }}" />
<link rel="alternate" hreflang="en-ca" href="{{ Request::fullUrl() }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="p:domain_verify" content="75004b9c2621597d028016a30c07bfb7"/>
<script defer src="/C45/js/script.js"></script>
<style>
.bluebackground {
    background: -webkit-linear-gradient(top, #192731 39%, #213d52 95%);
    background: linear-gradient(to bottom, #192731 39%, #213d52 95%);
}

.deepshd {
  color: #e0dfdc;
  /* background-color: #333; */
  letter-spacing: .1em;
  text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 1px 0 #242424, 0 1px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 5px 0 #1c1c1c, 0 1px 0 #1a1a1a, 0 1px 0 #181818, 0 1px 0 #161616, 0 1px 0 #141414, 0 0px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
}
</style>
