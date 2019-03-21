@extends('layouts.app')

@section('content')
    @php
    $a = 1;
    @endphp
    @foreach($name_photo as $one)
        <div class="holder">
            <div id="a{{$a}}">
                <img class="photo" src="{{ asset('img/photo/'.$one->name.'.jpg')}}"  id="ph{{$a}}">
            </div>
                <div class="block">
                    <img src="{{ asset('img/want_it.png')}}" data-id="{{$a}}" class="img_button">
                </div>
                <div class="modal" id="{{$a}}">
                    <form method="POST" action="{{asset('message/'.$one->id)}}">
                        {!! csrf_field() !!}
                        <p>Contact</p>
                        <input type="text" name="contact" placeholder="email or phone"><br>
                        <button type="submit">Send</button>
                        <button class="closeButton">Close</button>
                    </form>
                </div>
            
        </div>
        @php
        $a++;
        @endphp
    @endforeach

@endsection
