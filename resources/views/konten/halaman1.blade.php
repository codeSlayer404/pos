@extends('layout.index')

@section('title', $title)

@section('sidebar')
    @parent
        <li>JS</li>
        <li>PHP</li>
@endsection

@section('content')
    <p>{{ $content }}</p>
@stop