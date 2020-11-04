@extends('clientes/layouts.header-footer-inicio')

@section('content')
<main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Iniciar sesión</h2>
            </div>
            <form>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input class="form-control item" type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input class="form-control" type="password" id="password" name="password" required>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button>
            </form>
        </div>
    </section>
</main>
@endsection