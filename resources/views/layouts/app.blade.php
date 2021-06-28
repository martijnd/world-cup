@extends('layouts.base')

@section('body')
    <livewire:nav-bar />
    <div class="p-4">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
