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
                    <h5>Ngày sinh: <span class="birthday_customer">{{ date('d/m/Y', strtotime($customer->birth_year))
                            }}</span></h5>
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
