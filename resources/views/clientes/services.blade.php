@extends('clientes/layouts.header-footer-inicio')

@section('content')
<main class="page service-page">
    <section class="clean-block clean-services dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Servicios</h2>
                <p>Los servicios que ofrecemos le permiten</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top w-100 d-block" src="{{ asset('assets/img/scenery/image5.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title">Servicio 1</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top w-100 d-block" src="{{ asset('assets/img/scenery/image6.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title">Servicio 2</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top w-100 d-block" src="{{ asset('assets/img/scenery/image1.jpg') }}">
                        <div class="card-body">
                            <h4 class="card-title">Servicio 3</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection