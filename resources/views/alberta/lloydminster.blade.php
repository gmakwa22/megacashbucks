@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">lloydminster Alberta</p>
				<h2 class="small-title">lloydminster’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in lloydminster or across Alberta.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in lloydminster. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/lYk_8K3TOck" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about lloydminster, AB</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g182152-Activities-Lloydminster_Alberta.html" target="_blank"   >- Best Attractions in lloydminster, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g182152-Lloydminster_Alberta.html" target="_blank"   >- Best Places to Eat in lloydminster, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.yelp.ca/search?cflt=shopping&find_loc=Lloydminster%2C+AB" target="_blank"   >- Best Places to Go Shopping in lloydminster, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.lloydminster.ca/en/living-in-lloydminster/transportation.aspx" target="_blank"   >- Public Transportation Options in lloydminster, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.booking.com/searchresults.en-gb.html?aid=306395;label=lloydminster-wrVM41NywJt9IVBzpWLTrgS392664050109%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-297601666995%3Akwd-4648240084%3Alp9001551%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YZVcNNsENnH02-pWD53qm9c;sid=b515e3f781e019b3df1a697071b19db0;city=-568143;redirected=1;redirected_from_city=1;source=city&" target="_blank"   >- Best Places to Stay in lloydminster, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.triphobo.com/places/lloydminster-canada/things-to-do" target="_blank"   >- Best Things to do with the Kids in lloydminster, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.lloydminster.ca/Modules/news/en" target="_blank"   >- Local News for lloydminster, Alberta</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/alberta/lloydminster" target="_blank"   >- Weather in lloydminster, Alberta</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
