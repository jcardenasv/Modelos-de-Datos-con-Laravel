@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card">
        <div class="card-header">
            Gestión de Servicios
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['servicios'] as $servicio)
                        <tr>
                            <td>{{ $servicio->getId() }}</td>
                            <td>{{ $servicio->getName() }}</td>
                            <td>{{ $servicio->getPrice() }}</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
