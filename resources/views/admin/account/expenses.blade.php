@extends('layouts.master')

@section('title', 'Chi bảo hiểm')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Chi bảo hiểm'])
    <div class="widget-content searchable-container list insurance-account">
        <div class="card card-body">
            <h5>Chi bảo hiêm</h5>
                <form action="">
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="companySelect">Tên công ty</label>
                            <select class="form-select company-search mr-sm-2"  name="companySelect" style="width: calc(100% - 100px);">
                                <option value="20067" selected="">
                                    CỬU LONG JOC 2
                                </option>
                                <option value="20058">
                                    PVFCCO
                                </option>
                                <option value="20059">
                                    TRƯỜNG SƠN JOC
                                </option>
                                <option value="49">
                                    CỬU LONG JOC (O)
                                </option>
                                <option value="20066">
                                    TALISMAN
                                </option>
                                <option value="20068">
                                    GAS SOUTH (KMN)
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                            <select class="form-select period-search mr-sm-2" name="periodSelect" style="width: calc(100% - 100px);">
                                <option value="10079" selected="">
                                    CL2023
                                </option>
                                <option value="10077">
                                    CL2022
                                </option>
                                <option value="10078">
                                    Gas2022
                                </option>
                                <option value="10075">
                                    CL2021
                                </option>
                                <option value="10076">
                                    Gas2021
                                </option>
                                <option value="10074">
                                    Gas2020
                                </option>
                                <option value="10073">
                                    2020-2020
                                </option>
                                <option value="10072">
                                    2019-2020
                                </option>
                                <option value="10071">
                                    2018-2019
                                </option>
                                <option value="10070">
                                    2017-2018
                                </option>
                                <option value="10069">
                                    2016-2017
                                </option>
                                <option value="10068">
                                    2015-2016
                                </option>
                                <option value="10067">
                                    2014-2015
                                </option>
                                <option value="10066">
                                    2013-2014
                                </option>
                                <option value="10065">
                                    2012-2013
                                </option>
                                <option value="10064">
                                    2011-2012
                                </option>
                                <option value="64">
                                    2010-2011
                                </option>
                                <option value="63">
                                    2007-2008
                                </option>
                                <option value="62">
                                    2006-2007
                                </option>
                                <option value="61">
                                    2005-2006
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="companySelect">Hợp đồng</label>
                            <select class="form-select contract-search mr-sm-2" id="contractSelect" name="contractSelect" style="width: calc(100% - 100px);"> </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-3 ">
                        <div class="form-group d-flex align-items-center form-search-absolute">
                            <input type="search" name="keyword" class="form-control form-search" value="" placeholder="Tìm kiếm...">
                            <button class="btn-primary btn btn-search">Tìm kiếm</button>
                        </div>
                    </div>
                </div>
                <div class="bg-infor bg-info-insurance py-2 px-3 mb-3">
                    Thông tin đơn/hợp đồng bảo hiểm
                </div>
                <div class="info-contract mb-3" style="display: none;">
                    <div class="row mb-3">
                        <div class="col-sm-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên công ty:</div>
                                <div class="content">Cửu Long JOC</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên niên hạn:</div>
                                <div class="content">CL 2023</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên HĐ:</div>
                                <div class="content">DH CUU LONG 2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Số HĐ:</div>
                                <div class="content">01/2022HĐ CL</div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Giá trị HĐ:</div>
                                <div class="content">0 <span>đồng</span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="card card-body">
            <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active" id="expenses-tab" data-bs-toggle="pill" data-bs-target="#expenses1" type="button" role="tab" aria-controls="expenses" aria-selected="true">
                        <span class="d-none d-md-block">Bảo hiểm chi</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="expenses-tab" data-bs-toggle="pill" data-bs-target="#expenses2" type="button" role="tab" aria-controls="expenses" aria-selected="false" tabindex="-1">
                        <span class="d-none d-md-block">Chi trong ngày</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="expenses-tab" data-bs-toggle="pill" data-bs-target="#expenses3" type="button" role="tab" aria-controls="expenses" aria-selected="false" tabindex="-1">
                        <span class="d-none d-md-block">Chi theo bệnh viện</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="expenses-tab" data-bs-toggle="pill" data-bs-target="#expenses4" type="button" role="tab" aria-controls="expenses" aria-selected="false" tabindex="-1">
                        <span class="d-none d-md-block">Nhật ký thao tác</span>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="expenses1" role="tabpanel" aria-labelledby="expenses-tab" tabindex="0">
                    <div class="table-responsive">
                        <table id="simpletable" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                            <thead class="text-dark fs-4">
                                <tr role="row">
                                    <th>
                                        Tên chủ tài khoản
                                    </th>
                                    <th>
                                        Số thẻ Bảo hiểm
                                    </th>
                                    <th>Tên khách hàng</th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th class="text-center">Giới hạn đầu kỳ (đồng)</th>
                                    <th class="text-center">Chi trong kỳ</th>
                                    <th class="text-center">Giới hạn còn lại (đồng)</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row">
                                    <td rowspan="2">
                                        <h6 class="fs-4 fw-semibold mb-0">Cao Nhật Minh</h6>
                                        <span class="fw-normal">15P897/16/000287</span>
                                    </td>
                                    <td>
                                        15P897/16/000287
                                    </td>
                                    <td>Cao Nhật Minh</td>
                                    <td>Nam</td>
                                    <td>09/09/1989</td>
                                    <td class="text-center">26 451 480</td>
                                    <td class="text-center">162 000</td>
                                    <td class="text-center">25 231 080</td>
                                    <td>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            <div class="btn-group justify-content-center d-flex">
                                                <button class="btn btn-success me-1" data-bs-toggle="modal" data-bs-target="#detailclient1">
                                                    <span class="icon-item-icon">
                                                        <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                    </span>
                                                </button>
                                            </div>
                                        </h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        15P806/19/000914
                                    </td>
                                    <td>Cao Vũ Quang Minh</td>
                                    <td>Nam</td>
                                    <td>02/02/2020</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">1 058 400</td>
                                    <td class="text-center">0</td>
                                    <td>
                                        <h6 class="fs-4 fw-semibold mb-0">
                                            <div class="btn-group justify-content-center d-flex">
                                                <button class="btn btn-success me-1" data-bs-toggle="modal" data-bs-target="#detailclient2">
                                                    <span class="icon-item-icon">
                                                        <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                    </span>
                                                </button>
                                            </div>
                                        </h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="detailclient1" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header modal-colored-header bg-primary text-white">
                                    <h4 class="modal-title text-white" id="primary-header-modalLabel">
                                        Chi tiền bảo hiểm
                                    </h4>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <h5>Tên công ty: CỬU LONG JOC 2</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <h5>Tên niên hạn: CL2024</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <h5>Tên hợp đồng: CL-2024</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <h5>Giới hạn kỳ BH: 26 451 480 đồng</h5>
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <h5>Tên chủ tài khoản: Cao Nhật Minh - 15P897/16/000287</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <h5>Giới tính: Nam</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <h5>Ngày sinh: 09/09/1989</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <h5>Package: <span class="main-color">Nhân viên, package 1, oneshore</span></h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <h5>Loại khách hàng: oneshore</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group d-flex align-items-center">
                                                <h5 class="me-3 mb-0">Số thẻ BH cũ:</h5>
                                                <div class="col-sm form-radio">
                                                    <div class="d-flex">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="info1" value="option1" checked="" />
                                                            <label class="form-check-label" for="info1">Chủ tài khoản</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="info2" value="option2" />
                                                            <label class="form-check-label" for="info2">Thân nhân</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-3">
                                            <h5>Loại TK: B</h5>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-group">
                                                <label class="d-inline-block" for="companySelect"><h5>Tên bệnh viện:</h5></label>
                                                <select class="form-select company-search mr-sm-2"  name="companySelect">
                                                    <option value="20067" selected="">
                                                    BV Hồng Ngọc
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="d-inline-block" for="companySelect"><h5>Ngày nhập:</h5></label>
                                                <div class="col-sm">
                                                    <input class="inputField form-control create-contract-effective_time singledate" type="text" name="effective_time" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="d-inline-block" for="companySelect"><h5>Ngày khám:</h5></label>
                                                <div class="col-sm">
                                                    <input class="inputField form-control create-contract-effective_time singledate" type="text" name="effective_time" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="file" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead class="text-dark fs-4">
                                                <tr role="row">
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                                    </th>
                                                    <th>
                                                        <h6  class="fs-4 fw-semibold text-center mb-0">Nội dung chi</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Số tiền chi trả</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Số tiền ước chi</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Số tiền từ chối</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Ghi chú</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row">
                                                    <td>
                                                        @include('common/button-loading', ['class' => 'btn-create'])
                                                    </td>
                                                    <td>
                                                        <select class="form-select company-search mr-sm-2"  name="companySelect" style="width: 150px;">
                                                            <option value="20067" selected="">
                                                            Khám sức khỏe
                                                            </option>
                                                            <option value="20067" selected="">
                                                            Điều trị bệnh
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-address" type="text" name="address" value="">
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-phone_number" type="text" name="phone_number" value="">
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-email" type="text" name="email" value="">
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-email" type="text" name="email" value="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 col-md-3">
                                            <h5>Giới hạn còn lại: <span class="main-color">25 231 080</span> đồng</h5>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <h5>Tài khoản chi khác: <span class="main-color">0</span> đồng</h5>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="simpletable" class="table sticky-column border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead class="text-dark fs-4">
                                                <tr role="row">
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Tên khách hàng</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Ngày khám</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Ngày chi</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Số tiền chi</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Ghi chú</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Đã duyệt</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Tên bệnh viện</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row">
                                                    <td>
                                                        <h6 class="fs-4 fw-semibold mb-0">
                                                            <div class="btn-group d-flex justify-content-center">
                                                                <button class="btn btn-success me-1 editButton">
                                                                    <span class="icon-item-icon">
                                                                        <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                                    </span>
                                                                </button>
                                                                <button class="btn btn-danger tabledit-delete-button delete-button-company">
                                                                    <span class="icon-item-icon">
                                                                        <img src="{{ asset('/img-system/system/trash_white.svg') }}" alt="" />
                                                                    </span>
                                                                </button>
                                                                <button class="btn btn-info me-1 saveButton btn-update-company" style="display: none;">
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
                                                                <button class="btn btn-warning cancelButton " style="display: none;">
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
                                                        <input class="inputField form-control" type="text" name="company_name"
                                                            value="Cao Nhật Minh" data-original-value="Cao Nhật Minh"
                                                            disabled=""  style="width: 150px;" />
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control" type="text" name="address" value="01/12/2024"
                                                            data-original-value="01/12/2024" disabled=""  style="width: 110px;"/>
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control" type="text" name="phone_number"
                                                            value="01/12/2024" data-original-value="01/12/2024" style="width: 110px;"
                                                            disabled="" />
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control" type="text" name="email" value="164 000"
                                                            data-original-value="164 000" disabled="" style="width: 110px;"/>
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control" type="text" name="ceo_name"
                                                            value="VPPN_KSK17411_CL024875" data-original-value="VPPN_KSK17411_CL024875"
                                                            disabled="" style="width: 220px;"/>
                                                    </td>
                                                    <td class="text-center">
                                                            <input class="form-check-input inputField" type="checkbox" id="inlineCheckbox3" value="option3" disabled="" checked>
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control" type="text" name="ceo_name"
                                                            value="Bệnh viện An Sinh" data-original-value="Bệnh viện An Sinh"
                                                            disabled="" style="width: 220px;"/>
                                                    </td>
                                                </tr>
                                                <tr role="row">
                                                    <td>
                                                        @include('common/button-loading', ['class' => 'btn-create-company'])
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-name" type="text" name="company_name"
                                                            value="" />
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-address" type="text" name="address"
                                                            value="" />
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-phone_number" type="text" name="phone_number"
                                                            value="" />
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-email" type="text" name="email"
                                                            value="" />
                                                    </td>
                                                    <td>
                                                        <input class="inputField form-control create-company-ceo_name" type="text" name="ceo_name"
                                                            value="" />
                                                    </td>
                                                    <td class="text-center">
                                                        <input class="form-check-input inputField" type="checkbox" id="inlineCheckbox3" value="option3" checked>
                                                    </td>
                                                    <td class="text-center">
                                                        <input class="inputField form-control create-company-responsibility_officer_name" type="text"
                                                            name="responsibility_officer_name" value="" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                        Quay lại
                                    </button>
                                    <button type="button" class="btn bg-primary-subtle text-primary">
                                        Lưu thay đổi
                                    </button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    
                    <div id="detailclient2" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header modal-colored-header bg-primary text-white">
                                    <h4 class="modal-title text-white" id="primary-header-modalLabel">
                                        Chi tiền bảo hiểm
                                    </h4>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                              
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn bg-primary-subtle text-primary">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="expenses2" role="tabpanel" aria-labelledby="expenses-tab" tabindex="0">
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group ">
                                <label class="col-form-label">Thời gian:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control daterange">
                                    <span class="input-group-text">
                                        <i class="ti ti-calendar fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group ">
                                <label class="col-form-label">Đã duyệt:</label>
                                <select class="form-select period-search mr-sm-2" name="periodSelect" style="width: calc(100% - 100px);">
                                    <option value="10079" selected="">
                                        Đã duyệt
                                    </option>
                                    <option value="10077">
                                        Chưa duyệt
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="simpletable" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                            <thead class="text-dark fs-4">
                                <tr role="row">
                                    <th class="text-center" style="width: 50px;">
                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                                    </th>
                                    <th style="width: 100px;">
                                        <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Số thẻ Bảo hiểm</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Tên khách hàng</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Số tiền chi trả</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Nội dung chi</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Duyệt</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Ghi chú</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Ngày chi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="expenses3" role="tabpanel" aria-labelledby="expenses-tab" tabindex="0">
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group ">
                                <label class="col-form-label">Thời gian:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control daterange">
                                    <span class="input-group-text">
                                        <i class="ti ti-calendar fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group ">
                                <label class="col-form-label">Tên bệnh viện:</label>
                                <select class="form-select period-search mr-sm-2" name="periodSelect" style="width: calc(100% - 100px);">
                                    <option value="10079" selected="">
                                        Bệnh viện VN Cu Ba
                                    </option>
                                    <option value="10077">
                                        Bệnh viện Việt Đức
                                    </option>
                                    <option value="10077">
                                        Bệnh viện Xanh Pôn
                                    </option>
                                    <option value="10077">
                                        Bệnh viện Đức Giang
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3 btn-flexend">
                            <div class="btn-group">
                                <button class="btn btn-primary" type="button">Duyệt chi</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3 btn-flexend">
                            <div class="btn-group">
                                <button class="btn btn-primary" type="button">Xuất ra Excel</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="simpletable" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                            <thead class="text-dark fs-4">
                                <tr role="row">
                                    <th class="text-center" style="width: 50px;">
                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                                    </th>
                                    <th style="width: 100px;">
                                        <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Số thẻ Bảo hiểm</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Tên khách hàng</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Số tiền chi trả</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Nội dung chi</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Duyệt</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Ghi chú</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Ngày chi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="expenses4" role="tabpanel" aria-labelledby="expenses-tab" tabindex="0">
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group ">
                                <label class="col-form-label">Thời gian:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control daterange">
                                    <span class="input-group-text">
                                        <i class="ti ti-calendar fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group">
                                <label class="col-form-label">Niên hạn:</label>
                                <select class="form-select period-search mr-sm-2" name="periodSelect">
                                    <option value="10079" selected="">
                                        CL2023
                                    </option>
                                    <option value="10077">
                                        CL2022
                                    </option>
                                    <option value="10078">
                                        Gas2022
                                    </option>
                                    <option value="10075">
                                        CL2021
                                    </option>
                                    <option value="10076">
                                        Gas2021
                                    </option>
                                    <option value="10074">
                                        Gas2020
                                    </option>
                                    <option value="10073">
                                        2020-2020
                                    </option>
                                    <option value="10072">
                                        2019-2020
                                    </option>
                                    <option value="10071">
                                        2018-2019
                                    </option>
                                    <option value="10070">
                                        2017-2018
                                    </option>
                                    <option value="10069">
                                        2016-2017
                                    </option>
                                    <option value="10068">
                                        2015-2016
                                    </option>
                                    <option value="10067">
                                        2014-2015
                                    </option>
                                    <option value="10066">
                                        2013-2014
                                    </option>
                                    <option value="10065">
                                        2012-2013
                                    </option>
                                    <option value="10064">
                                        2011-2012
                                    </option>
                                    <option value="64">
                                        2010-2011
                                    </option>
                                    <option value="63">
                                        2007-2008
                                    </option>
                                    <option value="62">
                                        2006-2007
                                    </option>
                                    <option value="61">
                                        2005-2006
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3 btn-flexend">
                            <div class="btn-group">
                                <button class="btn btn-primary" type="button">Xuất ra Excel</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3 btn-flexend">
                            <div class="btn-group">
                                <button class="btn btn-primary" type="button">Xóa thông tin</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="simpletable" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                            <thead class="text-dark fs-4">
                                <tr role="row">
                                    <th class="text-center" style="width: 50px;">
                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                                    </th>
                                    <th style="width: 100px;">
                                        <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Số thẻ Bảo hiểm</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Tên khách hàng</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Số tiền chi trả</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Nội dung chi</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Duyệt</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Ghi chú</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Ngày chi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/pages/account.js"></script>
    <script src="/assets/js/datetimepicker/moment.min.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker-init.js"></script>
    <script src="/assets/js/datetimepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/datetimepicker/datepicker-init.js"></script>
@endsection
