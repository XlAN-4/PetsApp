{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>--}}

@extends('layouts.app')

@section('title', 'Dashboard Page - PetsApp')

@section('content')

<div class="menu">
    <a href="javascript:;" class="closem">
        <img src="{{ asset('images/mburger-close.svg') }}" alt="">
    </a>
    <nav>
        <img src="{{ asset('images') . '/' . Auth::user()->photo }}" alt="Photo">
        <h4>{{ Auth::user()->fullname }}</h4>
        <h5>{{ Auth::user()->role }}</h5>
        <form action="{{ route('logout') }}" method="post">
            <button class="closes">Log Out</button>
            @csrf
        </form>
    </nav>
</div>


<header class="nav level-0">
    <a href="">
        <img src="{{ asset('images/ico-back.svg') }}" alt="Back">
    </a>
    <img src="{{ asset('images/Logo.svg') }}" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="{{ asset('images/burger.svg') }}"  alt="Menu Burger">
    </a>
</header>


<section class="dashboard">
    <h1>Dashboard: Admin</h1>
    <menu>
        <ul>
            <li>
                <a href="{{ url('users') }}">
                    <img src="{{ asset('images/Usuario logo.svg') }}" alt="Users">
                    <span>Module User</span>    
                </a>
            </li>
            <li>
                <a href="{{ url('pets') }}">
                    <img src="{{ asset('images/Pets Logo.svg') }}" alt="Pets">
                    <span>Module Pets</span>
                </a>
            </li>
            <li>
                <a href="{{ url('adoptions') }}">
                    <img src="{{ asset('images/logo adoption.svg') }}" alt="Adoptions">
                    <span>Module Adoptions</span>
                </a>
            </li>
        </ul>
    </menu>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('body').on('click', '.mburger',  function () {
            $('.menu').addClass('open')
        })
        $('body').on('click', '.closem',  function () {
            $('.menu').removeClass('open')
        })
    })
</script>
@endsection

