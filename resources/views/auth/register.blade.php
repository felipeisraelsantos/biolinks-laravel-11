<x-layout.app>

    <x-container>
        <x-card title="Register">

            <x-form :route="'register'" post id="register-form">

                <x-input name="name" type="name" placeholder="Nome" />
                <x-input name="email" type="email" placeholder="E-mail" />
                <x-input name="email_confirmation" placeholder="E-mail de confirmação" />
                <x-input name="password" type="password" placeholder="Senha" />

            </x-form>

            <x-slot:actions>
                <x-button type="submit" form="register-form">Registrar</x-button>
            </x-slot:actions>

        </x-card>
    </x-container>
</x-layout.app>
