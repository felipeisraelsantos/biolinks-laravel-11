@props(['href'])

<a href="{{ $href }}" {{ $attributes->class(["link"]) }}>{{ $slot }}</a>
