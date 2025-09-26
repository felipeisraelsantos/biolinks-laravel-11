@props(['route', 'post' => null, 'put' => null])

@php
    $method = $post || $put ? 'post' : 'get';
@endphp

<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ $route }}" method="{{ $method }}" class="space-y-2">
    @csrf

    @if ($put)
        @method('put')
    @endif

    {{ $slot }}
</form>
