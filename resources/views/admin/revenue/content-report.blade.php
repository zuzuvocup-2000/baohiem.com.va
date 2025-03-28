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
                    <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0"
                        id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.generalInsurance') }}"
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Tổng hợp bảo hiểm</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.detailReport') }}"
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo chi tiết chi bảo hiểm sức khỏe</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.reportByHospital') }}"
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo chi theo bệnh viện</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.reportByContent') }}"
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active">
                                <span class="d-none d-md-block">Báo cáo chi theo nội dung</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.reportByHealth') }}"
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo tổng hợp sức khỏe</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('revenue.reportByAccount') }}"
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                <span class="d-none d-md-block">Báo cáo kết quả tài khoản khách hàng</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <form action="" method="get">
                            <div class="row mb-2">
                                <div class="col-sm-11">
                                    @include('common/input-time-range', [
                                        'time_range' => isset($_GET['time_range'])
                                            ? $_GET['time_range']
                                            : date('01/01/Y') . ' - ' . date('d/m/Y'),
                                    ])
                                </div>
                                <div class="col-1 d-flex flex-column-reverse">
                                    <button class="btn btn-primary w-100" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
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
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach ($paymentTypeList as $key => $value)
                                                @php
                                                    $total += (int) $value['data']->total;
                                                @endphp
                                                <tr>
                                                    <td class="text-center">{{ ++$key }}</td>
                                                    <td>{{ $value['payment_type_name'] }}</td>
                                                    <td class="text-center">{{ $value['data']->count }}</td>
                                                    <td>{{ number_format($value['data']->total) }} <span>đ</span></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-1 text-right">
                                    <div class="text-bold" style="color: var(--bs-heading-color);font-size: 18px">
                                        Tổng tiền chi: {{ number_format($total) }} đ
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
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
                                            @foreach ($paymentTypeListAnother as $key => $value)
                                                <tr>
                                                    <td class="text-center">{{ ++$key }}</td>
                                                    <td>{{ $value->note }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="btn-export text-center"><button class="btn btn-primary" type="button">Xuất báo
                                cáo</button></div>
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
