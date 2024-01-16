<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\SEOMeta;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class Kw2Controller extends Controller
{
    public $admin_details;
    /**
     * Create a new controller instance.
     *
     * @              return void
     */

    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @              return \Illuminate\Http\Response
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

     public function kw1500cash() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.1500-cash', $data); }

     public function kw1hourloansnoemploymentverificationcanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.1-hour-loans-no-employment-verification-canada', $data); }

     public function kw24hourpaydayloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.24-hour-payday-loans', $data); }

     public function kw250loannocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.250-loan-no-credit-check', $data); }

     public function kw310loancom() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.310loan-com', $data); }

     public function kw514loans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.514-loans', $data); }

     public function kwadvancecash() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.advance-cash', $data); }

     public function kwappletreeloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.apple-tree-loan', $data); }

     public function kwapplicationcard() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.application-card', $data); }

     public function kwapplyformoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.apply-for-money', $data); }

     public function kwbillhelp() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.bill-help', $data); }

     public function kwborrowmoneyonlineinstantly() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.borrow-money-online-instantly', $data); }

     public function kwcanadalending() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.canada-lending', $data); }

     public function kwcanadapayday() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.canada-payday', $data); }

     public function kwcanadianloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.canadian-loan', $data); }

     public function kwcash4you() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-4-you', $data); }

     public function kwcashadvance() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-advance', $data); }

     public function kwcashadvanceplacesnearme() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-advance-places-near-me', $data); }

     public function kwcashassistance() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-assistance', $data); }

     public function kwcashbuddy500() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-buddy-500', $data); }

     public function kwcashcanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-canada', $data); }

     public function kwcashcanadacalgary() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-canada-calgary', $data); }

     public function kwcashcashing() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-cashing', $data); }

     public function kwcashcheques() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-cheques', $data); }

     public function kwcashcoloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cashco-loans', $data); }

     public function kwcashcow() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cashcow', $data); }

     public function kwcashearn() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-earn', $data); }

     public function kwcashearnmoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-earn-money', $data); }

     public function kwcashjobs() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-jobs', $data); }

     public function kwcashloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-loan', $data); }

     public function kwcashmoneyalberta() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-money-alberta', $data); }

     public function kwcashmoneykitchener() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-money-kitchener', $data); }

     public function kwcashonelogin() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cashone-login', $data); }

     public function kwcashpaidjobs() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-paid-jobs', $data); }

     public function kwcashshopnearme() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-shop-near-me', $data); }

     public function kwcashstorecanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-store-canada', $data); }

     public function kwcashwork() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cash-work', $data); }

     public function kwcerbpaydayloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cerb-payday-loans', $data); }

     public function kwcerbpaydayloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.cerb-payday-loans-canada', $data); }

     public function kwcheckyourcredit() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.check-your-credit', $data); }

     public function kwchildtaxbenefitloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.child-tax-benefit-loans', $data); }

     public function kwchildtaxloansbc() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.child-tax-loans-bc', $data); }

     public function kwchildtaxloansontario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.child-tax-loans-ontario', $data); }

     public function kwclosestpawnshops() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.closest-pawnshops', $data); }

     public function kwcreditcardapproval() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.credit-card-approval', $data); }

     public function kwcreditfast() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.credit-fast', $data); }

     public function kwcreditfinance() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.credit-finance', $data); }

     public function kwcreditloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.credit-loans', $data); }

     public function kwcredito() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.credito', $data); }

     public function kwcreditvalue() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.credit-value', $data); }

     public function kwearncashnow() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.earn-cash-now', $data); }

     public function kwearnextracash() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.earn-extra-cash', $data); }

     public function kweasyonlineloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.easy-online-loans-canada', $data); }

     public function kweasypaydayloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.easy-payday-loans-canada', $data); }

     public function kweiloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.ei-loans', $data); }

     public function kwemergencyfinancialassistance() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.emergency-financial-assistance', $data); }

     public function kwemergencyhelpwithbills() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.emergency-help-with-bills', $data); }

     public function kwemergencyloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.emergency-loans', $data); }

     public function kwemergencyloansforbadcredit() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.emergency-loans-for-bad-credit', $data); }

     public function kwemergencyrentassistanceontario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.emergency-rent-assistance-ontario', $data); }

     public function kwetransferloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-loans', $data); }

     public function kwetransferloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-loans-canada', $data); }

     public function kwetransferpaydayloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-payday-loan', $data); }

     public function kwetransferpaydayloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-payday-loans-canada', $data); }

     public function kwetransferpaydayloansCanada247() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-payday-loans-Canada-247', $data); }

     public function kwetransferpaydayloanscanada247childtax() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-payday-loans-canada-24-7-child-tax', $data); }

     public function kwetransferpaydayloanscanadanocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-payday-loans-canada-no-credit-check', $data); }

     public function kwetransferpaydayloansmanitoba() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-payday-loans-manitoba', $data); }

     public function kwetransferpaydayloansontario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.e-transfer-payday-loans-ontario', $data); }

     public function kwfastloansonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.fast-loans-online', $data); }

     public function kwfastpaydayloansonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.fast-payday-loans-online', $data); }

     public function kwfinancialhelpforsinglemums() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.financial-help-for-single-mums', $data); }

     public function kwfinancialloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.financial-loans-canada', $data); }

     public function kwfinancingfunding() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.financing-funding', $data); }

     public function kwfindaloanonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.find-a-loan-online', $data); }

     public function kwflexiloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.flexiloans', $data); }

     public function kwfunding() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.funding', $data); }

     public function kwgetcashfast() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-cash-fast', $data); }

     public function kwgetfinancialhelp() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-financial-help', $data); }

     public function kwgetgrantmoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-grant-money', $data); }

     public function kwgetmemoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-me-money', $data); }

     public function kwgetmoneyfrom() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-money-from', $data); }

     public function kwgetpaidcashjobs() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-paid-cash-jobs', $data); }

     public function kwgetpaidfor() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-paid-for', $data); }

     public function kwgetpaidto() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-paid-to', $data); }

     public function kwgetpaidtoday() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.get-paid-today', $data); }

     public function kwgoday() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.go-day', $data); }

     public function kwguaranteedpaydayloansnomatterwhatcanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.guaranteed-payday-loans-no-matter-what-canada', $data); }

     public function kwhelpforhomeless() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.help-for-homeless', $data); }

     public function kwhelpwithmoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.help-with-money', $data); }

     public function kwhelpwithpayingbills() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.help-with-paying-bills', $data); }

     public function kwhousingassist() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.housing-assist', $data); }

     public function kwhowcanimakemoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.how-can-i-make-money', $data); }

     public function kwhowgetmoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.how-get-money', $data); }

     public function kwhowyougetmoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.how-you-get-money', $data); }

     public function kwicashlogin() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.icash-login', $data); }

     public function kwincomemoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.income-money', $data); }

     public function kwincomesupportedmonton() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.income-support-edmonton', $data); }

     public function kwineedafinancialhelp() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.i-need-a-financial-help', $data); }

     public function kwineedemergencymoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.i-need-emergency-money', $data); }

     public function kwineedhelpwithmoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.i-need-help-with-money', $data); }

     public function kwineedmoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.i-need-money', $data); }

     public function kwinstaloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instaloans', $data); }

     public function kwinstantetransferloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-e-transfer-loans', $data); }

     public function kwinstantloannorefusal() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-loan-no-refusal', $data); }

     public function kwinstantloanonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-loan-online', $data); }

     public function kwinstantloantoday() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-loan-today', $data); }

     public function kwinstantonlineloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-online-loans', $data); }

     public function kwinstantpaydayloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-payday-loan', $data); }

     public function kwinstantpaydayloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-payday-loans-canada', $data); }

     public function kwinstantshorttermloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-short-term-loan', $data); }

     public function kwinstantwiretransferpaydayloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.instant-wire-transfer-payday-loans', $data); }

     public function kwlenddirect() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.lenddirect', $data); }

     public function kwloanapply() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loan-apply', $data); }

     public function kwloancompany() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loan-company', $data); }

     public function kwloanexpress() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loan-express', $data); }

     public function kwloanmoneyonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loan-money-online', $data); }

     public function kwloannear() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loan-near', $data); }

     public function kwloanperson() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loan-person', $data); }

     public function kwloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-canada', $data); }

     public function kwloanscanada2() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loanscanada', $data); }

     public function kwloansedmonton() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-edmonton', $data); }

     public function kwloansforbadcreditcanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-for-bad-credit-canada', $data); }

     public function kwloansforpeoplewithpoorcredit() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-for-people-with-poor-credit', $data); }

     public function kwloansforunemployed() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-for-unemployed', $data); }

     public function kwloanshark() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loan-shark', $data); }

     public function kwloansin1hournocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-in-1-hour-no-credit-check', $data); }

     public function kwloansnearme() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-near-me', $data); }

     public function kwloansnocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-no-credit-check', $data); }

     public function kwloansthatacceptchildtax() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-that-accept-child-tax', $data); }

     public function kwloansthatacceptchildtaxontario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-that-accept-child-tax-ontario', $data); }

     public function kwloansthatacceptdisability() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-that-accept-disability', $data); }

     public function kwloanswithchildtax() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loans-with-child-tax', $data); }

     public function kwloanwith() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.loan-with', $data); }

     public function kwlowincomealberta() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.low-income-alberta', $data); }

     public function kwlowincomerent() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.low-income-rent', $data); }

     public function kwmakemoneymoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.make-money-money', $data); }

     public function kwmakequickcash() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.make-quick-cash', $data); }

     public function kwmoneyinternet() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.money-internet', $data); }

     public function kwmoneymoneymoneymoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.money-money-money-money', $data); }

     public function kwmoneyontheinternet() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.money-on-the-internet', $data); }

     public function kwmoneysupport() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.money-support', $data); }

     public function kwmoneytreeinc() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.moneytreeinc', $data); }

     public function kwmoneytreelending() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.money-tree-lending', $data); }

     public function kwmycashcow() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.my-cash-cow', $data); }

     public function kwmynextpay() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.my-next-pay', $data); }

     public function kwmynextpay2() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.mynextpay', $data); }

     public function kwncrloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.ncr-loans', $data); }

     public function kwneedcashnownocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.need-cash-now-no-credit-check', $data); }

     public function kwneedloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.need-loan', $data); }

     public function kwneedmoneynow() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.need-money-now', $data); }

     public function kwneedmoneytoday() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.need-money-today', $data); }

     public function kwnobankverificationloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.no-bank-verification-loans', $data); }

     public function kwnojobloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.no-job-loans', $data); }

     public function kwodsppaydayloansnocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.odsp-payday-loans-no-credit-check', $data); }

     public function kwonlineincome() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-income', $data); }

     public function kwonlinelenders() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-lenders', $data); }

     public function kwonlineloanalberta() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-loan-alberta', $data); }

     public function kwonlineloanapplication() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-loan-application', $data); }

     public function kwonlineloanschildtax() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-loans-child-tax', $data); }

     public function kwonlineloanssaskatchewan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-loans-saskatchewan', $data); }

     public function kwonlinepaydayloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-pay-day-loan', $data); }

     public function kwonlinepaydayloan2() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-payday-loan', $data); }

     public function kwonlinepaydayloansalberta() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-payday-loans-alberta', $data); }

     public function kwonlinepaydayloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-payday-loans-canada', $data); }

     public function kwonlinepaydayloansinstantapproval() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.online-payday-loans-instant-approval', $data); }

     public function kwpayadvance() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.pay-advance', $data); }

     public function kwpaydayking() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-king', $data); }

     public function kwpaydayking500() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-king-500', $data); }

     public function kwpaydaykingphonenumber() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-king-phone-number', $data); }

     public function kwpaydaykingreviews() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-king-reviews', $data); }

     public function kwpaydayloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.pay-day-loan', $data); }

     public function kwpaydayloanmanitoba() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loan-manitoba', $data); }

     public function kwpaydayloanontario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loan-ontario', $data); }

     public function kwPaydayLoansBrantfordOntario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.Payday-Loans-Brantford-Ontario', $data); }

     public function kwpaydayloanscalgary() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-calgary', $data); }

     public function kwPaydayLoansHamiltonOntario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.Payday-Loans-Hamilton-Ontario', $data); }

     public function kwPaydayLoansKitchenerOntario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.Payday-Loans-Kitchener-Ontario', $data); }

     public function kwpaydayloansnearme() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-near-me', $data); }

     public function kwpaydayloansnearmenocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-near-me-no-credit-check', $data); }

     public function kwpaydayloansnocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-no-credit-check', $data); }

     public function kwpaydayloansontario() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.pay-day-loans-ontario', $data); }

     public function kwpaydayloansottawa() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-ottawa', $data); }

     public function kwPaydayLoansPrinceGeorge() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.Payday-Loans-Prince-George', $data); }

     public function kwpaydayloanssaskatchewan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-saskatchewan', $data); }

     public function kwpaydayloanssaskatoon() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-saskatoon', $data); }

     public function kwpaydayloansthatacceptdisability() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-that-accept-disability', $data); }

     public function kwpaydayloanswinnipeg() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-winnipeg', $data); }

     public function kwpaydayloanswithgovernmentbenefits() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-with-government-benefits', $data); }

     public function kwpaydayloanswithnocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.payday-loans-with-no-credit-check', $data); }

     public function kwpersonalloansnearmenocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.personal-loans-near-me-no-credit-check', $data); }

     public function kwpersonalloansnocreditcheck() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.personal-loans-no-credit-check', $data); }

     public function kwplanetloaninc() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.planet-loan-inc', $data); }

     public function kwprestocash() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.prestocash', $data); }

     public function kwpretdargentmauvaiscredit() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.pret-d-argent-mauvais-credit', $data); }

     public function kwprivatepersonalloannearme() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.private-personal-loan-near-me', $data); }

     public function kwprogramsthatwillhelppayrent() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.programs-that-will-help-pay-rent', $data); }

     public function kwquickcashloanswithnobankaccount() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.quick-cash-loans-with-no-bank-account', $data); }

     public function kwquickcashnow() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.quick-cash-now', $data); }

     public function kwquickcashonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.quick-cash-online', $data); }

     public function kwquickemergencyloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.quick-emergency-loans', $data); }

     public function kwquickloansbadcredit() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.quick-loans-bad-credit', $data); }

     public function kwquickmoneynow() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.quick-money-now', $data); }

     public function kwquickpaydayloansonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.quick-payday-loans-online', $data); }

     public function kwrapidfunds() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.rapid-funds', $data); }

     public function kwsamedaypaydayloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.same-day-payday-loans', $data); }

     public function kwsamedaypersonalloansnearme() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.same-day-personal-loans-near-me', $data); }

     public function kwsendcash() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.send-cash', $data); }

     public function kwshorttermloansonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.short-term-loans-online', $data); }

     public function kwsloan() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.s-loan', $data); }

     public function kwsmallpaydayloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.small-payday-loans', $data); }

     public function kwsmallpaydayloanscanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.small-payday-loans-canada', $data); }

     public function kwsupporticashca() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.support-icash-ca', $data); }

     public function kwtogainmoney() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.to-gain-money', $data); }

     public function kwtomakemoneyonline() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.to-make-money-online', $data); }

     public function kwunemployedneedmoneytoday() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.unemployed-need-money-today', $data); }

     public function kwunemploymentloanswithnojobverificationcanada() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.unemployment-loans-with-no-job-verification-canada', $data); }

     public function kwweekendloans() { $track = $this->tracker();
        $data = ["bannerbg" => "land/1.jpg", "headpg" => "Payday Loan Online", "headtxtcolor" => "white", "headalt" => "Payday Loan Online"];
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::addKeyword('');
        return view('keywords2.weekend-loans', $data); }


}
