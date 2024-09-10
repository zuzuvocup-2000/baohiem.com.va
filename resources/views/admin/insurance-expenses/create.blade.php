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
            @include('admin.insurance-expenses.common.info', compact(['customer']))

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
                                            <select class="form-select" id="vaccinationClassificationSelectGeneral"
                                                name="vaccination_classification">
                                                @foreach ($vaccinationClassificationList as $vaccinationClassification)
                                                <option value="{{ $vaccinationClassification->id }}">
                                                    {{ $vaccinationClassification->classification_name }}
                                                </option>
                                                @endforeach
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
                                            <select class="form-select" id="vaccinationSelectGeneral"
                                                name="vaccination">
                                                @foreach ($vaccinationList as $vaccination)
                                                <option value="{{ $vaccination->id }}">
                                                    {{ $vaccination->vaccination_name }}
                                                </option>
                                                @endforeach
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
@include('common.modal-content-payment', ['paymentTypeList'=> $paymentTypeList])
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