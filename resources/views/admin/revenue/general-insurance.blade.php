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
                            <a href="{{ route('revenue.generalInsurance')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active">
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
                            <a href="{{ route('revenue.reportByAccount')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo kết quả tài khoản khách hàng</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <form action="">
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input success" type="checkbox" id="success2-check" value="option1" checked="">
                                <label class="form-check-label" for="success2-check">Toàn bộ theo niên hạn</label>
                            </div>
                            <div class="row mb-2">
                                <div class="col-11">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-xl-3">
                                            @include('common/select-company', [
                                                'companyId' => isset($_GET['company']) ? $_GET['company'] : 0,
                                                'companyList' => $companyList,
                                            ])
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-3">
                                            @include('common/select-period', [
                                                'periodId' => isset($_GET['period']) ? $_GET['period'] : 0,
                                                'periodList' => $periodList,
                                            ])
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-3">
                                            @include('common/select-contract', [
                                                'contractId' => isset($_GET['contract']) ? $_GET['contract'] : 0,
                                                'contractList' => $contractList,
                                            ])
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-3">
                                            <div class="form-field">
                                                <label for="" class="mb-1">Thời gian hiệu lực từ:</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control daterange" id="dateInput" name="time_range" value="">
                                                    <span class="input-group-text">
                                                        <i class="ti ti-calendar fs-5"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 d-flex flex-column-reverse">
                                    <button class="btn btn-primary w-100" type="submit">Tìm kiếm</button>
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
                                                <td class="main-color">{{ isset($generalInsurance['account_holder']['total_accounts']) ? $generalInsurance['account_holder']['total_accounts'] : 0 }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tài khoản chủ hoạt động:
                                                </th>
                                                <td class="main-color">{{ isset($generalInsurance['account_holder']['total_not_locked_accounts']) ? $generalInsurance['account_holder']['total_not_locked_accounts'] : 0 }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tài khoản chủ bị khóa:
                                                </th>
                                                <td class="main-color">{{ isset($generalInsurance['account_holder']['total_locked_accounts']) ? $generalInsurance['account_holder']['total_locked_accounts'] : 0 }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="main-th">TS tài khoản thành viên gia đình:</th>
                                                <td class="main-color">{{ isset($generalInsurance['account_holder']['total_accounts']) ? $generalInsurance['account_holder']['total_accounts'] : 0 }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Thành viên gia đình hoạt động:
                                                </th>
                                                <td class="main-color">{{ isset($generalInsurance['account_holder']['total_not_locked_accounts']) ? $generalInsurance['account_holder']['total_not_locked_accounts'] : 0 }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Thành viên gia đình bị khóa:
                                                </th>
                                                <td class="main-color">{{ isset($generalInsurance['account_holder']['total_locked_accounts']) ? $generalInsurance['account_holder']['total_locked_accounts'] : 0 }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tổng giá trị giới hạn niên hạn trước chuyển sang:
                                                </th>
                                                <td class="main-color">{{ number_format(isset($generalInsurance['total_value_period_before']) ? $generalInsurance['total_value_period_before'] : 0) }}</td>
                                                <td>đồng</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tổng giá trị gói TK(plan):
                                                </th>
                                                <td class="main-color">{{ number_format(isset($generalInsurance['total_package']) ? $generalInsurance['total_package'] : 0) }}</td>
                                                <td>đồng</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tổng giá trị giới hạn đầu kỳ:
                                                </th>
                                                <td class="main-color">{{ number_format(isset($generalInsurance['total_initial_limit_value']) ? $generalInsurance['total_initial_limit_value'] : 0) }}</td>
                                                <td>đồng</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tổng số lượt chi bảo hiểm:
                                                </th>
                                                <td class="main-color">{{ isset($generalInsurance['number_of_insurance_payments']) ? $generalInsurance['number_of_insurance_payments'] : 0 }}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tổng giá trị chi bảo hiểm:
                                                </th>
                                                <td class="main-color">{{ number_format(isset($generalInsurance['total_insurance_payout']['total']) ? $generalInsurance['total_insurance_payout']['total'] : 0) }}</td>
                                                <td>đồng</td>
                                            </tr>
                                            <tr>
                                                <th class="main-th">Tổng tài khoản chi bảo hiểm:</th>
                                                <td class="main-color">1</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tài khoản chủ:
                                                </th>
                                                <td class="main-color">0</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
                                                    Tài khoản thành viên:
                                                </th>
                                                <td class="main-color">0</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg></span>
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
                                    <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
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
    <script src="/js/pages/revenue.js"></script>
    <script>
        function updateTable() {
            $('#simpletable').show();
        }
        $('#companySelect,#hospital ,#periodSelect, #contractSelect, #dateInput').on('change', updateTable);
    </script>

@endsection


