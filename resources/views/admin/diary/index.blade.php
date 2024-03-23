@extends('layouts.master')

@section('title', 'Nhật ký thao tác chứng từ')
@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Nhật ký thao tác chứng từ'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active" id="diary-tab" data-bs-toggle="pill" data-bs-target="#diary-tab1" type="button" role="tab" aria-controls="pills-diary" aria-selected="true">
                                <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
                                <span class="d-none d-md-block">Nhân viên</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="diary-tab" data-bs-toggle="pill" data-bs-target="#diary-tab2" type="button" role="tab" aria-controls="pills-diary" aria-selected="false" tabindex="-1">
                                <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-hospital" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 21l18 0"></path><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path><path d="M10 9l4 0"></path><path d="M12 7l0 4"></path></svg></span>
                                <span class="d-none d-md-block">Bệnh viện</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="diary-tab" data-bs-toggle="pill" data-bs-target="#diary-tab3" type="button" role="tab" aria-controls="pills-diary" aria-selected="false" tabindex="-1">
                                <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h.5"></path><path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z"></path></svg></span>
                                <span class="d-none d-md-block">Khách hàng</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="diary-tab1" role="tabpanel" aria-labelledby="diary-tab1" tabindex="0">
                            <form action="">
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên bệnh viện</label>
                                            <select name="company" class="form-select" id="companySelect">
                                                <option value="20067" selected="selected">BV VN Cu Ba</option>
                                                <option value="20058">BV Hồng Ngọc</option>
                                                <option value="20059">BV Đức Giang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-group ">
                                            <label for="">Ngày:</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" value="2018-05-13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên tài khoản</label>
                                            <select name="contract" class="form-select" id="contractSelect">
                                                <option value="10161" selected="selected">hviet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3" style="display: flex; flex-direction: column-reverse;width: 125px;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger"> 
                                                <span class="icon-item-icon">
                                                    <img src="{{ asset('/img-system/system/trash_white.svg') }}" alt="" />
                                                </span>
                                            </button>
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
                                                    <th style="width: 1%;">
                                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                                                    </th>
                                                    <th style="width: 1%;" class="text-center">STT</th>
                                                    <th>Tên nhân viên</th>
                                                    <th class="text-center">Tên user</th>
                                                    <th class="text-center">Thời gian thực hiện</th>
                                                    <th class="text-center">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($activities as $key => $activitie)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="toggleCheckbox custom-control-input" id="user-" name="id[]" value="42">
                                                    </td>
                                                    <td class="text-center">{{ ++$key }}</td>
                                                    <td>{{ $activitie->employee_name }}</td>
                                                    <td class="text-center">{{ $activitie->username }}</td>
                                                    <td class="text-center">{{ $activitie->date_log }}</td>
                                                    <td class="text-center">
                                                        {{ $activitie->action }}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {!! $activities->onEachSide(1)->render('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                        </div>
                         <div class="tab-pane fade" id="diary-tab2" role="tabpanel" aria-labelledby="diary-tab2" tabindex="0">
                            <form action="">
                                <div class="row mb-2">
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Phòng ban</label>
                                            <select name="company" class="form-select" id="companySelect">
                                                <option value="20067" selected="selected">Phòng bảo vệ</option>
                                                <option value="20058">Phòng IT</option>
                                                <option value="20059">Phòng kế toán</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-group ">
                                            <label for="">Ngày:</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" value="2018-05-13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3">
                                        <div class="form-field">
                                            <label for="">Tên tài khoản</label>
                                            <select name="contract" class="form-select" id="contractSelect">
                                                <option value="10161" selected="selected">hviet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xl-3" style="display: flex; flex-direction: column-reverse;width: 125px;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Xóa dữ liệu</button>
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
                                                    <th style="width: 1%;">
                                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                                                    </th>
                                                    <th style="width: 1%;" class="text-center">STT</th>
                                                    <th>Tên nhân viên</th>
                                                    <th class="text-center">Tên user</th>
                                                    <th class="text-center">Thời gian thực hiện</th>
                                                    <th class="text-center">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="toggleCheckbox custom-control-input" id="user-" name="id[]" value="42">
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td>PviAdmin</td>
                                                    <td class="text-center">hviet</td>
                                                    <td class="text-center">8/3/2022 00:52:23</td>
                                                    <td class="text-center">
                                                        <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path></svg></span>
                                                         Đăng nhập thành công
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="toggleCheckbox custom-control-input" id="user-" name="id[]" value="42">
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td>PviAdmin</td>
                                                    <td class="text-center">hviet</td>
                                                    <td class="text-center">8/3/2022 00:52:23</td>
                                                    <td class="text-center">
                                                        <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-direction-sign-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M18.73 14.724l1.949 -1.95a1.095 1.095 0 0 0 0 -1.548l-7.905 -7.905a1.095 1.095 0 0 0 -1.548 0l-1.95 1.95m-2.01 2.01l-3.945 3.945a1.095 1.095 0 0 0 0 1.548l7.905 7.905c.427 .428 1.12 .428 1.548 0l3.95 -3.95"></path><path d="M8 12h4"></path><path d="M13.748 13.752l-1.748 1.748"></path><path d="M3 3l18 18"></path></svg></span>
                                                         Đăng nhập thất bại
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="toggleCheckbox custom-control-input" id="user-" name="id[]" value="42">
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td>PviAdmin</td>
                                                    <td class="text-center">hviet</td>
                                                    <td class="text-center">8/3/2022 00:52:23</td>
                                                    <td class="text-center">
                                                        <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-http-delete" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 8v8h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-2z"></path><path d="M14 8h-4v8h4"></path><path d="M10 12h2.5"></path><path d="M17 8v8h4"></path></svg></span>
                                                         Xóa thao tác user thành công
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="diary-tab3" role="tabpanel" aria-labelledby="diary-ta3" tabindex="0">
                            <form action="" class="form-contact" method="POST" enctype="multipart/form-data>">
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group ">
                                            <label class="col-form-label d-inline-block" style="width: 100px" for="companySelect">Tên công ty</label>
                                            <select class="form-select company-search mr-sm-2" id="companySelect" name="companySelect" style="width: calc(100% - 100px);">
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
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group ">
                                            <label class="col-form-label d-inline-block" style="width: 100px" for="periodSelect">Niên hạn</label>
                                            <select class="form-select period-search mr-sm-2" id="periodSelect" name="periodSelect" style="width: calc(100% - 100px);">
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
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label d-inline-block" style="width: 100px" for="companySelect">Hợpđồng</label>
                                            <select class="form-select contract-search mr-sm-2" id="contractSelect" name="contractSelect" style="width: calc(100% - 100px)">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group ">
                                            <label class="col-form-label d-inline-block" for="">Ngày:</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" value="2018-05-13">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label d-inline-block" style="width: 100px" for="companySelect">Toàn bộ</label>
                                            <select class="form-select company-search mr-sm-2" id="companySelect" name="companySelect" style="width: calc(100% - 100px)">
                                                 <option value="20067" selected="">Toàn bộ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4" style="display: flex; flex-direction: column-reverse;width: 125px;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Xóa dữ liệu</button>
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
                                                    <th style="width: 1%;">
                                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                                                    </th>
                                                    <th class="text-center">STT</th>
                                                    <th>Tên nhân  viên</th>
                                                    <th>Thời gian thực hiện</th>
                                                    <th class="text-center">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="toggleCheckbox custom-control-input" id="user-" name="id[]" value="42">
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td>Triệu Ngọc Hòa</td>
                                                    <td>30/4/1975</td>
                                                    <td class="text-center">Khám sức khỏe</td>
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
