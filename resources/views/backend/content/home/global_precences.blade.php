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
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Global Precences</h1>
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
                        <li class="breadcrumb-item text-muted">Home Page</li>
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
                        <li class="breadcrumb-item text-dark">Global Precences</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <div id="kt_content_container" class="container-xxl">
            <!--begin::About card-->
            <div class="card">
                <div class="card-body">
                    <div class="py-10">
                        <div class="row">
                            <div class="col-10">
                                <h1 class="anchor fw-bolder mb-5" id="dom-positioning">
                                    Update Global Precences
                                </h1>
                            </div>
                            <div class="col-2 d-flex justify-content-end">

                            </div>
                        </div>

                        <form action="{{route('home.global-precences.update')}}"
                              method="post"
                              enctype="multipart/form-data"
                        > @csrf
                            <div class="my-5">
                                <div class="row mb-3">

                                    <label for="section_title" class="col-sm-3 col-form-label">Section Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section_title"
                                               name="section_title"
                                               placeholder="Enter Section Title"
                                               value="{{ !empty($global_precences->section_title) ? $global_precences->section_title : ''}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title"
                                               name="title"
                                               placeholder="Enter Main Title"
                                               value="{{ !empty($global_precences->title) ? $global_precences->title : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-3 col-form-label">Slider Text</label>
                                    <div class="col-sm-9">
                                    <textarea rows="4"
                                              type="text"
                                              class="form-control"
                                              id="description"
                                              name="description"
                                              placeholder="Enter Slider Text">{{!empty($global_precences->description) ? $global_precences->description : ''}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="asia_title" class="col-sm-3 col-form-label">Asia Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="asia_title"
                                               name="asia_title"
                                               placeholder="Enter Slider Title"
                                               value="{{ !empty($global_precences->asia_title) ? $global_precences->asia_title : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="africa_title" class="col-sm-3 col-form-label">Africa Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="africa_title"
                                               name="africa_title"
                                               placeholder="Enter Slider Title"
                                               value="{{ !empty($global_precences->africa_title) ? $global_precences->africa_title : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Slider
                                        Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <img
                                            src="{{!empty($global_precences->image) ? asset($global_precences->image) : asset('backend/assets/images/holders/1200x994.png')}}"
                                            width="300" alt="" id="show_image"
                                            class="img-thumbnail mr-3 mb-4 rounded"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-dark px-5">Update</button>
                                    </div>

                                </div>
                            </div>
                        </form>

                        <form action="{{route('home.global-precences.country.asia.store')}}" method="post">
                            <div class="row mb-3 mt-5">

                                @csrf
                                <label for="asia_country" class="col-sm-3 col-form-label">Asia Country</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="asia_country"
                                           name="asia_country"
                                           placeholder="Enter Asia Country"
                                           value="">
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-dark" type="submit">Add
                                        Asia Country
                                    </button>
                                </div>

                            </div>
                        </form>
                        <table id="kt_datatable_example_8" class="table table-striped gy-5 gs-7 border rounded mt-5">
                            <thead>
                            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                <th style="width: 30px;">#</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($global_precences->asia_country as $asia)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$asia->country}}</td>
                                    <td style="width: 80px">
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_new_target-{{$asia->id}}"
                                           href="{{route('home.global-precences.country.asia.edit',$asia->id)}}"
                                           class="btn btn-icon btn-info btn-sm">
                                            <i class="fas fa-pencil-alt fs-4"></i>
                                        </a>
                                        <a href="{{route('home.global-precences.county.asia.delete', $asia->id)}}"
                                           class="btn btn-icon btn-danger btn-sm" id="delete">
                                            <i class="fas fa-trash fs-4"></i>
                                        </a>
                                    </td>
                                </tr>
                                <input type="hidden" value="{{ $i++ }}">
                                <div class="modal fade" id="kt_modal_new_target-{{$asia->id}}" tabindex="-1"
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
                                                    action="{{route('home.global-precences.country.asia.update')}}"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <input type="hidden" name="id" value="{{$asia->id}}">
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">Country Update</h1>
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
                                                            <span class="required">Country Name</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                               data-bs-toggle="tooltip"
                                                               title="Please update country name, the old one is: {{$asia->country}}"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="text" class="form-control form-control-solid"
                                                               placeholder="Enter Country name" name="country"
                                                               value="{{$asia->country}}"/>
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
                            @endforeach
                            </tbody>
                        </table>
                        <form action="{{route('home.global-precences.country.africa.store')}}" method="post">
                            <div class="row mb-3 mt-5">

                                @csrf
                                <label for="africa_country" class="col-sm-3 col-form-label">Africa Country</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="africa_country"
                                           name="africa_country"
                                           placeholder="Enter Africa Country"
                                           value="">
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-dark" type="submit">Add
                                        Africa Country
                                    </button>
                                </div>

                            </div>
                        </form>
                        <table id="kt_datatable_example_5" class="table table-striped gy-5 gs-7 border rounded mt-5">
                            <thead>
                            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                <th style="width: 30px;">#</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($global_precences->africa_country as $africa)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$africa->country}}</td>
                                    <td style="width: 80px">
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_new_target2-{{$africa->id}}"
                                           href="{{route('home.global-precences.country.africa.edit',$africa->id)}}"
                                           class="btn btn-icon btn-info btn-sm">
                                            <i class="fas fa-pencil-alt fs-4"></i>
                                        </a>
                                        <a href="{{route('home.global-precences.country.africa.delete', $africa->id)}}"
                                           class="btn btn-icon btn-danger btn-sm" id="delete">
                                            <i class="fas fa-trash fs-4"></i>
                                        </a>
                                    </td>
                                </tr>
                                <input type="hidden" value="{{ $i++ }}">
                                {{--Modal--}}
                                <div class="modal fade" id="kt_modal_new_target2-{{$africa->id}}" tabindex="-1"
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
                                                    action="{{route('home.global-precences.country.africa.update')}}"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <!--begin::Heading-->
                                                    <input type="hidden" name="id" value="{{$africa->id}}">
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">Country Update</h1>
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
                                                            <span class="required">Country Name</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                               data-bs-toggle="tooltip"
                                                               title="Please update country name, the old one is: {{$africa->country}}"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="text" class="form-control form-control-solid"
                                                               placeholder="Enter Country name" name="country"
                                                               value="{{$africa->country}}"/>
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
