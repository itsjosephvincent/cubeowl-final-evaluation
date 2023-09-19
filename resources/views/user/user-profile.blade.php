@extends('layouts.app')

@section('title', 'CubeOwl | My Profile')

@section('content')
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="space-y-12 sm:space-y-16">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-600">Update your account details.</p>

                <div class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">First name</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="first_name" id="first_name" autocomplete="first_name" required value="{{ $user->first_name }}" class="block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 @error('first_name') border-red-500 @enderror">
                        </div>


                        @error('first_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Last name</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="last_name" id="last_name" autocomplete="last_name" required value="{{ $user->last_name }}" class="block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 @error('last_name') border-red-500 @enderror">
                        </div>

                        @error('last_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Email address</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="email" name="email" id="email" autocomplete="email" required value="{{ $user->email }}" class="block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 @error('email') border-red-500 @enderror">
                        </div>

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Password</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="password" name="password" id="password" autocomplete="password" class="block w-full rounded-md border-0 px-4 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 @error('password') border-red-500 @enderror">
                        </div>

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </form>
@endsection
