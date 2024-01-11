@include('round.top')
@include('round.google')
<script>
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="C45/js/plugins-jquery.js"></script>
<script src="C45/js/jquery-3.4.1.min.js"></script>

@include('round.licpop')
@include('holiday.snow')
</head>
<body>
@include('round.googlebody')
<div class="wrapper">
@include('round.nav')
@include('round.header')

@yield('content')

@include('round.footer')
</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>APPLY</span></a></div>


<script>var plugin_path = 'C45/js/';</script>
<script src="C45/js/custom.js"></script>

</body>
</html>
