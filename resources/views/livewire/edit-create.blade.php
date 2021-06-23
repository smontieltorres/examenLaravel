<div class="row">

        <div class="col-12">
            <div class="card">
                @if ($isEdit)
                    <h5 class="card-header text-center">Editar Usuario</h5>
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
                        <label for="email">Ingrese el Correo Electronico:</label>
                        <input type="email" name="email" wire:model.defer="email" id="email" class="form-control">
                        @error("email")
                            <span style="color:red;">Tiennes que llenar el campo Correo</span>
                        @enderror
                    </div>
                    {{-- INVENTARIO --}}
                    <div class="form-group">
                        <label for="pass">Ingrese el contraseña:</label>
                        <input type="password" name="pass" wire:model="pass" id="pass" class="form-control">
                        @error("pass")
                            <span style="color:red;">Tiennes que llenar el campo Inventario</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Ingrese la direccion:</label>
                        <input type="text" name="address" wire:model.defer="address" id="address" class="form-control">
                        @error("address")
                            <span style="color:red;">Tiennes que llenar el campo Inventario</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cedula">Ingrese el cedula:</label>
                        <input type="number" name="cedula" wire:model.defer="cedula" id="cedula" class="form-control">
                        @error("cedula")
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
