@extends('layouts.master')

@section('title', 'Báo cáo khám sức khỏe')
@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Báo cáo khám sức khỏe'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                                <div class="form-field">
                                    <label for="" class="mb-1">Tên công ty</label>
                                    <select class="form-select mr-sm-2" id="companySelect" name="company">
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
                            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                                <div class="form-field">
                                    <label for="" class="mb-1">Niên hạn</label>
                                    <select class="form-select mr-sm-2" id="periodSelect" name="period">
                                        <option value="10106">CL2023</option>
                                        <option value="10104">CL2022</option>
                                        <option value="10102">CL2021</option>
                                        <option value="10098">2019-2020</option>
                                        <option value="10097">2018-2019</option>
                                        <option value="10095">2017-2018</option>
                                        <option value="10093">2016-2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                                <div class="form-field">
                                    <label for="" class="mb-1">Tên hợp đồng</label>
                                    <select class="form-select mr-sm-2" id="contractSelect" name="contract">
                                        <option value="10161">DH Cuu Long 2023</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-3">
                                <div class="form-group ">
                                    <label class="mb-1" for="">Thời gian hiệu lực từ:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control daterange" id="dateInput">
                                        <span class="input-group-text">
                                            <i class="ti ti-calendar fs-5"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group form-button text-center">
                                    <button class="btn btn-primary" type="button">Xuất báo cáo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card card-body">
                    <div class="table-responsive">
                        <table class="table search-table align-middle text-nowrap">
                            <thead class="header-item">
                                <tr>
                                    <th class="text-center" style="width: 1%;">
                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1" />
                                    </th>
                                    <th class="text-center" style="width: 1%;">STT</th>
                                    <th>Số thẻ Bảo hiểm</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th class="text-center">Ngày khám</th>
                                    <th class="text-center">Gói khám</th>
                                    <th class="text-center">TT.HN</th>
                                    <th class="text-center">Chiều cao</th>
                                    <th class="text-center">Cân nặng</th>
                                    <th class="text-center">Huyết áp</th>
                                    <th class="text-center">Nhịp thở</th>
                                    <th class="text-center">Vòng ngực</th>
                                    <th class="text-center">BMI</th>
                                    <th class="text-center">Mắc bệnh</th>
                                    <th class="text-center">Tên bệnh</th>
                                    <th class="text-center">Hướng giải quyết</th>
                                    <th class="text-center">Loại sức khỏe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                                    <td class="text-center">1</td>
                                    <td>15P054/13/000016</td>
                                    <td>Châu Kim Anh</td>
                                    <td class="text-center">
                                        20/1/1997
                                    </td>
                                    <td class="text-center">Nữ</td>
                                    <td class="text-center">20/1/2023</td>
                                    <td class="text-center">
                                        Premium
                                    </td>
                                    <td class="text-center">
                                        HN
                                    </td>
                                    <td class="text-center">
                                        1m60
                                    </td>
                                    <td class="text-center">
                                        48kg
                                    </td>

                                    <td class="text-center">
                                        110 mg
                                    </td>
                                    <td class="text-center">
                                        69/p
                                    </td>
                                    <td class="text-center">
                                        100 cm
                                    </td>
                                    <td class="text-center">
                                        16.7
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" checked>
                                    </td>
                                    <td class="text-center">
                                        Ung thư
                                    </td>
                                    <td class="text-center">
                                        Xạ trị
                                    </td>
                                    <td class="text-center">
                                       Yếu
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
<script src="/assets/js/datetimepicker/moment.min.js"></script>
<script src="/assets/js/datetimepicker/daterangepicker.js"></script>
<script src="/assets/js/datetimepicker/daterangepicker-init.js"></script>
<script src="/assets/js/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="/assets/js/datetimepicker/datepicker-init.js"></script>
@endsection
