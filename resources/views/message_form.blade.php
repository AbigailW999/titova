@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('scripts')
@parent
<script src="{{ asset('js/page.js') }}" defer></script>
@endsection

@section('content')
	<h1>сообщение</h1>
	<form name="contact_form" class="contact_form" method="POST" enctype="multipart/form-data" action="{{asset('message')}}">
	{!! csrf_field() !!}
		<div class="contact_form_box">
			<input type="text" name="name" class="contact_form_i" required><br>
			<label class="lbl">Ваше имя</label>
		</div>
		<div class="contact_form_box">
			<input type="text" name="contact" pattern="\+[0-9]{1,4}[0-9]{1,10}|(.*)@(.*)\" title="cds" oninvalid="setCustomValidity('Пожалуйста, введите номер телефона или email')" class="contact_form_i" required><br>
			<label class="lbl">Телефон или email</label>
		</div>
		<div class="contact_form_box">
			<textarea name="description" class="contact_form_ii"></textarea><br>
			<label class="lbl">Ваш вопрос или предложение</label>
		</div>
		<div class="contact_upload_container">
			<input id="file-input" type="file" name="picture" accept="image/*" multiple>
            <label for="file-input"><img src="../img/upload.png">Прикрепить файл</label>
		</div>
		<input type="submit" name="send" value="Отправить сообщение" class="contact_form_button">
	</form>
@endsection


