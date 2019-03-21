@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	<div class="content_box">
		<div class="content_404page">
		    <a href="{{asset('/')}}"><img src="{{ asset('img/logo_404.svg') }}" alt="DARIA TITOVA"></a>
		    <p class="content_404page-p">Ошибка 404</p>
		    <p class="content_404page-p2">Такой страницы больше не существует...</p>
		    <form action="/">
		    	<button type="submit" class="contact_button">На главную</button>
			</form>
		</div>
	</div>
@endsection
