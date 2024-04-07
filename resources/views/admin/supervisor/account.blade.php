@extends('layouts.master')

@section('title', 'Tài khoản khách hàng đã xóa')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Tài khoản khách hàng đã xóa'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0">
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('supervisor.insuranceExpenses') }}"
                                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6">
                                    <span class="icon-item-icon me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-time-duration-0" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 12v.01"></path>
                                            <path d="M21 12v.01"></path>
                                            <path d="M12 21v.01"></path>
                                            <path d="M12 3v.01"></path>
                                            <path d="M7.5 4.2v.01"></path>
                                            <path d="M16.5 4.2v.01"></path>
                                            <path d="M16.5 19.8v.01"></path>
                                            <path d="M7.5 19.8v.01"></path>
                                            <path d="M4.2 16.5v.01"></path>
                                            <path d="M19.8 16.5v.01"></path>
                                            <path d="M19.8 7.5v.01"></path>
                                            <path d="M4.2 7.5v.01"></path>
                                            <path d="M10 11v2a2 2 0 1 0 4 0v-2a2 2 0 1 0 -4 0z"></path>
                                        </svg>
                                    </span>
                                    <span class="d-none d-md-block">Chi bảo hiểm đã xóa</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('supervisor.account') }}"
                                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active">
                                    <span class="icon-item-icon me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-file-description" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                            <path
                                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                            </path>
                                            <path d="M9 17h6"></path>
                                            <path d="M9 13h6"></path>
                                        </svg>
                                    </span>
                                    <span class="d-none d-md-block">Tài khoản khách hàng đã xóa</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <form action="">
                                    <div class="row mb-3">
                                        <div class="col-8">
                                            <div class="row ">
                                                <div class="col-sm-12 col-md-6 col-xl-3">
                                                    @include('common/select-company', [
                                                        'companyId' => isset($_GET['company']) ? $_GET['company'] : 0,
                                                        'companyList' => $companyList,
                                                    ])
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-xl-3">
                                                    @include('common/select-period', [
                                                        'periodId' => isset($_GET['period']) ? $_GET['period'] : 0,
                                                        'periodList' => $periodList,
                                                        'attr' => [
                                                            'data-time-start' => isset($periodDetail->from_year)
                                                                ? date('01/01/' . $periodDetail->from_year)
                                                                : date('01/01/Y'),
                                                        ],
                                                    ])
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-xl-3">
                                                    @include('common/select-contract', [
                                                        'contractId' => isset($_GET['contract']) ? $_GET['contract'] : 0,
                                                        'contractList' => $contractList,
                                                    ])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-column-reverse">
                                            <button class="btn btn-primary w-100" type="submit">Tìm kiếm</button>
                                        </div>
                               
                                        <div class="col-2 d-flex  flex-column-reverse">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-success">Phục hồi dữ liệu</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="table-responsive">

                                    <table id="simpletable"
                                        class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                                        <thead class="text-dark fs-4">
                                            <tr role="row">
                                                <th>
                                                    <input type="checkbox" class="toggleAll custom-control-input"
                                                        id="customCheck1" />
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Số bảo hiểm</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0">Tên khách hàng</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">TK chính</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">Giới hạn đầu kỳ</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">Loại khách hàng</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">Tên user</h6>
                                                </th>
                                                <th>
                                                    <h6 class="fs-4 fw-semibold mb-0 text-center">Ngày thao tác</h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($accountList as $key => $account)
                                            @php
                                                $nameParts = explode(" ", $account->full_name); 
                                                if(count($nameParts) > 1) {
                                                    $lastName = $nameParts[count($nameParts) - 1];
                                                    $encryptedLastName = str_repeat("X", mb_strlen($lastName));
                                                    $nameParts[count($nameParts) - 1] = $encryptedLastName;
                                                }
                                                $displayName = implode(" ", $nameParts);
                                            @endphp
                                            <tr role="row" data-id="{{ $account->id }}">
                                                <td>
                                                    <input type="checkbox" class="toggleCheckbox custom-control-input"
                                                        id="packageDetail-1" name="id[]" value="1" />
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-normal fs-4 text-center">{{ ++$key }}</p>
                                                </td>
                                                <td>
                                                    {{ $account->card_number }}
                                                </td>
                                                <td>
                                                    {{ $displayName }}
                                                </td>
                                                <td class="text-center"><input type="checkbox" disabled=""
                                                    {{ $account->account_holder ? 'checked' : '' }} />
                                                </td>
                                                <td class="text-center">
                                                    {{ number_format(($account->package_price),0,',','.').' VNĐ' }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $account->group_name }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $account->account_id }}
                                                </td>
                                                <td class="text-center">
                                                    20/03/2024
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
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="/assets/js/datetimepicker/moment.min.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker-init.js"></script>
    <script src="/assets/js/datetimepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/datetimepicker/datepicker-init.js"></script>
@endsection
