{{-- resources/views/pages/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Us - Horse Cargo | Dubai to Tanzania Shipping')

@section('content')
    {{-- Navbar --}}
    <x-navbar />

    <div class="pt-20"> 
        <x-about />
    </div>

    {{-- Footer --}}
    <x-footer />
@endsection