@extends('layouts.app')

@section('content')

    @foreach($name_photo as $one)
        <div class="holder">
            <div class="modal-overlay">
                <img class="photo" src="{{ asset('img/photo/'.$one->name.'.jpg')}}">
                <div class="block">
            <button type="submit" class="img_button">WANT IT</button>
        </div>
                <div class="modal">
                    <form method="POST">
                        <p>Contact</p>
                        <input type="text" name="contact" placeholder="email or phone"><br>
                        <button type="submit">Send</button>
                        <button class="closeButton">Close</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

@endsection
