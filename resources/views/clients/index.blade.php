@extends('layouts.app')
@section('contenido')

<div class="card">

    @if (session('success'))
        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Se añadió el cliente de forma exitosa.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
            - Hubo un error al añadir el cliente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="card-header border-0">
        <div class="row g-4">

            <div class="col-sm">
                <div div class="d-flex justify-content-sm-end">
                    
                    <!-- Grids in modals -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                        + Añadir un Cliente
                    </button>
                    <div class="modal fade modal-lg" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalgridLabel">Formulario cliente</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('clients') }}" method="POST">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="firstName" class="form-label">Nombre(s)</label>
                                                    <input type="text" class="form-control" id="firstName" name="name" placeholder="Ingrese el nombre" maxlength="25" onkeypress="return soloLetras(event)" required>
                                                    @error('name')
                                                    <small>*{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="lastname" class="form-label">Apellidos</label>
                                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ingrese los apellidos" maxlength="25" onkeypress="return soloLetras(event)" required>
                                                    @error('lastname')
                                                    <small>*{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="emailInput" class="form-label">Correo</label>
                                                    <input type="email" class="form-control" id="emailInput" name="email" placeholder="Ingrese correo electrónico" maxlength="50" onkeypress="return soloLetrascorreo(event)" required>
                                                    @error('email')
                                                    <small>*{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="phone" class="form-label">Número celular</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingrese el numero celular" maxlength="10" onkeypress="return solonumeros(event)">
                                                    @error('phone')
                                                    <small>*{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end card header -->
    <div class="card-body">
        <!-- Tables Without Borders -->
        <table id="dataTables-10-row" name="dataTables-example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->lastname }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('clients.detailClient', $client->id) }}" class="link-primary">
                            {{-- <a href="{{ url('clients') }}/{{ $client->id }}" class="link-primary"> --}}
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <form class="form-eliminar" action="{{route('clients.delete', $client->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="ri-delete-bin-5-line"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- end tab content -->

    </div>
    <!-- end card body -->
</div>

@endsection