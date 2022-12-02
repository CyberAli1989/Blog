<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”csrf-token” content=”{{ csrf_token() }}”>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

    <!-- jquery.vectormap css -->
    {{--    <link href="{{asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"--}}
    {{--          rel="stylesheet" type="text/css"/>--}}
    <!-- DataTables -->
    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <!-- Responsive datatable examples -->
    <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}"
          rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="{{asset('backend/assets/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('backend/assets/css/icons-rtl.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('backend/assets/libs/toastr/build/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Select2 -->
    <link href="{{asset('backend/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">

    <!-- App Css-->
    <link href="{{asset('backend/assets/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body dir="rtl" data-topbar="dark">

<div id="layout-wrapper">
    @include('backend.layout.header')



    @include('backend.layout.vertical-menu')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                @yield('content')
            </div>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                &copy;
                <script>document.write(new Date().getFullYear())</script>
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by CyberAli
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- JAVASCRIPT -->
<script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/toastr/build/toastr.min.js')}}"></script>
{{--<script src="{{asset('backend/assets/js/ckeditor.js')}}"></script>--}}
<!-- apexcharts -->
{{--<script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>--}}

<!-- jquery.vectormap map -->
{{--<script src="{{asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>--}}
{{--<script--}}
{{--    src="{{asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>--}}

<!-- Required datatable js -->
<!-- Required datatable js -->
<script src="{{asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('backend/assets/js/pages/datatables.init.js')}}"></script>


<!-- Responsive examples -->
<script src="{{asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script>

{{-- Sweet Alert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- App js -->
<script src="{{asset('backend/assets/js/app.js')}}"></script>

{{--CkEditor CDN--}}
{{--<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>--}}
<script src="{{asset('backend/assets/js/ckeditor.js')}}"></script>
<script>

    ClassicEditor
        .create(document.querySelector('#editor1'), {
            ckfinder: {
                uploadUrl: '{{route('admin.ckeditor.upload').'?_token='. csrf_token()}}',
                plugins: [Image],
            },
            language: 'fa'
        })
        .catch(error => {
            console.error(error);
        });
</script>

@include('components.toaster')
</body>

</html>
