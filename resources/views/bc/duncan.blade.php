<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Duncan British Columbia</p>
				<h2 class="small-title">Duncan’s Best PayDay Loans</h2>
				<p class="text text-justify">Look forward to more great Payday Loans in British Columbia No Credit Check opportunities as we work to make your financial life easier and happier.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Duncan or across British Columbia.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Duncan. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/S8zAIgDfjOY" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21032.807934482444!2d-123.7197245237074!3d48.77996217389762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548f4f5e1448e75b%3A0x50135152a7b0df0!2sDuncan%2C%20BC!5e0!3m2!1sen!2sca!4v1634595872482!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Duncan, BC</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g154929-Activities-Duncan_Cowichan_Valley_Regional_District_Vancouver_Island_British_Columbia.html" target="_blank" rel="nofollow noopener">- Best Attractions in Duncan, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.yelp.ca/search?cflt=restaurants&find_loc=Duncan%2C+BC" target="_blank" rel="nofollow noopener">- Best Places to Eat in Duncan, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.duncancc.bc.ca/list/ql/shopping-specialty-retail-47" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Duncan, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.bctransit.com/cowichan-valley/home" target="_blank" rel="nofollow noopener">- Public Transportation Options in Duncan, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.booking.com/city/ca/duncan.html" target="_blank" rel="nofollow noopener">- Best Places to Stay in Duncan, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g154929-Activities-zft11306-Duncan_Cowichan_Valley_Regional_District_Vancouver_Island_British_Columbia.html" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Duncan, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.cowichanvalleycitizen.com/local-news/" target="_blank" rel="nofollow noopener">- Local News for Duncan, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/british-columbia/duncan" target="_blank" rel="nofollow noopener">- Weather in Duncan, British Columbia</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
