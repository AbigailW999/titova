@extends('layouts.app')

@section('styles')
@parent
<link href="{{ asset('css/page.css') }}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
	<div class="content_box">
		<div class="note_box">
			<h1>Полезные заметки</h1>
			@foreach($cats as $cat)
				<div class="note_link_box">
					{!! $cat->date_note !!}
				    <a href="{{asset('notes/'.$cat->id)}}" class="notes_links">{!! $cat->name !!}</a>
				</div>
		    @endforeach  
		</div> 
	</div> 
@endsection
