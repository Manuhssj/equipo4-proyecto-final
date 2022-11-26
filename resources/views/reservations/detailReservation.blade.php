@extends('layouts.app')
@section('contenido')

<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title flex-grow-1 mb-0">Reservación #VL2667</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-nowrap align-middle table-borderless mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th scope="col">Detalle reservación</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad de personas</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Duración</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                            <img src="{{asset('/images/dolphin.webp')}}" alt="" class="img-fluid d-block">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="fs-15"><a href="{{route('services.detailService')}}" class="link-primary">Nadar con delfines</a></h5>
                                            <p class="text-muted mb-0">Horario: <span class="fw-medium">09:00</span></p>
                                            <p class="text-muted mb-0">Fecha: <span class="fw-medium">2022-11-30</span></p>
                                        </div>
                                    </div>
                                </td>
                                <td>$119.99</td>
                                <td>02</td>
                                <td>
                                    Actividad -> Nadar con delfines
                                </td>
                                <td>
                                    4 horas
                                </td>

                            </tr>

                            <tr class="border-top border-top-dashed">
                                <td colspan="3"></td>
                                <td colspan="2" class="fw-medium p-0">
                                    <table class="table table-borderless mb-0">
                                        <tbody>

                                            <tr class="border-top border-top-dashed">
                                                <th scope="row">Total (USD) :</th>
                                                <th class="text-end">$239.98</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <div div class="d-flex justify-content-sm-end mt-3 me-3">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                            <i class="ri-edit-box-line"></i> Editar estatús de la reservación
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--end card-->

        <div class="card">

            <div class="card-body">
                <!-- Tables Without Borders -->
                <table class="table table-borderless table-nowrap align-middle">
                    <tbody>
                        <tr class="border-top">
                            <th scope="row">Folio</th>
                            <td>
                                #VL2667
                            </td>
                        </tr>
                        <tr class="border-top">
                            <th scope="row">Datos del Cliente</th>
                        </tr>
                        <tr class="border-top">
                            <th scope="row">Nombre del cliente</th>
                            <td>
                                Diego Alewandro Ochoa Duarte
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Correo Electrónico</th>
                            <td>
                                diegoc@gmail.com
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">No. celular</th>
                            <td>
                                612000000
                            </td>
                        </tr>
                        <tr class="border-top">
                            <th scope="row">Datos del Vendedor</th>
                        </tr>
                        <tr class="border-top">
                            <th scope="row">Nombre del Usuario</th>
                            <td>
                                Diego Alewandro Ochoa Duarte
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Correo Electrónico</th>
                            <td>
                                diegoc@gmail.com
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">No. celular</th>
                            <td>
                                612000000
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- end tab content -->

            </div>

        </div>

        <!--end card-->
    </div>
    <!--end col-->

    <!--end col-->
</div>

@endsection