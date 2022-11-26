@extends('layouts.app')
@section('contenido')

<div class="card">
    <div class="card-header border-0">
        <div class="row g-4">

            <div class="col-sm">
                <div div class="d-flex justify-content-sm-end">


                    <!-- Grids in modals -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                        <i class="mdi mdi-printer"> Descargar todos los reportes</i>
                    </button>
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
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre del cliente</th>
                    <th scope="col">Correo Electrónico del cliente</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bessie Cooper</td>
                    <td>Graphic Designer</td>
                    <td>13, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Leslie Alexander</td>
                    <td>Product Manager</td>
                    <td>17, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Lenora Sandoval</td>
                    <td>Applications Engineer</td>
                    <td>25, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bessie Cooper</td>
                    <td>Graphic Designer</td>
                    <td>13, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Leslie Alexander</td>
                    <td>Product Manager</td>
                    <td>17, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Lenora Sandoval</td>
                    <td>Applications Engineer</td>
                    <td>25, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bessie Cooper</td>
                    <td>Graphic Designer</td>
                    <td>13, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Leslie Alexander</td>
                    <td>Product Manager</td>
                    <td>17, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Lenora Sandoval</td>
                    <td>Applications Engineer</td>
                    <td>25, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bessie Cooper</td>
                    <td>Graphic Designer</td>
                    <td>13, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Leslie Alexander</td>
                    <td>Product Manager</td>
                    <td>17, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Lenora Sandoval</td>
                    <td>Applications Engineer</td>
                    <td>25, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Annette </td>
                    <td>González</td>
                    <td>anttg@gmail.com</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bessie Cooper</td>
                    <td>Graphic Designer</td>
                    <td>13, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Leslie Alexander</td>
                    <td>Product Manager</td>
                    <td>17, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
                            </button>
                            <!-- <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Lenora Sandoval</td>
                    <td>Applications Engineer</td>
                    <td>25, Nov 2021</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <!-- <a href="javascript:void(0);" class="link-success"><i class="ri-edit-2-line"></i></a> -->
                            <a href="{{ route('reports.detailReport') }} " class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                <i class="mdi mdi-printer"></i>
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

@endsection