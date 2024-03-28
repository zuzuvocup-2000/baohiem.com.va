@extends('layouts.master')

@section('title', 'Tổng hợp bảo hiểm')
@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Tổng hợp bảo hiểm'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.generalInsurance')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" >
                                <span class="d-none d-md-block">Tổng hợp bảo hiểm</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.detailReport')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo chi tiết chi bảo hiểm sức khỏe</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.reportByHospital')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo chi theo bệnh viện</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.reportByContent')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo chi theo nội dung</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.reportByHealth')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo tổng hợp sức khỏe</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.reportByAccount')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active">
                                <span class="d-none d-md-block">Báo cáo kết quả tài khoản khách hàng</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
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


