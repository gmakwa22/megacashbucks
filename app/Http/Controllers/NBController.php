<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\SEOMeta;

use App\Http\Controllers\Controller;


class NBController extends Controller
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


  public function alma() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Alma NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Alma NB"];
  SEOMeta::setTitle('Payday Loans Alma NB');
  SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans in Alma NB from the comfort of your couch. Our advanced assessment tools instantly determine your eligibility.');
  SEOMeta::addKeyword('Payday Loans Alma NB, bad credit loans, bad credit loans online, Canadian online payday loans, cash 4 u, cash advance loans, cash advance online, cash money, cashloan');
  return view('nb.alma', $data); }

  public function aroostook() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Aroostook NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Aroostook NB"];
  SEOMeta::setTitle('Payday Loans Aroostook NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has developed an innovative, 24 Hour Payday Loans in Aroostook NB process that allows residents to apply, get approved, and receive their funds, all in the same day.');
  SEOMeta::addKeyword('Payday Loans Aroostook NB, bad credit loans online, Canadian online payday loans, cash 4 u, cash advance loans, cash advance online, cash money, cashloan, crb loans canada');
  return view('nb.aroostook', $data); }

  public function atholville() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Atholville NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Atholville NB"];
  SEOMeta::setTitle('Payday Loans Atholville NB');
  SEOMeta::setDescription('We offer you a Online Payday Loans in Atholville NB that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
  SEOMeta::addKeyword('Payday Loans Atholville NB, Canadian online payday loans, cash 4 u, cash advance loans, cash advance online, cash money, cashloan, crb loans canada, disability loans canada');
  return view('nb.atholville', $data); }

  public function balmoral() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Balmoral NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Balmoral NB"];
  SEOMeta::setTitle('Payday Loans Balmoral NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Balmoral NB, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Balmoral NB, cash 4 u, cash advance loans, cash advance online, cash money, cashloan, crb loans canada, disability loans canada, easy loans');
  return view('nb.balmoral', $data); }

  public function bascaraquet() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Bas Caraquet NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Bas Caraquet NB"];
  SEOMeta::setTitle('Payday Loans Bas Caraquet NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has brought Bas Caraquet NB a great solution. In fact, two of them! We have a Payday Loans Bas Caraquet New Brunswick. This is one you can pay back in a single installment.');
  SEOMeta::addKeyword('Payday Loans Bas Caraquet NB, cash advance loans, cash advance online, cash money, cashloan, crb loans canada, disability loans canada, easy loans, ei loans canada');
  return view('nb.bas-caraquet', $data); }

  public function bath() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Bath NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Bath NB"];
  SEOMeta::setTitle('Payday Loans Bath NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Bath NB with No Credit Check, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Bath NB, cash advance online, cash money, cashloan, crb loans canada, disability loans canada, easy loans, ei loans canada, ei loans online');
  return view('nb.bath', $data); }

  public function bathurst() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Bathurst NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Bathurst NB"];
  SEOMeta::setTitle('Payday Loans Bathurst NB');
  SEOMeta::setDescription('We offer you a Payday Loans in Bathurst NB that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
  SEOMeta::addKeyword('Payday Loans Bathurst NB, cash money, cashloan, crb loans canada, disability loans canada, easy loans, ei loans canada, ei loans online, emergency funding');
  return view('nb.bathurst', $data); }

  public function beaubassineast() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Beaubassin East NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Beaubassin East NB"];
  SEOMeta::setTitle('Payday Loans Beaubassin East NB');
  SEOMeta::setDescription('Our Payday Loans in Beaubassin East NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Beaubassin East NB, cashloan, crb loans canada, disability loans canada, easy loans, ei loans canada, ei loans online, emergency funding, fast cash loans online');
  return view('nb.beaubassin-east', $data); }

  public function belledune() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Belledune NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Belledune NB"];
  SEOMeta::setTitle('Payday Loans Belledune NB');
  SEOMeta::setDescription('Belledune NB residents are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan in Belledune NB when life throws the unexpected at them.');
  SEOMeta::addKeyword('Payday Loans Belledune NB, crb loans canada, disability loans canada, easy loans, ei loans canada, ei loans online, emergency funding, fast cash loans online, fast cash now');
  return view('nb.belledune', $data); }

  public function beresford() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Beresford NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Beresford NB"];
  SEOMeta::setTitle('Payday Loans Beresford NB');
  SEOMeta::setDescription('Beresford NB {{ $privname ?? "Mega Cash Bucks" }} Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Beresford NB, disability loans canada, easy loans, ei loans canada, ei loans online, emergency funding, fast cash loans online, fast cash now, fast cash online');
  return view('nb.beresford', $data); }

  public function bertrand() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Bertrand NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Bertrand NB"];
  SEOMeta::setTitle('Payday Loans Bertrand NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Bertrand NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you. ');
  SEOMeta::addKeyword('Payday Loans Bertrand NB, easy loans, ei loans canada, ei loans online, emergency funding, fast cash loans online, fast cash now, fast cash online, fast cash payday loans');
  return view('nb.bertrand', $data); }

  public function blacksharbour() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Blacks Harbour NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Blacks Harbour NB"];
  SEOMeta::setTitle('Payday Loans Blacks Harbour NB');
  SEOMeta::setDescription('Our Payday Loans Blacks Harbour NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Blacks Harbour NB, ei loans canada, ei loans online, emergency funding, fast cash loans online, fast cash now, fast cash online, fast cash payday loans, fast loans');
  return view('nb.blacks-harbour', $data); }

  public function blackville() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Blackville NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Blackville NB"];
  SEOMeta::setTitle('Payday Loans Blackville NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Blackville NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Blackville NB, ei loans online, emergency funding, fast cash loans online, fast cash now, fast cash online, fast cash payday loans, fast loans, fast money loans');
  return view('nb.blackville', $data); }

  public function bouctouche() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Bouctouche NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Bouctouche NB"];
  SEOMeta::setTitle('Payday Loans Bouctouche NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Bouctouche NB, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Bouctouche NB, emergency funding, fast cash loans online, fast cash now, fast cash online, fast cash payday loans, fast loans, fast money loans, financial help');
  return view('nb.bouctouche', $data); }

  public function cambridgenarrows() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Cambridge-Narrows NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Cambridge-Narrows NB"];
  SEOMeta::setTitle('Payday Loans Cambridge-Narrows NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has brought Cambridge-Narrows NB residents a great solution. In fact, two of them! We have a Payday Loans Cambridge-Narrows NB. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
  SEOMeta::addKeyword('Payday Loans Cambridge-Narrows NB, fast cash loans online, fast cash now, fast cash online, fast cash payday loans, fast loans, fast money loans, financial help, get a loan');
  return view('nb.cambridge-narrows', $data); }

  public function campbellton() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Campbellton NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Campbellton NB"];
  SEOMeta::setTitle('Payday Loans Campbellton NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans in Campbellton NB, get approved for, and receive their funds quickly and easily.');
  SEOMeta::addKeyword('Payday Loans Campbellton NB, fast cash now, fast cash online, fast cash payday loans, fast loans, fast money loans, financial help, get a loan, get money');
  return view('nb.campbellton', $data); }

  public function campobelloisland() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Campobello Island NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Campobello Island NB"];
  SEOMeta::setTitle('Payday Loans Campobello Island NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Campobello Island NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Campobello Island NB, fast cash online, fast cash payday loans, fast loans, fast money loans, financial help, get a loan, get money, get money right now');
  return view('nb.campobello-island', $data); }

  public function canterbury() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Canterbury NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Canterbury NB"];
  SEOMeta::setTitle('Payday Loans Canterbury NB');
  SEOMeta::setDescription('Our Payday Loans in Canterbury NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Canterbury NB, fast cash payday loans, fast loans, fast money loans, financial help, get a loan, get money, get money right now, guaranteed payday loans canada');
  return view('nb.canterbury', $data); }

  public function cappele() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Cap-Pele NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Cap-Pele NB"];
  SEOMeta::setTitle('Payday Loans Cap-Pele NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Cap-Pele NB No Credit Check opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Cap-Pele NB, fast loans, fast money loans, financial help, get a loan, get money, get money right now, guaranteed payday loans canada, i need cash now');
  return view('nb.cap-pele', $data); }

  public function caraquet() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Caraquet NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Caraquet NB"];
  SEOMeta::setTitle('Payday Loans Caraquet NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Caraquet NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Caraquet NB, fast money loans, financial help, get a loan, get money, get money right now, guaranteed payday loans canada, i need cash now, installment loans');
  return view('nb.caraquet', $data); }

  public function centreville() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Centreville NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Centreville NB"];
  SEOMeta::setTitle('Payday Loans Centreville NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Centreville NB opportunities as we work to make your financial life easier and happier');
  SEOMeta::addKeyword('Payday Loans Centreville, financial help, get a loan, get money, get money right now, guaranteed payday loans canada, i need cash now, installment loans, installment loans canada');
  return view('nb.centreville', $data); }

  public function charlo() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Charlo NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Charlo NB"];
  SEOMeta::setTitle('Payday Loans Charlo NB');
  SEOMeta::setDescription('Our Payday Loans in Charlo NB with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Charlo NB, get a loan, get money, get money right now, guaranteed payday loans canada, i need cash now, installment loans, installment loans canada, instant cash advance');
  return view('nb.charlo', $data); }

  public function chipman() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Chipman NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Chipman NB"];
  SEOMeta::setTitle('Payday Loans Chipman NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Chipman NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Chipman NB, get money, get money right now, guaranteed payday loans canada, i need cash now, installment loans, installment loans canada, instant cash advance, instant e transfer');
  return view('nb.chipman', $data); }

  public function cocagne() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Cocagne NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Cocagne NB"];
  SEOMeta::setTitle('Payday Loans Cocagne NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Cocagne NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Cocagne NB, get money right now, guaranteed payday loans canada, i need cash now, installment loans, installment loans canada, instant cash advance, instant e transfer, instant loans canada');
  return view('nb.cocagne', $data); }

  public function dalhousie() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Dalhousie NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Dalhousie NB"];
  SEOMeta::setTitle('Payday Loans Dalhousie NB');
  SEOMeta::setDescription('Our Payday Loans in Dalhousie NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Dalhousie NB, guaranteed payday loans canada, i need cash now, installment loans, installment loans canada, instant cash advance, instant e transfer, instant loans canada, instant payday loans canada e transfer');
  return view('nb.dalhousie', $data); }

  public function dieppe() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Dieppe NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Dieppe NB"];
  SEOMeta::setTitle('Payday Loans Dieppe NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Dieppe NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Dieppe NB, i need cash now, installment loans, installment loans canada, instant cash advance, instant e transfer, instant loans canada, instant payday loans canada e transfer, instant payday loans no credit check');
  return view('nb.dieppe', $data); }

  public function doaktown() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Doaktown NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Doaktown NB"];
  SEOMeta::setTitle('Payday Loans Doaktown NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Doaktown NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Doaktown NB, installment loans, installment loans canada, instant cash advance, instant e transfer, instant loans canada, instant payday loans canada e transfer, instant payday loans no credit check, instant transfer');
  return view('nb.doaktown', $data); }

  public function dorchester() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Dorchester NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Dorchester NB"];
  SEOMeta::setTitle('Payday Loans Dorchester NB');
  SEOMeta::setDescription('Our Payday Loans in Dorchester NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Dorchester NB, installment loans canada, instant cash advance, instant e transfer, instant loans canada, instant payday loans canada e transfer, instant payday loans no credit check, instant transfer, internet loans');
  return view('nb.dorchester', $data); }

  public function drummond() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Drummond NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Drummond NB"];
  SEOMeta::setTitle('Payday Loans Drummond NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Drummond NB No Credit Check with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Drummond NB, instant cash advance, instant e transfer, instant loans canada, instant payday loans canada e transfer, instant payday loans no credit check, instant transfer, internet loans, loan canada');
  return view('nb.drummond', $data); }

  public function edmundston() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Edmundston NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Edmundston NB"];
  SEOMeta::setTitle('Payday Loans Edmundston NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Edmundston NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Edmundston NB, instant e transfer, instant loans canada, instant payday loans canada e transfer, instant payday loans no credit check, instant transfer, internet loans, loan canada, loan on child tax credit');
  return view('nb.edmundston', $data); }

  public function eelrivercrossing() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Eel River Crossing NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Eel River Crossing NB"];
  SEOMeta::setTitle('Payday Loans Eel River Crossing NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Eel River Crossing NB Online with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Eel River Crossing NB, instant loans canada, instant payday loans canada e transfer, instant payday loans no credit check, instant transfer, internet loans, loan canada, loan on child tax credit, loan services online payday loan lenders');
  return view('nb.eel-river-crossing', $data); }

  public function florencevillebristol() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Florenceville-Bristol NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Florenceville-Bristol NB"];
  SEOMeta::setTitle('Payday Loans Florenceville-Bristol NB');
  SEOMeta::setDescription('We know that things happen in life and sometimes you need Cash Money in Florenceville-Bristol NB for unexpected expenses.');
  SEOMeta::addKeyword('Payday Loans Florenceville-Bristol NB, instant payday loans canada e transfer, instant payday loans no credit check, instant transfer, internet loans, loan canada, loan on child tax credit, loan services online payday loan lenders, loan with bad credit');
  return view('nb.florenceville-bristol', $data); }

  public function fredericton() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Fredericton NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Fredericton NB"];
  SEOMeta::setTitle('Payday Loans Fredericton NB');
  SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans in Fredericton NB from the comfort of your couch. Our advanced assessment tools instantly determine your eligibility.');
  SEOMeta::addKeyword('Payday Loans Fredericton NB, instant payday loans no credit check, instant transfer, internet loans, loan canada, loan on child tax credit, loan services online payday loan lenders, loan with bad credit, loans');
  return view('nb.fredericton', $data); }

  public function frederictonjunction() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Fredericton Junction NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Fredericton Junction NB"];
  SEOMeta::setTitle('Payday Loans Fredericton Junction NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has developed an innovative, 24 Hour Payday Loans in Fredericton Junction NB process that allows residents to apply, get approved, and receive their funds, all in the same day.');
  SEOMeta::addKeyword('Payday Loans Fredericton Junction NB, instant transfer, internet loans, loan canada, loan on child tax credit, loan services online payday loan lenders, loan with bad credit, loans, loans bad credit');
  return view('nb.fredericton-junction', $data); }

  public function gagetown() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Gagetown NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Gagetown NB"];
  SEOMeta::setTitle('Payday Loans Gagetown NB');
  SEOMeta::setDescription('We offer you a Online Payday Loans in Gagetown NB that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
  SEOMeta::addKeyword('Payday Loans Gagetown NB, internet loans, loan canada, loan on child tax credit, loan services online payday loan lenders, loan with bad credit, loans, loans bad credit, loans canada bad credit');
  return view('nb.gagetown', $data); }

  public function grandbaywestfield() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Grand Bay-Westfield NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Grand Bay-Westfield NB"];
  SEOMeta::setTitle('Payday Loans Grand Bay-Westfield NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Grand Bay-Westfield NB, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Grand Bay-Westfield NB, loan canada, loan on child tax credit, loan services online payday loan lenders, loan with bad credit, loans, loans bad credit, loans canada bad credit, loans for bad credit');
  return view('nb.grand-bay-westfield', $data); }

  public function grandfalls() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Grand Falls NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Grand Falls NB"];
  SEOMeta::setTitle('Payday Loans Grand Falls NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has brought Grand Falls NB a great solution. In fact, two of them! We have a Payday Loans Grand Falls NB. This is one you can pay back in a single installment.');
  SEOMeta::addKeyword('Payday Loans Grand Falls NB, loan on child tax credit, loan services online payday loan lenders, loan with bad credit, loans, loans bad credit, loans canada bad credit, loans for bad credit, loans for ei');
  return view('nb.grand-falls', $data); }

  public function grandmanan() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Grand Manan NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Grand Manan NB"];
  SEOMeta::setTitle('Payday Loans Grand Manan NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Grand Manan NB with No Credit Check, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Grand Manan NB, loan services online payday loan lenders, loan with bad credit, loans, loans bad credit, loans canada bad credit, loans for bad credit, loans for ei, loans for payday');
  return view('nb.grand-manan', $data); }

  public function grandeanse() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Grande-Anse NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Grande-Anse NB"];
  SEOMeta::setTitle('Payday Loans Grande-Anse NB');
  SEOMeta::setDescription('We offer you a Payday Loans in Grande-Anse NB that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
  SEOMeta::addKeyword('Payday Loans Grande-Anse NB, loan with bad credit, loans, loans bad credit, loans canada bad credit, loans for bad credit, loans for ei, loans for payday, loans on aish');
  return view('nb.grande-anse', $data); }

  public function hampton() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Hampton NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Hampton NB"];
  SEOMeta::setTitle('Payday Loans Hampton NB');
  SEOMeta::setDescription('Our Payday Loans in Hampton NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Hampton NB, loans, loans bad credit, loans canada bad credit, loans for bad credit, loans for ei, loans for payday, loans on aish, loans on child tax');
  return view('nb.hampton', $data); }

  public function hanwell() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Hanwell NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Hanwell NB"];
  SEOMeta::setTitle('Payday Loans Hanwell NB');
  SEOMeta::setDescription('Hanwell NB residents are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan in Hanwell NB when life throws the unexpected at them.');
  SEOMeta::addKeyword('Payday Loans Hanwell NB, loans bad credit, loans canada bad credit, loans for bad credit, loans for ei, loans for payday, loans on aish, loans on child tax, loans on crb');
  return view('nb.hanwell', $data); }

  public function hartland() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Hartland NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Hartland NB"];
  SEOMeta::setTitle('Payday Loans Hartland NB');
  SEOMeta::setDescription('Hartland NB {{ $privname ?? "Mega Cash Bucks" }} Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Hartland NB, loans canada bad credit, loans for bad credit, loans for ei, loans for payday, loans on aish, loans on child tax, loans on crb, loans on ei');
  return view('nb.hartland', $data); }

  public function harvey() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Harvey NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Harvey NB"];
  SEOMeta::setTitle('Payday Loans Harvey NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Harvey NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you. ');
  SEOMeta::addKeyword('Payday Loans Harvey NB, loans for bad credit, loans for ei, loans for payday, loans on aish, loans on child tax, loans on crb, loans on ei, loans on social assistance');
  return view('nb.harvey', $data); }

  public function hautmadawaska() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Haut-Madawaska NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Haut-Madawaska NB"];
  SEOMeta::setTitle('Payday Loans Haut-Madawaska NB');
  SEOMeta::setDescription('Our Payday Loans Haut-Madawaska NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Haut-Madawaska NB, loans for ei, loans for payday, loans on aish, loans on child tax, loans on crb, loans on ei, loans on social assistance, loans on unemployment');
  return view('nb.haut-madawaska', $data); }

  public function hillsborough() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Hillsborough NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Hillsborough NB"];
  SEOMeta::setTitle('Payday Loans Hillsborough NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Hillsborough NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Hillsborough NB, loans for payday, loans on aish, loans on child tax, loans on crb, loans on ei, loans on social assistance, loans on unemployment, loans online');
  return view('nb.hillsborough', $data); }

  public function kedgwick() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Kedgwick NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Kedgwick NB"];
  SEOMeta::setTitle('Payday Loans Kedgwick NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Kedgwick NB, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Kedgwick NB, loans on aish, loans on child tax, loans on crb, loans on ei, loans on social assistance, loans on unemployment, loans online, loanz com');
  return view('nb.kedgwick', $data); }

  public function lacbaker() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Lac Baker NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Lac Baker NB"];
  SEOMeta::setTitle('Payday Loans Lac Baker NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has brought Lac Baker NB a great solution. In fact, two of them! We have a Payday Loans Lac Baker NB. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
  SEOMeta::addKeyword('Payday Loans Lac Baker NB, loans on child tax, loans on crb, loans on ei, loans on social assistance, loans on unemployment, loans online, loanz com, megabucks loans');
  return view('nb.lac-baker', $data); }

  public function lameque() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Lameque NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Lameque NB"];
  SEOMeta::setTitle('Payday Loans Lameque NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans in Lameque NB, get approved for, and receive their funds quickly and easily.');
  SEOMeta::addKeyword('Payday Loans Lameque NB, loans on crb, loans on ei, loans on social assistance, loans on unemployment, loans online, loanz com, megabucks loans, money');
  return view('nb.lameque', $data); }

  public function legoulet() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Le Goulet NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Le Goulet NB"];
  SEOMeta::setTitle('Payday Loans Le Goulet NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Le Goulet NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Le Goulet NB, loans on ei, loans on social assistance, loans on unemployment, loans online, loanz com, megabucks loans, money, money loans');
  return view('nb.le-goulet', $data); }

  public function maisonnette() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Maisonnette NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Maisonnette NB"];
  SEOMeta::setTitle('Payday Loans Maisonnette NB');
  SEOMeta::setDescription('Our Payday Loans in Maisonnette NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Maisonnette NB, loans on social assistance, loans on unemployment, loans online, loanz com, megabucks loans, money, money loans, money mart cash advance');
  return view('nb.maisonnette', $data); }

  public function mcadam() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans McAdam NB", "headtxtcolor" => "white", "headalt" => "Payday Loans McAdam NB"];
  SEOMeta::setTitle('Payday Loans McAdam NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in McAdam NB No Credit Check opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans McAdam NB, loans on unemployment, loans online, loanz com, megabucks loans, money, money loans, money mart cash advance, my next pay');
  return view('nb.mcadam', $data); }

  public function meductic() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Meductic NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Meductic NB"];
  SEOMeta::setTitle('Payday Loans Meductic NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Meductic NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Meductic NB, loans online, loanz com, megabucks loans, money, money loans, money mart cash advance, my next pay, new payday lenders');
  return view('nb.meductic', $data); }

  public function memramcook() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Memramcook NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Memramcook NB"];
  SEOMeta::setTitle('Payday Loans Memramcook NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Memramcook NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Memramcook NB, loanz com, megabucks loans, money, money loans, money mart cash advance, my next pay, new payday lenders, no credit check loans');
  return view('nb.memramcook', $data); }

  public function millville() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Millville NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Millville NB"];
  SEOMeta::setTitle('Payday Loans Millville NB');
  SEOMeta::setDescription('Our Payday Loans in Millville NB with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Millville NB, megabucks loans, money, money loans, money mart cash advance, my next pay, new payday lenders, no credit check loans, no credit check loans canada');
  return view('nb.millville', $data); }

  public function minto() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Minto NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Minto NB"];
  SEOMeta::setTitle('Payday Loans Minto NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Minto NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Minto NB, money, money loans, money mart cash advance, my next pay, new payday lenders, no credit check loans, no credit check loans canada, no credit payday loans canada');
  return view('nb.minto', $data); }

  public function miramichi() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Miramichi NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Miramichi NB"];
  SEOMeta::setTitle('Payday Loans Miramichi NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Miramichi NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Miramichi NB, money loans, money mart cash advance, my next pay, new payday lenders, no credit check loans, no credit check loans canada, no credit payday loans canada, no refusal payday loans canada');
  return view('nb.miramichi', $data); }

  public function moncton() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Moncton NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Moncton NB"];
  SEOMeta::setTitle('Payday Loans Moncton NB');
  SEOMeta::setDescription('Our Payday Loans in Moncton NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Moncton NB, money mart cash advance, my next pay, new payday lenders, no credit check loans, no credit check loans canada, no credit payday loans canada, no refusal payday loans canada, odsp loans');
  return view('nb.moncton', $data); }

  public function nackawic() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Nackawic NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Nackawic NB"];
  SEOMeta::setTitle('Payday Loans Nackawic NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Nackawic NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Nackawic NB, my next pay, new payday lenders, no credit check loans, no credit check loans canada, no credit payday loans canada, no refusal payday loans canada, odsp loans, online cash');
  return view('nb.nackawic', $data); }

  public function neguac() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Neguac NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Neguac NB"];
  SEOMeta::setTitle('Payday Loans Neguac NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Neguac NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Neguac NB, new payday lenders, no credit check loans, no credit check loans canada, no credit payday loans canada, no refusal payday loans canada, odsp loans, online cash, online loan no credit check');
  return view('nb.neguac', $data); }

  public function newmaryland() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans New Maryland NB", "headtxtcolor" => "white", "headalt" => "Payday Loans New Maryland NB"];
  SEOMeta::setTitle('Payday Loans New Maryland NB');
  SEOMeta::setDescription('Our Payday Loans in New Maryland NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans New Maryland NB, no credit check loans, no credit check loans canada, no credit payday loans canada, no refusal payday loans canada, odsp loans, online cash, online loan no credit check, online loans');
  return view('nb.new-maryland', $data); }

  public function nigadoo() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Nigadoo NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Nigadoo NB"];
  SEOMeta::setTitle('Payday Loans Nigadoo NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Nigadoo NB No Credit Check with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Nigadoo NB, no credit check loans canada, no credit payday loans canada, no refusal payday loans canada, odsp loans, online cash, online loan no credit check, online loans, online loans no credit check instant approval canada');
  return view('nb.nigadoo', $data); }

  public function norton() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Norton NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Norton NB"];
  SEOMeta::setTitle('Payday Loans Norton NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Norton NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Norton NB, no credit payday loans canada, no refusal payday loans canada, odsp loans, online cash, online loan no credit check, online loans, online loans no credit check instant approval canada, online payday loans');
  return view('nb.norton', $data); }

  public function oromocto() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Oromocto NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Oromocto NB"];
  SEOMeta::setTitle('Payday Loans Oromocto NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Oromocto NB Online with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Oromocto NB, no refusal payday loans canada, odsp loans, online cash, online loan no credit check, online loans, online loans no credit check instant approval canada, online payday loans, online payday loans ontario');
  return view('nb.oromocto', $data); }

  public function paquetville() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Paquetville NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Paquetville NB"];
  SEOMeta::setTitle('Payday Loans Paquetville NB');
  SEOMeta::setDescription('We know that things happen in life and sometimes you need Cash Money in Paquetville NB for unexpected expenses.');
  SEOMeta::addKeyword('Payday Loans Paquetville NB, odsp loans, online cash, online loan no credit check, online loans, online loans no credit check instant approval canada, online payday loans, online payday loans ontario, pay day cash');
  return view('nb.paquetville', $data); }

  public function perthandover() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Perth-Andover NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Perth-Andover NB"];
  SEOMeta::setTitle('Payday Loans Perth-Andover NB');
  SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans in Perth-Andover NB from the comfort of your couch. Our advanced assessment tools instantly determine your eligibility.');
  SEOMeta::addKeyword('Payday Loans Perth-Andover NB, online cash, online loan no credit check, online loans, online loans no credit check instant approval canada, online payday loans, online payday loans ontario, pay day cash, payday advance loans');
  return view('nb.perth-andover', $data); }

  public function petitcodiac() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Petitcodiac NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Petitcodiac NB"];
  SEOMeta::setTitle('Payday Loans Petitcodiac NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has developed an innovative, 24 Hour Payday Loans in Petitcodiac NB process that allows Petitcodiac NB residents to apply, get approved, and receive their funds, all in the same day.');
  SEOMeta::addKeyword('Payday Loans Petitcodiac NB, online loan no credit check, online loans, online loans no credit check instant approval canada, online payday loans, online payday loans ontario, pay day cash, payday advance loans, payday loan online');
  return view('nb.petitcodiac', $data); }

  public function petitrocher() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Petit-Rocher NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Petit-Rocher NB"];
  SEOMeta::setTitle('Payday Loans Petit-Rocher NB');
  SEOMeta::setDescription('We offer you a Online Payday Loans in Petit-Rocher NB that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
  SEOMeta::addKeyword('Payday Loans Petit-Rocher NB, online loans, online loans no credit check instant approval canada, online payday loans, online payday loans ontario, pay day cash, payday advance loans, payday loan online, payday loan today');
  return view('nb.petit-rocher', $data); }

  public function plasterrock() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Plaster Rock NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Plaster Rock NB"];
  SEOMeta::setTitle('Payday Loans Plaster Rock NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Plaster Rock NB, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Plaster Rock NB, online loans no credit check instant approval canada, online payday loans, online payday loans ontario, pay day cash, payday advance loans, payday loan online, payday loan today, payday loans');
  return view('nb.plaster-rock', $data); }

  public function pointeverte() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Pointe-Verte NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Pointe-Verte NB"];
  SEOMeta::setTitle('Payday Loans Pointe-Verte NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has brought Pointe-Verte NB a great solution. In fact, two of them! We have a Payday Loans Pointe-Verte NB. This is one you can pay back in a single installment.');
  SEOMeta::addKeyword('Payday Loans Pointe-Verte NB, online payday loans, online payday loans ontario, pay day cash, payday advance loans, payday loan online, payday loan today, payday loans, payday loans no credit');
  return view('nb.pointe-verte', $data); }

  public function portelgin() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Port Elgin NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Port Elgin NB"];
  SEOMeta::setTitle('Payday Loans Port Elgin NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Port Elgin NB with No Credit Check, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Port Elgin NB, online payday loans ontario, pay day cash, payday advance loans, payday loan online, payday loan today, payday loans, payday loans no credit, payday loans no credit check');
  return view('nb.port-elgin', $data); }

  public function quispamsis() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Quispamsis NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Quispamsis NB"];
  SEOMeta::setTitle('Payday Loans Quispamsis NB');
  SEOMeta::setDescription('We offer you a Payday Loans in Quispamsis NB that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
  SEOMeta::addKeyword('Payday Loans Quispamsis NB, pay day cash, payday advance loans, payday loan online, payday loan today, payday loans, payday loans no credit, payday loans no credit check, payday loans no credit check canada');
  return view('nb.quispamsis', $data); }

  public function rexton() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Rexton NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Rexton NB"];
  SEOMeta::setTitle('Payday Loans Rexton NB');
  SEOMeta::setDescription('Our Payday Loans in Rexton NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Rexton NB, payday advance loans, payday loan online, payday loan today, payday loans, payday loans no credit, payday loans no credit check, payday loans no credit check canada, payday loans online');
  return view('nb.rexton', $data); }

  public function richibucto() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Richibucto NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Richibucto NB"];
  SEOMeta::setTitle('Payday Loans Richibucto NB');
  SEOMeta::setDescription('Richibucto NB residents are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan in Richibucto NB when life throws the unexpected at them.');
  SEOMeta::addKeyword('Payday Loans Richibucto NB, payday loan online, payday loan today, payday loans, payday loans no credit, payday loans no credit check, payday loans no credit check canada, payday loans online, payday loans ontario');
  return view('nb.richibucto', $data); }

  public function riversidealbert() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Riverside-Albert NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Riverside-Albert NB"];
  SEOMeta::setTitle('Payday Loans Riverside-Albert NB');
  SEOMeta::setDescription('Riverside-Albert NB {{ $privname ?? "Mega Cash Bucks" }} Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Riverside-Albert NB, payday loan today, payday loans, payday loans no credit, payday loans no credit check, payday loans no credit check canada, payday loans online, payday loans ontario, payday near me');
  return view('nb.riverside-albert', $data); }

  public function riverview() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Riverview NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Riverview NB"];
  SEOMeta::setTitle('Payday Loans Riverview NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Riverview NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Riverview NB, payday loans, payday loans no credit, payday loans no credit check, payday loans no credit check canada, payday loans online, payday loans ontario, payday near me, payday online loans');
  return view('nb.riverview', $data); }

  public function riviereverte() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Riviere-Verte NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Riviere-Verte NB"];
  SEOMeta::setTitle('Payday Loans Riviere-Verte NB');
  SEOMeta::setDescription('Our Payday Loans Riviere-Verte NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Riviere-Verte NB, payday loans no credit, payday loans no credit check, payday loans no credit check canada, payday loans online, payday loans ontario, payday near me, payday online loans, personal loans');
  return view('nb.riviere-verte', $data); }

  public function rogersville() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Rogersville NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Rogersville NB"];
  SEOMeta::setTitle('Payday Loans Rogersville NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Rogersville NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Rogersville NB, payday loans no credit check, payday loans no credit check canada, payday loans online, payday loans ontario, payday near me, payday online loans, personal loans, quick cash loans poor credit');
  return view('nb.rogersville', $data); }

  public function rothesay() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Rothesay NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Rothesay NB"];
  SEOMeta::setTitle('Payday Loans Rothesay NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Rothesay NB, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Rothesay NB, payday loans no credit check canada, payday loans online, payday loans ontario, payday near me, payday online loans, personal loans, quick cash loans poor credit, quick cash payday loans');
  return view('nb.rothesay', $data); }

  public function sackville() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Sackville NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Sackville NB"];
  SEOMeta::setTitle('Payday Loans Sackville NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has brought Sackville NB a great solution. In fact, two of them! We have a Payday Loans Sackville NB. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.');
  SEOMeta::addKeyword('Payday Loans Sackville NB, payday loans online, payday loans ontario, payday near me, payday online loans, personal loans, quick cash loans poor credit, quick cash payday loans, quick easy loans');
  return view('nb.sackville', $data); }

  public function saintandrews() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint Andrews NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint Andrews NB"];
  SEOMeta::setTitle('Payday Loans Saint Andrews NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} is a leader among a new generation of payday loan alternative lenders. We operate exclusively online, which means that people can apply for Payday Loans in Saint Andrews NB, get approved for, and receive their funds quickly and easily.');
  SEOMeta::addKeyword('Payday Loans Saint Andrews NB, payday loans ontario, payday near me, payday online loans, personal loans, quick cash loans poor credit, quick cash payday loans, quick easy loans, quick loans');
  return view('nb.saint-andrews', $data); }

  public function saintjohn() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint John NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint John NB"];
  SEOMeta::setTitle('Payday Loans Saint John NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Saint John NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you. ');
  SEOMeta::addKeyword('Payday Loans Saint John NB, payday near me, payday online loans, personal loans, quick cash loans poor credit, quick cash payday loans, quick easy loans, quick loans, quick loans canada');
  return view('nb.saint-john', $data); }

  public function saintandre() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint-Andre NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint-Andre NB"];
  SEOMeta::setTitle('Payday Loans Saint-Andre NB');
  SEOMeta::setDescription('Our Payday Loans in Saint-Andre NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Saint-Andre NB, payday online loans, personal loans, quick cash loans poor credit, quick cash payday loans, quick easy loans, quick loans, quick loans canada, quick loans ontario');
  return view('nb.saint-andre', $data); }

  public function saintantoine() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint-Antoine NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint-Antoine NB"];
  SEOMeta::setTitle('Payday Loans Saint-Antoine NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Saint-Antoine NB No Credit Check opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Saint-Antoine NB, personal loans, quick cash loans poor credit, quick cash payday loans, quick easy loans, quick loans, quick loans canada, quick loans ontario, same day loans');
  return view('nb.saint-antoine', $data); }

  public function sainteannedemadawaska() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Sainte-Anne-de-Madawaska NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Sainte-Anne-de-Madawaska NB"];
  SEOMeta::setTitle('Payday Loans Sainte-Anne-de-Madawaska NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Sainte-Anne-de-Madawaska NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Sainte-Anne-de-Madawaska NB, quick cash loans poor credit, quick cash payday loans, quick easy loans, quick loans, quick loans canada, quick loans ontario, same day loans, small cash loans');
  return view('nb.sainte-anne-de-madawaska', $data); }

  public function saintemariesaintraphael() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Sainte-Marie-Saint-Raphaël NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Sainte-Marie-Saint-Raphaël NB"];
  SEOMeta::setTitle('Payday Loans Sainte-Marie-Saint-Raphaël NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Sainte-Marie-Saint-Raphaël NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Sainte-Marie-Saint-Raphaël NB, quick cash payday loans, quick easy loans, quick loans, quick loans canada, quick loans ontario, same day loans, small cash loans, small loans');
  return view('nb.sainte-marie-saint-raphael', $data); }

  public function saintisidore() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint-Isidore NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint-Isidore NB"];
  SEOMeta::setTitle('Payday Loans Saint-Isidore NB');
  SEOMeta::setDescription('Our Payday Loans in Saint-Isidore NB with No Credit Check can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Saint-Isidore NB, quick easy loans, quick loans, quick loans canada, quick loans ontario, same day loans, small cash loans, small loans, welfare loans');
  return view('nb.saint-isidore', $data); }

  public function saintleolin() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint-Leolin NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint-Leolin NB"];
  SEOMeta::setTitle('Payday Loans Saint-Leolin NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Saint-Leolin NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Saint-Leolin NB, bad credit loans, bad credit loans online, Canadian online payday loans, cash 4 u, cash advance loans, cash advance online, cash money, cashloan');
  return view('nb.saint-leolin', $data); }

  public function saintleonard() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint-Leonard NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint-Leonard NB"];
  SEOMeta::setTitle('Payday Loans Saint-Leonard NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Saint-Leonard NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Saint-Leonard NB, bad credit loans online, Canadian online payday loans, cash 4 u, cash advance loans, cash advance online, cash money, cashloan, crb loans canada');
  return view('nb.saint-leonard', $data); }

  public function saintlouisdekent() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint-Louis de Kent NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint-Louis de Kent NB"];
  SEOMeta::setTitle('Payday Loans Saint-Louis de Kent NB');
  SEOMeta::setDescription('Our Payday Loans in Saint-Louis de Kent can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Saint-Louis de Kent NB, Canadian online payday loans, cash 4 u, cash advance loans, cash advance online, cash money, cashloan, crb loans canada, disability loans canada');
  return view('nb.saint-louis-de-kent', $data); }

  public function saintquentin() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Saint-Quentin NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Saint-Quentin NB"];
  SEOMeta::setTitle('Payday Loans Saint-Quentin NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Saint-Quentin NB with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Saint-Quentin NB, cash 4 u, cash advance loans, cash advance online, cash money, cashloan, crb loans canada, disability loans canada, easy loans');
  return view('nb.saint-quentin', $data); }

  public function salisbury() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Salisbury NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Salisbury NB"];
  SEOMeta::setTitle('Payday Loans Salisbury NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in Salisbury NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans Salisbury NB, cash advance loans, cash advance online, cash money, cashloan, crb loans canada, disability loans canada, easy loans, ei loans canada');
  return view('nb.salisbury', $data); }

  public function shediac() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Shediac NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Shediac NB"];
  SEOMeta::setTitle('Payday Loans Shediac NB');
  SEOMeta::setDescription('Our Payday Loans in Shediac NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Shediac NB, cash advance online, cash money, cashloan, crb loans canada, disability loans canada, easy loans, ei loans canada, ei loans online');
  return view('nb.shediac', $data); }

  public function shippagan() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Shippagan NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Shippagan NB"];
  SEOMeta::setTitle('Payday Loans Shippagan NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Shippagan NB No Credit Check with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Shippagan NB, cash money, cashloan, crb loans canada, disability loans canada, easy loans, ei loans canada, ei loans online, emergency funding');
  return view('nb.shippagan', $data); }

  public function stgeorge() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans St. George NB", "headtxtcolor" => "white", "headalt" => "Payday Loans St. George NB"];
  SEOMeta::setTitle('Payday Loans St. George NB');
  SEOMeta::setDescription('Look forward to more great Payday Loans in St. George NB opportunities as we work to make your financial life easier and happier.');
  SEOMeta::addKeyword('Payday Loans St. George NB, cashloan, crb loans canada, disability loans canada, easy loans, ei loans canada, ei loans online, emergency funding, fast cash loans online');
  return view('nb.st-george', $data); }

  public function stmartins() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans St. Martins NB", "headtxtcolor" => "white", "headalt" => "Payday Loans St. Martins NB"];
  SEOMeta::setTitle('Payday Loans St. Martins NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in St. Martins NB Online with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans St. Martins NB, crb loans canada, disability loans canada, easy loans, ei loans canada, ei loans online, emergency funding, fast cash loans online, fast cash now');
  return view('nb.st-martins', $data); }

  public function ststephen() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans St. Stephen NB", "headtxtcolor" => "white", "headalt" => "Payday Loans St. Stephen NB"];
  SEOMeta::setTitle('Payday Loans St. Stephen NB');
  SEOMeta::setDescription('We know that things happen in life and sometimes you need Cash Money in St. Stephen NB for unexpected expenses.');
  SEOMeta::addKeyword('Payday Loans St. Stephen NB, disability loans canada, easy loans, ei loans canada, ei loans online, emergency funding, fast cash loans online, fast cash now, fast cash online');
  return view('nb.st-stephen', $data); }

  public function stanley() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Stanley NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Stanley NB"];
  SEOMeta::setTitle('Payday Loans Stanley NB');
  SEOMeta::setDescription('Forget those line-ups down at the brick-and-mortar joint. You can apply for this Instant Approval Payday Loans in Stanley NB from the comfort of your couch. Our advanced assessment tools instantly determine your eligibility.');
  SEOMeta::addKeyword('Payday Loans Stanley NB, easy loans, ei loans canada, ei loans online, emergency funding, fast cash loans online, fast cash now, fast cash online, fast cash payday loans');
  return view('nb.stanley', $data); }

  public function sussex() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Sussex NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Sussex NB"];
  SEOMeta::setTitle('Payday Loans Sussex NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has developed an innovative, 24 Hour Payday Loans in Sussex NB process that allows Sussex NB residents to apply, get approved, and receive their funds, all in the same day.');
  SEOMeta::addKeyword('Payday Loans Sussex NB, ei loans canada, ei loans online, emergency funding, fast cash loans online, fast cash now, fast cash online, fast cash payday loans, fast loans');
  return view('nb.sussex', $data); }

  public function sussexcorner() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Sussex Corner NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Sussex Corner NB"];
  SEOMeta::setTitle('Payday Loans Sussex Corner NB');
  SEOMeta::setDescription('We offer you a Online Payday Loans in Sussex Corner NB that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
  SEOMeta::addKeyword('Payday Loans Sussex Corner NB, ei loans online, emergency funding, fast cash loans online, fast cash now, fast cash online, fast cash payday loans, fast loans, fast money loans');
  return view('nb.sussex-corner', $data); }

  public function tidehead() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Tide Head NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Tide Head NB"];
  SEOMeta::setTitle('Payday Loans Tide Head NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans in Tide Head NB, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Tide Head NB, emergency funding, fast cash loans online, fast cash now, fast cash online, fast cash payday loans, fast loans, fast money loans, financial help');
  return view('nb.tide-head', $data); }

  public function tracadie() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Tracadie NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Tracadie NB"];
  SEOMeta::setTitle('Payday Loans Tracadie NB');
  SEOMeta::setDescription('{{ $privname ?? "Mega Cash Bucks" }} has brought Tracadie NB a great solution. In fact, two of them! We have a Payday Loans Tracadie NB. This is one you can pay back in a single installment.');
  SEOMeta::addKeyword('Payday Loans Tracadie NB, fast cash loans online, fast cash now, fast cash online, fast cash payday loans, fast loans, fast money loans, financial help, get a loan');
  return view('nb.tracadie', $data); }

  public function tracy() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Tracy NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Tracy NB"];
  SEOMeta::setTitle('Payday Loans Tracy NB');
  SEOMeta::setDescription('If you’re looking for a Payday Loans Tracy NB with No Credit Check, with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.');
  SEOMeta::addKeyword('Payday Loans Tracy NB, fast cash now, fast cash online, fast cash payday loans, fast loans, fast money loans, financial help, get a loan, get money');
  return view('nb.tracy', $data); }

  public function uppermiramichi() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Upper Miramichi NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Upper Miramichi NB"];
  SEOMeta::setTitle('Payday Loans Upper Miramichi NB');
  SEOMeta::setDescription('We offer you a Payday Loans in Miramichi NB that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.');
  SEOMeta::addKeyword('Payday Loans Upper Miramichi NB, fast cash online, fast cash payday loans, fast loans, fast money loans, financial help, get a loan, get money, get money right now');
  return view('nb.upper-miramichi', $data); }

  public function woodstock() {
  $data = ["bannerbg" => "provinces/alberta.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Payday Loans Woodstock NB", "headtxtcolor" => "white", "headalt" => "Payday Loans Woodstock NB"];
  SEOMeta::setTitle('Payday Loans Woodstock NB');
  SEOMeta::setDescription('Our Payday Loans in Woodstock NB can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.');
  SEOMeta::addKeyword('Payday Loans Woodstock NB, fast cash payday loans, fast loans, fast money loans, financial help, get a loan, get money, get money right now, guaranteed payday loans canada');
  return view('nb.woodstock', $data); }

}
