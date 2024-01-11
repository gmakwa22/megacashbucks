<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\SEOMeta;

use App\Http\Controllers\Controller;


class BlogController extends Controller
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

   public function blog() {
      $getmimg = customfrontbanner();
      $tags=['payday loans','easy money','work from home','get a job'];
      $data = ["bannerbg" => "land/$getmimg.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Mega Cash Bucks Blog", "headtxtcolor" => "white", "headalt" => "payday loans bc", "tags" => $tags];
       SEOMeta::setTitle('Mega Cash Bucks Blog');
       SEOMeta::setDescription('');
       SEOMeta::addKeyword('');
       return view('blog', $data); }

       public function blog2() {
       $getmimg = customfrontbanner();
       $data = ["bannerbg" => "land/$getmimg.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Mega Cash Bucks Link Partners", "headtxtcolor" => "white", "headalt" => "payday loans bc", "tags" => "payday loans, easy money, work from home"];
         SEOMeta::setTitle('');
         SEOMeta::setDescription('');
         SEOMeta::addKeyword('');
         return view('blog.blog2', $data); }

       public function best15workfromhomecanada()
         {
       $getmimg = customfrontbanner();
       $data = ["bannerbg" => "land/$getmimg.jpg", "licpr" => "ab", "spprov" => "New Brunswick", "headpg" => "Top 15 Work From Home Jobs in Canada.", "headtxtcolor" => "white", "headalt" => "payday loans bc", "tags" => "payday loans, easy money, work from home"];
           SEOMeta::setTitle('');
           SEOMeta::setDescription('');
           SEOMeta::addKeyword('');
           return view('blog.top-15-best-work-from-home-jobs-in-canada', $data);
         }

         public function canadachildbenefit()
         {
            $data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => "Getting a loan while receiving the Canada Child Benefit (CCB).", "headtxtcolor" => "white", "headalt" => "payday loans niagara falls ontario"];
            SEOMeta::setTitle('Getting a loan while receiving the Canada Child Benefit (CCB).');
            SEOMeta::setDescription('Will I qualify for a loan if I’m currently receiving the Canada.ca Child Benefit?');
            SEOMeta::addKeyword('canada.ca child benefit, personal loan, new payday lenders, payday loan');
            return view('/blog/canada-child-benefit', $data);
          }

          public function onlinepersonalloans()
          {
          	 $data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => "How Safe Are Online Personal Loans?", "headtxtcolor" => "white", "headalt" => "payday loans niagara falls ontario"];
          	 SEOMeta::setTitle('How Safe Are Online Personal Loans?');
          	 SEOMeta::setDescription('Are payday loans canada, payday loans ontario, instant loans canada safe?');
          	 SEOMeta::addKeyword('instant loans, payday loans, personal loans, loans, payday loans');
          	 return view('/blog/online-personal-loans', $data);
          }

          public function savingmoneyinthepostpandemicworld()
          {
             $data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => "Saving Money In The Post Pandemic World.", "headtxtcolor" => "white", "headalt" => "payday loans niagara falls ontario"];
             SEOMeta::setTitle('Saving Money In The Post Pandemic World.');
             SEOMeta::setDescription('How To Save Money in Canada Post Pandemic');
             SEOMeta::addKeyword('Payday Money, quick loans, instant approval,');
             return view('/blog/saving-money-in-the-post-pandemic-world', $data);
          }

          public function shorttermloanalternatives()
          {
          	$data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => "The 3 Best Short Term Loan Alternatives For Canadians", "headtxtcolor" => "white", "headalt" => "payday loans niagara falls ontario"];
          	SEOMeta::setTitle('The 3 Best Short Term Loan Alternatives For Canadians');
          	SEOMeta::setDescription('We all experience times when we are ‘cash-strapped’. For short term, ‘instant loans’, there are many choices open to you for Personal loans.');
          	SEOMeta::addKeyword('online personal loans, instant loan, payday loans, personal loan, borrowing money online');
          	return view('/blog/short-term-loan-alternatives', $data);
          }

          public function thiswinterisgoingtobetoughonyourwallet()
          {
          	 $data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => "This Winter is Going to be Tough on your Wallet, Canada", "headtxtcolor" => "white", "headalt" => "payday loans niagara falls ontario"];
          	 SEOMeta::setTitle('This Winter is Gping to be Tough on your Wallet, Canada');
          	 SEOMeta::setDescription('All of the global problems in winter 2021 are going to affect people\'s earnings negatively.');
          	 SEOMeta::addKeyword('Bad Credit Installment loans, pawn jewellery, payday loans Canada, online loans, instant wire transfer, instant loans, payday loans, personal loans, loans, payday loans, COVID-19, COVID, global supply chain problems,global supply chain, China');
          	 return view('/blog/this-winter-is-going-to-be-tough-on-your-wallet', $data);
          }

          public function yearendcelebrations()
          {
          	$data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => "How will your Finances Look after the Year End Celebrations", "headtxtcolor" => "white", "headalt" => "payday loans niagara falls ontario"];
          	SEOMeta::setTitle('How will your Finances Look after the Year End Celebrations');
          	SEOMeta::setDescription('Need a payday loan, or loan for bad credit for an emergency purchase. After the Annual year end celebrations, how will your bank account look - Healthy?');
          	SEOMeta::addKeyword('payday loan, online loans, loans in canada, loans near me, payday near me, loan calculator, cash check online instantly Canada, loans payday online, loans for bad credit, loans payday, online loans payday, payday loan near me, loan with bad credit, loans for bad credit, bad credit loans,  online personal loans, payday loans online, instant loan, payday loans, loans bad credit, personal loans, personal loan, borrowing money online');
          	return view('/blog/year-end-celebrations', $data);
          }

          public function thelowcostoption()
          {
          	$data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => "Payday Loans Niagara Falls, Ontario", "headtxtcolor" => "white", "headalt" => "payday loans niagara falls ontario"];
          	SEOMeta::setTitle('Payday Loans - The Low-Cost Option');
          	SEOMeta::setDescription('Need a payday loan, or loan for bad credit for an emergency purchase.');
          	SEOMeta::addKeyword('payday near me, cash check online instantly Canada, loans payday online, loans for bad credit, loans payday, online loans payday, payday loan near me, loan with bad credit, loans for bad credit, bad credit loans,  online personal loans, payday loans online, instant loan, payday loans, loans bad credit, personal loans, personal loan, borrowing money online');
          	return view('/blog/the-low-cost-option', $data);
          }

          public function accessingpersonalloan()
          {
          	$data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => "Payday Loans Niagara Falls, Ontario", "headtxtcolor" => "white", "headalt" => "payday loans niagara falls ontario"];
          	SEOMeta::setTitle('Accessing The Personal Loan Industry in Canada');
          	SEOMeta::setDescription('You need some cash – suddenly. It’s happened to all of us and is not a perfect financial situation to be in. Sometimes bills, expenses and unforeseen emergencies simply appear at the wrong times, forcing us to make choices between what we wish to spend (or need to!).');
          	SEOMeta::addKeyword('payday near me, cash check online instantly Canada, loans payday online, loans for bad credit, loans payday, online loans payday, payday loan near me, loan with bad credit, loans for bad credit, bad credit loans,  online personal loans, payday loans online, instant loan, payday loans, loans bad credit, personal loans, personal loan, borrowing money online');
          	return view('/blog/accessing-personal-loan', $data);
          }

          public function AreBadCreditLoansGoodForAnyone()
          {
          	$data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => ">Are Bad Credit Loans Good for Anyone?", "headtxtcolor" => "white", "headalt" => ">Are Bad Credit Loans Good for Anyone?"];
          	SEOMeta::setTitle('>Are Bad Credit Loans Good for Anyone?');
          	SEOMeta::setDescription('Should you need money to cover an unexpected bill, or if you need to borrow money but have poor credit, you might want to consider installment or no-credit check loans. These can be a fast form of funding, especially if you choose online loans with no credit check. Used wisely they could even help you rebuild your credit.');
          	SEOMeta::addKeyword('payday near me, cash check online instantly Canada, loans payday online, loans for bad credit, loans payday, online loans payday, payday loan near me, loan with bad credit, loans for bad credit, bad credit loans,  online personal loans, payday loans online, instant loan, payday loans, loans bad credit, personal loans, personal loan, borrowing money online');
          	return view('/blog/Are-Bad-Credit-Loans-Good-For-Anyone', $data);
          }

          public function FinancialNewYearsResolutions()
          {
          	$data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => ">Financial New Year’s Resolutions for All!", "headtxtcolor" => "white", "headalt" => ">Financial New Year’s Resolutions for All!"];
          	SEOMeta::setTitle('>Financial New Year’s Resolutions for All!');
          	SEOMeta::setDescription('How is your financial state at the end of 2021? Have you already made unreasonable resolutions to yourself to get things back under control next year? Do you have a plan? With COVID still with us in the form of the Omicron Variant, these last two years looks more and more like being ‘the norm’ for everyday life, but some of the restrictions we have become accustomed to could actually be your financial saviour and a great way to get your expenses more aligned with your expenses:');
          	SEOMeta::addKeyword('payday near me, cash check online instantly Canada, loans payday online, loans for bad credit, loans payday, online loans payday, payday loan near me, loan with bad credit, loans for bad credit, bad credit loans,  online personal loans, payday loans online, instant loan, payday loans, loans bad credit, personal loans, personal loan, borrowing money online');
          	return view('/blog/Financial-New-Years-Resolutions', $data);
          }

          public function AlternativeLoansForUnprecedentedTimes()
          {
          	$data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => ">Alternative Loans for Unprecedented Times", "headtxtcolor" => "white", "headalt" => ">Alternative Loans for Unprecedented Times"];
          	SEOMeta::setTitle('>Alternative Loans for Unprecedented Times');
          	SEOMeta::setDescription('In times of intense financial instability, such as the current one provided by the COVID19 crisis, sometimes you just need to borrow from yourself to continue your standard of living. You can take from your savings and reallocate your budget as best you can, but when the chips are down and your bank account is about to hit empty, you may have to resort to something more alternative.');
          	SEOMeta::addKeyword('payday near me, cash check online instantly Canada, loans payday online, loans for bad credit, loans payday, online loans payday, payday loan near me, loan with bad credit, loans for bad credit, bad credit loans,  online personal loans, payday loans online, instant loan, payday loans, loans bad credit, personal loans, personal loan, borrowing money online');
          	return view('/blog/Alternative-Loans-For-Unprecedented-Times', $data);
          }

          public function StepsToMasterYourPersonalFinances()
          {
          	$data = ["bannerbg" => "images/falls.jpg", "licpr" => "on", "spprov" => "Niagara Falls", "headpg" => ">5 Steps to Master Your Personal Finances", "headtxtcolor" => "white", "headalt" => ">5 Steps to Master Your Personal Finances"];
          	SEOMeta::setTitle('>5 Steps to Master Your Personal Finances');
          	SEOMeta::setDescription('Money is always on everyone’s mind: What you have, what you need and how you would spend more. In a recent survey from the Federal Government over 50% of Canadians have some kind of concern about money at any given time. Of course, after the last couple of years, this concern is rooted in the unknown: What is happening in your World that you can’t control and what effect will this have on your day-to-day finances?');
          	SEOMeta::addKeyword('payday near me, cash check online instantly Canada, loans payday online, loans for bad credit, loans payday, online loans payday, payday loan near me, loan with bad credit, loans for bad credit, bad credit loans,  online personal loans, payday loans online, instant loan, payday loans, loans bad credit, personal loans, personal loan, borrowing money online');
          	return view('/blog/Steps-To-Master-Your-Personal-Finances', $data);
          }

}
