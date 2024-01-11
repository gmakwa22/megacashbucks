@include('round.fastandflex')

@include('global.bottom-express-boxes')

@include('round.applyandapprove')

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.whatsthebest')
@elseif ($random == 2)
    @include('round.eligible')
@else
    @include('round.fivereasons')
@endif



@include('round.nocreditcheck')

@include('round.new-agent')
