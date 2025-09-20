<x-layout.app>
    <div class="mx-auto max-w-screen-md flex items-center justify-center p-28">

        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body ">
                <h1 class="card-title">Login</h1>

                <div class="flex-col space-y-2">
                    {{-- @if ($message = session()->get('message'))
                        <div>
                            {{ $message }}
                        </div>
                    @endif --}}
                    <form action="{{ route('login') }}" method="post" class="space-y-2" id="login-form">
                        @csrf
                        <div>
                            <input class="input input-bordered" type="email" name="email" placeholder="E-mail" />
                            @error('email')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <input class="input input-bordered" type="password" name="password" placeholder="Senha" />
                            @error('password')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>

                    <div class="card-actions">
                        <button class="btn btn-primary" type="submit" form="login-form">Logar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout.app>
