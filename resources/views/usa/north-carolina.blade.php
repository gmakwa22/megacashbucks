@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Illinois</p>
				<h2 class="small-title">Payday Loans Illinois</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$corpname}} Loans. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$corpname}} Loans is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, accross Illinois.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Illinois. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Illinois. Look forward to more great Payday Loans Illinois opportunities as we work to make your financial life easier and happier.</p>
					<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Illinois. Look forward to more great Payday Loans Illinois opportunities as we work to make your financial life easier and happier.</p>

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
           <iframe src="https://www.youtube.com/embed/NpIRnYqUXmE" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
			<h3>Helpful information about Illinois</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.attractionsofamerica.com/attractions/illinois.php" target="_blank" >- Best Attractions in Illinois</a></li>
		<li class="list-group-item"><a href="https://www.onlyinyourstate.com/illinois/steakhouses-in-il/" target="_blank" >- Best Steakhouse in Illinois</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.com/Attractions-g28934-Activities-c26-Illinois.html" target="_blank" >- Best Places to Go Shopping in Illinois</a></li>
		<li class="list-group-item"><a href="https://idot.illinois.gov/" target="_blank" >- Public Transportation Options in Illinois</a></li>
		<li class="list-group-item"><a href="https://www.booking.com/region/us/illinois.html" target="_blank" >- Best Places to Stay in Illinois</a></li>
		<li class="list-group-item"><a href="https://familydestinationsguide.com/fun-things-to-do-in-illinois-with-kids/" target="_blank" >- Best Things to do with the Kids in Illinois</a></li>
		<li class="list-group-item"><a href="https://www.foxnews.com/category/us/us-regions/midwest/illinois" target="_blank" >- Local News for Illinois</a></li>
		<li class="list-group-item"><a href="https://www.weather.gov/ilx/" target="_blank" >- Weather in Illinois</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
