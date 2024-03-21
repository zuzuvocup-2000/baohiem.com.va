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
                                        {{ isset($_GET['company']) && $_GET['company']  == $company->id ? 'selected' : '' }}>
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
                                <?php if(isset($_GET['period']) && $_GET['period'] == $period->id) $periodId = $period->id; ?>
                                    <option value="{{ $period->id }}"
                                        {{ isset($_GET['period']) && $_GET['period']  == $period->id ? 'selected' : '' }}>
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
                                <?php if(isset($_GET['contract']) && $_GET['contract'] == $contract->id) $contractId = $contract->id; ?>
                                <option value="{{ $contract->id }}"
                                        {{ isset($_GET['contract']) && $_GET['contract'] == $contract->id ? 'selected' : '' }}>
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
                                        {{ isset($_GET['customer_group']) && $_GET['customer_group'] == $customerGroup->id ? 'selected' : '' }}>
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
                                        {{ isset($_GET['account']) && $_GET['account'] == $value ? 'selected' : '' }}>
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
                                        {{ isset($_GET['active']) && $_GET['active'] == $value ? 'selected' : '' }}>
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
                                        {{ isset($_GET['email']) && $_GET['email'] == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 mb-3">
                        <div class="form-field">
                            <label for="" class="mb-1">Từ khoá</label>
                            <input type="search" class="form-control" value="{{ isset($_GET['email']) ? $_GET['keyword'] : '' }}" name="keyword" id="input-search"
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
                <table class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                    <thead class="header-item">
                        <th class="text-center">
                            <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                        </th>
                        <th class="text-center">STT</th>
                        <th class="text-center">
                            <span class="icon-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z"
                                        stroke-width="0" fill="currentColor"></path>
                                    <path
                                        d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z"
                                        stroke-width="0" fill="currentColor"></path>
                                </svg>
                            </span>
                        </th>
                        <th>Số thẻ BH</th>
                        <th>Tên khách hàng</th>
                        <th></th>
                        <th class="text-center">Chủ TK</th>
                        <th class="text-center">Loại khách hàng</th>
                        <th class="text-center">Thao tác</th>
                    </thead>
                    <tbody>
                        @foreach ($accountList as $key => $account)
                            <tr role="row" data-id="{{ $account->id }}">
                                <th class="text-center"><input class="toggleCheckbox" value="{{ $account->id }}" name="id[]" type="checkbox" /></th>
                                <td class="text-center">{{ ++$key }}</td>
                                <td class="text-center">
                                    <a href="mailto:{{ $account->email }}">
                                        <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg"
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
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                                <td>{{ $account->card_number }}</td>
                                <td>{{ $account->full_name }}</td>
                                <td class="text-center">
                                    <span class="icon-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        </svg>
                                    </span>
                                </td>
                                <td class="text-center"><input type="checkbox" disabled="" {{ $account->account_holder ? 'checked' : '' }}/></td>
                                <td class="text-center">{{ $account->group_name }}</td>
                                <td class="text-center">
                                    <a class="btn btn-success me-1" href="{{ route('account.detail', [
                                        'id' => $account->id,
                                        'periodId' => (isset($periodId) ? $periodId : $periodList->first()->id ),
                                        'contractId' => (isset($contractId) ? $contractId : $contractList->first()->id )
                                        ],
                                        ) }}">
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 3v4a1 1 0 0 0 1 1h4"></path><path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5"></path><path d="M16.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path><path d="M18.5 19.5l2.5 2.5"></path></svg></span>
                                    </a>
                                   
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $accountList->onEachSide(1)->render('pagination::bootstrap-5') !!}
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/pages/account.js"></script>
@endsection
