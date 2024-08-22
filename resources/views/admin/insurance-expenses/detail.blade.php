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

                            <div class="col-sm-12 col-md-6">
                                <div class="text-right ">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('insuranceExpenses.create', ['id' => request()->get('id', 0), 'periodId' => request()->get('periodId', 0)]) }}" class="btn btn-primary me-2">Thêm mới</a>
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
