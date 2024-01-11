<section class="full-width headerspecial" style="background: url(/images2/{{ $bannerbg ?? 'images/17.jpg' }}) no-repeat; background-size: cover;">
  <span class="background-image" role="img" aria-label="{{ $headalt ?? "Short Term Loans Canada" }}"> </span>
  <div class="container spcontainer">
    <div class="row">
      <div class="col-lg-7 headermarg" style="margin-top:{{ $martop ?? "15" }}%;">
      <div class="page-title-name align-middle col-lg-12">
    <h1 class="display-{{ $headtxtsize ?? "4" }} headertext font-weight-bold {{ $headalign ?? "text-right" }}" style="color:{{ $headtxtcolor ?? "#b2752d" }}; -webkit-text-stroke: 2px black;">{{ $headpg ?? "THE HASSLE-FREE LOAN, WHEN YOU NEED IT" }}</h1>
          <p class="{{ $headalign ?? "text-right" }}" style="font-size:18px; margin:3px;"><mark>{{ $headsub ?? "The funds you need when you need them." }}</mark></p>
        </div>
     </div>
     <div class="phonecalculator col-xs-12 col-sm-5 alpha omega f-right" style="margin-top:9%;">
       @if(isset($headphonehide))
       <div class="nophone" style="height: 550px;"></div>
       @else
         @include('round.phone2')
         <script defer src="/C45/js/script.js"></script>
       @endif
     </div>
     </div>
  </div>
</section>
