@extends('layouts.master')

@section('title', 'Danh sách tài khoản')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Trang chủ'])
    <div class="user-list font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-2 align-items-center">
                            <div>
                                <h5>Danh sách người dùng</h5>
                            </div>
                        </div>
                        <div class="d-flex no-block justify-content-end align-items-center mb-3">
                            <form action="" method="get" class="me-3">
                                <div class="form-field">
                                    <input type="search" name="keyword" class="form-control" value=""
                                        placeholder="Tìm kiếm...">
                                </div>
                            </form>
                            <a class="btn btn-success d-flex align-items-center" href="{{ route('user.create') }}">
                                <span class="icon-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4">
                                        </path>
                                        <path d="M13.5 6.5l4 4"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                    </svg>
                                </span>
                                <span class="ms-1">Thêm mới</span>
                            </a>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="d-flex">
                                                <input type="checkbox" class="toggleAll custom-control-input"
                                                    id="customCheck1">
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">STT</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Mã nhân viên</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Tên đăng nhập</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Mật khẩu</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Tình trạng</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="toggleCheckbox custom-control-input"
                                                    id="customCheck1">
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/profile/user-1.jpg" class="rounded-circle"
                                                        width="40" height="40" />
                                                    <div class="ms-3">
                                                        <h6 class="fs-4 fw-semibold mb-0">Hoàng xyz</h6>
                                                        <span class="fw-normal">Admin</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 fw-normal fs-4">admin@gmail.com</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <input class="inputField form-control pw" name="PASSWORD"
                                                        type="password" value="******" disabled="">
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge rounded-pill bg-danger-subtle text-danger fw-semibold fs-2">disabled</span>
                                            </td>
                                            <td>
                                                <h6 class="fs-4 fw-semibold mb-0">
                                                    <div class="btn-group d-flex">
                                                        <button class="btn btn-success me-1"><span
                                                                class="icon-item-icon"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-pencil-plus"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path
                                                                        d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4">
                                                                    </path>
                                                                    <path d="M13.5 6.5l4 4"></path>
                                                                    <path d="M16 19h6"></path>
                                                                    <path d="M19 16v6"></path>
                                                                </svg></span></button>
                                                        <button class="btn btn-danger"><span class="icon-item-icon"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-trash"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M4 7l16 0"></path>
                                                                    <path d="M10 11l0 6"></path>
                                                                    <path d="M14 11l0 6"></path>
                                                                    <path
                                                                        d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                    </path>
                                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                                    </path>
                                                                </svg></span></button>
                                                    </div>
                                                </h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="toggleCheckbox custom-control-input"
                                                        id="customCheck1">
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/profile/user-1.jpg" class="rounded-circle"
                                                        width="40" height="40" />
                                                    <div class="ms-3">
                                                        <h6 class="fs-4 fw-semibold mb-0">Hoàng xxx</h6>
                                                        <span class="fw-normal">Admin</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 fw-normal fs-4">admin@gmail.com</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <input class="inputField form-control pw" name="PASSWORD"
                                                        type="password" value="******" disabled="">
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge rounded-pill bg-success-subtle text-success fw-semibold fs-2">Active</span>
                                            </td>
                                            <td>
                                                <h6 class="fs-4 fw-semibold mb-0">
                                                    <div class="btn-group d-flex">
                                                        <button class="btn btn-success me-1"><span
                                                                class="icon-item-icon"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-pencil-plus"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path
                                                                        d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4">
                                                                    </path>
                                                                    <path d="M13.5 6.5l4 4"></path>
                                                                    <path d="M16 19h6"></path>
                                                                    <path d="M19 16v6"></path>
                                                                </svg></span></button>
                                                        <button class="btn btn-danger"><span class="icon-item-icon"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-trash"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M4 7l16 0"></path>
                                                                    <path d="M10 11l0 6"></path>
                                                                    <path d="M14 11l0 6"></path>
                                                                    <path
                                                                        d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                    </path>
                                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                                    </path>
                                                                </svg></span></button>
                                                    </div>
                                                </h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div>
                                        <h5 class="mb-0">Hiển thị 1 đến 20 trong tất cả 1644 bản ghi</h5>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-7">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Trước</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Sau</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // checkbox all
        $(document).ready(function() {
            $(".toggleAll").on("change", function() {
                $(".toggleCheckbox").prop("checked", $(this).prop("checked"));
            });
            $(".toggleCheckbox").on("change", function() {
                $(".toggleAll").prop("checked", $(".toggleCheckbox:checked").length === $(".toggleCheckbox")
                    .length);
            });
        });
    </script>
@endsection

@section('script')
    <script src="/assets/js/dashboards/dashboard7.js"></script>
@endsection
