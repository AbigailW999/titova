@extends('layouts.app')

@section('content')
    @php
    $a = 1;
    @endphp
    @foreach($name_photo as $one)
        <div class="holder h{{$a}}">

            <div id="butL{{$a}}" class="slider_buttons"></div>
            <div id="butR{{$a}}" class="slider_buttons"></div>

            <div id="a{{$a}}">
                <img class="photo" src="{{ asset('img/photo/'.$one->name.'.jpg')}}"  id="ph{{$a}}" data-id2="{{$a}}">
            </div>
                <div class="block">
                    <img src="{{ asset('img/want_it.png')}}" data-id="{{$a}}" class="img_button">
                </div>
                <div class="modal" id="{{$a}}">
                    <form method="POST" action="{{asset('message/'.$one->id)}}" class="index_form">
                        {!! csrf_field() !!}
                        <h2>Хотите так же?</h2>
                        <p>Оставьте ваши контакты и я свяжусь вами в ближайшее время =)</p>
                        <input type="text" name="contact" placeholder="Ваш телефон или email"><br>
                        <button type="submit">Отправить</button><br>
                        
                    </form>
                    <button class="closeButton">Закрыть</button>
                </div>
            
        </div>
        @php
        $a++;
        @endphp
    @endforeach

@endsection
