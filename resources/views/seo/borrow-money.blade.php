<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<h1>GET YOUR MONEY IN A SNAP</h1>
				<h2 class="small-title">Borrowing the Quick Way</h2>
				<p class="text text-justify">We know that you have your own special financial concerns that are unique to you, that’s why our short-term loan business is geared to meet your personal needs. </p>
				<p class="text text-justify">Even a bad credit score, whether it’s fairly earned or not, doesn’t have to be an obstacle to getting the money you need, when you need it. As a responsible lender, we know that our job is to see the big picture. Whatever happened in the past, if our evaluation of your overall financial situation indicates that today you can repay your loan, we can provide you the funds you need in an instant.</p>
				<p class="text text-justify">It’s fast, easy and convenient. As a direct lender that operates fully online, you can get those funds you need without having to go through a bunch of rigmarole. You can apply from the couch, during the commercial breaks of your favourite TV show. </p>
				<p class="text text-justify">There will be no death-by-document-overkill with us. All we need is your basic employment and financial facts. Our advanced algorithm does all the rest. With the ability to borrow as much as $1,500, without having to wait in line at some counter for an hour, we bring the loaning service of the future to you today. </p>
			</div>
		</div>
</section>

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.whatsthebest')
@elseif ($random == 2)
    @include('round.onlineborrowingmadeeasy')
@else
    @include('round.fivereasons')
@endif

@include('round.eligible')


@include('round.nocreditcheck')

@include('round.new-agent')
