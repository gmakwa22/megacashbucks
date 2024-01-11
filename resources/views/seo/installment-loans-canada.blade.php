<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<h1 class="title center text-center" style="color:#b2752d; font-weight: 700; font-size: 50px;">LOW RATE INSTALLMENT LOANS</h1><br>
				<h2 class="small-title center text-center">That alternative to the old payday loan that you’ve been waiting for</h2><br>
				<p class="text">At {{$privname}}, we know how important flexibility is to financial success. We take into consideration all the relevant details of your financial situation to ensure whichever of our repayment plans you choose, we can keep your rate as low as possible. Whether you’re borrowing $100 or $1,500, repaying in a single payment or 2 or 3 installments, our advanced algorithm is working out the best rate for your situation.
				</p>
				<p class="text">If you’re worried that your credit score may prevent you from having access to our great short-term loans, don’t tie yourself in knots over that. A credit score is a result of what happened back some time in the past. This is now and if you can repay a loan today why shouldn’t you have the opportunity to deal with the unexpected financial challenges that we all have to cope with from time to time? That’s why we look at the big picture of your financial situation. </p>
				<p class="text">Our repayment options help you find a solution to your financial challenges that will help keep those rates down. Have a closer look and you’ll be pleasantly surprised at how competitive our rates are.
				</p>
				<p class="text">People are surprised to discover that often our rates actually beat out what they’d pay one of the major credit cards. You can have access to the funds to make your financial life more pleasant, without excessive fees, as long as you meet the repayment plan you choose in your loan agreement.
				</p>
<br>
				<div class="col-lg-12">
				          <div class="title mb-30">
				           <h5>Questions & Answers</h5>
				         </div>
				            <div class="accordion animated">
				              <div class="acd-group acd-active">
				                  <a href="#" class="acd-heading">01. Will my rates be higher with installments?</a>
				                  <div class="acd-des" style="">We offer you the choice of repaying in installments of 1, 2 or 3. Whichever works best for you is great with us. And best of all, your choice has no affect at all on your interest rates. They’re all exactly the same. We want to make your borrowing experience the best that we can make it.</div>
				              </div>
				              <div class="acd-group">
				                  <a href="#" class="acd-heading">02. My province isn’t listed on your site?</a>
				                  <div class="acd-des" style="display: none;">The provinces have their own regulations on interest rates. As a licensed direct lender, we are in compliance with all provincial, and federal, regulation and law. This is part of our commitment to responsible, transparent and ethical lending.  </div>
				              </div>
				              <div class="acd-group">
				                  <a href="#" class="acd-heading">03. Can I get help applying?</a>
				                  <div class="acd-des" style="display: none;">We’re dedicated to helping you be the best-informed borrower you can possibly be. Our website is loaned with great information and tools to help you through the process. See our FAQ page to find answers to the questions regularly asked us by folks just like you.</div>
				              </div>
											<div class="acd-group">
				                  <a href="#" class="acd-heading">04. What term can I get?</a>
				                  <div class="acd-des" style="display: none;">To provide our customers as much flexibility and convenience as we can, we provide loan terms that range from 7 to 62 days. And, bonus, the range you choose will not change your interest rate.</div>
				              </div>
											<div class="acd-group">
													<a href="#" class="acd-heading">05. Why is my interest different from other provinces?</a>
													<div class="acd-des" style="display: none;">The provinces have their own regulations on interest rates. As a licensed direct lender, we are in compliance with all provincial, and federal, regulation and law. This is part of our commitment to responsible, transparent and ethical lending. </div>
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
