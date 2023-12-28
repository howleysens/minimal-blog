@extends('layouts.main')
@section('title', 'Login')
@section('content')
    @include('partials.header')
    <!-- This is an example component -->
    <div class='flex py-8 justify-center min-h-screen'>
        <div class='w-full px-10 py-8 mx-auto bg-white border rounded-lg shadow-2xl'>
            <div class='max-w-md mx-auto space-y-3'>
                <h3 class="text-lg font-semibold">&#128540; My Account</h3>
                <form action="{{route('login_process')}}" method="POST">
                    @csrf
                    <div>
                        <label class="block py-1">Your email</label>
                        <input name="email" type="email"
                               class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-inset ring-gray-300 font-mono @error('password') border-red-500 @enderror">
                        <p class="text-sm mt-2 px-2 hidden text-gray-600">Text helper</p>
                    </div>
                    <div>
                        <label class="block py-1">Password</label>
                        <input name="password" type="password"
                               class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-inset ring-gray-300 font-mono @error('password') border-red-500 @enderror">
                    </div>
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <div class="flex gap-3 pt-3 items-center">
                        <button
                            class="border hover:border-indigo-600 px-4 py-2 rounded-lg shadow ring-1 ring-inset ring-gray-300">
                            Login
                        </button>
                        <div class="flex flex-col">
                            <a href="#" class="text-blue-800 hover:font-semibold">Forgot Password</a>
                            <a href="{{route('register')}}" class="text-green-800 hover:font-semibold">I'm newbie</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
