@extends('layouts.master')

@section('title', 'Thông tin tài khoản bảo hiểm')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Thông tin tài khoản bảo hiểm'])
    <div class="widget-content searchable-container list">
        <form action="">
            <div class="card card-body">
                <div class="bg-infor bg-primary-subtle py-2 px-3 mb-2">
                    Thông tin đơn/hợp đồng bảo hiểm
                </div>
                <div class="info-contract" style="display: none;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên công ty:</div>
                                <div class="content">Cửu Long JOC</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên HĐ:</div>
                                <div class="content">DH CUU LONG 2023</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Số HĐ:</div>
                                <div class="content">01/2022HĐ CL</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Ngày ký HĐ:</div>
                                <div class="content">01/01/2023</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Giá trị HĐ:</div>
                                <div class="content">0 <span>đồng</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-xl-3 mb-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Thời hạn từ:</div>
                                <div class="content">01/01/2023 <span>đến:</span> 31/12/2023</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên niên hạn:</div>
                                <div class="content">CL 2023</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Tên công ty</label>
                            <select class="form-select mr-sm-2" id="companySelect" name="company">
                                @foreach ($companyList as $company)
                                    <option value="{{ $company->id }}"
                                        {{ old('companySelect', $companyList[0]->id) == $company->id ? 'selected' : '' }}>
                                        {{ $company->company_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Niên hạn</label>
                            <select class="form-select mr-sm-2" id="periodSelect" name="period">
                                @foreach ($periodList as $period)
                                    <option value="{{ $period->id }}"
                                        {{ old('period', $periodList[0]->id) == $period->id ? 'selected' : '' }}>
                                        {{ $period->period_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Tên hợp đồng</label>
                            <select class="form-select mr-sm-2" id="contractSelect" name="contract">
                                @foreach ($contractList as $contract)
                                    <option value="{{ $contract->id }}"
                                        {{ old('contract', $contractList[0]->id) == $contract->id ? 'selected' : '' }}>
                                        {{ $contract->contract_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Loại tài khoản</label>
                            <select name="customer_group" class="form-select">
                                <option value="-1">Toàn bộ</option>
                                @foreach ($customerGroupList as $customerGroup)
                                    <option value="{{ $customerGroup->id }}"
                                        {{ old('customer_group') == $customerGroup->id ? 'selected' : '' }}>
                                        {{ $customerGroup->group_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Khách hàng chủ TK</label>
                            <select name="account" class="form-select">
                                @foreach (ACCOUNT_STATUS_LIST as $value => $label)
                                    <option value="{{ $value }}"
                                        {{ old('account', ACCOUNT_ALL) == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Khóa</label>
                            <select name="active" class="form-select">
                                @foreach (ACTIVE_STATUS_LIST as $value => $label)
                                    <option value="{{ $value }}"
                                        {{ old('active', ACTIVE_ALL) == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Địa chỉ Email</label>
                            <select name="email" class="form-select">
                                @foreach (EMAIL_STATUS_LIST as $value => $label)
                                    <option value="{{ $value }}"
                                        {{ old('email', EMAIL_ALL) == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Từ khoá</label>
                            <input type="search" class="form-control" value="" name="keyword" id="input-search"
                                placeholder="Tìm kiếm...">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn btn-success">Tìm kiếm</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table search-table align-middle text-nowrap">
                    <thead class="header-item">
                        <th class="text-center">
                            <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                        </th>
                        <th class="text-center">STT</th>
                        <th class="text-center">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                        stroke-width="0" fill="currentColor"></path>
                                    <path
                                        d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                        stroke-width="0" fill="currentColor"></path>
                                </svg></span>
                        </th>
                        <th>Số thẻ BH</th>
                        <th>Tên khách hàng</th>
                        <th></th>
                        <th class="text-center">Chủ TK</th>
                        <th class="text-center">Loại khách hàng</th>
                        <th class="text-center">Thao tác</th>
                    </thead>
                    <tbody>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">1</td>
                            <td class="text-center">
                                <a href="mailto:">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P054/13/000016</td>
                            <td>Châu Kim Anh</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">2</td>
                            <td class="text-center">
                                <a href="mailto:">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P054/13/000017</td>
                            <td>Bùi Quang Anh</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">3</td>
                            <td class="text-center">
                                <a href="mailto:">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P054/13/000018</td>
                            <td>Bùi Quang Ngọc</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">4</td>
                            <td class="text-center">
                                <a href="mailto:bui.ngoc.bich@cljoc.com.vn">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>5P807/19/000378</td>
                            <td>Bùi Ngọc Bích</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" checked="" /></td>
                            <td class="text-center">B</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">5</td>
                            <td class="text-center">
                                <a href="mailto:">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P054/13/001063</td>
                            <td>Trần Thị Thanh Tuyền</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">6</td>
                            <td class="text-center">
                                <a href="mailto:">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P054/13/001064</td>
                            <td>Nguyễn Trần Gia Bảo</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">7</td>
                            <td class="text-center">
                                <a href="mailto:">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P054/13/001065</td>
                            <td>Nguyễn Trần Gia Nguyên</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">8</td>
                            <td class="text-center">
                                <a href="mailto:nguyen.van.hoang@cljoc.com.vn">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P054/13/000330</td>
                            <td>Nguyễn Văn Hoàng</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" checked="" /></td>
                            <td class="text-center">B</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">9</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000375</td>
                            <td>Nguyễn Khắc Hoài An</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">10</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000376</td>
                            <td>Nguyễn Quang Anh</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">11</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000377</td>
                            <td>Nguyễn Huy Anh</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">12</td>
                            <td class="text-center">
                                <a href="mailto:diembln@cljoc.com.vn">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000030</td>
                            <td>Bùi Lê Ngọc Diễm</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" checked="" /></td>
                            <td class="text-center">B</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">13</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000378</td>
                            <td>Hồ Hữu Phiếm</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">14</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000379</td>
                            <td>Hồ Cao Thụy Khanh</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">15</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000380</td>
                            <td>Hồ Cao Huy Khánh</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">16</td>
                            <td class="text-center">
                                <a href="mailto:clhuyen@cljoc.com.vn">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000031</td>
                            <td>Cao Lệ Huyền</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" checked="" /></td>
                            <td class="text-center">B</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">17</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000381</td>
                            <td>Lương Văn Cương</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">18</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000382</td>
                            <td>Lương Đức Chính</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">19</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000383</td>
                            <td>Lương Trúc Ngân</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                        <tr role="row">
                            <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                            <td class="text-center">20</td>
                            <td class="text-center">
                                <a href="mailto: ">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-mail-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                                stroke-width="0" fill="currentColor"></path>
                                            <path
                                                d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg></span>
                                </a>
                            </td>
                            <td>15P897/16/000384</td>
                            <td>Lương Trúc Quỳnh</td>
                            <td class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg></span>
                            </td>
                            <td class="text-center"><input type="checkbox" disabled="" /></td>
                            <td class="text-center">A</td>
                            <td class="text-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                    </span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/pages/account.js"></script>
@endsection
