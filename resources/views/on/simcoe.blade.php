@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Simcoe Ontario</p>
				<h2 class="small-title">Simcoe’s Best PayDay Loans</h2>
				<p class="text text-justify">{{ $privname ?? "Mega Cash Bucks" }} has developed an innovative, 24 Hour Payday Loans in Simcoe Ontario process that allows Simcoe residents to apply, get approved, and receive their funds, all in the same day.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Simcoe or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Simcoe. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>


@include('on.ontario-cities')
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
         <div class="js-video [youtube, widescreen]">
           <iframe src="https://www.youtube.com/embed/KkjnHv4X-XY" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46807.82668207242!2d-80.34327107501325!3d42.84140331417712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882c4dd912b421b7%3A0xee3f7047d3a83ff5!2sSimcoe%2C%20ON!5e0!3m2!1sen!2sca!4v1637800300787!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Simcoe, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g181739-Activities-Simcoe_Norfolk_County_Ontario.html" target="_blank" rel="nofollow noopener">- Best Attractions in Simcoe, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.restaurantji.com/on/simcoe/" target="_blank" rel="nofollow noopener">- Best Places to Eat in Simcoe, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.simcoetowncentre.com/stores" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Simcoe, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.rome2rio.com/s/Hamilton-ON-Canada/Simcoe" target="_blank" rel="nofollow noopener">- Public Transportation Options in Simcoe, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g181739-Simcoe_Norfolk_County_Ontario-Hotels.html" target="_blank" rel="nofollow noopener">- Best Places to Stay in Simcoe, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g6654037-Activities-zft11306-Norfolk_County_Ontario.html" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Simcoe, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.simcoereformer.ca/category/news/local-news/" target="_blank" rel="nofollow noopener">- Local News for Simcoe, Ontario</a></li>
					<li class="list-group-item"><a href="https://weather.gc.ca/city/pages/on-161_metric_e.html" target="_blank" rel="nofollow noopener">- Weather in Simcoe, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
