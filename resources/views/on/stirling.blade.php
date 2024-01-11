@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Stirling Ontario</p>
				<h2 class="small-title">Stirling’s Best PayDay Loans</h2>
				<p class="text text-justify">If you’re looking for a Payday Loans Stirling Ontario with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Stirling or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Stirling. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/ey5vNUXpR7k" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22846.973409299135!2d-77.57563193355682!3d44.29202781267678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6203cfad40527%3A0xf6a11651f8a56556!2sStirling%2C%20ON!5e0!3m2!1sen!2sca!4v1637953848552!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Stirling, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g1568673-Activities-Stirling_Ontario.html" target="_blank" rel="nofollow noopener">- Best Attractions in Stirling, Ontario</a></li>
					<li class="list-group-item"><a href="https://restaurantguru.com/Stirling-Ontario" target="_blank" rel="nofollow noopener">- Best Places to Eat in Stirling, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.com/Attractions-g1568673-Activities-c26-Stirling_Ontario.html" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Stirling, Ontario</a></li>
					<li class="list-group-item"><a href="http://www.stirling-rawdon.com/wp-content/uploads/2019/02/Central-Hastings-Public-Transit-Information-Schedule.pdf" target="_blank" rel="nofollow noopener">- Public Transportation Options in Stirling, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotel_Review-g1568673-d3476418-Reviews-Stirling_Rawdon_Bed_Breakfast-Stirling_Ontario.html" target="_blank" rel="nofollow noopener">- Best Places to Stay in Stirling, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.canadiankidsactivities.com/directory/location/ontario/hastings/stirling/" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Stirling, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.communitypress.ca/category/news/local-news/" target="_blank" rel="nofollow noopener">- Local News for Stirling, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/ontario/stirling" target="_blank" rel="nofollow noopener">- Weather in Stirling, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
