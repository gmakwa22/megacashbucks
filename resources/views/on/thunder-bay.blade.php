@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Thunder Bay Ontario</p>
				<h2 class="small-title">Thunder Bay’s Best PayDay Loans</h2>
				<p class="text text-justify">Our Payday Loans in Thunder Bay Ontario can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Thunder Bay or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Thunder Bay. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/TbJ9bZOlqu4" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d339050.1690792695!2d-89.52070492670127!3d48.402218387314356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d5921774c16e98d%3A0x3d0557348f1d8b74!2sThunder%20Bay%2C%20ON!5e0!3m2!1sen!2sca!4v1637966905716!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>



      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Thunder Bay, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g155017-Activities-Thunder_Bay_Thunder_Bay_District_Ontario.html" target="_blank" >- Best Attractions in Thunder Bay, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g155017-Thunder_Bay_Thunder_Bay_District_Ontario.html" target="_blank" >- Best Places to Eat in Thunder Bay, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.visitthunderbay.com/en/see-and-do/shopping.aspx" target="_blank" >- Best Places to Go Shopping in Thunder Bay, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.thunderbay.ca/en/city-services/transit.aspx" target="_blank" >- Public Transportation Options in Thunder Bay, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.hiexpress.com/hotels/us/en/find-hotels/hotel/list?fromRedirect=true&qSrt=sBR&qIta=99634581&icdv=99634581&qDest=Thunder%20Bay,%20Canada&setPMCookies=true&dp=true&gclid=EAIaIQobChMIvYOD6d7M8wIVghx9Ch1QdwfEEAAYASAAEgKMYfD_BwE&cm_mmc=PDSEA-_-G%7CF-AMER%7CFS-USA%7CH-AMER%7CHS-CAN%7CEX%7CNBI%7CEXM%7CHOTEL-YQTHB&srb_u=1" target="_blank" >- Best Places to Stay in Thunder Bay, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.visitthunderbay.com/en/see-and-do/family-fun.aspx" target="_blank" >- Best Things to do with the Kids in Thunder Bay, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tbnewswatch.com/" target="_blank" >- Local News for Thunder Bay, Ontario</a></li>
					<li class="list-group-item"><a href="https://weather.gc.ca/city/pages/on-100_metric_e.html" target="_blank" >- Weather in Thunder Bay, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
