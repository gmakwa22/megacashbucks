<footer class="footer page-section-pt black-bg">
 <div class="container">
  <div class="row">
      <div class="col-lg-3 col-sm-6 sm-mb-30">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">{{ $privname }}</h6>
        <ul class="addresss-info">
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/why-choose-us')}}">What we offer</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/how-its-done')}}">How it's done</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{ Session::get('purl') ?? $corpregister }}">Apply right now!</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/responsible-lending')}}">Responsible lending</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/terms-conditions')}}">Terms and conditions</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-2 col-sm-6 sm-mb-30">
    <div class="footer-useful-link footer-hedding">
      <h6 class="text-white mb-30 mt-10 text-uppercase">Provinces</h6>
      <ul class="addresss-info">
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-alberta')}}">Alberta</a></li>
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-british-columbia')}}">British Columbia</a></li>
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-manitoba')}}">Manitoba</a></li>
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-ontario')}}">Ontario</a></li>
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-saskatchewan')}}">Saskatchewan</a></li>
      </ul>
    </div>
  </div>
    <div class="col-lg-2 col-sm-2 sm-mb-30">
    <div class="footer-useful-link footer-hedding">
      <h6 class="text-white mb-30 mt-10 text-uppercase">States</h6>
      <ul class="addresss-info">
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-california')}}">California</a></li>
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-georgia')}}">Georgia</a></li>
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-illinois')}}">Illinois</a></li>
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-michigan')}}">Michigan</a></li>
        <li><i class="fa fa-map-marker"></i> <a href="{{url('/payday-loans-ohio')}}">Ohio</a></li>
      </ul>
    </div>
  </div>
    <div class="col-lg-2 col-sm-2 sm-mb-30">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Helpful</h6>
        <ul class="addresss-info">
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/faq')}}">FAQ</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/contact')}}">Contact Us</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/education-center')}}">Be Informed</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/sitemap')}}">Site Map</a></li>
        </ul>
      </div>

    </div>

    <div class="col-lg-3 col-sm-6 sm-mb-30">
      <div class="footer-logo">
        <p class="pb-10" style="text-align: justify;">{{$privname}} is committed to helping its clients in their time of financial need. Our fast, easy, transparent and secure lending practices allow you to get your life back on track, when unexpected expenses arise. When you need some help getting over a current financial challenge, we’re there to help. <a href="{{url('/borrow-money')}}">Borrow Money</a> | <a href="{{url('/payday-advance')}}">Payday Advance</a> | <a href="{{url('/same-day-loans')}}">Same Day Loans</a> | <a href="{{url('/child-tax-loans')}}">Child Tax Cash Advance Loans CTB</a> | <a href="{{url('/odsp-payday-loans-online')}}">ODSP Payday Loans</a> | <a href="{{url('/short-term-loans-canada')}}">Short Term Loans</a> | <a href="{{url('/fast-loans-canada')}}">Fast Loans</a> | <a href="{{url('/payday-advance')}}">Payday Advance</a></p>
      </div>
  </div>

       </div>
      <div class="footer-widget mt-20">
        <div class="row">
          <div class="col-lg-6 col-md-6">
           <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="/"> {{ $privname }} </a> All Rights Reserved</p>
          </div>
          <div class="col-lg-6 col-md-6 text-left text-md-right">
            <div class="social-icons color-hover mt-10">
            {{ $privaddress }} {{ $privcity }}, {{ $privprov }}, {{ $privcountry }} {{ $privpostal }} {{ $phonesmall ?? "" }}  @if (!empty($consumernum)) <span style="color:white;"> License Number: {{$consumernum}} </span> @endif
           </div>
          </div>
        </div>
      </div>
  </div>
</footer>
