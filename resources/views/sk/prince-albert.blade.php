@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Prince Albert Saskatchewan</p>
				<h2 class="small-title">Prince Albert’s Best PayDay Loans</h2>
				<p class="text text-justify">Our Payday Loans in Prince Albert Saskatchewan can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Prince Albert or across Saskatchewan.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Prince Albert. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/CBeqabZaTi8" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152899.94053723908!2d-105.81182810290096!3d53.216744376164975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53010585d23add25%3A0xc30c9c446135fe27!2sPrince%20Albert%2C%20SK!5e0!3m2!1sen!2sca!4v1640048296587!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>


      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Prince Albert, SK</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g155041-Activities-Prince_Albert_Saskatchewan.html" target="_blank"   >- Best Attractions in Prince Albert, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.restaurantji.com/sk/prince-albert/" target="_blank"   >- Best Places to Eat in Prince Albert, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://business.princealbertchamber.com/list/ql/shopping-specialty-retail-23" target="_blank"   >- Best Places to Go Shopping in Prince Albert, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.citypa.ca/en/parking-streets-and-transportation/transit.aspx" target="_blank"   >- Public Transportation Options in Prince Albert, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g155041-Prince_Albert_Saskatchewan-Hotels.html" target="_blank"   >- Best Places to Stay in Prince Albert, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://www.familydaysout.com/kids-things-to-do-canada/saskatchewan" target="_blank"   >- Best Things to do with the Kids in Prince Albert, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://panow.com/news-prince-albert/" target="_blank"   >- Local News for Prince Albert, Saskatchewan</a></li>
					<li class="list-group-item"><a href="https://weather.gc.ca/city/pages/sk-27_metric_e.html" target="_blank"   >- Weather in Prince Albert, Saskatchewan</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
