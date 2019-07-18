@extends('master.master')

@section('title')PRETRAŽIVANJE PO ABECEDI @endsection

@section('content')
@include('partials.sidebar')


<main style="text-align: center;" role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
 
<h1>Pronađi svoj film</h1>




@foreach($kljuc2 as $slovo)
<a href="{{route('upit' , ['slovo' => $slovo]) }}"> {{$slovo}} </a>
@endforeach




</main>
@endsection

