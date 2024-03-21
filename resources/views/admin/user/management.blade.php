@extends('layouts.master')

@section('title', 'Quản lý người sử dụng')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Quản lý người sử dụng'])
    <div class="user-list font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex no-block justify-content-between align-items-center mb-3">
                            <form action="" method="get" class="d-flex align-items-center">
                                <div class="form-field me-3">
                                    <label for="" class="mb-1">Phòng ban</label>
                                    <select name="department" id="department" class="form-select">
                                        <option value="">Phương Như</option>
                                        <option value="">Phòng kế toán</option>
                                    </select>
                                </div>
                            </form>
                            <a class="btn btn-success d-flex align-items-center" href="" data-bs-toggle="modal" data-bs-target="#management">
                                <span class="icon-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4">
                                        </path>
                                        <path d="M13.5 6.5l4 4"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                    </svg>
                                </span>
                                <span class="ms-1">Nhập danh sách nhân viên</span>
                            </a>
                        </div>
                        <div class="system-table table-responsive">
                            <table id="simpletable"
                                class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Tên nhân viên</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0">Tên chức vụ</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Tên đăng nhập</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Mật khẩu</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Quyền</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-id="">
                                        <td>
                                            <h6 class="fs-4 fw-semibold mb-0">
                                                <div class="btn-group d-flex justify-content-center">
                                                    <button class="btn btn-success me-1 editButton">
                                                        <span class="icon-item-icon">
                                                            <img
                                                                src="{{ asset('img-system/system/edit_white.svg') }}">
                                                        </span>
                                                    </button>
                                                    <button class="btn btn-danger tabledit-delete-button"
                                                        data-id="123">
                                                        <span class="icon-item-icon">
                                                            <img src="{{ asset('img-system/system/trash_white.svg') }}"
                                                                alt="">
                                                        </span>
                                                    </button>
                                                    <button class="btn btn-info me-1 saveButton btn-update-contract" style="display: none;">
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
                                            <p class="mb-0 fw-normal fs-4">
                                                <select class="inputField form-select contract-company-search mr-sm-2" disabled
                                                    name="fullname">
                                                        <option value="">
                                                            Hoàng Lê Minh
                                                        </option>
                                                        <option value="">
                                                            Lê Việt Anh
                                                        </option>
                                                </select>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <input class="inputField form-control" type="text" name="fullname"
                                                value="Administrator" data-original-value="Administrator"
                                                disabled="" />
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <input class="inputField form-control" type="text" name="account"
                                                value="minhbrots2" data-original-value="minhbrots2"
                                                disabled="" />
                                                
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <input class="inputField form-control pw" name="password" type="password" value="******" disabled="">
                                        </td>
                                        <td>
                                            <p class="mb-0 fw-normal fs-4">
                                                <select class="inputField form-select contract-company-search mr-sm-2" disabled
                                                    name="permission">
                                                        <option value="">
                                                            Supervisor
                                                        </option>
                                                </select>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <td>
                                            @include('common/button-loading', ['class' => 'btn-create-contract'])
                                        </td>
                                        <td>
                                            <select class="inputField form-select contract-company-search mr-sm-2" 
                                            name="fullname">
                                                <option value="">
                                                    Hoàng Lê Minh
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <input class="inputField form-control" type="text"
                                                name="position" value="" />
                                        </td>
                                        <td>
                                            <input class="inputField form-control" type="text"
                                                name="username" value="" />
                                        </td>
                                        <td>
                                            <input class="inputField form-control" name="password">
                                               
                                            </input>
                                        </td>
                                        <td>
                                            <select class="inputField form-select contract-company-search mr-sm-2"
                                                name="permission">
                                                    <option value="">
                                                        Supervisor
                                                    </option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-footer">
                            <a href="" class="btn btn-primary">Gửi thông tin đăng nhập</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="management" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-primary text-white">
                        <h4 class="modal-title" id="success-header-modalLabel" style="color: white;">
                            Nhập danh sách nhân viên
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="physical-container">
                            <form action="" class="form-physical-detail" method="POST" enctype="multipart/form-data>">
                                @csrf
                                <div class="card card-body ">
                                    <div class="note-has-grid mb-2">
                                        <div class="single-note-item mb-3">
                                            <span class="side-stick"></span>
                                            <h3>Phòng ban</h3>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-xl-6 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <div class="col-sm form-radio">
                                                        <div class="d-flex">
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="info1" value="option1" checked="" />
                                                                <label class="form-check-label" for="info1" checked>Thêm</label>
                                                            </div>
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="info2" value="option2" />
                                                                <label class="form-check-label" for="info2">Sửa</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios" id="info3" value="option3" />
                                                                <label class="form-check-label" for="info3">Xóa</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="btn-group d-flex justify-content-end">
                                                    <button class="btn btn-success me-2"><span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M14 4l0 4l-6 0l0 -4"></path></svg></span></button>
                                                    <button class="btn btn-primary"><span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-restore"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3.06 13a9 9 0 1 0 .49 -4.087"></path><path d="M3 4.001v5h5"></path><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path></svg></span></button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mb-2">
                                                <div class="form-group">
                                                    <label><h5>Tên phòng ban:</h5></label>
                                                    <div class="col-sm">
                                                        <input type="text" class="form-control input-hide" value="" name="PHONGBAN" />
                                                    </div>
                                                    <select class="form-select select-hide company-search mr-sm-2" id="companySelect" name="companySelect"  style="display: none;">
                                                        <option value="20067" selected="">
                                                        Administrator
                                                        </option>
                                                        <option value="20058">
                                                        Supervisor
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group form-hide" style="display:none;">
                                                    <label><h5>Thêm mới phòng ban:</h5></label>
                                                    <div class="col-sm">
                                                        <input type="text" class="form-control input-modal-account" value="" name="PHONGBAN" />
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="note-has-grid mb-2">
                                        <div class="single-note-item mb-3">
                                            <span class="side-stick"></span>
                                            <h3>Vị trí chức vụ</h3>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-xl-6 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <div class="col-sm form-radio">
                                                        <div class="d-flex">
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input" type="radio" name="exampleRadios2" id="info4" value="option1" checked="" />
                                                                <label class="form-check-label" for="info4">Thêm</label>
                                                            </div>
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input" type="radio" name="exampleRadios2" id="info5" value="option2" />
                                                                <label class="form-check-label" for="info5">Sửa</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="exampleRadios2" id="info6" value="option3" />
                                                                <label class="form-check-label" for="info6">Xóa</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mb-2">
                                                <div class="btn-group d-flex justify-content-end">
                                                    <button class="btn btn-success me-2"><span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M14 4l0 4l-6 0l0 -4"></path></svg></span></button>
                                                    <button class="btn btn-primary"><span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-restore"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3.06 13a9 9 0 1 0 .49 -4.087"></path><path d="M3 4.001v5h5"></path><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path></svg></span></button>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="form-group">
                                                    <label><h5>Tên chức vụ:</h5></label>
                                                    <div class="col-sm">
                                                        <input type="text" class="form-control input-hide" value="" name="PHONGBAN" />
                                                    </div>
                                                    <select class="form-select select-hide company-search mr-sm-2" id="companySelect" name="companySelect" style="display: none;">
                                                        <option value="20067" selected="" >
                                                        Administrator
                                                        </option>
                                                        <option value="20058">
                                                        Supervisor
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group form-hide" style="display:none;">
                                                    <label><h5>Thêm mới chức vụ:</h5></label>
                                                    <div class="col-sm">
                                                        <input type="text" class="form-control input-modal-account" value="" name="PHONGBAN" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-has-grid">
                                        <div class="single-note-item mb-3">
                                            <span class="side-stick"></span>
                                            <h3>Danh sách nhân viên</h3>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xs-12 col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="d-inline-block" for="companySelect"><h5>Tên phòng ban:</h5></label>
                                                    <select class="form-select company-search mr-sm-2" id="companySelect" name="companySelect">
                                                        <option value="20067" selected="">
                                                        Phương Như
                                                        </option>
                                                        <option value="20058">
                                                        Phòng Tài chính
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="d-inline-block" for="companySelect"><h5>Tên chức vụ:</h5></label>
                                                    <select class="form-select company-search mr-sm-2" id="companySelect" name="companySelect">
                                                        <option value="20067" selected="">
                                                        Administrator
                                                        </option>
                                                        <option value="20058">
                                                        Supervisor
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="system-table table-responsive">
                                                    <table id="simpletable"
                                                        class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                                        <thead class="text-dark fs-4">
                                                            <tr>
                                                                <th>
                                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="fs-4 fw-semibold mb-0">Tên nhân viên</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="fs-4 fw-semibold mb-0">Địa chỉ</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">Điện thoại</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">Email</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-id="">
                                                                <td>
                                                                    <h6 class="fs-4 fw-semibold mb-0">
                                                                        <div class="btn-group d-flex justify-content-center">
                                                                            <button class="btn btn-success me-1 editButton">
                                                                                <span class="icon-item-icon">
                                                                                    <img
                                                                                        src="{{ asset('img-system/system/edit_white.svg') }}">
                                                                                </span>
                                                                            </button>
                                                                            <button class="btn btn-danger tabledit-delete-button"
                                                                                data-id="123">
                                                                                <span class="icon-item-icon">
                                                                                    <img src="{{ asset('img-system/system/trash_white.svg') }}"
                                                                                        alt="">
                                                                                </span>
                                                                            </button>
                                                                            <button class="btn btn-info me-1 saveButton btn-update-contract" style="display: none;">
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
                                                                    <p class="mb-0 fw-normal fs-4">
                                                                        <input class="inputField form-control" type="text" name="fullname"
                                                                        value="Hoàng Lê Minh" data-original-value="Hoàng Lê Minh"
                                                                        disabled="" />
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <input class="inputField form-control" type="text" name="address"
                                                                        value="Hong Ha" data-original-value="Hong Ha"
                                                                        disabled="" />
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <input class="inputField form-control" type="text" name="account"
                                                                        value="0961187500" data-original-value="0961187500"
                                                                        disabled="" />
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-0 fw-normal fs-4">
                                                                        <input class="inputField form-control" type="text" name="email"
                                                                        value="minhbrots2@gmail.com" data-original-value="minhbrots2@gmail.com"
                                                                        disabled="" />
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td>
                                                                    @include('common/button-loading', ['class' => 'btn-create-contract'])
                                                                </td>
                                                                <td>
                                                                    <input class="inputField form-control" type="text"
                                                                    name="username" value="" />
                                                                </td>
                                                                <td>
                                                                    <input class="inputField form-control" type="text"
                                                                        name="position" value="" />
                                                                </td>
                                                                <td>
                                                                    <input class="inputField form-control" type="text"
                                                                        name="username" value="" />
                                                                </td>
                                                                <td>
                                                                    <input class="inputField form-control" name="password"></input>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Đóng
                        </button>
                        <button type="button" class="btn bg-warning-subtle text-warning font-medium">
                            Reset
                        </button>
                        <button type="button" class="btn bg-success-subtle text-success font-medium">
                            Lưu thay đổi
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/pages/management.js"></script>
@endsection
