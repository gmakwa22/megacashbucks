<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<h2 class="title center text-center" style="color:#b2752d; font-weight: 700; font-size: 50px;">Why Choose {{$privname}}</h2><br>
				<h2 class="small-title center text-center">That alternative to the old payday loan that you’ve been waiting for</h2><br>
				<p class="text text-justify">At {{$privname}}, we know how important flexibility is to financial success. We take into consideration all the relevant details of your financial situation to ensure whichever of our repayment plans you choose, we can keep your rate as low as possible. Whether you’re borrowing $100 or $1500, repaying in a single payment or 2 or 3 installments, our advanced algorithm is working out the best rate for your situation.
				</p>
				<p class="text text-justify">If you’re worried that your credit score may prevent you from having access to our great short-term loans, don’t tie yourself in knots over that. A credit score is a result of what happened back some time in the past. This is now and if you can repay a loan today why shouldn’t you have the opportunity to deal with the unexpected financial challenges that we all have to cope with from time to time? That’s why we look at the big picture of your financial situation. </p>
				<p class="text">Our repayment options help you find a solution to your financial challenges that will help keep those rates down. Have a closer look and you’ll be pleasantly surprised at how competitive our rates are.
				</p>
				<p class="text text-justify">People are surprised to discover that often our rates actually beat out what they’d pay one of the major credit cards. You can have access to the funds to make your financial life more pleasant, without excessive fees, as long as you meet the repayment plan that you choose in your loan agreement.
				</p>


			</div>
		</div>
</section>

@include('round.applyandapprove')

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

@include('round.loan-fees')


@include('round.nocreditcheck')

@include('round.new-agent')
