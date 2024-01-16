@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">California</p>
				<h2 class="small-title">Payday Loans California</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$corpname}} Loans. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$corpname}} Loans is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in California or across CA.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in California. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in California. Look forward to more great Payday Loans California opportunities as we work to make your financial life easier and happier.</p>
					<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in California. Look forward to more great Payday Loans California opportunities as we work to make your financial life easier and happier.</p>

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
           <iframe src="https://www.youtube.com/embed/Z9Rs9ZFcZeM" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
			<h3>Helpful information about California, CA</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.planetware.com/tourist-attractions/california-usca.htm" target="_blank" >- Best Attractions in California, CA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g28926-Activities-c26-t143-California.html" target="_blank" >- Best Steakhouse in California, CA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g28926-Activities-c26-t143-California.html" target="_blank" >- Best Places to Go Shopping in California, CA</a></li>
		<li class="list-group-item"><a href="https://www.lonelyplanet.com/articles/how-to-get-around-california" target="_blank" >- Public Transportation Options in California, CA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g28926-California-Hotels.html" target="_blank" >- Best Places to Stay in California, CA</a></li>
		<li class="list-group-item"><a href="https://travelmamas.com/california-with-kids/" target="_blank" >- Best Things to do with the Kids in California, CA</a></li>
		<li class="list-group-item"><a href="https://www.google.com/aclk?sa=l&ai=DChcSEwjg6Ybnh8P8AhULDucKHbVVAbgYABABGgJwdg&sig=AOD64_0FXtyU5n6GdfvAjrAwXXFIkOtMdQ&q&adurl&ved=2ahUKEwiDlv_mh8P8AhV6GTQIHXXZCTIQ0Qx6BAgKEAE" target="_blank" >- Local News for California, CA</a></li>
		<li class="list-group-item"><a href="https://www.theweathernetwork.com/us/weather/california/los-angeles" target="_blank" >- Weather in California, CA</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
