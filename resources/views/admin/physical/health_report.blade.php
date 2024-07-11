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
                                    <select class="form-select company-search mr-sm-2" id="companySelect"
                                        name="companySelect" style="width: calc(100% - 100px)">
                                        @foreach ($companyList as $company)
                                            <option value="{{ $company->id }}"
                                                {{ old('companySelect', $companyList[0]->id) == $company->id ? 'selected' : '' }}>
                                                {{ $company->company_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                                <div class="form-field">
                                    <label for="" class="mb-1">Niên hạn</label>
                                    <select class="form-select period-search mr-sm-2" id="periodSelect"
                                        name="periodSelect" style="width: calc(100% - 100px)">
                                        @foreach ($periodList as $period)
                                            <option value="{{ $period->id }}"
                                                {{ old('periodSelect', $periodList[0]->id) == $period->id ? 'selected' : '' }}>
                                                {{ $period->period_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                                <div class="form-field">
                                    <label for="" class="mb-1">Tên hợp đồng</label>
                                    <select class="form-select contract-search mr-sm-2" id="contractSelect"
                                        name="contractSelect" style="width: calc(100% - 100px)">
                                        @foreach ($contractList as $contract)
                                            <option value="{{ $contract->id }}"
                                                {{ old('contractSelect', $contractList[0]->id) == $contract->id ? 'selected' : '' }}>
                                                {{ $contract->contract_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-3">
                                <div class="form-group ">
                                    @include('common/input-time-range', [
                                        'time_range' => (isset($periodDetail->from_year) ? date('01/01/' . $periodDetail->from_year) : date('01/01/Y')) . ' - ' . date('d/m/Y')
                                    ])
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group form-button text-center">
                                    <button class="btn btn-primary" type="button">Xuất báo cáo</button>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-7">
                                <div class="form-group form-button">
                                    <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card card-body">
                    <div class="table-responsive">
                        <table class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3" style="table-layout: fixed;">
                            <thead class="header-item">
                                <tr>
                                    <th style="width: 50px;" class="text-center">
                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1" />
                                    </th>
                                    <th style="width: 50px;" class="text-center">STT</th>
                                    <th style="width: 170px;">Số thẻ Bảo hiểm</th>
                                    <th style="width: 130px;">Tên khách hàng</th>
                                    <th style="width: 100px;" class="text-center">Ngày sinh</th>
                                    <th style="width: 100px;" class="text-center">Giới tính</th>
                                    <th style="width: 100px;" class="text-center">Ngày khám</th>
                                    <th style="width: 170px;" class="text-center">Gói khám</th>
                                    <th style="width: 100px;" class="text-center">TT.HN</th>
                                    <th style="width: 100px;" class="text-center">Chiều cao</th>
                                    <th style="width: 100px;" class="text-center">Cân nặng</th>
                                    <th style="width: 100px;" class="text-center">Huyết áp</th>
                                    <th style="width: 100px;" class="text-center">Nhịp thở</th>
                                    <th style="width: 100px;" class="text-center">Vòng ngực</th>
                                    <th style="width: 100px;" class="text-center">BMI</th>
                                    <th style="width: 100px;" class="text-center">Mắc bệnh</th>
                                    <th class="text-center" style="width: 300px;">Tên bệnh</th>
                                    <th class="text-center" style="width: 300px;">Hướng giải quyết</th>
                                    <th style="width: 120px;" class="text-center">Loại sức khỏe</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($healthReportList as $key => $healthReport)
                                @php
                                    $status = '';
                                    if ($healthReport->single == 1) {
                                        $status = 'Độc thân';
                                    } elseif ($healthReport->married == 1) {
                                        $status = 'Đã kết hôn';
                                    } elseif ($healthReport->divorced == 1) {
                                        $status = 'Ly hôn';
                                    }
                                @endphp
                                <tr role="row" data-id="{{ $healthReport->id }}">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ $healthReport->card_number }}</td>
                                    <td>{{ $healthReport->full_name }}</td>
                                    <td class="text-center">
                                        {{ $healthReport->birth_year }}
                                    </td>
                                    <td class="text-center">{{ $healthReport->gender }}</td>
                                    <td class="text-center">{{ $healthReport->checkup_date }}</td>
                                    <td class="text-center">
                                        {{ $healthReport->type_name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $status }}
                                    </td>
                                    <td class="text-center">
                                        {{ $healthReport->height }}
                                    </td>
                                    <td class="text-center">
                                        {{ $healthReport->weight }}
                                    </td>

                                    <td class="text-center">
                                        {{ $healthReport->blood_pressure }}
                                    </td>
                                    <td class="text-center">
                                        {{ $healthReport->respiration_rate }}
                                    </td>
                                    <td class="text-center">
                                        {{ $healthReport->chest_circumference }}
                                    </td>
                                    <td class="text-center">
                                        {{ $healthReport->bmi }}
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" {{ $healthReport->disease_code == 1 ? 'checked' : '' }} disabled>
                                    </td>
                                    <td class="text-center" style="text-wrap: wrap">
                                        {{ $healthReport->disease_name }}
                                    </td>
                                    <td class="text-center" style="text-wrap: wrap">
                                        {{ $healthReport->solution_direction }}
                                    </td>
                                    <td class="text-center">
                                        {{ $healthReport->health_type }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {!! $healthReportList->onEachSide(1)->render('pagination::bootstrap-5') !!}

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
<script src="/js/pages/health-report.js"></script>
@endsection
