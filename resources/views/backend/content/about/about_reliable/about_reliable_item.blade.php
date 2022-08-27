@extends('backend.master')
@section('main')
    <div id="content" class="main-content">
        <div class="container ">
            <div class="page-header">
                <div class="page-title">
                    <h3>Add About Reliable Item</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="{{route('dashboard')}}"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">About Page</a></li>
                            <li><a href="{{route('about.about-reliable')}}">About Reliable</a></li>
                            <li class="active"><a href="#">Add About Reliable Item</a></li>
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
                                        <h4>Add About Reliable Item</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('about.about-reliable.item.store')}}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="widget-content px-5">
                                    <div class="form-group row mb-4 align-left">
                                        <label for="title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Title</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" name="title" class="form-control"
                                                   id="title"
                                                   placeholder=""
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="description"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Description</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <textarea rows="5" name="description" class="form-control"
                                                      id="description"
                                                      placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left">
                                        <label for="title"
                                               class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Icon</label>
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" name="icon" class="form-control"
                                                   id="icon"
                                                   placeholder=""
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 align-left mt-5 pt-5">
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="submit" class="btn btn-dark" value="Add" placeholder="">
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
    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
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
