@extends('layouts.main')
@section('title', $post->title)
@section('content')
    @include('partials.header')
    <x-PostItem
        id="{{$post->id}}"
        title="{{$post->title}}"
        body="{{$post->body}}"
        thumbnail="{{$post->thumbnail}}"
        created_at="{{$post->formatted_created_at}}"
        :comments="$post->comments"
    />

@endsection
