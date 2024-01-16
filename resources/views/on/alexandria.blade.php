@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Alexandria Ontario</p>
				<h2 class="small-title">Alexandria’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Alexandria or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Alexandria. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>
<p class="text text-justify">
				We offer you a Online Payday Loans in Ontario that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account. </p>
				<p class="text text-justify">
				My Online Cash has developed an innovative, 24 Hour Payday Loans in Edmonton process that allows Edmonton residents to apply, get approved, and receive their funds, all in the same day.
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
           <iframe width="560" height="315" src="https://www.youtube.com/embed/FCaOYOJYrg8" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d358910.91171028017!2d-74.95733776949646!3d45.348983895250505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce9c9c10da019f%3A0x26dd0bee2da4b795!2sNorth%20Glengarry%2C%20ON!5e0!3m2!1sen!2sca!4v1634162229009!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Alexandria, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g2648295-Activities-Alexandria_Ontario.html" target="_blank" >- Best Attractions in Alexandria, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g2648295-Alexandria_Ontario.html" target="_blank" >- Best Places to Eat in Alexandria, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.yellowpages.ca/locations/Ontario/Alexandria/80014000.html" target="_blank" >- Best Places to Go Shopping in Alexandria, Ontario</a></li>
					<li class="list-group-item"><a href="http://www.usbusstation.com/ontario/ON/alexandria_bus_routes.htm" target="_blank" >- Public Transportation Options in Alexandria, Ontario</a></li>
					<li class="list-group-item"><a href="https://ca.hotels.com/de11406879/Alexandria-Ontario-hotels-rooms/" target="_blank" >- Best Places to Stay in Alexandria, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiS-tqSs8jzAhVDHzQIHdDMC2sQFnoECAMQAQ&url=http%3A%2F%2Fwww.tripbuzz.com%2Fthings-to-do-with-kids%2Falexandria-ontario&usg=AOvVaw1gBQmXdvreKf0sNKHutg-h" target="_blank" >- Best Things to do with the Kids in Alexandria, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiQhvmqs8jzAhUrITQIHS6cAKwQFnoECAUQAQ&url=https%3A%2F%2Flocal.ca%2Fon%2Falexandria%2Fnews%2F&usg=AOvVaw0jGJwAmeUYRpJpxC1yPMoO" target="_blank" >- Local News for Alexandria, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiXwZnCs8jzAhU0CjQIHQOaCgYQFnoECAUQAQ&url=https%3A%2F%2Fwww.theweathernetwork.com%2Fca%2Fweather%2Fontario%2Falexandria&usg=AOvVaw0sRkJJz7YOyp7_N-Amd-l-" target="_blank" >- Weather in Alexandria, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
