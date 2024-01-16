@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Eastend Saskatchewan</p>
				<h2 class="small-title">Eastend’s Best PayDay Loans</h2>
				<p class="text text-justify">Our Payday Loans in Eastend Saskatchewan can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Eastend or across Saskatchewan.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Eastend. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/FbFzwZCnPXU" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20722.448333177414!2d-108.84015847202296!3d49.51649767886048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x531414d05e82e137%3A0x88b1d59d92484a66!2sEastend%2C%20SK!5e0!3m2!1sen!2sca!4v1638388266266!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>


      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Eastend, SK</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g2079956-Activities-Eastend_Saskatchewan.html" target="_blank"   >- Best Attractions in Eastend, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://restaurantguru.com/Eastend" target="_blank"   >- Best Places to Eat in Eastend, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://townofeastend.com/p/business-directory" target="_blank"   >- Best Places to Go Shopping in Eastend, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://townofeastend.com/p/transit-van-service" target="_blank"   >- Public Transportation Options in Eastend, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g2079956-c2-Eastend_Saskatchewan-Hotels.html" target="_blank"   >- Best Places to Stay in Eastend, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g2079956-Activities-Eastend_Saskatchewan.html" target="_blank"   >- Best Things to do with the Kids in Eastend, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://globalnews.ca/tag/eastend/" target="_blank"   >- Local News for Eastend, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://weather.gc.ca/city/pages/sk-45_metric_e.html" target="_blank"   >- Weather in Eastend, Saskatchewan</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
