@extends('layouts.master')

@section('title', 'Khám sức khỏe định kỳ')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Khám sức khỏe định kỳ'])
    <div class="widget-content searchable-container list periodic">
        <div class="card card-body">
            <h5>Cập nhật tài khoản khách hàng</h5>
            <form action="">
                <div class="row mb-3">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="companySelect">Tên công ty</label>
                            <select class="form-select company-search mr-sm-2" id="companySelect" name="companySelect"
                                style="width: calc(100% - 100px);">
                                @foreach ($companyList as $company)
                                    <option value="{{ $company->id }}"
                                        {{ old('companySelect', $companyList[0]->id) == $company->id ? 'selected' : '' }}>
                                        {{ $company->company_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="companySelect">Hợp đồng</label>
                            <select class="form-select contract-search mr-sm-2" id="contractSelect" name="contractSelect"
                                style="width: calc(100% - 100px);">
                                @foreach ($contractList as $contract)
                                    <option value="{{ $contract->id }}"
                                        {{ old('contractSelect', $contractList[0]->id) == $contract->id ? 'selected' : '' }}>
                                        {{ $contract->contract_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-2">
                        <button type="button" class="btn btn-primary w-100">Tìm kiếm</button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                            <select class="form-select period-search mr-sm-2" id="periodSelect" name="periodSelect"
                                style="width: calc(100% - 100px);">
                                @foreach ($periodList as $period)
                                    <option value="{{ $period->id }}"
                                        {{ old('periodSelect', $periodList[0]->id) == $period->id ? 'selected' : '' }}>
                                        {{ $period->period_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center form-search-absolute">
                            <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                            <input type="search" name="keyword" class="form-control form-search" value=""
                                placeholder="Tìm kiếm..." style="width: calc(100% - 100px);">
                            <button class="btn-primary btn btn-search">Tìm kiếm</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-xl-4">
                        <div class="btn-input" style="text-align: right;">
                            <button type="button" class="btn btn-warning w-100">Load danh sách</button>
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
        <div id="newPeriodic" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-primary text-white">
                        <h4 class="modal-title" id="success-header-modalLabel">
                            Khám sức khỏe định kỳ - Số thẻ BH: 5P807/19/000378 - Tên khách hàng: Bùi Ngọc Bích
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="physical-container">
                            <form action="" class="form-physical-detail" method="POST"
                                enctype="multipart/form-data>">
                                @csrf
                                <div class="card card-body note-has-grid">
                                    <div class="single-note-item mb-3">
                                        <span class="side-stick"></span>
                                        <h3>Thông tin bệnh nhân</h3>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-xs-12 col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="d-inline-block" for="companySelect">
                                                    <h5>Ngày khám:</h5>
                                                </label>
                                                <select class="form-select company-search mr-sm-2" id="companySelect"
                                                    name="companySelect">
                                                    <option value="20067" selected="">
                                                        1/12/2022
                                                    </option>
                                                    <option value="20058">
                                                        1/11/2022
                                                    </option>
                                                    <option value="20059">
                                                        1/11/2023
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="d-inline-block" for="companySelect">
                                                    <h5>Tên bệnh viện:</h5>
                                                </label>
                                                <select class="form-select company-search mr-sm-2" id="companySelect"
                                                    name="companySelect">
                                                    <option value="20067" selected="">
                                                        Bệnh viện Hoàn Mỹ Sài Gòn
                                                    </option>
                                                    <option value="20058">
                                                        Bệnh viện Việt Nam Cu Ba
                                                    </option>
                                                    <option value="20059">
                                                        Bệnh viện Việt Đức
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group d-flex align-items-center">
                                                <h5 class="me-3 mb-0">Tình trạng gia đình:</h5>
                                                <div class="col-sm form-radio">
                                                    <div class="d-flex">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="exampleRadios" id="info1" value="option1"
                                                                checked="" />
                                                            <label class="form-check-label" for="info1">Độc
                                                                thân</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="exampleRadios" id="info2" value="option2" />
                                                            <label class="form-check-label" for="info2">Kết hôn</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="exampleRadios" id="info3" value="option3" />
                                                            <label class="form-check-label" for="info3">Ly dị</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <h5>Nhân viên, package 2, oneshore</h5>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Nhóm máu:</h5>
                                                </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="NHOMMAU" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Rhesus:</h5>
                                                </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="RHESUS" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Chiều cao:</h5>
                                                </label>
                                                <div class="col-sm form-search-absolute">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="CHIEUCAO" />
                                                    <span class="unit">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Cân nặng:</h5>
                                                </label>
                                                <div class="col-sm form-search-absolute">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="CANNANG" />
                                                    <span class="unit">kg</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Chỉ số BMI:</h5>
                                                </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="BMI" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Vòng ngực:</h5>
                                                </label>
                                                <div class="col-sm form-search-absolute">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="VONGNGUC" />
                                                    <span class="unit">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Mạch:</h5>
                                                </label>
                                                <div class="col-sm form-search-absolute">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="MACH" />
                                                    <span class="unit">lần/phút</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Huyết áp:</h5>
                                                </label>
                                                <div class="col-sm form-search-absolute">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="HUYETAP" />
                                                    <span class="unit">mmHg</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Nhiệt độ:</h5>
                                                </label>
                                                <div class="col-sm form-search-absolute">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="NHIETDO" />
                                                    <span class="unit">độ C</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-2plus">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Nhịp thở:</h5>
                                                </label>
                                                <div class="col-sm form-search-absolute">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="NHIPTHO" />
                                                    <span class="unit">lần/phút</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-body note-has-grid">
                                    <div class="single-note-item mb-3">
                                        <span class="side-stick"></span>
                                        <h3>Hồ sơ bệnh án</h3>
                                    </div>
                                    <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0"
                                        id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active"
                                                id="pills-sick-tab" data-bs-toggle="pill" data-bs-target="#sick"
                                                type="button" role="tab" aria-controls="sick" aria-selected="true">
                                                <span class="d-none d-md-block">Tiền sử bản thân</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick1"
                                                type="button" role="tab" aria-controls="sick1"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">1. Tuần hoàn</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick2"
                                                type="button" role="tab" aria-controls="sick2"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">2. Hô hấp</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick3"
                                                type="button" role="tab" aria-controls="sick3"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">3. Tiêu hóa</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick4"
                                                type="button" role="tab" aria-controls="sick4"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">4. Thận - Tiết niệu sinh dục</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick5"
                                                type="button" role="tab" aria-controls="sick5"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">5. Thần kinh</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick6"
                                                type="button" role="tab" aria-controls="sick6"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">6. Tâm thần</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick7"
                                                type="button" role="tab" aria-controls="sick7"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">7. Hệ vận động</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick8"
                                                type="button" role="tab" aria-controls="sick8"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">8. Nội tiết</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick9"
                                                type="button" role="tab" aria-controls="sick9"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">9. Da liễu</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick10"
                                                type="button" role="tab" aria-controls="sick10"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">10. Phụ sản</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick11"
                                                type="button" role="tab" aria-controls="sick11"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">11. Mắt</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick12"
                                                type="button" role="tab" aria-controls="sick12"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">12. Tai mũi họng</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="sick-tab" data-bs-toggle="pill" data-bs-target="#sick13"
                                                type="button" role="tab" aria-controls="sick13"
                                                aria-selected="false" tabindex="-1">
                                                <span class="d-none d-md-block">13. Răng hàm mặt</span>
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="sick" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="table-responsive">
                                                <table id="file"
                                                    class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                                                    <thead class="text-dark fs-4">
                                                        <tr role="row">
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Tên bệnh</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Phát hiện năm
                                                                </h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Bệnh nghề
                                                                    nghiệp</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Phát hiện năm
                                                                </h6>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row">
                                                            <td>
                                                                <div class="btn-group d-flex">
                                                                    <button
                                                                        class="btn btn-info me-1 btn-create-company js-btn-loading">
                                                                        <div class="default ">
                                                                            <span class="icon-item-icon">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="icon icon-tabler icon-tabler-discount-check-filled"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" stroke-width="2"
                                                                                    stroke="currentColor" fill="none"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none"></path>
                                                                                    <path
                                                                                        d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                                                                        stroke-width="0"
                                                                                        fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="loading-dot d-none">
                                                                            <ul class="formLoading">
                                                                                <li></li>
                                                                                <li></li>
                                                                                <li></li>
                                                                            </ul>
                                                                        </div>
                                                                    </button>
                                                                </div>

                                                                <style>
                                                                    @keyframes preload {
                                                                        0% {
                                                                            background: #fff;
                                                                            opacity: 1
                                                                        }

                                                                        50% {
                                                                            background: #fff;
                                                                            opacity: 0.5
                                                                        }

                                                                        100% {
                                                                            background: #fff;
                                                                            opacity: 1
                                                                        }
                                                                    }

                                                                    .formLoading {
                                                                        display: flex;
                                                                        flex-wrap: nowrap;
                                                                        height: 14px;
                                                                        align-items: center;
                                                                        margin: 0.25rem 0;
                                                                        width: 100%;
                                                                        padding: 0;
                                                                    }

                                                                    .formLoading li {
                                                                        background: #fff;
                                                                        opacity: 0.5;
                                                                        display: block;
                                                                        float: left;
                                                                        width: 0.5rem;
                                                                        height: 0.5rem;
                                                                        border: 1px solid #fff;
                                                                        line-height: 12px;
                                                                        padding: 0;
                                                                        position: relative;
                                                                        margin: 0 0 0 4px;
                                                                        animation: preload 1s infinite;
                                                                        border-radius: 50%;
                                                                    }

                                                                    .formLoading li:first-child {
                                                                        margin-left: 0
                                                                    }

                                                                    .formLoading li:nth-child(2) {
                                                                        animation-delay: .15s
                                                                    }

                                                                    .formLoading li:nth-child(3) {
                                                                        animation-delay: .3s
                                                                    }

                                                                    .formLoader.formLoader-complete {
                                                                        opacity: 0;
                                                                        visibility: hidden;
                                                                        transition-duration: 1s
                                                                    }
                                                                </style>
                                                            </td>
                                                            <td>
                                                                <input class="inputField form-control create-company-name"
                                                                    type="text" name="company_name" value="">
                                                            </td>
                                                            <td>
                                                                <input
                                                                    class="inputField form-control create-company-address"
                                                                    type="text" name="address" value="">
                                                            </td>
                                                            <td>
                                                                <input
                                                                    class="inputField form-control create-company-phone_number"
                                                                    type="text" name="phone_number" value="">
                                                            </td>
                                                            <td>
                                                                <input class="inputField form-control create-company-email"
                                                                    type="text" name="email" value="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick1" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-4 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick2" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick3" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick4" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick5" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick6" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick7" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick8" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick9" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick10" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick11" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick12" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="sick13" role="tabpanel"
                                            aria-labelledby="pills-sick-tab" tabindex="0">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Kết luận:</h5>
                                                </label>
                                                <div class="col-sm mb-2">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-3 mb-2">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Phân loại sức khỏe:</h5>
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                style="width: calc(100% - 150px);" id=""
                                                                name="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group d-flex align-items-center">
                                                            <label class="d-inline-block" style="width: 150px;"
                                                                for="">
                                                                <h5 class="mb-0">Bác sĩ khám:</h5>
                                                            </label>
                                                            <select
                                                                class="form-select periodic-doctor mr-sm-2 doctorSelect"
                                                                id="" name="companySelect">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary me-2 showDoctorInput"
                                                                id="" type="button">Thêm bác sĩ</button>
                                                            <button class="btn btn-primary editDoctor" id=""
                                                                type="button">Sửa bác sĩ</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group doctor-name" style="display: none;">
                                                            <label class="d-inline-block" for="">
                                                                <h5 class="mb-0">Tên bác sĩ:</h5>
                                                            </label>
                                                            <input type="text" class="form-control doctorNameInput"
                                                                id="" name="doctor-name" />
                                                            <button type="button"
                                                                class="btn btn-warning btn-add-doctor addDoctor"
                                                                id="">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-body note-has-grid">
                                    <div class="single-note-item mb-3">
                                        <span class="side-stick"></span>
                                        <h3>Xét nghiệm & Chuẩn đoán</h3>
                                    </div>
                                    <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0"
                                        id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active"
                                                id="pills-test-tab" data-bs-toggle="pill" data-bs-target="#test"
                                                type="button" role="tab" aria-controls="test"
                                                aria-selected="true">
                                                <span class="icon-item-icon me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-test-pipe" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124">
                                                        </path>
                                                        <path d="M7 13h8"></path>
                                                        <path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z"></path>
                                                        <path d="M15 3l6 6"></path>
                                                    </svg>
                                                </span>
                                                <span class="d-none d-md-block">Xét nghiệm</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button
                                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                                id="pills-diagnostic-tab" data-bs-toggle="pill"
                                                data-bs-target="#diagnostic" type="button" role="tab"
                                                aria-controls="diagnostic" aria-selected="true">
                                                <span class="icon-item-icon me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-test-pipe" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124">
                                                        </path>
                                                        <path d="M7 13h8"></path>
                                                        <path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z"></path>
                                                        <path d="M15 3l6 6"></path>
                                                    </svg>
                                                </span>
                                                <span class="d-none d-md-block">Chuẩn đoán hình ảnh</span>
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="test" role="tabpanel"
                                            aria-labelledby="pills-test-tab" tabindex="0">
                                            <div class="table-responsive">
                                                <table id="diagnosticTable"
                                                    class="table border table-striped table-bordered text-nowrap align-middle dataTable">
                                                    <thead class="text-dark fs-4">
                                                        <tr role="row">
                                                            <th></th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold mb-0 text-center">Phân loại
                                                                    xét nghiệm</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold mb-0 text-center">Tên xét
                                                                    nghiệm</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Chỉ định xét
                                                                    nghiệm</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Đơn vị tính
                                                                </h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Chỉ số bình
                                                                    thường</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Kết quả</h6>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row">
                                                            <td>
                                                                <div class="btn-group d-flex">
                                                                    <button
                                                                        class="btn btn-info me-1 btn-create-company js-btn-loading">
                                                                        <div class="default ">
                                                                            <span class="icon-item-icon">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="icon icon-tabler icon-tabler-discount-check-filled"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" stroke-width="2"
                                                                                    stroke="currentColor" fill="none"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none"></path>
                                                                                    <path
                                                                                        d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                                                                        stroke-width="0"
                                                                                        fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="loading-dot d-none">
                                                                            <ul class="formLoading">
                                                                                <li></li>
                                                                                <li></li>
                                                                                <li></li>
                                                                            </ul>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input class="inputField form-control create-company-name"
                                                                    type="text" name="company_name" value="">
                                                            </td>
                                                            <td>
                                                                <input class="inputField form-control create-company-name"
                                                                    type="text" name="company_name" value="">
                                                            </td>
                                                            <td>
                                                                <input class="inputField form-control create-company-name"
                                                                    type="text" name="company_name" value="">
                                                            </td>
                                                            <td>
                                                                <input
                                                                    class="inputField form-control create-company-address"
                                                                    type="text" name="address" value="">
                                                            </td>
                                                            <td>
                                                                <input
                                                                    class="inputField form-control create-company-phone_number"
                                                                    type="text" name="phone_number" value="">
                                                            </td>
                                                            <td>
                                                                <input
                                                                    class="inputField form-control create-company-email"
                                                                    type="text" name="email" value="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="diagnostic" role="tabpanel"
                                            aria-labelledby="pills-diagnostic-tab" tabindex="0">
                                            <div class="table-responsive">
                                                <table id="diagnosticImage"
                                                    class="table border table-striped table-bordered text-nowrap align-middle dataTable">
                                                    <thead class="text-dark fs-4">
                                                        <tr role="row">
                                                            <th></th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold mb-0 text-center">Phân loại
                                                                    CDHA</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Chỉ định
                                                                    chuẩn đoán hình ảnh</h6>
                                                            </th>
                                                            <th>
                                                                <h6 class="fs-4 fw-semibold text-center mb-0">Kết quả</h6>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row">
                                                            <td>
                                                                <div class="btn-group d-flex">
                                                                    <button
                                                                        class="btn btn-info me-1 btn-create-company js-btn-loading">
                                                                        <div class="default ">
                                                                            <span class="icon-item-icon">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="icon icon-tabler icon-tabler-discount-check-filled"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" stroke-width="2"
                                                                                    stroke="currentColor" fill="none"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none"></path>
                                                                                    <path
                                                                                        d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                                                                        stroke-width="0"
                                                                                        fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="loading-dot d-none">
                                                                            <ul class="formLoading">
                                                                                <li></li>
                                                                                <li></li>
                                                                                <li></li>
                                                                            </ul>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input class="inputField form-control create-company-name"
                                                                    type="text" name="company_name" value="">
                                                            </td>
                                                            <td>
                                                                <input class="inputField form-control create-company-name"
                                                                    type="text" name="company_name" value="">
                                                            </td>
                                                            <td>
                                                                <input class="inputField form-control create-company-name"
                                                                    type="text" name="company_name" value="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-body note-has-grid">
                                    <div class="single-note-item mb-3">
                                        <span class="side-stick"></span>
                                        <h3>Phân loại sức khỏe</h3>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group d-flex align-items-center">
                                                <div class="col-sm form-radio">
                                                    <div class="d-flex">
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="exampleRadios" id="" value="option1"
                                                                checked="" />
                                                            <label class="form-check-label" for="">Khỏe
                                                                mạnh</label>
                                                        </div>
                                                        <div class="form-check me-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="exampleRadios" id="" value="option2" />
                                                            <label class="form-check-label" for="">Mắc
                                                                bệnh</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-xs-12 col-md-6 col-xl-3">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Tên bệnh:</h5>
                                                </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="NHOMMAU">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-3">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Đạt sức khỏe loại:</h5>
                                                </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="RHESUS">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 col-xl-6">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Hiện tại chưa (không) đủ sức khỏe làm việc (ghi cụ thể ngành nghề):
                                                    </h5>
                                                </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="NHOMMAU">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-xs-12 col-md-12 col-xl-6">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Bác sĩ kết luận:</h5>
                                                </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="KETLUAN">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12 col-xl-6">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Nơi khám:</h5>
                                                </label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account"
                                                        value="" name="NOIKHAM">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>
                                                    <h5>Hướng giải quyết:</h5>
                                                </label>
                                                <div class="col-sm">
                                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="status">Trạng thái: <span class="main-title">Thêm mới</span></h5>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Đóng
                        </button>
                        <button type="button" class="btn bg-warning-subtle text-warning font-medium">
                            Reset
                        </button>
                        <button type="button" class="btn bg-warning-subtle text-warning font-medium">
                            Xem/In
                        </button>
                        <button type="button" class="btn bg-success-subtle text-success font-medium">
                            Lưu thay đổi
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script src="/js/pages/periodic.js"></script>
@endsection
