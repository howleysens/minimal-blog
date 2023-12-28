@props([
    'title',
    'body',
    'thumbnail',
    'created_at',
    'id',
])
<article class="flex flex-col shadow my-4 w-full">
        <a
            href="{{route('posts.show', $id)}}"
            class="hover:opacity-75">
            <img
                class="w-32 h-32"
                src="{{empty($thumbnail) ? 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg' : $thumbnail}}"
            />
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
            <a
                href="#"
                class="text-blue-700 text-sm font-bold uppercase pb-4"
            >Technology</a
            >
            <a
                href="#"
                class="text-3xl font-bold hover:text-gray-700 pb-4"
            >{!! $title !!}</a
            >
            <p
                href="#"
                class="text-sm pb-3">
                By
                <a
                    href="#"
                    class="font-semibold hover:text-gray-800"
                >David Grzyb</a
                >, Published on
                <b
                >{{$created_at}}</b
                >
            </p>
            <a
                href="#"
                class="pb-6"
            >{!!Str::limit($body, 50, '...')!!}</a
            >
            <a
                href="#"
                class="uppercase text-gray-800 hover:text-black"
            >Continue Reading <i class="fas fa-arrow-right"></i
                ></a>
        </div>
</article>
