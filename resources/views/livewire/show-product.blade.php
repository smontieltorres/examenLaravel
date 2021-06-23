<div>
    {{-- CONTAINER --}}
    <div class="container">
        {{-- ROW --}}
        <div class="row row-cols-1 row-cols-md-4">

            {{-- //////////////////////////////////
                INICIO CARDS - FOREACH
            /////////////////////////////////// --}}

            @foreach ($products as $product)
                <div class="col mb-4">
                    <div class="card h-100">

                        {{-- IMAGEN DEL PRODUCTO --}}
                        <img src="{{ asset('img/producto.jpg') }}" class="card-img-top" alt="...">


                        {{-- TITULO DEL PRODUCTO --}}
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </div>

                        {{-- LISTADO PRECIO INVENTARIO --}}
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Precio: {{ $product->price }}</li>
                            <li class="list-group-item">Inventario: {{ $product->stock }}</li>
                        </ul>

                        {{-- //////////////////////////////////
                         SI EL USUARIO NO HA INICIADO SESION
                        /////////////////////////////////// --}}

                        @guest
                            <div class="card-body text-center">
                                <button class="btn btn-primary" wire:click="redirectLogin">Comprar</button>
                            </div>
                        @endguest

                        {{-- //////////////////////////////////
                        SI EL USUARIO SI HA INICIADO SESION
                        /////////////////////////////////// --}}

                        @auth
                            <div class="card-body text-center">
                                <button href="javascript:void(0)" class="btn btn-primary">Comprar</button>
                            </div>
                        @endauth
                    </div>
                </div>
            @endforeach

            {{-- //////////////////////////////////
                INICIO CARDS - ENDFOREACH
            /////////////////////////////////// --}}

        </div>
        {{-- END ROW --}}
    </div>
    {{-- END CONTAINER --}}
</div>
