@extends('backend.master')
@section('main')
    <div id="content" class="main-content">
        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Home Sliders</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Home Page</a></li>
                            <li class="active"><a href="#">Home Sliders</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                                    <h4>Sliders</h4>
                                </div>
                                <div class="col-xl-6 col-md-12 col-sm-12 col-12 align-right mt-3">
                                    <a class="btn btn-fill btn-fill-dark mb-4 mr-3"
                                       href="{{route('home.sliders.add')}}">Add Slider</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="customer-info-detail-3" class="table style-3 table-bordered  table-hover">
                                    <thead>
                                    <tr>
                                        <th class="checkbox-column text-center">#</th>
                                        <th class="align-center">Title</th>
                                        <th class="align-center">Description</th>
                                        <th class="align-center">Image</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($n = 1)
                                    @foreach($sliders as $slider)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{$n}}</td>

                                            <td>{{$slider->title}}</td>
                                            <td>{{$slider->description}}</td>
                                            <td class="align-center">
                                            <span><img src="{{asset($slider->image)}}" class=""
                                                       alt="profile"></span>
                                            </td>
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li>
                                                        <a href="{{route('home.sliders.edit', $slider->id)}}javascript:void(0);"
                                                           class="bs-tooltip"
                                                           data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Edit"><i
                                                                class="flaticon-edit  p-1 br-6 mb-1"></i></a></li>
                                                    <li>
                                                        <a href="{{route('home.sliders.delete', $slider->id)}}"
                                                           class="bs-tooltip" id="delete"
                                                           data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="Delete"><i
                                                                class="flaticon-delete  p-1 br-6 mb-1"></i></a></li>
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
                </div>
            </div>
        </div>
    </div>
@endsection
