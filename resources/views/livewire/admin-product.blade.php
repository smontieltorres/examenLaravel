<div>

    <div class="container">
        <div class="row">

            {{-- ////////////////////////////// --}}
            {{-- CREAR/EDITAR PRODUCTOS --}}
            {{-- ////////////////////////////// --}}

            <div class="col-12 col-md-4 mt-1 mb-2">
                <div class="card">
                    @if ($isEdit)
                        <h5 class="card-header text-center">Editar Producto</h5>
                    @else
                        <h5 class="card-header text-center">Crear Producto</h5>
                    @endif

                    <div class="card-body">
                        {{-- NOMBRE --}}
                        <div class="form-group">
                            <label for="title">Ingrese el nombre</label>
                            <input type="text" name="name" wire:model.defer="name" id="name" class="form-control">
                        </div>
                        {{-- COSTO --}}
                        <div class="form-group">
                            <label for="price">Ingrese el costo:</label>
                            <input type="number" name="price" wire:model.defer="price" id="price" class="form-control">
                        </div>
                        {{-- INVENTARIO --}}
                        <div class="form-group">
                            <label for="stock">Ingrese el inventario:</label>
                            <input type="number" name="stock" wire:model.defer="stock" id="stock" class="form-control">
                        </div>
                        {{-- GUARDAR --}}
                        <div class="form-group text-center">
                            @if ($isEdit)
                                <button class="btn btn-success" wire:click="save">Guardar</button>
                                <button class="btn btn-danger" wire:click="default">Cancelar</button>
                            @else
                                <button class="btn btn-success" wire:click="create">Guardar</button>
                                <button class="btn btn-danger" wire:click="default">Borrar Datos</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div> {{-- END 1ERA COLUMNA COL-4 --}}

            {{-- ////////////////////////////// --}}
            {{-- LISTA DE PRODUCTOS --}}
            {{-- ////////////////////////////// --}}

            <div class="col-12 col-md-8 mt-1 mb-2">
                <div class="card">
                    <h5 class="card-header text-center">Lista de productos</h5>
                    <div class="card-body">
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                {{-- TABLE HEADER --}}
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Inventario</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>

                                {{-- TABLE ROW 1 - FOREACH --}}
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>
                                            <button class="btn btn-primary" wire:click="update({{ $product->id }})"
                                                style="width:78px;">Editar</button>
                                            <button class="btn btn-danger"
                                                wire:click="destroy({{ $product->id }})">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- END TABLE ROW 1 - END FOREACH --}}

                            </tbody>
                        </table>{{-- END TABLE --}}
                    </div>
                </div>
            </div> {{-- END 2NDA COLUMNA COL-8 --}}
        </div>
        {{-- END ROW --}}
    </div>
    {{-- END CONTAINER --}}

</div>
