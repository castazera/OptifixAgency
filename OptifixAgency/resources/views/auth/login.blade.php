<x-layout>
    <x-slot name="title">Iniciar sesión</x-slot>
    <x-slot name="description">Inicia sesión para acceder a tu cuenta</x-slot>
    <h1>Iniciar sesión</h1>
    <form action="{{ route('auth.authenticate') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <button type="submit">Iniciar sesión</button>
    </form>
</x-layout>