@extends('backend.master')
@section('main')
    <div id="content" class="main-content">
        <div class="container ">
            <div class="page-header">
                <div class="page-title">
                    <h3>Global Precences</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Home Page</a></li>
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
                                        <h4>Global Precences</h4>
                                    </div>
                                </div>
                            </div>
                            <form
                                action="{{route('home.global-precences.update')}}"
                                enctype="multipart/form-data"
                                method="post"
                            >
                                @csrf
                                <div class="widget-content px-5">
                                    <div class="form-group row mb-4 align-left">
                                        <label for="section_title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                            Section Title
                                        </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control"
                                                   id="section_title"
                                                   name="section_title"
                                                   placeholder=""
                                                   value="{{!empty($global_precences->section_title) ? $global_precences->section_title : ''}}"
                                            >
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                            Main Title
                                        </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{!empty($global_precences->title) ? $global_precences->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="description"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                            Description
                                        </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <textarea rows="5"
                                                      type="text"
                                                      name="description"
                                                      class="form-control"
                                                      id="description"
                                                      placeholder="">{{!empty($global_precences->description) ? $global_precences->description :''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="asia_title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                            Asia Title
                                        </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="asia_title"
                                                   name="asia_title"
                                                   placeholder=""
                                                   value="{{!empty($global_precences->asia_title) ? $global_precences->asia_title : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="africa_title"
                                               class="col-xl-2 col-sm-3
                                               col-sm-2 col-form-label">
                                            Africa Title
                                        </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text"
                                                   class="form-control"
                                                   id="africa_title"
                                                   name="africa_title"
                                                   placeholder=""
                                                   value="{{!empty($global_precences->africa_title) ? $global_precences->africa_title : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="description"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                            Image
                                        </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <div class="custom-file mb-4">
                                                <input type="file"
                                                       class="custom-file-input"
                                                       id="image"
                                                       name="image"
                                                       value="">
                                                <label class="custom-file-label"
                                                       for="customFile">
                                                    {{!empty(request()->file('image')) ? request()->file('image')->getClientOriginalName() : 'Choose File'}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="description"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                        </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <div class="custom-file mb-4">
                                                <img
                                                    src="{{!empty($global_precences->image) ? asset($global_precences->image) : asset('backend/assets/img/1200x994.png')}}"
                                                    alt=""
                                                    id="show_image"
                                                    style="height: 200px"
                                                    class="img-fluid mr-3 mb-4 rounded">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-5">
                                        <div class="form-group row mb-4 align-left pt-5">
                                            <div class="table-responsive mb-4">
                                                <table id="customer-info-detail-1"
                                                       class="table style-3 table-bordered  table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th class="checkbox-column text-center">#</th>
                                                        <th class="align-center">Country</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php($n = 1)
                                                    @foreach($global_precences->africa_country as $africa)
                                                        <tr>
                                                            <td class="checkbox-column text-center"> {{$n}}</td>
                                                            <td>{{$africa->country}}</td>
                                                            <td class="text-center">
                                                                <ul class="table-controls">
                                                                    <li>
                                                                        <a href="{{route('home.global-precences.country.africa.edit', $africa->id)}}javascript:void(0);"
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
                                                                        <a href="{{route('home.global-precences.country.africa.delete', $africa->id)}}"
                                                                           class="bs-tooltip"
                                                                           id="delete"
                                                                           data-toggle="tooltip"
                                                                           data-placement="top"
                                                                           title=""
                                                                           data-original-title="Delete">
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
                                        </div>


                                        <div class="form-group row mb-4 align-left">
                                            <div class="table-responsive mb-4">
                                                <table id="customer-info-detail-3"
                                                       class="table style-3 table-bordered  table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th class="checkbox-column text-center">#</th>
                                                        <th class="align-center">Country</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php($n = 1)
                                                    @foreach($global_precences->asia_country as $asia_country)
                                                        <tr>
                                                            <td class="checkbox-column text-center"> {{$n}}</td>

                                                            <td>{{$asia_country->country}}</td>
                                                            <td class="text-center">
                                                                <ul class="table-controls">
                                                                    <li>
                                                                        <a href="{{route('home.global-precences.country.asia.edit', $asia_country->id)}}javascript:void(0);"
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
                                                                        <a href="{{route('home.global-precences.county.asia.delete', $asia_country->id)}}"
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
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left mt-5 pt-5">
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input
                                                type="submit"
                                                class="btn btn-dark"
                                                value="Update"
                                                placeholder=""
                                            >
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form action="{{route('home.global-precences.country.asia.store')}}" method="post">
                                @csrf
                                <div class="form-group row mb-4 align-center">
                                    <label for="asia_country"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                        Asia Country
                                    </label>
                                    <div class="col-xl-8 col-lg-9 col-sm-10">
                                        <input type="text" class="form-control"
                                               id="asia_country"
                                               name="asia_country"
                                               placeholder=""
                                               value=""
                                        >
                                    </div>
                                    <div class="col-xl-2 col-lg-9 col-sm-10">
                                        <input type="submit"
                                               class="btn btn-warning"
                                               placeholder=""
                                               value="Add"
                                        >
                                    </div>
                                </div>
                            </form>
                            <form action="{{route('home.global-precences.country.africa.store')}}"
                                  method="post">
                                @csrf
                                <div class="form-group row mb-4 align-center">
                                    <label for="africa_country"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                        Africa Country
                                    </label>
                                    <div class="col-xl-8 col-lg-9 col-sm-10">
                                        <input type="text"
                                               class="form-control"
                                               id="africa_country"
                                               name="africa_country"
                                               placeholder=""
                                               value=""
                                        >
                                    </div>
                                    <div class="col-xl-2 col-lg-9 col-sm-10">
                                        <input type="submit"
                                               class="btn btn-warning"
                                               value="Add"
                                        >
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
