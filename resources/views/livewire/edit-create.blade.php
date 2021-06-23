<div>
{{-- {{ $users }} --}}
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input wire:model="name" id="name" type="text" class="form-control" >

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>

            <div class="col-md-6">
                <input wire:model="email" id="email" type="email" class="form-control" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

            <div class="col-md-6">
                <input wire:model="pass" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Ingresa tu direccion') }}</label>

            <div class="col-md-6">
                <input wire:model="address" id="address" type="text" class="form-control" name="address" required autocomplete="new-password">
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
        

        <div class="form-group row">
            <label  for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Ingresa tu cedula') }}</label>

            <div class="col-md-6">
                <input wire:model="cedula" id="cedula" type="text" class="form-control" name="cedula" required autocomplete="new-password">
                @error('cedula')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>

    
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button  class="btn btn-primary" wire:click="updateUser">
                    {{ __('Actualizar') }}
                </button>
            </div>
        </div>

</div>
