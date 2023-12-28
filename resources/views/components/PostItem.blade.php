@props([
    'title',
    'body',
    'thumbnail',
    'created_at',
    'id',
    'comments'
])

<div class="container mx-auto flex flex-wrap py-6">
    <section class="w-full  flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <a href="#" class="hover:opacity-75">
                <img class="w-52 h-52"
                     src="{{ empty($thumbnail) ? 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg' : $thumbnail }}"/>
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{!! $title !!}</a>
                <p href="#" class="text-sm pb-8">
                    By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on
                    <b>{{ $created_at }}</b>
                </p>
                <h1 class="text-2xl font-bold pb-3">Introduction</h1>
                <p class="pb-3">{!! $body !!}</p>
            </div>
        </article>

        <div class="w-full flex pt-6">
            <a href="{{ route('posts.show', max(1, $id - 1)) }}"
               class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center">
                    Previous
                </p>
            </a>
            <a href="{{ route('posts.show', $id + 1) }}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center justify-end">
                    Next
                </p>
            </a>
        </div>

        <h1 class="text-center font-semibold">Comments</h1>
        <form method="POST" action="{{ route('comment', $id) }}">
            @csrf
            <div class="w-96">
                <div class="relative w-full min-w-[200px]">
                    <textarea name="text"
                              class="w-full shadow-inner p-4 bg-gray-100 @error('text') border-red-500 @enderror"></textarea>
                    @error('text')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Send</button>
        </form>

        @foreach ($comments as $comment)
            <div
                class="w-full items-center flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
                <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                    <img src="https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg"
                         class="rounded-full shadow h-24 w-24">
                </div>
                <div class="flex-1 flex flex-col justify-center md:justify-start">
                    <p class="font-semibold text-2xl">{{ $comment->user->name }}</p>
                    <p class="pt-2">{{ $comment->text }}</p>
                </div>
            </div>
        @endforeach

    </section>
</div>
