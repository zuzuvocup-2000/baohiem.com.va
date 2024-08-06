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
                                                <input class="form-check-input account_holder_customer" type="radio"
                                                    name="account_holder" id="info1" value="1" checked="" />
                                                <label class="form-check-label" for="info1">Chủ tài
                                                    khoản</label>
                                            </div>
                                            <div class="form-check me-3">
                                                <input class="form-check-input account_holder_customer" type="radio"
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
                        <div class="vaccination-container" style="display: none;">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="d-inline-block">
                                            <h5>Loại chủng ngừa:</h5>
                                        </label>
                                        <div class="col-sm">
                                            <select class="form-select">
                                                <option value="1">
                                                    Bại liệt
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="d-inline-block">
                                            <h5>Tên chủng ngừa:</h5>
                                        </label>
                                        <div class="col-sm">
                                            <select class="form-select">
                                                <option value="1">
                                                    Ngừa Bại liệt
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <h5>Tên Vacxin: <span class="font-normal">IMOVAX POLIO</span></h5>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3 table-content-pay">
                                    <thead class="text-dark fs-4">
                                        <tr role="row">
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0 text-center" style="width: 100px">
                                                    Thao
                                                    tác
                                                </h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold text-center mb-0">STT</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold text-center mb-0">Tên lần tiêm
                                                </h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold text-center mb-0">Số tháng cách
                                                    lần đầu tiên
                                                </h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold text-center mb-0">Số tháng nhắc
                                                    lại
                                                </h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold text-center mb-0">Ngày tiêm</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row">
                                            <td colspan="2">
                                                @include('common/button-loading', ['class' =>
                                                'btn-create-company'])
                                            </td>
                                            <td>
                                                <input class="inputField form-control create-company-address"
                                                    type="text" name="address" value="" />
                                            </td>
                                            <td>
                                                <input class="inputField form-control create-company-phone_number"
                                                    type="text" name="phone_number" value="" />
                                            </td>
                                            <td>
                                                <input class="inputField form-control create-company-email" type="text"
                                                    name="email" value="" />
                                            </td>
                                            <td>
                                                <input class="inputField form-control create-company-ceo_name"
                                                    type="text" name="ceo_name" value="" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-sm-12 col-md-3">
                                <h5 class="mb-0">Giới hạn còn lại: <span class="main-color theRemainingAmount">{{
                                        number_format($customer->theRemainingAmount) }}</span>
                                    đồng
                                </h5>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <h5 class="mb-0">Tài khoản chi khác: <span class="main-color amountSpent">{{
                                        number_format($amountSpent) }}</span>
                                    đồng
                                </h5>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="text-right ">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-add-content-pay me-2"
                                            data-action="create">Thêm mới</button>
                                        <button type="submit" class="btn btn-success btn-save-payment-insurance"
                                            data-action="create">Lưu</button>
                                    </div>
                                </div>
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
                                    @foreach($customerPay as $customer)
                                    <tr role='row' data-id='{{ $customer->payment_detail_id }}'>
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
                                                value='{{ $customer->full_name }}' type='text' name='full_name'
                                                disabled='' />
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-examination_date'
                                                value='{{ date(' Y-m-d', strtotime($customer->examination_date)) }}'
                                            type='text' name='examination_date' disabled=''/>
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-payment_date' value='{{ date('
                                                Y-m-d', strtotime($customer->payment_date)) }}' type='text'
                                            name='payment_date' disabled='' />
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-amount_paid'
                                                value='{{ number_format($customer->amount_paid) }}' type='text'
                                                name='amount_paid' disabled='' />
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-note'
                                                value='{{ $customer->note }}' type='text' name='note' disabled='' />
                                        </td>
                                        <td class='text-center'>
                                            <input class='form-check-input inputField update-approved' {{
                                                $customer->approved == 1 ? 'checked' : '' }} type='checkbox'
                                            value='1' disabled='' name='approved' />
                                        </td>
                                        <td>
                                            <input class='inputField form-control update-hospital_name'
                                                value='{{ $customer->hospital_name }}' type='text' name='hospital_name'
                                                disabled='' />
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
