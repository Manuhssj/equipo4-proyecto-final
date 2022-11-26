@extends('layouts.app')
@section('contenido')

<div class="col-sm">
    <div div class="d-flex justify-content-sm-end">
        <!-- Grids in modals -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
            <i class="mdi mdi-printer"> Descargar el reporte</i>
        </button>

    </div>
</div>

<div class="row">

    <!-- end col -->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Ventas en el mes</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="column_chart_datalabel" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>

<div class="row">

    <div class="col-xl-12 col-lg-12">

        <div>

            <div class="card">

                <div class="card-body">
                    <!-- Tables Without Borders -->
                    <table class="table table-borderless table-nowrap align-middle">
                        <tbody>
                            <tr class="border-top">
                                <th scope="row">Folio</th>
                                <td>
                                    7412369850
                                </td>
                            </tr>
                            <tr class="border-top">
                                <th scope="row">Datos del servicio</th>

                            </tr>
                            <tr class="border-top">
                                <th scope="row">Nombre del servicio</th>
                                <td>
                                    Nadar con delfines
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Duración del servicio</th>
                                <td>
                                    4 Horas
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Precios del servicio</th>
                                <td>
                                    Niño - 120 / Adulto - 220
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Categoría</th>
                                <td>
                                    Actividad -> deporte
                                </td>
                            </tr>
                            <tr class="border-top">
                                <th scope="row">Reservaciones</th>
                            </tr>
                            <tr class="border-top">
                                <th scope="row">Total de reservaciones</th>
                                <td>
                                    180
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Total recaudado</th>
                                <td>
                                    200,000
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Mejor mes</th>
                                <td>
                                    No se que poner aquí
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Peor mes</th>
                                <td>
                                    Naturaleza y vida salvaje
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- end tab content -->

                </div>

            </div>
        </div>
    </div>
</div>

@endsection