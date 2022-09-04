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
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Products</h1>
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
                        <li class="breadcrumb-item text-muted">Product Page</li>
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
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark"> Update Product Title</li>
                        <!--end::Item-->
                    </ul>

                    <!--end::Breadcrumb-->
                </div>
                <div>
                    <a href="" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_new_target2">
                        <i class="fa fa-plus"></i>
                        Add Product
                    </a>
                </div>
                {{-- Modal --}}
                <div class="modal fade" id="kt_modal_new_target2" tabindex="-1"
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
                                    action="{{route('product.product-category.store')}}"
                                    method="post"
                                    enctype="multipart/form-data"
                                >
                                    @csrf
                                    <!--begin::Heading-->
                                    <input type="hidden" name="id" value="">
                                    <div class="mb-13 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Add Product Category</h1>
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
                                            <span class="required">Category</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title=""></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text"
                                               class="form-control form-control-solid"
                                               placeholder="Enter Category Name" name="name"
                                               value=""/>
                                    </div>
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label
                                            class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Tag</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title=""></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text"
                                               class="form-control form-control-solid"
                                               placeholder="Enter Category Tag" name="tag"
                                               value=""/>
                                    </div>
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label
                                            class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Image</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                               data-bs-toggle="tooltip"
                                               title=""></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="file" id="image"
                                               class="form-control form-control-solid"
                                               placeholder="Upload Image" name="image"
                                               accept="image/*"
                                               value="">
                                    </div>
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span></span>
                                        </label>
                                        <!--end::Label-->
                                        <div class="d-flex justify-content-center">
                                            <img class="img-thumbnail form-control-sm"
                                                 id="show_image"
                                                 width="400"
                                                 src="{{asset('backend/assets/media/holders/1280x800.png')}}"
                                                 alt="">
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" id="kt_modal_new_target_cancel"
                                                class="btn btn-light me-3"
                                                data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <button type="submit" id="kt_modal_new_target_submit"
                                                class="btn btn-primary">
                                                            <span class="indicator-label">Add Product
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
                <!--end::Page title-->
                <!--begin::Actions-->
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <div id="kt_content_container" class="container-xxl">

            <div class="card">
                <div class="card-body">
                    <div class="py-10">
                        <!--begin::Heading-->
                        <div class="row">
                            <div class="col-10">
                                <h1 class="anchor fw-bolder mb-5" id="dom-positioning">
                                    Update Product Title</h1>
                            </div>
                            <div class="col-2 d-flex justify-content-end">

                            </div>
                        </div>

                        <form action="{{route('product.product-title.update')}}" method="post"
                              enctype="multipart/form-data">
                            <div class="my-5">
                                @csrf
                                <div class="row mb-3">
                                    <label for="page_title" class="col-sm-3 col-form-label">Page Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="page_title"
                                               value="{{ !empty($product->page_title) ? $product->page_title : '' }}"
                                               placeholder="Enter Page Title" name="page_title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="section_title" class="col-sm-3 col-form-label">Section Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section_title"
                                               name="section_title"
                                               value="{{ !empty($product->section_title) ? $product->section_title : '' }}"
                                               placeholder="Enter Section Title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-3 col-form-label"> Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title"
                                               name="title"
                                               value="{{!empty($product->title) ? $product->title : '' }}"
                                               placeholder="Enter Title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="subtitle" class="col-sm-3 col-form-label"> Subtitle</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="subtitle"
                                               name="subtitle"
                                               placeholder="Enter Subtitle"
                                               value="{{!empty($product->subtitle) ? $product->subtitle : ''}}"
                                        >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="page_image" class="col-sm-3 col-form-label">Page
                                        Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="page_image" name="page_image"
                                        >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <img
                                            src="{{!empty($product->page_image) ? asset($product->page_image) : asset('backend/assets/media/holders/1000x667.png')}}"
                                            width="300" alt="" id="show_image3"
                                            class="img-thumbnail mr-3 mb-4 rounded"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="title_image" class="col-sm-3 col-form-label">Title
                                        Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image2" name="title_image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <img
                                            src="{{!empty($product->title_image) ? asset($product->title_image) : asset('backend/assets/media/holders/1000x667.png')}}"
                                            width="300" alt="" id="show_image2"
                                            class="img-thumbnail mr-3 mb-4 rounded"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-dark px-5">Update</button>
                                    </div>
                                    {{--                                    <div class="col-sm-2 d-flex justify-content-end">--}}
                                    {{--                                        <a href="{{route('home.sliders')}}" class="btn btn-danger px-5">Back</a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </form>
                        <table id="kt_datatable_example_8"
                               class="table table-striped gy-5 gs-7 border rounded mt-5">
                            <thead>
                            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                <th style="width: 30px;">#</th>
                                <th>Category</th>
                                <th>Tag</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($product->product_category as $category)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->tag}}</td>
                                    <td style="width: 220px;"><img
                                            src="{{!empty($category->image) ? asset($category->image):asset('backend/assets/media/holders/1280x800.png')}}"
                                            alt=""
                                            width="200"
                                            class="img-thumbnail img-fluid"
                                        >
                                    </td>
                                    <td style="width: 80px">
                                        <a
                                            href="{{route('product.product-category.edit',$category->id)}}"
                                            class="btn btn-icon btn-info btn-sm">
                                            <i class="fas fa-pencil-alt fs-4"></i>
                                        </a>
                                        <a href="{{route('home.general-info.card.delete', $category->id)}}"
                                           class="btn btn-icon btn-danger btn-sm" id="delete">
                                            <i class="fas fa-trash fs-4"></i>
                                        </a>
                                    </td>
                                </tr>
                                <input type="hidden" value="{{ $i++ }}">

                                {{--Modal--}}
                                <div class="modal fade" id="kt_modal_new_target-{{$category->id}}" tabindex="-1"
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
                                                    action="{{route('home.general-info.card.update')}}"
                                                    method="post"
                                                    enctype="multipart/form-data"
                                                >
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <input type="hidden" name="id" value="{{$category->id}}">
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">Update General Info Card</h1>
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
                                                            <span class="required">Title</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                               data-bs-toggle="tooltip"
                                                               title=""></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="text"
                                                               class="form-control form-control-solid"
                                                               placeholder="Enter Card Title" name="title"
                                                               value="{{!empty($category->title) ? $category->title : ''}}"/>
                                                    </div>
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Description</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                               data-bs-toggle="tooltip"
                                                               title=""></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <textarea type="text"
                                                                  rows="5"
                                                                  class="form-control form-control-solid"
                                                                  placeholder="Enter Card Description"
                                                                  name="description"
                                                        >{{!empty($category->description) ? $category->description : ''}}</textarea>
                                                    </div>
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Image</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                               data-bs-toggle="tooltip"
                                                               title=""></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="file" id="image{{$category->id}}"
                                                               class="form-control form-control-solid"
                                                               placeholder="Upload Image" name="image"
                                                               value=""/>
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
                                                                 id="show_image{{$category->id}}"
                                                                 width="400"
                                                                 src="{{!empty($category->image) ? asset($category->image) : asset('backend/assets/media/holders/1280x800.png')}}"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <button type="reset" id="kt_modal_new_target_cancel"
                                                                class="btn btn-light me-3"
                                                                data-bs-dismiss="modal">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" id="kt_modal_new_target_submit"
                                                                class="btn btn-primary">
                                                            <span class="indicator-label">Update Card
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
                                        $('#image{{$category->id}}').change(function (e) {
                                            const reader = new FileReader();
                                            reader.onload = function (e) {
                                                $('#show_image{{$category->id}}').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(e.target.files['0']);
                                        });
                                    });
                                </script>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#page_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image3').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#image2').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
