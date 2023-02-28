@extends('layouts.app')
@section('content')
<div class="container text-white flex mh-5">
    <figure>
        <img src="{{$comic->thumb}}" alt="{{$comic->series}}" class="img-fluid">
    </figure>
    <div class="pl-3">
        <h1>{{$comic->series}}</h1>
        <h3>{{$comic->type}}</h3>
        <div>${{$comic->price}}</div>
    </div>
</div>
@endsection