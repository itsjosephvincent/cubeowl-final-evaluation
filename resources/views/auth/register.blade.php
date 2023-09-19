@extends('layouts.welcome')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
    <h2 class="text-2xl font-semibold mb-6">Register</h2>

    <form action="{{ route('sign-up.user') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="first_name" class="block text-gray-700">First name</label>
            <input type="text" name="first_name" id="first_name" class="border rounded-md px-4 py-2 w-full @error('first_name') border-red-500 @enderror" value="{{ old('first_name') }}" required autofocus>

            @error('first_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="last_name" class="block text-gray-700">Last name</label>
            <input type="text" name="last_name" id="last_name" class="border rounded-md px-4 py-2 w-full @error('last_name') border-red-500 @enderror" value="{{ old('last_name') }}" required autofocus>

            @error('last_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email address</label>
            <input type="email" name="email" id="email" class="border rounded-md px-4 py-2 w-full @error('email') border-red-500 @enderror" value="{{ old('email') }}" required autofocus>

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="border rounded-md px-4 py-2 w-full @error('password') border-red-500 @enderror" required>

            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-indigo-600 text-white rounded-md px-4 py-2 w-full hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-200">
                Create account
            </button>
        </div>
    </form>

    <div class="text-left">
        <p class="text-gray-700 text-xs">Already have an account?</p>
        <a href="{{ route('login') }}" class="text-indigo-600 hover:underline text-xs">Login</a>
    </div>
</div>
@endsection
