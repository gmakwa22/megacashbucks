@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Ohio</p>
				<h2 class="small-title">Payday Loans Ohio</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$corpname}} Loans. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$corpname}} Loans is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, accross Ohio.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Ohio. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Ohio. Look forward to more great Payday Loans Ohio opportunities as we work to make your financial life easier and happier.</p>
					<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Ohio. Look forward to more great Payday Loans Ohio opportunities as we work to make your financial life easier and happier.</p>

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
           <iframe src="https://www.youtube.com/embed/r2PJMWgD9pw" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
			<h3>Helpful information about Ohio</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g28956-Activities-Ohio.html" target="_blank" >- Best Attractions in Ohio</a></li>
		<li class="list-group-item"><a href="https://www.opentable.com/cuisine/best-steakhouse-restaurants-columbus-oh" target="_blank" >- Best Steakhouse in Ohio</a></li>
		<li class="list-group-item"><a href="https://www.ohiotraveler.com/ohio-shopping/" target="_blank" >- Best Places to Go Shopping in Ohio</a></li>
		<li class="list-group-item"><a href="https://www.transportation.ohio.gov/" target="_blank" >- Public Transportation Options in Ohio</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g28956-Ohio-Hotels.html" target="_blank" >- Best Places to Stay in Ohio</a></li>
		<li class="list-group-item"><a href="https://whatshouldwedotodaycolumbus.com/fun-things-to-do-in-ohio-with-kids/" target="_blank" >- Best Things to do with the Kids in Ohio</a></li>
		<li class="list-group-item"><a href="https://www.foxnews.com/category/us/us-regions/midwest/ohio" target="_blank" >- Local News for Ohio</a></li>
		<li class="list-group-item"><a href="https://www.theweathernetwork.com/us/weather/ohio/columbus" target="_blank" >- Weather in Ohio</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
