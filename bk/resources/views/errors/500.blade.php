@extends('layout.layout')

@section('content')

@include('global.homebanner')

<center>
<br><br>   <h1 class="mt-10">Page Not Found</h1><br><br>
  <a href="/"><button type="button" class="btn btn-primary">Return Home</button></a></center>
<br><br>

@include('content.process')

@endsection
