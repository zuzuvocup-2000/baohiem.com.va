@extends('layouts.master')

@section('title', 'Chi bảo hiểm')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Chi bảo hiểm'])
    <div class="widget-content searchable-container list insurance-account">
        @include('admin.insurance-expenses.common.filter')
        <div class="card card-body">
            @include('admin.insurance-expenses.common.menu')
            <div class="tab-content" id="pills-tabContent">
                <div >
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group ">
                                <label class="col-form-label">Thời gian:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control daterange">
                                    <span class="input-group-text">
                                        <i class="ti ti-calendar fs-5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group ">
                                <label class="col-form-label">Tên bệnh viện:</label>
                                <select class="form-select period-search mr-sm-2" name="periodSelect"
                                    style="width: calc(100% - 100px);">
                                    <option value="10079" selected="">
                                        Bệnh viện VN Cu Ba
                                    </option>
                                    <option value="10077">
                                        Bệnh viện Việt Đức
                                    </option>
                                    <option value="10077">
                                        Bệnh viện Xanh Pôn
                                    </option>
                                    <option value="10077">
                                        Bệnh viện Đức Giang
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3 btn-flexend">
                            <div>
                                <button class="btn btn-primary" type="button">Duyệt chi</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3 btn-flexend">
                            <div>
                                <button class="btn btn-primary" type="button">Xuất ra Excel</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="simpletable"
                            class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                            <thead class="text-dark fs-4">
                                <tr role="row">
                                    <th class="text-center" style="width: 50px;">
                                        <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                                    </th>
                                    <th style="width: 100px;">
                                        <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Số thẻ Bảo hiểm</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Tên khách hàng</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Số tiền chi trả</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Nội dung chi</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Duyệt</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Ghi chú</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Ngày chi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
                                    </td>
                                </tr>
                                <tr role="row" data-id="20067">
                                    <th class="text-center"><input class="toggleCheckbox" type="checkbox"></th>
                                    <td>
                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                    </td>
                                    <td>
                                        001200033444
                                    </td>
                                    <td>
                                        Nguyễn Văn A
                                    </td>
                                    <td>
                                        1 000 000
                                    </td>
                                    <td>
                                        chi trả phí bh
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        không
                                    </td>
                                    <td>
                                        20/3/2024
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
    <script src="/assets/js/datetimepicker/datepicker-init.js"></script>
    <script src="/js/pages/insurance-expenses.js"></script>
@endsection
