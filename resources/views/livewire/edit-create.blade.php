<div>

        <div class="col-12 col-md-4 mt-1 mb-2">
            <div class="card">
                @if ($isEdit)
                    <h5 class="card-header text-center">Editar Producto</h5>
                @else
                    <h5 class="card-header text-center">Crear Usuario</h5>
                @endif

                <div class="card-body">
                    {{-- NOMBRE --}}
                    <div class="form-group">
                        <label for="name">Ingrese el nombre</label>
                        <input type="text" name="name" wire:model.defer="name" id="name" class="form-control">
                        @error("name")
                            <span style="color:red;">Tiennes que llenar el campo Nombre</span>
                        @enderror
                    </div>
                    {{-- COSTO --}}
                    <div class="form-group">
                        <label for="price">Ingrese el Correo Electronico:</label>
                        <input type="email" name="price" wire:model.defer="email" id="price" class="form-control">
                        @error("price")
                            <span style="color:red;">Tiennes que llenar el campo Correo</span>
                        @enderror
                    </div>
                    {{-- INVENTARIO --}}
                    <div class="form-group">
                        <label for="stock">Ingrese el contraseña:</label>
                        <input type="password" name="stock" wire:model.defer="pass" id="stock" class="form-control">
                        @error("stock")
                            <span style="color:red;">Tiennes que llenar el campo Inventario</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stock">Ingrese la direccion:</label>
                        <input type="text" name="stock" wire:model.defer="address" id="stock" class="form-control">
                        @error("stock")
                            <span style="color:red;">Tiennes que llenar el campo Inventario</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stock">Ingrese el cedula:</label>
                        <input type="number" name="stock" wire:model.defer="cedula" id="stock" class="form-control">
                        @error("stock")
                            <span style="color:red;">Tiennes que llenar el campo Inventario</span>
                        @enderror
                    </div>
                    {{-- GUARDAR --}}
                    <div class="form-group text-center">
                        @if ($isEdit)
                            <button class="btn btn-success" wire:click="updateUser">Editar</button>
                            <button class="btn btn-danger" wire:click="default">Cancelar</button>
                        @else 
                            <button class="btn btn-success" wire:click="createUser">Guardar</button>
                            <button class="btn btn-danger" wire:click="default">Borrar Datos</button>
                        @endif
                    </div>
                </div>
            </div>
        </div> {{-- END 1ERA COLUMNA COL-4 --}}
</div>
