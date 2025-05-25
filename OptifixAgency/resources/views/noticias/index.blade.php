<x-layout>
    <x-slot:title>Noticias:</x-slot:title>



    <div class="container py-5">
        <h1 class="text-center mb-5" style="color:#21e6c1;">Noticias Principales</h1>

        {{-- TODO ESTO DEBE APARECER SOLO SI EL USUARIO ESTA LOGUEADO --}}
        <p class="mb-3 text-end">
            <a href="{{route('noticias.create')}}" class="btn btn-primary">Agregar noticia</a>
        </p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($noticias as $noticia)
                <div class="col mb-4">
                    <div class="card card-custom h-100">
                        <img src="{{ $noticia->imagen ? asset('storage/'.$noticia->imagen) : 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80' }}" class="card-img-top" alt="noticia" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge badge-custom">
                                    {{ ucfirst($noticia->estado) }}
                                </span>
                                <span class="badge bg-primary">
                                    {{ $noticia->categoria ?? 'Sin categoría' }}
                                </span>
                            </div>
                            <h5 class="card-title">{{ $noticia->titulo }}</h5>
                            <p class="card-text text-muted">{{ $noticia->resumen }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <small class="text-info">
                                    <i class="fas fa-user me-1"></i> {{ $noticia->autor }}
                                </small>
                                <a href="{{ route('noticias.show', ['id' => $noticia->id]) }}" class="btn btn-outline-primary btn-sm">
                                    Leer más
                                </a>
                                @auth
                                    <a href="{{ route('noticias.edit', ['id' => $noticia->id]) }}" class="btn btn-outline-warning btn-sm">
                                        Editar
                                    </a>
                                @endauth
                                @auth
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $noticia->id }}">
                                        Eliminar
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalEliminar{{ $noticia->id }}" tabindex="-1" aria-labelledby="modalEliminarLabel{{ $noticia->id }}" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content" style="background:#1f4068; color:#fff; border-radius:18px;">
                                          <div class="modal-header" style="border-bottom:1px solid #21e6c1;">
                                            <h5 class="modal-title" id="modalEliminarLabel{{ $noticia->id }}">Confirmar eliminación</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar" style="filter:invert(1);"></button>
                                          </div>
                                          <div class="modal-body">
                                            ¿Estas seguro de que quieres eliminar la noticia <b>{{ $noticia->titulo }}</b>?
                                          </div>
                                          <div class="modal-footer" style="border-top:1px solid #21e6c1;">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form action="{{ route('noticias.destroy', ['id' => $noticia->id]) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
