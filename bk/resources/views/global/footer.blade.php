<div class="footer-area pt-90 pb-45">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget-footer-title">
					<h2>{{$comp}}</h2>
				</div>
				<div class="footer-title-menu">
					<ul>
						<li><a href="/why-use-us">What we offer</a></li>
						<li><a href="/how-its-done">How it's Done</a></li>
						<li><a href="{{$register}}">Apply Right Now!</a></li>
						<li><a href="/privacy">Privacy</a> / <a href="/terms">Terms</a></li>
						<li><a href="/contact">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget-footer-title">
					<h2>USA</h2>
				</div>
				<div class="footer-title-menu">
					<ul>
						<li><a href="/payday-loans-california">California</a></li>
						<li><a href="/payday-loans-michigan">Michigan</a></li>
						<li><a href="/payday-loans-ohio">Ohio</a></li>
						<li><a href="/payday-loans-kentucky">Kentucky</a></li>
						<li><a href="/payday-loans-texas">Texas</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget-footer-title">
					<h2>India / Philippines</h2>
				</div>
				<div class="footer-title-menu">
					<ul>
						<li><a href="/payday-loans-mumbai">Mumbai</a></li>
						<li><a href="/payday-loans-delhi">Delhi</a></li>
						<li><a href="/payday-loans-manila">Manila</a></li>
						<li><a href="/payday-loans-cebu">Cebu</a></li>
						<li><a href="/payday-loans-cavite">Cavite</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget-footer-title">
					<h2>Company Address</h2>
				</div>
				<div class="footer-widget-address">
					<div class="widget-footer-text m-0">
						<p>{{$comp}} is committed to helping its clients in their time of financial need.</p>
					</div>
					<div class="footer-address-inner" id="custlink">
						<p><strong>Address:</strong> {{ $privaddress }} {{ $privcity }}, {{ $privprov }}, {{ $privcountry }} {{ $privpostal }}</p>
						<p><a href="mailto:{{ $suportemail }}">{{ $suportemail }}</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer-buttom-area pt-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="copy-right-text text-center">
					<p>Copyright © {{ now()->year }} {{$comp}} all rights reserved.</p>
				</div>

			</div>
		</div>
	</div>
</div>
