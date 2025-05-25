<x-layout>
    <x-slot:title>Agregar noticia</x-slot:title>
    <h1>Agregar noticia</h1>

    <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf {{--Token de seguridad--}}
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" value="{{ old('titulo') }}" >
            @error('titulo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="resumen" class="form-label">Resumen</label>
            <input type="text" class="form-control @error('resumen') is-invalid @enderror" id="resumen" name="resumen" value="{{ old('resumen') }}" >
            @error('resumen')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea class="form-control @error('contenido') is-invalid @enderror" id="contenido" name="contenido" rows="3" >{{ old('contenido') }}</textarea>
            @error('contenido')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control @error('autor') is-invalid @enderror" id="autor" name="autor" value="{{ old('autor') }}" >
            @error('autor')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control @error('imagen') is-invalid @enderror" id="imagen" name="imagen" value="{{ old('imagen') }}" >
            @error('imagen')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" class="form-control @error('categoria') is-invalid @enderror" id="categoria" name="categoria" value="{{ old('categoria') }}" >
            @error('categoria')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" value="{{ old('estado') }}" >
            @error('estado')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</x-layout>