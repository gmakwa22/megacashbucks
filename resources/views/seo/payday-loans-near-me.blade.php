<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
	<h2 class="title center text-center" style="color:#b2752d; font-weight: 700; font-size: 50px;">THE PAYDAY SOLUTION THAT WORKS</h2><br>
	<h2 class="small-title center text-center">Get up to $1,500. Low Rates. 5 minutes e-transfer</h2><br>
				<p class="text text-justify">Some people go searching for “payday loan near me.” Those days, thankfully, are finally over. No longer is anybody limited by their geographic location to the kind of borrowing option that are available to them. With our instant, online service, {{$privname}} makes short term loans available to anyone, anywhere, any time of day. And you can do it all from the comfort and convenience of your office or sofa. </p>
				<p class="text text-justify">So, next time you start typing into that browser “payday loan near me,” remember, that’s the internet – it brings the world to your doorstep. Applying with us gives you access to a lending process that is lightning fast. You’ll have a range of loan amount options, repayment options and terms, which allow you to tailor your loan to your needs. Most of the time the whole thing is done in an hour. And after you’re approved, and sign your electronic contract, you’ll see those funds in your bank account, by e-transfer, in just 5 to 10 minutes. </p>
				<p class="text text-justify">And if that “payday loan near me” search was because you were looking for someone you could trust, don’t worry about that. We’re a fully licensed direct lender, in compliance with all federal and provincial government regulation. That means a borrowing experience for you that is safe, transparent, and easy.

				</p>
<br>



				<div class="col-lg-12">
				          <div class="title mb-30">
				           <h5>Questions & Answers</h5>
				         </div>
				            <div class="accordion animated">
				              <div class="acd-group acd-active">
				                  <a href="#" class="acd-heading">Are there loan application requirements?</a>
				                  <div class="acd-des" style="">
														<p>Our eligibly requirements are basic. All we ask is that you:</p>
														<ul>
														<li>Are a Canadian citizen.
														Live in a province where we do business.<a href="/payday-loans-alberta" target="_blank" rel="noopener">Alberta</a>, <a href="/payday-loans-british-columbia" target="_blank" rel="noopener">British Columbia</a>,
														<!-- <a href="/payday-loans-new-brunswick" target="_blank" rel="noopener">New Brunswick</a>,  -->
														and <a href="/payday-loans-ontario" target="_blank" rel="noopener">Ontario</a>.</li>
														<li>Are 19 years of age or more.</li>
														<li>Received the same income source for at least 3 months.</li>
														<li>Have at least a monthly net income of $800.</li>
														<li>Are in possession of a Canadian bank account for the last 3 months from which you can do online banking.</li>
														<li>Have valid email and home address, and a mobile phone.</li>
														</ul>

													</div>
				              </div>
				              <div class="acd-group">
				                  <a href="#" class="acd-heading">What if I have bad credit?</a>
				                  <div class="acd-des" style="display: none;">Don’t be discouraged by bad credit ratings. That’s just one factor we consider. Just because things went badly for you in the past doesn’t mean you’re not able to repay today. We use our advanced algorithm to take in the whole financial picture of your situation. But of course, we don’t want to contribute to making your situation worse, so our Code of Conduct directs us to never loan you any money we don’t think you’ll be able to repay.</div>
				              </div>
				              <div class="acd-group">
				                  <a href="#" class="acd-heading">Where can I visit your office?</a>
				                  <div class="acd-des" style="display: none;"><p>Our business is completely streamlined, digital and online. <br><br>
													Lucky for you that it is! Since we don’t have all that overhead, we can offer you great interest rates for loans available night and day. The whole process can be done in less than hour, from the comfort of your armchair.</div>
				              </div>
											<div class="acd-group">
				                  <a href="#" class="acd-heading">My province isn’t listed on your site?</a>
				                  <div class="acd-des" style="display: none;">If you’re unsure about whether we provide service in your province, drop us a note on the Contact Us page. We’ll make sure everything is straightened out.</div>
				              </div>
											<div class="acd-group">
													<a href="#" class="acd-heading">How’s repayment handled?</a>
													<div class="acd-des" style="display: none;">We make repayment as easy as a dream. Once repayment day arrives, we will simply debit the amount stipulated in your loan agreement out of the same bank account into which we made the original loan. All you have to do is be sure there are sufficient funds to cover the repayment. Other than that, there’s nothing for you to worry about.</div>
											</div>
				          </div>
				        </div>

			</div>
		</div>
</section>

@include('round.installment')

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.whatsthebest')
@elseif ($random == 2)
    @include('round.eligible')
@else
    @include('round.fivereasons')
@endif




@include('round.nocreditcheck')

@include('round.new-agent')
