@extends('layouts.app')
@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row gx-lg-1">
                    <div class="col-xl-6 col-md-8">
                        <img src="{{asset('/images/dolphin.webp')}}" alt="" />
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6 ps-3">
                        <div class="mt-xl-0 mt-5">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h4>Nadar con delfines</h4>
                                    <div class="hstack gap-3 flex-wrap">
                                        <div>Deporte</div>

                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div>

                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                            <i class="ri-pencil-fill align-bottom"></i> Editar servicio
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
                                        <!-- <a href="" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ri-pencil-fill align-bottom"></i>

                                                            </a> -->
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2">
                                                <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                    <i class="ri-money-dollar-circle-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">Costo niño:</p>
                                                <h5 class="mb-0">$120.40</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2">
                                                <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                    <i class="ri-money-dollar-circle-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">Costo adulto:</p>
                                                <h5 class="mb-0">$120.40</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2">
                                                <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                    <i class="ri-file-copy-2-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">No. de reservaciones:</p>
                                                <h5 class="mb-0">34</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <!-- end col -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2">
                                                <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                    <i class="ri-inbox-archive-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">Total recaudado:</p>
                                                <h5 class="mb-0">$60,645</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>


                            <!-- end row -->

                            <div class="mt-4 text-muted">
                                <h5 class="fs-14">Descripción: </h5>
                                <p>Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton. Material composition is 100% organic cotton. This is one of the world’s leading designer lifestyle brands and is internationally recognized for celebrating the essence of classic American cool style, featuring preppy with a twist designs.</p>
                            </div>
                            <div class="row">
                                <!-- <h5 class="fs-14">Descripción: </h5>
                                                    <p></p>                                            -->
                            </div>


                            <!-- end card body -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!--end row-->

<div class="card">
    <h1 class="">Reservaciones de este servicio</h1>
    <!-- end card header -->
    <div class="card-body">
        <!-- Tables Without Borders -->
        <table id="dataTables-example" name="dataTables-example" class="display" style="width:100%">
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