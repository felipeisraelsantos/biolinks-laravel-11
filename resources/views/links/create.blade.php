<x-layout.app>
<div>
    <h1>Criar um Link</h1>

    <div>
        @if($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif
        <form action="{{ route('links.create') }}" method="post">
            @csrf
             <div>
                <input type="link" name="link" placeholder="Link" />
                @error('link')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <input name="name" placeholder="Nome" />
                @error('name')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <button>Salvar</button>
        </form>
    </div>
</div>
</x-layout.app>
