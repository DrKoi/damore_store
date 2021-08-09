@extends("layouts.master")

@section("contenido")
    
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Agregar Productos</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="categorias-select" class="form-label">Categoría</label>
                        <select class="form-select" id="categorias-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cant-txt" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cant-txt">
                    </div>
                    <div class="mb-3">
                        <label for="precio-txt" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio-txt">
                    </div>
                    <div class="mb-3">
                        <label for="img-txt" class="form-label">Imagen</label>
                        <input type="text" id="img-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion-txt" class="form-label">Descripcion</label>
                        <input type="text" id="descripcion-txt" class="form-control">
                    </div>
                </div>

                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("javascript")
    <script src="{{asset('js/home.js')}}"></script>
@endsection