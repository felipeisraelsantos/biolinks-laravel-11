<x-layout.app>

    <x-container class="h-full">
        <x-card title="Editing link :: id {{ $link->id }}">
            <x-form :route="route('links.edit', $link)" put id="edit-form">
                <x-input name="link" type="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
                <x-input name="name" type="name" placeholder="Nome" value="{{ old('name', $link->name) }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')" class="link-primary link-hover">Cancel</x-a>
                <x-button type="submit" form="edit-form">Update link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
