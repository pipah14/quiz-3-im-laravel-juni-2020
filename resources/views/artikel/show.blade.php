@extends('layouts.master')
@section('content')

<div class="jumbotron">
    {{-- {{ dd($artikel)}} --}}
    <h1 class="display-4"> {{ $artikel->judul }} </h1>
    {{-- <p class="lead"> {{ $artikel->user }} </p> --}}
    <hr class="my-4">
    <p> {{ $artikel->isi }} </p>
    <p> {{ $artikel->slug }} </p>
    <p> {{ $artikel->tag }} </p>
    <a class="btn btn-primary btn-lg" href="/artikel" role="button">Back</a>
    
  </div>
    
@endsection