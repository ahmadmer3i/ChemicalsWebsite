@extends('backend.master')
@section('main')
    <div id="content" class="main-content">
        <div class="container ">
            <div class="page-header">
                <div class="page-title">
                    <h3>Why Choose Us</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Home Page</a></li>
                            <li class="active"><a href="#">Why Choose Us</a></li>
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
                                        <h4>Why Choose Us</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('home.why-choose-us.update')}}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="widget-content px-5">
                                    <div class="form-group row mb-4 align-left">
                                        <label for="title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Section Title</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{!empty($why_choose->title) ? $why_choose->title  : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="subtitle"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Title</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" name="subtitle" class="form-control"
                                                   id="subtitle"
                                                   placeholder=""
                                                   value="{{!empty($why_choose->subtitle) ? $why_choose->subtitle : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="description"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Background
                                            Image</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <div class="custom-file mb-4">
                                                <input type="file" class="custom-file-input" id="image"
                                                       name="image" value="">
                                                <label class="custom-file-label"
                                                       for="customFile">{{!empty(request()->file('image')) ? request()->file('image')->getClientOriginalName() : 'Choose File'}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left pb-5">
                                        <label for="description"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label"></label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <div class="custom-file mb-4">
                                                <img
                                                    src="{{!empty($why_choose->image) ? asset($why_choose->image) : asset('backend/assets/img/570x590.png')}}"
                                                    alt=""
                                                    id="show_image" style="height: 200px"
                                                    class="img-fluid mr-3 mb-4 rounded">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left mt-5 pt-5">
                                        <label for="description"
                                               class="col-xl-8 col-sm-10 col-sm-10 col-form-label"></label>
                                        <div class="col-xl-4 col-lg-2 col-sm-10 align-right">
                                            <a class="btn btn-success" href="{{route('home.why-choose-us.list.add')}}">
                                                Add List Item
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <div class="table-responsive mb-4">
                                            <table id="customer-info-detail-3"
                                                   class="table style-3 table-bordered  table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="checkbox-column text-center">#</th>
                                                    <th class="align-center">Title</th>
                                                    <th class="align-center">Description</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($n = 1)
                                                @foreach($why_choose->why_choose_list as $why)
                                                    <tr>
                                                        <td class="checkbox-column text-center"> {{$n}}</td>

                                                        <td>{{$why->title}}</td>
                                                        <td>{{$why->description}}</td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li>
                                                                    <a href="{{route('home.why-choose-us.list.edit', $why->id)}}javascript:void(0);"
                                                                       class="bs-tooltip"
                                                                       data-toggle="tooltip"
                                                                       data-placement="top"
                                                                       title=""
                                                                       data-original-title="Edit"
                                                                    >
                                                                        <i class="flaticon-edit  p-1 br-6 mb-1"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('home.why-choose-us.list.delete', $why->id)}}"
                                                                       class="bs-tooltip"
                                                                       id="delete"
                                                                       data-toggle="tooltip"
                                                                       data-placement="top"
                                                                       title=""
                                                                       data-original-title="Delete"
                                                                    >
                                                                        <i class="flaticon-delete  p-1 br-6 mb-1"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <input type="hidden" value="{{$n++}}">
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group row mb-4 align-left mt-5 pt-5">
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="submit" class="btn btn-dark" value="Update" placeholder="">
                                            </div>
                                        </div>
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
