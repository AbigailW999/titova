@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	<div class="content_box">
		<div class="single_n_box">
			{!! $obj->date_note !!}
		    <h1 class="h1_single_note">{!! $obj->name !!}</h1>
		    {!! $obj->body !!}  
		</div>
	</div>  
@endsection
