@extends('layouts.app')

@section('content')
</div>
<header class="page-intro bg-10" >
	<div class="container">
		<article class="block-txt rellax" data-rellax-speed="7">
			<div class="v-center parallaxEffect">
				<h1 class="title text_black">Credit counsellors</h1>
				<h2 class="subtitle-lato">Find a credit counsellor near you</h2>
			</div>
		</article>
	</div>
</header>
<section id="bg-content2" class="bg-img">
	<div class="container panel-group" id="support">



<div class="container" id="counsellors">
<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
<article class="counsellors-block">
<p class="counsellors-province">Canada</p>
<h2 class="counsellorrs-name2">CREDIT COUNSELLING CANADA</h2>
<p class="text"><a href="http://www.creditcounsellingcanada.ca/" target="_blank" rel="nofollow" onclick="ga('send', 'event', 'external links', 'credit consellors', 'http://creditcounsellingcanada.ca');"><i class="fa fa-globe"></i>creditcounsellingcanada.ca</a><br>
<i class="fa fa-phone"></i>1-866-398-5999</p>
</article>
</div>
<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
<article class="counsellors-block">
<p class="counsellors-province">Alberta</p>
<h2 class="counsellorrs-name2">CREDIT COUNSELLING SOCIETY</h2>
<p class="text"><a href="https://www.nomoredebts.org/canada/alberta/credit-counselling.html" target="_blank" rel="nofollow" onclick="ga('send', 'event', 'external links', 'credit consellors', 'http://nomoredebts.org');"><i class="fa fa-globe"></i>nomoredebts.org</a><br>
<i class="fa fa-phone"></i>1–888-527–8999</p>
</article>
</div>
<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
<article class="counsellors-block">
<p class="counsellors-province">British Columbia</p>
<h2 class="counsellorrs-name2">CREDIT COUNSELLING SOCIETY</h2>
<p class="text"><a href="https://www.nomoredebts.org/canada/bc/credit-counselling.html" target="_blank" rel="nofollow" onclick="ga('send', 'event', 'external links', 'credit consellors', 'http://nomoredebts.org');"><i class="fa fa-globe"></i>nomoredebts.org</a><br>
<i class="fa fa-phone"></i>1–888-527–8999</p>
</article>
</div>
<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
<article class="counsellors-block">
<p class="counsellors-province">Ontario</p>
<h2 class="counsellorrs-name2">ONTARIO ASSOCIATION OF CREDIT COUNSELLING&nbsp;SERVICE</h2>
<p class="text"><a href="http://oaccs.com/" target="_blank" rel="nofollow" onclick="ga('send', 'event', 'external links', 'credit consellors', 'http://oaccs.com');"><i class="fa fa-globe"></i>oaccs.com</a><br>
<i class="fa fa-phone"></i>1–905–945-5644</p>
</article>
</div>
<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
<article class="counsellors-block">
<p class="counsellors-province">Nova Scotia</p>
<h2 class="counsellorrs-name2">CREDIT COUNSELLING SERVICES OF ATLANTIC&nbsp;CANADA</h2>
<p class="text"><a href="https://www.solveyourdebts.com/english/index.php" target="_blank" rel="nofollow" onclick="ga('send', 'event', 'external links', 'credit consellors', 'https://solveyourdebts.com');"><i class="fa fa-globe"></i>solveyourdebts.com</a><br>
<i class="fa fa-phone"></i>1–888-753–2227</p>
</article>
</div>






	</div>
</section> 
@endsection

@section('scripts')

	<script type="text/javascript">
		$("#search").keyup(function () {

	        var filter = $(this).val(), count = 0;
	        $(".element-holder h2.small-title").each(function () {

	            //var current = $('h2.small-title').attr('data-name');
	            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
	            	$(this).closest('.col-xs-12.col-sm-12').fadeOut();
	            } else {
	                $(this).closest('.col-xs-12.col-sm-12').show();
	                count++;
	            }
	        });

	    });
	</script>

@endsection

