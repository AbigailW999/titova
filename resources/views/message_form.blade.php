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
	<div class="content_box">
		<h1 class="h1_form">сообщение</h1>
		<form name="contact_form" class="contact_form" method="POST" enctype="multipart/form-data" action="{{asset('message')}}">
		{!! csrf_field() !!}
			<div class="form__group">
			  <input type="text" name="name" class="form__field" placeholder="Ваше имя" required><br>
			  <label for="text" class="form__label">Ваше имя</label>
			</div>

			<div class="form__group">
			  <input type="text" name="contact" class="form__field" placeholder="Телефон или email" pattern="\+[0-9]{1,4}[0-9]{1,10}|(.*)@(.*)\" title="contact" oninvalid="setCustomValidity('Пожалуйста, введите номер телефона или email')" required><br>
			  <label for="text" class="form__label">Телефон или email</label>
			</div>

			<div class="form__group" id="form__group_textarea">
			  <textarea id="textarea" name="description" class="form__field" placeholder="Ваш вопрос или предложение" rows="6"></textarea><br>
			  <label for="message" class="form__label">Ваш вопрос или предложение</label>
			</div>

			<div class="contact_upload_container">
				<input id="file-input" type="file" name="picture" accept="image/*" multiple>
			    <label for="file-input"><img src="img/upload.svg">Прикрепить файл</label>
			    <div class="contact_form_file-name"></div>
			</div>
			<input type="submit" name="send" value="Отправить сообщение" class="contact_form_button">
		</form>
	</div>
@endsection


