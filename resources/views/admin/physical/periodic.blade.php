@extends('layouts.master')

@section('title', 'Khám sức khỏe định kỳ')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Khám sức khỏe định kỳ'])
    <div class="widget-content searchable-container list periodic">
        <div class="card card-body">
            <h5>Cập nhật tài khoản khách hàng</h5>
            <form action="" class="form-contact">
                <div class="row mb-3">
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
                        <div class="form-field">
                            <label for="" class="mb-1">Tìm kiếm</label>
                            <input type="search" name="keyword" class="form-control form-search w-100" value=""
                                placeholder="Tìm kiếm...">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-2 col-md-6 col-xl-3 mb-3">
                        <div class="btn-input" style="text-align: right;">
                            <button type="submit" class="btn btn-primary w-100" name="submit" value="search">Tìm
                                kiếm</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                        <div class="btn-input" style="text-align: right;">
                            <button type="submit" class="btn btn-warning w-100" name="submit" value="load">Load danh
                                sách</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="system-table table-responsive">
                <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 1%;">STT</th>
                            <th>Số thẻ Bảo hiểm</th>
                            <th>Tên khách hàng</th>
                            <th class="text-center">Giới tính</th>
                            <th class="text-center">Ngày sinh</th>
                            <th>Tên gói khám</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="">
                            <td>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#newPeriodic">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-circle-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                            <path d="M9 12h6"></path>
                                            <path d="M12 9v6"></path>
                                        </svg></span>
                                </button>
                            </td>
                        </tr>
                        @foreach ($physicalList as $key => $physical)
                            <tr data-id="{{ $physical->id }}">
                                <td class="text-center">
                                    <input type="checkbox" class="toggleCheckbox custom-control-input" id="user-"
                                        name="id[]" value="39" />
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
                                            <button class="btn btn-success me-1">
                                                <span class="icon-item-icon">
                                                    <img src="{{ asset('/img-system/system/edit_white.svg') }}">
                                                </span>
                                            </button>
                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#newPeriodic">
                                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-circle-plus">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                                        <path d="M9 12h6"></path>
                                                        <path d="M12 9v6"></path>
                                                    </svg></span>
                                            </button>
                                        </div>
                                    </h6>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('admin.physical.model_physical')

    </div>
@endsection
@section('script')
    <script src="/js/pages/periodic.js"></script>
@endsection
