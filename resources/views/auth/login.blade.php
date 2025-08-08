<div>
    <h1>Login</h1>

    <div>
        @if($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif
        <form action="/login" method="post">
            @csrf
            <div>
                <input type="email" name="email" placeholder="E-mail" />
                @error('email')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input type="password" name="password" placeholder="Senha" />
                @error('password')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <button>Logar</button>
        </form>
    </div>
</div>
