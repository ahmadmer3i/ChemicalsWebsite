@extends('backend.master')
@section('main')
    <div id="content" class="main-content">
        <div class="container ">
            <div class="page-header">
                <div class="page-title">
                    <h3>General Info</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Home Page</a></li>
                            <li class="active"><a href="#">Home Sliders</a></li>
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
                                        <h4>General Info</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('home.general-info.update')}}"
                                  method="post">
                                @csrf
                                <div class="widget-content px-5">
                                    <div class="form-group row mb-4 align-left">
                                        <label for="section_title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Section Title</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control" id="section_title"
                                                   name="section_title"
                                                   placeholder=""
                                                   value="{{!empty($general_info->section_title) ? $general_info->section_title  : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Title</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" name="title" class="form-control"
                                                   id="title"
                                                   placeholder=""
                                                   value="{{!empty($general_info->title) ? $general_info->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left mt-5">
                                        <label for="description"
                                               class="col-xl-8 col-sm-10 col-sm-10 col-form-label"></label>
                                        <div class="col-xl-4 col-lg-2 col-sm-10 align-right">
                                            <a class="btn btn-success" href="{{route('home.general-info.card.add')}}">Add
                                                Card</a>
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
                                                    <th class="align-center">Text</th>
                                                    <th class="align-center">Image</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($n = 1)
                                                @foreach($general_info->general_info_card as $card)
                                                    <tr>
                                                        <td class="checkbox-column text-center"> {{$n}}</td>

                                                        <td>{{$card->title}}</td>
                                                        <td>{{$card->description}}</td>
                                                        <td class="align-center">
                                                        <span>
                                                        <img src="{{asset($card->image)}}" class=""
                                                             alt="profile">
                                                        </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li>
                                                                    <a href="{{route('home.general-info.card.edit', $card->id)}}javascript:void(0);"
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
                                                                    <a href="{{route('home.general-info.card.delete', $card->id)}}"
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
