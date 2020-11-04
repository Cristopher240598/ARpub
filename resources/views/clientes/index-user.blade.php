@extends('clientes/layouts.header-footer-usuario')

@section('content')
<main class="page blog-post-list" style="height: 100%;">
    <section class="completo clean-block clean-blog-list dark" style="height: 100%;">
        <div class="container" style="height: 100%;">
            <div class="block-heading">
                <h2 class="text-info">Mis diseños</h2>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="background-color: rgb(59,153,224);color: rgb(255,255,255);">Diseño</th>
                                <th class="text-center" style="background-color: rgb(59,153,224);color: rgb(255,255,255);">Descripción</th>
                                <th class="text-center" style="background-color: rgb(59,153,224);color: rgb(255,255,255);">Imagen</th>
                                <th class="text-center" style="background-color: rgb(59,153,224);color: rgb(255,255,255);">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border">Cell 1</td>
                                <td class="text-center border">Cell 2</td>
                                <td class="text-center d-xl-flex justify-content-xl-center align-items-xl-center border">
                                    <img src="{{ asset('assets/img/scenery/image4.jpg') }}" style="width: 300px;">
                                </td>
                                <td class="text-center border">
                                    <button class="btn btn-primary" type="button" style="background-color: rgb(30,150,49);">Obtener</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection