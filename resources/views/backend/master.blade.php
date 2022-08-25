<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Chemicals | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->

    <link href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/table/datatable/custom_dt_customer.css')}}">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('backend/assets/css/classic-dashboard/style.css')}}" rel="stylesheet" type="text/css"/>
    <!--  END CUSTOM STYLE FILE  -->
    <link href="{{asset('backend/assets/css/ui-kit/buttons/creative/creative-icon-buttons.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('backend/assets/css/ui-kit/buttons/creative/creative-gradients.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('backend/assets/css/ui-kit/buttons/creative/creative-fill.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('backend/assets/css/ui-kit/buttons/creative/creative-material.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- Spinner Buttons -->
    <link href="{{asset('backend/assets/css/ui-kit/buttons/spinner/spinner.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/ui-kit/buttons/spinner/ladda.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/plugins/editors/tinymce/stylesheet.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/plugins/dropzone/basic.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/plugins/file-upload/file-upload-with-preview.css')}}" rel="stylesheet"
          type="text/css"/>
    <script src="{{asset('backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        .form-control {
            border: 1px solid #ccc;
            color: #888ea8;
            font-size: 15px;
            border-radius: 2px;
        }

        .form-vertical .form-group .control-label {
            color: #3b3f5c;
        }

        .form-control::-webkit-input-placeholder {
            color: #888ea8;
            font-size: 15px;
        }

        .form-control::-ms-input-placeholder {
            color: #888ea8;
            font-size: 15px;
        }

        .form-control::-moz-placeholder {
            color: #888ea8;
            font-size: 15px;
        }

        .form-control:focus {
            border-color: #f1f3f1;
            border-left: solid 3px #3862f5;
        }

        label {
            color: #3b3f5c;
            margin-bottom: 14px;
        }
    </style>
</head>
<body>
@include('backend.body.header')

<!--  BEGIN NAVBAR  -->
@include('backend.body.navbar')
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="cs-overlay"></div>

    <!--  BEGIN SIDEBAR  -->

    @include('backend.body.sidebar')

    <!--  BEGIN CONTENT PART  -->
    @yield('main')
    <!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->

<!--  BEGIN FOOTER  -->
@include('backend.body.footer')
<!--  END FOOTER  -->

<!--  BEGIN CONTROL SIDEBAR  -->
@include('backend.body.control_sidebar')
<!--  END CONTROL SIDEBAR  -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('backend/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="{{asset('backend/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!--  BEGIN CUSTOM SCRIPT FILES  -->
<script src="{{asset('backend/plugins/charts/amcharts/amcharts.js')}}"></script>
<script src="{{asset('backend/plugins/maps/vector/ammaps/ammap_amcharts_extension.js')}}"></script>
<script src="{{asset('backend/plugins/maps/vector/ammaps/worldLow.js')}}"></script>
<script src="{{asset('backend/plugins/charts/amcharts/serial.js')}}"></script>
<script src="{{asset('backend/plugins/charts/amcharts/pie.js')}}"></script>
<script src="{{asset('backend/plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('backend/plugins/blockui/jquery.blockUI.min.js')}}"></script>
<script src="{{asset('backend/assets/js/classic-dashboard/classic-custom.js')}}"></script>

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('backend/plugins/table/datatable/datatables.js')}}"></script>
<script>
    // var e;
    c1 = $('#customer-info-detail-1').DataTable({
        "lengthMenu": [5, 10, 20, 50, 100],
        headerCallback: function (e, a, t, n, s) {
            e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
        },
        columnDefs: [{
            targets: 0, width: "30px", className: "", orderable: !1, render: function (e, a, t, n) {
                return '<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            }
        }],
        "language": {
            "paginate": {
                "previous": "<i class='flaticon-arrow-left-1'></i>",
                "next": "<i class='flaticon-arrow-right'></i>"
            },
            "info": "Showing page _PAGE_ of _PAGES_"
        }
    });

    multiCheck(c1);

    c2 = $('#customer-info-detail-2').DataTable({
        "lengthMenu": [5, 10, 20, 50, 100],
        headerCallback: function (e, a, t, n, s) {
            e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
        },
        columnDefs: [{
            targets: 0, width: "30px", className: "", orderable: !1, render: function (e, a, t, n) {
                return '<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            }
        }],
        "language": {
            "paginate": {
                "previous": "<i class='flaticon-arrow-left-1'></i>",
                "next": "<i class='flaticon-arrow-right'></i>"
            },
            "info": "Showing page _PAGE_ of _PAGES_"
        }
    });

    multiCheck(c2);

    c3 = $('#customer-info-detail-3').DataTable({
        "lengthMenu": [5, 10, 20, 50, 100],
        "language": {
            "paginate": {
                "previous": "<i class='flaticon-arrow-left-1'></i>",
                "next": "<i class='flaticon-arrow-right'></i>"
            },
            "info": "Showing page _PAGE_ of _PAGES_"
        }
    });

    multiCheck(c3);
</script>
<script src="{{asset('backend/assets/js/ui-kit/button/spinner/spinner.js')}}"></script>
<script src="{{asset('backend/assets/js/ui-kit/button/spinner/spin.min.js')}}"></script>
<script src="{{asset('backend/assets/js/ui-kit/button/spinner/ladda.min.js')}}"></script>
<script src="{{asset('backend/assets/js/ui-kit/button/custo-spinner.js')}}"></script>
<script src="{{asset('backend/plugins/editors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('backend/plugins/editors/tinymce/editor_tinymce.js')}}"></script>
<script src="{{asset('backend/plugins/dropzone/dropzone.min.js')}}"></script>
<script src="{{asset('backend/plugins/dropzone/custom-dropzone.js')}}"></script>
<script src="{{asset('backend/plugins/file-upload/file-upload-with-preview.js')}}"></script>

<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    //Second upload
    var secondUpload = new FileUploadWithPreview('mySecondImage')
</script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
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
<!--  END CUSTOM SCRIPT FILES  -->
</body>
</html>
