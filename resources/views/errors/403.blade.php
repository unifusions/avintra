@guest
    <x-guest-layout>

        <div class="container my-5">
            <h3>
                {{ $exception->getMessage() ?: 'Forbidden' }}
            </h3>

        </div>


    </x-guest-layout>

@endguest

@auth
    <x-app-layout>
        <x-slot name="header">
            <h2 class="">
                {{ __('Access Denied') }}
            </h2>


        </x-slot>
        <x-card>
            {{ $exception->getMessage() ?: 'Forbidden' }}

        </x-card>

    </x-app-layout>
@endauth
{{-- 
@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden')) --}}
