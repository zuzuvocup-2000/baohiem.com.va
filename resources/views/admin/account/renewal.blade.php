@extends('layouts.master')

@section('title', 'Gia hạn tài khoản')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Gia hạn tài khoản'])
    <div class="widget-content searchable-container list insurance-account">
        <form action="">
            <div class="card card-body">
                <div class="row mb-3">
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label class="d-inline-block" style="width: 100px;" for="companySelect">Tên công ty</label>
                            <select class="form-select company-search mr-sm-2" id="companySelect" name="companySelect">
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
                        <div class="form-group">
                            <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                            <select class="form-select period-search mr-sm-2" id="periodSelect" name="periodSelect">
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
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label class="d-inline-block" style="width: 100px;" for="companySelect">Hợp đồng</label>
                            <select class="form-select contract-search mr-sm-2" id="contractSelect" name="contractSelect"> </select>
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
                                                <input class="inputField form-control" type="text" name="hd" value="CỬU LONG JOC (O)" data-original-value="CỬU LONG JOC (O)" disabled="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số hợp đồng:
                                                </th>
                                                <td>
                                                <input class="inputField form-control" type="text" name="hd" value="CỬU LONG JOC (O)" data-original-value="CỬU LONG JOC (O)" disabled="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Ngày ký hợp đồng:
                                                </th>
                                                <td><input class="inputField form-control singledate" type="text" name="phone" value="" data-original-value="" disabled></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Tên niên hạn:</th>
                                                <td>
                                                <input class="inputField form-control" type="text" name="company" value="CL2023" data-original-value="CL2023" disabled="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Thời hạn từ:
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control daterange" id="dateInput" disabled value="13/03/2022 - 08/08/2024">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số Khách hàng chính:
                                                </th>
                                                <td><input class="inputField form-control" type="text" name="clientmain" value="5" data-original-value="5" disabled=""></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                Số Khách hàng phụ:
                                                </th>
                                                <td><input class="inputField form-control" type="text" name="clien" value="7" data-original-value="7" disabled=""></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Giá trị hợp đồng: 
                                                </th>
                                                <td><input class="inputField form-control" type="text" name="vnd" value="0" data-original-value="5" disabled=""></td>
                                                <td>VNĐ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6">
                            <div class="renewal-block-right">
                                <h5>Tên công ty: Cửu Long JOC 2</h5>
                                <div class="bg-infor bg-info-insurance py-2 px-3 mb-3 text-center">
                                    Hợp đồng mới
                                </div>
                                <div class="system-table table-responsive">
                                    <table class="table search-table align-middle text-nowrap">
                                        <tbody>
                                            <tr>
                                                <th>Tên hợp đồng:</th>
                                                <td>
                                                <input class="inputField form-control" type="text" name="hd" value="" data-original-value="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số hợp đồng:
                                                </th>
                                                <td>
                                                <input class="inputField form-control" type="text" name="hd" value="" data-original-value="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Ngày ký hợp đồng:
                                                </th>
                                                <td><input class="inputField form-control singledate" type="text" name="phone" value="" data-original-value=""></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Tên niên hạn:</th>
                                                <td>
                                                <input class="inputField form-control" type="text" name="company" value="" data-original-value="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Thời hạn từ:
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control daterange" id="dateInput"  value="">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Số Khách hàng chính:
                                                </th>
                                                <td><input class="inputField form-control" type="text" name="clientmain" value="" data-original-value=""></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                Số Khách hàng phụ:
                                                </th>
                                                <td><input class="inputField form-control" type="text" name="clien" value="" data-original-value="7"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Giá trị hợp đồng: 
                                                </th>
                                                <td><input class="inputField form-control" type="text" name="vnd" value="" data-original-value=""></td>
                                                <td>VNĐ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="renewal-block-bottom text-center">
                                <button type="button" class="btn btn-primary me-2">Save</button>
                                <button type="button" class="btn btn-primary">Reset</button>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="renewal-handle">
                    <h5>Danh sách khách hàng</h5>
                    <div class="row mb-3">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                            <div class="form-group">
                                <label class="d-inline-block" style="width: 100px;" for="periodSelect">Niên hạn</label>
                                <select class="form-select period-search mr-sm-2" id="periodSelect" name="periodSelect">
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
                            <div class="form-group">
                                <label class="d-inline-block" style="width: 100px;" for="companySelect">Hợp đồng</label>
                                <select class="form-select contract-search mr-sm-2" id="contractSelect" name="contractSelect"> </select>
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
                            <div class="btn-group">
                                <button class="me-2 btn btn-dark" type="button">Gia hạn</button>
                                <button class="btn btn-warning" type="button">Dowload File Gia hạn</button>
      
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-xl-4">
                            <div class="btn-group">
                                <button class="me-2 btn btn-dark" type="button">Xuất danh sách ra excel</button>
                                <button class="btn btn-warning" type="button">Load Danh sách</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@section('script')
<script src="/assets/js/datetimepicker/moment.min.js"></script>
<script src="/assets/js/datetimepicker/daterangepicker.js"></script>
<script src="/assets/js/datetimepicker/daterangepicker-init.js"></script>
<script src="/assets/js/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="/assets/js/datetimepicker/datepicker-init.js"></script>

@endsection
