@extends('layouts.master')

@section('title', 'Quản lý thông tin bệnh viện')
@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Quản lý thông tin bệnh viện'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active" id="hospital-info-tab" data-bs-toggle="pill" data-bs-target="#hospital-info" type="button" role="tab" aria-controls="pills-hospital" aria-selected="true">
                                <span class="icon-item-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-hospital" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 21l18 0"></path><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path><path d="M10 9l4 0"></path><path d="M12 7l0 4"></path></svg></span>
                                <span class="d-none d-md-block">Cập nhật thông tin bệnh viện</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="hospital-use-tab" data-bs-toggle="pill" data-bs-target="#hospital-user" type="button" role="tab" aria-controls="hospital-user" aria-selected="false" tabindex="-1">
                                <span class="icon-item-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-nurse" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 6c2.941 0 5.685 .847 8 2.31l-2 9.69h-12l-2 -9.691a14.93 14.93 0 0 1 8 -2.309z"></path><path d="M10 12h4"></path><path d="M12 10v4"></path></svg></span>
                                <span class="d-none d-md-block">Cập nhật thông tin tài khoản bệnh viện</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="hospital-info" role="tabpanel" aria-labelledby="hospital-info-tab" tabindex="0">
                            <div class="table-responsive">
                                <table id="simpletable" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                                    <thead class="text-dark fs-4">
                                        <tr role="row">
                                            <th style="width: 200px;">
                                                <h6 class="fs-4 fw-semibold text-center mb-0">Thao tác</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Tên bệnh viện</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Loại bệnh viện</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hospitalList as $key => $hospital)
                                        <tr role="row" data-id="{{ $hospital->id }}">
                                            <td>
                                                <h6 class="fs-4 fw-semibold mb-0">
                                                    <div class="btn-group d-flex justify-content-center">
                                                        <button class="btn btn-success me-1 editButton">
                                                            <span class="icon-item-icon">
                                                                <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-danger tabledit-delete-button delete-button-hospital">
                                                            <span class="icon-item-icon">
                                                                <img src="{{ asset('/img-system/system/trash_white.svg') }}" alt="" />
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-info me-1 saveButton btn-update-hospital" style="display: none;">
                                                            <span class="icon-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-discount-check-filled" width="24"
                                                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                    <path
                                                                        d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                                                        stroke-width="0" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-warning cancelButton" style="display: none;">
                                                            <span class="icon-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-circle-x-filled" width="24"
                                                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                    <path
                                                                        d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                                                        stroke-width="0" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </h6>
                                            </td>
                                            <td>
                                                <input class="inputField form-control update-hospital-name" type="text" name="update_hospital_name" value="{{ $hospital->hospital_name }}" data-original-value="{{ $hospital->hospital_name }}" disabled="">
                                            </td>
                                            <td>
                                                <select class="form-select inputField mr-sm-2 " name="update_hospital_type_id" disabled>
                                                    @foreach ($hospitalTypeList as $hospitalType)
                                                        <option value="{{ $hospitalType->id }}"
                                                            {{ $hospital->hospital_type_id == $hospitalType->id ? 'selected' : '' }}>
                                                            {{ $hospitalType->hospital_type_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr role="row">
                                            <td class="justify-content-center d-flex">
                                                @include('common/button-loading', ['class' => 'btn-create-hospital'])
                                            </td>
                                            <td>
                                                <input class="inputField form-control create-hospital me-3" type="text" name="create_hospital_name" value="" data-original-value="">
                                            </td>
                                            <td class="create-hospital-type">
                                                <select class="form-select inputField mr-sm-2" name="creat_hospital_type_id" >
                                                    @foreach ($hospitalTypeList as $hospitalType)
                                                        <option value="{{ $hospitalType->id }}">
                                                            {{ $hospitalType->hospital_type_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hospital-user" role="tabpanel" aria-labelledby="hospital-user-tab" tabindex="0">
                            <div class="table-responsive">
                                <table id="simpletable" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                                    <thead class="text-dark fs-4">
                                        <tr role="row">
                                            <th style="width: 200px;">
                                                <h6 class="fs-4 fw-semibold text-center mb-0">Thao tác</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Tên nhân viên</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Tên đăng nhập</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Mật khẩu</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Tài khoản thuộc</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userHospitalList as $key => $userhospital)
                                        <tr role="row" data-id="{{ $userhospital->id }}">
                                            <td>
                                                <h6 class="fs-4 fw-semibold mb-0">
                                                    <div class="btn-group d-flex justify-content-center">
                                                        <button class="btn btn-success me-1 editButton">
                                                            <span class="icon-item-icon">
                                                                <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-danger tabledit-delete-button delete-button-user-hospital">
                                                            <span class="icon-item-icon">
                                                                <img src="{{ asset('/img-system/system/trash_white.svg') }}" alt="" />
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-info me-1 saveButton btn-update-user-hospital" style="display: none;">
                                                            <span class="icon-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-discount-check-filled" width="24"
                                                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                    <path
                                                                        d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                                                        stroke-width="0" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-warning cancelButton" style="display: none;">
                                                            <span class="icon-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-circle-x-filled" width="24"
                                                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                    <path
                                                                        d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                                                        stroke-width="0" fill="currentColor">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </h6>
                                            </td>
                                            <td>
                                                <input class="inputField form-control" type="text" name="update_employee_name" value="{{ $userhospital->employee_name }}" data-original-value="{{ $userhospital->employee_name }}" disabled="">
                                            </td>
                                            <td>
                                                <input class="inputField form-control" type="text" name="update_username" value="{{ $userhospital->username }}" data-original-value="{{ $userhospital->username }}" disabled="">
                                            </td>
                                            <td>
                                                <input class="inputField form-control" type="password" name="update_password" value="******" data-original-value="******" disabled="">
                                            </td>
                                            <td>
                                                <select class="form-select inputField mr-sm-2 " name="update_user_hospital_id" disabled>
                                                    @foreach ($hospitalList as $hospital)
                                                        <option value="{{ $hospital->id }}"
                                                            {{ $userhospital->hospital_id == $hospital->id ? 'selected' : '' }}>
                                                            {{ $hospital->hospital_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr role="row">
                                            <td class="justify-content-center d-flex">
                                                @include('common/button-loading', ['class' => 'btn-create-user-hospital'])
                                            </td>
                                            <td>
                                                <input class="inputField form-control" type="text" name="create_employee_name" value="" data-original-value="">
                                            </td>
                                            <td>
                                                <input class="inputField form-control" type="text" name="create_username" value="" data-original-value="">
                                            </td>
                                            <td>
                                                <input class="inputField form-control" type="text" name="create_password" value="" data-original-value="">
                                            </td>
                                            <td class="create-hospital-type">
                                                <select class="form-select inputField mr-sm-2" name="create_hospital_id" >
                                                    @foreach ($hospitalList as $hospital)
                                                        <option value="{{ $hospital->id }}">
                                                            {{ $hospital->hospital_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
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
@section('script')
<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="assets/js/datatable/datatable-basic.init.js"></script>
<script src="/js/pages/hospital.js"></script>
@endsection
