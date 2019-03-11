@extends('layouts.app')

@section('content')

    @foreach($name_photo as $one)
        <img class="photo" src="{{ asset('img/photo/'.$one->name.'.jpg')}}">
    @endforeach

@endsection
