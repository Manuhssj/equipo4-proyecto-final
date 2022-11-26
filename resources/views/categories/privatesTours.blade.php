@extends('layouts.app')
@section('contenido')

<div class="row">

    <div class="col-xl-12 col-lg-12">
        <div>
            <div class="card">
                <div class="card-header border-0">
                    <div class="row g-4">

                        <div class="col-sm">
                            <!-- Boton con el alert por error al iniciar sesion -->
                            <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
                                <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
                                - El registro no se pudo completar, la categoría no se pudo agregar
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <!-- Success Alert -->
                            <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
                                <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Categoría agregada
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div div class="d-flex justify-content-sm-end">


                                <!-- Grids in modals -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgridClient">
                                    + Añadir un tour privado
                                </button>
                                <div class="modal fade modal-lg" id="exampleModalgridClient" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalgridClient">Formulario usuario</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="javascript:void(0);">
                                                    <div class="row g-3">

                                                        <div class="col-xxl-6">
                                                            <div>
                                                                <label for="emailInput" class="form-label">Correo</label>
                                                                <input type="email" class="form-control" id="emailInput" placeholder="Ingrese correo electrónico">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-6">
                                                            <div>
                                                                <label for="passwordInput" class="form-label">Contraseña</label>
                                                                <input type="password" class="form-control" id="passwordInput" placeholder="************">
                                                            </div>
                                                        </div>

                                                        <!--end col-->

                                                        <div class="col-xxl-6">
                                                            <div>
                                                                <label for="firstName" class="form-label">Nombre Completo</label>
                                                                <input type="text" class="form-control" id="firstName" placeholder="Ingrese el nombre completo">
                                                            </div>
                                                        </div>
                                                        <!--end col-->


                                                        <div class="col-xxl-6">
                                                            <div>
                                                                <label for="lastName" class="form-label">Número celular</label>
                                                                <input type="text" class="form-control" id="lastName" placeholder="Ingrese el numero celular">
                                                            </div>
                                                        </div>

                                                        <!-- Select -->
                                                        <div class="input-group">
                                                            <label class="input-group-text" for="inputGroupSelect01">Suscripción</label>
                                                            <select class="form-select" id="inputGroupSelect01">
                                                                <!-- <option selected>Nivel...</option> -->
                                                                <option value="1">Normal</option>
                                                                <option value="2">Premium</option>
                                                                <option value="3">VIP</option>
                                                            </select>
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

                <div class="card-body">
                    <!-- Tables Without Borders -->
                    <table class="table table-borderless table-nowrap align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Capacidad</th>
                                <th scope="col">Precio</th>

                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tour privado nocturno</td>
                                <td>Normal</td>
                                <td>1-3</td>
                                <td>$ 7,500</td>
                                <td>
                                    <div class="hstack gap-3 fs-15">
                                        <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgrid" class="btn btn-secondary">
                                            <i class="ri-edit-box-line"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="ri-delete-bin-5-line"></i>
                                        </button>
                                        <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Tour privado nocturno</td>
                                <td>Premium</td>
                                <td>1-3</td>
                                <td>$ 10,000</td>
                                <td>
                                    <div class="hstack gap-3 fs-15">
                                        <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgrid" class="btn btn-secondary">
                                            <i class="ri-edit-box-line"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="ri-delete-bin-5-line"></i>
                                        </button>
                                        <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Tour privado nocturno</td>
                                <td>VIP</td>
                                <td>1-3</td>
                                <td>$ 15,000</td>
                                <td>
                                    <div class="hstack gap-3 fs-15">
                                        <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgrid" class="btn btn-secondary">
                                            <i class="ri-edit-box-line"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="ri-delete-bin-5-line"></i>
                                        </button>
                                        <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Tour privado por el centro de la ciudad</td>
                                <td>Normal</td>
                                <td>1-3</td>
                                <td>$ 7,500</td>
                                <td>
                                    <div class="hstack gap-3 fs-15">
                                        <!-- <a href="javascript:void(0);" class="link-primary"></a> -->
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgrid" class="btn btn-secondary">
                                            <i class="ri-edit-box-line"></i>
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
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection