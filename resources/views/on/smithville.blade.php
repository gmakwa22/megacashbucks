@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Smithville Ontario</p>
				<h2 class="small-title">Smithville’s Best PayDay Loans</h2>
				<p class="text text-justify">{{ $privname ?? "Mega Cash Bucks" }} has brought Smithville Ontarians a great solution. In fact, two of them! We have a Payday Loans Smithville. This is one you can pay back in a single installment.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Smithville or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Smithville. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/li1VXMRItVo" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23306.910427220584!2d-79.56825533605473!3d43.096868865218674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882cb0c1e1f0767d%3A0xa317205ad28297c8!2sSmithville%2C%20ON%20L0R%202A0!5e0!3m2!1sen!2sca!4v1637802394458!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Smithville, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.expedia.ca/Things-To-Do-In-Smithville.d3000438459.Travel-Guide-Activities" target="_blank" rel="nofollow noopener">- Best Attractions in Smithville, Ontario</a></li>
					<li class="list-group-item"><a href="https://restaurantguru.com/Smithville-Ontario" target="_blank" rel="nofollow noopener">- Best Places to Eat in Smithville, Ontario</a></li>
					<li class="list-group-item"><a href="https://m.yelp.com/search?cflt=shopping&find_loc=Smithville%2C+ON+L0R" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Smithville, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.rome2rio.com/s/Smithville-ON-Canada/Mississauga" target="_blank" rel="nofollow noopener">- Public Transportation Options in Smithville, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g3930604-Smithville_Ontario-Hotels.html" target="_blank" rel="nofollow noopener">- Best Places to Stay in Smithville, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.canadiankidsactivities.com/directory/location/ontario/niagara/smithville/" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Smithville, Ontario</a></li>
					<li class="list-group-item"><a href="https://globalnews.ca/tag/smithville/" target="_blank" rel="nofollow noopener">- Local News for Smithville, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/ontario/smithville" target="_blank" rel="nofollow noopener">- Weather in Smithville, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection