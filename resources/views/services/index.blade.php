@extends('layouts.app')
@section('contenido')

<div class="card">
    <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
        <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
        - Hubo un error al añadir el servicio.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
        <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong> - Se añadió el servicio de forma exitosa.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="card-header border-0">
        <div class="row g-4">

            <div class="col-sm">
                <div div class="d-flex justify-content-sm-end">


                    <!-- Grids in modals -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                        + Añadir un servicio
                    </button>
                    <div class="modal fade modal-lg" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalgridLabel">Formulario servicios</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3">
                                            <div class="col-xxl-6">
                                                <div>
                                                    <label for="firstName" class="form-label">Nombre del servicio</label>
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
                                                    <label for="choices-single-no-sorting" class="form-label">Selccione la categoría</label>

                                                    <select class="form-control" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices data-choices-sorting-false>
                                                        <option value="Madrid">Opcion 1</option>
                                                        <option value="Toronto">Opcion 2</option>
                                                        <option value="Vancouver">Opcion 3</option>
                                                    </select>
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
        <table id="dataTables-example" name="dataTables-example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Duración del servicio</th>
                    <th scope="col">Precio: Adulto - Niño</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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
                    <td>
                        <div class="">
                            <img class="avatar-lg" src="{{asset('/images/dolphin.webp')}}" alt="" />
                        </div>
                    </td>
                    <td>Annette </td>
                    <td>4 Hours</td>
                    <td>$1,000 - $600</td>
                    <td>Tours</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('services.detailService') }} " class="link-primary">
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