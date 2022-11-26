@extends('layouts.app')
@section('contenido')

<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card card-animate card bg-success card-height-100">
            <div class="">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-success rounded-2 fs-2 shadow">
                                <i class="bx bx-shopping-bag"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-medium text-white-50 mb-3">Reservaciones Totales</p>
                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="1045">0</span></h4>
                            <p class="text-white-50 mb-0">Año actual</p>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>

        </div>
    </div> <!-- end col-->

    <div class="col-xl-4 col-md-6">
        <div class="card card-animate card-height-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-warning text-white rounded-2 fs-2 shadow">
                            <i class="bx bxs-user-account"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-3">Numbero de clientes nuevos</p>
                        <h4 class="fs-4 mb-3"><span class="counter-value" data-target="7522">0</span></h4>
                        <p class="text-muted mb-0">En el año actual</p>
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div> <!-- end col-->

    <div class="col-xl-4 col-md-6">
        <div class="card card-animate card-height-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-danger text-white rounded-2 fs-2 shadow">
                            <i class="bx bxs-badge-dollar"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-3">Total Recaudado</p>
                        <h4 class="fs-4 mb-3">$<span class="counter-value" data-target="120000">0</span></h4>

                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div> <!-- end col-->


</div> <!-- end row-->

<div class="row">
    <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-uppercase fw-medium text-muted mb-0">Total Recaudado en Nado con delfines</p>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k</h4>
                        <a href="{{ route('services.detailService') }}" class="text-decoration-underline">Ver servicio</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-success rounded fs-3 shadow">
                            <i class="bx bx-dollar-circle text-success"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-uppercase fw-medium text-muted mb-0">Total Recaudado en Nado con delfines</p>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k</h4>
                        <a href="{{ route('services.detailService') }}" class="text-decoration-underline">Ver servicio</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-success rounded fs-3 shadow">
                            <i class="bx bx-dollar-circle text-success"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-uppercase fw-medium text-muted mb-0">Total Recaudado en Nado con delfines</p>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k</h4>
                        <a href="{{ route('services.detailService') }}" class="text-decoration-underline">Ver servicio</a>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-success rounded fs-3 shadow">
                            <i class="bx bx-dollar-circle text-success"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->


</div> <!-- end row-->

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
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Servicios más reservados</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="dynamicloadedchart-wrap" dir="ltr">
                    <div id="chart-year" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-dark", "--vz-info"]' class="apex-charts"></div>
                    <div id="chart-quarter" class="apex-charts"></div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Categorías más reservadas</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="column_distributed" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-dark", "--vz-info"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection