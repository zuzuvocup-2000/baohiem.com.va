@extends('layouts.master')

@section('title', 'Tổng hợp bảo hiểm')
@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Tổng hợp bảo hiểm'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row datatables">
            <div class="col-12">
                <div class="card card-body">
                    <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.generalInsurance')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
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
                            <a href="{{ route('revenue.reportByHealth')}}" class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active">
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
                            <div class="row mb-3">
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
                                                'attr' => [
                                                    'data-time-start' => isset($periodDetail->from_year)
                                                        ? date('01/01/' . $periodDetail->from_year)
                                                        : date('01/01/Y'),
                                                ],
                                            ])
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-3">
                                            @include('common/select-contract', [
                                                'contractId' => isset($_GET['contract']) ? $_GET['contract'] : 0,
                                                'contractList' => $contractList,
                                            ])
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-xl-3">
                                            @include('common/input-time-range', [
                                                'time_range' => (isset($periodDetail->from_year) ? date('01/01/' . $periodDetail->from_year) : date('01/01/Y')) . ' - ' . date('d/m/Y')
                                            ])
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 d-flex flex-column-reverse">
                                    <button class="btn btn-primary w-100" type="submit">Tìm kiếm</button>
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
                                                <td class="main-color">{{ $healthReport['total_checkup'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                    Nhân viên:
                                                </th>
                                                <td class="main-color">{{ $healthReport['total_employee_checkup'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                    Người thân:
                                                </th>
                                                <td class="main-color">{{ $healthReport['total_employee_relative_checkup'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="main-th">Tổng số lượt khám sức khỏe:</th>
                                                <td class="main-color">{{ $healthReport['total_checkup'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                    Nhân viên:
                                                </th>
                                                <td class="main-color">{{ $healthReport['total_employee_checkup'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                    Người thân:
                                                </th>
                                                <td class="main-color">{{ $healthReport['total_employee_relative_checkup'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="main-th">Tổng số khách hàng mắc bệnh:</th>
                                                <td class="main-color">{{ $healthReport['total_disease'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                    Nhân viên:
                                                </th>
                                                <td class="main-color">{{ $healthReport['total_employee_disease'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="extra-th">
                                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path></svg></span>
                                                    Người thân:
                                                </th>
                                                <td class="main-color">{{ $healthReport['total_employee_relative_disease'] }}</td>
                                            </tr>
                                            <tr>
                                                <th class="main-th">Tổng khách hàng mắc bệnh mãn tính:</th>
                                                <td class="main-color">{{ $healthReport['total_number_of_chronic_diseases'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                                <div class="system-table table-responsive mb-3">
                                    <table id="tableIdc10"
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
                                            @foreach ($idc10ChronicDiseaseList as $key => $value)
                                            <tr>
                                                <td class="text-center">{{ ++$key }}</td>
                                                <td>{{ $value['icd10_name'] }}</td>
                                                <td class="text-center">{{ (int)$value['data']->employee_disease }}</td>
                                                <td class="text-center">{{ (int)$value['data']->employee_relative_disease }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <h5><span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-hospital" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 21l18 0"></path><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path><path d="M10 9l4 0"></path><path d="M12 7l0 4"></path></svg></span> Bệnh viện: </h5>
                                <div class="system-table table-responsive">
                                    <table id="tableHospital"
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
                                            @foreach ($hospitalHealthCheck as $key => $value)
                                            <tr>
                                                <td class="text-center">{{ ++$key }}</td>
                                                <td>{{ $value['hospital_name'] }}</td>
                                                <td class="text-center">{{ (int)$value['data']->employee_disease }}</td>
                                                <td class="text-center">{{ (int)$value['data']->employee_relative_disease }}</td>
                                            </tr>
                                            @endforeach
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
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/js/pages/revenue.js"></script>
    <script>
        function updateTable() {
            $('#simpletable').show();
        }
        $('#companySelect,#hospital ,#periodSelect, #contractSelect, #dateInput').on('change', updateTable);
    </script>

@endsection


