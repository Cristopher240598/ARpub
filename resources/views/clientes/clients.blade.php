@extends('clientes/layouts.header-footer-inicio')

@section('content')
<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registro clientes</h2>
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
                    <label for="empresa">Nombre de la empresa</label>
                    <input class="form-control item" type="text" id="empresa" name="empresa" placeholder="Nombre de la empresa" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Número telefónico</label>
                    <div class="form-row" style="width: 280px;">
                        <div class="col" style="max-width: 100px;">
                            <span class="float-left d-xl-flex justify-content-xl-center align-items-xl-center" style="height: 38px;font-size: 20px;color: rgb(73,80,87);padding-right: 5px;">+</span>
                            <input class="form-control item" type="number" id="prefijo" name="prefijo" placeholder="52" required value="52" style="width: 70px;" minlength="2" maxlength="2">
                        </div>
                        <div class="col" style="max-width: 165px;">
                            <input class="form-control item" type="number" id="telefono" name="telefono" placeholder="7220000000" required minlength="10" maxlength="10">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input class="form-control item" type="text" id="rfc" name="rfc" placeholder="RFC" required>
                </div>
                <div class="form-group">
                    <label for="usuario">Nombre de usuario</label>
                    <input class="form-control item" type="text" id="usuario" name="usuario" placeholder="Nombre de usuario" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input class="form-control item" type="email" id="email" name="email" required placeholder="ejemplo@ejemplo.com"></div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input class="form-control item" type="password" id="password" name="password" required placeholder="Contraseña" minlength="8">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Registrarse</button>
            </form>
        </div>
    </section>
</main>
@endsection