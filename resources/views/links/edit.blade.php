<div>
    <h1>Editar um link :: {{ $link->id }}</h1>

    <div>
        @if($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif
        <form action="{{ route('links.edit', $link) }}" method="post">
            @csrf
            @method('put')
             <div>
                <input type="link" name="link" placeholder="Link"  value="{{old('link', $link->link)}}" />
                @error('link')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <input name="name" placeholder="Nome" value="{{old('name', $link->name)}}"/>
                @error('name')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <a href="{{ route('dashboard') }}"> Cancelar </a>
            <button>Salvar</button>
        </form>
    </div>
</div>
