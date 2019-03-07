@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	<input type="text" name="text">
	<input type="text" name="text">
	<input type="text" name="text">
@endsection
