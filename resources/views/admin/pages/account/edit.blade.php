@extends('admin.layouts.master')

@section('title', __('Cập nhật thông tin khách hàng'))

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/libs/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    @include('admin.partial.breadcrumb', ['breadcrumbTitle' => __('Cập nhật thông tin khách hàng')])
    <div class="edit-info-page">
        <div class="row note-has-grid">
            <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4 single-note-item">
                        <span class="side-stick"></span>
                        <h5 class="card-title fw-semibold">Thông tin cá nhân khách hàng</h5>
                        <form class="form-detail-user" action="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Họ tên khách hàng:</label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" name="TENHO" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Điện thoại liên lạc:</label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" value="" name="DIENTHOAILIENLAC" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Email:</label>
                                        <div class="col-sm">
                                            <input type="email" class="form-control input-modal-account" value="" name="EMAIL" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Giới tính:</label>
                                        <div class="col-sm">
                                            <select name="select" class="form-control input-modal-account input-sm select100">
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h6 class="col-form-label">Tình trạng gia đình:</h6>
                                        <div class="col-sm form-radio">
                                            <div class="d-flex">
                                                <div class="form-check py-2 me-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="info1" value="option1" checked="">
                                                    <label class="form-check-label" for="info1">Độc thân</label>
                                                </div>
                                                <div class="form-check py-2 me-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="info2" value="option2">
                                                    <label class="form-check-label" for="info2">Kết hôn</label>
                                                </div>
                                                <div class="form-check py-2">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="info3" value="option3">
                                                    <label class="form-check-label" for="info3">Ly dị</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Ngày sinh:</label>
                                        <div class="col-sm">
                                            <div class="input-group">
                                                <input type="text" class="form-control input-modal-account singledate" name="namsinh" />
                                                <span class="input-group-addon">
                                                    <i class="icofont icofont-clock-time"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Số CCCD:</label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" name="SOCMND" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Ngày cấp:</label>
                                        <div class="col-sm">
                                            <div class="input-group">
                                                <input type="text" class="form-control input-modal-account singledate" name="NGAYCAPCMND" value="" />
                                                <span class="input-group-addon">
                                                    <i class="icofont icofont-clock-time"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Nơi cấp:</label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" name="NOICAP" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Địa chỉ cư ngụ: </label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" name="DIACHICUTRU" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Tỉnh thành phố:</label>
                                        <div class="col-sm">
                                            <select name="select" class="form-control input-sm input-modal-account select100">
                                                <option value="opt1">Hà Nội</option>
                                                <option value="opt2">TP.HCM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-12 w-100 position-relative overflow-hidden mb-0">
                        <div class="card note-has-grid">
                            <div class="card-body p-4 single-note-item">
                                <span class="side-stick"></span>
                                <h5 class="card-title fw-semibold">Thông tin công ty</h5>
                                <form class="form-detail-user" action="">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Tên công ty:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" name="TENCONGTY" value="" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Mã nhân viên:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" value="" name="staffcode" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 w-100 position-relative overflow-hidden mb-0">
                        <div class="card">
                            <div class="card-body p-4 single-note-item">
                                <span class="side-stick"></span>
                                <h5 class="card-title fw-semibold">Thông tin hợp đồng bảo hiểm</h5>
                                <form class="form-detail-user" action="">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Tên chủ tài khoản:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" name="TENHO" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Số thẻ chủ TK:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" name="sothe" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Số thẻ khách hàng:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" name="sothe" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group form-checkbox">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input success" type="checkbox" id="success2-check" value="option1" checked="">
                                                    <label class="form-check-label" for="success2-check">Thành viên Gia đình</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Tên hợp đồng:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" name="TENHOPDONG" value="" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Niên hạn:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" name="tennienhan" value="" disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Gói tài khoản:</label>
                                                <div class="col-sm">
                                                    <select name="select" class="form-control input-modal-account input-sm select100"> </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Ghi chú tài khoản:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" value="" name="GHICHU" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <label class="col-form-label">Phân loại KH:</label>
                                            <div class="col-sm">
                                                <select name="MAPHANNHOMKHACHHANG" class="form-control input-sm input-modal-account select100">
                                                    <option value="0">Toàn bộ</option>
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
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Loại khách hàng:</label>
                                                <div class="col-sm">
                                                    <select name="maphanloaiKH_BV" class="form-control input-sm input-modal-account select100">
                                                        <option value="32">Package 1: Nam&gt;40 </option>
                                                        <option value="33">Package 2: Nam&lt;40, NV cũ </option>
                                                        <option value="34">Package 3: Nam&lt;40, NV mới </option>
                                                        <option value="35">Package 4: Nữ độc thân, NV cũ</option>
                                                        <option value="36">Package 5: Nữ độc thân, NV mới </option>
                                                        <option value="37">Package 6: Nữ có gia đình, NV cũ </option>
                                                        <option value="38">Package 7: Nữ có gia đình, NV mới </option>
                                                        <option value="48">Nữ extra test</option>
                                                        <option value="50">Nam extra test </option>
                                                        <option value="51">Pakage 1: Nam </option>
                                                        <option value="52">Pakage 2: Nữ</option>
                                                        <option value="54">Package 2: Trẻ em</option>
                                                        <option value="55">Package 3: Vaccine</option>
                                                        <option value="56">Package 1: Nam &gt;= 50</option>
                                                        <option value="57">Package 4: Nam &lt; 50</option>
                                                        <option value="58">Packege 5: Nữ độc thân</option>
                                                        <option value="59">Package 6: Nữ có gia đình</option>
                                                        <option value="60">Package 1: Cơ bản</option>
                                                        <option value="61">Package 2: CB - Nam</option>
                                                        <option value="62">Package 3: CB - Nu</option>
                                                        <option value="72">Nam &gt;= 35</option>
                                                        <option value="73">Nu &gt;= 35</option>
                                                        <option value="74">Tre em &gt;= 10</option>
                                                        <option value="75">Nam &lt; 35</option>
                                                        <option value="76">Nu &lt; 35</option>
                                                        <option value="79">Nhân viên - Gas South</option>
                                                        <option value="14">Người thân, package 1</option>
                                                        <option value="15">Người thân, Package 2</option>
                                                        <option value="16">Người thân, Package 3</option>
                                                        <option value="17">Người thân, Package 4</option>
                                                        <option value="18">Người thân, package 9</option>
                                                        <option value="19">Nhân viên, package 1, A-inhouse</option>
                                                        <option value="20">Nhân viên, package 1, onshore</option>
                                                        <option value="21">Nhân viên, package 2, onshore</option>
                                                        <option value="22">Nhân viên, package 3, A-inhouse</option>
                                                        <option value="23">Nhân viên, package 3, onshore</option>
                                                        <option value="24">Nhân viên, package 4, A-inhouse</option>
                                                        <option value="25">Nhân viên, package 4, onshore</option>
                                                        <option value="26">Nhân viên, package 5, offshore</option>
                                                        <option value="27">Nhân viên, package 6, offshore</option>
                                                        <option value="29">nhan vien</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group bhpvi">
                                                <label class="col-form-label">Giá trị gói:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" name="GIATRIGOI" value="0" />
                                                </div>
                                                <span class="vnd" style="font-size: 14px;">đồng</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group bhpvi">
                                                <label class="col-form-label">Giới hạn đầu kỳ Bảo Hiểm:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account" name="GIOIHANGOI" value="0" />
                                                </div>
                                                <span class="vnd" style="font-size: 14px;">đồng</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group  bhpvi">
                                                <label class="col-form-label">Số tiền dư kỳ trước:</label>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control input-modal-account int" value="0" name="dukytruoc" />
                                                </div>
                                                <span class="vnd" style="font-size: 14px;">đồng</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group ">
                                                <label class="col-form-label">Thời gian hiệu lực từ:</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control daterange">
                                                    <span class="input-group-text">
                                                        <i class="ti ti-calendar fs-5"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="mt-9" style="text-align: right;">
                                    <button type="submit" class="btn btn-success">
                                        <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg></span>
                                        Lưu
                                    </button>
                                    <a class="btn btn-primary btn-sm" href="">
                                        <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 14l-4 -4l4 -4"></path><path d="M5 10h11a4 4 0 1 1 0 8h-1"></path></svg></span>
                                        Trở về
                                    </a>
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
