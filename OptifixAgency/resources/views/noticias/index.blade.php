<x-layout>
    <x-slot:title>Noticias:</x-slot:title>

<div class="container py-5">
    <h1 class="text-center mb-5">Noticias Principales</h1>

    {{-- TODO ESTO DEBE APARECER SOLO SI EL USUARIO ESTA LOGUEADO --}}
    <p class="mb-3">
        <a href="{{route('noticias.create')}}" class="btn btn-primary">Agregar noticia</a>
    </p>

    <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                        <img src="" class="card-img-top" alt="noticia" style="height: 200px; object-fit: cover;">


                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-primary"></span>
                            {{-- <span class="badge {{ $noticia->estado === 'publicada' ? 'bg-success' : 'bg-warning' }}">
                                {{ ucfirst($noticia->estado) }}
                            </span> --}}
                        </div>

                        <h5 class="card-title">Noticia 1</h5>
                        <p class="card-text text-muted">Resumen de la noticia 1</p>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted">
                                <i class="fas fa-user me-1"></i> Autor de la noticia 1
                            </small>
                            <a href="" class="btn btn-outline-primary btn-sm">
                                Leer más
                            </a>
                            <a href="" class="btn btn-outline-warning btn-sm">
                                Editar
                            </a>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    Eliminar
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</x-layout>