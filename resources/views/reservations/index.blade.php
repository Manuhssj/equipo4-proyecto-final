@extends('layouts.app')
@section('contenido')

<div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
    <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
    - Hubo un error al añadir la reservación.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
    <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Se añadió la reservación de forma exitosa.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="card">
    <div class="card-header border-0">
        <h2>Tabla de reservaciones pendientes</h2>
        <div class="row g-4">
            <div class="col-sm">
                <div div class="d-flex justify-content-sm-end">
                    <!-- Grids in modals -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                        + Añadir una reservación
                    </button>
                    <div class="modal fade modal-lg" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalgridLabel">Formulario reservaciones</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3">
                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="firstName" class="form-label">Nombre(s) del cliente</label>
                                                    <input type="text" class="form-control" id="firstName" placeholder="Ingrese el nombre">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="lastName" class="form-label">Apellidos del cliente</label>
                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese los apellidos">
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="emailInput" class="form-label">Correo del cliente</label>
                                                    <input type="email" class="form-control" id="emailInput" placeholder="Ingrese correo electrónico">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="lastName" class="form-label">Número celular del cliente</label>
                                                    <input type="text" class="form-control" id="lastName" placeholder="Ingrese el numero celular">
                                                </div>
                                            </div>

                                            <div class="col-xxl-6">
                                                <div class="">
                                                    <label for="choices-single-no-sorting" class="form-label">Selccione el servicio</label>

                                                    <select class="form-control" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices data-choices-sorting-false>
                                                        <option value="Madrid">Madrid</option>
                                                        <option value="Toronto">Toronto</option>
                                                        <option value="Vancouver">Vancouver</option>
                                                        <option value="London">London</option>
                                                        <option value="Manchester">Manchester</option>
                                                        <option value="Liverpool">Liverpool</option>
                                                        <option value="Paris">Paris</option>
                                                        <option value="Malaga">Malaga</option>
                                                        <option value="Washington" disabled>Washington</option>
                                                        <option value="Lyon">Lyon</option>
                                                        <option value="Marseille">Marseille</option>
                                                        <option value="Hamburg">Hamburg</option>
                                                        <option value="Munich">Munich</option>
                                                        <option value="Barcelona">Barcelona</option>
                                                        <option value="Berlin">Berlin</option>
                                                        <option value="Montreal">Montreal</option>
                                                        <option value="New York">New York</option>
                                                        <option value="Michigan">Michigan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Input Date</label>
                                                    <input type="date" class="form-control" id="exampleInputdate">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="exampleInputtime" class="form-label">Input Time</label>
                                                    <input type="time" class="form-control" id="exampleInputtime">
                                                </div>
                                            </div>
                                            <!--end col-->

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
        <table id="dataTables-example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Folio</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- end tab content -->

    </div>
    <!-- end card body -->
</div>
<!-- end card -->

<div class="card">
    <div class="card-header border-0">
        <h2>Tabla de reservaciones confirmadas</h2>
    </div>
    <!-- end card header -->
    <div class="card-body">
        <!-- Tables Without Borders -->
        <table id="dataTables-example2" name="dataTables-example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Folio</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>1478963 </td>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>Nado con delfines </td>
                    <td>2022-11-30</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reservations.detailReservation') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger">
                                <i class="ri-delete-bin-5-line"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- end tab content -->

    </div>
    <!-- end card body -->
</div>

@endsection