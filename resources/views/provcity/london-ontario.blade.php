<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Low Rate Payday Loan Alternative in London Ontario</p>
				<h2 class="small-title">Get up to $1,500. Low Cost. 5 minutes e-transfer</h2>
				<p class="text text-justify">Things happen in life and sometimes you need extra money for unexpected expenses. What do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options?</p>
				<p class="text text-justify">{{$privname}} has brought Ontarians a great solution. In fact, two of them! We have a cash advance loan. This is one you can pay back in a single installment. Or, if you prefer, we have a more flexible arrangement, which allows you to repay in either 2 or 3 installments. All across the province, from Windsor to Ottawa, Kingston to Kitchener, and all beyond, these great options are available to the residents of Ontario. <br>The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. Wherever you live in the province, the solution to your sudden, expected financial challenges are right here at hand. The whole thing can be done on the comfort of your couch, all in one day.  </p>
				<p class="text text-justify">If that wasn’t great enough, we offer even more bonuses. What if you have a bad credit rating? Don’t let that worry you. We know past experience is not indicative of your ability to repay a loan today. We have the solutions that can solve your unexpected expense, even if your credit score isn’t what you’d like it to be, today. </p>
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
      <br><br>
         <div class="js-video [youtube, widescreen]">
           <iframe src="https://www.youtube.com/embed/0JEEdq4E0fk" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
  <h3>Helpful information about London Ontario, Canada</h3>
			<ul class="list-group">
				<li class="list-group-item"><a href="https://www.ontario.ca/page/government-ontario" target="_blank" rel="noopener">Province of Ontario, Canada</a></li>
				<li class="list-group-item"><a href="https://ca.indeed.com/jobs-in-London,-ON" target="_blank" rel="noopener">Jobs in London Ontario, Canada</a></li>
				<li class="list-group-item"><a href="http://www.londontransit.ca/plan-a-trip/routes-schedules/" target="_blank" rel="noopener">Public Transit in London Ontario, Canada</a></li>
				<li class="list-group-item"><a href="https://attractionsontario.ca/" target="_blank" rel="noopener">Top family activity in Ontario, Canada</a></li>
				<li class="list-group-item"><a href="https://www.tripadvisor.ca/Tourism-g154995-London_Ontario-Vacations.html" target="_blank" rel="noopener">Vacation guides London Ontario, Canada</a></li>
				<li class="list-group-item"><a href="https://london.ctvnews.ca/" target="_blank" rel="noopener">News in London Ontario, Canada</a></li>
				<li class="list-group-item"><a href="https://www.accuweather.com/en/ca/london/n6b/weather-forecast/55489" target="_blank" rel="noopener">Weather in Ontario, Canada</a></li>
				</ul>

      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
