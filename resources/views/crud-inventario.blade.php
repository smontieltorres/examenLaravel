@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            {{-- ////////////////////////////// --}}
            {{-- CREAR/EDITAR PRODUCTOS --}}
            {{-- ////////////////////////////// --}}

            <div class="col-12 col-md-4 mt-1 mb-2">
                <div class="card">

                    <h5 class="card-header text-center">Crear/Editar Producto</h5>

                    <div class="card-body">
                        {{-- TITULO --}}
                        <div class="form-group">
                            <label for="title">Ingrese el titulo</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        {{-- COSTO --}}
                        <div class="form-group">
                            <label for="price">Ingrese el costo:</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                        {{-- INVENTARIO --}}
                        <div class="form-group">
                            <label for="stock">Ingrese el inventario:</label>
                            <input type="text" name="stock" id="stock" class="form-control">
                        </div>
                        {{-- GUARDAR --}}
                        <div class="form-group text-center">
                            <button class="btn btn-success">Guardar</button>
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
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Inventario</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>

                            {{-- TABLE ROW 1 - FOREACH --}}
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Producto</td>
                                <td>250$</td>
                                <td>12</td>
                                <td>
                                    <button class="btn btn-warning" style="width:78px;">Editar</button>
                                    <button class="btn btn-danger">Eliminar</button>
                                </td>
                              </tr>
                            {{-- END TABLE ROW 1 - END FOREACH --}}

                              {{-- TABLE ROW 2 --}}
                              <tr>
                                <th scope="row">1</th>
                                <td>Producto</td>
                                <td>250$</td>
                                <td>12</td>
                                <td>
                                    <button class="btn btn-warning" style="width:78px;">Editar</button>
                                    <button class="btn btn-danger">Eliminar</button>
                                </td>
                              </tr>
                              {{-- END TABLE ROW 2 --}}

                              {{-- TABLE ROW 3 --}}
                              <tr>
                                <th scope="row">1</th>
                                <td>Producto</td>
                                <td>250$</td>
                                <td>12</td>
                                <td>
                                    <button class="btn btn-warning" style="width:78px;">Editar</button>
                                    <button class="btn btn-danger">Eliminar</button>
                                </td>
                              </tr>
                              {{-- END TABLE ROW 3 --}}

                            </tbody> 
                          </table>{{-- END TABLE --}}
                    </div>
                </div>
            </div> {{-- END 2NDA COLUMNA COL-8 --}}
        </div>
        {{-- END ROW --}}
    </div>
    {{-- END CONTAINER --}}

@endsection