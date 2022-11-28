@extends('layouts.app')
@section('contenido')

<div class="card">

    @if (session('success'))
        <!-- Boton con el alert por error al iniciar sesion -->
        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
            - Los datos no se pudieron actualizar, datos incorrectos
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('error'))
        <!-- Success Alert -->
        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Actualización completada
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div>
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n2 mt-n2">
                <div class="profile-wid-bg">
                    <img src="{{asset('images/fondo-profile.jpg')}}" alt="" class="profile-wid-img" />
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                <div class="row g-4">
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">{{ $clients->name.' '.$clients->lastname }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <br>
                        <div class="d-flex justify-content-sm-start">
                            <div class="col-xxl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Información Personal</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Nombre: </th>
                                                        <td class="text-muted">{{$clients->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Apellidos: </th>
                                                        <td class="text-muted">{{$clients->lastname}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">No. Celular:</th>
                                                        <td class="text-muted">{{$clients->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Correo Electrónico: </th>
                                                        <td class="text-muted">{{$clients->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Fecha de creación: </th>
                                                        <td class="text-muted">{{ $clients->created_at }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Ultima actualización: </th>
                                                        <td class="text-muted">{{ $clients->updated_at }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="d-flex justify-content-sm-center">
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#profileClientModal"><i class="ri-edit-box-line align-bottom"></i> Editar Cliente</button>
                                                <div class="modal fade modal-lg" id="profileClientModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="profileClientModal">Editar Cliente</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="javascript:void(0);">
                                                                    <div class="row g-3">
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="firstName" class="form-label">Nombre(s)</label>
                                                                                <input type="text" class="form-control" id="firstName" name="name" placeholder="Ingrese el nombre" value="{{ $clients->name }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="lastName" class="form-label">Apellidos</label>
                                                                                <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Ingrese los apellidos" value="{{ $clients->lastname }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="emailInput" class="form-label">Correo</label>
                                                                                <input type="email" class="form-control" id="emailInput" name="email" placeholder="Ingrese correo electrónico" value="{{ $clients->email }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-6">
                                                                            <div>
                                                                                <label for="phone" class="form-label">Número celular</label>
                                                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingrese el numero celular" value="{{ $clients->phone }}" minlength="10" maxlength="10" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="hstack gap-2 justify-content-end">
                                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" class="btn btn-success">Guardar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end row-->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                            </div><!-- end row -->
                        </div>
                        <!--end col-->
                        <!-- end col -->
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>

        <!-- Mis pedidos -->
        <div class="col-lg-8" style="width: 95%; padding:2%">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Mis Reservaciones</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <!-- Tables Without Borders -->
                    <table class="table table-borderless table-nowrap align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Folio</th>
                                <th scope="col">Enviar a</th>
                                <th scope="col">Estado de la Reservación</th>
                                <th scope="col">Servicio</th>
                                <th scope="col">Cantidad de personas</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Total</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th>82712</th>
                                <td>Annette González - CP 23088</td>
                                <td>Entregado</td>
                                <td>Comedor Miguel con 4 Sillas</td>
                                <td>1</td>
                                <td>$ 8999.98</td>
                                <td>$ 8999.98</td>

                                <td>
                                    <div class="hstack gap-3 fs-15">
                                        <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                        <button type="button" class="btn btn-primary">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end tab content -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div>
        <!--end row-->
    </div><!-- container-fluid -->
</div>

@endsection