@extends('backend.master')
@section('main')
    <div id="content" class="main-content">
        <div class="container ">
            <div class="page-header">
                <div class="page-title">
                    <h3>Video Section</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Home Page</a></li>
                            <li class="active"><a href="#">Video Section</a></li>
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
                                        <h4>Video Section</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('home.home-video.update')}}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="widget-content px-5">
                                    <div class="form-group row mb-4 align-left">
                                        <label for="section_title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Section Title</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" class="form-control" id="section_title"
                                                   name="section_title"
                                                   placeholder=""
                                                   value="{{!empty($video_section->section_title) ? $video_section->section_title  : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Title</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" name="title" class="form-control"
                                                   id="title"
                                                   placeholder=""
                                                   value="{{!empty($video_section->title) ? $video_section->title : ''}}">
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
                                        <label for="image"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label"></label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <div class="custom-file mb-4">
                                                <img
                                                    src="{{!empty($video_section->image) ? asset($video_section->image) : asset('backend/assets/img/1000x500.png')}}"
                                                    alt=""
                                                    id="show_image" style="height: 200px"
                                                    class="img-fluid mr-3 mb-4 rounded">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left pt-5">
                                        <label for="video"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">
                                            Video
                                        </label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <div class="custom-file mb-4">
                                                <input type="file" class="custom-file-input" id="video"
                                                       name="video" value="">
                                                <label class="custom-file-label"
                                                       for="customFile">Choose File</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left pb-5">
                                        <label for="image"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label"></label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <div class="video-container mb-5">
                                                <iframe width="600" height="400" id="show_video"
                                                        src="{{!empty($video_section->video) ? asset($video_section->video) : ''}}"
                                                        allow="autoplay; encrypted-media" allowfullscreen
                                                        style="border: 0;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left mt-5 pt-5">
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="submit" class="btn btn-dark" value="Update" placeholder="">
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
    <script type="text/javascript">
        $(document).on("change", "#video", function (evt) {
            var $source = $('#show_video');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        });
    </script>
@endsection
