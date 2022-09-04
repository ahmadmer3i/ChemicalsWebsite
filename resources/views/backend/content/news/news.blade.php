@extends('backend.master')
@section('main')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">News Page</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">News Page</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <!--end::Item-->
                        <!--begin::Item-->
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">All News</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <a href="{{route('home.sliders.add')}}" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_new_target">
                    <i class="fa fa-plus"></i>
                    Add News
                </a>
                <!--end::Page title-->
                <!--begin::Actions-->
                <!--end::Actions-->
                <script>
                    tinymce.init({
                        selector: 'textarea',
                        plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                        toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                        toolbar_mode: 'floating',
                        tinycomments_mode: 'embedded',
                        tinycomments_author: 'Author name',
                    });
                </script>
            </div>
            <!--end::Container-->
        </div>

        <div id="kt_content_container" class="container-xxl">
            <!--begin::About card-->
            <div class="card">
                <div class="card-body">
                    <div class="py-10">
                        <!--begin::Heading-->
                        <div class="row">
                            <div class="col-10">
                                <h1 class="anchor fw-bolder mb-5" id="dom-positioning">
                                    All News</h1>
                            </div>
                            <div class="col-2 d-flex justify-content-end">


                            </div>
                        </div>
                        {{-- Modal --}}

                        <!--end::Heading-->
                        <!--begin::Block-->
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="my-5">
                            <table id="kt_datatable_example_5"
                                   class="table table-striped gy-5 gs-7 border rounded">
                                <thead>
                                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                    <th style="width: 30px;">#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i = 1)
                                @foreach($news as $new)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{$new->title}}</td>
                                        <td>{!! $new->description !!}</td>
                                        <td><img class="img-thumbnail" src="{{asset($new->image)}}" width="200">
                                        </td>
                                        <td style="width: 120px">
                                            <a href="{{route('news.news-edit', $new->id)}}"
                                               aria-label="Add Image"
                                               class="btn btn-icon btn-info btn-sm">
                                                <i class="fas fa-pencil-alt fs-4"></i>
                                            </a>
                                            <a href="{{route('news.delete', $new->id)}}"
                                               class="btn btn-icon btn-danger btn-sm" id="delete">
                                                <i class="fas fa-trash fs-4"></i>
                                            </a>
                                            <a href=""
                                               data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_new_target2-{{$new->id}}"
                                               class="btn btn-icon btn-info btn-sm">
                                                <i class="fas fa-image fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <input type="hidden" value="{{ $i++ }}">
                                    {{-- Modal --}}
                                    <div class="modal fade" id="kt_modal_new_target3-{{$new->id}}"
                                         tabindex="-1"
                                         aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content rounded">
                                                <!--begin::Modal header-->
                                                <div class="modal-header pb-0 border-0 justify-content-end">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                         data-bs-dismiss="modal">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                      height="2" rx="1"
                                                                      transform="rotate(-45 6 17.3137)" fill="black"/>
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                      transform="rotate(45 7.41422 6)" fill="black"/>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--begin::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                                    <!--begin:Form-->
                                                    <form
                                                        id="kt_modal_new_target_form"
                                                        class="form"
                                                        action="{{route('home.sliders.update')}}"
                                                        method="post"
                                                        enctype="multipart/form-data"
                                                    >
                                                        @csrf
                                                        <!--begin::Heading-->
                                                        <input type="hidden" name="id" value="{{$new->id}}">
                                                        <div class="mb-13 text-center">
                                                            <!--begin::Title-->
                                                            <h1 class="mb-3">Update Slider</h1>
                                                            <!--end::Title-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fw-bold fs-5">
                                                            </div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-8 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                <span class="required">Slider Title</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                   data-bs-toggle="tooltip"
                                                                   title="Update Slider"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="text"
                                                                   class="form-control form-control-solid"
                                                                   placeholder="Enter Slider Tile"
                                                                   name="title"
                                                                   value="{{$new->title}}"/>
                                                        </div>
                                                        <div class="d-flex flex-column mb-8 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                            <span
                                                                                class="required">Slider Description</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                   data-bs-toggle="tooltip"
                                                                   title="Update Slider"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <textarea type="text" rows="6"
                                                                      class="form-control form-control-solid"
                                                                      placeholder="Enter Slider Description"
                                                                      name="description">{{$new->description}}</textarea>
                                                        </div>
                                                        <div class="d-flex flex-column mb-8 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                <span>Slider Image</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                   data-bs-toggle="tooltip"
                                                                   title="Update Slider"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="file"
                                                                   class="form-control form-control-solid"
                                                                   placeholder="Enter Slider Description"
                                                                   name="image" id="image{{$new->id}}">
                                                        </div>
                                                        <div class="d-flex flex-column mb-8 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                <span></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <div class="d-flex justify-content-center">
                                                                <img class="img-thumbnail form-control-sm"
                                                                     id="show_image{{$new->id}}"
                                                                     width="400"
                                                                     src="{{!empty($new->image) ? asset($new->image) : asset('backend/assets/media/holders/192.1280.png')}}"
                                                                     alt="">
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="text-center">
                                                            <button type="reset"
                                                                    id="kt_modal_new_target_cancel"
                                                                    class="btn btn-light me-3"
                                                                    data-bs-dismiss="modal">
                                                                Cancel
                                                            </button>
                                                            <button type="submit"
                                                                    id="kt_modal_new_target_submit"
                                                                    class="btn btn-primary">
                                                            <span class="indicator-label">Update
                                                            </span>
                                                                <span class="indicator-progress">Please wait...
									                        <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2">
                                                             </span>
                                                            </span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end:Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>

                                        <!--end::Modal dialog-->
                                    </div>
                                    <div class="modal fade" id="kt_modal_new_target2-{{$new->id}}"
                                         tabindex="-1"
                                         aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content rounded">
                                                <!--begin::Modal header-->
                                                <div class="modal-header pb-0 border-0 justify-content-end">
                                                    <!--begin::Close-->
                                                    <div
                                                        class="btn btn-sm btn-icon btn-active-color-primary"
                                                        data-bs-dismiss="modal">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                      height="2" rx="1"
                                                                      transform="rotate(-45 6 17.3137)" fill="black"/>
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                      transform="rotate(45 7.41422 6)" fill="black"/>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--begin::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                                    <!--begin:Form-->
                                                    <form
                                                        id="kt_modal_new_target_form"
                                                        class="form"
                                                        action="{{route('news.news-images.store')}}"
                                                        method="post"
                                                        enctype="multipart/form-data"
                                                    >
                                                        @csrf
                                                        <!--begin::Heading-->
                                                        <input type="hidden" name="id" value="{{$new->id}}">
                                                        <div class="mb-13 text-center">
                                                            <!--begin::Title-->
                                                            <h1 class="mb-3">Add Image</h1>
                                                            <!--end::Title-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fw-bold fs-5">
                                                            </div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-8 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                <span>News Image</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                   data-bs-toggle="tooltip"
                                                                   title="Update Slider"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="file"
                                                                   class="form-control form-control-solid"
                                                                   placeholder="Enter Slider Description"
                                                                   name="image" id="image2{{$new->id}}">
                                                        </div>
                                                        <div class="d-flex flex-column mb-8 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                <span></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <div class="d-flex justify-content-center">
                                                                <img
                                                                    class="img-thumbnail form-control-sm"
                                                                    id="show_image2{{$new->id}}"
                                                                    width="400"
                                                                    src="{{asset('backend/assets/media/holders/750x450.png')}}"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->

                                                        <div class="text-center">
                                                            <button type="reset"
                                                                    id="kt_modal_new_target_cancel"
                                                                    class="btn btn-light me-3"
                                                                    data-bs-dismiss="modal">
                                                                Cancel
                                                            </button>
                                                            <button type="submit"
                                                                    id="kt_modal_new_target_submit"
                                                                    class="btn btn-primary">
                                                            <span class="indicator-label">Add
                                                            </span>
                                                                <span class="indicator-progress">Please wait...
									                        <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2">
                                                             </span>
                                                            </span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end:Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>

                                        <!--end::Modal dialog-->
                                    </div>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $('#image2{{$new->id}}').change(function (e) {
                                                const reader = new FileReader();
                                                reader.onload = function (e) {
                                                    $('#show_image2{{$new->id}}').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(e.target.files['0']);
                                            });
                                        })
                                        ;
                                    </script>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="kt_modal_new_target" tabindex="-1"
                             aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content rounded">
                                    <!--begin::Modal header-->
                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                        <!--begin::Close-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                             data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
								</svg>
							</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--begin::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                        <!--begin:Form-->
                                        <form
                                            id="kt_modal_new_target_form"
                                            class="form"
                                            action="{{route('news.store')}}"
                                            method="post"
                                            enctype="multipart/form-data"
                                        >
                                            @csrf
                                            <!--begin::Heading-->
                                            <input type="hidden" name="id" value="">
                                            <div class="mb-13 text-center">
                                                <!--begin::Title-->
                                                <h1 class="mb-3">Add Slider</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-bold fs-5">
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">News Title</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                       data-bs-toggle="tooltip"
                                                       title="Update Slider"></i>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control form-control-solid"
                                                       placeholder="Enter Slider Tile" name="title"
                                                       value=""/>
                                            </div>
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">News Description</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                       data-bs-toggle="tooltip"
                                                       title="Update Slider"></i>
                                                </label>
                                                <!--end::Label-->
                                                <textarea type="text" rows="6"
                                                          class="form-control form-control-solid"
                                                          placeholder="Enter Slider Description"
                                                          name="description"></textarea>
                                            </div>
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span>News Image</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                       data-bs-toggle="tooltip"
                                                       title="Update Slider"></i>
                                                </label>
                                                <!--end::Label-->
                                                <input type="file"
                                                       class="form-control form-control-solid"
                                                       placeholder="Enter Slider Description"
                                                       name="image" id="image">
                                            </div>
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span></span>
                                                </label>
                                                <!--end::Label-->
                                                <div class="d-flex justify-content-center">
                                                    <img class="img-thumbnail form-control-sm"
                                                         width="400"
                                                         src="{{asset('backend/assets/media/holders/750x450.png')}}"
                                                         id="show_image">
                                                </div>
                                            </div>

                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center">
                                                <button type="reset" id="kt_modal_new_target_cancel"
                                                        class="btn btn-light me-3" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button type="submit" id="kt_modal_new_target_submit"
                                                        class="btn btn-primary">
                                                            <span class="indicator-label">Update
                                                            </span>
                                                    <span class="indicator-progress">Please wait...
									                        <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2">
                                                             </span>
                                                            </span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end:Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Block-->
                        <!--begin::Code-->
                        <!--end::Code-->
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
