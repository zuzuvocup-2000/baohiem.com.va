@extends('admin.layouts.master')

@section('title', 'Thông tin tài khoản bảo hiểm')

@section('content')
    @include('admin.partial.breadcrumb', ['breadcrumbTitle' => 'Thông tin tài khoản bảo hiểm'])
    <div class="widget-content searchable-container list">
        <form action="">
            <div class="card card-body">
                <div class="bg-infor bg-primary-subtle py-2 px-3 mb-2">
                    Thông tin đơn/hợp đồng bảo hiểm
                </div>
                <div class="info-contract mb-2" style="display: none;">
                    <div class="row mb-2">
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
                    <div class="row mb-2">
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
                <div class="row mb-2">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3">
                        <div class="form-field">
                            <label for="">Tên công ty</label>
                            <select name="company" class="form-select" id="exampleFormControlSelect1">
                                <option value="20067" selected="selected">CỬU LONG JOC 2</option>
                                <option value="20058">PVFCCO</option>
                                <option value="20059">TRƯỜNG SƠN JOC</option>
                                <option value="49">CỬU LONG JOC (O)</option>
                                <option value="20066">TALISMAN</option>
                                <option value="20068">GAS SOUTH (KMN)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3">
                        <div class="form-field">
                            <label for="">Niên hạn</label>
                            <select name="period" class="form-select" id="exampleFormControlSelect1">
                                <option value="10106" selected="selected">CL2023</option>
                                <option value="10104">CL2022</option>
                                <option value="10102">CL2021</option>
                                <option value="10098">2019-2020</option>
                                <option value="10097">2018-2019</option>
                                <option value="10095">2017-2018</option>
                                <option value="10093">2016-2017</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3">
                        <div class="form-field">
                            <label for="">Tên hợp đồng</label>
                            <select name="contract" class="form-select" id="exampleFormControlSelect1">
                                <option value="10161" selected="selected">DH Cuu Long 2023</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3">
                        <div class="form-field">
                            <label for="">Loại tài khoản</label>
                            <select name="user_catalogue" class="form-select" id="exampleFormControlSelect1">
                                <option value="0" selected="selected">Toàn bộ</option>
                                <option value="8">A</option>
                                <option value="10">A-inhouse</option>
                                <option value="9">B</option>
                                <option value="7">B-Dependant</option>
                                <option value="42">CBNV_GS</option>
                                <option value="39">LĐ1_GS</option>
                                <option value="41">LĐ2_GS</option>
                                <option value="14">Người thân</option>
                                <option value="12">Nhân viên</option>
                                <option value="25">Nhan vien - Nguoi than</option>
                                <option value="11">td</option>
                                <option value="5">VIP</option>
                                <option value="38">VIP_GS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3">
                        <div class="form-field">
                            <label for="">Khách hàng chủ TK</label>
                            <select name="account" class="form-select" id="exampleFormControlSelect1">
                                <option value="0" selected="selected">Toàn bộ</option>
                                <option value="1">Có</option>
                                <option value="2">Không</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3">
                        <div class="form-field">
                            <label for="">Khóa</label>
                            <select name="active" class="form-select" id="exampleFormControlSelect1">
                                <option value="0" selected="selected">Toàn bộ</option>
                                <option value="1">Có</option>
                                <option value="2">Không</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3">
                        <div class="form-field">
                            <label for="">Địa chỉ Email</label>
                            <select name="email" class="form-select" id="exampleFormControlSelect1">
                                <option value="0" selected="selected">Toàn bộ</option>
                                <option value="1">Có</option>
                                <option value="2">Không</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-body">
                <div class="row justify-content-between align-items-center m-b-10">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 text-end d-flex mt-3 mt-md-0">
                        <div class="action-btn show-btn" style="display: none">
                            <a href="javascript:void(0)"
                                class="delete-multiple bg-danger-subtle btn me-2 text-danger d-flex align-items-center font-medium">
                                <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                            </a>
                        </div>
                        <select class="form-select" id="exampleFormControlSelect1">
                            <option value="20" selected="selected">20 bản ghi</option>
                            <option value="30">30 bản ghi</option>
                            <option value="40">40 bản ghi</option>
                            <option value="50">50 bản ghi</option>
                            <option value="100">100 bản ghi</option>
                            <option value="200">200 bản ghi</option>
                            <option value="500">500 bản ghi</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3">
                        <input type="search" class="form-control" value="" id="input-search"  placeholder="Tìm kiếm...">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table search-table align-middle text-nowrap" >
                        <thead class="header-item">
                            <th class="text-center">
                                <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1">
                            </th>
                            <th class="text-center">STT</th>
                            <th class="text-center">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                            </th>
                            <th >Số thẻ BH</th>
                            <th >Tên khách hàng</th>
                            <th></th>
                            <th class="text-center">Chủ TK</th>
                            <th class="text-center" >Loại khách hàng</th>
                            <th class="text-center">Thao tác</th>
                        </thead>
                        <tbody>
                            <tr role="row">
                                <th class="text-center"><input class="toggleCheckbox" type="checkbox" /></th>
                                <td class="text-center">1</td>
                                <td class="text-center">
                                    <a href="mailto:">
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P054/13/000016</td>
                                <td>Châu Kim Anh</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P054/13/000017</td>
                                <td>Bùi Quang Anh</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P054/13/000018</td>
                                <td>Bùi Quang Ngọc</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>5P807/19/000378</td>
                                <td>Bùi Ngọc Bích</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P054/13/001063</td>
                                <td>Trần Thị Thanh Tuyền</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P054/13/001064</td>
                                <td>Nguyễn Trần Gia Bảo</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P054/13/001065</td>
                                <td>Nguyễn Trần Gia Nguyên</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P054/13/000330</td>
                                <td>Nguyễn Văn Hoàng</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000375</td>
                                <td>Nguyễn Khắc Hoài An</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000376</td>
                                <td>Nguyễn Quang Anh</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000377</td>
                                <td>Nguyễn Huy Anh</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000030</td>
                                <td>Bùi Lê Ngọc Diễm</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000378</td>
                                <td>Hồ Hữu Phiếm</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000379</td>
                                <td>Hồ Cao Thụy Khanh</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000380</td>
                                <td>Hồ Cao Huy Khánh</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000031</td>
                                <td>Cao Lệ Huyền</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000381</td>
                                <td>Lương Văn Cương</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000382</td>
                                <td>Lương Đức Chính</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000383</td>
                                <td>Lương Trúc Ngân</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor"></path><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor"></path></svg></span>
                                    </a>
                                </td>
                                <td>15P897/16/000384</td>
                                <td>Lương Trúc Quỳnh</td>
                                <td class="text-center">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg></span>
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
        </form>

    </div>
@endsection
@section('script')
    <script src="/js/pages/account.js"></script>
@endsection
