@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	<h1>Полезные заметки</h1>
	@foreach($cats as $cat)
		{!! $cat->date_note !!}
	    <a href="{{asset('notes/'.$cat->id)}}"><h3>{!! $cat->name !!}</h3></a>
    @endforeach    
@endsection
