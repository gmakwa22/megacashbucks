<header id="header" class="header default">
<div class="menu">
   <nav id="menu" class="mega-menu">
    <section class="menu-list-items" style="height: 80px !important; background-image: url('../images2/payday-loan-background.jpeg');">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12">
        <ul class="menu-logo">
            <li>
                <a href="{{$privurl}}"><img id="logo_main" src="/{{ $corplogo }}" alt="{{$randomalt}}"></a>
            </li>
        </ul>
        <div class="menu-bar">
         <ul class="menu-links">
         <li><a href="{{url('/why-choose-us')}}">WHAT WE OFFER</a>
            </li>
            <li><a href="{{url('/how-its-done')}}">HOW IT'S DONE</a>
            </li>
            <li><a href="{{url('/education-center')}}">BE INFORMED</a>
            </li>
            <li><a href="{{url('/faq')}}">FAQ</a>
            </li>
            <li><a href="{{$corpsignin}}" onclick="ga('send', 'event', 'buttons', 'click', 'login');">Login</a>
            </li>


            <li><a href="{{ Session::get('purl') ?? $corpregister }}" onclick="ga('send', 'event', 'buttons', 'click', 'topsign');" class="topsignup">Signup</a>
            </li>
            <!-- <li><div class="mt-30" style="margin-right:5px;"><a class="button icon white xs-mt-10" href="{{$corpsignin}}"><span data-novi-id="4">SIGN IN</a></div></li>
              <li><div class="action-box-button"><a class="button button-border white" href="{{$corpregister}}"><span>APPLY NOW</span></a></div></li> -->
        </ul>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
 </div>
</header>
