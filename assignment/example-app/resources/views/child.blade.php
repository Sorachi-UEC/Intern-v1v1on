@extends('layouts.app')

@section('title', $title)

@section('content')
    <p>{{ $msg }}</p>
    <a href="{{ $link }}">{{$link}}</a>
@stop
