@extends('clientes/layouts.header-footer-inicio')

@section('content')
<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registro usuarios</h2>
            </div>
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre(s)</label>
                    <input class="form-control item" type="text" id="name" name="nombre" placeholder="Nombre(s)" required>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="app">Apellido paterno</label>
                            <input class="form-control item" type="text" id="app" name="app" placeholder="Apellido paterno" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="apm">Apellido materno</label>
                            <input class="form-control item" type="text" id="apm" name="apm" placeholder="Apellido materno" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="compania">Fecha de nacimiento</label>
                    <input class="form-control" type="date">
                </div>
                <div class="form-group">
                    <label for="usuario">Nombre de usuario</label>
                    <input class="form-control item" type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input class="form-control item" type="email" id="email" required placeholder="ejemplo@ejemplo.com">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input class="form-control item" type="password" id="password" required placeholder="Contraseña" minlength="8" name="password">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Registrarse</button>
            </form>
        </div>
    </section>
</main>
@endsection