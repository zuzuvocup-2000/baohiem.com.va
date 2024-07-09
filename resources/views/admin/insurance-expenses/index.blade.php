@extends('layouts.master')

@section('title', 'Chi bảo hiểm')

@section('style')
    <link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Chi bảo hiểm'])
    <div class="widget-content searchable-container list insurance-account">
        @include('admin.insurance-expenses.common.filter')
        <div class="card card-body">
            @include('admin.insurance-expenses.common.menu')
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="expenses1" role="tabpanel" aria-labelledby="expenses-tab"
                    tabindex="0">
                    <div class="table-responsive">
                        <table id=""
                            class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                            <thead class="text-dark fs-4">
                                <tr role="row">
                                    <th>
                                        Tên chủ tài khoản
                                    </th>
                                    <th>
                                        Số thẻ Bảo hiểm
                                    </th>
                                    <th>Tên khách hàng</th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th class="text-center">Giới hạn đầu kỳ (đồng)</th>
                                    <th class="text-center">Chi trong kỳ</th>
                                    <th class="text-center">Giới hạn còn lại (đồng)</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($accountList) && is_array($accountList) && count($accountList))
                                    @foreach ($accountList as $key => $item)
                                        <tr role="row">
                                            <td rowspan="{{ count($item['data']) }}">
                                                {{ $item['fullname'] }}
                                            </td>
                                            @if (isset($item['data']) && is_array($item['data']) && count($item['data']))
                                                @php
                                                    $count = 0;
                                                @endphp
                                                @foreach ($item['data'] as $itemChild)
                                                    @if ($count == 0)
                                                        <td>
                                                            {{ $itemChild->card_number }}
                                                        </td>
                                                        <td>{{ $itemChild->full_name }}</td>
                                                        <td>{{ $itemChild->gender }}</td>
                                                        <td>{{ $itemChild->birth_year }}</td>
                                                        <td class="text-center">
                                                            {{ number_format($itemChild->moneyStartPeriod) }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ number_format($itemChild->totalAmountSpent) }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ number_format($itemChild->theRemainingAmount) }}
                                                        </td>
                                                        <td>
                                                            <h6 class="fs-4 fw-semibold mb-0">
                                                                <div class="btn-group justify-content-center d-flex">
                                                                    <button class="btn btn-success me-1 btn-get-detail"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#detailclient1"
                                                                        data-id="{{ $itemChild->id }}">
                                                                        <span class="icon-item-icon">
                                                                            <img
                                                                                src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </h6>
                                                        </td>
                                                        @php
                                                            $count++;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            @endif
                                        </tr>
                                        @if (isset($item['data']) && is_array($item['data']) && count($item['data']))
                                            @php
                                                $countChild = 0;
                                            @endphp
                                            @foreach ($item['data'] as $itemChild)
                                                @if ($countChild != 0)
                                                    <td>
                                                        {{ $itemChild->card_number }}
                                                    </td>
                                                    <td>{{ $itemChild->full_name }}</td>
                                                    <td>{{ $itemChild->gender }}</td>
                                                    <td>{{ $itemChild->birth_year }}</td>
                                                    <td class="text-center">
                                                        {{ 0 }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ number_format($itemChild->totalAmountSpent) }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ 0 }}
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-4 fw-semibold mb-0">
                                                            <div class="btn-group justify-content-center d-flex">
                                                                <button class="btn btn-success me-1 btn-get-detail"
                                                                    data-bs-toggle="modal" data-bs-target="#detailclient1"
                                                                    data-id="{{ $itemChild->id }}">
                                                                    <span class="icon-item-icon">
                                                                        <img
                                                                            src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </h6>
                                                    </td>
                                                @endif
                                                @php
                                                    $countChild++;
                                                @endphp
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div id="detailclient1" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl">
                            <div class="modal-content">
                                <div class="modal-header modal-colored-header bg-primary text-white">
                                    <h4 class="modal-title text-white" id="primary-header-modalLabel">
                                        Chi tiền bảo hiểm
                                    </h4>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('insuranceExpenses.create') }}" method="post" id="formCreatePaymentInsurance">
                                        @csrf
                                        <input type="hidden" name="contract_id" class="contract_id_hidden">
                                        <input type="hidden" name="customer_id" class="customer_id_hidden">
                                        <input type="hidden" name="period_id" class="period_id_hidden">
                                        <div class="row mb-3">
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Tên công ty: <span class="company_name_customer"></span></h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Tên niên hạn: <span class="period_name_customer"></span></h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Tên hợp đồng: <span class="contract_name_customer"></span></h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Giới hạn kỳ BH: <span class="limit_money_customer"></span> đồng</h5>
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <h5>Tên chủ tài khoản: <span class="fullname_customer"></span> - <span
                                                        class="card_number_customer"></span></h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Giới tính: <span class="gender_customer"></span></h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Ngày sinh: <span class="birthday_customer"></span></h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Package: <span class="main-color package_name_customer"></span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Loại khách hàng: <span class="type_customer"></span></h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <h5>Số thẻ BH cũ: <span class="old_card_customer"></span></h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group d-flex align-items-center">
                                                    <div class="col-sm form-radio">
                                                        <div class="d-flex">
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input account_holder_customer"
                                                                    type="radio" name="account_holder" id="info1"
                                                                    value="1" checked="" />
                                                                <label class="form-check-label" for="info1">Chủ tài
                                                                    khoản</label>
                                                            </div>
                                                            <div class="form-check me-3">
                                                                <input class="form-check-input account_holder_customer"
                                                                    type="radio" name="account_holder" id="info2"
                                                                    value="0" />
                                                                <label class="form-check-label" for="info2">Thân
                                                                    nhân</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4 mb-3">
                                                <h5>Loại TK: <span class="account_package_customer"></span></h5>
                                            </div>

                                            <div class="col-12 mb-3">
                                                @include('common/select-hospital', [
                                                    'hospitalId' => isset($_GET['hospital'])
                                                        ? $_GET['hospital']
                                                        : 0,
                                                    'hospitalList' => $hospitalList,
                                                ])
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="d-inline-block">
                                                        <h5>Ngày nhập:</h5>
                                                    </label>
                                                    <div class="col-sm">
                                                        <input
                                                            class="inputField form-control create-contract-payment_date singledate"
                                                            type="text" name="payment_date" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="d-inline-block">
                                                        <h5>Ngày khám:</h5>
                                                    </label>
                                                    <div class="col-sm">
                                                        <input
                                                            class="inputField form-control create-contract-checkup_date singledate"
                                                            type="text" name="checkup_date" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table
                                                class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3 table-content-pay">
                                                <thead class="text-dark fs-4">
                                                    <tr role="row">
                                                        <th>
                                                            <h6 class="fs-4 fw-semibold mb-0 text-center"
                                                                style="width: 100px"></h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fs-4 fw-semibold text-center mb-0">Nội dung chi</h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fs-4 fw-semibold text-center mb-0">Số tiền chi trả
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fs-4 fw-semibold text-center mb-0">Số tiền ước chi
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fs-4 fw-semibold text-center mb-0">Số tiền từ chối
                                                            </h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="fs-4 fw-semibold text-center mb-0">Ghi chú</h6>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row">
                                                        <td>
                                                            @include('common/button-loading', [
                                                                'class' => 'btn-create btn-add-content-pay',
                                                            ])
                                                        </td>
                                                        <td>
                                                            <select class="form-select create-insurance-payment_type">
                                                                @foreach ($paymentTypeList as $paymentType)
                                                                    <option value="{{ $paymentType['id'] }}">
                                                                        {{ $paymentType['payment_type_name'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input
                                                                class="inputField form-control int create-insurance-amount_paid"
                                                                type="text" value="">
                                                        </td>
                                                        <td>
                                                            <input
                                                                class="inputField form-control int create-insurance-expected_payment"
                                                                type="text" value="">
                                                        </td>
                                                        <td>
                                                            <input
                                                                class="inputField form-control int create-insurance-rejected_amount"
                                                                type="text" value="">
                                                        </td>
                                                        <td>
                                                            <input class="inputField form-control create-insurance-note"
                                                                type="text" value="">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12 col-md-3">
                                                <h5>Giới hạn còn lại: <span class="main-color theRemainingAmount"></span>
                                                    đồng
                                                </h5>
                                            </div>
                                            <div class="col-sm-12 col-md-3">
                                                <h5>Tài khoản chi khác: <span class="main-color amountSpent"></span> đồng
                                                </h5>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="text-right">
                                                    <button type="submit"
                                                        class="btn btn-success btn-save-payment-insurance" data-action="create">Lưu</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive" style="overflow: hidden">
                                        <table
                                            class="table sticky-column border text-nowrap customize-table mb-0 align-middle mb-3 table-customer-pay">
                                            <thead class="text-dark fs-4">
                                                <tr role="row">
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Tên khách hàng</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Ngày khám</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Ngày chi</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Số tiền chi</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Ghi chú</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Đã duyệt</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0">Tên bệnh viện</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="detailclient2" class="modal fade" tabindex="-1"
                        aria-labelledby="primary-header-modalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header modal-colored-header bg-primary text-white">
                                    <h4 class="modal-title text-white" id="primary-header-modalLabel">
                                        Chi tiền bảo hiểm
                                    </h4>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn bg-primary-subtle text-primary">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        var paymentTypeList = JSON.parse('<?php echo json_encode($paymentTypeList) ?>')
    </script>
@endsection
@section('script')
    <script src="/assets/js/datetimepicker/moment.min.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker-init.js"></script>
    <script src="/assets/js/datetimepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/datetimepicker/datepicker-init.js"></script>
    <script src="/assets/js/datetimepicker/datepicker-init.js"></script>
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/js/pages/insurance-expenses.js"></script>
@endsection
