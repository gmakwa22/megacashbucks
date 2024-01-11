@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Arthur Ontario</p>
				<h2 class="small-title">Arthur’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Arthur or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Arthur. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>
<p class="text text-justify">
				We offer you a Online Payday Loans in Ontario that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account. </p>
				<p class="text text-justify">
					Arthur’s residents are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible PayDay Loan in Arthur when life throws the unexpected at them.
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
           <iframe src="https://www.youtube.com/embed/DCj6-K3Bxa0" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframesrc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44804.40825496889!2d-76.38631845310533!3d45.423947149586766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cd1897c4af2da25%3A0x269ee51a015b14b8!2sArnprior%2C%20ON!5e0!3m2!1sen!2sca!4v1634226175514!5m2!1sen!2sca" width="600" height="450"  style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Arthur, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g6673879-Activities-Arthur_Ontario.html" target="_blank" rel="nofollow noopener">- Best Attractions in Arthur, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g6673879-Arthur_Ontario.html" target="_blank" rel="nofollow noopener">- Best Places to Eat in Arthur, Ontario</a></li>
					<li class="list-group-item"><a href="https://ca.hotels.com/de10430100/arthur-ontario-hotels-rooms/?rffrid=sem.hcom.CA.google.003.00.04.s.kwrd%3Dc.433995110110.57526245494.1533330660..dsa-585528634937.9001551...EAIaIQobChMI3ZnemaDK8wIVYQnnCh377wgjEAAYASAAEgLbcPD_BwE.aw.ds&PSRC=G21&gclid=EAIaIQobChMI3ZnemaDK8wIVYQnnCh377wgjEAAYASAAEgLbcPD_BwE" target="_blank" rel="nofollow noopener">- Best Places to Go Shopping in Arthur, Ontario</a></li>
					<li class="list-group-item"><a href="http://www.Arthur.ca/" target="_blank" rel="nofollow noopener">- Public Transportation Options in Arthur, Ontario</a></li>
					<li class="list-group-item"><a href="https://ca.hotels.com/de11406879/Arthur-Ontario-hotels-rooms/" target="_blank" rel="nofollow noopener">- Best Places to Stay in Arthur, Ontario</a></li>
					<li class="list-group-item"><a href="https://pbskids.org/arthur/activities" target="_blank" rel="nofollow noopener">- Best Things to do with the Kids in Arthur, Ontario</a></li>
					<li class="list-group-item"><a href="https://kdl.org/online-resources/?field_resource_category_tid=46&gclid=EAIaIQobChMIluL94aHK8wIV2B-tBh1CHASoEAAYASAAEgJ1E_D_BwE" target="_blank" rel="nofollow noopener">- Local News for Arthur, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/ontario/arthur" target="_blank" rel="nofollow noopener">- Weather in Arthur, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
