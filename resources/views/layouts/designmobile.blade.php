@include('round.top')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="C45/js/plugins-jquery.js"></script>


@include('round.licpop')
@include('round.google')
<!-- @include('holiday.snow') -->
</head>
<body>

<div class="wrapper">
@include('round.nav')
@include('round.headermobile')

@yield('content')

@include('round.footer')
</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>APPLY</span></a></div>


<script>var plugin_path = 'C45/js/';</script>
<script src="C45/js/custom.js"></script>

</body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML747CJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</html>
