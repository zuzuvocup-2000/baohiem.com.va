@extends('layouts.master')

@section('title', 'Gia hạn tài khoản')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Gia hạn tài khoản'])
    <div class="widget-content searchable-container list insurance-account">
        <div class="card card-body">
            <form action="{{ route('renewal.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-xs-12 col-md-4">
                        <div class="form-field">
                            <label for="" class="mb-1">Tên công ty</label>
                            <select class="form-select mr-sm-2" id="companySelect" name="company">
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
                        <div class="form-field">
                            <label for="" class="mb-1">Niên hạn</label>
                            <select class="form-select mr-sm-2" id="periodSelect" name="period">
                                @foreach ($periodListByCompany as $period)
                                    <option value="{{ $period->id }}"
                                        {{ isset($_GET['period']) && $_GET['period'] == $period->id ? 'selected' : '' }}>
                                        {{ $period->period_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form-field">
                            <label for="" class="mb-1">Tên hợp đồng</label>
                            <select class="form-select mr-sm-2 {{ $errors->has('contract') ? 'is-invalid' : '' }}"
                                id="contractSelect" name="contract">
                                @foreach ($contractList as $contract)
                                    <option value="{{ $contract->id }}"
                                        {{ isset($_GET['contract']) && $_GET['contract'] == $contract->id ? 'selected' : '' }}>
                                        {{ $contract->contract_name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('contract'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('contract') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="bg-infor bg-info-insurance py-2 px-3 mb-3">
                    Thông tin đơn/hợp đồng gia hạn
                </div>
                <div class="renewal-container mb-3">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6">
                            <div class="renewal-block-left">
                                <h5>Gia hạn hợp đồng</h5>
                                <div class="bg-infor bg-info-insurance py-2 px-3 mb-3 text-center">
                                    Hợp đồng cũ
                                </div>
                                <div class="system-table table-responsive">
                                    <table class="table search-table align-middle text-nowrap">
                                        <tbody>
                                            <tr>
                                                <th>Tên hợp đồng:</th>
                                                <td>
                                                    <input class="inputField form-control" type="text"
                                                        name="contract_name" value="{{ $contractDetail->contract_name }}"
                                                        data-original-value="{{ $contractDetail->contract_name }}"
                                                        disabled="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số hợp đồng:
                                                </th>
                                                <td>
                                                    <input class="inputField form-control" type="text"
                                                        name="contract_supplement_number"
                                                        value="{{ $contractDetail->contract_supplement_number }}"
                                                        data-original-value="{{ $contractDetail->contract_supplement_number }}"
                                                        disabled="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Ngày ký hợp đồng:
                                                </th>
                                                <td><input class="inputField form-control singledate" type="text"
                                                        name="signature_date"
                                                        value="{{ date('d/m/Y', strtotime($contractDetail->signature_date)) }}"
                                                        data-original-value="" disabled></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Tên niên hạn:</th>
                                                <td>
                                                    <input class="inputField form-control" type="text" name="period_name"
                                                        value="{{ $contractDetail->period_name }}"
                                                        data-original-value="{{ $contractDetail->period_name }}"
                                                        disabled="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Thời hạn từ:
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control daterange" name="time"
                                                        disabled
                                                        value="{{ date('d/m/Y', strtotime($contractDetail->effective_time)) }} - {{ date('d/m/Y', strtotime($contractDetail->end_time)) }}">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số Khách hàng chính:
                                                </th>
                                                <td><input class="inputField form-control int" type="text" name="clientmain"
                                                        value="{{ $customerPrimary }}"
                                                        data-original-value="{{ $customerPrimary }}" disabled=""></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số Khách hàng phụ:
                                                </th>
                                                <td><input class="inputField form-control int" type="text" name="clien"
                                                        value="{{ $customerSecondary }}"
                                                        data-original-value="{{ $customerSecondary }}" disabled=""></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Giá trị hợp đồng:
                                                </th>
                                                <td><input class="inputField form-control" type="text"
                                                        name="total_contract_value"
                                                        value="{{ $contractDetail->total_contract_value }}"
                                                        data-original-value="{{ $contractDetail->total_contract_value }}"
                                                        disabled=""></td>
                                                <td>VNĐ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6">
                            <div class="renewal-block-right">
                                <h5>Tên công ty: {{ $companyName }}</h5>
                                <div class="bg-infor bg-info-insurance py-2 px-3 mb-3 text-center">
                                    Hợp đồng mới
                                </div>
                                <div class="system-table table-responsive">
                                    <table class="table search-table align-middle text-nowrap">
                                        <tbody>
                                            <tr>
                                                <th>Tên hợp đồng:</th>
                                                <td>
                                                    <input
                                                        class="inputField form-control {{ $errors->has('contract_name') ? 'is-invalid' : '' }}"
                                                        type="text" name="contract_name"
                                                        value="{{ old('contract_name') }}" data-original-value="">
                                                    @if ($errors->has('contract_name'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('contract_name') }}
                                                        </div>
                                                    @endif
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số hợp đồng:
                                                </th>
                                                <td>
                                                    <input
                                                        class="inputField form-control {{ $errors->has('contract_supplement_number') ? 'is-invalid' : '' }}"
                                                        type="text" name="contract_supplement_number"
                                                        value="{{ old('contract_supplement_number') }}"
                                                        data-original-value="">
                                                    @if ($errors->has('contract_supplement_number'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('contract_supplement_number') }}
                                                        </div>
                                                    @endif
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Ngày ký hợp đồng:
                                                </th>
                                                <td>
                                                    <input
                                                        class="inputField form-control singledate {{ $errors->has('signature_date') ? 'is-invalid' : '' }}"
                                                        type="text" name="signature_date"
                                                        value="{{ old('signature_date') }}" data-original-value="">
                                                    @if ($errors->has('signature_date'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('signature_date') }}
                                                        </div>
                                                    @endif
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Tên niên hạn:</th>
                                                <td>
                                                    <select
                                                        class="form-select mr-sm-2 {{ $errors->has('period_id') ? 'is-invalid' : '' }}"
                                                        name="period_id">
                                                        @foreach ($periodList as $period)
                                                            <option value="{{ $period->id }}"
                                                                {{ old('signature_date') == $period->id ? 'selected' : (isset($_GET['period_contract']) && $_GET['period_contract'] == $period->id ? 'selected' : '') }}>
                                                                {{ $period->period_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('period_id'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('period_id') }}
                                                        </div>
                                                    @endif
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Thời hạn từ:
                                                </th>
                                                <td>
                                                    <input type="text"
                                                        class="form-control daterange {{ $errors->has('time_range') ? 'is-invalid' : '' }}"
                                                        name="time_range" value="{{ old('time_range') }}">
                                                    @if ($errors->has('time_range'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('time_range') }}
                                                        </div>
                                                    @endif
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số Khách hàng chính:
                                                </th>
                                                <td><input class="inputField form-control int" type="text"
                                                        name="clientmain" value="" data-original-value=""
                                                        disabled=""></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số Khách hàng phụ:
                                                </th>
                                                <td><input class="inputField form-control int" type="text" name="clien"
                                                        value="" data-original-value="" disabled=""></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Giá trị hợp đồng:
                                                </th>
                                                <td>
                                                    <input
                                                        class="inputField form-control int {{ $errors->has('total_contract_value') ? 'is-invalid' : '' }}"
                                                        type="text" name="total_contract_value"
                                                        value="{{ old('total_contract_value') }}" data-original-value="">
                                                    @if ($errors->has('total_contract_value'))
                                                        <div class="invalid-feedback">
                                                            {{ $errors->first('total_contract_value') }}
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>VNĐ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="renewal-block-bottom text-center">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <button type="button" class="btn btn-primary">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="renewal-handle">
                <h5>Danh sách khách hàng</h5>
                <div class="row mb-3">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group">
                            <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group">
                            <label class="d-inline-block" style="width: 100px;" for="contractSelect">Hợp đồng</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center">
                            <input class="form-control" type="file" id="formFile" name="file" value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div>
                            <button class="me-2 btn btn-dark" type="button">Gia hạn</button>
                            <button class="btn btn-warning" type="button">Dowload File Gia hạn</button>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div>
                            <button class="me-2 btn btn-dark" type="button">Xuất danh sách ra excel</button>
                            <button class="btn btn-warning" type="button">Load Danh sách</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/assets/js/datetimepicker/moment.min.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker.js"></script>
    {{-- <script src="/assets/js/datetimepicker/daterangepicker-init.js"></script> --}}
    <script src="/assets/js/datetimepicker/bootstrap-datepicker.min.js"></script>
    {{-- <script src="/assets/js/datetimepicker/datepicker-init.js"></script> --}}
    <script src="/js/pages/renewal.js"></script>
@endsection
