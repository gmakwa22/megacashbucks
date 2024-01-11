<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Castlegar British Columbia</p>
				<h2 class="small-title">Castlegar’s Best PayDay Loans</h2>
				<p class="text text-justify">We offer you a Payday Loans in British Columbia that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Castlegar or across British Columbia.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Castlegar. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/8UR50z0I8d0" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83263.2667647553!2d-117.77604307568004!3d49.295777185692195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537cd4aa6992cd4b%3A0x13d762c0290350e2!2sCastlegar%2C%20BC!5e0!3m2!1sen!2sca!4v1634579648650!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Castlegar, BC</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g181791-Activities-Castlegar_Kootenay_Rockies_British_Columbia.html" target="_blank" rel="nofollow noopener">- Best Attractions in Castlegar, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g181791-Castlegar_Kootenay_Rockies_British_Columbia.html" target="_blank" rel="nofollow noopener">- Best Places to Eat in Castlegar, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.yelp.ca/search?cflt=shopping&find_loc=Castlegar%2C+BC" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Castlegar, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.bctransit.com/west-kootenay/schedules-and-maps/route-overview?route=31" target="_blank" rel="nofollow noopener">- Public Transportation Options in Castlegar, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.booking.com/city/ca/castlegar.html" target="_blank" rel="nofollow noopener">- Best Places to Stay in Castlegar, British Columbia</a></li>
					<li class="list-group-item"><a href="http://www.tripbuzz.com/things-to-do-with-kids/castlegar-british-columbia" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Castlegar, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.castlegarnews.com/" target="_blank" rel="nofollow noopener">- Local News for Castlegar, British Columbia</a></li>
					<li class="list-group-item"><a href="https://weather.gc.ca/city/pages/bc-21_metric_e.html" target="_blank" rel="nofollow noopener">- Weather in Castlegar, British Columbia</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
