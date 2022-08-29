@extends('layout')
@section('title', 'POST')
@section('content')
    <hr>
    <p>{{$post->id}}</p>
    <hr>
    <h1>{{$post->title}}</h1>
    <hr>
    <p>{{$post->body}}</p>
    <hr>
    <p>{{$post->updated_at}}</p>
@endsection
