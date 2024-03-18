@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
@endsection

@section('title', 'Cấp tài khoản khách hàng Online')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Cấp tài khoản khách hàng Online'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <form action="/" method="get">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group d-flex align-items-center">
                                                <label class="d-inline-block" style="width: 100px" for="companySelect">Tên
                                                    công ty</label>
                                                <select class="form-select company-search mr-sm-2" id="companySelect"
                                                    name="companySelect" style="width: calc(100% - 100px)">
                                                    @foreach ($companyList as $company)
                                                        <option value="{{ $company->id }}"
                                                            {{ old('companySelect', $companyList[0]->id) == $company->id ? 'selected' : '' }}>
                                                            {{ $company->company_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group d-flex align-items-center">
                                                <label class="d-inline-block" style="width: 100px" for="periodSelect">Niên
                                                    hạn</label>
                                                <select class="form-select period-search mr-sm-2" id="periodSelect"
                                                    name="periodSelect" style="width: calc(100% - 100px)">
                                                    @foreach ($periodList as $period)
                                                        <option value="{{ $period->id }}"
                                                            {{ old('periodSelect', $periodList[0]->id) == $period->id ? 'selected' : '' }}>
                                                            {{ $period->period_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group d-flex align-items-center">
                                                <label class="d-inline-block" style="width: 100px" for="contractSelect">Hợp
                                                    đồng</label>
                                                <select class="form-select contract-search mr-sm-2" id="contractSelect"
                                                    name="contractSelect" style="width: calc(100% - 100px)">
                                                    @foreach ($contractList as $contract)
                                                        <option value="{{ $contract->id }}"
                                                            {{ old('contractSelect', $contractList[0]->id) == $contract->id ? 'selected' : '' }}>
                                                            {{ $contract->contract_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-1">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-primary">Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row mt-3">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-customer-have-email-tab"
                                                data-bs-toggle="pill" href="#v-pills-customer-have-email" role="tab"
                                                aria-controls="v-pills-customer-have-email" aria-selected="true"> Khách hàng
                                                có địa chỉ Email </a>
                                            <a class="nav-link" id="v-pills-customer-no-email-tab" data-bs-toggle="pill"
                                                href="#v-pills-customer-no-email" role="tab"
                                                aria-controls="v-pills-customer-no-email" aria-selected="false"
                                                tabindex="-1">
                                                Khách hàng không có địa chỉ Email </a>
                                            <a class="nav-link" id="v-pills-employee-tab" data-bs-toggle="pill"
                                                href="#v-pills-employee" role="tab" aria-controls="v-pills-employee"
                                                aria-selected="false" tabindex="-1"> Nhân sự</a>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-customer-have-email"
                                                role="tabpanel" aria-labelledby="v-pills-customer-have-email-tab">
                                                <div class="table-responsive" style="overflow: unset">
                                                    @include('admin.supervisor.components.customer-have-email')
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-customer-no-email" role="tabpanel"
                                                aria-labelledby="v-pills-customer-no-email-tab">
                                                <div class="table-responsive" style="overflow: unset">
                                                    @include('admin.supervisor.components.customer-no-email')
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-employee" role="tabpanel"
                                                aria-labelledby="v-pills-employee-tab">
                                                <div class="table-responsive" style="overflow: unset">
                                                    @include('admin.supervisor.components.employee')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>

    <script>
        $("#tableCustomerHaveEmail").DataTable({
            pagingType: "full_numbers",
            columnDefs: [{
                targets: [0],
                orderable: false,
            }],
        });

        $("#tableCustomerNoEmail").DataTable({
            pagingType: "full_numbers",
            columnDefs: [{
                targets: [0],
                orderable: false,
            }],
        });
    </script>
@endsection
