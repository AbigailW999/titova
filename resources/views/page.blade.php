@extends('layouts.app')

@section('styles')
@parent
<link href="{{asset('public/css/page.css')}}" rel="stylesheet"><!-- new css -->
@endsection

@section('content')
<div class="container">
    <div class="card-header">{{$obj->name}}</div>
    <div class="card-body">{!! $obj->body !!}</div>
</div>
@endsection
