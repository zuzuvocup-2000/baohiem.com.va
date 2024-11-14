@extends('layouts.master')

@section('title', 'Chi bảo hiểm')

@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
@include('partial.breadcrumb', ['breadcrumbTitle' => 'Chi bảo hiểm'])
<div class="widget-content searchable-container list insurance-account">
    @include('admin.insurance-expenses.common.filter')
    <div class="card card-body">
        @include('admin.insurance-expenses.common.menu')
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="expenses1" role="tabpanel" aria-labelledby="expenses-tab"
                tabindex="0">
                <div class="table-responsive">
                    <table id="" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                        <thead class="text-dark fs-4">
                            <tr role="row">
                                <th>
                                    Tên chủ tài khoản
                                </th>
                                <th>
                                    Số thẻ Bảo hiểm
                                </th>
                                <th>Tên khách hàng</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th class="text-center">Giới hạn đầu kỳ (đồng)</th>
                                <th class="text-center">Chi trong kỳ</th>
                                <th class="text-center">Giới hạn còn lại (đồng)</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($accountList) && is_array($accountList) && count($accountList))
                            @foreach ($accountList as $key => $item)
                            <tr role="row">
                                <td rowspan="{{ count($item['data']) }}">
                                    {{ $item['fullname'] }}
                                </td>
                                @if (isset($item['data']) && is_array($item['data']) && count($item['data']))
                                @php
                                $count = 0;
                                @endphp
                                @foreach ($item['data'] as $itemChild)
                                @if ($count == 0)
                                <td>
                                    {{ $itemChild->card_number }}
                                </td>
                                <td>{{ $itemChild->full_name }}</td>
                                <td>{{ $itemChild->gender }}</td>
                                <td>{{ $itemChild->birth_year }}</td>
                                <td class="text-center">
                                    {{ number_format($itemChild->moneyStartPeriod) }}
                                </td>
                                <td class="text-center">
                                    {{ number_format($itemChild->totalAmountSpent) }}
                                </td>
                                <td class="text-center">
                                    {{ number_format($itemChild->theRemainingAmount) }}
                                </td>
                                <td>
                                    <h6 class="fs-4 fw-semibold mb-0">
                                        <div class="btn-group justify-content-center d-flex">
                                            <button class="btn btn-success me-1 btn-get-detail" data-bs-toggle="modal"
                                                data-bs-target="#detailclient1" data-id="{{ $itemChild->id }}">
                                                <span class="icon-item-icon">
                                                    <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                </span>
                                            </button>
                                        </div>
                                    </h6>
                                </td>
                                @php
                                $count++;
                                @endphp
                                @endif
                                @endforeach
                                @endif
                            </tr>
                            @if (isset($item['data']) && is_array($item['data']) && count($item['data']))
                            @php
                            $countChild = 0;
                            @endphp
                            @foreach ($item['data'] as $itemChild)
                            @if ($countChild != 0)
                            <td>
                                {{ $itemChild->card_number }}
                            </td>
                            <td>{{ $itemChild->full_name }}</td>
                            <td>{{ $itemChild->gender }}</td>
                            <td>{{ $itemChild->birth_year }}</td>
                            <td class="text-center">
                                {{ 0 }}
                            </td>
                            <td class="text-center">
                                {{ number_format($itemChild->totalAmountSpent) }}
                            </td>
                            <td class="text-center">
                                {{ 0 }}
                            </td>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">
                                    <div class="btn-group justify-content-center d-flex">
                                        <button class="btn btn-success me-1 btn-get-detail" data-bs-toggle="modal"
                                            data-bs-target="#detailclient1" data-id="{{ $itemChild->id }}">
                                            <span class="icon-item-icon">
                                                <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                            </span>
                                        </button>
                                    </div>
                                </h6>
                            </td>
                            @endif
                            @php
                            $countChild++;
                            @endphp
                            @endforeach
                            @endif
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                @include('admin.insurance-expenses.common.modal', compact(['hospitalList', 'paymentTypeList']))
            </div>
        </div>
    </div>
</div>

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