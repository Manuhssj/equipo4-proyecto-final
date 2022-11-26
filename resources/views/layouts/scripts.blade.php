    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('js/pages/sweetalerts.init.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('js/app.js')}}"></script>

    <!-- nouisliderribute js -->
    <script src="{{asset(('libs/nouislider/nouislider.min.js'))}}"></script>
    <script src="{{asset('libs/wnumb/wNumb.min.js')}}"></script>

    <!-- gridjs js -->
    <script src="{{asset('libs/gridjs/gridjs.umd.js')}}"></script>
    <script src="../../../../unpkg.com/gridjs%405.1.0/plugins/selection/dist/selection.umd.js"></script>
    <!-- ecommerce product list -->
    <script src="{{asset('js/pages/ecommerce-product-list.init.js')}}"></script>

    <!--Swiper slider js-->
    <script src="{{asset('libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- ecommerce product details init -->
    <script src="{{asset('js/pages/ecommerce-product-details.init.js')}}"></script>

    <!-- data table -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <!-- Dashboard init -->
    <script src="{{asset('/js/pages/dashboard-analytics.init.js')}}"></script>
    <!-- apexcharts -->
    <script src="{{asset('/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>

    <!-- apexcharts init -->
    <script src="{{asset('/js/pages/apexcharts-column.init.js')}}"></script>

    <!-- Vector map-->
    <script src="{{asset('/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script src="{{asset('js/datatables.js')}}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $('.form-eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Estas seguro de eliminar?',
                text: "No podras revertir la accion!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Eliminado!',
                        'El registro ha sido eliminado.',
                        'success'
                        )
                    this.submit();
                    
                }
            })
        });
    </script>