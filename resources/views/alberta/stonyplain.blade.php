@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Stony Plain Alberta</p>
				<h2 class="small-title">Stony Plain’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Stony Plain or across Alberta.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Stony Plain. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>
@include('provcity.alberta-cities')
			</div>
		</div>
</section>

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.whatsthebest')
@elseif ($random == 2)
    @include('round.bestboxes')
@else
    @include('round.fivereasons')
@endif

<section class="marketing-service gray-bg page-section-ptb">
  <div class="container">
     <div class="row">
      <div class="col-lg-6">
        <br><br>
         <div class="js-video [youtube, widescreen]">
           <iframe src="https://www.youtube.com/embed/lbd61YlNafM" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Stony Plain, AB</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g499111-Activities-Stony_Plain_Alberta.html" target="_blank" rel="nofollow noopener">- Best Attractions in Stony Plain, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g1034759-Stony Plain_Alberta.html" target="_blank" rel="nofollow noopener">- Best Places to Eat in Stony Plain, Alberta</a></li>
					<li class="list-group-item"><a href="https://linda-hoang.com/shopping-guide-to-stony-plain-alberta-a-surprising-and-delightful-hub-for-local-shops/" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Stony Plain, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.stonyplain.com/en/live/transit-services.aspx" target="_blank" rel="nofollow noopener">- Public Transportation Options in Stony Plain, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g499111-Stony_Plain_Alberta-Hotels.html" target="_blank" rel="nofollow noopener">- Best Places to Stay in Stony Plain, Alberta</a></li>
					<li class="list-group-item"><a href="https://kids.kiddle.co/Stony_Plain,_Alberta" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Stony Plain, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.stonyplain.com/Modules/News/Search.aspx?feedId=cf48a381-eac7-4f7f-8fcb-7a96d5d0bc6c&_mid_=647" target="_blank" rel="nofollow noopener">- Local News for Stony Plain, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/alberta/stony-plain" target="_blank" rel="nofollow noopener">- Weather in Stony Plain, Alberta</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
