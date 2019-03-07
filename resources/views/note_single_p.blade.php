@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
		{!! $obj->date_note !!}
	    <h1>{!! $obj->name !!}</h1>
	    {!! $obj->body !!}    
@endsection
