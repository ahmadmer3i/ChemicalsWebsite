@extends('backend.master')
@section('main')
    <div id="content" class="main-content">
        <div class="container ">
            <div class="page-header">
                <div class="page-title">
                    <h3>Edit {{$africa->country}}</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Home Page</a></li>
                            <li><a href="{{route('home.global-precences')}}">Global Precences</a></li>
                            <li class="active"><a href="#">Global Precences</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header widget-heading">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 align-center">
                    <div class="card statbox widget shadow">
                        <div class="">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 align-left">
                                        <h4>Edit {{$africa->country}}</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('home.global-precences.country.africa.update')}}"
                                  enctype="multipart/form-data" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$africa->id}}">
                                <div class="widget-content px-5">
                                    <div class="form-group row mb-4 align-left">
                                        <label for="country"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Country</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control" id="country" name="country"
                                                   placeholder="" value="{{$africa->country}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left mt-5 pt-5">
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="submit" class="btn btn-dark" value="Update" placeholder="">
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
