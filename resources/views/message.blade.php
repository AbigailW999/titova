@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	<p><a href="#">Звонок</a>, <a href="#">СМС</a>, <a href="#">Viber</a>, <a href="#">WhatsApp</a></p>
	<h1>+375 (29) 369-41-15</h1>
	<form action="/contact_form/">
    	<button type="submit" class="contact_button">Отправить сообщение</button>
	</form>
@endsection
