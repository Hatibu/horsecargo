@extends('layouts.app')

@section('title', 'Contact Us - Horse Cargo | Dubai & Tanzania Offices')

@section('content')
    {{-- Navbar --}}
    <x-navbar />

    {{-- Main Content with padding for fixed navbar --}}
    <div class="pt-20">
        <x-locations />
    </div>

    {{-- Footer --}}
    <x-footer />
@endsection