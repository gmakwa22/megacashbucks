<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\SEOMeta;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;


class LpController extends Controller
{
    //use Traits\Tracking;
    public $admin_details;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function tracker(){

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
           // Session::forget('purl');
       }

     }

     
  public function instantcashloan() { $track = $this->tracker();
   $txtlp = '<h1>Instant Cash Loan</h1><p>Forget those line-ups down at the brick-and-mortar joint. You can apply for this instant cash loan Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "Instant Cash Loan", "headtxtcolor" => "white", "headalt" => "Instant Cash Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Instant Cash Loan');
    SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this instant cash loan Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.');
    SEOMeta::addKeyword('instant cash loan, get a personal loan, easy cash canada, a loan, no credit check loan, online lending, quick loans online, payday loans bad credit, bad credit lenders');
              return view('lp.lptemplate', $data);
            }
            
  public function getapersonalloan() { $track = $this->tracker();
   $txtlp = '<h1>Get A Personal Loan</h1><p>Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadian residents to apply, get approved, and receive their funds, all in the same day.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Get A Personal Loan", "headtxtcolor" => "white", "headalt" => "Get A Personal Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Get A Personal Loan');
    SEOMeta::setDescription('Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadian residents to apply, get approved, and receive their funds, all in the same day.');
    SEOMeta::addKeyword('get a personal loan, easy cash canada, a loan, no credit check loan, online lending, quick loans online, payday loans bad credit, bad credit lenders, no credit check payday loans');
              return view('lp.lptemplate', $data);
            }
  public function easycashcanada() { $track = $this->tracker();
   $txtlp = '<h1>Easy Cash Canada</h1><p>We offer you an Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/3.jpg", "martop" => "30", "headpg" => "Easy Cash Canada", "headtxtcolor" => "white", "headalt" => "Easy Cash Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Cash Canada');
    SEOMeta::setDescription('We offer you an Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('easy cash canada, a loan, no credit check loan, online lending, quick loans online, payday loans bad credit, bad credit lenders, no credit check payday loans, instant personal loan');
              return view('lp.lptemplate', $data);
            }
  public function aloan() { $track = $this->tracker();
  $txtlp = '<h1>A Loan</h1><p>If you’re looking for a Payday Loans, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
  $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "A Loan", "headtxtcolor" => "white", "headalt" => "A Loan", "land" => "1", "lptxt" => $txtlp];
  SEOMeta::setTitle('A Loan');
  SEOMeta::setDescription('If you’re looking for a Payday Loans, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
  SEOMeta::addKeyword('a loan, no credit check loan, online lending, quick loans online, payday loans bad credit, bad credit lenders, no credit check payday loans, instant personal loan, payday advance');
    return view('lp.lptemplate', $data);
            }
  public function nocreditcheckloan() { $track = $this->tracker();
   $txtlp = '<h1>No Credit Check Loan</h1><p>Mega Cash Bucks has brought a great solution. In fact, two of them! We have a Payday Loans. This is one you can pay back in 1,2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/5.jpg", "martop" => "30", "headpg" => "No Credit Check Loan", "headtxtcolor" => "white", "headalt" => "No Credit Check Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('No Credit Check Loan');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. In fact, two of them! We have a Payday Loans. This is one you can pay back in 1,2 or 3 installments.');
    SEOMeta::addKeyword('no credit check loan, online lending, quick loans online, payday loans bad credit, bad credit lenders, no credit check payday loans, instant personal loan, payday advance, payday loans alberta');
              return view('lp.lptemplate', $data);
            }
  public function onlinelending() { $track = $this->tracker();
   $txtlp = '<h1>Online Lending</h1><p>If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "Online Lending", "headtxtcolor" => "white", "headalt" => "Online Lending", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Online Lending');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('online lending, quick loans online, payday loans bad credit, bad credit lenders, no credit check payday loans, instant personal loan, payday advance, payday loans alberta, loan without credit check');
              return view('lp.lptemplate', $data);
            }
  public function quickloansonline() { $track = $this->tracker();
   $txtlp = '<h1>Quick Loans Online</h1><p>We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/7.jpg", "martop" => "30", "headpg" => "Quick Loans Online", "headtxtcolor" => "white", "headalt" => "Quick Loans Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Loans Online');
    SEOMeta::setDescription('We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('quick loans online, payday loans bad credit, bad credit lenders, no credit check payday loans, instant personal loan, payday advance, payday loans alberta, loan without credit check, easy personal loans');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansbadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Bad Credit</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/8.jpg", "martop" => "30", "headpg" => "Payday Loans Bad Credit", "headtxtcolor" => "white", "headalt" => "Payday Loans Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Bad Credit');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('payday loans bad credit, bad credit lenders, no credit check payday loans, instant personal loan, payday advance, payday loans alberta, loan without credit check, easy personal loans, cash loans');
              return view('lp.lptemplate', $data);
            }
  public function badcreditlenders() { $track = $this->tracker();
   $txtlp = '<h1>Bad Credit Lenders</h1><p>Canadian residents are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.</p>';
   $data = ["bannerbg" => "land/9.jpg", "martop" => "30", "headpg" => "Bad Credit Lenders", "headtxtcolor" => "white", "headalt" => "Bad Credit Lenders", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Bad Credit Lenders');
    SEOMeta::setDescription('Canadian residents are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.');
    SEOMeta::addKeyword('bad credit lenders, no credit check payday loans, instant personal loan, payday advance, payday loans alberta, loan without credit check, easy personal loans, cash loans, cash loans today');
              return view('lp.lptemplate', $data);
            }
  public function nocreditcheckpaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>No Credit Check Payday Loans</h1><p>Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/10.jpg", "martop" => "30", "headpg" => "No Credit Check Payday Loans", "headtxtcolor" => "white", "headalt" => "No Credit Check Payday Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('No Credit Check Payday Loans');
    SEOMeta::setDescription('Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('no credit check payday loans, instant personal loan, payday advance, payday loans alberta, loan without credit check, easy personal loans, cash loans, cash loans today, a loans');
              return view('lp.lptemplate', $data);
            }
  public function instantpersonalloan() { $track = $this->tracker();
   $txtlp = '<h1>Instant Personal Loan</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/11.jpg", "martop" => "30", "headpg" => "Instant Personal Loan", "headtxtcolor" => "white", "headalt" => "Instant Personal Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Instant Personal Loan');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('instant personal loan, payday advance, payday loans alberta, loan without credit check, easy personal loans, cash loans, cash loans today, a loans, instant cash advance online');
              return view('lp.lptemplate', $data);
            }
  public function paydayadvance() { $track = $this->tracker();
   $txtlp = '<h1>Payday Advance</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/12.jpg", "martop" => "30", "headpg" => "Payday Advance", "headtxtcolor" => "white", "headalt" => "Payday Advance", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Advance');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('payday advance, payday loans alberta, loan without credit check, easy personal loans, cash loans, cash loans today, a loans, instant cash advance online, cash loans online');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansalberta() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Alberta</h1><p>Look forward to more great Payday Loans in Alberta opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/13.jpg", "martop" => "30", "headpg" => "Payday Loans Alberta", "headtxtcolor" => "white", "headalt" => "Payday Loans Alberta", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Alberta');
    SEOMeta::setDescription('Look forward to more great Payday Loans in Alberta opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('payday loans alberta, loan without credit check, easy personal loans, cash loans, cash loans today, a loans, instant cash advance online, cash loans online, unemployed loans');
              return view('lp.lptemplate', $data);
            }
  public function loanwithoutcreditcheck() { $track = $this->tracker();
   $txtlp = '<h1>Loan Without Credit Check</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/14.jpg", "martop" => "30", "headpg" => "Loan Without Credit Check", "headtxtcolor" => "white", "headalt" => "Loan Without Credit Check", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loan Without Credit Check');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('loan without credit check, easy personal loans, cash loans, cash loans today, a loans, instant cash advance online, cash loans online, unemployed loans, payday lenders');
              return view('lp.lptemplate', $data);
            }
  public function easypersonalloans() { $track = $this->tracker();
   $txtlp = '<h1>Easy Personal Loans</h1><p>Mega Cash Bucks has brought a great solution. In fact, two of them! We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/15.jpg", "martop" => "30", "headpg" => "Easy Personal Loans", "headtxtcolor" => "white", "headalt" => "Easy Personal Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Personal Loans');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. In fact, two of them! We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
    SEOMeta::addKeyword('easy personal loans, cash loans, cash loans today, a loans, instant cash advance online, cash loans online, unemployed loans, payday lenders, Payday Loans Barrie Ontario');
              return view('lp.lptemplate', $data);
            }
  public function cashloans() { $track = $this->tracker();
   $txtlp = '<h1>Cash Loans</h1><p>Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for, and receive their funds quickly and easily.</p>';
   $data = ["bannerbg" => "land/16.jpg", "martop" => "30", "headpg" => "Cash Loans", "headtxtcolor" => "white", "headalt" => "Cash Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Loans');
    SEOMeta::setDescription('Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for, and receive their funds quickly and easily.');
    SEOMeta::addKeyword('cash loans, cash loans today, a loans, instant cash advance online, cash loans online, unemployed loans, payday lenders, Payday Loans Barrie Ontario, personal loans online');
              return view('lp.lptemplate', $data);
            }
  public function cashloanstoday() { $track = $this->tracker();
   $txtlp = '<h1>Cash Loans Today</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/17.jpg", "martop" => "30", "headpg" => "Cash Loans Today", "headtxtcolor" => "white", "headalt" => "Cash Loans Today", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Loans Today');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('cash loans today, a loans, instant cash advance online, cash loans online, unemployed loans, payday lenders, Payday Loans Barrie Ontario, personal loans online, same day cash loans');
              return view('lp.lptemplate', $data);
            }
  public function aloans() { $track = $this->tracker();
   $txtlp = '<h1>A Loans</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/18.jpg", "martop" => "30", "headpg" => "A Loans", "headtxtcolor" => "white", "headalt" => "A Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('A Loans');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('a loans, instant cash advance online, cash loans online, unemployed loans, payday lenders, Payday Loans Barrie Ontario, personal loans online, same day cash loans, quick cash advance');
              return view('lp.lptemplate', $data);
            }
  public function instantcashadvanceonline() { $track = $this->tracker();
   $txtlp = '<h1>Instant Cash Advance Online</h1><p>Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/19.jpg", "martop" => "30", "headpg" => "Instant Cash Advance Online", "headtxtcolor" => "white", "headalt" => "Instant Cash Advance Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Instant Cash Advance Online');
    SEOMeta::setDescription('Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('instant cash advance online, cash loans online, unemployed loans, payday lenders, Payday Loans Barrie Ontario, personal loans online, same day cash loans, quick cash advance, poor credit');
              return view('lp.lptemplate', $data);
            }
  public function cashloansonline() { $track = $this->tracker();
   $txtlp = '<h1>Cash Loans Online</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/20.jpg", "martop" => "30", "headpg" => "Cash Loans Online", "headtxtcolor" => "white", "headalt" => "Cash Loans Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Loans Online');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('cash loans online, unemployed loans, payday lenders, Payday Loans Barrie Ontario, personal loans online, same day cash loans, quick cash advance, poor credit, loan places in edmonton');
              return view('lp.lptemplate', $data);
            }
  public function unemployedloans() { $track = $this->tracker();
   $txtlp = '<h1>Unemployed Loans</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/21.jpg", "martop" => "30", "headpg" => "Unemployed Loans", "headtxtcolor" => "white", "headalt" => "Unemployed Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Unemployed Loans');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('unemployed loans, payday lenders, Payday Loans Barrie Ontario, personal loans online, same day cash loans, quick cash advance, poor credit, loan places in edmonton, loans london ontario');
              return view('lp.lptemplate', $data);
            }
  public function paydaylenders() { $track = $this->tracker();
   $txtlp = '<h1>Payday Lenders</h1><p>Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/22.jpg", "martop" => "30", "headpg" => "Payday Lenders", "headtxtcolor" => "white", "headalt" => "Payday Lenders", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Lenders');
    SEOMeta::setDescription('Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('payday lenders, Payday Loans Barrie Ontario, personal loans online, same day cash loans, quick cash advance, poor credit, loan places in edmonton, loans london ontario, cash canada loans');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansbarrieontario() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Barrie Ontario</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/23.jpg", "martop" => "30", "headpg" => "Payday Loans Barrie Ontario", "headtxtcolor" => "white", "headalt" => "Payday Loans Barrie Ontario", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Barrie Ontario');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('Payday Loans Barrie Ontario, personal loans online, same day cash loans, quick cash advance, poor credit, loan places in edmonton, loans london ontario, cash canada loans, help with rent');
              return view('lp.lptemplate', $data);
            }
  public function personalloansonline() { $track = $this->tracker();
   $txtlp = '<h1>Personal Loans Online</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/24.jpg", "martop" => "30", "headpg" => "Personal Loans Online", "headtxtcolor" => "white", "headalt" => "Personal Loans Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Personal Loans Online');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('personal loans online, same day cash loans, quick cash advance, poor credit, loan places in edmonton, loans london ontario, cash canada loans, help with rent, Payday Loans Kingston');
              return view('lp.lptemplate', $data);
            }
  public function samedaycashloans() { $track = $this->tracker();
   $txtlp = '<h1>Same Day Cash Loans</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/25.jpg", "martop" => "30", "headpg" => "Same Day Cash Loans", "headtxtcolor" => "white", "headalt" => "Same Day Cash Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Same Day Cash Loans');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('same day cash loans, quick cash advance, poor credit, loan places in edmonton, loans london ontario, cash canada loans, help with rent, Payday Loans Kingston, cash advance payday loans');
              return view('lp.lptemplate', $data);
            }
  public function quickcashadvance() { $track = $this->tracker();
   $txtlp = '<h1>Quick Cash Advance</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/26.jpg", "martop" => "30", "headpg" => "Quick Cash Advance", "headtxtcolor" => "white", "headalt" => "Quick Cash Advance", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Cash Advance');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('quick cash advance, poor credit, loan places in edmonton, loans london ontario, cash canada loans, help with rent, Payday Loans Kingston, cash advance payday loans, instant loan');
              return view('lp.lptemplate', $data);
            }
  public function poorcredit() { $track = $this->tracker();
   $txtlp = '<h1>Poor Credit</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/27.jpg", "martop" => "30", "headpg" => "Poor Credit", "headtxtcolor" => "white", "headalt" => "Poor Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Poor Credit');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('poor credit, loan places in edmonton, loans london ontario, cash canada loans, help with rent, Payday Loans Kingston, cash advance payday loans, instant loan, easy cash loans');
              return view('lp.lptemplate', $data);
            }
  public function loanplacesinedmonton() { $track = $this->tracker();
   $txtlp = '<h1>Loan Places in Edmonton</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "Loan Places in Edmonton", "headtxtcolor" => "white", "headalt" => "Loan Places in Edmonton", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loan Places in Edmonton');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('loan places in edmonton, loans london ontario, cash canada loans, help with rent, Payday Loans Kingston, cash advance payday loans, instant loan, easy cash loans, short term loans no credit check');
              return view('lp.lptemplate', $data);
            }
  public function loanslondonontario() { $track = $this->tracker();
   $txtlp = '<h1>Loans London Ontario</h1><p>If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Loans London Ontario", "headtxtcolor" => "white", "headalt" => "Loans London Ontario", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loans London Ontario');
    SEOMeta::setDescription('If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('loans london ontario, cash canada loans, help with rent, Payday Loans Kingston, cash advance payday loans, instant loan, easy cash loans, short term loans no credit check, king payday loans');
              return view('lp.lptemplate', $data);
            }
  public function cashcanadaloans() { $track = $this->tracker();
   $txtlp = '<h1>Cash Canada Loans</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/3.jpg", "martop" => "30", "headpg" => "Cash Canada Loans", "headtxtcolor" => "white", "headalt" => "Cash Canada Loanss", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Canada Loans');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('cash canada loans, help with rent, Payday Loans Kingston, cash advance payday loans, instant loan, easy cash loans, short term loans no credit check, king payday loans, loansloans');
              return view('lp.lptemplate', $data);
            }
  public function helpwithrent() { $track = $this->tracker();
   $txtlp = '<h1>Help With Rent</h1><p>If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "Help With Rent", "headtxtcolor" => "white", "headalt" => "Help With Rent", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Help With Rent');
    SEOMeta::setDescription('If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('help with rent, Payday Loans Kingston, cash advance payday loans, instant loan, easy cash loans, short term loans no credit check, king payday loans, loansloans, personal loan online apply');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanskingston() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Kingston</h1><p>We know that things happen in life and sometimes you need Payday Loans in Kingston for unexpected expenses.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "Payday Loans Kingston", "headtxtcolor" => "white", "headalt" => "Payday Loans Kingston", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Kingston');
    SEOMeta::setDescription('We know that things happen in life and sometimes you need Payday Loans in Kingston for unexpected expenses.');
    SEOMeta::addKeyword('Payday Loans Kingston, cash advance payday loans, instant loan, easy cash loans, short term loans no credit check, king payday loans, loansloans, personal loan online apply, easy cash advance');
              return view('lp.lptemplate', $data);
            }
  public function cashadvancepaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>Cash Advance Payday Loans</h1><p>Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "Cash Advance Payday Loans", "headtxtcolor" => "white", "headalt" => "Cash Advance Payday Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Advance Payday Loans');
    SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.');
    SEOMeta::addKeyword('cash advance payday loans, instant loan, easy cash loans, short term loans no credit check, king payday loans, loansloans, personal loan online apply, easy cash advance, fast cash loans');
              return view('lp.lptemplate', $data);
            }
  public function instantloan() { $track = $this->tracker();
   $txtlp = '<h1>Instant Loan</h1><p>Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.</p>';
   $data = ["bannerbg" => "land/7.jpg", "martop" => "30", "headpg" => "Instant Loan", "headtxtcolor" => "white", "headalt" => "Instant Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Instant Loan');
    SEOMeta::setDescription('Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.');
    SEOMeta::addKeyword('instant loan, easy cash loans, short term loans no credit check, king payday loans, loansloans, personal loan online apply, easy cash advance, fast cash loans, loans and');
              return view('lp.lptemplate', $data);
            }
  public function easycashloans() { $track = $this->tracker();
   $txtlp = '<h1>Easy Cash Loans</h1><p>We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/8.jpg", "martop" => "30", "headpg" => "Easy Cash Loans", "headtxtcolor" => "white", "headalt" => "Easy Cash Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Cash Loans');
    SEOMeta::setDescription('We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('easy cash loans, short term loans no credit check, king payday loans, loansloans, personal loan online apply, easy cash advance, fast cash loans, loans and, quick cash loans');
              return view('lp.lptemplate', $data);
            }
  public function shorttermloansnocreditcheck() { $track = $this->tracker();
   $txtlp = '<h1>Short Term Loans No Credit Check</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/9.jpg", "martop" => "30", "headpg" => "Short Term Loans No Credit Check", "headtxtcolor" => "white", "headalt" => "Short Term Loans No Credit Check", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Short Term Loans No Credit Check');
    SEOMeta::setDescription('If you’re looking for a short yerm loans no credit check with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('short term loans no credit check, king payday loans, loansloans, personal loan online apply, easy cash advance, fast cash loans, loans and, quick cash loans, cash advance loans online');
              return view('lp.lptemplate', $data);
            }
  public function kingpaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>King Payday Loans</h1><p>moretexthere</p>';
   $data = ["bannerbg" => "land/10.jpg", "martop" => "30", "headpg" => "King Payday Loans", "headtxtcolor" => "white", "headalt" => "King Payday Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('King Payday Loans');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. In fact, two of them! We have a King Payday Loans. This is one you can pay back in a 1, 2, or 3 installments.');
    SEOMeta::addKeyword('king payday loans, loansloans, personal loan online apply, easy cash advance, fast cash loans, loans and, quick cash loans, cash advance loans online, Payday Loans Stratford');
              return view('lp.lptemplate', $data);
            }
  public function loansloans() { $track = $this->tracker();
   $txtlp = '<h1>Loansloans</h1><p>If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/11.jpg", "martop" => "30", "headpg" => "Loansloans", "headtxtcolor" => "white", "headalt" => "Loansloans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loansloans');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('loansloans, personal loan online apply, easy cash advance, fast cash loans, loans and, quick cash loans, cash advance loans online, Payday Loans Stratford, day pay loans');
              return view('lp.lptemplate', $data);
            }
  public function personalloanonlineapply() { $track = $this->tracker();
   $txtlp = '<h1>Personal Loan Online Apply</h1><p>We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/12.jpg", "martop" => "30", "headpg" => "Personal Loan Online Apply", "headtxtcolor" => "white", "headalt" => "Personal Loan Online Apply", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Personal Loan Online Apply');
    SEOMeta::setDescription('We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('personal loan online apply, easy cash advance, fast cash loans, loans and, quick cash loans, cash advance loans online, Payday Loans Stratford, day pay loans, fast cash advance');
              return view('lp.lptemplate', $data);
            }
  public function easycashadvance() { $track = $this->tracker();
   $txtlp = '<h1>Easy Cash Advance</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/13.jpg", "martop" => "30", "headpg" => "Easy Cash Advance", "headtxtcolor" => "white", "headalt" => "Easy Cash Advance", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Cash Advance');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('easy cash advance, fast cash loans, loans and, quick cash loans, cash advance loans online, Payday Loans Stratford, day pay loans, fast cash advance, personal loans online approval');
              return view('lp.lptemplate', $data);
            }
  public function fastcashloans() { $track = $this->tracker();
   $txtlp = '<h1>Fast Cash Loans</h1><p>Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.s</p>';
   $data = ["bannerbg" => "land/14.jpg", "martop" => "30", "headpg" => "Fast Cash Loans", "headtxtcolor" => "white", "headalt" => "Fast Cash Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Cash Loans');
    SEOMeta::setDescription('Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.');
    SEOMeta::addKeyword('fast cash loans, loans and, quick cash loans, cash advance loans online, Payday Loans Stratford, day pay loans, fast cash advance, personal loans online approval, xtra cash');
              return view('lp.lptemplate', $data);
            }
  public function loansand() { $track = $this->tracker();
   $txtlp = '<h1>Loans And</h1><p>Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/15.jpg", "martop" => "30", "headpg" => "Loans And", "headtxtcolor" => "white", "headalt" => "Loans And", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loans And');
    SEOMeta::setDescription('Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('loans and, quick cash loans, cash advance loans online, Payday Loans Stratford, day pay loans, fast cash advance, personal loans online approval, xtra cash, money for cash');
              return view('lp.lptemplate', $data);
            }
  public function quickcashloans() { $track = $this->tracker();
   $txtlp = '<h1>Quick Cash Loans</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/16.jpg", "martop" => "30", "headpg" => "Quick Cash Loans", "headtxtcolor" => "white", "headalt" => "Quick Cash Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Cash Loans');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('quick cash loans, cash advance loans online, Payday Loans Stratford, day pay loans, fast cash advance, personal loans online approval, xtra cash, money for cash, check for cash');
              return view('lp.lptemplate', $data);
            }
  public function cashadvanceloansonline() { $track = $this->tracker();
   $txtlp = '<h1>Cash Advance Loans Online</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/17.jpg", "martop" => "30", "headpg" => "Cash Advance Loans Online", "headtxtcolor" => "white", "headalt" => "Cash Advance Loans Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Advance Loans Online');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('cash advance loans online, Payday Loans Stratford, day pay loans, fast cash advance, personal loans online approval, xtra cash, money for cash, check for cash, easy to get payday loans');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansstratford() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Stratford</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/18.jpg", "martop" => "30", "headpg" => "Payday Loans Stratford", "headtxtcolor" => "white", "headalt" => "Payday Loans Stratford", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Stratford');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('Payday Loans Stratford, day pay loans, fast cash advance, personal loans online approval, xtra cash, money for cash, check for cash, easy to get payday loans, cash loans bad credit');
              return view('lp.lptemplate', $data);
            }
  public function daypayloans() { $track = $this->tracker();
   $txtlp = '<h1>Day Pay Loans</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/19.jpg", "martop" => "30", "headpg" => "Day Pay Loans", "headtxtcolor" => "white", "headalt" => "Day Pay Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Day Pay Loans');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('day pay loans, fast cash advance, personal loans online approval, xtra cash, money for cash, check for cash, easy to get payday loans, cash loans bad credit, payday cash advance');
              return view('lp.lptemplate', $data);
            }
  public function fastcashadvance() { $track = $this->tracker();
   $txtlp = '<h1>Fast Cash Advance</h1><p>Mega Cash Bucks has brought a great solution. In fact, two of them! We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/20.jpg", "martop" => "30", "headpg" => "Fast Cash Advance", "headtxtcolor" => "white", "headalt" => "Fast Cash Advance", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Cash Advance');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. In fact, two of them! We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
    SEOMeta::addKeyword('fast cash advance, personal loans online approval, xtra cash, money for cash, check for cash, easy to get payday loans, cash loans bad credit, payday cash advance, quick payday loans');
              return view('lp.lptemplate', $data);
            }
  public function personalloansonlineapproval() { $track = $this->tracker();
   $txtlp = '<h1>Personal Loans Online Approval</h1><p>Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for, and receive their funds quickly and easily.</p>';
   $data = ["bannerbg" => "land/21.jpg", "martop" => "30", "headpg" => "Personal Loans Online Approval", "headtxtcolor" => "white", "headalt" => "Personal Loans Online Approval", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Personal Loans Online Approval');
    SEOMeta::setDescription('Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for, and receive their funds quickly and easily.');
    SEOMeta::addKeyword('personal loans online approval, xtra cash, money for cash, check for cash, easy to get payday loans, cash loans bad credit, payday cash advance, quick payday loans, Payday Loans Toronto Ontario');
              return view('lp.lptemplate', $data);
            }
  public function xtracash() { $track = $this->tracker();
   $txtlp = '<h1>Xtra Cash</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/22.jpg", "martop" => "30", "headpg" => "Xtra Cash", "headtxtcolor" => "white", "headalt" => "Xtra Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Xtra Cash');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('xtra cash, money for cash, check for cash, easy to get payday loans, cash loans bad credit, payday cash advance, quick payday loans, Payday Loans Toronto Ontario, cash pawn');
              return view('lp.lptemplate', $data);
            }
  public function moneyforcash() { $track = $this->tracker();
   $txtlp = '<h1>Money For Cash</h1><p>Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/23.jpg", "martop" => "30", "headpg" => "Money For Cash", "headtxtcolor" => "white", "headalt" => "Money For Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money For Cash');
    SEOMeta::setDescription('Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('money for cash, check for cash, easy to get payday loans, cash loans bad credit, payday cash advance, quick payday loans, Payday Loans Toronto Ontario, cash pawn, small personal loans');
              return view('lp.lptemplate', $data);
            }
  public function checkforcash() { $track = $this->tracker();
   $txtlp = '<h1>Check For Cash</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/24.jpg", "martop" => "30", "headpg" => "Check For Cash", "headtxtcolor" => "white", "headalt" => "Check For Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Check For Cash');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('check for cash, easy to get payday loans, cash loans bad credit, payday cash advance, quick payday loans, Payday Loans Toronto Ontario, cash pawn, small personal loans, icash');
              return view('lp.lptemplate', $data);
            }
  public function easytogetpaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>Easy To Get Payday Loans</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/25.jpg", "martop" => "30", "headpg" => "Easy To Get Payday Loans", "headtxtcolor" => "white", "headalt" => "Easy To Get Payday Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy To Get Payday Loans');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('easy to get payday loans, cash loans bad credit, payday cash advance, quick payday loans, Payday Loans Toronto Ontario, cash pawn, small personal loans, icash, 24 cash loans');
              return view('lp.lptemplate', $data);
            }
  public function cashloansbadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Cash Loans Bad Credit</h1><p>Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/26.jpg", "martop" => "30", "headpg" => "Cash Loans Bad Credit", "headtxtcolor" => "white", "headalt" => "Cash Loans Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Loans Bad Credit');
    SEOMeta::setDescription('Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('cash loans bad credit, payday cash advance, quick payday loans, Payday Loans Toronto Ontario, cash pawn, small personal loans, icash, 24 cash loans, get cash');
              return view('lp.lptemplate', $data);
            }
  public function paydaycashadvance() { $track = $this->tracker();
   $txtlp = '<h1>Payday Cash Advance</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/27.jpg", "martop" => "30", "headpg" => "Payday Cash Advance", "headtxtcolor" => "white", "headalt" => "Payday Cash Advance", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Cash Advance');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday cash advance, quick payday loans, Payday Loans Toronto Ontario, cash pawn, small personal loans, icash, 24 cash loans, get cash, instant loans');
              return view('lp.lptemplate', $data);
            }
  public function quickpaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>Quick Payday Loans</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "Quick Payday Loans", "headtxtcolor" => "white", "headalt" => "Quick Payday Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Payday Loans');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('quick payday loans, Payday Loans Toronto Ontario, cash pawn, small personal loans, icash, 24 cash loans, get cash, instant loans, payday loan');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanstorontoontario() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Toronto Ontario</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Payday Loans Toronto Ontario", "headtxtcolor" => "white", "headalt" => "Payday Loans Toronto Ontario", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Toronto Ontario');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('Payday Loans Toronto Ontario, cash pawn, small personal loans, icash, 24 cash loans, get cash, instant loans, payday loan, money direct');
              return view('lp.lptemplate', $data);
            }
  public function cashpawn() { $track = $this->tracker();
   $txtlp = '<h1>Cash Pawn</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/3.jpg", "martop" => "30", "headpg" => "Cash Pawn", "headtxtcolor" => "white", "headalt" => "Cash Pawn", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Pawn');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('cash pawn, small personal loans, icash, 24 cash loans, get cash, instant loans, payday loan, money direct, instant cash loans');
              return view('lp.lptemplate', $data);
            }
  public function smallpersonalloans() { $track = $this->tracker();
   $txtlp = '<h1>Small Personal Loans</h1><p>Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "Small Personal Loans", "headtxtcolor" => "white", "headalt" => "Small Personal Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Small Personal Loans');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
    SEOMeta::addKeyword('small personal loans, icash, 24 cash loans, get cash, instant loans, payday loan, money direct, instant cash loans, payday cash advance near me');
              return view('lp.lptemplate', $data);
            }
  public function icash() { $track = $this->tracker();
   $txtlp = '<h1>ICash</h1><p>Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for, and receive their funds quickly and easily.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "ICash", "headtxtcolor" => "white", "headalt" => "ICash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('ICash');
    SEOMeta::setDescription('Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for, and receive their funds quickly and easily.');
    SEOMeta::addKeyword('icash, 24 cash loans, get cash, instant loans, payday loan, money direct, instant cash loans, payday cash advance near me, lending services');
              return view('lp.lptemplate', $data);
            }
  public function cashloans24() { $track = $this->tracker();
   $txtlp = '<h1>24 Cash Loans</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "24 Cash Loans", "headtxtcolor" => "white", "headalt" => "24 Cash Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('24 Cash Loans');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('24 cash loans, get cash, instant loans, payday loan, money direct, instant cash loans, payday cash advance near me, lending services, loan applications');
              return view('lp.lptemplate', $data);
            }
  public function getcash() { $track = $this->tracker();
   $txtlp = '<h1>Get Cash</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/7.jpg", "martop" => "30", "headpg" => "Get Cash", "headtxtcolor" => "white", "headalt" => "Get Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Get Cash');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('get cash, instant loans, payday loan, money direct, instant cash loans, payday cash advance near me, lending services, loan applications, online loans canada');
              return view('lp.lptemplate', $data);
            }
  public function instantloans() { $track = $this->tracker();
   $txtlp = '<h1>Instant Loans</h1><p>Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/8.jpg", "martop" => "30", "headpg" => "Instant Loans", "headtxtcolor" => "white", "headalt" => "Instant Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Instant Loans');
    SEOMeta::setDescription('Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('instant loans, payday loan, money direct, instant cash loans, payday cash advance near me, lending services, loan applications, online loans canada, Payday Loans Edmonton');
              return view('lp.lptemplate', $data);
            }
  public function paydayloan() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loan</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/9.jpg", "martop" => "30", "headpg" => "Payday Loan", "headtxtcolor" => "white", "headalt" => "Payday Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loan');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday loan, money direct, instant cash loans, payday cash advance near me, lending services, loan applications, online loans canada, Payday Loans Edmonton, Payday Loans Oshawa Ontario');
              return view('lp.lptemplate', $data);
            }
  public function moneydirect() { $track = $this->tracker();
   $txtlp = '<h1>Money Direct</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/10.jpg", "martop" => "30", "headpg" => "Money Direct", "headtxtcolor" => "white", "headalt" => "Money Direct", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money Direct');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('money direct, instant cash loans, payday cash advance near me, lending services, loan applications, online loans canada, Payday Loans Edmonton, Payday Loans Oshawa Ontario, payday loan places');
              return view('lp.lptemplate', $data);
            }
  public function instantcashloans() { $track = $this->tracker();
   $txtlp = '<h1>Instant Cash Loans</h1><p>Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/11.jpg", "martop" => "30", "headpg" => "Instant Cash Loans", "headtxtcolor" => "white", "headalt" => "Instant Cash Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Instant Cash Loans');
    SEOMeta::setDescription('Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('instant cash loans, payday cash advance near me, lending services, loan applications, online loans canada, Payday Loans Edmonton, Payday Loans Oshawa Ontario, payday loan places, instant emergency loan');
              return view('lp.lptemplate', $data);
            }
  public function paydaycashadvancenearme() { $track = $this->tracker();
   $txtlp = '<h1>Payday Cash Advance Near Me</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/12.jpg", "martop" => "30", "headpg" => "Payday Cash Advance Near Me", "headtxtcolor" => "white", "headalt" => "Payday Cash Advance Near Me", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Cash Advance Near Me');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday cash advance near me, lending services, loan applications, online loans canada, Payday Loans Edmonton, Payday Loans Oshawa Ontario, payday loan places, instant emergency loan, payday loans bc');
              return view('lp.lptemplate', $data);
            }
  public function lendingservices() { $track = $this->tracker();
   $txtlp = '<h1>Lending Services</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/13.jpg", "martop" => "30", "headpg" => "Lending Services", "headtxtcolor" => "white", "headalt" => "Lending Services", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Lending Services');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('lending services, loan applications, online loans canada, Payday Loans Edmonton, Payday Loans Oshawa Ontario, payday loan places, instant emergency loan, payday loans bc, money fast');
              return view('lp.lptemplate', $data);
            }
  public function loanapplications() { $track = $this->tracker();
   $txtlp = '<h1>Loan Applications</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/14.jpg", "martop" => "30", "headpg" => "Loan Applications", "headtxtcolor" => "white", "headalt" => "Loan Applications", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loan Applications');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('loan applications, online loans canada, Payday Loans Edmonton, Payday Loans Oshawa Ontario, payday loan places, instant emergency loan, payday loans bc, money fast, instant payday loans');
              return view('lp.lptemplate', $data);
            }
  public function onlineloanscanada() { $track = $this->tracker();
   $txtlp = '<h1>Online Loans Canada</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/15.jpg", "martop" => "30", "headpg" => "Online Loans Canada", "headtxtcolor" => "white", "headalt" => "Online Loans Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Online Loans Canada');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('online loans canada, Payday Loans Edmonton, Payday Loans Oshawa Ontario, payday loan places, instant emergency loan, payday loans bc, money fast, instant payday loans, money loans canada');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansedmonton() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Edmonton</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/16.jpg", "martop" => "30", "headpg" => "Payday Loans Edmonton", "headtxtcolor" => "white", "headalt" => "Payday Loans Edmonton", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Edmonton');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('Payday Loans Edmonton, Payday Loans Oshawa Ontario, payday loan places, instant emergency loan, payday loans bc, money fast, instant payday loans, money loans canada, Payday Loans London Ontario');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansoshawaontario() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Oshawa Ontario</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/17.jpg", "martop" => "30", "headpg" => "Payday Loans Oshawa Ontario", "headtxtcolor" => "white", "headalt" => "Payday Loans Oshawa Ontario", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Oshawa Ontario');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('Payday Loans Oshawa Ontario, payday loan places, instant emergency loan, payday loans bc, money fast, instant payday loans, money loans canada, Payday Loans London Ontario, cash loans no credit check');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanplaces() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loan Place</h1><p>If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/18.jpg", "martop" => "30", "headpg" => "Payday Loan Place", "headtxtcolor" => "white", "headalt" => "Payday Loan Place", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loan Place');
    SEOMeta::setDescription('If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday loan places, instant emergency loan, payday loans bc, money fast, instant payday loans, money loans canada, Payday Loans London Ontario, cash loans no credit check, short term loans bad credit');
              return view('lp.lptemplate', $data);
            }
  public function instantemergencyloan() { $track = $this->tracker();
   $txtlp = '<h1>Instant Emergency Loan</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/19.jpg", "martop" => "30", "headpg" => "Instant Emergency Loan", "headtxtcolor" => "white", "headalt" => "Instant Emergency Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Instant Emergency Loan');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('instant emergency loan, payday loans bc, money fast, instant payday loans, money loans canada, Payday Loans London Ontario, cash loans no credit check, short term loans bad credit, payday loans online');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansbc() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans BC</h1><p>If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/20.jpg", "martop" => "30", "headpg" => "Payday Loans BC", "headtxtcolor" => "white", "headalt" => "Payday Loans BC", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans BC');
    SEOMeta::setDescription('If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday loans bc, money fast, instant payday loans, money loans canada, Payday Loans London Ontario, cash loans no credit check, short term loans bad credit, payday loans online, quick short term loans');
              return view('lp.lptemplate', $data);
            }
  public function moneyfast() { $track = $this->tracker();
   $txtlp = '<h1>Money Fast</h1><p>We know that things happen in life and sometimes you need money fast for unexpected expenses.</p>';
   $data = ["bannerbg" => "land/21.jpg", "martop" => "30", "headpg" => "Money Fast", "headtxtcolor" => "white", "headalt" => "Money Fast", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money Fast');
    SEOMeta::setDescription('We know that things happen in life and sometimes you need money fast for unexpected expenses.');
    SEOMeta::addKeyword('money fast, instant payday loans, money loans canada, Payday Loans London Ontario, cash loans no credit check, short term loans bad credit, payday loans online, quick short term loans, cash for');
              return view('lp.lptemplate', $data);
            }
  public function instantpaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>Instant Payday Loans</h1><p>Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.</p>';
   $data = ["bannerbg" => "land/22.jpg", "martop" => "30", "headpg" => "Instant Payday Loans", "headtxtcolor" => "white", "headalt" => "Instant Payday Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Instant Payday Loans');
    SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.');
    SEOMeta::addKeyword('instant payday loans, money loans canada, Payday Loans London Ontario, cash loans no credit check, short term loans bad credit, payday loans online, quick short term loans, cash for, loan places in winnipeg');
              return view('lp.lptemplate', $data);
            }
  public function moneyloanscanada() { $track = $this->tracker();
   $txtlp = '<h1>Money Loans Canada</h1><p>Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.</p>';
   $data = ["bannerbg" => "land/23.jpg", "martop" => "30", "headpg" => "Money Loans Canada", "headtxtcolor" => "white", "headalt" => "Money Loans Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money Loans Canada');
    SEOMeta::setDescription('Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.');
    SEOMeta::addKeyword('money loans canada, Payday Loans London Ontario, cash loans no credit check, short term loans bad credit, payday loans online, quick short term loans, cash for, loan places in winnipeg, Payday Loans Mission');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanslondonontario() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans London Ontario</h1><p>We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/24.jpg", "martop" => "30", "headpg" => "Payday Loans London Ontario", "headtxtcolor" => "white", "headalt" => "Payday Loans London Ontario", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans London Ontario');
    SEOMeta::setDescription('We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('Payday Loans London Ontario, cash loans no credit check, short term loans bad credit, payday loans online, quick short term loans, cash for, loan places in winnipeg, Payday Loans Mission, fast loans canada');
              return view('lp.lptemplate', $data);
            }
  public function cashloansnocreditcheck() { $track = $this->tracker();
   $txtlp = '<h1>Cash Loans No Credit Check</h1><p>If you’re looking for a Payday Loans, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/25.jpg", "martop" => "30", "headpg" => "Cash Loans No Credit Check", "headtxtcolor" => "white", "headalt" => "Cash Loans No Credit Check", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Loans No Credit Check');
    SEOMeta::setDescription('If you’re looking for a Payday Loans, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('cash loans no credit check, short term loans bad credit, payday loans online, quick short term loans, cash for, loan places in winnipeg, Payday Loans Mission, fast loans canada, how to get cash fast with no job');
              return view('lp.lptemplate', $data);
            }
  public function shorttermloansbadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Short Term Loans Bad Credit</h1><p>moretexthere</p>';
   $data = ["bannerbg" => "land/26.jpg", "martop" => "30", "headpg" => "Short Term Loans Bad Credit", "headtxtcolor" => "white", "headalt" => "Short Term Loans Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Short Term Loans Bad Credit');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in 1, 2 or 3 installments.');
    SEOMeta::addKeyword('short term loans bad credit, payday loans online, quick short term loans, cash for, loan places in winnipeg, Payday Loans Mission, fast loans canada, how to get cash fast with no job, short term loans online no credit check');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansonline() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Online</h1><p>If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/27.jpg", "martop" => "30", "headpg" => "Payday Loans Online", "headtxtcolor" => "white", "headalt" => "Payday Loans Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Online');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday loans online, quick short term loans, cash for, loan places in winnipeg, Payday Loans Mission, fast loans canada, how to get cash fast with no job, short term loans online no credit check, emergency personal loans bad credit');
              return view('lp.lptemplate', $data);
            }
  public function quickshorttermloans() { $track = $this->tracker();
   $txtlp = '<h1>Quick Short Term Loans</h1><p>We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "Quick Short Term Loans", "headtxtcolor" => "white", "headalt" => "Quick Short Term Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Short Term Loans');
    SEOMeta::setDescription('We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('quick short term loans, cash for, loan places in winnipeg, Payday Loans Mission, fast loans canada, how to get cash fast with no job, short term loans online no credit check, emergency personal loans bad credit, quick personal loans');
              return view('lp.lptemplate', $data);
            }
  public function cashfor() { $track = $this->tracker();
   $txtlp = '<h1>Cash For</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Cash For", "headtxtcolor" => "white", "headalt" => "Cash For", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash For');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('cash for, loan places in winnipeg, Payday Loans Mission, fast loans canada, how to get cash fast with no job, short term loans online no credit check, emergency personal loans bad credit, quick personal loans, loans for people on disability');
              return view('lp.lptemplate', $data);
            }
  public function loanplacesinwinnipeg() { $track = $this->tracker();
   $txtlp = '<h1>Loan Places In Winnipeg</h1><p>Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan in Winnipeg when life throws the unexpected at them.</p>';
   $data = ["bannerbg" => "land/3.jpg", "martop" => "30", "headpg" => "Loan Places In Winnipeg", "headtxtcolor" => "white", "headalt" => "Loan Places In Winnipeg", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loan Places In Winnipeg');
    SEOMeta::setDescription('Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan in Winnipeg when life throws the unexpected at them.');
    SEOMeta::addKeyword('loan places in winnipeg, Payday Loans Mission, fast loans canada, how to get cash fast with no job, short term loans online no credit check, emergency personal loans bad credit, quick personal loans, loans for people on disability, same day cash advance');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansmission() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Mission</h1><p>Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "Payday Loans Mission", "headtxtcolor" => "white", "headalt" => "Payday Loans Mission", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Mission');
    SEOMeta::setDescription('Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('Payday Loans Mission, fast loans canada, how to get cash fast with no job, short term loans online no credit check, emergency personal loans bad credit, quick personal loans, loans for people on disability, same day cash advance, Payday Loans Vancouver');
              return view('lp.lptemplate', $data);
            }
  public function fastloanscanada() { $track = $this->tracker();
   $txtlp = '<h2>Fast Loans Canada</h2><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/5.jpg", "martop" => "30", "headpg" => "Fast Loans Canada", "headtxtcolor" => "white", "headalt" => "Fast Loans Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Loans Canada');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('fast loans canada, how to get cash fast with no job, short term loans online no credit check, emergency personal loans bad credit, quick personal loans, loans for people on disability, same day cash advance, Payday Loans Vancouver, www icash ca');
              return view('lp.lptemplate', $data);
            }
  public function howtogetcashfastwithnojob() { $track = $this->tracker();
   $txtlp = '<h1>How To Get Cash Fast With No Job</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "How To Get Cash Fast With No Job", "headtxtcolor" => "white", "headalt" => "How To Get Cash Fast With No Job", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('How To Get Cash Fast With No Job');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('how to get cash fast with no job, short term loans online no credit check, emergency personal loans bad credit, quick personal loans, loans for people on disability, same day cash advance, Payday Loans Vancouver, www icash ca, online loan lenders');
              return view('lp.lptemplate', $data);
            }
  public function shorttermloansonlinenocreditcheck() { $track = $this->tracker();
   $txtlp = '<h1>Short Term Loans Online No Credit Check</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/7.jpg", "martop" => "30", "headpg" => "Short Term Loans Online No Credit Check", "headtxtcolor" => "white", "headalt" => "Short Term Loans Online No Credit Check", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Short Term Loans Online No Credit Check');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('short term loans online no credit check, emergency personal loans bad credit, quick personal loans, loans for people on disability, same day cash advance, Payday Loans Vancouver, www icash ca, online loan lenders, cash advance online same day');
              return view('lp.lptemplate', $data);
            }
  public function emergencypersonalloansbadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Personal Loans Bad Credit</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/8.jpg", "martop" => "30", "headpg" => "Emergency Personal Loans Bad Credit", "headtxtcolor" => "white", "headalt" => "Emergency Personal Loans Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Personal Loans Bad Credit');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('emergency personal loans bad credit, quick personal loans, loans for people on disability, same day cash advance, Payday Loans Vancouver, www icash ca, online loan lenders, cash advance online same day, loan lenders');
              return view('lp.lptemplate', $data);
            }
  public function quickpersonalloans() { $track = $this->tracker();
   $txtlp = '<h1>Quick Personal Loans</h1><p>Mega Cash Bucks has brought Canadians a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/9.jpg", "martop" => "30", "headpg" => "Quick Personal Loans", "headtxtcolor" => "white", "headalt" => "Quick Personal Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Personal Loans');
    SEOMeta::setDescription('Mega Cash Bucks has brought Canadians a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
    SEOMeta::addKeyword('quick personal loans, loans for people on disability, same day cash advance, Payday Loans Vancouver, www icash ca, online loan lenders, cash advance online same day, loan lenders, lending loan');
              return view('lp.lptemplate', $data);
            }
  public function loansforpeopleondisability() { $track = $this->tracker();
   $txtlp = '<h1>Loans For People On Disability</h1><p>Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for and receive their funds quickly and easily.</p>';
   $data = ["bannerbg" => "land/10.jpg", "martop" => "30", "headpg" => "Loans For People On Disability", "headtxtcolor" => "white", "headalt" => "Loans For People On Disability", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loans For People On Disability');
    SEOMeta::setDescription('Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for and receive their funds quickly and easily.');
    SEOMeta::addKeyword('loans for people on disability, same day cash advance, Payday Loans Vancouver, www icash ca, online loan lenders, cash advance online same day, loan lenders, lending loan, Payday Loans Leamington');
              return view('lp.lptemplate', $data);
            }
  public function samedaycashadvance() { $track = $this->tracker();
   $txtlp = '<h1>Same Day Cash Advance</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/11.jpg", "martop" => "30", "headpg" => "Same Day Cash Advance", "headtxtcolor" => "white", "headalt" => "Same Day Cash Advance", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Same Day Cash Advance');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('same day cash advance, Payday Loans Vancouver, www icash ca, online loan lenders, cash advance online same day, loan lenders, lending loan, Payday Loans Leamington, short term personal loans for bad credit');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansvancouver() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Vancouver</h1><p>Our Payday Loans in Vancouver can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/12.jpg", "martop" => "30", "headpg" => "Payday Loans Vancouver", "headtxtcolor" => "white", "headalt" => "Payday Loans Vancouver", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Vancouver');
    SEOMeta::setDescription('Our Payday Loans in Vancouver can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('Payday Loans Vancouver, www icash ca, online loan lenders, cash advance online same day, loan lenders, lending loan, Payday Loans Leamington, short term personal loans for bad credit, need loan immediately');
              return view('lp.lptemplate', $data);
            }
  public function wwwicashca() { $track = $this->tracker();
   $txtlp = '<h1>www ICash ca</h1><p>Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/13.jpg", "martop" => "30", "headpg" => "www ICash ca", "headtxtcolor" => "white", "headalt" => "www ICash ca", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('www ICash ca');
    SEOMeta::setDescription('Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('www icash ca, online loan lenders, cash advance online same day, loan lenders, lending loan, Payday Loans Leamington, short term personal loans for bad credit, need loan immediately, need cash now');
              return view('lp.lptemplate', $data);
            }
  public function onlineloanlenders() { $track = $this->tracker();
   $txtlp = '<h1>Online Loan Lenders</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/14.jpg", "martop" => "30", "headpg" => "Online Loan Lenders", "headtxtcolor" => "white", "headalt" => "Online Loan Lenders", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Online Loan Lenders');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('online loan lenders, cash advance online same day, loan lenders, lending loan, Payday Loans Leamington, short term personal loans for bad credit, need loan immediately, need cash now, cash money loans');
              return view('lp.lptemplate', $data);
            }
  public function cashadvanceonlinesameday() { $track = $this->tracker();
   $txtlp = '<h1>Cash Advance Online Same Day</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/15.jpg", "martop" => "30", "headpg" => "Cash Advance Online Same Day", "headtxtcolor" => "white", "headalt" => "Cash Advance Online Same Day", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Advance Online Same Day');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('cash advance online same day, loan lenders, lending loan, Payday Loans Leamington, short term personal loans for bad credit, need loan immediately, need cash now, cash money loans, emergency cash immediately');
              return view('lp.lptemplate', $data);
            }
  public function loanlenders() { $track = $this->tracker();
   $txtlp = '<h1>Loan Lenders</h1><p>Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/16.jpg", "martop" => "30", "headpg" => "Loan Lenders", "headtxtcolor" => "white", "headalt" => "Loan Lenders", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loan Lenders');
    SEOMeta::setDescription('Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('loan lenders, lending loan, Payday Loans Leamington, short term personal loans for bad credit, need loan immediately, need cash now, cash money loans, emergency cash immediately, easy approval loan');
              return view('lp.lptemplate', $data);
            }
  public function lendingloan() { $track = $this->tracker();
   $txtlp = '<h1>Lending Loan</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/17.jpg", "martop" => "30", "headpg" => "Lending Loan", "headtxtcolor" => "white", "headalt" => "Lending Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Lending Loan');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('lending loan, Payday Loans Leamington, short term personal loans for bad credit, need loan immediately, need cash now, cash money loans, emergency cash immediately, easy approval loan, cash store edmonton');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansleamington() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Leamington</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/18.jpg", "martop" => "30", "headpg" => "Payday Loans Leamington", "headtxtcolor" => "white", "headalt" => "Payday Loans Leamington", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Leamington');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('Payday Loans Leamington, short term personal loans for bad credit, need loan immediately, need cash now, cash money loans, emergency cash immediately, easy approval loan, cash store edmonton, government money');
              return view('lp.lptemplate', $data);
            }
  public function shorttermpersonalloansforbadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Short Term Personal Loans For Bad Credit</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/19.jpg", "martop" => "30", "headpg" => "Short Term Personal Loans For Bad Credit", "headtxtcolor" => "white", "headalt" => "Short Term Personal Loans For Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Short Term Personal Loans For Bad Credit');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('short term personal loans for bad credit, need loan immediately, need cash now, cash money loans, emergency cash immediately, easy approval loan, cash store edmonton, government money, Payday Loans Vernon');
              return view('lp.lptemplate', $data);
            }
  public function needloanimmediately() { $track = $this->tracker();
   $txtlp = '<h1>Need Loan Immediately</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/20.jpg", "martop" => "30", "headpg" => "Need Loan Immediately", "headtxtcolor" => "white", "headalt" => "Need Loan Immediately", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Need Loan Immediately');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('need loan immediately, need cash now, cash money loans, emergency cash immediately, easy approval loan, cash store edmonton, government money, Payday Loans Vernon, quick cash');
              return view('lp.lptemplate', $data);
            }
  public function needcashnow() { $track = $this->tracker();
   $txtlp = '<h1>Need Cash Now</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/21.jpg", "martop" => "30", "headpg" => "Need Cash Now", "headtxtcolor" => "white", "headalt" => "Need Cash Now", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Need Cash Now');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('need cash now, cash money loans, emergency cash immediately, easy approval loan, cash store edmonton, government money, Payday Loans Vernon, quick cash, Payday Loans White Rock');
              return view('lp.lptemplate', $data);
            }
  public function cashmoneyloans() { $track = $this->tracker();
   $txtlp = '<h1>Cash Money Loans</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/22.jpg", "martop" => "30", "headpg" => "Cash Money Loans", "headtxtcolor" => "white", "headalt" => "Cash Money Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Money Loans');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('cash money loans, emergency cash immediately, easy approval loan, cash store edmonton, government money, Payday Loans Vernon, quick cash, Payday Loans White Rock, need a loan now');
              return view('lp.lptemplate', $data);
            }
  public function emergencycashimmediately() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Cash Immediately</h1><p>If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/23.jpg", "martop" => "30", "headpg" => "Emergency Cash Immediately", "headtxtcolor" => "white", "headalt" => "Emergency Cash Immediately", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Cash Immediately');
    SEOMeta::setDescription('If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('emergency cash immediately, easy approval loan, cash store edmonton, government money, Payday Loans Vernon, quick cash, Payday Loans White Rock, need a loan now, money make money');
              return view('lp.lptemplate', $data);
            }
  public function easyapprovalloan() { $track = $this->tracker();
   $txtlp = '<h1>Easy Approval Loan</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/24.jpg", "martop" => "30", "headpg" => "Easy Approval Loan", "headtxtcolor" => "white", "headalt" => "Easy Approval Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Approval Loan');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('easy approval loan, cash store edmonton, government money, Payday Loans Vernon, quick cash, Payday Loans White Rock, need a loan now, money make money, fast emergency loan');
              return view('lp.lptemplate', $data);
            }
  public function cashstoreedmonton() { $track = $this->tracker();
   $txtlp = '<h1>Cash Store Edmonton</h1><p>If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/25.jpg", "martop" => "30", "headpg" => "Cash Store Edmonton", "headtxtcolor" => "white", "headalt" => "Cash Store Edmonton", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Store Edmonton');
    SEOMeta::setDescription('If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('cash store edmonton, government money, Payday Loans Vernon, quick cash, Payday Loans White Rock, need a loan now, money make money, fast emergency loan, cash advance online bad credit');
              return view('lp.lptemplate', $data);
            }
  public function governmentmoney() { $track = $this->tracker();
   $txtlp = '<h1>Government Money</h1><p>We know that things happen in life and sometimes you need Cash Money for unexpected expenses.</p>';
   $data = ["bannerbg" => "land/26.jpg", "martop" => "30", "headpg" => "Government Money", "headtxtcolor" => "white", "headalt" => "Government Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Government Money');
    SEOMeta::setDescription('We know that things happen in life and sometimes you need Cash Money for unexpected expenses.');
    SEOMeta::addKeyword('government money, Payday Loans Vernon, quick cash, Payday Loans White Rock, need a loan now, money make money, fast emergency loan, cash advance online bad credit, Payday Loans Spruce Grove');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansvernon() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Vernon</h1><p>Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.</p>';
   $data = ["bannerbg" => "land/27.jpg", "martop" => "30", "headpg" => "Payday Loans Vernon", "headtxtcolor" => "white", "headalt" => "Payday Loans Vernon", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Vernon');
    SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.');
    SEOMeta::addKeyword('Payday Loans Vernon, quick cash, Payday Loans White Rock, need a loan now, money make money, fast emergency loan, cash advance online bad credit, Payday Loans Spruce Grove, fast cash');
              return view('lp.lptemplate', $data);
            }
  public function quickcash() { $track = $this->tracker();
   $txtlp = '<h1>Quick Cash</h1><p>Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "Quick Cash", "headtxtcolor" => "white", "headalt" => "Quick Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Cash');
    SEOMeta::setDescription('Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.');
    SEOMeta::addKeyword('quick cash, Payday Loans White Rock, need a loan now, money make money, fast emergency loan, cash advance online bad credit, Payday Loans Spruce Grove, fast cash, need urgent money today');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanswhiterock() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans White Rock</h1><p>We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Payday Loans White Rock", "headtxtcolor" => "white", "headalt" => "Payday Loans White Rock", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans White Rock');
    SEOMeta::setDescription('We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('Payday Loans White Rock, need a loan now, money make money, fast emergency loan, cash advance online bad credit, Payday Loans Spruce Grove, fast cash, need urgent money today, personal lending');
              return view('lp.lptemplate', $data);
            }
  public function needaloannow() { $track = $this->tracker();
   $txtlp = '<h1>Need A Loan Now</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/3.jpg", "martop" => "30", "headpg" => "Need A Loan Now", "headtxtcolor" => "white", "headalt" => "Need A Loan Now", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Need A Loan Now');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('need a loan now, money make money, fast emergency loan, cash advance online bad credit, Payday Loans Spruce Grove, fast cash, need urgent money today, personal lending, online money');
              return view('lp.lptemplate', $data);
            }
  public function moneymakemoney() { $track = $this->tracker();
   $txtlp = '<h1>Money Make Money</h1><p>Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in 1, 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "Money Make Money", "headtxtcolor" => "white", "headalt" => "Money Make Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money Make Money');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in 1, 2 or 3 installments.');
    SEOMeta::addKeyword('money make money, fast emergency loan, cash advance online bad credit, Payday Loans Spruce Grove, fast cash, need urgent money today, personal lending, online money, easy payday loans');
              return view('lp.lptemplate', $data);
            }
  public function fastemergencyloan() { $track = $this->tracker();
   $txtlp = '<h1>Fast Emergency Loan</h1><p>If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "Fast Emergency Loan", "headtxtcolor" => "white", "headalt" => "Fast Emergency Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Emergency Loan');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('fast emergency loan, cash advance online bad credit, Payday Loans Spruce Grove, fast cash, need urgent money today, personal lending, online money, easy payday loans, easy payday');
              return view('lp.lptemplate', $data);
            }
  public function cashadvanceonlinebadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Cash Advance Online Bad Credit</h1><p>We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "Cash Advance Online Bad Credit", "headtxtcolor" => "white", "headalt" => "Cash Advance Online Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Advance Online Bad Credit');
    SEOMeta::setDescription('We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('cash advance online bad credit, Payday Loans Spruce Grove, fast cash, need urgent money today, personal lending, online money, easy payday loans, easy payday, cash-depot');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanssprucegrove() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Spruce Grove</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/7.jpg", "martop" => "30", "headpg" => "Payday Loans Spruce Grove", "headtxtcolor" => "white", "headalt" => "Payday Loans Spruce Grove", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Spruce Grove');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('Payday Loans Spruce Grove, fast cash, need urgent money today, personal lending, online money, easy payday loans, easy payday, cash-depot, micro loans');
              return view('lp.lptemplate', $data);
            }
  public function fastcash() { $track = $this->tracker();
   $txtlp = '<h1>Fast Cash</h1><p>Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.</p>';
   $data = ["bannerbg" => "land/8.jpg", "martop" => "30", "headpg" => "Fast Cash", "headtxtcolor" => "white", "headalt" => "Fast Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Cash');
    SEOMeta::setDescription('Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.');
    SEOMeta::addKeyword('fast cash, need urgent money today, personal lending, online money, easy payday loans, easy payday, cash-depot, micro loans, payday loan lenders');
              return view('lp.lptemplate', $data);
            }
  public function needurgentmoneytoday() { $track = $this->tracker();
   $txtlp = '<h1>Need Urgent Money Today</h1><p>Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/9.jpg", "martop" => "30", "headpg" => "Need Urgent Money Today", "headtxtcolor" => "white", "headalt" => "Need Urgent Money Today", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Need Urgent Money Today');
    SEOMeta::setDescription('Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('need urgent money today, personal lending, online money, easy payday loans, easy payday, cash-depot, micro loans, payday loan lenders, money get money');
              return view('lp.lptemplate', $data);
            }
  public function personallending() { $track = $this->tracker();
   $txtlp = '<h1>Personal Lending</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/10.jpg", "martop" => "30", "headpg" => "Personal Lending", "headtxtcolor" => "white", "headalt" => "Personal Lending", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Personal Lending');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('personal lending, online money, easy payday loans, easy payday, cash-depot, micro loans, payday loan lenders, money get money, cash advance places');
              return view('lp.lptemplate', $data);
            }
  public function onlinemoney() { $track = $this->tracker();
   $txtlp = '<h1>Online Money</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/11.jpg", "martop" => "30", "headpg" => "Online Money", "headtxtcolor" => "white", "headalt" => "Online Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Online Money');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('online money, easy payday loans, easy payday, cash-depot, micro loans, payday loan lenders, money get money, cash advance places, emergency loans online');
              return view('lp.lptemplate', $data);
            }
  public function easypaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>Easy Payday Loan</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/12.jpg", "martop" => "30", "headpg" => "Easy Payday Loan", "headtxtcolor" => "white", "headalt" => "Easy Payday Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Payday Loan');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('easy payday loans, easy payday, cash-depot, micro loans, payday loan lenders, money get money, cash advance places, emergency loans online, earn cash');
              return view('lp.lptemplate', $data);
            }
  public function easypayday() { $track = $this->tracker();
   $txtlp = '<h1>Easy Payday</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/13.jpg", "martop" => "30", "headpg" => "Easy Payday", "headtxtcolor" => "white", "headalt" => "Easy Payday", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Payday');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('easy payday, cash-depot, micro loans, payday loan lenders, money get money, cash advance places, emergency loans online, earn cash, emergency payday loan bad credit');
              return view('lp.lptemplate', $data);
            }
  public function cashdepot() { $track = $this->tracker();
   $txtlp = '<h1>Cash-Depot</h1><p>Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/14.jpg", "martop" => "30", "headpg" => "Cash-Depot", "headtxtcolor" => "white", "headalt" => "Cash-Depot", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash-Depot');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
    SEOMeta::addKeyword('cash-depot, micro loans, payday loan lenders, money get money, cash advance places, emergency loans online, earn cash, emergency payday loan bad credit, get money for');
              return view('lp.lptemplate', $data);
            }
  public function microloans() { $track = $this->tracker();
   $txtlp = '<h1>Micro Loans</h1><p>Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for and receive their funds quickly and easily.</p>';
   $data = ["bannerbg" => "land/15.jpg", "martop" => "30", "headpg" => "Micro Loans", "headtxtcolor" => "white", "headalt" => "Micro Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Micro Loans');
    SEOMeta::setDescription('Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for and receive their funds quickly and easily.');
    SEOMeta::addKeyword('micro loans, payday loan lenders, money get money, cash advance places, emergency loans online, earn cash, emergency payday loan bad credit, get money for, cash');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanlenders() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loan Lenders</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/16.jpg", "martop" => "30", "headpg" => "Payday Loan Lenders", "headtxtcolor" => "white", "headalt" => "Payday Loan Lenders", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loan Lenders');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday loan lenders, money get money, cash advance places, emergency loans online, earn cash, emergency payday loan bad credit, get money for, cash, e transfer payday loans canada');
              return view('lp.lptemplate', $data);
            }
  public function moneygetmoney() { $track = $this->tracker();
   $txtlp = '<h1>Money Get Money</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/17.jpg", "martop" => "30", "headpg" => "Money Get Money", "headtxtcolor" => "white", "headalt" => "Money Get Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money Get Money');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('money get money, cash advance places, emergency loans online, earn cash, emergency payday loan bad credit, get money for, cash, e transfer payday loans canada, payday loan places near me');
              return view('lp.lptemplate', $data);
            }
  public function cashadvanceplaces() { $track = $this->tracker();
   $txtlp = '<h1>Cash Advance Places</h1><p>Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/18.jpg", "martop" => "30", "headpg" => "Cash Advance Places", "headtxtcolor" => "white", "headalt" => "Cash Advance Places", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Advance Places');
    SEOMeta::setDescription('Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('cash advance places, emergency loans online, earn cash, emergency payday loan bad credit, get money for, cash, e transfer payday loans canada, payday loan places near me, emergency money bad credit');
              return view('lp.lptemplate', $data);
            }
  public function emergencyloansonline() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Loans Online</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/19.jpg", "martop" => "30", "headpg" => "Emergency Loans Online", "headtxtcolor" => "white", "headalt" => "Emergency Loans Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Loans Online');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('emergency loans online, earn cash, emergency payday loan bad credit, get money for, cash, e transfer payday loans canada, payday loan places near me, emergency money bad credit, Payday Loans Victoria');
              return view('lp.lptemplate', $data);
            }
  public function earncash() { $track = $this->tracker();
   $txtlp = '<h1>Earn Cash</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/20.jpg", "martop" => "30", "headpg" => "Earn Cash", "headtxtcolor" => "white", "headalt" => "Earn Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Earn Cash');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('earn cash, emergency payday loan bad credit, get money for, cash, e transfer payday loans canada, payday loan places near me, emergency money bad credit, Payday Loans Victoria, tax advance loan');
              return view('lp.lptemplate', $data);
            }
  public function emergencypaydayloanbadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Payday Loan Bad Credit</h1><p>Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/21.jpg", "martop" => "30", "headpg" => "Emergency Payday Loan Bad Credit", "headtxtcolor" => "white", "headalt" => "Emergency Payday Loan Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Payday Loan Bad Credit');
    SEOMeta::setDescription('Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('emergency payday loan bad credit, get money for, cash, e transfer payday loans canada, payday loan places near me, emergency money bad credit, Payday Loans Victoria, tax advance loan, loans for people with bad credit');
              return view('lp.lptemplate', $data);
            }
  public function getmoneyfor() { $track = $this->tracker();
   $txtlp = '<h1>Get Money For</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/22.jpg", "martop" => "30", "headpg" => "Get Money For", "headtxtcolor" => "white", "headalt" => "Get Money For", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Get Money For');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('get money for, cash, e transfer payday loans canada, payday loan places near me, emergency money bad credit, Payday Loans Victoria, tax advance loan, loans for people with bad credit, Payday Loans Winnipeg Manitoba');
              return view('lp.lptemplate', $data);
            }
  public function cash() { $track = $this->tracker();
   $txtlp = '<h1>Cash</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/23.jpg", "martop" => "30", "headpg" => "Cash", "headtxtcolor" => "white", "headalt" => "Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('cash, e transfer payday loans canada, payday loan places near me, emergency money bad credit, Payday Loans Victoria, tax advance loan, loans for people with bad credit, Payday Loans Winnipeg Manitoba, for loan');
              return view('lp.lptemplate', $data);
            }
  public function etransferpaydayloanscanada() { $track = $this->tracker();
   $txtlp = '<h1>E Transfer Payday Loans Canada</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/24.jpg", "martop" => "30", "headpg" => "E Transfer Payday Loans Canada", "headtxtcolor" => "white", "headalt" => "E Transfer Payday Loans Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('E Transfer Payday Loans Canada');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('e transfer payday loans canada, payday loan places near me, emergency money bad credit, Payday Loans Victoria, tax advance loan, loans for people with bad credit, Payday Loans Winnipeg Manitoba, for loan, how can i get money');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanplacesnearme() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loan Places Near Me</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/25.jpg", "martop" => "30", "headpg" => "Payday Loan Places Near Me", "headtxtcolor" => "white", "headalt" => "Payday Loan Places Near Me", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loan Places Near Me');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday loan places near me, emergency money bad credit, Payday Loans Victoria, tax advance loan, loans for people with bad credit, Payday Loans Winnipeg Manitoba, for loan, how can i get money, money to');
              return view('lp.lptemplate', $data);
            }
  public function emergencymoneybadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Money Bad Credit</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/26.jpg", "martop" => "30", "headpg" => "Emergency Money Bad Credit", "headtxtcolor" => "white", "headalt" => "Emergency Money Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Money Bad Credit');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('emergency money bad credit, Payday Loans Victoria, tax advance loan, loans for people with bad credit, Payday Loans Winnipeg Manitoba, for loan, how can i get money, money to, personal money');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansvictoria() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Victoria</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/27.jpg", "martop" => "30", "headpg" => "Payday Loans Victoria", "headtxtcolor" => "white", "headalt" => "Payday Loans Victoria", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Victoria');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('Payday Loans Victoria, tax advance loan, loans for people with bad credit, Payday Loans Winnipeg Manitoba, for loan, how can i get money, money to, personal money, Payday Loans Bolton');
              return view('lp.lptemplate', $data);
            }
  public function taxadvanceloan() { $track = $this->tracker();
   $txtlp = '<h1>Tax Advance Loan</h1><p>If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "Tax Advance Loan", "headtxtcolor" => "white", "headalt" => "Tax Advance Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Tax Advance Loan');
    SEOMeta::setDescription('If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('tax advance loan, loans for people with bad credit, Payday Loans Winnipeg Manitoba, for loan, how can i get money, money to, personal money, Payday Loans Bolton, pay2day');
              return view('lp.lptemplate', $data);
            }
  public function loansforpeoplewithbadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Loans For People With Bad Credit</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Loans For People With Bad Credit", "headtxtcolor" => "white", "headalt" => "Loans For People With Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loans For People With Bad Credit');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('loans for people with bad credit, Payday Loans Winnipeg Manitoba, for loan, how can i get money, money to, personal money, Payday Loans Bolton, pay2day, welfare assistance');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanswinnipegmanitoba() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Winnipeg Manitoba</h1><p>If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/3.jpg", "martop" => "30", "headpg" => "Payday Loans Winnipeg Manitoba", "headtxtcolor" => "white", "headalt" => "Payday Loans Winnipeg Manitoba", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Winnipeg Manitoba');
    SEOMeta::setDescription('If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('Payday Loans Winnipeg Manitoba, for loan, how can i get money, money to, personal money, Payday Loans Bolton, pay2day, welfare assistance, cash money advance');
              return view('lp.lptemplate', $data);
            }
  public function forloan() { $track = $this->tracker();
   $txtlp = '<h1>For Loan</h1><p>We know that things happen in life and sometimes you need Cash Money for unexpected expenses.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "For Loan", "headtxtcolor" => "white", "headalt" => "For Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('For Loan');
    SEOMeta::setDescription('We know that things happen in life and sometimes you need Cash Money for unexpected expenses.');
    SEOMeta::addKeyword('for loan, how can i get money, money to, personal money, Payday Loans Bolton, pay2day, welfare assistance, cash money advance, easy cash loans online');
              return view('lp.lptemplate', $data);
            }
  public function howcanigetmoney() { $track = $this->tracker();
   $txtlp = '<h1>How Can I Get Money</h1><p>Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "How Can I Get Money", "headtxtcolor" => "white", "headalt" => "How Can I Get Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('How Can I Get Money');
    SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.');
    SEOMeta::addKeyword('how can i get money, money to, personal money, Payday Loans Bolton, pay2day, welfare assistance, cash money advance, easy cash loans online, payday cash loans');
              return view('lp.lptemplate', $data);
            }
  public function moneyto() { $track = $this->tracker();
   $txtlp = '<h1>Money To</h1><p>Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "Money To", "headtxtcolor" => "white", "headalt" => "Money To", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money To');
    SEOMeta::setDescription('Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.');
    SEOMeta::addKeyword('money to, personal money, Payday Loans Bolton, pay2day, welfare assistance, cash money advance, easy cash loans online, payday cash loans, private lender ontario');
              return view('lp.lptemplate', $data);
            }
  public function personalmoney() { $track = $this->tracker();
   $txtlp = '<h1>Personal Money</h1><p>We offer you an Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/7.jpg", "martop" => "30", "headpg" => "Personal Money", "headtxtcolor" => "white", "headalt" => "Personal Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Personal Money');
    SEOMeta::setDescription('We offer you an Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('personal money, Payday Loans Bolton, pay2day, welfare assistance, cash money advance, easy cash loans online, payday cash loans, private lender ontario, get a loan online');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansbolton() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Bolton</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/8.jpg", "martop" => "30", "headpg" => "Payday Loans Bolton", "headtxtcolor" => "white", "headalt" => "Payday Loans Bolton", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Bolton');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('Payday Loans Bolton, pay2day, welfare assistance, cash money advance, easy cash loans online, payday cash loans, private lender ontario, get a loan online, cheap loans');
              return view('lp.lptemplate', $data);
            }
  public function pay2day() { $track = $this->tracker();
   $txtlp = '<h1>Pay2day</h1><p>Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in 1, 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/9.jpg", "martop" => "30", "headpg" => "Pay2day", "headtxtcolor" => "white", "headalt" => "Pay2day", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Pay2day');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in 1, 2 or 3 installments.');
    SEOMeta::addKeyword('pay2day, welfare assistance, cash money advance, easy cash loans online, payday cash loans, private lender ontario, get a loan online, cheap loans, need a payday loan');
              return view('lp.lptemplate', $data);
            }
  public function welfareassistance() { $track = $this->tracker();
   $txtlp = '<h1>Welfare Assistance</h1><p>If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/10.jpg", "martop" => "30", "headpg" => "Welfare Assistance", "headtxtcolor" => "white", "headalt" => "Welfare Assistance", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Welfare Assistance');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('welfare assistance, cash money advance, easy cash loans online, payday cash loans, private lender ontario, get a loan online, cheap loans, need a payday loan, i cash');
              return view('lp.lptemplate', $data);
            }
  public function cashmoneyadvance() { $track = $this->tracker();
   $txtlp = '<h1>Cash Money Advance</h1><p>We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/11.jpg", "martop" => "30", "headpg" => "Cash Money Advance", "headtxtcolor" => "white", "headalt" => "Cash Money Advance", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Money Advance');
    SEOMeta::setDescription('We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('cash money advance, easy cash loans online, payday cash loans, private lender ontario, get a loan online, cheap loans, need a payday loan, i cash, cash money hamilton');
              return view('lp.lptemplate', $data);
            }
  public function easycashloansonline() { $track = $this->tracker();
   $txtlp = '<h1>Easy Cash Loans Online</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/12.jpg", "martop" => "30", "headpg" => "Easy Cash Loans Online", "headtxtcolor" => "white", "headalt" => "Easy Cash Loans Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Cash Loans Online');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('easy cash loans online, payday cash loans, private lender ontario, get a loan online, cheap loans, need a payday loan, i cash, cash money hamilton, personal payday loans near me');
              return view('lp.lptemplate', $data);
            }
  public function paydaycashloans() { $track = $this->tracker();
   $txtlp = '<h1>Payday Cash Loans</h1><p>Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.</p>';
   $data = ["bannerbg" => "land/13.jpg", "martop" => "30", "headpg" => "Payday Cash Loans", "headtxtcolor" => "white", "headalt" => "Payday Cash Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Cash Loans');
    SEOMeta::setDescription('Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.');
    SEOMeta::addKeyword('payday cash loans, private lender ontario, get a loan online, cheap loans, need a payday loan, i cash, cash money hamilton, personal payday loans near me, lady loans');
              return view('lp.lptemplate', $data);
            }
  public function privatelenderontario() { $track = $this->tracker();
   $txtlp = '<h1>Private Lender Ontario</h1><p>Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/14.jpg", "martop" => "30", "headpg" => "Private Lender Ontario", "headtxtcolor" => "white", "headalt" => "Private Lender Ontario", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Private Lender Ontario');
    SEOMeta::setDescription('Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('private lender ontario, get a loan online, cheap loans, need a payday loan, i cash, cash money hamilton, personal payday loans near me, lady loans, cash money kingston');
              return view('lp.lptemplate', $data);
            }
  public function getaloanonline() { $track = $this->tracker();
   $txtlp = '<h1>Get A Loan Online</h1><p>If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/15.jpg", "martop" => "30", "headpg" => "Get A Loan Online", "headtxtcolor" => "white", "headalt" => "Get A Loan Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Get A Loan Online');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('get a loan online, cheap loans, need a payday loan, i cash, cash money hamilton, personal payday loans near me, lady loans, cash money kingston, loan money now');
              return view('lp.lptemplate', $data);
            }
  public function cheaploans() { $track = $this->tracker();
   $txtlp = '<h1>Cheap Loans</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/16.jpg", "martop" => "30", "headpg" => "Cheap Loans", "headtxtcolor" => "white", "headalt" => "Cheap Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cheap Loans');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('cheap loans, need a payday loan, i cash, cash money hamilton, personal payday loans near me, lady loans, cash money kingston, loan money now, personal finance loans near me');
              return view('lp.lptemplate', $data);
            }
  public function needapaydayloan() { $track = $this->tracker();
   $txtlp = '<h1>Need A Payday Loan</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/17.jpg", "martop" => "30", "headpg" => "Need A Payday Loan", "headtxtcolor" => "white", "headalt" => "Need A Payday Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Need A Payday Loan');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('need a payday loan, i cash, cash money hamilton, personal payday loans near me, lady loans, cash money kingston, loan money now, personal finance loans near me, fast loans today');
              return view('lp.lptemplate', $data);
            }
  public function cashmoneyhamilton() { $track = $this->tracker();
   $txtlp = '<h1>Cash Money Hamilton</h1><p>Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/19.jpg", "martop" => "30", "headpg" => "Cash Money Hamilton", "headtxtcolor" => "white", "headalt" => "Cash Money Hamilton", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Money Hamilton');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
    SEOMeta::addKeyword('cash money hamilton, personal payday loans near me, lady loans, cash money kingston, loan money now, personal finance loans near me, fast loans today, fast cash bad credit, bad credit payday loans canada');
              return view('lp.lptemplate', $data);
            }
  public function personalpaydayloansnearme() { $track = $this->tracker();
   $txtlp = '<h1>Personal Payday Loans Near Me</h1><p>Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for and receive their funds quickly and easily.</p>';
   $data = ["bannerbg" => "land/20.jpg", "martop" => "30", "headpg" => "Personal Payday Loans Near Me", "headtxtcolor" => "white", "headalt" => "Personal Payday Loans Near Me", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Personal Payday Loans Near Me');
    SEOMeta::setDescription('Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans, get approved for and receive their funds quickly and easily.');
    SEOMeta::addKeyword('personal payday loans near me, lady loans, cash money kingston, loan money now, personal finance loans near me, fast loans today, fast cash bad credit, bad credit payday loans canada, Payday Loans Medicine Hat');
              return view('lp.lptemplate', $data);
            }
  public function ladyloans() { $track = $this->tracker();
   $txtlp = '<h1>Lady Loans</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/21.jpg", "martop" => "30", "headpg" => "Lady Loans", "headtxtcolor" => "white", "headalt" => "Lady Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Lady Loans');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('lady loans, cash money kingston, loan money now, personal finance loans near me, fast loans today, fast cash bad credit, bad credit payday loans canada, Payday Loans Medicine Hat, application loan');
              return view('lp.lptemplate', $data);
            }
  public function cashmoneykingston() { $track = $this->tracker();
   $txtlp = '<h1>Cash Money Kingston</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/22.jpg", "martop" => "30", "headpg" => "Cash Money Kingston", "headtxtcolor" => "white", "headalt" => "Cash Money Kingston", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Money Kingston');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('cash money kingston, loan money now, personal finance loans near me, fast loans today, fast cash bad credit, bad credit payday loans canada, Payday Loans Medicine Hat, application loan, get credit online');
              return view('lp.lptemplate', $data);
            }
  public function loanmoneynow() { $track = $this->tracker();
   $txtlp = '<h1>Loan Money Now</h1><p>Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/23.jpg", "martop" => "30", "headpg" => "Loan Money Now", "headtxtcolor" => "white", "headalt" => "Loan Money Now", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loan Money Now');
    SEOMeta::setDescription('Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('loan money now, personal finance loans near me, fast loans today, fast cash bad credit, bad credit payday loans canada, Payday Loans Medicine Hat, application loan, get credit online, quick cash money');
              return view('lp.lptemplate', $data);
            }
  public function personalfinanceloansnearme() { $track = $this->tracker();
   $txtlp = '<h1>Personal Finance Loans Near Me</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/24.jpg", "martop" => "30", "headpg" => "Personal Finance Loans Near Me", "headtxtcolor" => "white", "headalt" => "Personal Finance Loans Near Me", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Personal Finance Loans Near Me');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('personal finance loans near me, fast loans today, fast cash bad credit, bad credit payday loans canada, Payday Loans Medicine Hat, application loan, get credit online, quick cash money, payday loans canada');
              return view('lp.lptemplate', $data);
            }
  public function fastloanstoday() { $track = $this->tracker();
   $txtlp = '<h1>Fast Loans Today</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/25.jpg", "martop" => "30", "headpg" => "Fast Loans Today", "headtxtcolor" => "white", "headalt" => "Fast Loans Today", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Loans Today');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('fast loans today, fast cash bad credit, bad credit payday loans canada, Payday Loans Medicine Hat, application loan, get credit online, quick cash money, payday loans canada, best way to get money');
              return view('lp.lptemplate', $data);
            }
  public function fastcashbadcredit() { $track = $this->tracker();
   $txtlp = '<h1>Fast Cash Bad Credit</h1><p>Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/26.jpg", "martop" => "30", "headpg" => "Fast Cash Bad Credit", "headtxtcolor" => "white", "headalt" => "Fast Cash Bad Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Cash Bad Credit');
    SEOMeta::setDescription('Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('fast cash bad credit, bad credit payday loans canada, Payday Loans Medicine Hat, application loan, get credit online, quick cash money, payday loans canada, best way to get money, emergency personal loan');
              return view('lp.lptemplate', $data);
            }
  public function badcreditpaydayloanscanada() { $track = $this->tracker();
   $txtlp = '<h1>Bad Credit Payday Loans Canada</h1><p>If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/27.jpg", "martop" => "30", "headpg" => "Bad Credit Payday Loans Canada", "headtxtcolor" => "white", "headalt" => "Bad Credit Payday Loans Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Bad Credit Payday Loans Canada');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('bad credit payday loans canada, Payday Loans Medicine Hat, application loan, get credit online, quick cash money, payday loans canada, best way to get money, emergency personal loan, help with utilities');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansmedicinehat() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Medicine Hat</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "Payday Loans Medicine Hat", "headtxtcolor" => "white", "headalt" => "Payday Loans Medicine Hat", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Medicine Hat');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('Payday Loans Medicine Hat, application loan, get credit online, quick cash money, payday loans canada, best way to get money, emergency personal loan, help with utilities, emergency loans no credit check');
              return view('lp.lptemplate', $data);
            }
  public function applicationloan() { $track = $this->tracker();
   $txtlp = '<h1>Application Loan</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Application Loan", "headtxtcolor" => "white", "headalt" => "Application Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Application Loan');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('application loan, get credit online, quick cash money, payday loans canada, best way to get money, emergency personal loan, help with utilities, emergency loans no credit check, how earn money');
              return view('lp.lptemplate', $data);
            }
  public function getcreditonline() { $track = $this->tracker();
   $txtlp = '<h1>Get Credit Online</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/3.jpg", "martop" => "30", "headpg" => "Get Credit Online", "headtxtcolor" => "white", "headalt" => "Get Credit Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Get Credit Online');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('get credit online, quick cash money, payday loans canada, best way to get money, emergency personal loan, help with utilities, emergency loans no credit check, how earn money, apply for payday loan');
              return view('lp.lptemplate', $data);
            }
  public function quickcashmoney() { $track = $this->tracker();
   $txtlp = '<h1>Quick Cash Money</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "Quick Cash Money", "headtxtcolor" => "white", "headalt" => "Quick Cash Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Cash Money');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('quick cash money, payday loans canada, best way to get money, emergency personal loan, help with utilities, emergency loans no credit check, how earn money, apply for payday loan, money mart');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanscanada() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Canada</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "Payday Loans Canada", "headtxtcolor" => "white", "headalt" => "Payday Loans Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Canada');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('payday loans canada, best way to get money, emergency personal loan, help with utilities, emergency loans no credit check, how earn money, apply for payday loan, money mart, i need help financially');
              return view('lp.lptemplate', $data);
            }
  public function bestwaytogetmoney() { $track = $this->tracker();
   $txtlp = '<h1>Best Way To Get Money</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "Best Way To Get Money", "headtxtcolor" => "white", "headalt" => "Best Way To Get Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Best Way To Get Money');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('best way to get money, emergency personal loan, help with utilities, emergency loans no credit check, how earn money, apply for payday loan, money mart, i need help financially, borrow cash');
              return view('lp.lptemplate', $data);
            }
  public function emergencypersonalloan() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Personal Loan</h1><p>If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/7.jpg", "martop" => "30", "headpg" => "Emergency Personal Loan", "headtxtcolor" => "white", "headalt" => "Emergency Personal Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Personal Loan');
    SEOMeta::setDescription('If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('emergency personal loan, help with utilities, emergency loans no credit check, how earn money, apply for payday loan, money mart, i need help financially, borrow cash, money mart payday loan');
              return view('lp.lptemplate', $data);
            }
  public function helpwithutilities() { $track = $this->tracker();
   $txtlp = '<h1>Help With Utilities</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/8.jpg", "martop" => "30", "headpg" => "Help With Utilities", "headtxtcolor" => "white", "headalt" => "Help With Utilities", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Help With Utilities');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('help with utilities, emergency loans no credit check, how earn money, apply for payday loan, money mart, i need help financially, borrow cash, money mart payday loan, easy loans canada');
              return view('lp.lptemplate', $data);
            }
  public function emergencyloansnocreditcheck() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Loans No Credit Check</h1><p>If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/9.jpg", "martop" => "30", "headpg" => "Emergency Loans No Credit Check", "headtxtcolor" => "white", "headalt" => "Emergency Loans No Credit Check", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Loans No Credit Check');
    SEOMeta::setDescription('If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('emergency loans no credit check, how earn money, apply for payday loan, money mart, i need help financially, borrow cash, money mart payday loan, easy loans canada, pay loan');
              return view('lp.lptemplate', $data);
            }
  public function howearnmoney() { $track = $this->tracker();
   $txtlp = '<h1>How Earn Money</h1><p>We know that things happen in life and sometimes you need Cash Money for unexpected expenses.</p>';
   $data = ["bannerbg" => "land/10.jpg", "martop" => "30", "headpg" => "How Earn Money", "headtxtcolor" => "white", "headalt" => "How Earn Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('How Earn Money');
    SEOMeta::setDescription('We know that things happen in life and sometimes you need Cash Money for unexpected expenses.');
    SEOMeta::addKeyword('how earn money, apply for payday loan, money mart, i need help financially, borrow cash, money mart payday loan, easy loans canada, pay loan, get you money');
              return view('lp.lptemplate', $data);
            }
  public function applyforpaydayloan() { $track = $this->tracker();
   $txtlp = '<h1>Apply For Payday Loan</h1><p>Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.</p>';
   $data = ["bannerbg" => "land/11.jpg", "martop" => "30", "headpg" => "Apply For Payday Loan", "headtxtcolor" => "white", "headalt" => "Apply For Payday Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Apply For Payday Loan');
    SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.');
    SEOMeta::addKeyword('apply for payday loan, money mart, i need help financially, borrow cash, money mart payday loan, easy loans canada, pay loan, get you money, e transfer online');
              return view('lp.lptemplate', $data);
            }
  public function moneymart() { $track = $this->tracker();
   $txtlp = '<h1>Money Mart</h1><p>Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.</p>';
   $data = ["bannerbg" => "land/12.jpg", "martop" => "30", "headpg" => "Money Mart", "headtxtcolor" => "white", "headalt" => "Money Mart", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money Mart');
    SEOMeta::setDescription('Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.');
    SEOMeta::addKeyword('money mart, i need help financially, borrow cash, money mart payday loan, easy loans canada, pay loan, get you money, e transfer online, no credit check loans online instant approval');
              return view('lp.lptemplate', $data);
            }
  public function ineedhelpfinancially() { $track = $this->tracker();
   $txtlp = '<h1>I Need Help Financially</h1><p>We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/13.jpg", "martop" => "30", "headpg" => "I Need Help Financially", "headtxtcolor" => "white", "headalt" => "I Need Help Financially", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('I Need Help Financially');
    SEOMeta::setDescription('We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('i need help financially, borrow cash, money mart payday loan, easy loans canada, pay loan, get you money, e transfer online, no credit check loans online instant approval, quick cash loans online');
              return view('lp.lptemplate', $data);
            }
  public function borrowcash() { $track = $this->tracker();
   $txtlp = '<h1>Borrow Cash</h1><p>If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/14.jpg", "martop" => "30", "headpg" => "Borrow Cash", "headtxtcolor" => "white", "headalt" => "Borrow Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Borrow Cash');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('borrow cash, money mart payday loan, easy loans canada, pay loan, get you money, e transfer online, no credit check loans online instant approval, quick cash loans online, Payday Loans Guelph Ontario');
              return view('lp.lptemplate', $data);
            }
  public function moneymartpaydayloan() { $track = $this->tracker();
   $txtlp = '<h1>Money Mart Payday Loan</h1><p>Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment.</p>';
   $data = ["bannerbg" => "land/15.jpg", "martop" => "30", "headpg" => "Money Mart Payday Loan", "headtxtcolor" => "white", "headalt" => "Money Mart Payday Loan", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money Mart Payday Loan');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment.');
    SEOMeta::addKeyword('money mart payday loan, easy loans canada, pay loan, get you money, e transfer online, no credit check loans online instant approval, quick cash loans online, Payday Loans Guelph Ontario, money tree payday loans');
              return view('lp.lptemplate', $data);
            }
  public function easyloanscanada() { $track = $this->tracker();
   $txtlp = '<h1>Easy Loans Canada</h1><p>If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/16.jpg", "martop" => "30", "headpg" => "Easy Loans Canada", "headtxtcolor" => "white", "headalt" => "Easy Loans Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Easy Loans Canada');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('easy loans canada, pay loan, get you money, e transfer online, no credit check loans online instant approval, quick cash loans online, Payday Loans Guelph Ontario, money tree payday loans, online loans on child tax benefit');
              return view('lp.lptemplate', $data);
            }
  public function payloan() { $track = $this->tracker();
   $txtlp = '<h1>Pay Loan</h1><p>We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/17.jpg", "martop" => "30", "headpg" => "Pay Loan", "headtxtcolor" => "white", "headalt" => "Pay Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Pay Loan');
    SEOMeta::setDescription('We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('pay loan, get you money, e transfer online, no credit check loans online instant approval, quick cash loans online, Payday Loans Guelph Ontario, money tree payday loans, online loans on child tax benefit, income support alberta');
              return view('lp.lptemplate', $data);
            }
  public function getyoumoney() { $track = $this->tracker();
   $txtlp = '<h1>Get You Money</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/18.jpg", "martop" => "30", "headpg" => "Get You Money", "headtxtcolor" => "white", "headalt" => "Get You Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Get You Money');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('get you money, e transfer online, no credit check loans online instant approval, quick cash loans online, Payday Loans Guelph Ontario, money tree payday loans, online loans on child tax benefit, income support alberta, my online cash');
              return view('lp.lptemplate', $data);
            }
  public function etransferonline() { $track = $this->tracker();
   $txtlp = '<h1>E Transfer Online</h1><p>Canadians are smart and savvy, which is why they’re recognizing the value of fast easy transparent and responsible PayDay Loan, when life throws the unexpected at them.</p>';
   $data = ["bannerbg" => "land/19.jpg", "martop" => "30", "headpg" => "E Transfer Online", "headtxtcolor" => "white", "headalt" => "E Transfer Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('E Transfer Online');
    SEOMeta::setDescription('Canadians are smart and savvy, which is why they’re recognizing the value of fast easy transparent and responsible PayDay Loan, when life throws the unexpected at them.');
    SEOMeta::addKeyword('e transfer online, no credit check loans online instant approval, quick cash loans online, Payday Loans Guelph Ontario, money tree payday loans, online loans on child tax benefit, income support alberta, my online cash, Payday Loans Calgary Alberta');
              return view('lp.lptemplate', $data);
            }
  public function nocreditcheckloansonlineinstantapproval() { $track = $this->tracker();
   $txtlp = '<h1>No Credit Check Lans Online Instant Approval</h1><p>Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/20.jpg", "martop" => "30", "headpg" => "No Credit Check Lans Online Instant Approval", "headtxtcolor" => "white", "headalt" => "No Credit Check Lans Online Instant Approval", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('No Credit Check Lans Online Instant Approval');
    SEOMeta::setDescription('Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('no credit check loans online instant approval, quick cash loans online, Payday Loans Guelph Ontario, money tree payday loans, online loans on child tax benefit, income support alberta, my online cash, Payday Loans Calgary Alberta, lamina');
              return view('lp.lptemplate', $data);
            }
  public function quickcashloansonline() { $track = $this->tracker();
   $txtlp = '<h1>Quick Cash Loans Online</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/21.jpg", "martop" => "30", "headpg" => "Quick Cash Loans Online", "headtxtcolor" => "white", "headalt" => "Quick Cash Loans Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Quick Cash Loans Online');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('quick cash loans online, Payday Loans Guelph Ontario, money tree payday loans, online loans on child tax benefit, income support alberta, my online cash, Payday Loans Calgary Alberta, lamina, credit');
              return view('lp.lptemplate', $data);
            }
  public function paydayloansguelphontario() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Guelph Ontario</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/22.jpg", "martop" => "30", "headpg" => "Payday Loans Guelph Ontario", "headtxtcolor" => "white", "headalt" => "Payday Loans Guelph Ontario", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Guelph Ontario');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('Payday Loans Guelph Ontario, money tree payday loans, online loans on child tax benefit, income support alberta, my online cash, Payday Loans Calgary Alberta, lamina, credit, child tax loans');
              return view('lp.lptemplate', $data);
            }
  public function moneytreepaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>Money Tree Payday Loans</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/23.jpg", "martop" => "30", "headpg" => "Money Tree Payday Loans", "headtxtcolor" => "white", "headalt" => "Money Tree Payday Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money Tree Payday Loans');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('money tree payday loans, online loans on child tax benefit, income support alberta, my online cash, Payday Loans Calgary Alberta, lamina, credit, child tax loans, poor credit loans canada');
              return view('lp.lptemplate', $data);
            }
  public function onlineloansonchildtaxbenefit() { $track = $this->tracker();
   $txtlp = '<h1>Online Loans On Child Tax Benefit</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/24.jpg", "martop" => "30", "headpg" => "Online Loans On Child Tax Benefit", "headtxtcolor" => "white", "headalt" => "Online Loans On Child Tax Benefit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Online Loans On Child Tax Benefit');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('online loans on child tax benefit, income support alberta, my online cash, Payday Loans Calgary Alberta, lamina, credit, child tax loans, poor credit loans canada, cash advance loans near me');
              return view('lp.lptemplate', $data);
            }
  public function incomesupportalberta() { $track = $this->tracker();
   $txtlp = '<h1>Income Support Alberta</h1><p>Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/25.jpg", "martop" => "30", "headpg" => "Income Support Alberta", "headtxtcolor" => "white", "headalt" => "Income Support Alberta", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Income Support Alberta');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
    SEOMeta::addKeyword('income support alberta, my online cash, Payday Loans Calgary Alberta, lamina, credit, child tax loans, poor credit loans canada, cash advance loans near me, how gain money');
              return view('lp.lptemplate', $data);
            }
  public function myonlinecash() { $track = $this->tracker();
   $txtlp = '<h1>My Online Cash</h1><p>Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans get approved for, and receive their funds quickly and easily.</p>';
   $data = ["bannerbg" => "land/26.jpg", "martop" => "30", "headpg" => "My Online Cash", "headtxtcolor" => "white", "headalt" => "My Online Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('My Online Cash');
    SEOMeta::setDescription('Mega Cash Bucks is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans get approved for, and receive their funds quickly and easily.');
    SEOMeta::addKeyword('my online cash, Payday Loans Calgary Alberta, lamina, credit, child tax loans, poor credit loans canada, cash advance loans near me, how gain money, 24 hour cash money');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanscalgaryalberta() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Calgary Alberta</h1><p>If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/27.jpg", "martop" => "30", "headpg" => "Payday Loans Calgary Alberta", "headtxtcolor" => "white", "headalt" => "Payday Loans Calgary Alberta", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Calgary Alberta');
    SEOMeta::setDescription('If you’re looking for a Payday Loans Calgary Alberta with a trusted direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('Payday Loans Calgary Alberta, lamina, credit, child tax loans, poor credit loans canada, cash advance loans near me, how gain money, 24 hour cash money, payday');
              return view('lp.lptemplate', $data);
            }
  public function lamina() { $track = $this->tracker();
   $txtlp = '<h1>Lamina</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "Lamina", "headtxtcolor" => "white", "headalt" => "Lamina", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Lamina');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('lamina, credit, child tax loans, poor credit loans canada, cash advance loans near me, how gain money, 24 hour cash money, payday, e transfer payday loans canada 24 7');
              return view('lp.lptemplate', $data);
            }
  public function credit() { $track = $this->tracker();
   $txtlp = '<h1>Credit</h1><p>Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Credit", "headtxtcolor" => "white", "headalt" => "Credit", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Credit');
    SEOMeta::setDescription('Look forward to more great Payday Loans No Credit Check opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('credit, child tax loans, poor credit loans canada, cash advance loans near me, how gain money, 24 hour cash money, payday, e transfer payday loans canada 24 7, online credit card');
              return view('lp.lptemplate', $data);
            }
  public function childtaxloans() { $track = $this->tracker();
   $txtlp = '<h1>Child Tax Loans</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/3.jpg", "martop" => "30", "headpg" => "Child Tax Loans", "headtxtcolor" => "white", "headalt" => "Child Tax Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Child Tax Loans');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('child tax loans, poor credit loans canada, cash advance loans near me, how gain money, 24 hour cash money, payday, e transfer payday loans canada 24 7, online credit card, payday advance online');
              return view('lp.lptemplate', $data);
            }
  public function poorcreditloanscanada() { $track = $this->tracker();
   $txtlp = '<h1>Poor Credit Loans Canada</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "Poor Credit Loans Canada", "headtxtcolor" => "white", "headalt" => "Poor Credit Loans Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Poor Credit Loans Canada');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('poor credit loans canada, cash advance loans near me, how gain money, 24 hour cash money, payday, e transfer payday loans canada 24 7, online credit card, payday advance online, payday loan store');
              return view('lp.lptemplate', $data);
            }
  public function cashadvanceloansnearme() { $track = $this->tracker();
   $txtlp = '<h1>Cash Advance Loans Near Me</h1><p>Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/4.jpg", "martop" => "30", "headpg" => "Cash Advance Loans Near Me", "headtxtcolor" => "white", "headalt" => "Cash Advance Loans Near Me", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Cash Advance Loans Near Me');
    SEOMeta::setDescription('Our Payday Loans with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('cash advance loans near me, how gain money, 24 hour cash money, payday, e transfer payday loans canada 24 7, online credit card, payday advance online, payday loan store, emergency money');
              return view('lp.lptemplate', $data);
            }
  public function howgainmoney() { $track = $this->tracker();
   $txtlp = '<h1>How Gain Money</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/6.jpg", "martop" => "30", "headpg" => "How Gain Money", "headtxtcolor" => "white", "headalt" => "How Gain Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('How Gain Money');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('how gain money, 24 hour cash money, payday, e transfer payday loans canada 24 7, online credit card, payday advance online, payday loan store, emergency money, venue financial');
              return view('lp.lptemplate', $data);
            }
  public function hourcashmoney24() { $track = $this->tracker();
   $txtlp = '<h1>24 Hour Cash Money</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/7.jpg", "martop" => "30", "headpg" => "24 Hour Cash Money", "headtxtcolor" => "white", "headalt" => "24 Hour Cash Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('24 Hour Cash Money');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('24 hour cash money, payday, e transfer payday loans canada 24 7, online credit card, payday advance online, payday loan store, emergency money, venue financial, get money online');
              return view('lp.lptemplate', $data);
            }
  public function payday() { $track = $this->tracker();
   $txtlp = '<h1>Payday</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/8.jpg", "martop" => "30", "headpg" => "Payday", "headtxtcolor" => "white", "headalt" => "Payday", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('payday, e transfer payday loans canada 24 7, online credit card, payday advance online, payday loan store, emergency money, venue financial, get money online, loans com');
              return view('lp.lptemplate', $data);
            }
  public function etransferpaydayloanscanada247() { $track = $this->tracker();
   $txtlp = '<h1>E Transfer Payday Loans Canada 24 7</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/9.jpg", "martop" => "30", "headpg" => "E Transfer Payday Loans Canada 24 7", "headtxtcolor" => "white", "headalt" => "E Transfer Payday Loans Canada 24 7", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('E Transfer Payday Loans Canada 24 7');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('e transfer payday loans canada 24 7, online credit card, payday advance online, payday loan store, emergency money, venue financial, get money online, loans com, money i get money');
              return view('lp.lptemplate', $data);
            }
  public function onlinecreditcard() { $track = $this->tracker();
   $txtlp = '<h1>Online Credit Card</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/10.jpg", "martop" => "30", "headpg" => "Online Credit Card", "headtxtcolor" => "white", "headalt" => "Online Credit Card", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Online Credit Card');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('online credit card, payday advance online, payday loan store, emergency money, venue financial, get money online, loans com, money i get money, presto cash');
              return view('lp.lptemplate', $data);
            }
  public function paydayadvanceonline() { $track = $this->tracker();
   $txtlp = '<h1>Payday Advance Online</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/11.jpg", "martop" => "30", "headpg" => "Payday Advance Online", "headtxtcolor" => "white", "headalt" => "Payday Advance Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Advance Online');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('payday advance online, payday loan store, emergency money, venue financial, get money online, loans com, money i get money, presto cash, fast cash canada');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanstore() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loan Store</h1><p>If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/12.jpg", "martop" => "30", "headpg" => "Payday Loan Store", "headtxtcolor" => "white", "headalt" => "Payday Loan Store", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loan Store');
    SEOMeta::setDescription('If you’re looking for a Payday Loans No Credit Check with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday loan store, emergency money, venue financial, get money online, loans com, money i get money, presto cash, fast cash canada, employment insurance payday loans');
              return view('lp.lptemplate', $data);
            }
  public function emergencymoney() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Money</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/13.jpg", "martop" => "30", "headpg" => "Emergency Money", "headtxtcolor" => "white", "headalt" => "Emergency Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Money');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('emergency money, venue financial, get money online, loans com, money i get money, presto cash, fast cash canada, employment insurance payday loans, payday loans child tax');
              return view('lp.lptemplate', $data);
            }
  public function venuefinancial() { $track = $this->tracker();
   $txtlp = '<h1>Venue Financial</h1><p>If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/14.jpg", "martop" => "30", "headpg" => "Venue Financial", "headtxtcolor" => "white", "headalt" => "Venue Financial", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Venue Financial');
    SEOMeta::setDescription('If you’re looking for a Payday Loans Online with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('venue financial, get money online, loans com, money i get money, presto cash, fast cash canada, employment insurance payday loans, payday loans child tax, emergency same day loans');
              return view('lp.lptemplate', $data);
            }
  public function getmoneyonline() { $track = $this->tracker();
   $txtlp = '<h1>Get Money Online</h1><p>We know that things happen in life and sometimes you need Cash Money for unexpected expenses.</p>';
   $data = ["bannerbg" => "land/15.jpg", "martop" => "30", "headpg" => "Get Money Online", "headtxtcolor" => "white", "headalt" => "Get Money Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Get Money Online');
    SEOMeta::setDescription('We know that things happen in life and sometimes you need Cash Money for unexpected expenses.');
    SEOMeta::addKeyword('get money online, loans com, money i get money, presto cash, fast cash canada, employment insurance payday loans, payday loans child tax, emergency same day loans, fast short term loans');
              return view('lp.lptemplate', $data);
            }
  public function loanscom() { $track = $this->tracker();
   $txtlp = '<h1>Loans com</h1><p>moretexthere</p>';
   $data = ["bannerbg" => "land/16.jpg", "martop" => "30", "headpg" => "Loans com", "headtxtcolor" => "white", "headalt" => "Loans com", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loans com');
    SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans from the comfort of your couch. Our advanced assessment tools instantly determines your eligibility.');
    SEOMeta::addKeyword('loans com, money i get money, presto cash, fast cash canada, employment insurance payday loans, payday loans child tax, emergency same day loans, fast short term loans, financial support');
              return view('lp.lptemplate', $data);
            }
  public function moneyigetmoney() { $track = $this->tracker();
   $txtlp = '<h1>Money I Get Money</h1><p>Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.</p>';
   $data = ["bannerbg" => "land/17.jpg", "martop" => "30", "headpg" => "Money I Get Money", "headtxtcolor" => "white", "headalt" => "Money I Get Money", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Money I Get Money');
    SEOMeta::setDescription('Mega Cash Bucks has developed an innovative, 24 Hour Payday Loans process that allows Canadians to apply, get approved, and receive their funds, all in the same day.');
    SEOMeta::addKeyword('money i get money, presto cash, fast cash canada, employment insurance payday loans, payday loans child tax, emergency same day loans, fast short term loans, financial support, no income loans');
              return view('lp.lptemplate', $data);
            }
  public function prestocash() { $track = $this->tracker();
   $txtlp = '<h1>Presto Cash</h1><p>We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/18.jpg", "martop" => "30", "headpg" => "Presto Cash", "headtxtcolor" => "white", "headalt" => "Presto Cash", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Presto Cash');
    SEOMeta::setDescription('We offer you a Online Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('presto cash, fast cash canada, employment insurance payday loans, payday loans child tax, emergency same day loans, fast short term loans, financial support, no income loans, need help financially');
              return view('lp.lptemplate', $data);
            }
  public function fastcashcanada() { $track = $this->tracker();
   $txtlp = '<h1>Fast Cash Canada</h1><p>If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/19.jpg", "martop" => "30", "headpg" => "Fast Cash Canada", "headtxtcolor" => "white", "headalt" => "Fast Cash Canada", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Cash Canada');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('fast cash canada, employment insurance payday loans, payday loans child tax, emergency same day loans, fast short term loans, financial support, no income loans, need help financially, poor credit loan');
              return view('lp.lptemplate', $data);
            }
  public function employmentinsurancepaydayloans() { $track = $this->tracker();
   $txtlp = '<h1>Employment Insurance Payday Loans</h1><p>Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in 1, 2 or 3 installments.</p>';
   $data = ["bannerbg" => "land/20.jpg", "martop" => "30", "headpg" => "Employment Insurance Payday Loans", "headtxtcolor" => "white", "headalt" => "Employment Insurance Payday Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Employment Insurance Payday Loans');
    SEOMeta::setDescription('Mega Cash Bucks has brought a great solution. We have a Payday Loans. This is one you can pay back in 1, 2 or 3 installments.');
    SEOMeta::addKeyword('employment insurance payday loans, payday loans child tax, emergency same day loans, fast short term loans, financial support, no income loans, need help financially, poor credit loan, 500 loans');
              return view('lp.lptemplate', $data);
            }
  public function paydayloanschildtax() { $track = $this->tracker();
   $txtlp = '<h1>Payday Loans Child Tax</h1><p>If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/21.jpg", "martop" => "30", "headpg" => "Payday Loans Child Tax", "headtxtcolor" => "white", "headalt" => "Payday Loans Child Tax", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Payday Loans Child Tax');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with No Credit Check, with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('payday loans child tax, emergency same day loans, fast short term loans, financial support, no income loans, need help financially, poor credit loan, 500 loans, loans instant');
              return view('lp.lptemplate', $data);
            }
  public function emergencysamedayloans() { $track = $this->tracker();
   $txtlp = '<h1>Emergency Same Day Loans</h1><p>We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>';
   $data = ["bannerbg" => "land/22.jpg", "martop" => "30", "headpg" => "Emergency Same Day Loans", "headtxtcolor" => "white", "headalt" => "Emergency Same Day Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Emergency Same Day Loans');
    SEOMeta::setDescription('We offer you a Payday Loans that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
    SEOMeta::addKeyword('emergency same day loans, fast short term loans, financial support, no income loans, need help financially, poor credit loan, 500 loans, loans instant, instant cash loan');
              return view('lp.lptemplate', $data);
            }
  public function fastshorttermloans() { $track = $this->tracker();
   $txtlp = '<h1>Fast Short Term Loans</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/23.jpg", "martop" => "30", "headpg" => "Fast Short Term Loans", "headtxtcolor" => "white", "headalt" => "Fast Short Term Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Fast Short Term Loans');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('fast short term loans, financial support, no income loans, need help financially, poor credit loan, 500 loans, loans instant, instant cash loan, get a personal loan');
              return view('lp.lptemplate', $data);
            }
  public function financialsupport() { $track = $this->tracker();
   $txtlp = '<h1>Financial Support</h1><p>Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.</p>';
   $data = ["bannerbg" => "land/24.jpg", "martop" => "30", "headpg" => "Financial Support", "headtxtcolor" => "white", "headalt" => "Financial Support", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Financial Support');
    SEOMeta::setDescription('Canadians are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan when life throws the unexpected at them.');
    SEOMeta::addKeyword('financial support, no income loans, need help financially, poor credit loan, 500 loans, loans instant, get a personal loan, easy cash canada, a loan');
              return view('lp.lptemplate', $data);
            }
  public function noincomeloans() { $track = $this->tracker();
   $txtlp = '<h1>No Income Loans</h1><p>Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/25.jpg", "martop" => "30", "headpg" => "No Income Loans", "headtxtcolor" => "white", "headalt" => "No Income Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('No Income Loans');
    SEOMeta::setDescription('Mega Cash Bucks Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('no income loans, need help financially, poor credit loan, 500 loans, loans instant, get a personal loan, easy cash canada, a loan, no credit check loan');
              return view('lp.lptemplate', $data);
            }
  public function needhelpfinancially() { $track = $this->tracker();
   $txtlp = '<h1>Need Help Financially</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/26.jpg", "martop" => "30", "headpg" => "Need Help Financially", "headtxtcolor" => "white", "headalt" => "Need Help Financially", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Need Help Financially');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('need help financially, poor credit loan, 500 loans, loans instant, get a personal loan, easy cash canada, a loan, no credit check loan, online lending');
              return view('lp.lptemplate', $data);
            }
  public function poorcreditloan() { $track = $this->tracker();
   $txtlp = '<h1>txt here</h1><p>Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>';
   $data = ["bannerbg" => "land/27.jpg", "martop" => "30", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Poor Credit Loan');
    SEOMeta::setDescription('Our Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
    SEOMeta::addKeyword('poor credit loan, 500 loans, loans instant, get a personal loan, easy cash canada, a loan, no credit check loan, online lending, quick loans online');
              return view('lp.lptemplate', $data);
            }
  public function loans500() { $track = $this->tracker();
   $txtlp = '<h1>500 Loans</h1><p>Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.</p>';
   $data = ["bannerbg" => "land/1.jpg", "martop" => "30", "headpg" => "500 Loans", "headtxtcolor" => "white", "headalt" => "500 Loans", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('500 Loans');
    SEOMeta::setDescription('Look forward to more great Payday Loans opportunities as we work to make your financial life easier and happier.');
    SEOMeta::addKeyword('500 loans, loans instant, get a personal loan, easy cash canada, a loan, no credit check loan, online lending, quick loans online, payday loans bad credit');
              return view('lp.lptemplate', $data);
            }
  public function loansinstant() { $track = $this->tracker();
   $txtlp = '<h1>Loans Instant</h1><p>If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.</p>';
   $data = ["bannerbg" => "land/2.jpg", "martop" => "30", "headpg" => "Loans Instant", "headtxtcolor" => "white", "headalt" => "Loans Instant", "land" => "1", "lptxt" => $txtlp];
    SEOMeta::setTitle('Loans Instant');
    SEOMeta::setDescription('If you’re looking for a Payday Loans with a trusted, direct lender, Mega Cash Bucks is the company for you.');
    SEOMeta::addKeyword('loans instant, get a personal loan, easy cash canada, a loan, no credit check loan, online lending, quick loans online, payday loans bad credit, bad credit lenders');
    return view('lp.lptemplate', $data);
  }
     public function cash_loans() { $track = $this->tracker();

    {
      $data = ["bannerbg" => "images/category-new.jpg", "headpg" => "CASH LOANS CANADA", "headtxtcolor" => "white", "headalign" => "text-right"];
      SEOMeta::setTitle('Mega Cash Bucks | Cash Money');
      SEOMeta::setDescription('Cash Loans Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
      return view('cash-loans', $data);
    }
  }
}
