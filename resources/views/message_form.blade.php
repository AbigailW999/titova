@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	<h1>сообщение</h1>
	<form name="contact_form" class="contact_form" method="POST" enctype="multipart/form-data" action="">
		<input type="text" name="name" placeholder="Ваше имя" class="contact_form_name" required><br>
		<input type="text" name="numb_email" placeholder="Телефон или email" pattern="\+[0-9]{1,4}[0-9]{1,10}|(.*)@(.*)\" title="cds" oninvalid="setCustomValidity('Пожалуйста, введите номер телефона или email')" class="contact_form_numb_email" required><br>
		<textarea name="description" placeholder="Ваш вопрос или предложение" class="contact_form_decription"></textarea><br>
		<div class="contact_upload_container">
			<input id="file-input" type="file" name="photo[]" accept="image/*" multiple>
            <label for="file-input"><img src="../img/upload.png">Прикрепить файл</label>
		</div>
		<input type="submit" name="dd" value="Отправить сообщение" class="contact_form_button">
	</form>
@endsection
