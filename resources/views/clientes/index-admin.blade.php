@extends('clientes/layouts.header-footer-index-admin')

@section('content')
<main class="page blog-post-list" style="height: 100%;">
    <section class="completo clean-block clean-blog-list dark" style="height: 100%;">
        <div class="container" style="height: 100%;">
            <div class="block-heading">
                <h2 class="text-info">Clientes</h2>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center" style="background-color: rgb(59,153,224);color: rgb(255,255,255);">Nombre</th>
                                <th class="text-center" style="background-color: rgb(59,153,224);color: rgb(255,255,255);">Empresa</th>
                                <th class="text-center" style="background-color: rgb(59,153,224);color: rgb(255,255,255);">Pago</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center border">Cell 1</td>
                                <td class="text-center border">Cell 2</td>
                                <td class="text-center border">Cell 3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection