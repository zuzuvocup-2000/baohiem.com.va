@extends('layouts.master')

@section('title', 'Tài khoản bảo hiểm')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Tài khoản bảo hiểm'])
    <div class="widget-content searchable-container list insurance-account">
        <form action="">
            <div class="card card-body">
                <h5>Cập nhật tài khoản khách hàng</h5>
                <div class="row mb-3">
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="companySelect">Tên công ty</label>
                            <select class="form-select company-search mr-sm-2" id="companySelect" name="companySelect" style="width: calc(100% - 100px);">
                                <option value="20067" selected="">
                                    CỬU LONG JOC 2
                                </option>
                                <option value="20058">
                                    PVFCCO
                                </option>
                                <option value="20059">
                                    TRƯỜNG SƠN JOC
                                </option>
                                <option value="49">
                                    CỬU LONG JOC (O)
                                </option>
                                <option value="20066">
                                    TALISMAN
                                </option>
                                <option value="20068">
                                    GAS SOUTH (KMN)
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                            <select class="form-select period-search mr-sm-2" id="periodSelect" name="periodSelect" style="width: calc(100% - 100px);">
                                <option value="10079" selected="">
                                    CL2023
                                </option>
                                <option value="10077">
                                    CL2022
                                </option>
                                <option value="10078">
                                    Gas2022
                                </option>
                                <option value="10075">
                                    CL2021
                                </option>
                                <option value="10076">
                                    Gas2021
                                </option>
                                <option value="10074">
                                    Gas2020
                                </option>
                                <option value="10073">
                                    2020-2020
                                </option>
                                <option value="10072">
                                    2019-2020
                                </option>
                                <option value="10071">
                                    2018-2019
                                </option>
                                <option value="10070">
                                    2017-2018
                                </option>
                                <option value="10069">
                                    2016-2017
                                </option>
                                <option value="10068">
                                    2015-2016
                                </option>
                                <option value="10067">
                                    2014-2015
                                </option>
                                <option value="10066">
                                    2013-2014
                                </option>
                                <option value="10065">
                                    2012-2013
                                </option>
                                <option value="10064">
                                    2011-2012
                                </option>
                                <option value="64">
                                    2010-2011
                                </option>
                                <option value="63">
                                    2007-2008
                                </option>
                                <option value="62">
                                    2006-2007
                                </option>
                                <option value="61">
                                    2005-2006
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="companySelect">Hợp đồng</label>
                            <select class="form-select contract-search mr-sm-2" id="contractSelect" name="contractSelect" style="width: calc(100% - 100px);"> </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-1">
                        <button type="button" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </div>
                <div class="bg-infor bg-info-insurance py-2 px-3 mb-3">
                    Thông tin đơn/hợp đồng bảo hiểm
                </div>
                <div class="info-contract mb-3" style="display: none;">
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên công ty:</div>
                                <div class="content">Cửu Long JOC</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Tên HĐ:</div>
                                <div class="content">DH CUU LONG 2023</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-xl-3">
                            <div class="info-contract-item">
                                <div class="title me-2">Số HĐ:</div>
                                <div class="content">01/2022HĐ CL</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-xl-3">
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
                        <div class="col-xs-12 col-sm-12 col-xl-3">
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

                <div class="row mb-3">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center">
                            <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                            <select class="form-select period-search mr-sm-2" id="periodSelect" name="periodSelect" style="width: calc(100% - 100px);">
                                <option value="10079" selected="">
                                    CL2023
                                </option>
                                <option value="10077">
                                    CL2022
                                </option>
                                <option value="10078">
                                    Gas2022
                                </option>
                                <option value="10075">
                                    CL2021
                                </option>
                                <option value="10076">
                                    Gas2021
                                </option>
                                <option value="10074">
                                    Gas2020
                                </option>
                                <option value="10073">
                                    2020-2020
                                </option>
                                <option value="10072">
                                    2019-2020
                                </option>
                                <option value="10071">
                                    2018-2019
                                </option>
                                <option value="10070">
                                    2017-2018
                                </option>
                                <option value="10069">
                                    2016-2017
                                </option>
                                <option value="10068">
                                    2015-2016
                                </option>
                                <option value="10067">
                                    2014-2015
                                </option>
                                <option value="10066">
                                    2013-2014
                                </option>
                                <option value="10065">
                                    2012-2013
                                </option>
                                <option value="10064">
                                    2011-2012
                                </option>
                                <option value="64">
                                    2010-2011
                                </option>
                                <option value="63">
                                    2007-2008
                                </option>
                                <option value="62">
                                    2006-2007
                                </option>
                                <option value="61">
                                    2005-2006
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center form-search-absolute">
                            <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                            <input type="search" name="keyword" class="form-control form-search" value="" placeholder="Tìm kiếm..." style="width: calc(100% - 100px);">
                            <button class="btn-primary btn btn-search">Tìm kiếm</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-xl-4">
                        <div class="btn-input" style="text-align: right;">
                            <button type="button" class="btn btn-warning">Nhập khách hàng</button>
                        </div>
                    </div>
                </div>
                <h5>Nhập danh sách từ File Excel</h5>
                <div class="row mb-3">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div class="form-group d-flex align-items-center">
                            <input class="form-control" type="file" id="formFile" name="file" value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                        <div>
                            <button class="me-2 btn btn-dark" type="button">Dowload file mẫu DS KH chính</button>
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
                            <button class="me-2 btn btn-dark" type="button">Dowload file đổi số thẻ KH</button>
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
