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
                            <a class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" href="{{ route('diary.employee') }}">
                                <span class="icon-item-icon me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                                </span>
                                <span class="d-none d-md-block">Nhân viên</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" href="{{ route('diary.hospital') }}" >
                                <span class="icon-item-icon me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-hospital" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 21l18 0"></path><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path><path d="M10 9l4 0"></path><path d="M12 7l0 4"></path></svg></span>
                                <span class="d-none d-md-block">Bệnh viện</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active" href="{{ route('diary.customer') }}">
                                <span class="icon-item-icon me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h.5"></path><path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z"></path></svg></span>
                                <span class="d-none d-md-block">Khách hàng</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="diary-tab3" role="tabpanel" aria-labelledby="diary-ta3" tabindex="0">
                            <form action="" class="form-contact" method="POST" enctype="multipart/form-data>">
                                <div class="row mb-3">
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
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
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
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
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
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
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label d-inline-block" for="">Ngày:</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" value="2018-05-13" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label d-inline-block" style="width: 100px;" for="companySelect">Toàn bộ</label>
                                            <select class="form-select company-search mr-sm-2" id="companySelect" name="companySelect" style="width: calc(100% - 100px);">
                                                <option value="20067" selected="">Toàn bộ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4" style="display: flex; flex-direction: column-reverse; width: 125px;">
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
                                        <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th style="width: 1%;">
                                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1" />
                                                    </th>
                                                    <th class="text-center">STT</th>
                                                    <th>Tên nhân viên</th>
                                                    <th>Thời gian thực hiện</th>
                                                    <th class="text-center">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($customerDiaryList as $key => $customerDiary)
                                                <tr data-id="{{ $customerDiary->id }}">
                                                    <td>
                                                        <input type="checkbox" class="toggleCheckbox custom-control-input" id="user-" name="id[]" value="{{ $customerDiary->id }}" />
                                                    </td>
                                                    <td class="text-center">{{ ++$key }}</td>
                                                    <td>{{ $customerDiary->full_name }}</td>
                                                    <td>{{ $customerDiary->log_date }}</td>
                                                    <td class="text-center">{{ $customerDiary->action }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {!! $customerDiaryList->onEachSide(1)->render('pagination::bootstrap-5') !!}
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
