
@include('round.whatsthebest')
@include('round.applyandapprove')

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.fastandflex')
@elseif ($random == 2)
    @include('round.eligible')
@else
    @include('round.fivereasons')
@endif

<!-- {{ Session::get('purl') ?? "No Session" }} -->

@include('round.nocreditcheck')
