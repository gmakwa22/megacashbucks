@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Picton Ontario</p>
				<h2 class="small-title">Picton’s Best PayDay Loans</h2>
				<p class="text text-justify">Picton Ontario {{ $privname ?? "Mega Cash Bucks" }} Payday Loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Picton or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Picton. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/r-LTu01NFbg" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22958.85345321879!2d-77.1609842341644!3d44.003688563077105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d7ca458f9f3a17%3A0x5b1272fd320ecfd2!2sPicton%2C%20Prince%20Edward%2C%20ON%20K0K%202T0!5e0!3m2!1sen!2sca!4v1637782236511!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Picton, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.com/Attractions-g183797-Activities-Picton_Prince_Edward_County_Ontario.html" target="_blank" rel="nofollow noopener">- Best Attractions in Picton, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.restaurantji.com/on/picton/" target="_blank" rel="nofollow noopener">- Best Places to Eat in Picton, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.experiencepicton.com/Shopping" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Picton, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.rome2rio.com/s/Toronto/Picton-ON-Canada" target="_blank" rel="nofollow noopener">- Public Transportation Options in Picton, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.booking.com/city/ca/picton.html" target="_blank" rel="nofollow noopener">- Best Places to Stay in Picton, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g183797-Activities-zft11306-Picton_Prince_Edward_County_Ontario.html" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Picton, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.countyweeklynews.ca/category/news/" target="_blank" rel="nofollow noopener">- Local News for Picton, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/ontario/picton" target="_blank" rel="nofollow noopener">- Weather in Picton, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
