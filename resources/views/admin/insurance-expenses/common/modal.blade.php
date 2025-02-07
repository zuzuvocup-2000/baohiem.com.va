<div id="detailclient1" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="primary-header-modalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary text-white">
                <h4 class="modal-title text-white" id="primary-header-modalLabel">
                    Chi tiền bảo hiểm
                </h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <h5>Tên chủ tài khoản: <span class="fullname_customer"></span> - <span class="card_number_customer"></span></h5>
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
                                            <input class="form-check-input account_holder_customer" type="radio" disabled name="account_holder" id="info1" value="1" checked="" />
                                            <label class="form-check-label" for="info1">Chủ tài khoản</label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input account_holder_customer" type="radio" disabled name="account_holder" id="info2" value="0" />
                                            <label class="form-check-label" for="info2">Thân nhân</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-3">
                            <h5>Loại TK: <span class="account_package_customer"></span></h5>
                        </div>
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-4 mb-3">
                            @include('common/select-hospital', [
                            'hospitalId' => isset($_GET['hospital']) ? $_GET['hospital'] : 0,
                            'hospitalList' => $hospitalList,
                            ])
                        </div>
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label class="d-inline-block">
                                    <h5>Ngày khám:</h5>
                                </label>
                                <div class="col-sm">
                                    <input class="inputField form-control create-contract-checkup_date singledate" autocomplete="off" type="text" name="checkup_date" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label class="d-inline-block">
                                    <h5>Ngày nhập:</h5>
                                </label>
                                <div class="col-sm">
                                    <input class="inputField form-control create-contract-payment_date singledate" autocomplete="off" type="text" name="payment_date" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3 table-content-pay">
                            <thead class="text-dark fs-4">
                                <tr role="row">
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0 text-center" style="width: 100px">
                                            <button type="submit" class="btn btn-primary btn-add-content-pay" data-action="create">Thêm mới</button>
                                        </h6>
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
                                            <button class="btn btn-danger delete-content-pay"><span class="icon-item-icon"><img src="/img-system/system/trash_white.svg" alt=""></span></button>
                                        </div>
                                    </td>
                                    <td>
                                        <select class="form-select create-insurance-payment_type" name="payment_type_id[]">
                                            @foreach ($paymentTypeList as $paymentType)
                                            <option value="{{ $paymentType['id'] }}">
                                                {{ $paymentType['payment_type_name'] }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control int create-insurance-amount_paid" name="amount_paid[]" type="text" value="">
                                    </td>
                                    <td>
                                        <input class="form-control int create-insurance-expected_payment" name="expected_payment[]" type="text" value="">
                                    </td>
                                    <td>
                                        <input class="form-control int create-insurance-rejected_amount" name="rejected_amount[]" type="text" value="">
                                    </td>
                                    <td>
                                        <input class="form-control create-insurance-note" name="note[]" type="text" value="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-sm-12 col-md-3">
                            <h5 class="mb-0">Giới hạn còn lại: <span class="main-color theRemainingAmount"></span>
                                đồng
                            </h5>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <h5 class="mb-0">Tài khoản chi khác: <span class="main-color amountSpent"></span>
                                đồng
                            </h5>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="text-right ">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button onclick="return false" class="btn btn-info btn-action-calculator me-2 d-none">Tính</button>
                                    <button onclick="return false" class="btn btn-primary btn-action-content-payment me-2" data-bs-toggle="modal" data-bs-target="#contentPaymentModal">Thêm nội dung chi</button>
                                    <button type="submit" class="btn btn-info btn-reset-content-pay me-2" data-action="reset">Reset</button>
                                    <button type="submit" class="btn btn-success btn-save-payment-insurance" data-action="create">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="table-responsive" style="overflow: hidden">
                    <table class="table sticky-column border text-nowrap customize-table mb-0 align-middle mb-3 table-customer-pay">
                        <thead class="text-dark fs-4">
                            <tr role="row" class="clone-content-pay">
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
@include('common.modal-content-payment', ['paymentTypeList' => $paymentTypeList])
