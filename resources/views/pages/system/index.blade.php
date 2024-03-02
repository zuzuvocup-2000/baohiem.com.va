@extends('layouts.master')

@section('title', 'Cập nhật thông tin')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Cập nhật thông tin'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0"
                            id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active"
                                    id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                                    type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
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
                                    <span class="d-none d-md-block">Công ty - Niên hạn - Gói bảo hiểm (plan)</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                    id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers"
                                    type="button" role="tab" aria-controls="pills-followers" aria-selected="false"
                                    tabindex="-1">
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
                                    <span class="d-none d-md-block">Cập nhật hợp đồng - Phân loại khách hàng</span>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="mb-3">
                                    <h5 class="mb-0">Cập nhật thông tin hệ thống</h5>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-2">
                                        <!-- Nav tabs -->
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-client-tab" data-bs-toggle="pill"
                                                href="#v-pills-client" role="tab" aria-controls="v-pills-client"
                                                aria-selected="true"> Công ty Khách hàng </a>
                                            <a class="nav-link" id="v-pills-duration-tab" data-bs-toggle="pill"
                                                href="#v-pills-duration" role="tab" aria-controls="v-pills-duration"
                                                aria-selected="false" tabindex="-1"> Niên hạn </a>
                                            <a class="nav-link" id="v-pills-insurance-tab" data-bs-toggle="pill"
                                                href="#v-pills-insurance" role="tab" aria-controls="v-pills-insurance"
                                                aria-selected="false" tabindex="-1"> Gói bảo hiểm </a>
                                            <a class="nav-link" id="v-pills-hospital-tab" data-bs-toggle="pill"
                                                href="#v-pills-hospital" role="tab" aria-controls="v-pills-hospital"
                                                aria-selected="false" tabindex="-1"> Phân nhóm khách hàng theo bệnh viện
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-client" role="tabpanel"
                                                aria-labelledby="v-pills-client-tab">
                                                <div class="table-responsive">
                                                    @include('pages.system.components.company')
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-duration" role="tabpanel"
                                                aria-labelledby="v-pills-duration-tab">
                                                <div class="table-responsive">
                                                    @include('pages.system.components.period')
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-insurance" role="tabpanel"
                                                aria-labelledby="v-pills-insurance-tab">
                                                @include('pages.system.components.package-detail')
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-hospital" role="tabpanel"
                                                aria-labelledby="v-pills-insurance-tab">
                                                <div class="table-responsive">
                                                    @include('pages.system.components.customer-type')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-followers" role="tabpanel"
                                aria-labelledby="pills-followers-tab" tabindex="0">
                                <div class="mb-3">
                                    <h5 class="mb-0">Cập nhật thông tin hợp đồng</h5>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-2">
                                        <!-- Nav tabs -->
                                        <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-info-tab" data-bs-toggle="pill"
                                                href="#v-pills-info" role="tab" aria-controls="v-pills-info"
                                                aria-selected="true"> Thông tin hợp đồng </a>
                                            <a class="nav-link" id="v-pills-clientuser-tab" data-bs-toggle="pill"
                                                href="#v-pills-clientuser" role="tab"
                                                aria-controls="v-pills-clientuser" aria-selected="false" tabindex="-1">
                                                Phân loại khách hàng </a>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-info" role="tabpanel"
                                                aria-labelledby="v-pills-info-tab">
                                                @include('pages.system.components.contract')
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-clientuser" role="tabpanel"
                                                aria-labelledby="v-pills-clientuser-tab">
                                                @include('pages.system.components.customer-group')
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
    <script src="/assets/js/datetimepicker/moment.min.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker-init.js"></script>
    <script src="/assets/js/datetimepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/datetimepicker/datepicker-init.js"></script>
@endsection
