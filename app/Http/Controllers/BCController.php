<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\SEOMeta;

use App\Http\Controllers\Controller;


class BCController extends Controller
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

     public function linkpartners() {
       $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Mega Cash Bucks Link Partners", "headtxtcolor" => "white", "headalt" => "payday loans bc"];
       SEOMeta::setTitle('');
       SEOMeta::setDescription('');
       SEOMeta::addKeyword('');
       return view('link-partners', $data); }

     public function onemilehouse() {
       $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans 100 Mile House British Columbia"];
       SEOMeta::setTitle('Payday Loans 100 Mile House British Columbia');
       SEOMeta::setDescription('100 Mile House British Columbia Getting a fast cash loan, you need from Mega Cash Bucks is a better way to borrow.');
       SEOMeta::addKeyword('payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday');
       return view('payday-loans-100-mile-house', $data); }

    public function abbotsford() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Instant Payday Loans in Abbotsford British Columbia", "headtxtcolor" => "white", "headalt" => "Payday Loans Abbotsford British Columbia"];
      SEOMeta::setTitle('Payday Loans Abbotsford British Columbia');
      SEOMeta::setDescription('Abbotsford British Columbia Once approved by Mega Cash Bucks, your money is instantly sent to your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Abbotsford British Columbia');
      return view('payday-loans-abbotsford', $data); }

    public function aldergrove() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Aldergrove bc"];
      SEOMeta::setTitle('Payday Loans aldergrove, British Columbia');
      SEOMeta::setDescription('Aldergrove British Columbia. With Mega Cash Bucks, there’s no hidden fees.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Aldergrove British Columbia');
      return view('payday-loans-aldergrove', $data); }

    public function aldergroveeast() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loansAldergrove East  bc"];
      SEOMeta::setTitle('Payday Loans aldergrove East, British Columbia');
      SEOMeta::setDescription('Aldergrove East British Columbia. With Mega Cash Bucks, you are a smart and informed borrower.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Aldergrove East British Columbia');
      return view('payday-loans-aldergrove-east', $data); }

    public function armstrong() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Armstrong bc"];
      SEOMeta::setTitle('Payday Loans Armstrong, British Columbia');
      SEOMeta::setDescription('Armstrong British Columbia. With Mega Cash Bucks, the entire lending process is automated and provides you with an answer at the end.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Armstong British Columbia');
      return view('payday-loans-armstrong', $data); }

    public function ashcroft() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Ashcroft bc"];
      SEOMeta::setTitle('Payday Loans Ashcroft, British Columbia');
      SEOMeta::setDescription('Ashcroft British Columbia. With Mega Cash Bucks, Getting a loan has never been easier – or faster.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Ashcroft British Columbia');
      return view('payday-loans-ashcroft', $data); }

    public function blindbay() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Blind Bay bc"];
      SEOMeta::setTitle('Payday Loans Blind Bay, British Columbia');
      SEOMeta::setDescription('Blind Bay British Columbia. With Mega Cash Bucks, There’s no fuss in the process. You’ll be immediately informed if you qualify.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Blind Bay British Columbia');return view('payday-loans-blind-bay', $data); }

    public function burnslake() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Burns Lake bc"];
      SEOMeta::setTitle('Payday Loans Burns Lake, British Columbia');
      SEOMeta::setDescription('Burns Lake British Columbia. With Mega Cash Bucks, any time, day or night, your loan will be e-transferred to you in just 5 minutes!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Burns Lake British Columbia');
      return view('payday-loans-burns-lake', $data); }

    public function campbellriver() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Campbell River bc"];
      SEOMeta::setTitle('Payday Loans Campbell River, British Columbia');
      SEOMeta::setDescription('Campbell River British Columbia. With Mega Cash Bucks, getting the fast cash loan you need is a better way to borrow because theres no paperwork');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Campbell River British Columbia');
      return view('payday-loans-campbell-river', $data); }

    public function canoe() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Canoe bc"];
      SEOMeta::setTitle('Payday Loans Canoe, British Columbia');
      SEOMeta::setDescription('Canoe British Columbia. With Mega Cash Bucks, getting the fast cash loan you need is a better way to borrow because theres no paperwork');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia, e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Canoe, British Columbia');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Canoe British Columbia');
      return view('payday-loans-canoe', $data); }

    public function castlegar() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Castlegar bc"];
      SEOMeta::setTitle('Payday Loans Castlegar, British Columbia');
      SEOMeta::setDescription('Castlegar British Columbia. With Mega Cash Bucks, the entire lending process is automated');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Castlegar British Columbia');
      return view('payday-loans-castlegar', $data); }

    public function cedar() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Cedar, bc"];
      SEOMeta::setTitle('Payday Loans Cedar, British Columbia');
      SEOMeta::setDescription('Cedar British Columbia. With Mega Cash Bucks, Once approved, your money is instantly sent to your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Cedar British Columbia');
      return view('payday-loans-cedar', $data); }

    public function chase() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Case bc"];
      SEOMeta::setTitle('Payday Loans Chase, British Columbia');
      SEOMeta::setDescription('Chase British Columbia. With Mega Cash Bucks, there’s no hidden fees.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Chase British Columbia');
      return view('payday-loans-chase', $data); }

    public function chemainus() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Chemainus bc"];
      SEOMeta::setTitle('Payday Loans Chemainus, British Columbia');
      SEOMeta::setDescription('Chemainus British Columbia. With Mega Cash Bucks, we help you be a smart, informed borrower.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia, e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Chemainus British Columbia');
      return view('payday-loans-chemainus', $data); }

    public function chilliwack() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Chilliwack bc"];
      SEOMeta::setTitle('Payday Loans Chilliwack, British Columbia');
      SEOMeta::setDescription('Chilliwack British Columbia. With Mega Cash Bucks, Protecting your security and privacy is absolutely essential.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Chilliwack British Columbia');
      return view('payday-loans-chilliwack', $data); }

    public function cobblehill() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Cobble Hill bc"];
      SEOMeta::setTitle('Payday Loans Cobble Hill, British Columbia');
      SEOMeta::setDescription('Cobble Hill British Columbia. At Mega Cash Bucks, we use the industry’s state-of-the-art encryption technology and security protocols.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Cobble Hill British Columbia');
      return view('payday-loans-cobble-hill', $data); }

    public function courtenay() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans courtenay bc"];
      SEOMeta::setTitle('Payday Loans Courtenay, British Columbia');
      SEOMeta::setDescription('Courtenay British Columbia. At Mega Cash Bucks, All our online transactions are fully protected.');
      SEOMeta::addKeyword('Cobble Hill British Columbia. At Mega Cash Bucks, we use the industry’s state-of-the-art encryption technology and security protocols.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Courtenay British Columbia');
      return view('payday-loans-courtenay', $data); }

    public function cowichanbay() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Cowichan Bay bc"];
      SEOMeta::setTitle('Payday Loans Cowichan Bay, British Columbia');
      SEOMeta::setDescription('Cowichan Bay British Columbia. At Mega Cash Bucks, we provide you the peace of mind that you require and deserve.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, cowichan bay British Columbia');
      return view('payday-loans-cowichan-bay', $data); }

    public function cranbrook() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Cranbrook bc"];
      SEOMeta::setTitle('Payday Loans Cranbrook, British Columbia');
      SEOMeta::setDescription('Cranbrook British Columbia. At Mega Cash Bucks, getting a loan has never been easier – or faster.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, cranbook British Columbia');
      return view('payday-loans-cranbrook', $data); }

    public function creston() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Creston bc"];
      SEOMeta::setTitle('Payday Loans Creston, British Columbia');
      SEOMeta::setDescription('Creston British Columbia. At Mega Cash Bucks, just choose your loan amount and repayment plan.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Creston British Columbia');
      return view('payday-loans-creston', $data); }

    public function crofton() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Crofton bc"];
      SEOMeta::setTitle('Payday Loans Creston, British Columbia');
      SEOMeta::setDescription('Crofton British Columbia. With Mega Cash Bucks, you’ll be immediately informed if you qualify.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Crofton British Columbia');
      return view('payday-loans-crofton', $data); }

    public function cultuslake() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans cultus lake bc"];
      SEOMeta::setTitle('Payday Loans Cultus Lake, British Columbia');
      SEOMeta::setDescription('Cultus Lake British Columbia. With Mega Cash Bucks, Any time, day or night, your loan will be e-transferred to you in just 5 minutes!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Cultus Lake British Columbia');
      return view('payday-loans-cultus-lake', $data); }

    public function cumberland() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Cumberland bc"];
      SEOMeta::setTitle('Payday Loans Cumberland, British Columbia');
      SEOMeta::setDescription('Cumberland Lake British Columbia. With Mega Cash Bucks, Getting the fast cash loan you need is a better way to borrow because theres no paperwork.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, cumberland British Columbia');
      return view('payday-loans-cumberland', $data); }

    public function dallas() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Dallas bc"];
      SEOMeta::setTitle('Payday Loans Dallas, British Columbia');
      SEOMeta::setDescription('Dallas British Columbia. With Mega Cash Bucks, Once approved, your money is instantly sent to your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Dallas British Columbia');
      return view('payday-loans-dallas', $data); }

    public function dawsoncreek() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Dawson Creek bc"];
      SEOMeta::setTitle('Payday Loans Dawson Creek, British Columbia');
      SEOMeta::setDescription('Dawson Creek British Columbia. With Mega Cash Bucks, Our agreements are clear. There’s no hidden fees.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Dawson Creek British Columbia');
      return view('payday-loans-dawson-creek', $data); }

    public function ducklake() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Duck Lake bc"];
      SEOMeta::setTitle('Payday Loans Duck Lake, British Columbia');
      SEOMeta::setDescription('Duck Lake British Columbia. With Mega Cash Bucks, Our tools help you assess the full costs of any borrowing decision that you make.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Duck lake British Columbia');
      return view('payday-loans-duck-lake', $data); }

    public function duncan() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Duncan bc"];
      SEOMeta::setTitle('Payday Loans Duncan, British Columbia');
      SEOMeta::setDescription('Duncan British Columbia. At Mega Cash Bucks, We help you be a smart and informed borrower.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Duncan British Columbia');
      return view('payday-loans-duncan', $data); }

    public function elkford() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans elkford bc"];
      SEOMeta::setTitle('Payday Loans Elkford, British Columbia');
      SEOMeta::setDescription('Elkford British Columbia. At Mega Cash Bucks, protecting your security and privacy is absolutely essential to us.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Elkford British Columbia');
      return view('payday-loans-elkford', $data); }

    public function enderby() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans enderby bc"];
      SEOMeta::setTitle('Payday Loans enderby, British Columbia');
      SEOMeta::setDescription('Enderby British Columbia. At Mega Cash Bucks, we use the industry’s state-of-the-art encryption technology and security protocols.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Enderby British Columbia');
      return view('payday-loans-enderby', $data); }

    public function fairwinds() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans fairwinds bc"];
      SEOMeta::setTitle('Payday Loans fairwinds, British Columbia');
      SEOMeta::setDescription('Fairwinds British Columbia. At Mega Cash Bucks, All our online transactions are fully protected to provide you the peace of mind that you require and deserve.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Fairwinds British Columbia');
      return view('payday-loans-fairwinds', $data); }

    public function fernie() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Fernie bc"];
      SEOMeta::setTitle('Payday Loans fernie, British Columbia');
      SEOMeta::setDescription('Fernie British Columbia. At Mega Cash Bucks, getting a loan has never been easier – or faster.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Fernie British Columbia');
      return view('payday-loans-fernie', $data); }

    public function fortnelson() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Fort Nelson bc"];
      SEOMeta::setTitle('Payday Loans Fort Nelson, British Columbia');
      SEOMeta::setDescription('Fort Nelson, British Columbia. With Mega Cash Bucks, just choose your loan amount and repayment plan, then you’re good to go.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Fort Nelson British Columbia');
      return view('payday-loans-fort-nelson', $data); }

    public function fortstjames() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Fort St. James bc"];
      SEOMeta::setTitle('Payday Loans Fort St. James, British Columbia');
      SEOMeta::setDescription('Fort St. James, British Columbia. With Mega Cash Bucks,You’ll be immediately informed if you qualify.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Fort St. James British Columbia');
      return view('payday-loans-fort-st-james', $data); }

    public function fortstjohn() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Fort St. John bc"];
      SEOMeta::setTitle('Payday Loans Fort St. John, British Columbia');
      SEOMeta::setDescription('Fort St. John, British Columbia. With Mega Cash Bucks, Any time, day or night, your loan will be e-transferred to you in just 5 minutes!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Fort St. John British Columbia');
      return view('payday-loans-fort-st-john', $data); }



    public function gibsons() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Gibsons bc"];
      SEOMeta::setTitle('Payday Loans Gibsons, British Columbia');
      SEOMeta::setDescription('Gibsons, British Columbia. With Mega Cash Bucks, getting the fast cash loan, you need is a better way to borrow because theres no paperwork.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Gibsons British Columbia');
      return view('payday-loans-gibsons', $data); }

    public function golden() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Golden bc"];
      SEOMeta::setTitle('Payday Loans Golden, British Columbia');
      SEOMeta::setDescription('Golden, British Columbia. With Mega Cash Bucks, Once approved, your money is instantly sent to your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Golden British Columbia');
      return view('payday-loans-golden', $data); }

    public function grandforks() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Grand Forks bc"];
      SEOMeta::setTitle('Payday Loans Grand Forks, British Columbia');
      SEOMeta::setDescription('Grand Forks, British Columbia. At Mega Cash Bucks, We know that you want to be in control of your lending experience.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Grand Forks British Columbia');
      return view('payday-loans-grand-forks', $data); }

    public function harrisonhotsprings() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans harrison hot springs bc"];
      SEOMeta::setTitle('Payday Loans Harrison Hot Springs, British Columbia');
      SEOMeta::setDescription('Harrison Hot Springs, British Columbia. At Mega Cash Bucks, Our easy to use tools help you assess the full costs of any borrowing decision that you make.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Harrison Hot Springs British Columbia');
      return view('payday-loans-harrison-hot-springs', $data); }

    public function hope() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Hope bc"];
      SEOMeta::setTitle('Payday Loans Hope, British Columbia');
      SEOMeta::setDescription('Hope, British Columbia. At Mega Cash Bucks, we help you be a smart and informed borrower.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Hope British Columbia');
      return view('payday-loans-hope', $data); }

    public function houston() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Houston bc"];
      SEOMeta::setTitle('Payday Loans Houston, British Columbia');
      SEOMeta::setDescription('Houston, British Columbia. At Mega Cash Bucks, protecting your security and privacy is absolutely essential to us.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Houston British Columbia');
      return view('payday-loans-houston', $data); }

    public function invermere() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Invermere bc"];
      SEOMeta::setTitle('Payday Loans Invermere, British Columbia');
      SEOMeta::setDescription('Invermere, British Columbia. At Mega Cash Bucks, we use the industry’s state-of-the-art encryption technology and security.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Invermere British Columbia');
      return view('payday-loans-invermere', $data); }

    public function kamloops() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Kamloops bc"];
      SEOMeta::setTitle('Payday Loans Kamloops, British Columbia');
      SEOMeta::setDescription('Kamloops, British Columbia. At Mega Cash Bucks, all our online transactions are fully protected to provide you the peace of mind that you require and deserve.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Kamloops British Columbia');
      return view('payday-loans-kamloops', $data); }

    public function kelowna() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Kelowna bc"];
      SEOMeta::setTitle('Payday Loans Kelowna, British Columbia');
      SEOMeta::setDescription('Kelowna, British Columbia. At Mega Cash Bucks, getting a loan has never been easier – or faster. ');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Kelowna British Columbia');
      return view('payday-loans-kelowna', $data); }

    public function kent() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Kent bc"];
      SEOMeta::setTitle('Payday Loans Kent, British Columbia');
      SEOMeta::setDescription('Kent, British Columbia. With Mega Cash Bucks just choose your loan amount and repayment plan.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Kent British Columbia');
      return view('payday-loans-kent', $data); }

    public function keremeos() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Keremoeos bc"];
      SEOMeta::setTitle('Payday Loans Keremeos, British Columbia');
      SEOMeta::setDescription('Keremeos, British Columbia. With Mega Cash Bucks you’ll be immediately informed if you qualify. ');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Keremeos British Columbia');
      return view('payday-loans-keremeos', $data); }

    public function kimberley() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Kimberley bc"];
      SEOMeta::setTitle('Payday Loans Kimberley, British Columbia');
      SEOMeta::setDescription('Kimberley, British Columbia. With Mega Cash Bucks, any time, day or night, your loan will be e-transferred to you in just 5 minutes!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Kimberley British Columbia');
      return view('payday-loans-kimberley', $data); }

    public function kitimat() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Kitimat bc"];
      SEOMeta::setTitle('Payday Loans Kitimat, British Columbia');
      SEOMeta::setDescription('Kitimat, British Columbia. With Mega Cash Bucks, you can apply for this loan from the comfort of your couch.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Kitimat British Columbia');
      return view('payday-loans-kitimat', $data); }

    public function ladner() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans ladner bc"];
      SEOMeta::setTitle('Payday Loans Ladner, British Columbia');
      SEOMeta::setDescription('Ladner, British Columbia. At Mega Cash Bucks, our advanced assessment tools instantly determine your eligibility.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Ladner British Columbia');
      return view('payday-loans-ladner', $data); }

    public function ladysmith() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Ladysmith bc"];
      SEOMeta::setTitle('Payday Loans Ladysmith, British Columbia');
      SEOMeta::setDescription('Ladysmith, British Columbia. At Mega Cash Bucks, just sign your electronic agreement and watch out for your money.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Ladysmith British Columbia');
      return view('payday-loans-ladysmith', $data); }

    public function lakecowichan() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans lake cowichan bc"];
      SEOMeta::setTitle('Payday Loans Lake Cowichan, British Columbia');
      SEOMeta::setDescription('Lake Cowichan, British Columbia. At Mega Cash Bucks, in just 5 minutes our e-transfer will have the funds in your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Lake Cowichan British Columbia');
      return view('payday-loans-lake-cowichan', $data); }

    public function lillooet() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans lillooet bc"];
      SEOMeta::setTitle('Payday Loans Lillooet, British Columbia');
      SEOMeta::setDescription('Lillooet, British Columbia. At Mega Cash Bucks, we automatically debit your bank account for your payment. No fuss.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Lillooet British Columbia');
      return view('payday-loans-lillooet', $data); }

    public function lionsbay() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Lions Bay bc"];
      SEOMeta::setTitle('Payday Loans Lions Bay, British Columbia');
      SEOMeta::setDescription('Lions Bay, British Columbia. At Mega Cash Bucks we make it easy. With either a simple cash advance or more flexible payment plan.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Lions Bay British Columbia');
      return view('payday-loans-lions-bay', $data); }

    public function loganlake() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Logan Lake bc"];
      SEOMeta::setTitle('Payday Loans Logan Lake, British Columbia');
      SEOMeta::setDescription('Logan Lake, British Columbia. Getting the fast cash loan you need from Mega Cash Bucks is a better way to borrow, because theres no paperwork.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Logan Lake British Columbia');
      return view('payday-loans-logan-lake', $data); }

    public function lumby() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Lumby bc"];
      SEOMeta::setTitle('Payday Loans Lumby, British Columbia');
      SEOMeta::setDescription('Lumby, British Columbia. At Mega Cash Bucks, once approved your money is instantly sent to your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Lumby British Columbia');
      return view('payday-loans-lumby', $data); }

    public function mackenzie() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Mackenzie bc"];
      SEOMeta::setTitle('Payday Loans Mackenzie, British Columbia');
      SEOMeta::setDescription('Mackenzie, British Columbia. At Mega Cash Bucks there’s no hidden fees.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Mackenzie British Columbia');
      return view('payday-loans-mackenzie', $data); }

    public function merritt() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Merritt bc"];
      SEOMeta::setTitle('Payday Loans Merritt, British Columbia');
      SEOMeta::setDescription('Merritt British Columbia. At Mega Cash Bucks, our easy to use tools help you assess the full costs of any borrowing decision that you make.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Merritt British Columbia');
      return view('payday-loans-merritt', $data); }

      public function MillBay() {
        $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Mill Bay bc"];
        SEOMeta::setTitle('Payday Loans Mill Bay, British Columbia');
        SEOMeta::setDescription('Mill Bay British Columbia. At Mega Cash Bucks, our easy to use tools help you assess the full costs of any borrowing decision that you make.');
        SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Mill Bay British Columbia');
        return view('payday-loans-mill-bay', $data); }

      public function millerslanding() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Millers Landing bc"];
      SEOMeta::setTitle('Payday Loans Millers Landing, British Columbia');
      SEOMeta::setDescription('Millers Landing British Columbia. At Mega Cash Bucks, we help you be a smart and informed borrower.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Millers Landing British Columbia');
      return view('payday-loans-millers-landing', $data); }

    public function mission() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Mission bc"];
      SEOMeta::setTitle('Payday Loans Mission, British Columbia');
      SEOMeta::setDescription('Mission British Columbia. At Mega Cash Bucks, protecting your security and privacy is absolutely essential to us.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Mission British Columbia');
      return view('payday-loans-mission', $data); }

    public function nakusp() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans nakusp bc"];
      SEOMeta::setTitle('Payday Loans Nakusp, British Columbia');
      SEOMeta::setDescription('Nakusp British Columbia. At Mega Cash Bucks we use the industry’s state-of-the-art encryption technology and security.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Nakusp British Columbia');
      return view('payday-loans-nakusp', $data); }

    public function nanaimo() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans nanaimo bc"];
      SEOMeta::setTitle('Payday Loans Nanaimo, British Columbia');
      SEOMeta::setDescription('Nanaimo British Columbia. At Mega Cash Bucks All our online transactions are fully protected to provide you the peace of mind that you require and deserve.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Nanaimo British Columbia');
      return view('payday-loans-nanaimo', $data); }

    public function naramata() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Naramata bc"];
      SEOMeta::setTitle('Payday Loans Naramata, British Columbia');
      SEOMeta::setDescription('Naramata British Columbia. With Mega Cash Bucks, you can pay back your loan on your next payday in a single installment.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Naramata British Columbia');
      return view('payday-loans-naramata', $data); }

    public function nelson() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans nelson bc"];
      SEOMeta::setTitle('Payday Loans Nelson, British Columbia');
      SEOMeta::setDescription('Nelson British Columbia. With Mega Cash Bucks, you have more time to repay, with no extra fees or interest charges.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Nelson British Columbia');
      return view('payday-loans-nelson', $data); }

    public function okanaganfalls() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Okanagan Falls bc"];
      SEOMeta::setTitle('Payday Loans Okanagan Falls, British Columbia');
      SEOMeta::setDescription('Okanagan Falls British Columbia. With Mega Cash Bucks, you can get 1, 2, or 3 payment installments all for the same interest charge!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Okanagan Falls British Columbia');
      return view('payday-loans-okanagan-falls', $data); }

    public function oliver() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Oliver bc"];
      SEOMeta::setTitle('Payday Loans Oliver, British Columbia');
      SEOMeta::setDescription('Oliver British Columbia. With Mega Cash Bucks, You can apply for this loan from the comfort of your couch.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Oliver British Columbia');
      return view('payday-loans-oliver', $data); }

    public function osoyoos() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Osoyoos bc"];
      SEOMeta::setTitle('Payday Loans Osoyoos, British Columbia');
      SEOMeta::setDescription('Osoyoos British Columbia. With Mega Cash Bucks, once approved, just sign your electronic agreement and watch out for your money.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Osoyoos British Columbia');
      return view('payday-loans-osoyoos', $data); }

    public function parksville() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Parksville bc"];
      SEOMeta::setTitle('Payday Loans Parksville, British Columbia');
      SEOMeta::setDescription('Parksville British Columbia. With Mega Cash Bucks, in just 5 minutes our e-transfer will have the funds in your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Parksville British Columbia');
      return view('payday-loans-parksville', $data); }

    public function peachland() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Peachland bc"];
      SEOMeta::setTitle('Payday Loans Peachland, British Columbia');
      SEOMeta::setDescription('Peachland British Columbia. Mega Cash Bucks automatically debits your bank account for your payment.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Peachland  British Columbia');
      return view('payday-loans-peachland', $data); }

    public function pemberton() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Pemberton bc"];
      SEOMeta::setTitle('Payday Loans Pemberton, British Columbia');
      SEOMeta::setDescription('Pemberton British Columbia. Mega Cash Bucks makes it easy. With either a straight cash advance or more flexible payment plan.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Pemberton  British Columbia');
      return view('payday-loans-pemberton', $data); }

    public function penticton() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Penticton bc"];
      SEOMeta::setTitle('Payday Loans Penticton, British Columbia');
      SEOMeta::setDescription('Penticton British Columbia. With Mega Cash Bucks you can repay in 1 to 62 days – depending on your pay cycle.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Pemberton  British Columbia');
      return view('payday-loans-penticton', $data); }

    public function portalberni() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Port Alberni bc"];
      SEOMeta::setTitle('Payday Loans Port Alberni, British Columbia');
      SEOMeta::setDescription('Port Alberni British Columbia. Getting the fast cash loan you need from Mega Cash Bucks is a better way to borrow because theres no paperwork');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Port Alberni British Columbia');
      return view('payday-loans-port-alberni', $data); }

    public function porthardy() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Port Hardy bc"];
      SEOMeta::setTitle('Payday Loans Port Hardy, British Columbia');
      SEOMeta::setDescription('Port Hardy British Columbia. With Mega Cash Bucks, once approved your money is instantly sent to your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Port Hardy British Columbia');
      return view('payday-loans-port-hardy', $data); }

    public function portmcneill() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Port McNeill bc"];
      SEOMeta::setTitle('Payday Loans Port McNeill, British Columbia');
      SEOMeta::setDescription('Port McNeill British Columbia. At Mega Cash Bucks, our agreements are clear. There’s no hidden fees.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Port McNeill British Columbia');
      return view('payday-loans-port-mcneill', $data); }

    public function powellriver() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Powell Riverbc"];
      SEOMeta::setTitle('Payday Loans Powell River, British Columbia');
      SEOMeta::setDescription('Powell River British Columbia. At Mega Cash Bucks, Our easy to use tools help you assess the full costs of any borrowing decision that you make.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Powell River British Columbia');
      return view('payday-loans-powell-river', $data); }

    public function princegeorge() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Prince George bc"];
      SEOMeta::setTitle('Payday Loans Prince George, British Columbia');
      SEOMeta::setDescription('Prince George British Columbia. At Mega Cash Bucks, We help you be a smart and informed borrower.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Prince George British Columbia');
      return view('payday-loans-prince-george', $data); }

    public function princerupert() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Prince Rupert bc"];
      SEOMeta::setTitle('Payday Loans Prince Rupert, British Columbia');
      SEOMeta::setDescription('Prince Rupert British Columbia. At Mega Cash Bucks, protecting your security and privacy is absolutely essential to us.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Prince Rupert British Columbia');
      return view('payday-loans-prince-rupert', $data); }

    public function princeton() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Princeton bc"];
      SEOMeta::setTitle('Payday Loans Princeton, British Columbia');
      SEOMeta::setDescription('Princeton British Columbia. At Mega Cash Bucks, we use the industry’s state-of-the-art encryption technology and security.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Princeton British Columbia');
      return view('payday-loans-princeton', $data); }

    public function puntledge() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Puntledge bc"];
      SEOMeta::setTitle('Payday Loans Puntledge, British Columbia');
      SEOMeta::setDescription('Puntledge British Columbia. At Mega Cash Bucks, all our online transactions are fully protected.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Puntledge British Columbia');
      return view('payday-loans-puntledge', $data); }

    public function quesnel() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Quesnel bc"];
      SEOMeta::setTitle('Payday Loans Quesnel, British Columbia');
      SEOMeta::setDescription('Quesnel British Columbia. With Mega Cash Bucks, getting a loan has never been easier – or faster. ');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Quesnel British Columbia');
      return view('payday-loans-quesnel', $data); }

    public function rayleigh() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Rayleigh bc"];
      SEOMeta::setTitle('Payday Loans Rayleigh, British Columbia');
      SEOMeta::setDescription('Rayleigh British Columbia. With Mega Cash Bucks just choose your loan amount and repayment plan. Then you’re good to go.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Rayleigh British Columbia');
      return view('payday-loans-rayleigh', $data); }

    public function revelstoke() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Revelstoke bc"];
      SEOMeta::setTitle('Payday Loans Revelstoke, British Columbia');
      SEOMeta::setDescription('Revelstoke British Columbia. With Mega Cash Bucks you’ll be immediately informed if you qualify.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Revelstoke British Columbia');
      return view('payday-loans-revelstoke', $data); }

    public function robertscreek() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Roberts Creek bc"];
      SEOMeta::setTitle('Payday Loans Roberts Creek, British Columbia');
      SEOMeta::setDescription('Roberts Creek British Columbia. With Mega Cash Bucks, any time, day or night, your loan will be e-transferred to you in just 5 minutes!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Roberts Creek British Columbia');
      return view('payday-loans-roberts-creek', $data); }

    public function rosedale() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Rosedale bc"];
      SEOMeta::setTitle('Payday Loans Rosedale, British Columbia');
      SEOMeta::setDescription('Rosedale British Columbia. With Mega Cash Bucks, you have a choice of 1, 2, or 3 payment installments all for the same interest charge!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Rosedale British Columbia');
      return view('payday-loans-rosedale', $data); }

    public function rossland() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Rossland bc"];
      SEOMeta::setTitle('Payday Loans Rossland, British Columbia');
      SEOMeta::setDescription('Rossland British Columbia. With Mega Cash Bucks, You can apply for your loan from the comfort of your couch.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Rossland British Columbia');
      return view('payday-loans-rossland', $data); }

    public function salmo() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Salmo bc"];
      SEOMeta::setTitle('Payday Loans Salmo, British Columbia');
      SEOMeta::setDescription('Salmo British Columbia. At Mega Cash Bucks, our advanced assessment tools instantly determine your eligibility.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Salmo British Columbia');
      return view('payday-loans-salmo', $data); }

    public function salmonarm() {
    $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Salmon Arm bc"];
      SEOMeta::setTitle('Payday Loans Salmon Arm, British Columbia');
      SEOMeta::setDescription('Salmon Arm British Columbia. At Mega Cash Bucks, In just 5 minutes our e-transfer will have the funds in your bank account');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Salmon Arm British Columbia');
      return view('payday-loans-salmon-arm', $data); }

    public function sechelt() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Sechelt bc"];
      SEOMeta::setTitle('Payday Loans Sechelt, British Columbia.');
      SEOMeta::setDescription('Sechelt British Columbia. With Mega Cash Bucks, you just sign your electronic agreement and watch out for your money');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Sechelt British Columbia');
      return view('payday-loans-sechelt', $data); }

    public function shawniganmillbay () {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Shawnigan Lake bc"];
      SEOMeta::setTitle('Payday Loans Shawnigan Lake, British Columbia.');
      SEOMeta::setDescription('Shawnigan Lake British Columbia. Mega Cash Bucks automatically debits your bank account for your payment.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Shawnigan Lake British Columbia');
      return view('payday-loans-shawnigan-mill-bay', $data); }

    public function sicamous() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Sicamous bc"];
      SEOMeta::setTitle('Payday Loans Sicamous, British Columbia.');
      SEOMeta::setDescription('Sicamous British Columbia. At Mega Cash Bucks we make it easy, either with the cash amount or a more flexible payment plan.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Sicamous British Columbia');
      return view('payday-loans-sicamous', $data); }

    public function smithers() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Smithers bc"];
      SEOMeta::setTitle('Payday Loans Smithers, British Columbia.');
      SEOMeta::setDescription('Smithers British Columbia. At Mega Cash Bucks we make it easy, your Cash advance is one repayment, while a flexible repayment plan allows for 2 or 3 installments.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Smithers British Columbia');
      return view('payday-loans-smithers', $data); }

    public function sooke() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Sooke bc"];
      SEOMeta::setTitle('Payday Loans Sooke, British Columbia.');
      SEOMeta::setDescription('Sooke British Columbia. With Mega Cash Bucks your loan allows 2 or 3 installments. The interest for each, though, is exactly the same.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Sooke British Columbia');
      return view('payday-loans-sooke', $data); }

    public function sparwood() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Sparwood bc"];
      SEOMeta::setTitle('Payday Loans Sparwood, British Columbia.');
      SEOMeta::setDescription('Sparwood British Columbia. With Mega Cash Bucks, getting the fast cash loan you need, is a better way to borrow because theres no paperwork.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Sparwood British Columbia');
      return view('payday-loans-sparwood', $data); }

    public function squamish() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Squamish bc"];
      SEOMeta::setTitle('Payday Loans Squamish British Columbia. ');
      SEOMeta::setDescription('Squamish British Columbia. With Mega Cash Bucks, the entire lending process is automated and provides you with a fast answer at the end.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Squamish British Columbia');
      return view('payday-loans-squamish', $data); }

    public function summerland() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Summerland bc"];
      SEOMeta::setTitle('Payday Loans Summerland British Columbia.');
      SEOMeta::setDescription('Summerland British Columbia. With Mega Cash Bucks, once approved, your money is instantly sent to your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Summerland British Columbia');
      return view('payday-loans-summerland', $data); }

    public function telkwa() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Telkwa bc"];
      SEOMeta::setTitle('Payday Loans Telkwa British Columbia.');
      SEOMeta::setDescription('Telkwa British Columbia. At Mega Cash Bucks, our agreements are clear and there’s no hidden fees.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Telkwa British Columbia');
      return view('payday-loans-telkwa', $data); }

    public function terrace() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Terrace bc"];
      SEOMeta::setTitle('Payday Loans Terrace British Columbia.');
      SEOMeta::setDescription('Terrace British Columbia. At Mega Cash Bucks, our easy-to-use tools help you assess the full costs of any borrowing decision that you make.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Terrace British Columbia');
      return view('payday-loans-terrace', $data); }

    public function trailfruitvale() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Trail bc"];
      SEOMeta::setTitle('Payday Loans Trail British Columbia.');
      SEOMeta::setDescription('Trail British Columbia.At Mega Cash Bucks, protecting your security and privacy is absolutely essential to us.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Trail British Columbia');
      return view('payday-loans-trail-fruitvale', $data); }

    public function tsawwassen() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Tsawwassen bc"];
      SEOMeta::setTitle('Payday Loans Tsawwassen British Columbia.');
      SEOMeta::setDescription('Tsawwassen British Columbia. At Mega Cash Bucks, we use the industry’s state-of-the-art encryption technology and security.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Tsawwassen British Columbia');
      return view('payday-loans-tsawwassen', $data); }

    public function tumblerridge() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Tumbler Ridge bc"];
      SEOMeta::setTitle('Payday Loans Tumbler Ridge British Columbia.');
      SEOMeta::setDescription('Tumbler Ridge British Columbia. At Mega Cash Bucks, All your online transactions are fully protected.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Tumbler Ridge British Columbia');
      return view('payday-loans-tumbler-ridge', $data); }

    public function ucluelet() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Ucluelet bc"];
      SEOMeta::setTitle('Payday Loans Ucluelet British Columbia.');
      SEOMeta::setDescription('Ucluelet British Columbia. At Mega Cash Bucks, you can pay back your loan on your next payday in a single installment.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Ucluelet British Columbia');
      return view('payday-loans-ucluelet', $data); }

    public function vancouver() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Vancouver bc"];
      SEOMeta::setTitle('Payday Loans Vancouver British Columbia.');
      SEOMeta::setDescription('Vancouver British Columbia. With Mega Cash Bucks, use our flexible repayment plan to pay over 2 or 3 installments.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Vancouver British Columbia');
      return view('payday-loans-vancouver', $data); }

    public function vanderhoof() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Vanderhoof bc"];
      SEOMeta::setTitle('Payday Loans Vanderhoof British Columbia.');
      SEOMeta::setDescription('Vanderhoof British Columbia. With Mega Cash Bucks, you have more time to repay, with no extra fees or interest charges.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Vanderhoof British Columbia');
      return view('payday-loans-vanderhoof', $data); }

    public function vernon() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Vernon bc"];
      SEOMeta::setTitle('Payday Loans Vernon British Columbia.');
      SEOMeta::setDescription('Vernon British Columbia. With Mega Cash Bucks, choose 1, 2, or 3 payment installments all for the same interest charge!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Vernon British Columbia');
      return view('payday-loans-vernon', $data); }

    public function victoria() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Victoria bc"];
      SEOMeta::setTitle('Payday Loans Victoria British Columbia.');
      SEOMeta::setDescription('Victoria British Columbia. With Mega Cash Bucks, you can apply for a loan from the comfort of your couch.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Victoria British Columbia');
      return view('payday-loans-victoria', $data); }

    public function welcomebeach() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Welcome Beach bc"];
      SEOMeta::setTitle('Payday Loans Welcome Beach British Columbia.');
      SEOMeta::setDescription('Welcome Beach British Columbia. With Mega Cash Bucks, our advanced assessment tools instantly determine your eligibility.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Welcome Beach British Columbia');
      return view('payday-loans-welcome-beach', $data); }

    public function whistler() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Whistler bc"];
      SEOMeta::setTitle('Payday Loans Whistler British Columbia.');
      SEOMeta::setDescription('Whistler British Columbia. With Mega Cash Bucks, just sign your electronic agreement and watch out for your money!');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, Whistler British Columbia');
      return view('payday-loans-whistler', $data); }

    public function whiterock() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans White Rock bc"];
      SEOMeta::setTitle('Payday Loans White Rock British Columbia.');
      SEOMeta::setDescription('White Rock British Columbia. With Mega Cash Bucks, in just 5 minutes our e-transfer will have the funds in your bank account.');
      SEOMeta::addKeyword('payday loans, payday loans canada, payday loans online, payday loans bc, payday loans canada, payday loans online, payday loans british columbia,  e-transfer payday loans canada, e-transfer payday loans canada 24 7, online payday loans canada, guaranteed payday loans no matter what canada, payday loans near me, low income e-transfer payday loans, White Rock British Columbia');
      return view('payday-loans-white-rock', $data); }

    public function williamslake() {
      $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "British Columbia", "headpg" => "Online Instant Payday Loans in British Columbia", "headtxtcolor" => "white", "headalt" => "payday loans Williams Lake bc"];
      SEOMeta::setTitle('Payday Loans Williams Lake British Columbia.');
      SEOMeta::setDescription('Williams Lake British Columbia. At Mega Cash Bucks, we make it easy. With both the cash advance and more flexible payment plans.');
      SEOMeta::addKeyword('');
      return view('payday-loans-williams-lake', $data); }



}
