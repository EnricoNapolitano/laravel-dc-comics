@extends('layouts.app')
@section('content')
<div class="container text-white flex mh-5">
    <figure>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
    </figure>
    <div class="pl-3">
        <h1>{{$comic->title}}</h1>
        <h3>${{$comic->price}}</h3>
        <div>{{$comic->description}}</div>
    </div>
</div>
@endsection