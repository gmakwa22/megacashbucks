<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\SEOMeta;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\helpers;

use Mail;
use App\User;
use App\Http\Controllers\Controller;

use Hash;
use Auth;
use File;


class HomeController extends Controller
{
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
    public function index()
    {
        SEOMeta::setTitle('Mega Cash Bucks - Payday Loans');
        return view('home');
    }
    public function getloan()
    {
        return redirect('https://paydayloan.azurewebsites.net/');
    }
    public function getloanfb()
    {
        return redirect()->away('https://www.megacashbucks.com/landing/l3?utm_source=fiv&utm_medium=traffic&utm_id=facebook&utm_content=1');
    }

    public function california()
     {
       setpurlads();
         $data = ["bannerbg" => "states/cali.jpg", "licpr" => "bc", "headsub" => "The funds you need when you need them. USA", "spprov" => "California", "headpg" => "CALIFORNIA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "WATCH OUT FOR FRAUD Best things about VANCOUVER'S BEST PAYDAY LOAN OPTION The Best PayDay Loan in Vancouver Best things about living in Vancouver, BC in Vancouver, Surrey, Victoria, Kelowna, Abbotsford, Burnaby, White Rock, Nanaimo, Kamloops, Chilliwack, Prince George, Vernon, Courtenay, Campbell River, Penticton, Mission, Parksville, Duncan, Ladner, Tsawwassen, Port Alberni, Fort St. John, Cranbrook, Squamish, Terrace, Salmon Arm, Trail-Fruitvale, Powell River, Quesnel, Aldergrove, Prince Rupert, Dawson Creek, Nelson, Ladysmith"];
         SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online California');
          SEOMeta::setDescription('financial hub specializing in low-cost, rapid online payday loans in Vancouver, BC, and swift cash advances with flexible repayment plans. Applying is effortless, and approval is instantaneous! Transfer money conveniently all over Canada');

         return view('/usa/california', $data);
     }
    public function illinois()
     {
       setpurlads();
         $data = ["bannerbg" => "states/illinois.jpg", "licpr" => "bc", "headsub" => "The funds you need when you need them. USA", "spprov" => "Illinois", "headpg" => "ILLINOIS'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "WATCH OUT FOR FRAUD Best things about VANCOUVER'S BEST PAYDAY LOAN OPTION The Best PayDay Loan in Vancouver Best things about living in Vancouver, BC in Illinois, Surrey, Victoria, Kelowna, Abbotsford, Burnaby, White Rock, Nanaimo, Kamloops, Chilliwack, Prince George, Vernon, Courtenay, Campbell River, Penticton, Mission, Parksville, Duncan, Ladner, Tsawwassen, Port Alberni, Fort St. John, Cranbrook, Squamish, Terrace, Salmon Arm, Trail-Fruitvale, Powell River, Quesnel, Aldergrove, Prince Rupert, Dawson Creek, Nelson, Ladysmith"];
         SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Illinois');
          SEOMeta::setDescription('Financial institution offering affordable online payday loans in Vancouver, BC, and fast cash advances with multiple repayment options. The application process is simple, and approval is instant! Enjoy money transfers across Canada.');

         return view('/usa/illinois', $data);
     }
    public function ohio()
     {
       setpurlads();
         $data = ["bannerbg" => "states/ohio.jpg", "licpr" => "bc", "headsub" => "The funds you need when you need them. USA", "spprov" => "Ohio", "headpg" => "OHIO'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "WATCH OUT FOR FRAUD Best things about VANCOUVER'S BEST PAYDAY LOAN OPTION The Best PayDay Loan in Vancouver Best things about living in Vancouver, BC in Vancouver, Surrey, Victoria, Kelowna, Abbotsford, Burnaby, White Rock, Nanaimo, Kamloops, Chilliwack, Prince George, Vernon, Courtenay, Campbell River, Penticton, Mission, Parksville, Duncan, Ladner, Tsawwassen, Port Alberni, Fort St. John, Cranbrook, Squamish, Terrace, Salmon Arm, Trail-Fruitvale, Powell River, Quesnel, Aldergrove, Prince Rupert, Dawson Creek, Nelson, Ladysmith"];
         SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Ohio');
          SEOMeta::setDescription('Mega Cash Bucks  is your go-to financial partner for low-cost online payday loans in Vancouver, BC, and quick cash advances with easy repayment plans. Applying is a breeze, and approval is immediate! Receive funds through convenient transfers all over Canada');

         return view('/usa/ohio', $data);
     }
    public function georgia()
     {
       setpurlads();
         $data = ["bannerbg" => "states/georgia.jpg", "licpr" => "bc", "headsub" => "The funds you need when you need them. USA", "spprov" => "Georgia", "headpg" => "GEORGIA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "WATCH OUT FOR FRAUD Best things about VANCOUVER'S BEST PAYDAY LOAN OPTION The Best PayDay Loan in Vancouver Best things about living in Vancouver, BC in Vancouver, Surrey, Victoria, Kelowna, Abbotsford, Burnaby, White Rock, Nanaimo, Kamloops, Chilliwack, Prince George, Vernon, Courtenay, Campbell River, Penticton, Mission, Parksville, Duncan, Ladner, Tsawwassen, Port Alberni, Fort St. John, Cranbrook, Squamish, Terrace, Salmon Arm, Trail-Fruitvale, Powell River, Quesnel, Aldergrove, Prince Rupert, Dawson Creek, Nelson, Ladysmith"];
         SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Georgia');
          SEOMeta::setDescription('Mega Cash Bucks is a trusted financial service provider offering affordable online payday loans in Vancouver, BC, and rapid cash advances with flexible repayment schedules. The application process is straightforward, and approval is swift! Get your money via transfers available across Canada');

         return view('/usa/georgia', $data);
     }
    public function northcarolina()
     {
       setpurlads();
         $data = ["bannerbg" => "provinces/vancouver.jpg", "licpr" => "bc", "headsub" => "The funds you need when you need them. USA", "spprov" => "North Carolina", "headpg" => "NORTH CAROLINA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "WATCH OUT FOR FRAUD Best things about VANCOUVER'S BEST PAYDAY LOAN OPTION The Best PayDay Loan in Vancouver Best things about living in Vancouver, BC in Vancouver, Surrey, Victoria, Kelowna, Abbotsford, Burnaby, White Rock, Nanaimo, Kamloops, Chilliwack, Prince George, Vernon, Courtenay, Campbell River, Penticton, Mission, Parksville, Duncan, Ladner, Tsawwassen, Port Alberni, Fort St. John, Cranbrook, Squamish, Terrace, Salmon Arm, Trail-Fruitvale, Powell River, Quesnel, Aldergrove, Prince Rupert, Dawson Creek, Nelson, Ladysmith"];
         SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online North Carolina');
          SEOMeta::setDescription('Mega Cash Bucks  is a financial institution providing low-cost online payday loans in Vancouver, BC, and fast cash advances with multiple repayment options. Applying is easy, and approval is instant! Transfer money conveniently all over Canada.');

         return view('/usa/north-carolina', $data);
     }
    public function michigan()
     {
       setpurlads();
         $data = ["bannerbg" => "states/michigan.jpg", "licpr" => "bc", "spprov" => "Michigan", "headsub" => "The funds you need when you need them. USA",  "headpg" => "MICHIGAN'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "WATCH OUT FOR FRAUD Best things about VANCOUVER'S BEST PAYDAY LOAN OPTION The Best PayDay Loan in Vancouver Best things about living in Vancouver, BC in Vancouver, Surrey, Victoria, Kelowna, Abbotsford, Burnaby, White Rock, Nanaimo, Kamloops, Chilliwack, Prince George, Vernon, Courtenay, Campbell River, Penticton, Mission, Parksville, Duncan, Ladner, Tsawwassen, Port Alberni, Fort St. John, Cranbrook, Squamish, Terrace, Salmon Arm, Trail-Fruitvale, Powell River, Quesnel, Aldergrove, Prince Rupert, Dawson Creek, Nelson, Ladysmith"];
         SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Michigan');
          SEOMeta::setDescription('Mega Cash Bucks  is your trusted source for affordable online payday loans in Vancouver, BC, and quick cash advances with easy repayment options. The application process is simple, and approval is immediate! Experience swift money transfers available nationwide.');

         return view('/usa/michigan', $data);
     }

    public function welcome()
    {
setpurlads();
      $weekMap = [
       0 => 'l9',
       1 => 'l7',
       2 => 'l3',
       3 => 'l3',
       4 => 'l6',
       5 => 'l7',
       6 => 'l9', ];
       $dayOfTheWeek = Carbon::now()->dayOfWeek;
       $weekday = $weekMap[$dayOfTheWeek];

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
        'b04' => '13',
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
        'b16' => '25',
        'b17' => '25',
        'b18' => '26',
        'b19' => '14',
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

        // $data = ["bannerbg" => "home-payday-loans.jpg", "licpr" => "bc"];
        $data = ["bannerbg" => "/land/$monthday.jpg", "headsub" => "The funds you need when you need them.", "headalign" => "text-right", "headsub" => "The funds you need when you need them.", "licpopwarning" => "megacashbucks", "martop" => "31", "headtxtsize" => "4",  "headtxtcolor" => "white", "headalt" => "Fast and secure hassle-free loans Alberta British Columbia Manitoba New Brunswick Newfoundland and Labrador Northwest Territories Nova Scotia Nunavut."];
        SEOMeta::setTitle('Wise Payday Loans Online in Canada | Mega Cash Bucks');
        SEOMeta::setDescription('Mega Cash Bucks is  is a financial institution specializing in providing low-cost online payday loans and speedy cash advances with easy repayment options. Applying is a snap, and approval is instant! Receive funds via e-transfer across all regions of Canada.');
        SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('welcomehome', $data);
    }

    public function lp($key)
     {
         setpurlads();
         $today = date("d");
         $myday = date('d', strtotime($today. ' + 5 days'));
         $b = "b".$myday;

         $data = ["bannerbg" => "/land/$key.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "CANADA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "martop" => "30", "land" => $key, "headalt" => "CANADA'S BEST PAYDAY LOAN OPTION Some other Alberta cities where we provide loans WHAT'S THE BEST LOAN FOR YOU? Helpful information about Alberta, Canada $today $b"];
         SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Alberta');
         return view('landing', $data);
     }
     public function login()
     {
      Session::forget('purl');
      $data = ["bannerbg" => "images/52.jpg", "licpr" => "on", "headpg" => "SAME DAY LOANS", "martop" => "45", "headtxtcolor" => "white"];
      SEOMeta::setTitle('Mega Cash Bucks | Same Day Loans');
      SEOMeta::setDescription('Do You Have A Question about Your etransfer same day payday loans in canada, Short Term Loans Or Cash Advance Loan Interest Rates, How They Work? Contact Mega Cash Bucks. The Trusted Payday Advance In Canada.');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
      return view('login', $data);
     }
    public function landing($key)
     {
         setpurlads();
         $today = date("d");
         $myday = date('d', strtotime($today. ' + 5 days'));
         $b = "b".$myday;

         $data = ["bannerbg" => "/land/26.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "ALBERTA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "martop" => "30", "land" => $key, "headalt" => "ALBERTA'S BEST PAYDAY LOAN OPTION Some other Alberta cities where we provide loans WHAT'S THE BEST LOAN FOR YOU? Helpful information about Alberta, Canada $today $b"];
         SEOMeta::setTitle('Wise Payday Loans Online in Canada | Mega Cash Bucks');
         SEOMeta::setDescription('Mega Cash Bucks is a financial service provider offering cost-effective online payday loans and fast cash advances with flexible repayment schedules. The application is hassle-free, and approval is swift! Get your money via e-transfer, available throughout Canada.');
         SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
         return view('landing', $data);
     }
     public function bestjobsincanada()
      {
          setpurlads();
          $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "Top 15 Best Work-From-Home Jobs in Canada", "headtxtcolor" => "white", "headalt" => "ALBERTA'S BEST PAYDAY LOAN OPTION Some other Alberta cities where we provide loans WHAT'S THE BEST LOAN FOR YOU? Helpful information about Alberta, Canada"];
          SEOMeta::setTitle('Mega Cash Bucks | Best Jobs in Canada');
          SEOMeta::setDescription('Payday Loans Alberta | Need Instant Payday Loans Online? Get Up To $1500');
          SEOMeta::addKeyword('loans alberta, bad credit loans alberta, cash loans alberta, instant payday loans alberta, online loans alberta, quick loans alberta, quick loans in alberta, loan companies alberta, cash advance alberta, cash advance loans alberta, cash advance alberta, cash for you now alberta, cash king alberta, cash money alberta, cash shop alberta, cash store alberta, direct cash alberta, ez loan alberta, fast cash loans alberta, money loans alberta, money mart alberta, money alberta, payday loans alberta');
          return view('best-work-from-home-jobs-in-canada', $data);
      }
      public function guaranteedpaydayloansnomatterwhatcanada()
       {
           setpurlads();
           $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "GUARANTEED PAYDAY LOANS NO MATTER WHAT CANADA", "headtxtcolor" => "white", "headalt" => "GUARANTEED PAYDAY LOANS NO MATTER WHAT CANADA"];
           SEOMeta::setTitle('Mega Cash Bucks | Guaranteed Pay Day Loans');
           SEOMeta::setDescription('Payday Loans Alberta | Need Instant Payday Loans Online? Get Up To $1500');
           SEOMeta::addKeyword('loans alberta, bad credit loans alberta, cash loans alberta, instant payday loans alberta, online loans alberta, quick loans alberta, quick loans in alberta, loan companies alberta, cash advance alberta, cash advance loans alberta, cash advance alberta, cash for you now alberta, cash king alberta, cash money alberta, cash shop alberta, cash store alberta, direct cash alberta, ez loan alberta, fast cash loans alberta, money loans alberta, money mart alberta, money alberta, payday loans alberta');
           return view('guaranteed-payday-loans-no-matter-what-canada', $data);
       }

  public function alberta()
   {
       setpurlads();
       $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "Online Instant Payday Loans in Alberta", "headtxtcolor" => "white", "headalt" => "payday loans alberta"];
       SEOMeta::setTitle('Online Instant Payday Loans in Alberta | Loans in Alberta');
       SEOMeta::setDescription('Mega Cash Bucks provides online instant payday loans in Alberta to the people with bad credit who need fast cash by affordable installments and interest rates.');
       SEOMeta::addKeyword('online instant payday loans alberta, no credit check payday loans alberta, loans in alberta, alberta payday loan, alberta payday loans, online loans alberta, payday loans alberta');
       return view('alberta', $data);
   }
   public function mobilehome()
    {
        setpurlads();
        $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "ALBERTA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "martop" => "14", "headalt" => "ALBERTA'S BEST PAYDAY LOAN OPTION Some other Alberta cities where we provide loans WHAT'S THE BEST LOAN FOR YOU? Helpful information about Alberta, Canada"];
        SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Alberta');
        return view('mobile-home', $data);
    }
   public function albertaprovinces()
    {
        setpurlads();
        $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "ALBERTA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "ALBERTA'S BEST PAYDAY LOAN OPTION Some other Alberta cities where we provide loans WHAT'S THE BEST LOAN FOR YOU? Helpful information about Alberta, Canada"];
        SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Alberta');
        return view('albertaprovinces', $data);
    }



public function brc()
  {
      setpurlads();
      $data = ["bannerbg" => "provinces/british-columbia.jpg", "licpr" => "bc", "spprov" => "British Columbia", "headpg" => "Online Payday Loans British Columbia", "headtxtcolor" => "white", "headalt" => "paydayloans bc, payday loans bc"];
      SEOMeta::setTitle('Online Payday Loans British Columbia | BC Payday Loans');
      SEOMeta::setDescription('An online payday loan in British Columbia gives fast and quick money to the needy person. Register and apply for a quick loan and get instant approval.');
      SEOMeta::addKeyword('online payday loans british columbia, payday loans in surrey bc, bc payday loans, paydayloans bc, payday loans bc');
      return view('brc', $data);
  }
  public function bccities()
    {
        setpurlads();
        $data = ["bannerbg" => "provinces/british-columbia.jpg", "licpr" => "bc", "spprov" => "British Columbia", "headpg" => "BRITISH COLUMBIA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "BRITISH COLUMBIA'S BEST PAYDAY LOAN OPTION The Payday Loan British Columbians Need Some British Columbia cities UNDERSTAND YOUR FEE OBLIGATIONS OPT FOR TRANSPARENCY British Columbia, Canada"];
        SEOMeta::setTitle('British Columbia Cities | Safe Trusted Licensed Lender');
        SEOMeta::setDescription('Obtain swift financial assistance with our online payday loans in British Columbia. We provide fast and quick money to individuals in need. Simply register and apply for a quick loan to receive instant approval, addressing your urgent financial requirements promptly.');
        return view('bccities', $data);
    }


public function vancouver()
 {
   setpurlads();
     $data = ["bannerbg" => "provinces/vancouver.jpg", "licpr" => "bc", "spprov" => "Vancouver BC", "headpg" => "VANCOUVER'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "WATCH OUT FOR FRAUD Best things about VANCOUVER'S BEST PAYDAY LOAN OPTION The Best PayDay Loan in Vancouver Best things about living in Vancouver, BC in Vancouver, Surrey, Victoria, Kelowna, Abbotsford, Burnaby, White Rock, Nanaimo, Kamloops, Chilliwack, Prince George, Vernon, Courtenay, Campbell River, Penticton, Mission, Parksville, Duncan, Ladner, Tsawwassen, Port Alberni, Fort St. John, Cranbrook, Squamish, Terrace, Salmon Arm, Trail-Fruitvale, Powell River, Quesnel, Aldergrove, Prince Rupert, Dawson Creek, Nelson, Ladysmith"];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Vancouver');
      SEOMeta::setDescription('Financial institution providing low cost quick online payday loans Vancouver BC and fast cash advances in multiple repayments. Easy to apply and instant approval! Money by e-transfer all over Canada. Payday Loans BC');

     return view('payday-loans-vancouver', $data);
 }
 public function surrey()
  {
    setpurlads();
      $data = ["bannerbg" => "provinces/28.jpg", "licpr" => "bc", "spprov" => "Surrey BC", "headpg" => "SURREY'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "PayDay Loan in Surrey"];
      SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Surrey BC');
       SEOMeta::setDescription('Financial institution providing low cost Surrey BC quick online payday loans and fast cash advances in multiple repayments. Easy to apply and instant approval! Money by e-transfer all over Canada.');
      SEOMeta::addKeyword('Payday Loans BC, Payday Loans Surrey, due date, personal loans, car repair, application processes, loans in bc, apply online, loan application source of income');
      return view('payday-loans-surrey', $data);
  }
  public function burnaby()
   {
     setpurlads();
       $data = ["bannerbg" => "provinces/burnaby.jpg", "licpr" => "bc", "spprov" => "Burnaby BC", "headpg" => "BURNABY'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "PayDay Loan in Burnaby"];
       SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Burnaby BC');
       SEOMeta::setDescription('Register now with Mega Cash Bucks and get a Burnaby BC payday loan instantly. We also give fast online loans in Canada for every business.');
       SEOMeta::addKeyword('PayDay Loan in Burnaby');
       return view('payday-loans-burnaby', $data);
   }


  // public function newbrunswick()
  // {
  //    $data = ["bannerbg" => "provinces/new-brunswick.jpg", "licpr" => "nb", "spprov" => "New Brunswick", "headpg" => "NEW BRUNSWICK'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "NEW BRUNSWICK'S BEST PAYDAY LOAN OPTION Mega Cash Bucks has come to New Brunswick! The “Picture Province” has a great opportunity As Mega Cash Bucks has expanded across Canada, we are now proud to open our doors for business in beautiful New Brunswick. We’ve been warmly welcomed and really appreciate it."];
  //    SEOMeta::setTitle('Mega Cash Bucks | Need Instant Payday Loans Online in Alberta, NB? Get Up To $1500 From a Safe Trusted Licensed Lender. Easy Application. Multiple repayments, 5 Minutes‎‎ e-Transfer.');
  //    return view('payday-loans-new-brunswick', $data);
  // }
  // public function fredericton()
  // {
  //    $data = ["bannerbg" => "provinces/63.jpg", "licpr" => "nb", "spprov" => "Fredericton", "headpg" => "FREDERICTON'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white"];
  //    SEOMeta::setTitle('Mega Cash Bucks | Need Instant Payday Loans Online in Fredericton, NB? Get Up To $1500 From a Safe Trusted Licensed Lender. Easy Application. Multiple repayments, 5 Minutes‎‎ e-Transfer.');
  //    return view('payday-loans-fredericton', $data);
  // }
  // public function moncton()
  // {
  //    $data = ["bannerbg" => "provinces/63.jpg", "licpr" => "nb", "spprov" => "Moncton", "headpg" => "MONCTON'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white"];
  //    SEOMeta::setTitle('Mega Cash Bucks | Need Instant Payday Loans Online in Moncton, NB? Get Up To $1500 From a Safe Trusted Licensed Lender. Easy Application. Multiple repayments, 5 Minutes‎‎ e-Transfer.');
  //    return view('payday-loans-moncton', $data);
  // }
  // public function saintjohn()
  // {
  //    $data = ["bannerbg" => "provinces/saint-john.jpg", "licpr" => "nb", "spprov" => "Saint John", "headpg" => "ST JOHN'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "FREDERICTON'S BEST PAYDAY LOAN OPTION Fredericton’s Best PayDay Loans As the capital city of New Brunswick, we know that the folks of Fredericton are familiar with leading the way into great new opportunities for the province. So, we’re overjoyed with the warm reception that Mega Cash Bucks has received from its new customers in this great city."];
  //    SEOMeta::setTitle('Mega Cash Bucks | Need Instant Payday Loans Online in Saint John, NB? Get Up To $1500 From a Safe Trusted Licensed Lender. Easy Application. Multiple repayments, 5 Minutes‎‎ e-Transfer.');
  //    return view('payday-loans-saint-john', $data);
  // }

  public function manitoba()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/manitoba.jpg", "licpr" => "mb", "spprov" => "Manitoba", "headpg" => "Payday Loans Manitoba No Credit Check", "headtxtcolor" => "white", "headalt" => "payday loans manitoba no credit check"];
     SEOMeta::setTitle('Payday Loans Manitoba No Credit Check');
     SEOMeta::setDescription('We offer you application choices for Manitoba loans online which is quick and easy. So don\'t miss this chance to get a payday loan in Manitoba with no credit check.');
SEOMeta::addKeyword('payday loans selkirk manitoba, payday loans the pas manitoba, payday loans winkler manitoba, payday loans manitoba no credit check');
     return view('payday-loans-manitoba', $data);
  }
  public function thompson()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/thompson.jpg", "licpr" => "mb", "spprov" => "Thompson", "headpg" => "THOMPSON'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "payday loans Thompson"];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online in Thompson');
     SEOMeta::setDescription('Our easy application process for payday loans in Thompson can get your payday loan online easily. So apply fast and get a quick approval for payday loan.');
SEOMeta::addKeyword('Online cash loans in Thompson, Manitoba, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, payday loans, loans for payday, payday loans with bad credit, payday loan for bad credit customer, loans in MB');
     return view('payday-loans-thompson', $data);
  }

  public function thepas()
  {
    setpurlads();
  $data = ["bannerbg" => "a-prov/the-pas.jpg", "licpr" => "mb", "spprov" => "The Pas", "headpg" => "THE PAS BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "payday loans the pas"];
  SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online The Pas MB');
  SEOMeta::setDescription('Our easy application process for The Pas MB payday loans can get your payday loan online easily. So apply fast and get a quick approval for a payday loan.');
  SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
     return view('payday-loans-the-pas', $data);
  }

  public function brandon()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/brandon.jpg", "licpr" => "mb", "spprov" => "Brandon", "headpg" => "BRANDON'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "payday loans Brandon"];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Brandon MB');
     SEOMeta::setDescription ('We are your reliable partner in financial solutions. As a direct lender, we strictly conform to all Provincial rules and regulations in Canada, ensuring a secure and compliant platform for your borrowing needs.');
     SEOMeta::addKeyword('payday loans Brandon manitoba, payday loans Brandon manitoba, payday loans Brandon manitoba, payday loans manitoba no credit check');
     return view('payday-loans-brandon', $data);
  }

  public function winkler()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/winkler.jpg", "licpr" => "mb", "spprov" => "Winkler", "headpg" => "WINKLER'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "payday loans winkler"];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Winkler MB');
     SEOMeta::setDescription('Our easy application process for payday loans in Winkler MB can get your payday loan online easily. So apply fast and get a quick approval for a payday loan.');
  SEOMeta::addKeyword('Online cash loans in Manitoba, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, payday loans, loans for payday, payday loans with bad credit, payday loan for bad credit customer');
     return view('payday-loans-winkler', $data);
  }
  public function steinbatch()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/steinbach.jpg", "licpr" => "mb", "spprov" => "Steinbach", "headpg" => "STEINBACH'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white"];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Steinbach');
     return view('payday-loans-steinbatch', $data);
  }




  public function winnipeg()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/winnipeg.jpg", "licpr" => "mb", "spprov" => "Winnipeg", "headpg" => "Payday Loans Winnipeg No Credit Check", "headtxtcolor" => "white", "headalt" => "payday loans winnipeg no credit check"];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Winnipeg MB');
     SEOMeta::setDescription('Do you need payday loans in Winnipeg MB? Mega Cash Bucks offers quick approval payday loans to the people who need money instantly.');
     SEOMeta::addKeyword('payday loans winnipeg no credit check');
     return view('payday-loans-winnipeg', $data);
  }


  public function ontario()
  {
    setpurlads();
     $data = ["bannerbg" => "provinces/ontario.jpg", "licpr" => "on", "spprov" => "Ontario", "headpg" => "Payday Loans Ontario No Credit Check", "headtxtcolor" => "white", "headalt" => "payday loans ontario no credit check"];
     SEOMeta::setTitle('Mega Cash Bucks | Payday Loans Ontario No Credit Check Ontario');
     SEOMeta::setDescription('We will give you quick & guaranteed secured Ontario payday loan with no credit check. Mega Cash Bucks easy and flexible online Ontario payday loans.');
     SEOMeta::addKeyword('payday loans ontario, baby bonus ontario, online payday loans ontario, payday loans ontario no credit check');
     return view('payday-loans-ontario', $data);
  }



  public function toronto()
  {
    setpurlads();
     $data = ["bannerbg" => "provinces/toronto.jpg", "licpr" => "on", "spprov" => "Toronto", "headpg" => "TORONTO'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "TORONTO'S BEST PAYDAY LOAN OPTION. Toronto’s Best PayDay Loans. We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick."];
     SEOMeta::setTitle('Mega Cash Bucks | Get Instant Payday Loans Online in Toronto');
     SEOMeta::setDescription('Payday Loans Toronto ON. Need Instant Payday Loans Online in Toronto On? Get Up To $1500 with an Easy Application, Multiple repayments and 5 Minutes‎‎ e-Transfers.');
     SEOMeta::addKeyword('loans Toronto, bad credit loans Toronto, cash loans Toronto, instant payday loans Toronto, online loans Toronto, quick loans Toronto, quick loans in Toronto, loan companies Toronto, cash advance Toronto, cash advance loans Toronto, cash advance Toronto, cash for you now Toronto, cash king Toronto, cash money Toronto, cash shop Toronto, cash store Toronto, direct cash Toronto, ez loan Toronto, fast cash loans Toronto, money loans Toronto, money mart Toronto, money Toronto, payday loans Toronto');
     return view('payday-loans-toronto', $data);
  }
  public function ottawa()
  {
    setpurlads();
     $data = ["bannerbg" => "provinces/36.jpg", "licpr" => "on", "spprov" => "Ottawa", "headpg" => "OTTAWA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "payday loans Ottawa"];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online in Ottawa');
     SEOMeta::setDescription('Payday Loans Ottawa, ON | Need Instant Payday Loans Online in Ottawa? Get Up To $1500');
     SEOMeta::addKeyword('loans Ottawa, bad credit loans Ottawa, cash loans Ottawa, instant payday loans Ottawa, online loans Ottawa, quick loans Ottawa, quick loans in Ottawa, loan companies Ottawa, cash advance Ottawa, cash advance loans Ottawa, cash advance Ottawa, cash for you now Ottawa, cash king Ottawa, cash money Ottawa, cash shop Ottawa, cash store Ottawa, direct cash Ottawa, ez loan Ottawa, fast cash loans Ottawa, money loans Ottawa, money mart Ottawa, money Ottawa, payday loans Ottawa');
     return view('payday-loans-ottawa', $data);
    }
  public function mississauga()
  {
    setpurlads();
     $data = ["bannerbg" => "provinces/mississauga.jpg", "licpr" => "on", "spprov" => "Mississauga", "headpg" => "MISSISSAUGA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "MISSISSAUGA'S BEST PAYDAY LOAN OPTION Payday Loan Alternative in Mississauga, Ontario Get up to $1,500. Low Rates. 5 minutes e-transfer Mississauga is home to three-quarters of a million people in Ontario. As a suburb of Toronto, it serves as a natural extension of the city, playing home to several major multi-national companies’ headquarters as well as the Toronto Airport."];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Mississauga');
     SEOMeta::setDescription('Payday Loans Mississauga, Ontario | Need Instant Payday Loans Online in Mississauga, On? Get Up To $1500');
     SEOMeta::addKeyword('loans Mississauga, bad credit loans Mississauga, cash loans Mississauga, instant payday loans Mississauga, online loans Mississauga, quick loans Mississauga, quick loans in Mississauga, loan companies Mississauga, cash advance Mississauga, cash advance loans Mississauga, cash advance Mississauga, cash for you now Mississauga, cash king Mississauga, cash money Mississauga, cash shop Mississauga, cash store Mississauga, direct cash Mississauga, ez loan Mississauga, fast cash loans Mississauga, money loans Mississauga, money mart Mississauga, money Mississauga, payday loans Mississauga, On');
     return view('payday-loans-mississauga', $data);
  }
  public function Brampton()
  {
    setpurlads();
     $data = ["bannerbg" => "provinces/mississauga.jpg", "licpr" => "on", "spprov" => "Brampton", "headpg" => "Brampton'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "Brampton's BEST PAYDAY LOAN OPTION. Get up to $1,500. Low Rates. 5 minutes e-transfer."];
     SEOMeta::setTitle('Need Instant Payday Loans Online in Brampton.');
     SEOMeta::setDescription('Payday Loans Brampton Ontario | Need Instant Payday Loans Online in Brampton On? Get Up To $1500.');
     SEOMeta::addKeyword('loans Brampton, bad credit loans Brampton, cash loans Brampton, instant payday loans Brampton, online loans Brampton, quick loans Brampton, quick loans in Brampton, loan companies Brampton, cash advance Brampton, cash advance loans Brampton, cash advance Brampton, cash for you now Brampton, cash king Brampton, cash money Brampton, cash shop Brampton, cash store Brampton, direct cash Brampton, ez loan Brampton, fast cash loans Brampton, money loans Brampton, money mart Brampton, money Brampton, payday loans Brampton');
     return view('payday-loans-brampton', $data);
  }
  public function london_ontario()
  {
    setpurlads();
     $data = ["bannerbg" => "provinces/london-ontario.jpg", "licpr" => "on", "spprov" => "London Ontario", "headpg" => "LONDON ONTARIO'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "LONDON ONTARIO'S BEST PAYDAY LOAN OPTION Get up to $1,500. Low Cost. 5 minutes e-transfer Things happen in life and sometimes you need extra money for unexpected expenses."];
     SEOMeta::setTitle('Mega Cash Bucks | Need Instant Payday Loans Online in London Ontario, ON? Get Up To $1500 From a Safe Trusted Licensed Lender. Easy Application. Multiple repayments, 5 Minutes‎‎ e-Transfer.');
     SEOMeta::setDescription('Payday Loans London Ontario | Need Instant Payday Loans Online in London, ON? Get Up To $1500 today');
     return view('payday-loans-london-ontario', $data);

}
  public function windsor()
  {
    setpurlads();
     $data = ["bannerbg" => "provinces/windsor.jpg", "licpr" => "on", "spprov" => "Windsor", "headpg" => "WINDSOR'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "WINDSOR'S BEST PAYDAY LOAN OPTION. We know that things happen in life and sometimes you need extra money for unexpected expenses"];
     SEOMeta::setTitle('Need Instant Payday Loans Online in London, ON');
SEOMeta::setDescription ('Your financial security is our responsibility. Operating as a direct lender, we comply with all Provincial rules and regulations in Canada, establishing ourselves as a safe and trusted lending solution.');
     SEOMeta::addKeyword('Online cash loans london_ontario, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, Ontario,Windsor, on, On');
     return view('payday-loans-windsor', $data);
  }
  public function hamilton()
  {
    setpurlads();
     $data = ["bannerbg" => "provinces/hamilton.jpg", "licpr" => "on", "spprov" => "Hamilton", "headpg" => "HAMILTON'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "HAMILTON'S BEST PAYDAY LOAN OPTION Hamilton is a great city, with a long and fascinating history. Once a manufacturing hub of the country, it now is emerging as a key player in the new service economy"];
     SEOMeta::setTitle('Need Instant Payday Loans Online in Hamilton ON.');
     SEOMeta::addKeyword('Online cash loans WOnline cash loans london_ontario, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, payday loan, payday loans, loans with bad credit, loans from bad credit, bad credit loans Ontario, on');
     SEOMeta::setDescription ('A safe and trusted best Hamilton ON lender in canada a direct lender that conforms to all Provincial rules and regulations pertaining to our regulatory environment.');
     return view('payday-loans-hamilton', $data);
  }


  public function saskatchewan()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/saskatchewan.jpg", "licpr" => "on", "spprov" => "Saskatchewan", "headpg" => "Payday Loans Saskatchewan Online", "headtxtcolor" => "white", "headalt" => "payday loans saskatchewan online"];
     SEOMeta::setTitle('No Credit Check Loans Saskatchewan');
     SEOMeta::setDescription('The fastest payday loans online in Saskatchewan with no credit check. Apply for a payday loan now and get cash the same day from Mega Cash Bucks.');
     SEOMeta::addKeyword('payday loans saskatchewan online, no credit check loans saskatchewan');
     return view('payday-loans-saskatchewan', $data);
  }
  public function saskatoon()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/saskatoon.jpg", "licpr" => "on", "spprov" => "Saskatoon", "headpg" => "SASKATOON'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "SASKATOON'S BEST PAYDAY LOAN OPTION We know that things happen in life and sometimes you need extra money for unexpected expenses."];
     SEOMeta::setTitle('Need Instant Payday Loans Online in Saskatoon, SK');
     SEOMeta::setDescription('Saskatoon Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. SK');
     SEOMeta::addKeyword('loans Saskatoon, bad credit loans Saskatoon, cash loans Saskatoon, instant payday loans Saskatoon, online loans Saskatoon, quick loans Saskatoon, quick loans in Saskatoon, loan companies Saskatoon, cash advance Saskatoon, cash advance loans Saskatoon, cash advance Saskatoon, cash for you now Saskatoon, cash king Saskatoon, cash money Saskatoon cash shop Saskatoon, cash store Saskatoon, direct cash Saskatoon, ez loan Saskatoon, fast cash loans Saskatoon, money loans Saskatoon, money mart Saskatoon, money Saskatoon payday loans Saskatoon, SK');
     return view('payday-loans-saskatoon', $data);
  }
  public function regina()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/regina.jpg", "licpr" => "on", "spprov" => "Regina", "headpg" => "REGINA'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "red", "headalt" => "REGINA'S BEST PAYDAY LOAN OPTION We know that things happen in life and sometimes you need extra money for unexpected expenses."];
     SEOMeta::setTitle('Mega Cash Bucks | Need Instant Payday Loans Online in Regina, SK? Get Up To $1500 From a Safe Trusted Licensed Lender. Multiple repayments, Simple to get, 5 Minutes‎‎ e-Transfer.');
     SEOMeta::setDescription('Regina, SK Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. SK');
     SEOMeta::addKeyword('loans Regina, SK, bad credit loans Regina, SK, cash loans Regina, SK, instant payday loans Regina, SK, online loans Regina, SK, quick loans Regina, SK, quick loans in Regina, SK, loan companies Regina, SK, cash advance Regina, SK, cash advance loans Regina, SK, cash advance Regina, SK, cash for you now Regina, SK, cash king Regina, SK, cash money Regina, SK, cash shop Regina, SK, cash store Regina, SK, direct cash Regina, SK, ez loan Regina, SK, fast cash loans Regina, SK, money loans Regina, SK, money mart Regina, SK, money Regina, SK, payday loans Regina, SK, SK');
     return view('payday-loans-regina', $data);
  }
  public function moosejaw()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/moose-jaw.jpg", "licpr" => "on", "spprov" => "Moose Jaw", "headpg" => "MOOSE JAW'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "red", "headalt" => "MOOSE JAW'S BEST PAYDAY LOAN OPTION We know that things happen in life and sometimes you need extra money for unexpected expenses."];
     SEOMeta::setTitle('Mega Cash Bucks | Need Instant Payday Loans Online in Moose Jaw, SK? Get Up To $1500 From a Safe Trusted Licensed Lender. Easy Application. Multiple repayments, 5 Minutes‎‎ e-Transfer.');
     SEOMeta::setDescription('moosejaw Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. SK');
     SEOMeta::addKeyword('loans moosejaw, bad credit loans moosejaw, cash loans moosejaw, instant payday loans moosejaw, online loans moosejaw, quick loans moosejaw, quick loans in moosejaw, loan companies moosejaw, cash advance moosejaw, cash advance loans moosejaw, cash advance moosejaw, cash for you now moosejaw, cash king moosejaw, cash money moosejaw, cash shop moosejaw, cash store moosejaw, direct cash moosejaw, ez loan moosejaw, fast cash loans moosejaw, money loans moosejaw, money mart moosejaw, money moosejaw, payday loans moosejaw, SK');
     return view('payday-loans-moose-jaw', $data);
  }

  public function nova_scotia()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/nova-scotia.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "Payday Loans Nova Scotia No Credit Check", "headtxtcolor" => "white", "headalt" => "payday loans nova scotia no credit check"];
     SEOMeta::setTitle('Payday Loans Nova Scotia No Credit Check');
     SEOMeta::setDescription('All loans made with Mega Cash Bucks require absolutely NO credit checks. Apply by registering online and get fast payday loans in Nova Scotia with no credit check.');
SEOMeta::addKeyword('payday loans nova scotia no credit check');
     return view('payday-loans-nova-scotia', $data);
  }
  public function halifax()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/halifax.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "Payday Loans Niagara Halifax, Ontario", "headtxtcolor" => "white", "headalt" => "payday loans niagara halifax ontario"];
     SEOMeta::setTitle('Mega Cash Bucks | Payday Loans Niagara Halifax, Ontario');
     SEOMeta::setDescription('Get 24/7 approvals & funding online for payday loans in Niagara Halifax ON with no credit check & money in 1 hour. So credit the money now with our payday loans.');
     SEOMeta::addKeyword('payday loans niagara halifax ontario');
     return view('payday-loans-halifax', $data);
  }
  public function capebreton()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/cape-breton.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "Payday Loans Cape Breton", "headtxtcolor" => "white", "headalt" => "Payday Loans Cape Breton"];
     SEOMeta::setTitle('Mega Cash Bucks | Payday Loans Cape Breton NS');
     SEOMeta::setDescription('The fastest and instant loan approval by {{ $privname ?? "Mega Cash Bucks" }} with the fastest cash in advance. We offer fast Payday Loans Cape Breton NS to get money instantly.');
     SEOMeta::addKeyword('payday loans cape breton');
     return view('payday-loans-cape-breton', $data);
  }
  public function dartmoth()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/dartmouth.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "DARTMOTH'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white"];
     SEOMeta::setTitle('Need Instant Payday Loans Online in Dartmoth, NS');
     SEOMeta::setDescription('Dartmouth Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response.');
     SEOMeta::addKeyword('loans dartmouth, bad credit loans dartmouth, cash loans dartmouth, instant payday loans dartmouth, online loans dartmouth, quick loans dartmouth, quick loans in dartmouth, loan companies dartmouth, cash advance dartmouth, cash advance loans dartmouth, cash advance dartmouth, cash for you now dartmouth, cash king dartmouth, cash money dartmouth, cash shop dartmouth, cash store dartmouth, direct cash dartmouth, ez loan dartmouth, fast cash loans dartmouth, money loans dartmouth, money mart dartmouth, money dartmouth, payday loans dartmouth, AB');
     return view('payday-loans-dartmouth', $data);
  }
  public function fortmcmurry()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/truro.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "Payday Loans Fort McMurray", "headtxtcolor" => "white", "headalt" => "payday loans Fort McMurray ab"];
     SEOMeta::setTitle('Payday Loans Fort McMurray AB | Alberta Payday Loans');
     SEOMeta::setDescription('Our loan agency in Truro NS provides low-cost payday loans and fast cash advances with multiple repayments. So to apply now and get instant approval! Fort McMurray Payday Loans');
SEOMeta::addKeyword('payday loans fort mcmurray ab');
     return view('payday-loans-fort-mcmurray', $data);
  }
  public function turo()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/truro.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "Payday Loans Truro NS", "headtxtcolor" => "white", "headalt" => "payday loans truro ns"];
     SEOMeta::setTitle('Nova Scotia Payday Loans');
     SEOMeta::setDescription('Our loan agency in Truro NS provides low-cost payday loans and fast cash advances with multiple repayments. So to apply now and get instant approval!');
SEOMeta::addKeyword('payday loans truro ns');
     return view('payday-loans-truro', $data);
  }
  public function sydney()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/sydney.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "Payday Loans Sydney NS", "headtxtcolor" => "white", "headalt" => "payday loans sydney ns"];
     SEOMeta::setTitle('Mega Cash Bucks | Payday Loans Sydney NS ');
     SEOMeta::setDescription('Get cash with payday loan in Sydney NS which is speedy, safe, and secure. 100% online from trusted loan agency in Canada. Apply now and get instant money.');
SEOMeta::addKeyword('payday loans, sydney, nova scotia, ns');
     return view('payday-loans-sydney', $data);
  }
  public function dauphin()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/sydney.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "Payday Loans Sydney MB", "headtxtcolor" => "white", "headalt" => "payday loans sydney MB"];
     SEOMeta::setTitle('Mega Cash Bucks | Payday Loans Dauphin MB ');
     SEOMeta::setDescription('Get cash with payday loans Dauphin MB which is speedy, safe, secure, and 100% online from trusted loan agency in Canada. Apply now and get instant money.');
SEOMeta::addKeyword('payday loans Dauphin MB');
     return view('payday-loans-dauphin', $data);
  }
  public function morden()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/sydney.jpg", "licpr" => "ns", "spprov" => "Nova Scotia", "headpg" => "Payday Loans Morden MB", "headtxtcolor" => "white", "headalt" => "payday loans morden mb"];
     SEOMeta::setTitle('Payday Loans Morden MB');
     SEOMeta::setDescription('Get cash with a payday loan in Morden MB which is speedy, safe, secure, and 100% online from trusted loan agency in Canada. Apply now and get instant money.');
SEOMeta::addKeyword('payday loans morden mb');
     return view('payday-loans-morden', $data);
  }
  public function portagelaprairie()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/portage-la-prairie.jpg", "licpr" => "mb", "spprov" => "Portage La Prairie", "headpg" => "Payday Loans Portage La Prairie", "headtxtcolor" => "white", "headalt" => "payday loans portage la prairie"];
     SEOMeta::setTitle('Payday Loans Portage La Prairie MB ');
     SEOMeta::setDescription('Our payday loan in Portage La Prairie MB can get your payday loan online easily. So apply fast and get a quick approval for payday loan.');
  SEOMeta::addKeyword('payday loans portage la prairie');
     return view('payday-loans-portage-la-prairie', $data);
  }

  public function Education()
 {
   setpurlads();
   $data = ["bannerbg" => "be-informed.jpg", "licpr" => "on", "spprov" => "Be Informed", "headpg" => "BE INFORMED", "headsub" => "Make the best choice for your financial situation.", "headalign" => "text-center", "headalt" => "Make the best choice for your financial situation. WHAT'S THE BEST LOAN FOR YOU? Everyone’s financial challenges are a little unique to them."];
   SEOMeta::setTitle('Education Center for Lender for Bad Credit Loans');
   SEOMeta::setDescription('Why Us? Mega Cash Bucks offers trusted, fast and flexible short term loans. Our loans for bad credit in many repayments will put your finances back on track! Come & view our Education Center to learn more.');
   SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, fast cash, cash loans, quick cash, Wise loans, payday, financial, cash lenders, online cash loan, loans, Wise loan, cash loan, payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance');
     return view('education-center', $data);
 }
 public function Faq()
{
  setpurlads();
  $data = ["bannerbg" => "woman-smiling-phone.jpg", "licpr" => "on", "spprov" => "Be Informed", "headpg" => "FREQUENTLY ASKED QUESTIONS", "headtxtcolor" => "black", "headsub" => "Here are answers to the questions you ask most often", "headphonehide" => "hide", "headalt" => "How do I apply for a loan from you?  How fast can I get a payday loan? What will I need to provide to get a Mega Cash Bucks payday loan? Do I need to be have a job? Can I get a loan if I do not own my own home? Do you need any personal information from me?"];
  SEOMeta::setTitle('FAQ | Lender for Bad Credit Loans');
  SEOMeta::setDescription('Frequently Asked Questions (FAQ) Mega Cash Bucks offers trusted, fast and flexible short term loans. Our loans for bad credit in many repayments will put your finances back on track!');
  SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, fast cash, cash loans, quick cash, Wise loans, payday, financial, cash lenders, online cash loan, loans, Wise loan, cash loan, payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance');
    return view('faq', $data);
}
public function Privacy()
{
  setpurlads();
 $data = ["bannerbg" => "privacy-policy.jpg", "licpr" => "on", "headsub" => "The funds you need when you need them.", "headpg" => "PRIVACY POLICY", "headtxtcolor" => "white", "headphonehide" => "hide", "headalt" => "Canada’s most accessible loans Your Privacy is our Priority TRACKING USER BEHAVIOUR AUTOMATICALLY COLLECTED INFORMATION USE OF COOKIES SECURITY OF PERSONAL INFORMATION UNSUBSCRIBING"];
 SEOMeta::setTitle('Privacy Policy On Your Personal Information Security');
 SEOMeta::setDescription('Learn how Mega Cash Bucks, a safe and trusted direct lender safeguards your private information with our privacy policy, what data we collect and how we use this data in the loan application process.');
 SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, fast cash, cash loans, quick cash, Wise loans, payday, financial, cash lenders, online cash loan, loans, Wise loan, cash loan, payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance');
   return view('privacy-policy', $data);
}
public function Responsible_lending()
{
setpurlads();
 $data = ["bannerbg" => "Lending-responsibility.jpg", "licpr" => "on", "headpg" => "WE LEND RESPONSIBLY", "headtxtcolor" => "white", "headphonehide" => "hide", "headalt" => "WE LEND RESPONSIBLY accessible loans We Lend Responsibly Our Code of Conduct Sustainable Lending Uncompromising Transparency security integrity Credit Score Not Great? Money that’s minutes away"];
 SEOMeta::setTitle('Mega Cash Bucks | Responsible Lending Payday Loans');
 SEOMeta::setDescription('Learn how Mega Cash Bucks, a safe and trusted direct lender conforms to all rules and regulations pertaining to our regulatory environment, our Code of Conduct and our responsible lending practices.');
 SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, fast cash, cash loans, quick cash, Wise loans, payday, financial, cash lenders, online cash loan, loans, Wise loan, cash loan, payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance');
   return view('responsible_lending', $data);
}
public function Terms()
{
  setpurlads();
 $data = ["bannerbg" => "terms-and-conditions.jpg", "licpr" => "on", "headsub" => "The funds you need when you need them.", "headpg" => "TERMS AND CONDITIONS", "headtxtcolor" => "white", "headphonehide" => "hide", "headalt" => "Accessible loans ACCEPTANCE OF THE TERMS OF USE ACCOUNT SECURITY AND USE OF THE WEBSITE USES THAT ARE PROHIBITED TRADEMARKS INTELLECTUAL PROPERTY RIGHTS ACCURACY OF WEBSITE INFORMATION TERRITORIAL RESTRICTIONSx"];
 SEOMeta::setTitle('Mega Cash Bucks | Terms of Conditions and Use for our Website');
 SEOMeta::setDescription('Visit Mega Cash Bucks\'s Terms of Conditions and Use of our website to know more about the acceptance, intellectual property rights, liability, etc.');
 SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, fast cash, cash loans, quick cash, Wise loans, payday, financial, cash lenders, online cash loan, loans, Wise loan, cash loan, payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance');
   return view('terms-conditions', $data);
}
public function contact()
{
  setpurlads();
 $data = ["bannerbg" => "images/contact-us.jpg", "licpr" => "on", "headpg" => "CONTACT US TODAY!", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "We’re always happy to hear from you.", "phonesmall" => "Phone: +1 (855) 942-4422", "headalt" => "CONTACT US TODAY We’re always happy to hear from you. Tell us about your experience with our service and what we can do to serve you even better"];
 SEOMeta::setTitle('Contact Mega Cash Bucks');
 SEOMeta::setDescription('Do You Have A Question about Your Payday Loan, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Mega Cash Bucks is the Best Trusted Lender. Get approved today');
 SEOMeta::addKeyword('national student loan contact, student loans contact, loan contact, national student loan contact number, national student loan centre contact');
   return view('contact', $data);
}
public function creditbuilding()
{
 setpurlads();
 $data = ["bannerbg" => "images/credit-building-canada2.jpg", "licpr" => "on", "headpg" => "CREDIT BUILDING", "headtxtcolor" => "white", "headphonehide" => "hide", "headsub" => "Unlock the power of healthy credit.", "headalt" => "CONTACT US TODAY We’re always happy to hear from you. Tell us about your experience with our service and what we can do to serve you even better."];
 SEOMeta::setTitle('Contact Mega Cash Bucks About Your Payday Loans Questions');
 SEOMeta::setDescription('Do You Have A Question about Your Payday Loan, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Lender In Canada.');
 SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
   return view('credit-building', $data);
}
public function borrow_money()
{
  setpurlads();
 $data = ["bannerbg" => "images/44.jpg", "licpr" => "on", "headpg" => "YOUR ONLINE MONEY SOURCE", "headtxtcolor" => "black", "headsub" => "The funds you need when you need them."];
 SEOMeta::setTitle('Mega Cash Bucks | Borrow Money from Mega Cash Bucks');
 SEOMeta::setDescription('Do You Have A Question about Your Payday Loan, Short Term Loans Or Cash Advance Loan ? Contact Mega Cash Bucks - the Best Lender In Canada to borrow money from.');
 SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
   return view('borrow-money', $data);
}
public function payday_advance()
{
  setpurlads();
 $data = ["bannerbg" => "images/48.jpg", "licpr" => "on", "headpg" => "THE INSTANT PAYDAY ADVANCE THAT WORKS", "headtxtcolor" => "white", "martop" => "30", "headsub" => "The funds you need when you need them."];
 SEOMeta::setTitle('Mega Cash Bucks | Payday Advance from Mega Cash Bucks');
 SEOMeta::setDescription('Do You Have A Question about Your Payday Advance Loan, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks.');
 SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
   return view('payday-advance', $data);
}
public function payday_loans()
{
  setpurlads();
 $data = ["bannerbg" => "images/48.jpg", "licpr" => "on", "headpg" => "THE INSTANT PAYDAY ADVANCE THAT WORKS", "headtxtcolor" => "white", "martop" => "30", "headsub" => "The funds you need when you need them."];
 SEOMeta::setTitle('Payday Advance from Mega Cash Bucks');
 SEOMeta::setDescription('Do You Have A Question about Your Payday Loan, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.');
 SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
   return view('payday-loans', $data);
}
public function same_day_loans()
{
  setpurlads();
 $data = ["bannerbg" => "images/52.jpg", "licpr" => "on", "headpg" => "SAME DAY LOANS", "martop" => "45", "headtxtcolor" => "white"];
SEOMeta::setTitle('Mega Cash Bucks | Same Day Loans');
 SEOMeta::setDescription('Do You Have A Question about Your etransfer same day payday loans in canada, Short Term Loans Or Cash Advance Loan Interest Rates, How They Work? Contact Mega Cash Bucks. The Trusted Payday Advance In Canada.');
 SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
   return view('same-day-loans', $data);
}
public function child_tax_loans()
{
  setpurlads();
 $data = ["bannerbg" => "images/child-tax-credit.jpg", "headpg" => "THE CHILD TAX CREDIT AND YOUR PAYDAY LOAN", "headtxtcolor" => "red"];
 SEOMeta::setTitle('Mega Cash Bucks | Child Tax Loans Canada');
 SEOMeta::setDescription('Parents can use Child Tax Benifit (CCB) to get a payday loan. CCB Loan. Child Tax Loans.');
 SEOMeta::addKeyword('e transfer payday loans canada 24 7 child tax, child tax loans, child tax payday loans, online loans child tax, installment loans that accept child tax, online payday loans that accept child tax, payday loans that accept child tax, payday loans using child tax credit, payday loans child tax benefit ontario, loans that accept child tax, child tax loans alberta, child tax loans canada, child tax loans ontario, payday loans child tax benefit ontario no credit check, child tax benefit loans, child tax credit loans, child tax credit loans online ontario, child tax loans edmonton, child tax payday loans ontario, where can i get a loan with child tax, child tax cash loans, child tax loans in winnipeg, loans based on child tax, installment loans with child tax, loans that accept child tax canada, loans that accept child tax credit, online loans canada child tax, online loans that accept child tax, online payday loans child tax benefit, payday loans that accept child tax canada, can student loans take child tax credit, loans on child tax edmonton, payday loans off child tax credit, payday loans using child tax credit canada, child tax loans calgary, child tax loans manitoba, child tax payday loans alberta, loans for child tax credit, loans online child tax, loans that accept child tax ontario, can you get a loan from child tax credit, loans against child tax, loans on child tax credit canada, loans using child tax credit, online loans using child tax, payday loans child tax benefit toronto, personal loans with child tax, child tax benefit loans online, child tax installment loans, child tax loans in manitoba, child tax loans toronto, loan express child tax, loan places that accept child tax, loans for child tax benefit in ontario, loans off child tax, online child tax payday loans, online loans for child tax in ontario, online payday loans child tax alberta, online payday loans for child tax benefit canada, online payday loans that accept child tax benefits, payday loans canada child tax credit, payday loans that accept child tax ontario, bad credit loans on child tax, can i get a loan on my child tax benefit, can i get a loan with child tax, can student loan take child tax, can student loans take your child tax credit, car loans with child tax, cash loans on child tax credit, child tax benefit loans canada, child tax benefit loans ontario, child tax cash loans canada, child tax cash loans manitoba, child tax cash loans ontario, child tax cash loans saskatchewan, child tax credit loans online, child tax credit loans ontario, child tax loan no credit check, child tax loans bad credit, child tax loans bc, child tax loans in alberta, child tax loans near me, child tax loans online canada, child tax loans ontario canada, child tax loans saskatchewan, child tax loans scarborough, child tax loans winnipeg, child tax online loans, child tax payday loans bc, child tax payday loans canada, fast cash loans child tax, get a loan with child tax benefit, installment loans on child tax, loans for child tax canada, loans from child tax credit, loans on child tax alberta, loans on child tax ontario, loans that take child tax, loans using child tax, loans winnipeg child tax, long term loans on child tax, manitoba loans child tax, money mart child tax loan, online loans alberta child tax, online loans child tax alberta, online loans child tax canada, online loans child tax ontario, online loans on child tax, online loans ontario child tax benefit, online loans saskatchewan child tax, online loans with child tax credit, online payday loans bc child tax benefit, online payday loans canada child tax, online payday loans child tax, online payday loans child tax benefit ontario, online payday loans child tax credit, online payday loans ontario child tax benefit, payday loan child tax credit, payday loan on child tax toronto, payday loans canada child tax benefit, payday loans child tax alberta, payday loans child tax benefit, payday loans child tax canada, payday loans child tax credit canada, payday loans on child tax edmonton, payday loans online child tax, payday loans ontario child tax credit, payday loans that accept child tax benefits, payday loans using child tax, payday loans using child tax benefit, payday loans using child tax credit alberta, ccb loan');
   return view('child-tax-loans', $data);
}
public function odsp_payday_loans_online()
{
  setpurlads();
 $data = ["bannerbg" => "images/category-new.jpg", "headpg" => "ODSP PAYDAY LOANS ONLINE", "headtxtcolor" => "black"];
 SEOMeta::setTitle('Mega Cash Bucks | Odsp Payday Loans Online');
 SEOMeta::setDescription('Disability Loans, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? The best Choice for odsp Loans.');
 SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
   return view('odsp-payday-loans-online', $data);
}
public function emergency_loans()
{
  setpurlads();
 $data = ["bannerbg" => "images/55.jpg", "headpg" => "BEST EMERGENCY LOANS", "headtxtcolor" => "white", "martop" => "30"];
 SEOMeta::setTitle('Mega Cash Bucks | Emergency Loans Canada');
 SEOMeta::setDescription('Disability Loans, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Most Trusted Payday Advance In Canada for emergency loans.');
 SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
   return view('emergency-loans', $data);
}
public function ShortTermLoans()
{
  setpurlads();
 $data = ["bannerbg" => "images/short-term-loans.jpg", "headpg" => "SHORT TERM LOANS IN CANADA", "headtxtcolor" => "white", "martop" => "40", "headsub" => "Put your mind at ease when unexpected expenses arise.", "martop" => "30", "headalt" => "We offer residents the ability to borrow up to $1,500 for a short period of time, and repay it either as one lump sum, or in 2 or 3 installments"];
 SEOMeta::setTitle('Mega Cash Bucks | Short Term Loans Canada');
 SEOMeta::setDescription('Disability Loans, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Mega Cash Bucks is the Best Answer for Short Term Loans in Canada.');
 SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
   return view('short-term-loans', $data);
}

public function short_term_loans_canada(Request $request)
{
  setpurlads();
  $data = ["bannerbg" => "images/short-term-loans.jpg", "headsub" => "The funds you need when you need them.", "headpg" => "SHORT TERM LOANS", "headtxtcolor" => "white", "martop" => "40", "headalt" => "We offer residents the ability to borrow up to $1,500 for a short period of time, and repay it either as one lump sum, or in 2 or 3 installments"];
  SEOMeta::setTitle('Mega Cash Bucks | Short Term Loans in Canada');
  SEOMeta::setDescription('Canada Disability Loans, Short Term Loans Canada Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.');
  SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
    return view('short-term-loans-canada', $data);
}
public function fastloanscanada(Request $request)
{
  setpurlads();
  $data = ["bannerbg" => "images/18.jpg", "headpg" => "FAST LOANS CANADA THE BETTER BORROWING OPTION", "headtxtcolor" => "white"];
SEOMeta::setTitle('Mega Cash Bucks | Fast Loans Canada |');
  SEOMeta::setDescription('Disability Loans, Short Term Loans or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance with Fast Loans Canada.');
  SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
    return view('fast-loans-canada', $data);
}

public function Sitemap(Request $request)
{
  setpurlads();
  $data = ["bannerbg" => "images/site-map.jpg", "headpg" => "SITEMAP", "headtxtcolor" => "white", "headalign" => "text-left", "headphonehide" => "hide"];
SEOMeta::setTitle('Mega Cash Bucks | Site Map');
  SEOMeta::setDescription('Disability Loans, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.');
  SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
    return view('sitemap2', $data);
}

public function cash_loans()
{
  setpurlads();
  $data = ["bannerbg" => "images/category-new.jpg", "headpg" => "CASH LOANS CANADA", "headtxtcolor" => "white", "headalign" => "text-right"];
SEOMeta::setTitle('Mega Cash Bucks | Cash Money');
  SEOMeta::setDescription('Cash Loans Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
  SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
    return view('cash-loans', $data);
}


    public function welcomehome()
    {
      setpurlads();
        // $data = ["bannerbg" => "home-payday-loans.jpg", "licpr" => "bc"];
        $data = ["bannerbg" => "images/odsp-payday-loans-online.png", "headalign" => "text-right", "licpopwarning" => "6hfinancial", "martop" => "40",  "headtxtcolor" => "white"];
        SEOMeta::setTitle('Mega Cash Bucks | Wise Payday Loans Online in Canada');
        SEOMeta::setDescription('Mega Cash Bucks  is a financial institution offering low-cost, speedy online payday loans and fast cash advances with flexible repayment plans. The application process is straightforward, and approval is instant');
        SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, fast cash, cash loans, quick cash, Wise loans, payday, financial, cash lenders, online cash loan, loans, Wise loan, cash loan, payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance');
        return view('welcomehome', $data);
    }
    public function howitsdone()
    {
      setpurlads();
        // $data = ["bannerbg" => "home-payday-loans.jpg", "licpr" => "bc"];
        $data = ["bannerbg" => "receiving-money-quickly.jpg", "headalign" => "text-left", "headphonehide" => "hide", "headpg" => "MONEY, WHEN YOU NEED IT MOST", "headsub" => "Put your mind at ease when unexpected expenses arise.", "martop" => "30", "headalt" => "THE SHORT TERM HASSLE-FREE LOAN The funds you need when you need them and Apply immediately and know immediately receive any time cash loans with transfer money worldwide in just 5 minutes."];
        SEOMeta::setTitle('Mega Cash Bucks | How we deliver loans to our customers');
        SEOMeta::setDescription('Mega Cash Bucks is a financial service provider specializing in low-cost online payday loans and quick cash advances with multiple repayment options. Applying is easy, and approval is instant!');
        SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, fast cash, cash loans, quick cash, Wise loans, payday, financial, cash lenders, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance');
        return view('howitsdone', $data);
    }
    public function why_choose_us()
    {
        setpurlads();
        $data = ["bannerbg" => "why-choose-us.jpg", "headalign" => "text-right", "headpg" => "THE SHORT TERM HASSLE-FREE LOAN", "headsub" => "The funds you need when you need them.", "headalt" => "THE SHORT TERM HASSLE-FREE LOAN The funds you need when you need them and Apply immediately and know immediately receive any time cash loans with transfer money worldwide in just 5 minutes."];
        SEOMeta::setTitle('Mega Cash Bucks | Why Choose Us For a Payday Loan');
        SEOMeta::setDescription('Why Choose Us? Mega Cash Bucks is is a financial institution dedicated to providing low-cost, quick online payday loans and fast cash advances with convenient multiple repayment options. The application is user-friendly, and approval is instantaneous!');
        SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, fast cash, cash loans, quick cash, Wise loans, payday, financial, cash lenders, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance');
        return view('why_choose_us', $data);
    }

    public function contactusnow()
    {
      setpurlads();
      SEOMeta::setTitle('Mega Cash Bucks | Contact Mega Cash Bucks About Your Payday Loans Questions');
      SEOMeta::setDescription('Do You Have A Question about Your Payday Loan, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Lender In Canada.');
      SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('contactusnow')->with('phonesmall', 'Phone: +1 (604) 568-8091');
    }

    public function agentList()
    {
      setpurlads();
      SEOMeta::setTitle('Mega Cash Bucks | Wise Payday Loans Online in Canada');
      SEOMeta::setDescription('Mega Cash Bucks is your go-to financial partner for affordable online payday loans and rapid cash advances with flexible repayment plans. The application process is hassle-free, and approval is instant!');
      SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('agent-list');
    }


     public function Why_us($value='')
    {
      setpurlads();
      SEOMeta::setTitle('Canadian Lender for Bad Credit Loans in Canada | Mega Cash Bucks');
      SEOMeta::setDescription('Why Us? Mega Cash Bucks offers trusted, fast and flexible short term loans to Canadians. Our loans for bad credit in many repayments will put your finances back on track!');
      SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('why_use_us');
    }

    public function Reviews($value='')
    {
      setpurlads();
      SEOMeta::setTitle('Mega Cash Bucks Reviews | #MegaCashBucksSTORIES | Mega Cash Bucks');
      SEOMeta::setDescription('People sharing their Mega Cash Bucks Reviews stories of how Mega Cash Bucks helped them when they needed to borrow up to $1,500 with an emergency short-term loan, even on the weekend.');
      SEOMeta::addKeyword('Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
      //  return view('reviews');

    }
    public function Key_terms($value='')
    {
      setpurlads();
        return view('key-terms');
    }
     public function Loan_calculator($value='')
    {
      setpurlads();
        SEOMeta::setTitle('Mega Cash Bucks | Payday Loan Calculator Canada');
   return view('welcome');
    }

    public function bestLenderLoansCanada(Request $request)
    {
      setpurlads();
        SEOMeta::setTitle('Mega Cash Bucks | Best Lender Loans Canada');
        SEOMeta::setDescription('We build trust through adherence to high standards. As a direct lender, we comply with all Provincial rules and regulations in Canada, ensuring your financial security and satisfaction.');
        SEOMeta::addKeyword('what is the best lender for home loans, best lending companies for home loans, best lender for debt consolidation loan, best payday loans direct lender, 2019 best business loan lender, best bad credit auto loan lender reviews, best bad credit loans direct lender, best crypto currency lending loans, best direct lender loans, best installment loans direct lender, best lender for bad credit loan canada, best lender for new business loans, best lender for new business loans canada, best money lender in singapore for business loan, best online personal loan lender, best payday loan lender for bad credit, best payday loans direct lender uk, best payday loans uk direct lender, best peer to peer lending personal loans, best personal loans lending club, best student loan lending, what is the best private student loan lender, which private student loan lender is best
');
   return view('best-lender-loans-canada');
    }



     public function paydayloanAppcanada(Request $request)
    {
      setpurlads();
      SEOMeta::setTitle('Payday Loan App Canada | Mega Cash Bucks');
      SEOMeta::setDescription('A safe and trusted direct lender conforms to all Provincial rules and regulations pertaining to our regulatory environment.');
      SEOMeta::addKeyword('money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, finabanx, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton, Mega Cash Bucks, online cash loans');
        return view('payday-loan-app-canada');

    }

	public function badcreditloanscounsellors(Request $request)
    {
      setpurlads();
        SEOMeta::setTitle('Mega Cash Bucks | Bad Credit Counsellors');
        return view('bad-credit-loans-counsellors');

    }




    public function bad_credit_loans()
    {
      setpurlads();
      $data = ["bannerbg" => "images/bad-credit-loans.jpg", "headpg" => "BAD CREDIT LOANS ", "headtxtcolor" => "white", "headalign" => "text-right"];
      SEOMeta::setTitle('Mega Cash Bucks | Bad Credit Loans Canada');
      SEOMeta::setDescription('Bad Credit Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('bad-credit-loans', $data);
    }
    public function installmen_loans()
    {
      setpurlads();
      $data = ["bannerbg" => "images/47.jpg", "headpg" => "INSTALLMENT LOANS THAT WORK", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Installment Loans Canada');
      SEOMeta::setDescription('Installment Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('installmen-loans', $data);
    }

    public function payday_loans_near_me()
    {
      setpurlads();
      $data = ["bannerbg" => "images/Best-payday-loans-near-you.jpg", "headpg" => "BEST PAYDAY LOANS NEAR ME", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Payday Loans Near Me Canada');
      SEOMeta::setDescription('Payday adva Loans Near Me, Short Term Loans Or Cash Advance Loan Interest Rates  How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('payday-loans-near-me', $data);
    }

    public function same_day_payday_loans()
    {
      setpurlads();
      $data = ["bannerbg" => "images/51.jpg", "headpg" => "SAME DAY PAYDAY LOANS", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Same Day Payday Loans');
      SEOMeta::setDescription('Same Day Payday Loans, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('same-day-payday-loans', $data);
    }

    public function express_loans()
    {
      setpurlads();
      $data = ["bannerbg" => "images/53.jpg", "headpg" => "BEST EXPRESS LOANS IN CANADA", "headtxtcolor" => "white", "headalign" => "text-right", "martop" => "40"];
    SEOMeta::setTitle('Mega Cash Bucks | Express Loans Canada');
      SEOMeta::setDescription('Express Loans, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('express-loans', $data);
    }
    public function instant_payday_loans_canada()
    {
      setpurlads();
      $data = ["bannerbg" => "images/53.jpg", "headpg" => "INSTANT PAYDAY LOANS CANADA", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Canada');
      SEOMeta::setDescription('Intant Payday Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('instant-payday-loans-canada', $data);
    }
    public function weekend_payday_loans()
    {
      setpurlads();
      $data = ["bannerbg" => "images/56.jpg", "headpg" => "WEEKEND PAYDAY LOAN ALTERNATIVE", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Weekend Payday Loan Alternative');
      SEOMeta::setDescription('Weekend Payday Loan Alternative, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('weekend-payday-loans', $data);
    }

    public function holiday_vacation_loans()
    {
      setpurlads();
      $data = ["bannerbg" => "images/holiday-loans.jpg", "headpg" => "BEST HOLLIDAY LOANS IN CANADA", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Holliday Loans Canada');
      SEOMeta::setDescription('Holliday Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates & How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.d');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('holiday-vacation-loans', $data);
    }
    public function paydayloancanada()
    {
      setpurlads();
      $data = ["bannerbg" => "images/20.jpg", "headpg" => "BEST PAYDAY LOAN CANADA", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Best Payday Loan Canada');
      SEOMeta::setDescription('Best fast Payday Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates &amp; How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('payday-loan-canada', $data);
    }

    public function loanexpress()
    {
      setpurlads();
      $data = ["bannerbg" => "images/20.jpg", "headpg" => "BEST PAYDAY LOAN CANADA", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Best Payday Loan Canada');
      SEOMeta::setDescription('Best fast Payday Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates &amp; How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('loan-express', $data);
    }

    public function etransferpaydayloans()
    {
      setpurlads();
      $data = ["bannerbg" => "images/20.jpg", "headpg" => "BEST PAYDAY LOAN CANADA", "headtxtcolor" => "white", "headalign" => "text-right"];
    SEOMeta::setTitle('Mega Cash Bucks | Best Payday Loan Canada');
      SEOMeta::setDescription('Best fast Payday Loans Canada, Short Term Loans Or Cash Advance Loan Interest Rates &amp; How They Work? Contact Mega Cash Bucks. The Only Trusted Payday Advance In Canada.');
      SEOMeta::addKeyword('Payday Advance, Mega Cash Bucks, online cash loans, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, ontario, british columbia, nova scotia, Saskatchewan, Manitoba, financial, cash lenders, canada, canadian, online cash loan, loans, Wise loan, cash loan,  payday, payday loans, payday loan, express approval, easy money, easy cash, cash advance, toronto, ottawa, vancouver, edmonton, calgary, bc, new brunswick, moncton');
        return view('e-transfer-payday-loans-canada-24-7', $data);
    }

    public function guaranteedpaydayloans() //Build Me
    { $data = ["bannerbg" => "images/50.jpg", "headpg" => "GUARANTEED PAYDAY LOANS CANADA", "headtxtcolor" => "white", "headalign" => "text-right"];
        return view('guaranteed-payday-loans', $data);  }

    public function guaranteedpaydayloansontario() //Build Me
    { $data = ["bannerbg" => "images/20.jpg", "headpg" => "GUARANTEED PAYDAY LOANS ONTARIO", "headtxtcolor" => "white", "headalign" => "text-right"];
    return view('guaranteed-payday-loans-ontario', $data);  }




}
