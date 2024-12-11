<style>
  .fixed-menu {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #f7f7f7;
    padding: 5px 15px; /* Reduced padding to make the strip thinner */
    border: 1px solid #ddd;
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }

  .close-btn {
    background-color: transparent;
    border: none;
    cursor: pointer;
    font-size: 20px; /* Larger font for the X */
    font-weight: bold;
    color: #333;
    position: absolute;
    top: 5px;
    right: 10px;
  }

  .app-links {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
    margin: 0;
  }

  .app-links div {
    text-align: center;
  }

  .app-links img {
    max-width: 100px; /* Max width for app icons */
    max-height: 35px;
  }

  .qr-code {
    width: 50px;
    height: 50px;
    object-fit: contain; /* Ensures the QR code maintains its aspect ratio */
  }

  @media (max-width: 768px) {
    .fixed-menu {
      padding: 5px 10px;
      flex-direction: row;
      align-items: center;
    }

    .app-links {
      width: 100%;
      justify-content: center;
    }

    .app-links img {
      max-width: 90px;
      max-height: 30px;
    }

    .qr-code {
      width: 45px; /* Adjust size for mobile */
      height: 45px;
    }
  }
</style>


<!-- App Download Banner -->
<div class="fixed-menu">
  <div class="app-links">
    <!-- Google Play Button + QR Code -->
    <div>
      <a href="https://play.google.com/store/apps/details?id=com.app.paydayloanssss">
        <img src="images2/googleplay.svg" alt="Google Play"/>
      </a>
      <a onclick="showLargeQRCode('https://d2wuvg8krwnvon.cloudfront.net/appqrcode/android_1732549516.png')">
        <img src="https://d2wuvg8krwnvon.cloudfront.net/appqrcode/android_1732549516.png" alt="QR Code Android" class="qr-code"/>
      </a>
    </div>

    <!-- iOS Button + QR Code -->
    <div>
      <a href="https://apps.apple.com/us/app/payday-loans/id1511832987?uo=4">
        <img src="images2/appstore.svg" alt="App Store"/>
      </a>
      <a onclick="showLargeQRCode('https://d2wuvg8krwnvon.cloudfront.net/appqrcode/itune_1605543159.png')">
        <img src="https://d2wuvg8krwnvon.cloudfront.net/appqrcode/itune_1605543159.png" alt="QR Code iOS" class="qr-code"/>
      </a>
    </div>
  </div>
  <button class="close-btn" onclick="this.parentNode.style.display = 'none';">
    &times; <!-- This is the X symbol -->
  </button>
</div>


<footer class="footer page-section-pt black-bg">
 <div class="container">
  <div class="row">
      <div class="col-lg-3 col-sm-6 sm-mb-30">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">{{ $privname }}</h6>
        <ul class="addresss-info">
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/why-choose-us')}}">What we offer</a></li>
          <li><i class="fa fa-map-marker"></i> <a href="{{url('/how-its-done')}}">How It's done</a></li>
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
        <p class="pb-10" style="text-align: justify;">{{$privname}} is committed to helping its clients in their time of financial need. Our fast, easy, transparent and secure lending practices allow you to get your life back on track, when unexpected expenses arise. When you need some help getting over a current financial challenge, we’re there to help. <a href="{{url('/borrow-money')}}">Borrow Money</a> | <a href="{{url('/payday-advance')}}">Payday Advance</a> | <a href="{{url('/same-day-loans')}}">Same Day Loans</a> | <a href="{{url('/child-tax-loans')}}">Child Tax Cash Advance Loans CTB</a> | <a href="{{url('/odsp-payday-loans-online')}}">ODSP Payday Loans</a> | 
         | <a href="{{url('/fast-loans-canada')}}">Fast Loans</a> | <a href="{{url('/payday-advance')}}">Payday Advance</a></p>
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

<!-- App Download Banner Function Script -->
<script>
let currentLargeQRCode = null;

function showLargeQRCode(url) {
  // If there's already a large QR code open, remove it first
  if (currentLargeQRCode) {
    document.body.removeChild(currentLargeQRCode);
  }

  // Create a new container for the large QR code
  var largeQRCodeContainer = document.createElement('div');
  largeQRCodeContainer.style.position = 'fixed';
  largeQRCodeContainer.style.top = '50%';
  largeQRCodeContainer.style.left = '50%';
  largeQRCodeContainer.style.transform = 'translate(-50%, -50%)';
  largeQRCodeContainer.style.zIndex = '1001';
  largeQRCodeContainer.style.backgroundColor = '#fff';
  largeQRCodeContainer.style.padding = '20px';
  largeQRCodeContainer.style.border = '1px solid #ddd';
  largeQRCodeContainer.style.width = '250px';
  largeQRCodeContainer.style.height = '250px';
  largeQRCodeContainer.style.display = 'flex';
  largeQRCodeContainer.style.justifyContent = 'center';
  largeQRCodeContainer.style.alignItems = 'center';

  var largeQRCode = document.createElement('img');
  largeQRCode.src = url;
  largeQRCode.style.width = '200px';
  largeQRCode.style.height = '200px';

  var closeButton = document.createElement('button');
  closeButton.style.position = 'absolute';
  closeButton.style.top = '10px';
  closeButton.style.right = '10px';
  closeButton.style.backgroundColor = 'transparent';
  closeButton.style.border = 'none';
  closeButton.style.cursor = 'pointer';
  closeButton.innerHTML = '&times;';
  closeButton.onclick = function() {
    document.body.removeChild(largeQRCodeContainer);
    currentLargeQRCode = null;
    document.removeEventListener('click', clickOutsideHandler);
  };

  largeQRCodeContainer.appendChild(largeQRCode);
  largeQRCodeContainer.appendChild(closeButton);
  document.body.appendChild(largeQRCodeContainer);

  // Set the reference to the newly opened large QR code container
  currentLargeQRCode = largeQRCodeContainer;

  // Add event listener for clicks outside of the enlarged QR code container
  document.addEventListener('click', clickOutsideHandler);

  function clickOutsideHandler(event) {
    if (!largeQRCodeContainer.contains(event.target) && !event.target.classList.contains('qr-code') && !event.target.parentNode.classList.contains('qr-code')) {
      document.body.removeChild(largeQRCodeContainer);
      currentLargeQRCode = null;
      document.removeEventListener('click', clickOutsideHandler);
    }
  }
}
</script>
