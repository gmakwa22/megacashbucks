<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Cumberland British Columbia</p>
				<h2 class="small-title">Cumberland’s Best PayDay Loans</h2>
				<p class="text text-justify">{{ $privname ?? "Mega Cash Bucks" }} has brought British Columbians a great solution. In fact, two of them! We have a Payday Loans Cumberland. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Cumberland or across British Columbia.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Cumberland. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/CzDR3JlhT9k" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41355.09388628928!2d-125.05607931541647!3d49.62238521851624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54881537ff3f16cf%3A0x24c876f334782701!2sCumberland%2C%20BC!5e0!3m2!1sen!2sca!4v1634592832655!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Cumberland, BC</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g1015432-Activities-Cumberland_Comox_Valley_Vancouver_Island_British_Columbia.html" target="_blank" >- Best Attractions in Cumberland, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g1015432-Cumberland_Comox_Valley_Vancouver_Island_British_Columbia.html" target="_blank" >- Best Places to Eat in Cumberland, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.yelp.ca/search?cflt=shopping&find_loc=Cumberland%2C+BC" target="_blank" >- Best Places to Go Shopping in Cumberland, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.bctransit.com/comox-valley/schedules-and-maps/route-overview?route=2" target="_blank" >- Public Transportation Options in Cumberland, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.booking.com/city/ca/cumberland.html" target="_blank" >- Best Places to Stay in Cumberland, British Columbia</a></li>
					<li class="list-group-item"><a href="https://cumberland.ca/topics/kids/" target="_blank" >- Best Things to do with the Kids in Cumberland, British Columbia</a></li>
					<li class="list-group-item"><a href="https://cumberland.ca/news/" target="_blank" >- Local News for Cumberland, British Columbia</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/british-columbia/cumberland" target="_blank" >- Weather in Cumberland, British Columbia</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
