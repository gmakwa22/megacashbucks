@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Bath Ontario</p>
				<h1 class="small-title">Bath’s Best PayDay Loans</h1>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Bath or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Bath. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>
<p class="text text-justify">
				We offer you a Online Payday Loans in Ontario that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account. </p>

				<p class="text text-justify">
					So, if you’re looking for a Payday Loans in Bath ON with a trusted, direct lender, {{ $privname }} is the company for you.  </p>


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
           <iframe src="https://www.youtube.com/embed/6dkRCaEe8q4" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11444.351405282885!2d-76.78623790668092!3d44.18465670298997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d7e1035ef1ee53%3A0x49b05fddd76f6cb1!2sBath%2C%20ON!5e0!3m2!1sen!2sca!4v1634330031011!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>




      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Bath, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g1651179-Activities-Bath_Lennox_and_Addington_County_Ontario.html" target="_blank"   >- Best Attractions in Bath, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g1651179-Bath_Lennox_and_Addington_County_Ontario.html" target="_blank"   >- Best Places to Eat in Bath, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.com/Attractions-g1651179-Activities-c26-Bath_Lennox_and_Addington_County_Ontario.html" target="_blank"   >- Best Places to Go Shopping in Bath, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.loyalist.ca/en/living-in-loyalist/transit-service.aspx" target="_blank"   >- Public Transportation Options in Bath, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.trivago.ca/?themeId=1&iPathId=39998&sem_keyword=hotel%20bath&sem_creativeid=486780254122&sem_matchtype=p&sem_network=g&sem_device=c&sem_placement=&sem_target=&sem_adposition=&sem_param1=&sem_param2=&sem_campaignid=11857607967&sem_adgroupid=114728492865&sem_targetid=kwd-114578804&sem_location=9001551&cipc=sem&cip=1071900386&gclid=EAIaIQobChMI3oD1oaLN8wIVExwrCh1jrQ3AEAAYASAAEgJu8fD_BwE" target="_blank"   >- Best Places to Stay in Bath, Ontario</a></li>
					<li class="list-group-item"><a href="https://lilalovesorganics.com/products/organic-oils-bath-bomb-minis-bubblegum-20-pack" target="_blank"   >- Best Things to do with the Kids in Bath, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.facebook.com/groups/BathOntarioNews/" target="_blank"   >- Local News for Bath, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/Ontario/Bath" target="_blank"   >- Weather in Bath, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
