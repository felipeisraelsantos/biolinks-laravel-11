<x-layout.app>

    <x-container class="h-full">
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="profile-form" enctype="multipart/form-data">

                <div class="flex gap-2 items-center">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">

                            <img src="/storage/{{ $user->photo }}" alt="Profile picture">
                            <input type="file" name="photo" />
                        </div>

                    </div>
                    <x-file-input name="photo" />
                </div>

                {{-- <x-input name="link" type="link" placeholder="Link" value="{{ old('link', $link->link) }}" /> --}}
                <x-input name="name" type="name" placeholder="Nome" value="{{ old('name', $user->name) }}" />
                    <x-textarea name="description" value="{{ old('description', $user->description) }}" />
                    <x-input name="handler" prefix="biolinks.com.br/" placeholder="Handler" value="{{ old('handler', $user->handler) }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')" class="link-primary link-hover">Cancel</x-a>
                <x-button type="submit" form="profile-form">Update link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
