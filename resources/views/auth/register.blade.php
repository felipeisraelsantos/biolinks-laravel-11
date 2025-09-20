<x-layout.app>
<div>
    <h1>Resgister</h1>

    <div>
        @if($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif
        <form action="{{ route('register') }}" method="post">
            @csrf
             <div>
                <input type="name" name="name" placeholder="Nome" />
                @error('name')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <input name="email" placeholder="E-mail" />
                @error('email')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
             <div>
                <input name="email_confirmation" placeholder="Confirmação de E-mail" />
            </div>
            <br>
            <div>
                <input type="password" name="password" placeholder="Senha" />
                @error('password')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <button>Registrar</button>
        </form>
    </div>
</div>
</x-layout.app>
