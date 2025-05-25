<x-layout>
    <x-slot:title>Eliminar noticia</x-slot:title>
    <h1>Eliminar noticia {{ $noticia->titulo }}</h1>

    <dl>
        <dt>Titulo</dt>
        <dd>{{ $noticia->titulo }}</dd>
        <dt>Resumen</dt>
        <dd>{{ $noticia->resumen }}</dd>
        <dt>Contenido</dt>
        <dd>{{ $noticia->contenido }}</dd>
        <dt>Autor</dt>
        <dd>{{ $noticia->autor }}</dd>
        <dt>Imagen</dt>
        <dd>{{ $noticia->imagen }}</dd>
        <dt>Estado</dt>
        <dd>{{ $noticia->estado }}</dd>
        <dt>Categoria</dt>
        <dd>{{ $noticia->categoria }}</dd>
    </dl>

    <p><a href="{{ route('noticias.index') }}">Volver a la noticias</a></p>

    <form action="{{ route('noticias.destroy', ['id' => $noticia->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <div>
            <p>¿Estás seguro de querer eliminar la noticia <b>{{ $noticia->titulo }}</b>?</p>
        </div>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>


</x-layout>
