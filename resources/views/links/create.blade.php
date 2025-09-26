<x-layout.app>

    <x-container class="h-full">
        <x-card title="Create a new link">
            <x-form :route="route('links.create')" post id="link-form">
                <x-input name="link" type="link" placeholder="Link" value="{{old('link')}}"/>
                <x-input name="name" type="name" placeholder="Nome" value="{{old('name')}}"/>
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')" class="link-primary link-hover">Cancel</x-a>
                <x-button type="submit" form="link-form">Create a new link</x-button>
            </x-slot:actions>
        </x-card>

    </x-container>
</x-layout.app>
