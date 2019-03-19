@extends('layouts.app')

@section('content')
    @php
    $a = 1;
    @endphp
    @foreach($name_photo as $one)
        <div class="holder">
            <div class="modal-overlay" id="a{{$a}}">
                <img class="photo" src="{{ asset('img/photo/'.$one->name.'.jpg')}}">
                <div class="block">
            <button type="submit" class="img_button" data-id="{{$a}}">WANT IT</button>
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
        </div>
        @php
        $a++;
        @endphp
    @endforeach

@endsection
