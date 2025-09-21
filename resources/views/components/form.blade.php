@props(['route', 'post' => null])

<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ $route }}" method="{{ $post ? 'post' : 'get' }}" class="space-y-2">
    @csrf

    {{ $slot }}
</form>
