@extends('/layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Brantford Ontario</p>
				<h2 class="small-title">Brantford’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Brantford or across Ontario.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Brantford. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>
<p class="text text-justify">
				We offer you a Online Payday Loans in Ontario that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account. </p>

				<p class="text text-justify">
					We know that things happen in life and sometimes you need Cash Money in Brantford for unexpected expenses
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
           <iframe src="https://www.youtube.com/embed/KeYy9OlFrU4" allowfullscreen=""></iframe>
        </div>
<br>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46575.134011727874!2d-80.30908484963454!3d43.14766583248803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882c65e278ea730f%3A0x353da5a5a466f9e0!2sBrantford%2C%20ON!5e0!3m2!1sen!2sca!4v1634234712918!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>



      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Brantford, ON</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g154983-Activities-Brantford_Ontario.html" target="_blank" >- Best Attractions in Brantford, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g154983-Brantford_Ontario.html" target="_blank" >- Best Places to Eat in Brantford, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.destinationontario.com/en-ca/things-to-do/arts-cultural-experiences/shopping?gclid=EAIaIQobChMI3rX3sb_K8wIVYj2tBh2FNggzEAAYASAAEgJ4ovD_BwE" target="_blank" >- Best Places to Go Shopping in Brantford, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.brantford.ca/en/transportation/brantford-transit.aspx" target="_blank" >- Public Transportation Options in Brantford, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.booking.com/searchresults.en-gb.html?aid=306395;label=brantford-mgq1iu2CJXG9rGzFi7w0FQS392865643840%3Apl%3Ata%3Ap15%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-297601666995%3Akwd-186257976%3Alp9001551%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YZVcNNsENnH02-pWD53qm9c;sid=dae5fc4d723ce836729958e278fb03d6;city=-561588;redirected=1;redirected_from_city=1;source=city&" target="_blank" >- Best Places to Stay in Brantford, Ontario</a></li>
					<li class="list-group-item"><a href="https://citykidz.ca/?gclid=EAIaIQobChMIx9Hf8b_K8wIVnwqtBh2STwjqEAAYASAAEgI8SfD_BwE" target="_blank" >- Best Things to do with the Kids in Brantford, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.brantfordexpositor.ca/category/news/local-news/" target="_blank" >- Local News for Brantford, Ontario</a></li>
					<li class="list-group-item"><a href="https://www.theweathernetwork.com/ca/weather/ontario/brantford" target="_blank" >- Weather in Brantford, Ontario</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
