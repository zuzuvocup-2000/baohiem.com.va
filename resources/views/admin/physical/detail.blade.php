@extends('layouts.master')

@section('title', 'Khám sức khỏe định kỳ')
@section('style')
<link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Khám sức khỏe định kỳ'])
    <div class="physical-detail-page font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="physical-container">
                    <form action="" class="form-physical-detail" method="POST" enctype="multipart/form-data>">
                        @csrf
                        <div class="card card-body note-has-grid">
                            <div class="single-note-item mb-3">
                                <span class="side-stick"></span>
                                <h3>Thông tin bệnh nhân</h3>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xs-12 col-md-3">
                                    <div class="d-flex align-items-center">
                                        <h5 class="title mb-0 me-2">Ngày khám:</h5>
                                        <div class="description">1/12/2022</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="d-flex align-items-center">
                                        <h5 class="title mb-0 me-2">Tên bệnh viện:</h5>
                                        <div class="description">Bệnh viện Hoàn Mỹ Sài Gòn</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group d-flex align-items-center">
                                        <h5 class="me-3 mb-0">Tình trạng gia đình:</h5>
                                        <div class="col-sm form-radio">
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="info1" value="option1" checked="" />
                                                    <label class="form-check-label" for="info1">Độc thân</label>
                                                </div>
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="info2" value="option2" />
                                                    <label class="form-check-label" for="info2">Kết hôn</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="info3" value="option3" />
                                                    <label class="form-check-label" for="info3">Ly dị</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Nhóm máu:</h5></label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" value="" name="NHOMMAU" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Rhesus:</h5></label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" value="" name="RHESUS" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Chiều cao:</h5></label>
                                        <div class="col-sm form-search-absolute">
                                            <input type="text" class="form-control input-modal-account" value="" name="CHIEUCAO" />
                                            <span class="unit">cm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Cân nặng:</h5></label>
                                        <div class="col-sm form-search-absolute">
                                            <input type="text" class="form-control input-modal-account" value="" name="CANNANG" />
                                            <span class="unit">kg</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Chỉ số BMI:</h5></label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" value="" name="BMI" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Vòng ngực:</h5></label>
                                        <div class="col-sm form-search-absolute">
                                            <input type="text" class="form-control input-modal-account" value="" name="VONGNGUC" />
                                            <span class="unit">cm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Mạch:</h5></label>
                                        <div class="col-sm form-search-absolute">
                                            <input type="text" class="form-control input-modal-account" value="" name="MACH" />
                                            <span class="unit">lần/phút</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Huyết áp:</h5></label>
                                        <div class="col-sm form-search-absolute">
                                            <input type="text" class="form-control input-modal-account" value="" name="HUYETAP" />
                                            <span class="unit">mmHg</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Nhiệt độ:</h5></label>
                                        <div class="col-sm form-search-absolute">
                                            <input type="text" class="form-control input-modal-account" value="" name="NHIETDO" />
                                            <span class="unit">độ C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-2plus">
                                    <div class="form-group">
                                        <label><h5>Nhịp thở:</h5></label>
                                        <div class="col-sm form-search-absolute">
                                            <input type="text" class="form-control input-modal-account" value="" name="NHIPTHO" />
                                            <span class="unit">lần/phút</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body note-has-grid">
                            <div class="single-note-item mb-3">
                                <span class="side-stick"></span>
                                <h3>Hồ sơ bệnh án</h3>
                            </div>
                            <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active"
                                        id="pills-sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick"
                                        aria-selected="true"
                                    >
                                        <span class="d-none d-md-block">Tiền sử bản thân</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick1"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick1"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">1. Tuần hoàn</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick2"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick2"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">2. Hô hấp</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick3"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick3"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">3. Tiêu hóa</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick4"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick4"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">4. Thận - Tiết niệu sinh dục</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick5"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick5"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">5. Thần kinh</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick6"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick6"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">6. Tâm thần</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick7"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick7"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">7. Hệ vận động</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick8"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick8"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">8. Nội tiết</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick9"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick9"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">9. Da liễu</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick10"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick10"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">10. Phụ sản</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick11"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick11"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">11. Mắt</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick12"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick12"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">12. Tai mũi họng</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="sick-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#sick13"
                                        type="button"
                                        role="tab"
                                        aria-controls="sick13"
                                        aria-selected="false"
                                        tabindex="-1"
                                    >
                                        <span class="d-none d-md-block">13. Răng hàm mặt</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="sick" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="table-responsive">
                                        <table id="file" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead class="text-dark fs-4">
                                                <tr role="row">
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Tên bệnh</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Phát hiện năm</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Bệnh nghề nghiệp</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Phát hiện năm</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" data-id="20067">
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">Trĩ</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">2019</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">Viêm phổi</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">2019</p>
                                                    </td>
                                                </tr>
                                                <tr role="row" data-id="20067">
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">2</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">Thoát vị đĩa đệm</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">2020</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">Covid</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">2021</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick1" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick2" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick3" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick4" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick5" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick6" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick7" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick8" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick9" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick10" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick11" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick12" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sick13" role="tabpanel" aria-labelledby="pills-sick-tab" tabindex="0">
                                    <div class="form-group">
                                        <label><h5>Kết luận:</h5></label>
                                        <div class="col-sm mb-2">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 mb-2">
                                                <div class="form-group d-flex align-items-center">
                                                    <label class="d-inline-block" style="width: 150px;" for=""><h5 class="mb-0">Phân loại sức khỏe:</h5></label>
                                                    <input type="text" class="form-control" style="width: calc(100% - 150px);" id="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <h5 class="mb-0 me-2" style="width: 150px;">Bác sĩ khám:</h5>
                                                    <div class="description" style="width: calc(100% - 150px);">BS. Nguyễn Mạnh Hùng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body note-has-grid">
                            <div class="single-note-item mb-3">
                                <span class="side-stick"></span>
                                <h3>Xét nghiệm & Chuẩn đoán</h3>
                            </div>
                            <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active"
                                        id="pills-test-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#test"
                                        type="button"
                                        role="tab"
                                        aria-controls="test"
                                        aria-selected="true"
                                    >
                                        <span class="icon-item-icon me-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-test-pipe"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                stroke-width="2"
                                                stroke="currentColor"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124"></path>
                                                <path d="M7 13h8"></path>
                                                <path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z"></path>
                                                <path d="M15 3l6 6"></path>
                                            </svg>
                                        </span>
                                        <span class="d-none d-md-block">Xét nghiệm</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                                        id="pills-diagnostic-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#diagnostic"
                                        type="button"
                                        role="tab"
                                        aria-controls="diagnostic"
                                        aria-selected="true"
                                    >
                                        <span class="icon-item-icon me-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-test-pipe"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                stroke-width="2"
                                                stroke="currentColor"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124"></path>
                                                <path d="M7 13h8"></path>
                                                <path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z"></path>
                                                <path d="M15 3l6 6"></path>
                                            </svg>
                                        </span>
                                        <span class="d-none d-md-block">Chuẩn đoán hình ảnh</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="test" role="tabpanel" aria-labelledby="pills-test-tab" tabindex="0">
                                    <div class="table-responsive">
                                        <table id="diagnosticTable" class="table border table-striped table-bordered text-nowrap align-middle dataTable">
                                            <thead class="text-dark fs-4">
                                                <tr role="row">
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Chỉ định xét nghiệm</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Đơn vị tính</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Chỉ số bình thường</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Kết quả</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" data-id="20067">
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">HCT</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">%</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">(36-52)</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center"></p>
                                                    </td>
                                                </tr>
                                                <tr role="row" data-id="20067">
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">2</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">GRA</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">10^9 / L</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">(2.5-7.5)</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center"></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="diagnostic" role="tabpanel" aria-labelledby="pills-diagnostic-tab" tabindex="0">
                                    <div class="table-responsive">
                                        <table id="diagnosticImage" class="table border table-striped table-bordered text-nowrap align-middle dataTable">
                                            <thead class="text-dark fs-4">
                                                <tr role="row">
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Chỉ định chuẩn đoán hình ảnh</h6>
                                                    </th>
                                                    <th>
                                                        <h6 class="fs-4 fw-semibold text-center mb-0">Kết quả</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" data-id="20067">
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">Siêu âm</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">Bình thường</p>
                                                    </td>
                                                </tr>
                                                <tr role="row" data-id="20067">
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">2</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">Chụp XQ</p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 fw-normal fs-4 text-center">Bất thường</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body note-has-grid">
                            <div class="single-note-item mb-3">
                                <span class="side-stick"></span>
                                <h3>Phân loại sức khỏe</h3>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group d-flex align-items-center">
                                        <div class="col-sm form-radio">
                                            <div class="d-flex">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="" value="option1" checked="" />
                                                    <label class="form-check-label" for="">Khỏe mạnh</label>
                                                </div>
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="" value="option2" />
                                                    <label class="form-check-label" for="">Mắc bệnh</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-xs-12 col-md-6 col-xl-3">
                                    <div class="form-group">
                                        <label><h5>Tên bệnh:</h5></label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" value="" name="NHOMMAU">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-3">
                                    <div class="form-group">
                                        <label><h5>Đạt sức khỏe loại:</h5></label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" value="" name="RHESUS">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-xl-6">
                                    <div class="form-group">
                                        <label><h5>Hiện tại chưa (không) đủ sức khỏe làm việc (ghi cụ thể ngành nghề):</h5></label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control input-modal-account" value="" name="NHOMMAU">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label><h5>Hướng giải quyết:</h5></label>
                                        <div class="col-sm">
                                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="assets/js/datatable/datatable-basic.init.js"></script>
@endsection
