@extends('clientes/layouts.header-footer-usuario')

@section('content')
<main class="page blog-post-list" style="height: 100%;">
    <section class="completo clean-block clean-blog-list dark" style="height: 100%;">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Crear diseño</h2>
            </div>
            <div class="d-xl-flex justify-content-xl-center block-content">
                <form>
                    <div class="form-group">
                        <label for="archivo1">Agregar 1° archivo</label>
                        <input class="d-table" type="file" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <label for="archivo2">Agregar 2° archivo</label>
                        <input class="d-table" type="file" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <label for="texto">Texto</label>
                        <input class="form-control" type="text" id="texto" name="texto">
                    </div>
                    <button class="btn btn-success btn-block" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection