@extends('layouts.master')

@section('title', 'Danh sách khám sức khỏe')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Danh sách khám sức khỏe'])
    <div class="physical-page font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="physical-container">
                    <div class="card card-body">
                        <div class="mb-3">
                            <div>
                                <h5 class="mb-2 fs-5">Danh sách khám sức khỏe</h5>
                            </div>
                            <p class="card-subtitle">
                                Các thắc mắc yêu cầu hệ thống quản lý thông tin tài khoản bảo hiểm và sức khỏe xin vui lòng gửi cho quản trị viên hệ thống.
                            </p>
                        </div>
                        <form action="" class="form-contact" >
                            <div class="row mb-3">
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-group d-flex align-items-center">
                                        <label class="col-form-label d-inline-block" style="width: 100px" for="companySelect">Tên
                                            công ty</label>
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
                                    <div class="form-group d-flex align-items-center">
                                        <label class="col-form-label d-inline-block" style="width: 100px" for="periodSelect">Niên
                                            hạn</label>
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
                                    <div class="form-group d-flex align-items-center">
                                        <label class="col-form-label d-inline-block" style="width: 100px" for="companySelect">Hợp
                                            đồng</label>
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
                                    @include('common/input-time-range', [
                                        'time_range' => (isset($periodDetail->from_year) ? date('01/01/' . $periodDetail->from_year) : date('01/01/Y')) . ' - ' . date('d/m/Y')
                                    ])
                                </div>
                                <div class="col-xs-12 col-md-1">
                                    <div class="form-group form-checkbox">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input success" type="checkbox" id="success2-check" value="option1" checked="">
                                            <label class="form-check-label" for="success2-check">Ngày nhập</label>
                                        </div>
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
                        <div class="system-table table-responsive">
                            <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="text-center">
                                            <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1" />
                                        </th>
                                        <th>
                                            <h6 class="text-center fs-4 fw-semibold mb-0">STT</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Số thẻ BH</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Tên khách hàng</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Giới tính</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Năm sinh</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Ngày khám</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Gói khám</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Tên bệnh viện</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($physicalList as $key => $physical)
                                    <tr data-id="{{ $physical->id }}">
                                        <td class="text-center">
                                            <input type="checkbox" class="toggleCheckbox custom-control-input" id="user-" name="id[]" value="39" />
                                        </td>
                                        <td>
                                            <p class="mb-0 text-center fw-normal fs-4">{{ ++$key }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 fw-normal fs-4 text-center">{{ $physical->card_number }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 fw-normal fs-4 text-center">{{ $physical->full_name }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 fw-normal fs-4 text-center">{{ $physical->gender }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 fw-normal fs-4 text-center">{{ $physical->birth_year }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 fw-normal fs-4 text-center">{{ $physical->checkup_date }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 fw-normal fs-4 text-center">{{ $physical->package_name }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 fw-normal fs-4 text-center">{{ $physical->hospital_name }}</p>
                                        </td>
                                        <td>
                                            <h6 class="fs-4 fw-semibold mb-0">
                                                <div class="btn-group d-flex">
                                                    <a href="" class="btn btn-success me-1">
                                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg></span>
                                                    </a>
                                                </div>
                                            </h6>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $physicalList->onEachSide(1)->render('pagination::bootstrap-5') !!}
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
