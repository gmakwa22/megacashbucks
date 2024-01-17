<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\SEOMeta;

use App\Http\Controllers\Controller;


class ABController extends Controller
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
     public function airdrie()
      {
          $data = ["bannerbg" => "a-prov/airdrie.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "AIRDRIE'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "Payday Loans Airdrie"];
          SEOMeta::setTitle('Mega Cash Bucks | Get Instant Payday Loans Online Airdrie');
          SEOMeta::setDescription('Get a quick instant loan in minutes from Mega Cash Bucks if you need money fast. We provide payday loans in Airdrie with installments according to your choices.');
          SEOMeta::addKeyword('Payday Loans Airdrie');
          return view('/alberta.airdrie', $data);
      }

      public function selkirk()
      {
         $data = ["bannerbg" => "a-prov/selkirk.jpg", "licpr" => "mb", "spprov" => "Selkirk", "headpg" => "SELKIRK'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "payday loans selkirk"];
         SEOMeta::setTitle('Mega Cash Bucks | Get Instant Payday Loans Online Selkirk');
         SEOMeta::setDescription ('Safeguarding your financial interests is our top priority. As a direct lender, we strictly adhere to all Provincial rules and regulations in Canada, ensuring a secure and trusted lending process.');
         SEOMeta::addKeyword('Online cash loans in Manitoba, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, payday loans, loans for payday, payday loans with bad credit, payday loan for bad credit customer, payday loans in selkirk');
         return view('/alberta.selkirk', $data);
      }

      public function morden()
      {
         $data = ["bannerbg" => "a-prov/morden.jpg", "licpr" => "mb", "spprov" => "Morden", "headpg" => "PayDay Loans Morden", "headtxtcolor" => "red", "headalt" => "PayDay Loans Morden"];
         SEOMeta::setTitle('Mega Cash Bucks | Get Instant Payday Loans Online Morden');
         SEOMeta::setDescription('Check our loan approval policy and get an instant payday loan in Morden. Our best online fast money service will give you easy and quick loans.');
      SEOMeta::addKeyword('PayDay Loans Morden');
         return view('/alberta.morden', $data);
      }


      public function markham()
      {
         $data = ["bannerbg" => "a-prov/markham.jpg", "licpr" => "on", "spprov" => "Markham", "headpg" => "MARKHAM'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "payday loans markham"];
         SEOMeta::setTitle('Get Instant Payday Loans Online Markham');
         SEOMeta::setDescription('Looking for a trusted loan agency? We provide fast online payday loans in Markham, Canada at affordable installment rates. Get an instant loan now.');
         SEOMeta::addKeyword('payday loans markham');
         return view('/alberta.markham', $data);
      }






      public function steinbach()
      {
         $data = ["bannerbg" => "a-prov/steinbach.jpg", "licpr" => "mb", "spprov" => "Steinbach", "headpg" => "STEINBACH'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "red", "headalt" => "payday loans Steinbach"];
         SEOMeta::setTitle('Get Instant Payday Loans Online Steinbach.');
         SEOMeta::setDescription('Our easy application process for payday loans in Steinbach can get your payday loan online easily. So apply fast and get a quick approval for payday loan.');
      SEOMeta::addKeyword('Online cash loans in Manitoba, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, payday loans, loans for payday, payday loans with bad credit, payday loan for bad credit customer');
         return view('/alberta.steinbach', $data);
      }


       public function stalbert()
        {
            $data = ["bannerbg" => "a-prov/st-albert.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "ST ALBERT'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white"];
            SEOMeta::setTitle('Get Instant Payday Loans Online Stalbert');
            SEOMeta::setDescription('Alberta Payday Loans open 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response.');
            SEOMeta::addKeyword('Airdrie, Beaumont, Brooks, Calgary, Camrose, Chestermere, Cold Lake, Edmonton, Fort Saskatchewan, Grande Prairie, Lacombe, Leduc, Lethbridge, Lloydminster, Medicine Hat, Red Deer, Spruce Grove, St. Albert, Wetaskiwin, installment loans in alberta, interest rate, bank account, personal loans, loan repayment, applying for a loan, lender in alberta, credit check loans, bad credit, loan application, credit card, apply online, quick cash, loans airdrie, payday loans airdrie, car title loans airdrie, bad credit loans airdrie, cash loans airdrie, payday loans airdrie alberta, cash loans airdrie, title loans airdrie');
            return view('/alberta.stalbert', $data);
        }

     public function edmonton()
    {
        $data = ["bannerbg" => "provinces/31.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "24 Hour Payday Loans Edmonton", "headtxtcolor" => "white", "headalt" => "best payday loans edmonton"];
        SEOMeta::setTitle('Get Instant Payday Loans Online Edmonton');
        SEOMeta::setDescription('Complete our online application for loan and get 24/7 payday loans in Edmonton and get money instantly. We give easy and fast loan to the people who needs money instantly.');
        SEOMeta::addKeyword('payday loans edmonton, 24 hour payday loans edmonton, best payday loans edmonton');
        return view('/alberta.edmonton', $data);
    }
    public function calgary()
    {
       $data = ["bannerbg" => "provinces/30.jpg", "licpr" => "ab", "spprov" => "Alberta", "headpg" => "Payday Loan in Calgary", "headtxtcolor" => "white", "headalt" => "payday loan in calgary"];
        SEOMeta::setTitle('Get Instant Payday Loans Online Calgary');
       SEOMeta::setDescription('Mega Cash Bucks is the best loan provider in Canada. Get an instant payday loan in Calgary by filling a loan application form and get your loan amount today.');
    SEOMeta::addKeyword('payday loan in calgary');
       return view('/alberta.calgary', $data);
    }
    public function reddeer()
    {
      $data = ["bannerbg" => "provinces/33.jpg", "licpr" => "ab", "spprov" => "Red Deer", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN RED DEER", "headtxtcolor" => "white", "headalt" => "Payday Loans Red Deer Alberta"];
      SEOMeta::setTitle('Get Instant Payday Loans Online Reddeer');
      SEOMeta::setDescription('We give the same-day e-transfer payday loan in Red Deer, Canada to the people who need money instantly. So get a fast loan from Mega Cash Bucks now.');
      SEOMeta::addKeyword('Payday Loans Red Deer Alberta');
      return view('/alberta.reddeer', $data);
    }
    public function lethbridge()
    {
     $data = ["bannerbg" => "provinces/32.jpg", "licpr" => "ab", "spprov" => "Lethbridge", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LETHBRIDGE", "headtxtcolor" => "white", "headalt" => "lethbridge best payday loans"];
     SEOMeta::setTitle('Get Instant Payday Loans Online Lethbridge');
     SEOMeta::setDescription('Get online payday loans with instant approval in Canada from Mega Cash Bucks. Lethbridge best payday loans with affordable installments & a low-interest rates.');
     SEOMeta::addKeyword('lethbridge best payday loans');
     return view('/alberta.lethbridge', $data);
    }
    public function medicinehat()
    {
     $data = ["bannerbg" => "provinces/35.jpg", "licpr" => "ab", "spprov" => "Medicine Hat", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN MEDICINE HAT", "headtxtcolor" => "red", "headalt" => "Payday Loans Medicine Hat"];
     SEOMeta::setTitle('Get Instant Payday Loans Online Medicinehat');
     SEOMeta::setDescription('Do you need money urgently? Mega Cash Bucks give you an instant fast loan in Canada. So dont miss this opportunity to get payday loans in Medicine Hat.');
     SEOMeta::addKeyword('payday loans medicine hat');
     return view('/alberta.medicinehat', $data);
    }
    public function woodbuffalo()
    {
     $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Wood Buffalo", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN WOOD BUFFALO", "headtxtcolor" => "WHITE", "headalt" => "payday loans wood buffalo alberta"];
     SEOMeta::setTitle('Get Instant Payday Loans Online Woodbuffalo');
     SEOMeta::setDescription('As the leading loan agency in Canada we provide safe & flexible loans if you are looking for payday loans online in Wood Buffalo, Alberta then apply for the loan now.');
     SEOMeta::addKeyword('payday loans wood buffalo alberta');
     return view('/alberta.woodbuffalo', $data);
    }

// Old ones beginning new ones

     public function fortmcmurry() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Fort McMurray", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN FORT MCMURRAY", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Get Payday Loans Online Fortmcmurray');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.fortmcmurray', $data); }

     public function grandeprairie() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Grande Prairie", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN GRANDE PRAIRIE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Grande Prairie"];
       SEOMeta::setTitle('Instant Payday Loans Online Grandeprairie.');
       SEOMeta::setDescription ('Stress Free Short Term Loans Grande Prairie As a reputable direct lender, we strictly adhere to all Provincial rules and regulations in Canada, ensuring a secure and trusted lending experience for our customers.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.grande-prairie', $data); }

     public function sprucegrove() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Spruce Grove", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN SPRUCE GROVE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Spruce Grove"];
       SEOMeta::setTitle('Instant Payday Loans Online Sprucegrove.');
       SEOMeta::setDescription ('Our commitment to your safety is unwavering. We operate as a direct lender, fully compliant with all Provincial laws and regulations in Canada, providing you with a trustworthy borrowing option.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.spruce-grove', $data); }

     public function lloydminster() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Lloydminster", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LLOYDMINSTER", "headtxtcolor" => "WHITE", "headalt" => "payday loans Lloydminster"];
       SEOMeta::setTitle('Instant Payday Loans Online Lloydminster.');
       SEOMeta::setDescription ('Lloydminster. 15 Minute Loans. Easy. Fast. No Hassles.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.lloydminster', $data); }

     public function leduc() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Leduc", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LEDUC", "headtxtcolor" => "WHITE", "headalt" => "payday loans Leduc"];
       SEOMeta::setTitle('Instant Payday Loans Online Leduc.');
         SEOMeta::setDescription ('A safe and trusted best lender 15 Minute Loans. Easy. Fast. No Hassles. No faxing. Canada Wide. Leduc');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.leduc', $data); }

     public function okotoks() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Okotoks", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN OKOTOKS", "headtxtcolor" => "WHITE", "headalt" => "payday loans Okotoks"];
       SEOMeta::setTitle('Get Instant Payday Loans Online Okotoks.');
       SEOMeta::setDescription ('Choose reliability with us. Operating as a best lender in Canada, we are a direct lender that prioritizes your financial safety by following all Provincial rules and regulations.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.okotoks', $data); }

     public function cochrane() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Cochrane", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN COCHRANE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Get Instant Payday Loans Online Cochrane.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.cochrane', $data); }

     public function fortsaskatchewan() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Fort Saskatchewan", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN FORT SASKATCHEWAN", "headtxtcolor" => "WHITE", "headalt" => "payday loans fort saskatchewan"];
       SEOMeta::setTitle('Instant Payday Loans Fortsaskatchewan.');
       SEOMeta::setDescription ('A safe and trusted best lender loans canada direct lender conforming to all Provincial rules and regulations pertaining to our regulatory environment. Easy Fort Saskatchewan Loans');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.fortsaskatchewan', $data); }

     public function chestermere() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Chestermere", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CHESTERMERE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Chestermere"];
       SEOMeta::setTitle('Get Instant Payday Loans Online Chestermere.');
       SEOMeta::setDescription ('Trust in our services as a best lender in Canada, following all Provincial rules and regulations meticulously. Your safety and compliance with legal standards are paramount to us');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.chestermere', $data); }

     public function camrose() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Camrose", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CAMROSE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Camrose"];
       SEOMeta::setTitle('Get Instant Payday Loans Online Camrose.');
       SEOMeta::setDescription ('As a best lender in Canada, we are a direct lender that complies with all Provincial rules and regulations, ensuring a secure and trustworthy platform for your borrowing needs.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.camrose', $data); }

     public function beaumont() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Beaumont", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BEAUMONT", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Get Instant Payday Loans Online Beaumont.');
       SEOMeta::setDescription('Payday Loans Beaumont Alberta | Need Instant Payday Loans Online in Beaumont, AB? Get Up To $1500');
       SEOMeta::addKeyword('loans beaumont, bad credit loans beaumont, cash loans beaumont, instant payday loans beaumont, online loans beaumont, quick loans beaumont, quick loans in beaumont, loan companies beaumont, cash advance beaumont, cash advance loans beaumont, cash advance beaumont, cash for you now beaumont, cash king beaumont, cash money beaumont, cash shop beaumont, cash store beaumont, direct cash beaumont, ez loan beaumont, fast cash loans beaumont, money loans beaumont, money mart beaumont, money beaumont, payday loans beaumont');
       return view('/alberta.beaumont', $data); }

     public function stonyplain() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Stony Plain", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN STONY PLAIN", "headtxtcolor" => "WHITE", "headalt" => "payday loans Stony Plain"];
       SEOMeta::setTitle('Get Instant Payday Loans Online Stonyplain.');
       SEOMeta::setDescription ('Choose our services with confidence, knowing that we are a direct lender committed to following all Provincial rules and regulations in Canada, providing a safe and compliant lending environment');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.stonyplain', $data); }

     public function sylvanlake() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Sylvan Lake", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN SYLVAN LAKE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Sylvan Lake"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Sylvan Lake, AB. ');
       SEOMeta::setDescription ('We are a direct lender you can rely on, conforming to all Provincial rules and regulations in Canada. Rest assured, your financial transactions are in safe hands with us.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.sylvanlake', $data); }

       
  public function brandon()
  {
    setpurlads();
     $data = ["bannerbg" => "a-prov/brandon.jpg", "licpr" => "mb", "spprov" => "Brandon", "headpg" => "BRANDON'S BEST PAYDAY LOAN OPTION", "headtxtcolor" => "white", "headalt" => "payday loans Brandon"];
     SEOMeta::setTitle('Mega Cash Bucks | Instant Payday Loans Online Brandon MB');
     SEOMeta::setDescription ('We are your reliable partner in financial solutions. As a direct lender, we strictly conform to all Provincial rules and regulations in Canada, ensuring a secure and compliant platform for your borrowing needs.');
     SEOMeta::addKeyword('payday loans Brandon manitoba, payday loans Brandon manitoba, payday loans Brandon manitoba, payday loans manitoba no credit check');
     return view('payday-loans-brandon', $data);
  }
     public function brooks() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Brooks", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BROOKS", "headtxtcolor" => "WHITE", "headalt" => "payday loans Brooks"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Brooks, AB.');
       SEOMeta::setDescription ('Depend on us for a secure lending experience. Operating as a direct lender, we uphold all Provincial rules and regulations in Canada, guaranteeing a safe and compliant environment for your financial transactions.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, ab');
       return view('/alberta.brooks', $data); }

     public function strathmore() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Strathmore", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN STRATHMORE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Strathmore, AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.strathmore', $data); }

     public function highriver() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "High River", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN HIGH RIVER", "headtxtcolor" => "WHITE", "headalt" => "payday loans highriver" ];
       SEOMeta::setTitle('Need Fast Cash Loans Near High River, AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.highriver', $data); }

     public function wetaskiwin() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Wetaskiwin", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN WETASKIWIN", "headtxtcolor" => "WHITE", "headalt" => "payday loans wetaskiwin"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Wetaskiwin, AB');
       SEOMeta::setDescription ('Operating as a direct lender, we prioritize your safety by adhering to all Provincial rules and regulations in Canada. Trust us for a secure and reliable lending experience');
         SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.wetaskiwin', $data); }

     public function lacombe() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Lacombe", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LACOMBE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Lacombe"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Lacombe, AB');
       SEOMeta::setDescription ('Cash You Need Now. Apply Now Online With Our Quick And Easy Online Application Process. A safe and trusted best lender Lacombe.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.lacombe', $data); }

     public function canmore() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Canmore", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CANMORE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Canmore"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Canmore, AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.canmore', $data); }

     public function morinville() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Morinville", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN MORINVILLE", "headtxtcolor" => "WHITE", "headalt" => "payday loans MORINVILLE"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Morinville, AB');
         SEOMeta::setDescription('Morinville Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.morinville', $data); }

     public function whitecourt() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Whitecourt", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN WHITECOURT", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Whitecourt, AB ');
       SEOMeta::setDescription('Whitecourt Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('loans whitecourt, bad credit loans whitecourt, cash loans whitecourt, instant payday loans whitecourt, online loans whitecourt, quick loans whitecourt, quick loans in whitecourt, loan companies whitecourt, cash advance whitecourt, cash advance loans whitecourt, cash advance whitecourt, cash for you now whitecourt, cash king whitecourt, cash money whitecourt, cash shop whitecourt, cash store whitecourt, direct cash whitecourt, ez loan whitecourt, fast cash loans whitecourt, money loans whitecourt, money mart whitecourt, money whitecourt, payday loans whitecourt, AB');
       return view('/alberta.whitecourt', $data); }

     public function hinton() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Hinton", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN HINTON", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Hinton | Need Fast Cash Loans Near Hinton, AB ');
       SEOMeta::setDescription('Hinton Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('loans hinton, bad credit loans hinton, cash loans hinton, instant payday loans hinton, online loans hinton, quick loans hinton, quick loans in hinton, loan companies hinton, cash advance hinton, cash advance loans hinton, cash advance hinton, cash for you now hinton, cash king hinton, cash money hinton, cash shop hinton, cash store hinton, direct cash hinton, ez loan hinton, fast cash loans hinton, money loans hinton, money mart hinton, money hinton, payday loans hinton, AB');
       return view('/alberta.hinton', $data); }

     public function olds() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Olds", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN OLDS", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Olds | Need Fast Cash Loans Near Olds, AB ');
       SEOMeta::setDescription('Olds Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('loans olds, bad credit loans olds, cash loans olds, instant payday loans olds, online loans olds, quick loans olds, quick loans in olds, loan companies olds, cash advance olds, cash advance loans olds, cash advance olds, cash for you now olds, cash king olds, cash money olds, cash shop olds, cash store olds, direct cash olds, ez loan olds, fast cash loans olds, money loans olds, money mart olds, money olds, payday loans olds, AB');
       return view('/alberta.olds', $data); }

     public function blackfalds() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Blackfalds", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BLACKFALDS", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Blackfalds | Need Fast Cash Loans Near Blackfalds, AB ');
       SEOMeta::setDescription('Blackfalds Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('loans blackfalds, bad credit loans blackfalds, cash loans blackfalds, instant payday loans blackfalds, online loans blackfalds, quick loans blackfalds, quick loans in blackfalds, loan companies blackfalds, cash advance blackfalds, cash advance loans blackfalds, cash advance blackfalds, cash for you now blackfalds, cash king blackfalds, cash money blackfalds, cash shop blackfalds, cash store blackfalds, direct cash blackfalds, ez loan blackfalds, fast cash loans blackfalds, money loans blackfalds, money mart blackfalds, money blackfalds, payday loans blackfalds, AB');
       return view('/alberta.blackfalds', $data); }

     public function taber() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Taber", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN TABER", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Taber | Need Fast Cash Loans Near Taber, AB ');
       SEOMeta::setDescription('Payday Loans Taber | Need Instant Payday Loans Online in Taber, AB? Get Up To $1500');
       SEOMeta::addKeyword('loans taber, bad credit loans taber, cash loans taber, instant payday loans taber, online loans taber, quick loans taber, quick loans in taber, loan companies taber, cash advance taber, cash advance loans taber, cash advance taber, cash for you now taber, cash king taber, cash money taber, cash shop taber, cash store taber, direct cash taber, ez loan taber, fast cash loans taber, money loans taber, money mart taber, money taber, payday loans taber, AB');
       return view('/alberta.taber', $data); }

     public function coaldale() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Coaldale", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN COALDALE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Coaldale | Need Fast Cash Loans Near Coaldale, AB ');
       SEOMeta::setDescription('Coaldale Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('loans coaldale, bad credit loans coaldale, cash loans coaldale, instant payday loans coaldale, online loans coaldale, quick loans coaldale, quick loans in coaldale, loan companies coaldale, cash advance coaldale, cash advance loans coaldale, cash advance coaldale, cash for you now coaldale, cash king coaldale, cash money coaldale, cash shop coaldale, cash store coaldale, direct cash coaldale, ez loan coaldale, fast cash loans coaldale, money loans coaldale, money mart coaldale, money coaldale, payday loans coaldale, AB');
       return view('/alberta.coaldale', $data); }

     public function edson() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Edson", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN EDSON", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Edson | Need Fast Cash Loans Near Edson, AB ');
       SEOMeta::setDescription('Edson Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('loans edson, bad credit loans edson, cash loans edson, instant payday loans edson, online loans edson, quick loans edson, quick loans in edson, loan companies edson, cash advance edson, cash advance loans edson, cash advance edson, cash for you now edson, cash king edson, cash money edson, cash shop edson, cash store edson, direct cash edson, ez loan edson, fast cash loans edson, money loans edson, money mart edson, money edson, payday loans edson, AB');
       return view('/alberta.edson', $data); }

     public function banff() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Banff", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BANFF", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Banff | Need Fast Cash Loans Near Banff, AB ');
       SEOMeta::setDescription('Payday Loans Banff | Need Instant Payday Loans Online in Airdrie, AB? Get Up To $1500');
       SEOMeta::addKeyword('loans banff, bad credit loans banff, cash loans banff, instant payday loans banff, online loans banff, quick loans banff, quick loans in banff, loan companies banff, cash advance banff, cash advance loans banff, cash advance banff, cash for you now banff, cash king banff, cash money banff, cash shop banff, cash store banff, direct cash banff, ez loan banff, fast cash loans banff, money loans banff, money mart banff, money banff, payday loans banff');
       return view('/alberta.banff', $data); }

     public function grandcentre() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Grand Centre", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN GRAND CENTRE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Grand Centre | Need Fast Cash Loans Near Grand Centre, AB ');
       SEOMeta::setDescription('Grand Centre Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.grandcentre', $data); }

     public function innisfail() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Innisfail", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN INNISFAIL", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Innisfail | Need Fast Cash Loans Near Innisfail, AB ');
       SEOMeta::setDescription('Innisfail Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.innisfail', $data); }

     public function ponoka() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Ponoka", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN PONOKA", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Ponoka | Need Fast Cash Loans Near Ponoka, AB ');
       SEOMeta::setDescription('Ponoka Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.ponoka', $data); }

     public function draytonvalley() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Drayton Valley", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN DRAYTON VALLEY", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Drayton Valley | Need Fast Cash Loans Near Drayton Valley, AB ');
       SEOMeta::setDescription('Drayton Valley Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.draytonvalley', $data); }

     public function coldlake() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Cold Lake", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN COLD LAKE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Cold Lake | Need Fast Cash Loans Near Cold Lake, AB ');
       SEOMeta::setDescription('Cold Lake Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.coldlake', $data); }

     public function devon() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Devon", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN DEVON", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Devon | Need Fast Cash Loans Near Devon, AB ');
       SEOMeta::setDescription('Devon Payday Loans 24/7. ✔ 5 Minute Approval ✔ No FAX ✔ Bad Credit OK ✔ Interac ✔ Instant Response. MB');
       SEOMeta::addKeyword('loans devon, bad credit loans devon, cash loans devon, instant payday loans devon, online loans devon, quick loans devon, quick loans in devon, loan companies devon, cash advance devon, cash advance loans devon, cash advance devon, cash for you now devon, cash king devon, cash money devon, cash shop devon, cash store devon, direct cash devon, ez loan devon, fast cash loans devon, money loans devon, money mart devon, money devon, payday loans devon, MB');
       return view('/alberta.devon', $data); }

     public function drumheller() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Drumheller", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN DRUMHELLER", "headtxtcolor" => "WHITE", "headalt" => "payday loans drumheller"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Drumheller, AB');
       SEOMeta::setDescription ('Your trust is earned through our commitment to safety. As a direct lender, we adhere to all Provincial rules and regulations in Canada, providing you with a reliable and compliant lending solution');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.drumheller', $data); }

     public function rockymountainhouse() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Rocky Mountain House", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN ROCKY MOUNTAIN HOUSE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Rocky Mountain House"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Rocky Mountain House');
       SEOMeta::setDescription ('Safety and trust are our priorities. As a direct lender, we abide by all Provincial rules and regulations in Canada, ensuring a secure and compliant lending process for you.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.rockymountainhouse', $data); }

     public function slavelake() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Slave Lake", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN SLAVE LAKE", "headtxtcolor" => "WHITE", "headalt" => "payday loans Slave Lake"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Slave Lake, AB');
       SEOMeta::setDescription ('Trust our expertise as a best lender in Canada. We are a direct lender, conforming to all Provincial rules and regulations to ensure your financial transactions are secure and compliant');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.slavelake', $data); }

     public function wainwright() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Wainwright", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN WAINWRIGHT", "headtxtcolor" => "WHITE", "headalt" => "payday loans Wainwright"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Wainwright, AB');
       SEOMeta::setDescription ('We take pride in being a safe and trusted direct lender in Canada. Our operations strictly follow all Provincial rules and regulations, emphasizing transparency and compliance in our services');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.wainwright', $data); }

     public function stettler() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Stettler", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN STETTLER", "headtxtcolor" => "WHITE" , "headalt" => "payday loans Stettler"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Stettler, AB');
       SEOMeta::setDescription ('Count on us as a safe and trusted direct lender in Canada. We strictly adhere to all Provincial rules and regulations, prioritizing your financial well-being.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.stettler', $data); }

     public function stpaul() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "St Paul", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN ST. PAUL", "headtxtcolor" => "WHITE", "headalt" => "payday loans St.Paul"];
       SEOMeta::setTitle('Need Fast Cash Loans Near St. Paul, AB');
       SEOMeta::setDescription ('Your peace of mind is our priority. As a direct lender, we comply with all Provincial rules and regulations in Canada, establishing ourselves as a safe and trusted source for loans');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.stpaul', $data); }

     public function redcliff() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Redcliff", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN REDCLIFF", "headtxtcolor" => "WHITE", "headalt" => "payday loans Redcliff"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Redcliff, AB');
       SEOMeta::setDescription ('Redcliff Alberta Fast and Easy. Bad Credit Accepted. 100% Secure. Apply Now to Get Your Money Today! Get Your Loan, Paperless and Fast. Same Day Deposit. Contact us Now! Confidential.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.redcliff', $data); }

     public function vegreville() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Vegreville", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN VEGREVILLE", "headtxtcolor" => "WHITE", "headalt" => "payday loans vegreville"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Vegreville, AB');
       SEOMeta::setDescription ('Rest assured in your financial decisions with us. As a best lender in Canada, we operate as a direct lender, following all Provincial rules and regulations to provide a secure lending environment');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.vegreville', $data); }

     public function didsbury() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Didsbury", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN DIDSBURY", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Didsbury, AB? ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.didsbury', $data); }

     public function bonnyville() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Bonnyville", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BONNYVILLE", "headtxtcolor" => "WHITE", "headalt" => "Bonnyville best payday loans canada."];
       SEOMeta::setTitle('Need Fast Cash Loans Near Bonnyville, AB ');
       SEOMeta::setDescription('Mega Cash Bucks is is your go-to financial partner for low-cost, rapid online payday loans and quick cash advances with multiple repayment plans. The application process is simple, and approval is immediate! Enjoy e-transfer money delivery anywhere in Canada.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.bonnyville', $data); }

     public function langdon() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Langdon", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LANGDON", "headtxtcolor" => "WHITE", "headalt" => "payday loans Langdon"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Langdon, AB');
       SEOMeta::setDescription ('A safe and trusted best lender loans canada Fast & easy. Bad Credit Accepted. Apply Now, Get Your Money Today!.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.langdon', $data); }

     public function westlock() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Westlock", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN WESTLOCK", "headtxtcolor" => "WHITE", "headalt" => "payday loans Westlock"];
       SEOMeta::setTitle('Westlock | Need Fast Cash Loans Near Westlock, AB ');
       SEOMeta::setDescription ('We operate as a direct lender, committed to your safety and satisfaction. Our services conform to all Provincial rules and regulations in Canada, providing a trustworthy borrowing experience');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.westlock', $data); }

     public function barrhead() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Barrhead", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BARRHEAD", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Barrhead | Need Fast Cash Loans Near Barrhead, AB ');
       SEOMeta::setDescription('Payday Loans Barhead Alberta | Need Instant Payday Loans Online in Barhead, AB? Get Up To $1500');
       SEOMeta::addKeyword('loans barrhead, bad credit loans barrhead, cash loans barrhead, instant payday loans barrhead, online loans barrhead, quick loans barrhead, quick loans in barrhead, loan companies barrhead, cash advance barrhead, cash advance loans barrhead, cash advance barrhead, cash for you now barrhead, cash king barrhead, cash money barrhead, cash shop barrhead, cash store barrhead, direct cash barrhead, ez loan barrhead, fast cash loans barrhead, money loans barrhead, money mart barrhead, money barrhead, payday loans barrhead');
       return view('/alberta.barrhead', $data); }

     public function jasper() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Jasper", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN JASPER", "headtxtcolor" => "WHITE", "headalt" => "payday loans jasper"];
       SEOMeta::setTitle('Jasper | Need Fast Cash Loans Near Jasper, AB.');
       SEOMeta::setDescription ('The Ruthlessly Easy Loan Option You have been Waiting For. Easy & Secure. Apply Online. A safe and trusted best lender.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.jasper', $data); }

     public function peaceriver() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Peace River", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN PEACE RIVER", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Peace River | Need Fast Cash Loans Near Peace River, AB.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.peaceriver', $data); }

     public function vermilion() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Vermilion", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN VERMILION", "headtxtcolor" => "WHITE", "headalt" => "payday loans vermilion"];
       SEOMeta::setTitle('Vermilion | Need Fast Cash Loans Near Vermilion, AB');
       SEOMeta::setDescription ('Trust is the foundation of our services. As a direct lender, we adhere to all Provincial rules and regulations in Canada, offering a reliable and compliant solution for your financial needs');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.vermilion', $data); }

     public function raymond() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Raymond", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN RAYMOND", "headtxtcolor" => "WHITE", "headalt" => "payday loans Raymond"];
       SEOMeta::setTitle('Raymond | Need Fast Cash Loans Near Raymond, AB.');
       SEOMeta::setDescription ('Raymond Fast and Easy. Bad Credit Accepted. 100% Secure. Apply Now to Get Your Money Today! Get Your Loan, Paperless and Fast. Same Day Deposit. Contact us Now! Confidential.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.raymond', $data); }

     public function pinchercreek() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Pincher Creek", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN PINCHER CREEK", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Pincher Creek | Need Fast Cash Loans Near Pincher Creek, AB ');
       SEOMeta::setDescription ('Pincher Creek Fast & Easy · The Best Rates · No Credit Refused · 24/7 Loans. Bad Credit Accepted.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.pinchercreek', $data); }

     public function claresholm() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Claresholm", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CLARESHOLM", "headtxtcolor" => "WHITE", "headalt" => "payday loans Claresholm"];
       SEOMeta::setTitle('Claresholm | Need Fast Cash Loans Near Claresholm, AB.');
       SEOMeta::setDescription ('Rest easy with our direct lending services, where compliance with all Provincial rules and regulations in Canada is a cornerstone of our commitment to your financial security');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.claresholm', $data); }

     public function grandecache() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Grande Cache", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN GRANDE CACHE", "headtxtcolor" => "WHITE", "headalt" => "payday loans grandecache"];
       SEOMeta::setTitle('Grande Cache | Need Fast Cash Loans Near Grande Cache, AB');
       SEOMeta::setDescription ('We are your trusted partner in lending, a direct lender conforming to all Provincial rules and regulations in Canada. Your safety and satisfaction are at the core of our operations');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.grandecache', $data); }

     public function cardston() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Cardston", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CARDSTON", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Cardston | Need Fast Cash Loans Near Cardston, AB ');
       SEOMeta::setDescription('Payday Loans Cardston | Need Instant Payday Loans Online in Cardston, AB? Get Up To $1500');
       SEOMeta::addKeyword('loans cardston, bad credit loans cardston, cash loans cardston, instant payday loans cardston, online loans cardston, quick loans cardston, quick loans in cardston, loan companies cardston, cash advance cardston, cash advance loans cardston, cash advance cardston, cash for you now cardston, cash king cardston, cash money cardston, cash shop cardston, cash store cardston, direct cash cardston, ez loan cardston, fast cash loans cardston, money loans cardston, money mart cardston, money cardston, payday loans cardston');
       return view('/alberta.cardston', $data); }

     public function penhold() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Penhold", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN PENHOLD", "headtxtcolor" => "WHITE", "headalt" => "payday loans penhold"];
       SEOMeta::setTitle('Penhold | Need Fast Cash Loans Near Penhold, AB ');
       SEOMeta::setDescription ('Your financial security is our priority. We operate as a direct lender, strictly conforming to all Provincial rules and regulations in Canada, offering you a safe and dependable borrowing option');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.penhold', $data); }

     public function carstairs() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Carstairs", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CARSTAIRS", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Carstairs | Need Fast Cash Loans Near Carstairs, AB ');
       SEOMeta::setDescription('Payday Loans Carstairs | Need Instant Payday Loans Online in Carstairs, AB? Get Up To $1500');
       SEOMeta::addKeyword('loans carstairs, bad credit loans carstairs, cash loans carstairs, instant payday loans carstairs, online loans carstairs, quick loans carstairs, quick loans in carstairs, loan companies carstairs, cash advance carstairs, cash advance loans carstairs, cash advance carstairs, cash for you now carstairs, cash king carstairs, cash money carstairs, cash shop carstairs, cash store carstairs, direct cash carstairs, ez loan carstairs, fast cash loans carstairs, money loans carstairs, money mart carstairs, money carstairs, payday loans carstairs, AB');
       return view('/alberta.carstairs', $data); }

     public function threehills() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Three Hills", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN THREE HILLS", "headtxtcolor" => "WHITE", "headalt" => "payday loans Three Hills"];
       SEOMeta::setTitle('Three Hills | Need Fast Cash Loans Near Three Hills, AB');
       SEOMeta::setDescription ('Your trust is our greatest asset. Operating as a best lender in Canada, we are a direct lender committed to strict adherence to all Provincial rules and regulations, guaranteeing your financial safety.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.threehills', $data); }

     public function crossfield() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Crossfield", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CROSSFIELD", "headtxtcolor" => "WHITE", "headalt" => "payday loans Crossfield"];
       SEOMeta::setTitle('Crossfield | Need Fast Cash Loans Near Crossfield, AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.crossfield', $data); }

     public function highlevel() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "High Level", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN HIGH LEVEL", "headtxtcolor" => "WHITE", "headalt" => "payday loans High Level"];
       SEOMeta::setTitle('Need Fast Cash Loans Near High Level, AB');
       SEOMeta::setDescription ('The Quick Simple Loan, When You Need It. Apply Now, Know Immediately and Receive Money.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.highlevel', $data); }

     public function fortmacleod() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Fort Macleod", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN FORT MACLEOD", "headtxtcolor" => "WHITE", "headalt" => "payday loans Fort Macleod"];
       SEOMeta::setTitle('Mega Cash Bucks Loans Near Fort Macleod, AB');
       SEOMeta::setDescription ('Rely on us as a safe and trusted direct lender in Canada. We uphold all Provincial rules and regulations to ensure your financial transactions are secure and compliant');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.fortmacleod', $data); }

     public function gibbons() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Gibbons", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN GIBBONS", "headtxtcolor" => "WHITE", "headalt" => "payday loans Gibbons"];
       SEOMeta::setTitle('Gibbons | Need Fast Cash Loans Near Gibbons, AB');
       SEOMeta::setDescription ('Gibbons Payday Loans, Count on us as a direct lender, dedicated to maintaining the highest standards of safety and trust. We adhere to all Provincial rules and regulations in Canada to ensure your peace of mind.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.gibbons', $data); }

     public function coalhurst() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Coalhurst", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN COALHURST", "headtxtcolor" => "WHITE", "headalt" => "payday loans coalhurst"];
       SEOMeta::setTitle('Coalhurst | Need Fast Cash Loans Near Coalhurst, AB');
       SEOMeta::setDescription ('We prioritize your peace of mind by operating as a direct lender in full compliance with all Provincial rules and regulations in Canada. Choose us for a secure and trustworthy lending experience');
         SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.coalhurst', $data); }

     public function grimshaw() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Grimshaw", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN GRIMSHAW", "headtxtcolor" => "WHITE", "headalt" => "payday loans Grimshaw"];
       SEOMeta::setTitle('Grimshaw | Need Fast Cash Loans Near Grimshaw, AB');
       SEOMeta::setDescription ('Easy Approval Payday Loans Grimshaw - Your financial well-being is paramount to us. We are a direct lender conforming to all Provincial rules and regulations in Canada, ensuring a safe and trustworthy borrowing experience');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.grimshaw', $data); }

     public function fairview() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Fairview", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN FAIRVIEW", "headtxtcolor" => "WHITE", "headalt" => "payday loans fairview"];
       SEOMeta::setTitle('Fairview | Need Fast Cash Loans Near Fairview, AB ');
       SEOMeta::setDescription ('We are dedicated to your financial security. Operating as a direct lender, we comply with all Provincial rules and regulations in Canada, establishing ourselves as a safe and trusted lending option');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.fairview', $data); }

     public function blackdiamond() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Black Diamond", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BLACK DIAMOND", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Black Diamond | Need Fast Cash Loans Near Black Diamond, AB ');
       SEOMeta::setDescription('Payday Loans Black Diamond Alberta | Need Instant Payday Loans Online in Black Diamond, AB? Get Up To $1500');
       SEOMeta::addKeyword('loans beaverlodge, bad credit loans beaverlodge, cash loans beaverlodge, instant payday loans beaverlodge, online loans beaverlodge, quick loans beaverlodge, quick loans in beaverlodge, loan companies beaverlodge, cash advance beaverlodge, cash advance loans beaverlodge, cash advance beaverlodge, cash for you now beaverlodge, cash king beaverlodge, cash money beaverlodge, cash shop beaverlodge, cash store beaverlodge, direct cash beaverlodge, ez loan beaverlodge, fast cash loans beaverlodge, money loans beaverlodge, money mart beaverlodge, money beaverlodge, payday loans beaverlodge');
       return view('/alberta.blackdiamond', $data); }

     public function sexsmith() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Sexsmith", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN SEXSMITH", "headtxtcolor" => "WHITE", "headalt" => "payday loans Sexsmith"];
       SEOMeta::setTitle('Need Fast Cash Loans Near Sexsmith, AB');
       SEOMeta::setDescription ('Your confidence in our services is paramount. Operating as a direct lender, we adhere to all Provincial rules and regulations in Canada, prioritizing your financial safety and satisfaction.');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.sexsmith', $data); }

     public function hanna() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Hanna", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN HANNA", "headtxtcolor" => "WHITE", "headalt" => "payday loans Hanna"];
       SEOMeta::setTitle('Hanna | Need Fast Cash Loans Near Hanna, AB');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.hanna', $data); }

     public function beaverlodge() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Beaverlodge", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BEAVERLODGE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Beaverlodge | Need Fast Cash Loans Near Beaverlodge, AB ');
       SEOMeta::setDescription('Payday Loans Beaverlodge Alberta | Need Instant Payday Loans Online in Beaverlodge, AB? Get Up To $1500');
       SEOMeta::addKeyword('loans beaverlodge, bad credit loans beaverlodge, cash loans beaverlodge, instant payday loans beaverlodge, online loans beaverlodge, quick loans beaverlodge, quick loans in beaverlodge, loan companies beaverlodge, cash advance beaverlodge, cash advance loans beaverlodge, cash advance beaverlodge, cash for you now beaverlodge, cash king beaverlodge, cash money beaverlodge, cash shop beaverlodge, cash store beaverlodge, direct cash beaverlodge, ez loan beaverlodge, fast cash loans beaverlodge, money loans beaverlodge, money mart beaverlodge, money beaverlodge, payday loans beaverlodge');
       return view('/alberta.beaverlodge', $data); }

     public function laclabiche() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Lac la Biche", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LAC LA BICHE", "headtxtcolor" => "WHITE", "headalt" => "payday loans laclabiche"];
       SEOMeta::setTitle('Lac la Biche | Need Fast Cash Loans Near Lac la Biche, AB');
       SEOMeta::setDescription ('15 Minute Loans. Easy. Fast. No Hassles. No faxing. Canada Wide. A safe and trusted best lender loans canada direct lender. Payday Loan Lac la Biche');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.laclabiche', $data); }

     public function highprairie() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "High Prairie", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN HIGH PRAIRIE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('High Prairie | Need Fast Cash Loans Near High Prairie, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.highprairie', $data); }

     public function turnervalley() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Turner Valley", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN TURNER VALLEY", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Turner Valley | Need Fast Cash Loans Near Turner Valley, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.turnervalley', $data); }

     public function magrath() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Magrath", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN MAGRATH", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Magrath | Need Fast Cash Loans Near Magrath, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.magrath', $data); }

     public function rimbey() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Rimbey", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN RIMBEY", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Rimbey | Need Fast Cash Loans Near Rimbey, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.rimbey', $data); }

     public function heritagepointe() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Heritage Pointe", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN HERITAGE POINTE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Heritage Pointe | Need Fast Cash Loans Near Heritage Pointe, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.heritagepointe', $data); }

     public function nanton() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Nanton", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN NANTON", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Nanton | Need Fast Cash Loans Near Nanton, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.nanton', $data); }

     public function provost() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Provost", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN PROVOST", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Provost | Need Fast Cash Loans Near Provost, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.provost', $data); }

     public function clairmont() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Clairmont", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CLAIRMONT", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Clairmont | Need Fast Cash Loans Near Clairmont, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.clairmont', $data); }

     public function millet() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Millet", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN MILLET", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Millet | Need Fast Cash Loans Near Millet, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.millet', $data); }

     public function sundre() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Sundre", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN SUNDRE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Sundre | Need Fast Cash Loans Near Sundre, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.sundre', $data); }

     public function lacrete() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "La Crète", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LA CRÈTE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('La Crète | Need Fast Cash Loans Near La Crète, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.lacrete', $data); }

     public function tofield() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Sundre", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN TOFIELD", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Sundre | Need Fast Cash Loans Near Sundre, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.tofield', $data); }

     public function calmar() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Calmar", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN CALMAR", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Calmar | Need Fast Cash Loans Near Calmar, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.calmar', $data); }

     public function bowisland() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Bow Island", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BOW ISLAND", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Bow Island | Need Fast Cash Loans Near Bow Island, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.bowisland', $data); }

     public function foxcreek() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Fox Creek", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN FOX CREEK", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Fox Creek | Need Fast Cash Loans Near Fox Creek, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.foxcreek', $data); }

     public function picturebutte() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Picture Butte", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN PICTURE BUTTE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Picture Butte | Need Fast Cash Loans Near Picture Butte, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.picturebutte', $data); }

     public function vulcan() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Vulcan", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN VULCAN", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Vulcan | Need Fast Cash Loans Near Vulcan, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.vulcan', $data); }

     public function redwater() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Redwater", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN REDWATER", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Redwater | Need Fast Cash Loans Near Redwater, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.redwater', $data); }

     public function blairmore() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Blairmore", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BLAIRMORE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Blairmore | Need Fast Cash Loans Near Blairmore, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.blairmore', $data); }

     public function bonaccord() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Bon Accord", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BON ACCORD", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Bon Accord | Need Fast Cash Loans Near Bon Accord, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.bonaccord', $data); }

     public function wembley() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Wembley", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN WEMBLEY", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Wembley | Need Fast Cash Loans Near Wembley, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.wembley', $data); }

     public function springbrook() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Springbrook", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN SPRINGBROOK", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Springbrook | Need Fast Cash Loans Near Springbrook, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.springbrook', $data); }

     public function lancasterpark() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Lancaster Park", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LANCASTER PARK", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Lancaster Park | Need Fast Cash Loans Near Lancaster Park, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.lancasterpark', $data); }

     public function coleman() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Coleman", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN COLEMAN", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Coleman | Need Fast Cash Loans Near Coleman, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.coleman', $data); }

     public function elkpoint() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Elk Point", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN SPRINGBROOK", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Elk Point | Need Fast Cash Loans Near Elk Point, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.elkpoint', $data); }

     public function valleyview() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Valleyview", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN VALLEYVIEW", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Valleyview | Need Fast Cash Loans Near Valleyview, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.valleyview', $data); }

     public function westlake() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Westlake", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN WESTLAKE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Westlake | Need Fast Cash Loans Near Westlake, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.westlake', $data); }

     public function lamont() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Lamont", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LAMONT", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Lamont | Need Fast Cash Loans Near Lamont, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.lamont', $data); }

     public function nobleford() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Nobleford", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN NOBLEFORD", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Nobleford | Need Fast Cash Loans Near Nobleford, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.nobleford', $data); }

     public function swanhills() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Swan Hills", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN SWAN HILLS", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Swan Hills | Need Fast Cash Loans Near Swan Hills, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.swanhills', $data); }

     public function athabasca() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Athabasca", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN ATHABASCA", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Athabasca | Need Fast Cash Loans Near Athabasca, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.athabasca', $data); }

     public function bowden() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Bowden", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BOWDEN", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Bowden | Need Fast Cash Loans Near Bowden, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.bowden', $data); }

     public function vauxhall() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Vauxhall", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN VAUXHALL", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Vauxhall | Need Fast Cash Loans Near Vauxhall, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.vauxhall', $data); }

     public function mayerthorpe() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Mayerthorpe", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN MAYERTHORPE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Mayerthorpe | Need Fast Cash Loans Near Mayerthorpe, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.mayerthorpe', $data); }

     public function albertabeach() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Alberta Beach", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN ALBERTA BEACH", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Alberta Beach | Need Fast Cash Loans Near Alberta Beach, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.albertabeach', $data); }

     public function valquentin() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Val Quentin", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN VAL QUENTIN", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Val Quentin | Need Fast Cash Loans Near Val Quentin, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.valquentin', $data); }

     public function twohills() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Two Hills", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN MAYERTHORPE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Two Hills | Need Fast Cash Loans Near Two Hills, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.twohills', $data); }

     public function bassano() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Bassano", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BASSANO", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Bassano | Need Fast Cash Loans Near Bassano, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.bassano', $data); }

     public function irricana() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Irricana", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN IRRICANA", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Irricana | Need Fast Cash Loans Near Irricana, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.irricana', $data); }

     public function legal() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Legal", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN LEGAL", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Legal | Need Fast Cash Loans Near Legal, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.legal', $data); }

     public function eckville() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Eckville", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN ECKVILLE", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Eckville | Need Fast Cash Loans Near Eckville, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.eckville', $data); }

     public function manning() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Manning", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN MANNING", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Manning | Need Fast Cash Loans Near Manning, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.manning', $data); }

     public function trochu() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Trochu", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN TROCHU", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Trochu | Need Fast Cash Loans Near Trochu, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.trochu', $data); }

     public function viking() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Viking", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN VIKING", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Viking | Need Fast Cash Loans Near Viking, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.viking', $data); }

     public function falher() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Falher", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN FALHER", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Falher | Need Fast Cash Loans Near Falher, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.falher', $data); }

     public function bentley() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Bentley", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN BENTLEY", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Bentley | Need Fast Cash Loans Near Bentley, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.bentley', $data); }

     public function duchess() {
       $data = ["bannerbg" => "provinces/34.jpg", "licpr" => "ab", "spprov" => "Duchess", "headpg" => "SAFE & FLEXIBLE PAYDAY LOANS IN DUCHESS", "headtxtcolor" => "WHITE"];
       SEOMeta::setTitle('Duchess | Need Fast Cash Loans Near Duchess, AB ');
       SEOMeta::addKeyword('Online cash loans Wood Buffalo, money, cash, cash canada, fast cash, cash loans, quick cash, Wise loans, payday, alberta, calgary, edmonton, red deer, lethbridge, st. albert, medicine hat, airdrie, grande prairie, spruce grove, leduc, fort MacMurray, fort saskatchewan, wetaskiwin, camrose, canmore, lacombe, brooks, okotoks, lloydminster, beaumont, cold lake, chestermere, sylvan lake, stony plain, cochrane, strathmore, sherwood park, high river, whitecort, morinville, hinton, banff, wood buffalo, drumheller, blackfalds, cold lake south, jasper, olds, taber, edson, slave lake, innisfail, cardston, macleod, saint paul, rocky mountian house, lake louise, pincher creek, bonyville, stettler, athabasca, ab');
       return view('/alberta.duchess', $data); }


}
