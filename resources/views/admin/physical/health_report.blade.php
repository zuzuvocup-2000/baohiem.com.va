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
                                @include('common/select-company', [
                                    'companyId' => isset($_GET['company']) ? $_GET['company'] : 0,
                                    'companyList' => $companyList,
                                ])
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                                @include('common/select-period', [
                                    'periodId' => isset($_GET['period']) ? $_GET['period'] : 0,
                                    'periodList' => $periodList,
                                ])
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                                @include('common/select-contract', [
                                    'contractId' => isset($_GET['contract']) ? $_GET['contract'] : 0,
                                    'contractList' => $contractList,
                                ])
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                                @include('common/input-time-range', [
                                    'time_range' => date('01/01/Y') . ' - ' . date('d/m/Y'),
                                ])
                            </div>
                            <div class="col-xs-12 col-sm-12 col-12 mb-3">
                                <div class="d-sm-flex justify-content-start">
                                    <div class="form-group form-button me-2">
                                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                                    </div>
                                    <div class="form-group form-button">
                                        <button class="btn btn-primary" type="button">Xuất báo cáo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card card-body">
                    <div class="table-responsive">
                        <table class="table system-table table-bordered customize-table mb-0 align-middle mb-3">
                            <thead class="header-item">
                                <tr class="text-nowrap">
                                    <th style="width: 50px;" class="text-center">
                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1" />
                                    </th>
                                    <th style="width: 50px;" class="text-center">STT</th>
                                    <th style="width: 170px;">Số thẻ Bảo hiểm</th>
                                    <th style="width: 130px;">Tên khách hàng</th>
                                    <th style="width: 100px;" class="text-center">Ngày sinh</th>
                                    <th style="width: 100px;" class="text-center">Giới tính</th>
                                    <th style="width: 100px;" class="text-center">Ngày khám</th>
                                    <th style="width: 100px;" class="text-center">Gói khám</th>
                                    <th style="width: 100px;" class="text-center">TT.HN</th>
                                    <th style="width: 100px;" class="text-center">Chiều cao</th>
                                    <th style="width: 100px;" class="text-center">Cân nặng</th>
                                    <th style="width: 100px;" class="text-center">Huyết áp</th>
                                    <th style="width: 100px;" class="text-center">Nhịp thở</th>
                                    <th style="width: 100px;" class="text-center">Vòng ngực</th>
                                    <th style="width: 100px;" class="text-center">BMI</th>
                                    <th style="width: 100px;" class="text-center">Mắc bệnh</th>
                                    <th style="width: 300px;" class="text-center">Tên bệnh</th>
                                    <th style="width: 300px;" class="text-center">Hướng giải quyết</th>
                                    <th style="width: 120px;" class="text-center">Loại sức khỏe</th>
                                    @foreach ($healthReportList['services_list'] as $service_item)
                                        <th class="text-center">{{ $service_item['service_name'] }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($healthReportList['detailed_examination_list']))
                                    @foreach ($healthReportList['detailed_examination_list'] as $key => $detailed_examination_item)
                                        @php
                                            $status = '';
                                            if ($detailed_examination_item->single == 1) {
                                                $status = 'Độc thân';
                                            } elseif ($detailed_examination_item->married == 1) {
                                                $status = 'Đã kết hôn';
                                            } elseif ($detailed_examination_item->divorced == 1) {
                                                $status = 'Ly hôn';
                                            }
                                        @endphp
                                        <tr role="row" data-id="{{ $detailed_examination_item->id }}">
                                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                                            <td class="text-center">{{ ++$key }}</td>
                                            <td>{{ $detailed_examination_item->card_number }}</td>
                                            <td>{{ $detailed_examination_item->full_name }}</td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->birth_year }}
                                            </td>
                                            <td class="text-center">{{ $detailed_examination_item->gender }}</td>
                                            <td class="text-center">{{ $detailed_examination_item->checkup_date }}</td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->type_name }}
                                            </td>
                                            <td class="text-center">
                                                {{ $status }}
                                            </td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->height }}
                                            </td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->weight }}
                                            </td>

                                            <td class="text-center">
                                                {{ $detailed_examination_item->blood_pressure }}
                                            </td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->respiration_rate }}
                                            </td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->chest_circumference }}
                                            </td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->bmi }}
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox"
                                                    {{ $detailed_examination_item->disease_code == 1 ? 'checked' : '' }}
                                                    disabled>
                                            </td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->disease_name }}
                                            </td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->solution_direction }}
                                            </td>
                                            <td class="text-center">
                                                {{ $detailed_examination_item->health_type }}
                                            </td>
                                            @foreach ($healthReportList['services_list'] as $service_item)
                                                <td class="text-center">
                                                    {{ $detailed_examination_item[$service_item['service_type'] . '_' . $service_item['service_code']] }}
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                @if (!empty($healthReportList['detailed_examination_list']))
                    {!! $healthReportList['detailed_examination_list']->onEachSide(1)->render('pagination::bootstrap-5') !!}
                @endif
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
