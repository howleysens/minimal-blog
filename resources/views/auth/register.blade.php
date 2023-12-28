@extends('layouts.main')
@section('title', 'Login')
@section('content')
    @include('partials.header')
    <div class='flex py-8 justify-center min-h-screen'>
        <div class='w-full px-10 py-8 mx-auto bg-white border rounded-lg shadow-2xl'>
            <div class='max-w-md mx-auto space-y-3'>
                <h3 class="text-lg font-semibold">&#128540; Create Account</h3>
                <form action="{{route('register_process')}}" method="POST">
                    @csrf
                    <div>
                        <label class="block py-1">Your name</label>
                        <input name="name" type="text"
                               class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-inset ring-gray-300 font-mono @error('name') border-red-500 @enderror">
                        <p class="text-sm mt-2 px-2 hidden text-gray-600">Text helper</p>
                    </div>
                    @error('name')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <div>
                        <label class="block py-1">Your email</label>
                        <input name="email" type="email"
                               class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-inset ring-gray-300 font-mono @error('email') border-red-500 @enderror">
                        <p class="text-sm mt-2 px-2 hidden text-gray-600">Text helper</p>
                    </div>
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <div>
                        <label class="block py-1">Password</label>
                        <input name="password" type="password"
                               class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-inset ring-gray-300 font-mono @error('password') border-red-500 @enderror">
                    </div>
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <div>
                        <label class="block py-1">Password confirmation</label>
                        <input name="password_confirmation" type="password"
                               class="border w-full py-2 px-2 rounded shadow hover:border-indigo-600 ring-1 ring-inset ring-gray-300 font-mono @error('password') border-red-500 @enderror">
                    </div>
                    <div class="flex gap-3 pt-3 items-center">
                        <button
                            class="border hover:border-indigo-600 px-4 py-2 rounded-lg shadow ring-1 ring-inset ring-gray-300">
                            Register
                        </button>
                        <div class="flex flex-col">
                            <a href="#" class="text-blue-800 hover:font-semibold">Forgot Password</a>
                            <a href="{{route('login')}}" class="text-green-800 hover:font-semibold">I'm user!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
