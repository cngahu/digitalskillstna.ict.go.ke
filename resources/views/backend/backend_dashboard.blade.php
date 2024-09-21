<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('adminbackend/assets/images/logo-gaa.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('adminbackend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('adminbackend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminbackend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->

    <link href="{{ asset('adminbackend/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminbackend/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('adminbackend/assets/libs/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminbackend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminbackend/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('adminbackend/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('adminbackend/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('adminbackend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminbackend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('adminbackend/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/css/header-colors.css') }}" />
    {{--Adding Toster In For View Message--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- dataTables -->
    <link href="{{ asset('adminbackend/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminbackend/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminbackend/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminbackend/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- dataTables end -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <title>Admin Dashboard</title>
</head>
<body>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    @include('backend.body.sidebar')
    <!--end sidebar wrapper -->
    <!--start header -->
    @include('backend.body.header')
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        @yield('backend')
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    @include('backend.body.footer')
</div>
<!--end wrapper-->
<!--start switcher-->

<script src="{{ asset('adminbackend/assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('adminbackend/assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>

<script src="{{asset('adminbackend/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
<script src="{{asset('adminbackend/assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
<script src="{{asset('adminbackend/assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('adminbackend/assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('adminbackend/assets/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script>
<script src="{{asset('adminbackend/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js')}}"></script>
<script src="{{asset('adminbackend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('adminbackend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<!--end switcher-->
<!-- Bootstrap JS -->
<script src="{{ asset('adminbackend/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('adminbackend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('adminbackend/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>


<!-- datatables js -->
<script src="{{ asset('adminbackend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminbackend/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('adminbackend/assets/js/pages/datatables.init.js') }}"></script>
<!-- Datatables Eend -->

<script>
    $(function() {
        $(".knob").knob();
    });
</script>
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>
<script src="{{ asset('adminbackend/assets/js/index.js') }}"></script>
<!--app JS-->
<script src="{{ asset('adminbackend/assets/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{--Adding Toster In For View Message--}}
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('#delete').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default action of the link
                var url = this.getAttribute('href'); // Get the URL from the href attribute
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url; // Proceed with the deletion by navigating to the URL
                    }
                });
            });
        });
    });
</script>

</body>
</html>
