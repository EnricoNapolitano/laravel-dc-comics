@extends('layouts.app')
@section('content')
<div class="container text-white flex as ph-5">
    <figure>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
    </figure>
    <div class="pl-3">
        <h1>{{$comic->title}}</h1>
        <h3>${{$comic->price}}</h3>
        <p class="mb-3">{{$comic->description}}</p>
        <div class="flex">
            <a href="{{ route('comics.edit', $comic) }}" class="bg-primary text-white pw-3 ph-1"><b>EDIT</b></a>
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
            @csrf
            @method('DELETE')
                <button class="btn-size bolder bg-custom2 text-white p-btn ml-2">DELETE</button>
            </form>
        </div>
    </div>
</div>
@endsection