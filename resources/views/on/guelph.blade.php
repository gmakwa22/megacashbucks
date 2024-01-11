@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Guelph Ontario</p>
				<h2 class="small-title">Guelph’s Best PayDay Loans</h2>
				<p class="text text-justify">Guelph’s residents are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan in Burnaby when life throws the unexpected at them.</p>
				<p class="text text-justify">We offer you a Online Payday Loans in Guelph Ontario that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Guelph or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Guelph. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/_KHak78PK5c" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92558.78238922404!2d-80.31020788150137!3d43.53441162337643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b9ad0c3a9fb6b%3A0x5037b28c7231b60!2sGuelph%2C%20ON!5e0!3m2!1sen!2sca!4v1636503066234!5m2!1sen!2sca" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Guelph, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://visitguelphwellington.ca/listings/activities" target="_blank" rel="nofollow noopener">- Best Attractions in Guelph, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g154989-Guelph_Ontario.html" target="_blank" rel="nofollow noopener">- Best Places to Eat in Guelph, Ontario</a></li>
					<li class="list-group-item"><a href="https://downtownguelph.com/category/shopping/" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Guelph, Ontario</a></li>
					<li class="list-group-item"><a href="https://guelph.ca/living/getting-around/bus/" target="_blank" rel="nofollow noopener">- Public Transportation Options in Guelph, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.expedia.ca/Hotel-Search?SEMDTL=a111848848871.b1114449663439.g1aud-1210701017419%3Akwd-307817788546.l1.e1c.m1EAIaIQobChMIqf3Ru8jK8wIVsx-tBh01iQ79EAAYASAAEgL2dvD_BwE.r1ac4048695d22df3994b9645c8833c04de15a44becaeaf6d113180d53fc6e04c5.c17lKa5RzY6C29Z2cH0kgXGQ.j19001551.k1.d1486432351323.h1e.i1.n1.o1.p1.q1.s1.t1.x1.f1.u1.v1.w1&destination=Guelph%2C%20Ontario%2C%20Canada&endDate=2021-10-29&gclid=EAIaIQobChMIqf3Ru8jK8wIVsx-tBh01iQ79EAAYASAAEgL2dvD_BwE&locale=en_CA&regionId=8237&semcid=CA.UB.GOOGLE.DT-c-EN.HOTEL&semdtl=&siteid=4&sort=RECOMMENDED&startDate=2021-10-28&theme=&useRewards=false&userIntent=" target="_blank" rel="nofollow noopener">- Best Places to Stay in Guelph, Ontario</a></li>
					<li class="list-group-item"><a href="https://activeparents.ca/10-things-to-do-with-kids-in-guelph/" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Guelph, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.guelphtoday.com/" target="_blank" rel="nofollow noopener">- Local News for Guelph, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/hourly-weather-forecast/ontario/guelph" target="_blank" rel="nofollow noopener">- Weather in Guelph, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
