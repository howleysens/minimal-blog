@extends('layouts.main')
@section('title', 'Home')
@section('content')
    @include('partials.header')
    <div class="container mx-auto flex flex-wrap py-6">
        <section class="w-full flex flex-col items-center px-3">
            @foreach($posts as $post)
                <x-PostCard
                    id="{{$post->id}}"
                    title="{{$post->title}}"
                    body="{{$post->body}}"
                    thumbnail="{{$post->thumbnail}}"
                    created_at="{{$post->formatted_created_at}}"
                />
            @endforeach
            <div class="py-8">{{ $posts->links() }}</div>
        </section>
    </div>
@endsection
