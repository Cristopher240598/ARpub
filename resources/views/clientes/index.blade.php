@extends('clientes/layouts.header-footer-inicio')

@section('content')
<main class="page landing-page">
    <section class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Publicidad con realidad aumentada</h2>
                <p>Nuestra aplicación permite mostrar sus productos en 3D</p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img class="img-thumbnail" src="{{ asset('assets/img/Inicio/Realidad-Virtual-Aumentada-ar.jpg') }}">
                </div>
                <div class="col-md-6">
                    <h3>Realidad aumentada</h3>
                    <div class="getting-started-info">
                        <p class="text-justify"><br>La realidad aumentada nos permite añadir capas de información visual sobre el mundo real que nos rodea, utilizando la tecnología, dispositivos como pueden ser nuestros propios teléfonos móviles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection