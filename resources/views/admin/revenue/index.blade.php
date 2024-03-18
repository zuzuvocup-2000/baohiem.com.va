@extends('layouts.master')

@section('title', 'Bảng kê chi tiết tài khoản')
@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Bảng kê chi tiết tài khoản'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active" id="revenue-tab" data-bs-toggle="pill" data-bs-target="#revenue-tab1" type="button" role="tab" aria-controls="pills-revenue" aria-selected="true">
                                <span class="d-none d-md-block">Tổng hợp bảo hiểm</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="revenue-tab" data-bs-toggle="pill" data-bs-target="#revenue-tab2" type="button" role="tab" aria-controls="pills-revenue" aria-selected="false" tabindex="-1">
                                <span class="d-none d-md-block">Báo cáo chi tiết chi bảo hiểm sức khỏe</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="revenue-tab" data-bs-toggle="pill" data-bs-target="#revenue-tab3" type="button" role="tab" aria-controls="pills-revenue" aria-selected="false" tabindex="-1">
                                <span class="d-none d-md-block">Báo cáo chi theo bệnh viện</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="revenue-tab" data-bs-toggle="pill" data-bs-target="#revenue-tab4" type="button" role="tab" aria-controls="pills-revenue" aria-selected="false" tabindex="-1">
                                <span class="d-none d-md-block">Báo cáo chi theo nội dung</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="revenue-tab" data-bs-toggle="pill" data-bs-target="#revenue-tab5" type="button" role="tab" aria-controls="pills-revenue" aria-selected="false" tabindex="-1">
                                <span class="d-none d-md-block">Báo cáo tổng hợp sức khỏe</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="revenue-tab" data-bs-toggle="pill" data-bs-target="#revenue-tab6" type="button" role="tab" aria-controls="pills-revenue" aria-selected="false" tabindex="-1">
                                <span class="d-none d-md-block">Báo cáo kết quả tài khoản khách hàng</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="revenue-tab1" role="tabpanel" aria-labelledby="revenue-tab" tabindex="0">
                            <form action="">
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input success" type="checkbox" id="success2-check" value="option1" checked="">
                                    <label class="form-check-label" for="success2-check">Toàn bộ theo niên hạn</label>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên công ty</label>
                                            <select name="company" class="form-select" id="companySelect">
                                                <option value="20067" selected="selected">CỬU LONG JOC 2</option>
                                                <option value="20058">PVFCCO</option>
                                                <option value="20059">TRƯỜNG SƠN JOC</option>
                                                <option value="49">CỬU LONG JOC (O)</option>
                                                <option value="20066">TALISMAN</option>
                                                <option value="20068">GAS SOUTH (KMN)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Niên hạn</label>
                                            <select name="period" class="form-select" id="periodSelect">
                                                <option value="10106" selected="selected">CL2023</option>
                                                <option value="10104">CL2022</option>
                                                <option value="10102">CL2021</option>
                                                <option value="10098">2019-2020</option>
                                                <option value="10097">2018-2019</option>
                                                <option value="10095">2017-2018</option>
                                                <option value="10093">2016-2017</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên hợp đồng</label>
                                            <select name="contract" class="form-select" id="contractSelect">
                                                <option value="10161" selected="selected">DH Cuu Long 2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-group ">
                                            <label for="">Thời gian hiệu lực từ:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control daterange" id="dateInput">
                                                <span class="input-group-text">
                                                    <i class="ti ti-calendar fs-5"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12 col-xl-6">
                                    <div class="table-responsive">
                                        <table class="table search-table align-middle text-nowrap price-table">
                                            <tbody>
                                                <tr>
                                                    <th class="main-th">Tổng số tài khoản chủ:</th>
                                                    <td class="main-color">5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tài khoản chủ hoạt động:
                                                    </th>
                                                    <td class="main-color">5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tài khoản chủ bị khóa:
                                                    </th>
                                                    <td class="main-color">0</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="main-th">TS tài khoản thành viên gia đình:</th>
                                                    <td class="main-color">8</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Thành viên gia đình hoạt động:
                                                    </th>
                                                    <td class="main-color">7</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Thành viên gia đình bị khóa:
                                                    </th>
                                                    <td class="main-color">1</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tổng giá trị giới hạn niên hạn trước chuyển sang:
                                                    </th>
                                                    <td class="main-color">0</td>
                                                    <td>đồng</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tổng giá trị gói TK(plan):
                                                    </th>
                                                    <td class="main-color">53 628 080</td>
                                                    <td>đồng</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tổng giá trị giới hạn đầu kỳ:
                                                    </th>
                                                    <td class="main-color">53 628 080</td>
                                                    <td>đồng</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tổng số lượt chi bảo hiểm:
                                                    </th>
                                                    <td class="main-color">3 170 000</td>
                                                    <td>đồng</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tổng giá trị chi bảo hiểm:
                                                    </th>
                                                    <td class="main-color">1</td>
                                                    <td>đồng</td>
                                                </tr>
                                                <tr>
                                                    <th class="main-th">Tổng tài khoản chi bảo hiểm:</th>
                                                    <td class="main-color">1</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tài khoản chủ:
                                                    </th>
                                                    <td class="main-color">0</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tài khoản thành viên:
                                                    </th>
                                                    <td class="main-color">0</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Tổng giá trị giới hạn còn lại đến thời điểm hiện tại:
                                                    </th>
                                                    <td class="main-color">50 458 080</td>
                                                    <td>đồng</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-6">
                                    <div class="system-table table-responsive">
                                        <table id="simpletable"
                                            class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">STT</th>
                                                    <th>Tên bệnh viện</th>
                                                    <th class="text-center">Số tiền bảo hiểm chi</th>
                                                    <th class="text-center">Số lần chi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Bệnh viện Hồng Ngọc</td>
                                                    <td class="text-center">3 170 000</td>
                                                    <td class="text-center">1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h4 class="text-center">Tổng số tiền chi: 3 170 000 <span class="vnd">đồng</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-export text-center"><button class="btn btn-primary" type="button">Xuất báo cáo</button></div>
                        </div>
                        <div class="tab-pane fade" id="revenue-tab2" role="tabpanel" aria-labelledby="revenue-tab" tabindex="0">
                            <form action="">
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên công ty</label>
                                            <select name="company" class="form-select" id="companySelect">
                                                <option value="20067" selected="selected">CỬU LONG JOC 2</option>
                                                <option value="20058">PVFCCO</option>
                                                <option value="20059">TRƯỜNG SƠN JOC</option>
                                                <option value="49">CỬU LONG JOC (O)</option>
                                                <option value="20066">TALISMAN</option>
                                                <option value="20068">GAS SOUTH (KMN)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Niên hạn</label>
                                            <select name="period" class="form-select" id="periodSelect">
                                                <option value="10106" selected="selected">CL2023</option>
                                                <option value="10104">CL2022</option>
                                                <option value="10102">CL2021</option>
                                                <option value="10098">2019-2020</option>
                                                <option value="10097">2018-2019</option>
                                                <option value="10095">2017-2018</option>
                                                <option value="10093">2016-2017</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên hợp đồng</label>
                                            <select name="contract" class="form-select" id="contractSelect">
                                                <option value="10161" selected="selected">DH Cuu Long 2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-group ">
                                            <label for="">Thời gian hiệu lực từ:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control daterange" id="dateInput">
                                                <span class="input-group-text">
                                                    <i class="ti ti-calendar fs-5"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="btn-export text-center"><button class="btn btn-primary" type="button">Xuất báo cáo</button></div>
                        </div>
                        <div class="tab-pane fade" id="revenue-tab3" role="tabpanel" aria-labelledby="revenue-tab" tabindex="0">
                            <form action="">
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-field">
                                            <label for="">Tên bệnh viện</label>
                                            <select name="hospital" class="form-select" id="hospital">
                                                <option value="20067" selected="selected">Bệnh viện VN Cu Ba</option>
                                                <option value="20058">Bệnh viện Việt Đức</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group ">
                                            <label for="">Thời gian hiệu lực từ:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control daterange" id="dateInput">
                                                <span class="input-group-text">
                                                    <i class="ti ti-calendar fs-5"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="system-table table-responsive">
                                        <table id="simpletable"
                                            class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">STT</th>
                                                    <th>Số thẻ Bảo hiểm</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Số tiền chi trả</th>
                                                    <th class="text-center">Ngày chi</th>
                                                    <th class="text-center">Ghi chú</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>15P897/16/000306</td>
                                                    <td>Triệu Ngọc Hòa</td>
                                                    <td>3 170 000đ</td>
                                                    <td class="text-center">03/04/2022</td>
                                                    <td class="text-center">Khám sức khỏe</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-export text-center"><button class="btn btn-primary" type="button">Xuất báo cáo</button></div>
                        </div>
                        <div class="tab-pane fade" id="revenue-tab4" role="tabpanel" aria-labelledby="revenue-tab" tabindex="0">
                            <form action="">
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <div class="form-group ">
                                            <label for="">Thời gian hiệu lực từ:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control daterange" id="dateInput">
                                                <span class="input-group-text">
                                                    <i class="ti ti-calendar fs-5"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12 me-2">
                                    <div class="system-table table-responsive">
                                        <table id="simpletable"
                                            class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 1%;">STT</th>
                                                    <th>Nội dung chi</th>
                                                    <th class="text-center">Số lần chi</th>
                                                    <th>Số tiền chi trả</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Khám sức khỏe</td>
                                                    <td class="text-center">2230</td>
                                                    <td>7 034 164 471 <span>đ</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Tiêm ngừa</td>
                                                    <td class="text-center">1168</td>
                                                    <td>1 846 232 510 <span>đ</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="system-table table-responsive">
                                        <table id="simpletable"
                                            class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 1%;">STT</th>
                                                    <th>Nội dung chi khác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>KSK13839</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>KSK13840</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-export text-center"><button class="btn btn-primary" type="button">Xuất báo cáo</button></div>
                        </div>
                        <div class="tab-pane fade" id="revenue-tab5" role="tabpanel" aria-labelledby="revenue-tab" tabindex="0">
                            <form action="">
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên công ty</label>
                                            <select name="company" class="form-select" id="companySelect">
                                                <option value="20067" selected="selected">CỬU LONG JOC 2</option>
                                                <option value="20058">PVFCCO</option>
                                                <option value="20059">TRƯỜNG SƠN JOC</option>
                                                <option value="49">CỬU LONG JOC (O)</option>
                                                <option value="20066">TALISMAN</option>
                                                <option value="20068">GAS SOUTH (KMN)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Niên hạn</label>
                                            <select name="period" class="form-select" id="periodSelect">
                                                <option value="10106" selected="selected">CL2023</option>
                                                <option value="10104">CL2022</option>
                                                <option value="10102">CL2021</option>
                                                <option value="10098">2019-2020</option>
                                                <option value="10097">2018-2019</option>
                                                <option value="10095">2017-2018</option>
                                                <option value="10093">2016-2017</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên hợp đồng</label>
                                            <select name="contract" class="form-select" id="contractSelect">
                                                <option value="10161" selected="selected">DH Cuu Long 2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-group ">
                                            <label for="">Thời gian hiệu lực từ:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control daterange" id="dateInput">
                                                <span class="input-group-text">
                                                    <i class="ti ti-calendar fs-5"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12 col-xl-3">
                                    <div class="table-responsive">
                                        <table class="table search-table align-middle text-nowrap user-table">
                                            <tbody>
                                                <tr>
                                                    <th class="main-th">Tổng số khách hàng khám sức khỏe:</th>
                                                    <td class="main-color">0</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Nhân viên:
                                                    </th>
                                                    <td class="main-color">1993</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Người thân:
                                                    </th>
                                                    <td class="main-color">0</td>
                                                </tr>
                                                <tr>
                                                    <th class="main-th">Tổng số lượt khám sức khỏe:</th>
                                                    <td class="main-color">1993</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Nhân viên:
                                                    </th>
                                                    <td class="main-color">1993</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Người thân:
                                                    </th>
                                                    <td class="main-color">0</td>
                                                </tr>
                                                <tr>
                                                    <th class="main-th">Tổng số khách hàng mắc bệnh:</th>
                                                    <td class="main-color">57</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Nhân viên:
                                                    </th>
                                                    <td class="main-color">57</td>
                                                </tr>
                                                <tr>
                                                    <th class="extra-th">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                        Người thân:
                                                    </th>
                                                    <td class="main-color">0</td>
                                                </tr>
                                                <tr>
                                                    <th class="main-th">Tổng khách hàng mắc bệnh mãn tính:</th>
                                                    <td class="main-color">0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-9">
                                    <div class="system-table table-responsive mb-3">
                                        <table id="simpletable"
                                            class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">STT</th>
                                                    <th>Tên bệnh mãn tính</th>
                                                    <th class="text-center">Nhân viên</th>
                                                    <th class="text-center">Người thân</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Bệnh cơ tim</td>
                                                    <td class="text-center">0</td>
                                                    <td class="text-center">0</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Bệnh của mao mạch</td>
                                                    <td class="text-center">0</td>
                                                    <td class="text-center">0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h5><span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-hospital" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 21l18 0"></path><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path><path d="M10 9l4 0"></path><path d="M12 7l0 4"></path></svg></span> Bệnh viện: </h5>
                                    <div class="system-table table-responsive">
                                        <table id="simpletable"
                                            class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">STT</th>
                                                    <th>Tên bệnh viện</th>
                                                    <th class="text-center">Nhân viên</th>
                                                    <th class="text-center">Người thân</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Bệnh viện An Sinh</td>
                                                    <td class="text-center">0</td>
                                                    <td class="text-center">0</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Bệnh viện đa khoa Đồng Nai</td>
                                                    <td class="text-center">0</td>
                                                    <td class="text-center">0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-export text-center"><button class="btn btn-primary" type="button">Xuất báo cáo</button></div>
                        </div>
                        <div class="tab-pane fade" id="revenue-tab6" role="tabpanel" aria-labelledby="revenue-tab" tabindex="0">
                            <form action="">
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên công ty</label>
                                            <select name="company" class="form-select" id="companySelect">
                                                <option value="20067" selected="selected">CỬU LONG JOC 2</option>
                                                <option value="20058">PVFCCO</option>
                                                <option value="20059">TRƯỜNG SƠN JOC</option>
                                                <option value="49">CỬU LONG JOC (O)</option>
                                                <option value="20066">TALISMAN</option>
                                                <option value="20068">GAS SOUTH (KMN)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Niên hạn</label>
                                            <select name="period" class="form-select" id="periodSelect">
                                                <option value="10106" selected="selected">CL2023</option>
                                                <option value="10104">CL2022</option>
                                                <option value="10102">CL2021</option>
                                                <option value="10098">2019-2020</option>
                                                <option value="10097">2018-2019</option>
                                                <option value="10095">2017-2018</option>
                                                <option value="10093">2016-2017</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên hợp đồng</label>
                                            <select name="contract" class="form-select" id="contractSelect">
                                                <option value="10161" selected="selected">DH Cuu Long 2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-group ">
                                            <label for="">Thời gian hiệu lực từ:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control daterange" id="dateInput">
                                                <span class="input-group-text">
                                                    <i class="ti ti-calendar fs-5"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="system-table table-responsive">
                                        <table id="simpletable"
                                            class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">STT</th>
                                                    <th>Số thẻ Bảo hiểm</th>
                                                    <th class="text-center">Họ tên</th>
                                                    <th>Giới hạn đầu kỳ</th>
                                                    <th>Chi trong kỳ</th>
                                                    <th>Giới hạn còn lại</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>15P054/13/000378</td>
                                                    <td>Bùi Ngọc Bích</td>
                                                    <td>21 503 680</td>
                                                    <td>0</td>
                                                    <td>21 503 680</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>15P054/13/000379</td>
                                                    <td>Nguyễn Văn Hoàng</td>
                                                    <td>47 680 000</td>
                                                    <td>5 600 000</td>
                                                    <td>42 080 000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-export text-center"><button class="btn btn-primary" type="button">Xuất báo cáo</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="/assets/js/datetimepicker/moment.min.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker-init.js"></script>
    <script src="/assets/js/datetimepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/datetimepicker/datepicker-init.js"></script>
    <script>
        function updateTable() {
            $('#simpletable').show();
        }
        $('#companySelect,#hospital ,#periodSelect, #contractSelect, #dateInput').on('change', updateTable);
    </script>

@endsection
