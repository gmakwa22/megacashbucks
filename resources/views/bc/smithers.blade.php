<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Smithers British Columbia</p>
				<h2 class="small-title">Smithers’s Best PayDay Loans</h2>
				<p class="text text-justify">If you’re looking for a Payday Loans Smithers, British Columbia with a trusted, direct lender, {{ $privname ?? "Mega Cash Bucks" }} is the company for you.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Smithers or across British Columbia.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Smithers. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>



@include('bc.bc-cities')
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
           <iframe src="https://www.youtube.com/embed/ZA8ktdEE1SI" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73611.88291877971!2d-127.22923331256872!3d54.79101698360465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x547509629c5d2717%3A0xa65b2375f04cb24f!2sSmithers%2C%20BC!5e0!3m2!1sen!2sca!4v1635203226612!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Smithers, BC</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://tourismsmithers.com/things-to-do" target="_blank" >- Best Attractions in Smithers, British Columbia</a></li>
					<li class="list-group-item"><a href="https://tourismsmithers.com/things-to-do/eat-drink" target="_blank" >- Best Places to Eat in Smithers, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g499148-Activities-c26-Smithers_British_Columbia.html" target="_blank" >- Best Places to Go Shopping in Smithers, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.bctransit.com/smithers/home" target="_blank" >- Public Transportation Options in Smithers, British Columbia</a></li>
					<li class="list-group-item"><a href="https://tourismsmithers.com/places-to-sleep/hotels-motels/" target="_blank" >- Best Places to Stay in Smithers, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g499148-Activities-zft11306-Smithers_British_Columbia.html" target="_blank" >- Best Things to do with the Kids in Smithers, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.interior-news.com/" target="_blank" >- Local News for Smithers, British Columbia</a></li>
					<li class="list-group-item"><a href="https://weather.gc.ca/city/pages/bc-82_metric_e.html" target="_blank" >- Weather in Smithers, British Columbia</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
