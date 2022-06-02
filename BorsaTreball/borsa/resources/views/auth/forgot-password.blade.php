



<x-guest-layout>
@extends('layouts.app')

@section('content')
@include('borsa.header')


    <x-auth-card>
        <x-slot name="logo">
            
        </x-slot>
     
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Has oblidat la teva contrasenya? Cap problema. Només heu de fer-nos saber la vostra adreça de correu electrònic i us enviarem per correu electrònic un enllaç de restabliment de la contrasenya que us permetrà triar-ne una de nova.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Enllaç de restabliment de la contrasenya del correu electrònic') }}
                </x-button>
            </div>


        </form>
    </x-auth-card>
</x-guest-layout>



@include('borsa.footer')

@endsection


