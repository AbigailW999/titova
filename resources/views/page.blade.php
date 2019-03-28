@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	<div class="content_box">
    	{!! $obj->body !!}
    </div>
@endsection


