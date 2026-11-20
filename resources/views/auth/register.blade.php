@extends('layouts.app')
@section('title', 'register')
@section('content')

<div align="center">
    <div style="padding-top: 60px;">
    <form method="POST" action="{{ route('register') }}">
        @csrf
<div style="padding: 20px; border: 3px solid #ccc; background-color: #f9f9f9; width: 800px;">
        <!-- Name -->
        <div class="col-md-6">
            <x-input-label class="col-sm-2 col-form-label" for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="col-md-6">
            <x-input-label class="col-sm-2 col-form-label" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="col-md-6">
            <x-input-label class="col-sm-2 col-form-label" for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="col-md-6">
            <x-input-label class="col-sm-2 col-form-label" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
                <!-- branch -->
        <div class="col-md-6">
            <x-input-label class="col-sm-2 col-form-label" for="branch_id" :value="__('Branch')" />
            <x-text-input id="branch_id" class="block mt-1 w-full" type="text" name="branch_id" :value="old('branch_id')" required autofocus autocomplete="branch_id" />
            <x-input-error :messages="$errors->get('branch_id')" class="mt-2" />
        </div>
                <!-- Name -->
        <div class="col-md-6">
            <x-input-label class="col-sm-2 col-form-label" for="education_level_id" :value="__('Education Level')" />
            <x-text-input id="education_level_id" class="block mt-1 w-full" type="text" name="education_level_id" :value="old('education_level_id')" required autofocus autocomplete="education_level_id" />
            <x-input-error :messages="$errors->get('education_level_id')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="btn-active">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        </div>
    </form>
    </div>
</div>
@endsection
