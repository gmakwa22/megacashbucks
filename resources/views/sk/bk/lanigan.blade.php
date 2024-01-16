@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Lanigan Saskatchewan</p>
				<h2 class="small-title">Lanigan’s Best PayDay Loans</h2>
				<p class="text text-justify">If you’re looking for a Payday Loans in Lanigan Saskatchewan with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Lanigan or across Saskatchewan.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Lanigan. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/9x-qTBP9YEI" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39434.61132526879!2d-105.06797594444903!3d51.84884630120798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53032e3cd37fd3df%3A0xbfeb83bfff6afb5f!2sLanigan%2C%20SK%20S0K%202M0!5e0!3m2!1sen!2sca!4v1638560634590!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>


      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Lanigan, SK</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tourismsaskatchewan.com/community/118/lanigan" target="_blank" >- Best Attractions in Lanigan, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g1746115-Lanigan_Saskatchewan.html" target="_blank" >- Best Places to Eat in Lanigan, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://saskatchewan.canadaspots.com/lanigan/shops" target="_blank" >- Best Places to Go Shopping in Lanigan, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.saskatchewan.ca/residents/transportation/public-transportation" target="_blank" >- Public Transportation Options in Lanigan, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g1746115-Lanigan_Saskatchewan-Hotels.html" target="_blank" >- Best Places to Stay in Lanigan, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.familydaysout.com/kids-things-to-do-canada/saskatchewan" target="_blank" >- Best Things to do with the Kids in Lanigan, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://globalnews.ca/tag/lanigan-saskatchewan/" target="_blank" >- Local News for Lanigan, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/saskatchewan/lanigan" target="_blank" >- Weather in Lanigan, Saskatchewan</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
