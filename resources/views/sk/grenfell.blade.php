@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Grenfell Saskatchewan</p>
				<h2 class="small-title">Grenfell’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need Cash Money in Grenfell Saskatchewan for unexpected expenses.</p>
				<p class="text text-justify">If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Grenfell or across Saskatchewan.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Grenfell. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>
@include('provcity.sk-cities')
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
           <iframe src="https://www.youtube.com/embed/DzfTuifxtNI" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20340.979398050957!2d-102.94914401995278!3d50.410873936060504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52e1e5a7a1534845%3A0xd4a1eefa0075c9df!2sGrenfell%2C%20SK%20S0G%202B0!5e0!3m2!1sen!2sca!4v1638399228448!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>


      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Grenfell, SK</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g1202767-Activities-Grenfell_Saskatchewan.html" target="_blank" rel="nofollow noopener">- Best Attractions in Grenfell, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://restaurantguru.com/Grenfell-Saskatchewan" target="_blank" rel="nofollow noopener">- Best Places to Eat in Grenfell, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://townofgrenfell.com/p/business-directory-" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Grenfell, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.rome2rio.com/s/Grenfell/Saskatoon" target="_blank" rel="nofollow noopener">- Public Transportation Options in Grenfell, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g1202767-Grenfell_Saskatchewan-Hotels.html" target="_blank" rel="nofollow noopener">- Best Places to Stay in Grenfell, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://townofgrenfell.com/p/attractions-" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Grenfell, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://globalnews.ca/tag/grenfell/" target="_blank" rel="nofollow noopener">- Local News for Grenfell, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/saskatchewan/grenfell" target="_blank" rel="nofollow noopener">- Weather in Grenfell, Saskatchewan</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
