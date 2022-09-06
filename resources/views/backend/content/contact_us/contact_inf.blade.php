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
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">General Info</h1>
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
                        <li class="breadcrumb-item text-muted">Contact Page</li>
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
                        <li class="breadcrumb-item text-dark">Contact Info</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <div>
                    {{-- <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_new_target2"><i class="fa fa-plus"></i>Add Card</a>--}}
                </div>
                {{--Modal--}}
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
                                    action="{{route('home.general-info.card.store')}}"
                                    method="post"
                                    enctype="multipart/form-data"
                                >
                                    @csrf
                                    <!--begin::Heading-->
                                    <input type="hidden" name="id" value="">
                                    <div class="mb-13 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Add General Info Card</h1>
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
                                               value=""/>
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
                                                  placeholder="Enter Card Description" name="description"
                                        ></textarea>
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
                                               value=""/>
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
                                                            <span class="indicator-label">Add Card
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
            <!--begin::About card-->
            <div class="card">
                <div class="card-body">
                    <div class="py-10">
                        <div class="row">
                            <div class="col-10">
                                <h1 class="anchor fw-bolder mb-5" id="dom-positioning">
                                    Update Contact Info
                                </h1>
                            </div>
                            <div class="col-2 d-flex justify-content-end">

                            </div>
                        </div>
                        <form action="{{route('contact.contact-info.update')}}"
                              method="post">
                            @csrf
                            <div class="my-5">
                                <div class="row mb-3">
                                    <label for="page_title"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Page Title</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" class="form-control" id="page_title"
                                               name="page_title"
                                               placeholder=""
                                               value="{{!empty($contact->page_title) ? $contact->page_title  : ''}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4 align-left">
                                    <label for="section_subtitle"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Section Subtitle</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="section_subtitle" class="form-control"
                                               id="section_subtitle"
                                               placeholder=""
                                               value="{{!empty($contact->section_subtitle) ?$contact->section_subtitle : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="section_title"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Section Title</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="section_title" class="form-control"
                                               id="section_title"
                                               placeholder=""
                                               value="{{!empty($contact->section_title) ?$contact->section_title : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="address_title"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address Title</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="address_title" class="form-control"
                                               id="address_title"
                                               placeholder=""
                                               value="{{!empty($contact->address_title) ?$contact->address_title : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="address"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <textarea rows="5" type="text" name="address" class="form-control"
                                                  id="address"
                                                  placeholder=""
                                        >{{!empty($contact->address) ?$contact->address : ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="email_title"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email Title</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="email_title" class="form-control"
                                               id="email_title"
                                               placeholder=""
                                               value="{{!empty($contact->email_title) ?$contact->email_title : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="email"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="email" name="email" class="form-control"
                                               id="email"
                                               placeholder=""
                                               value="{{!empty($contact->email) ?$contact->email : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="phone_title"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Phone Title</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="phone_title" class="form-control"
                                               id="phone_title"
                                               placeholder=""
                                               value="{{!empty($contact->phone_title) ?$contact->phone_title : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="phone"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Phone</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="phone" class="form-control"
                                               id="phone"
                                               placeholder=""
                                               value="{{!empty($contact->phone) ?$contact->phone : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="lat"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Location Latitude</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="lat" class="form-control"
                                               id="lat"
                                               placeholder=""
                                               value="{{!empty($contact->lat) ?$contact->lat : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="long"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Location Longitude</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="long" class="form-control"
                                               id="long"
                                               placeholder=""
                                               value="{{!empty($contact->long) ?$contact->long : ''}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4 align-left">
                                    <label for="form_title"
                                           class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Form Title</label>
                                    <div class="col-xl-10 col-lg-9 col-sm-10">
                                        <input type="text" name="form_title" class="form-control"
                                               id="form_title"
                                               placeholder=""
                                               value="{{!empty($contact->form_title) ?$contact->form_title : ''}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row align-left mt-5 pt-5">
                                <div class="col-xl-4 col-lg-2 col-sm-10 d-flex justify-content-start">
                                    <button class="btn btn-success" type="submit">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{--<table id="kt_datatable_example_8"
                               class="table table-striped gy-5 gs-7 border rounded mt-5">
                            <thead>
                            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                <th style="width: 30px;">#</th>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($general_info->general_info_card as $card)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$card->title}}</td>
                                    <td>{{$card->description}}</td>
                                    <td><img
                                            src="{{!empty($card->image) ? asset($card->image):asset('backend/assets/media/holders/1280x800.png')}}"
                                            alt=""
                                            class="img-thumbnail img-fluid"
                                        >
                                    </td>
                                    <td style="width: 80px">
                                        <a data-bs-toggle="modal"
                                           data-bs-target="#kt_modal_new_target-{{$card->id}}"
                                           href="{{route('home.general-info.card.edit',$card->id)}}"
                                           class="btn btn-icon btn-info btn-sm">
                                            <i class="fas fa-pencil-alt fs-4"></i>
                                        </a>
                                        <a href="{{route('home.general-info.card.delete', $card->id)}}"
                                           class="btn btn-icon btn-danger btn-sm" id="delete">
                                            <i class="fas fa-trash fs-4"></i>
                                        </a>
                                    </td>
                                </tr>
                                <input type="hidden" value="{{ $i++ }}">

                                --}}{{--Modal--}}{{--
                                <div class="modal fade" id="kt_modal_new_target-{{$card->id}}" tabindex="-1"
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
                                                    <input type="hidden" name="id" value="{{$card->id}}">
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
                                                               value="{{!empty($card->title) ? $card->title : ''}}"/>
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
                                                        >{{!empty($card->description) ? $card->description : ''}}</textarea>
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
                                                        <input type="file" id="image{{$card->id}}"
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
                                                                 id="show_image{{$card->id}}"
                                                                 width="400"
                                                                 src="{{!empty($card->image) ? asset($card->image) : asset('backend/assets/media/holders/1280x800.png')}}"
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
                                        $('#image{{$card->id}}').change(function (e) {
                                            const reader = new FileReader();
                                            reader.onload = function (e) {
                                                $('#show_image{{$card->id}}').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(e.target.files['0']);
                                        });
                                    });
                                </script>
                            @endforeach
                            </tbody>
                        </table>--}}
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
