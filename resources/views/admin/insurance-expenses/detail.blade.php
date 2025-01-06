@extends('layouts.master')

@section('title', 'Chi bảo hiểm')

@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
@include('partial.breadcrumb', ['breadcrumbTitle' => 'Chi tiết chi bảo hiểm'])
<form action="{{ route('insuranceExpenses.create') }}" method="post" id="formCreatePaymentInsurance">
    @csrf
    <input type="hidden" name="contract_id" class="contract_id_hidden">
    <input type="hidden" name="customer_id" class="customer_id_hidden">
    <input type="hidden" name="period_id" class="period_id_hidden">
    <div class="wrap-insurance-detail">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card w-100 position-relative overflow-hidden mb-0" style="height: 100%">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <h5>Tên chủ tài khoản: <span class="fullname_customer">{{ $customer->full_name }}</span>
                                    - <span class="card_number_customer">{{ $customer->card_number }}</span></h5>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <h5>Giới tính: <span class="gender_customer">{{ $customer->gender }}</span></h5>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <h5>Ngày sinh: <span class="birthday_customer">{{ $customer->birth_year }}</span></h5>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <h5>Loại khách hàng: <span class="type_customer">{{ $customer->type_name }}</span></h5>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <h5 class="mb-0">Số thẻ BH cũ: <span class="old_card_customer">{{
                                        $customer->old_card_number }}</span></h5>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group d-flex align-items-center">
                                    <div class="col-sm form-radio">
                                        <div class="d-flex">
                                            <div class="form-check me-3">
                                                <input class="form-check-input account_holder_customer" disabled type="radio"
                                                    name="account_holder" id="info1" value="1" checked="" />
                                                <label class="form-check-label" for="info1">Chủ tài
                                                    khoản</label>
                                            </div>
                                            <div class="form-check me-3">
                                                <input class="form-check-input account_holder_customer" disabled type="radio"
                                                    name="account_holder" id="info2" value="0" />
                                                <label class="form-check-label" for="info2">Thân
                                                    nhân</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <h5>Tên công ty: <span class="company_name_customer">{{ $customer->company_name
                                        }}</span></h5>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <h5>Tên niên hạn: <span class="period_name_customer">{{ $customer->period_name }}</span>
                                </h5>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <h5>Tên hợp đồng: <span class="contract_name_customer">{{ $customer->contract_name
                                        }}</span></h5>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <h5>Giới hạn kỳ BH: <span class="limit_money_customer">{{ $customer->moneyStartPeriod
                                        }}</span> đồng</h5>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <h5>Gói tài khoản: <span class="main-color package_name_customer">{{
                                        $customer->package_name }}</span>
                                </h5>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="mb-0">Loại TK: <span class="account_package_customer">{{
                                        $customer->group_name }}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
                        <div class="row align-items-center mb-3">
                            @include('admin.insurance-expenses.common.amount-info', ['customer' => $customer, 'amountSpent' => $amountSpent])

                            <div class="col-sm-12 col-md-6 d-flex justify-content-end">
                                <button type="button" data-bs-toggle="modal"
                                data-bs-target="#detailclient1" class="btn btn-primary me-2">Thêm mới</button>
                            </div>
                        </div>
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
                                    @foreach($customerPay as $customers)
                                    <tr role='row' data-id='{{ $customers->payment_detail_id }}'>
                                        <td>
                                            <h6 class='fs-4 fw-semibold mb-0'>
                                                <div class='btn-group d-flex justify-content-center '>
                                                    <button class='btn btn-success me-1 btn-update-insurance'>
                                                        <span class='icon-item-icon'>
                                                            <img src='/img-system/system/edit_white.svg' />
                                                        </span>
                                                    </button>
                                                    <button class='btn btn-danger delete-button-payment'>
                                                        <span class='icon-item-icon'>
                                                            <img src='/img-system/system/trash_white.svg' alt='' />
                                                        </span>
                                                    </button>
                                                </div>
                                            </h6>
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-full_name'
                                                value='{{ $customers->full_name }}' type='text' name='full_name'
                                                disabled='' />
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-examination_date'
                                                value='{{ date(' Y-m-d', strtotime($customers->examination_date)) }}'
                                            type='text' name='examination_date' disabled=''/>
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-payment_date' value='{{ date('
                                                Y-m-d', strtotime($customers->payment_date)) }}' type='text'
                                            name='payment_date' disabled='' />
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-amount_paid'
                                                value='{{ number_format($customers->amount_paid) }}' type='text'
                                                name='amount_paid' disabled='' />
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-note'
                                                value='{{ $customers->note }}' type='text' name='note' disabled='' />
                                        </td>
                                        <td class='text-center'>
                                            <input class='form-check-input inputField update-approved' {{
                                                $customers->approved == 1 ? 'checked' : '' }} type='checkbox'
                                            value='1' disabled='' name='approved' />
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-hospital_name'
                                                value='{{ $customers->hospital_name }}' type='text' name='hospital_name'
                                                disabled='' />
                                        </td>
                                    </tr>
                                    @endforeach
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
                                            <div class="wrap-insurance-detail">
                                                <div class="row">
                                                    @include('admin.insurance-expenses.common.info', compact(['customer']))
                                        
                                                    @include('admin.insurance-expenses.common.table-vaccine', ['vaccinationClassificationList'
                                                    => $vaccinationClassificationList, 'vaccinationList' => $vaccinationList])
                                        
                                                    <div class="col-12">
                                                        <div class="card w-100 position-relative overflow-hidden mb-0">
                                                            <div class="card-body p-4">
                                                                <div class="row">
                                                                    <div class="col-4 mb-3">
                                                                        @include('common/select-hospital', [
                                                                        'hospitalId' => isset($_GET['hospital'])
                                                                        ? $_GET['hospital']
                                                                        : 0,
                                                                        'hospitalList' => $hospitalList,
                                                                        ])
                                                                    </div>
                                                                    <div class="col-4 mb-3">
                                                                        <div class="form-group">
                                                                            <label class="d-inline-block">
                                                                                <h5>Ngày nhập:</h5>
                                                                            </label>
                                                                            <div class="col-sm">
                                                                                <input class="inputField form-control create-contract-payment_date singledate"
                                                                                    type="text" name="payment_date" value="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4 mb-3">
                                                                        <div class="form-group">
                                                                            <label class="d-inline-block">
                                                                                <h5>Ngày khám:</h5>
                                                                            </label>
                                                                            <div class="col-sm">
                                                                                <input class="inputField form-control create-contract-checkup_date singledate"
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
                                                                                    <h6 class="fs-4 fw-semibold mb-0 text-center" style="width: 100px"></h6>
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
                                                                                    <div class="btn-group d-flex justify-content-center">
                                                                                        <button class="btn btn-danger delete-content-pay"><span
                                                                                                class="icon-item-icon"><img
                                                                                                    src="/img-system/system/trash_white.svg"
                                                                                                    alt=""></span></button>
                                                                                    </div>
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
                                                                                    <input class="form-control int create-insurance-amount_paid" type="text"
                                                                                        value="">
                                                                                </td>
                                                                                <td>
                                                                                    <input class="form-control int create-insurance-expected_payment"
                                                                                        type="text" value="">
                                                                                </td>
                                                                                <td>
                                                                                    <input class="form-control int create-insurance-rejected_amount" type="text"
                                                                                        value="">
                                                                                </td>
                                                                                <td>
                                                                                    <input class="form-control create-insurance-note" type="text" value="">
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="row align-items-center mb-3">
                                                                    @include('admin.insurance-expenses.common.amount-info', ['customer' => $customer,
                                                                    'amountSpent' => $amountSpent])
                                        
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="text-right ">
                                                                            <div class="d-flex align-items-center justify-content-end">
                                                                                <button type="submit" class="btn btn-success btn-save-payment-insurance me-2"
                                                                                    data-action="create">Lưu</button>
                                                                                <button type="submit" class="btn btn-primary btn-add-content-pay me-2"
                                                                                    data-action="create">Thêm mới</button>
                                                                                <button onclick="return false"
                                                                                    class="btn btn-primary btn-action-content-payment" data-bs-toggle="modal"
                                                                                    data-bs-target="#contentPaymentModal">Thêm nội dung
                                                                                    chi</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
