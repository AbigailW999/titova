@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	@foreach($cats as $cat)
        {!! $cat->name !!}
	    {!! $cat->body !!}
    @endforeach    
@endsection
