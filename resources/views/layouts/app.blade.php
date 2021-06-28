@extends('layouts.base')

@section('body')
<div class="p-4">
    @yield('content')

    @isset($slot)
    {{ $slot }}
    @endisset
</div>
@endsection
