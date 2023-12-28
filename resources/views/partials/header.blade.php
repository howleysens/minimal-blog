<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{ route('home') }}">
            Minimal Blog
        </a>
        <a href="" class="font-semibold">write me back *click*</a>
        @auth('web')
            <a href="{{ route('logout') }}" class="text-lg text-gray-600">LOGOUT</a>
        @endauth
        @guest('web')
            <a href="{{ route('login') }}" class="text-lg text-gray-600">Auth</a>
        @endguest
    </div>
</header>
<nav class="w-full py-4 border-t border-b bg-gray-100">
    <div class="block sm:hidden">
        <a href="#"
           class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center">
            Topics
        </a>
    </div>
    <div :class="open ? 'block' : 'hidden'" class="w-full flex-grow flex-col sm:flex sm:items-center sm:w-auto">
        <div
            class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Technology</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Automotive</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Finance</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Politics</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Culture</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Sports</a>
        </div>
    </div>
</nav>
