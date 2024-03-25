@extends('layouts.master')

@section('title', 'Tài khoản bảo hiểm')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Tài khoản bảo hiểm'])
    <div class="widget-content searchable-container list insurance-account">
        <form action="">
            <div class="card card-body">
                <h5>Cập nhật tài khoản khách hàng</h5>
                <div class="bg-infor bg-info-insurance py-2 px-3 mb-3">
                    Thông tin đơn/hợp đồng bảo hiểm
                </div>
                <div class="info-contract mb-3" style="display: none;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên công ty:</div>
                                <div class="content">
                                    {{ isset($contractDetail->company_name) ? $contractDetail->company_name : '' }}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên HĐ:</div>
                                <div class="content">
                                    {{ isset($contractDetail->contract_name) ? $contractDetail->contract_name : '' }}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Số HĐ:</div>
                                <div class="content">
                                    {{ isset($contractDetail->contract_supplement_number) ? $contractDetail->contract_supplement_number : '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Ngày ký HĐ:</div>
                                <div class="content">
                                    {{ isset($contractDetail->signature_date) ? date('d/m/Y', strtotime($contractDetail->signature_date)) : '' }}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Giá trị HĐ:</div>
                                <div class="content">
                                    {{ isset($contractDetail->total_contract_value) ? number_format($contractDetail->total_contract_value) : '' }}
                                    <span>đồng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-xs-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Thời hạn từ:</div>
                                <div class="content">
                                    {{ isset($contractDetail->effective_time) ? date('d/m/Y', strtotime($contractDetail->effective_time)) : '' }}
                                    <span>đến:</span>
                                    {{ isset($contractDetail->end_time) ? date('d/m/Y', strtotime($contractDetail->end_time)) : '' }}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên niên hạn:</div>
                                <div class="content">
                                    {{ isset($contractDetail->period_name) ? $contractDetail->period_name : '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group d-flex align-items-center">
                                <label class="d-inline-block" style="width: 100px;" for="companySelect">Tên công ty</label>
                                <select class="form-select mr-sm-2" style="width: calc(100% - 100px)" id="companySelect" name="company">
                                    @foreach ($companyList as $company)
                                        <option value="{{ $company->id }}"
                                            {{ isset($_GET['company']) && $_GET['company'] == $company->id ? 'selected' : '' }}>
                                            {{ $company->company_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group d-flex align-items-center">
                                <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                                <select class="form-select mr-sm-2" style="width: calc(100% - 100px)" id="periodSelect" name="period">
                                    @foreach ($periodList as $period)
                                        <?php if (isset($_GET['period']) && $_GET['period'] == $period->id) {
                                            $periodId = $period->id;
                                        } ?>
                                        <option value="{{ $period->id }}"
                                            {{ isset($_GET['period']) && $_GET['period'] == $period->id ? 'selected' : '' }}>
                                            {{ $period->period_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group d-flex align-items-center">
                                <label class="d-inline-block" style="width: 100px;" for="companySelect">Hợp đồng</label>
                                <select class="form-select mr-sm-2" style="width: calc(100% - 100px)" id="contractSelect" name="contract">
                                    @foreach ($contractList as $contract)
                                        <?php if (isset($_GET['contract']) && $_GET['contract'] == $contract->id) {
                                            $contractId = $contract->id;
                                        } ?>
                                        <option value="{{ $contract->id }}"
                                            {{ isset($_GET['contract']) && $_GET['contract'] == $contract->id ? 'selected' : '' }}>
                                            {{ $contract->contract_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                            <div class="form-group d-flex align-items-center">
                                <label class="d-inline-block" style="width: 100px;" for="keyword">Từ khoá</label>
                                <input type="search" class="form-control"
                                value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" name="keyword"
                                id="input-search" placeholder="Tìm kiếm..." style="width: calc(100% - 100px);">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            <a href="{{ route('account.create') }}" class="btn btn-warning">Nhập khách hàng</a>
                        </div>
                    </div>
                </form>
                <h5>Nhập danh sách từ File Excel</h5>
                <div class="row mb-3">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center">
                            <input class="form-control" type="file" id="formFile" name="file" value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div>
                            <a href="/uploadExcel/mauimportKH.xls" download="" class="me-2 btn btn-dark">Dowload file mẫu DS KH chính</a>
                            <button class="btn btn-warning" type="button">Xử lý file Excel</button>
                        </div>
                    </div>
                </div>
                <h5>Đổi số thẻ khách hàng</h5>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center">
                            <input class="form-control" type="file" id="formFile" name="file" value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div>
                            <a href="/uploadExcel/filemaudoisothe.xlsx" class="me-2 btn btn-dark">Dowload file đổi số thẻ KH</a>
                            <button class="btn btn-warning" type="button">Đổi số thẻ danh sách KH</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@section('script')
    <script src="/js/pages/account.js"></script>
@endsection
