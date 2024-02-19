@extends('layouts.master')

@section('title', 'Danh sách tài khoản')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Danh sách tài khoản'])
    <div class="user-list font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-2 align-items-center">
                            <div>
                                <h5>Danh sách tài khoản</h5>
                            </div>
                        </div>
                        <div class="d-flex no-block justify-content-between align-items-center mb-3">
                            <form action="" method="get" class="d-flex align-items-center">
                                <div class="form-field me-3">
                                    <select name="department" id="department" class="form-select">
                                        <option value="">Tất cả</option>
                                        @foreach ($activeDepartments as $department)
                                            <option value="{{ $department->id }}">
                                                {{ $department->department_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-field me-3">
                                    <input type="search" name="keyword" class="form-control" value=""
                                        placeholder="Tìm kiếm...">
                                </div>
                                <button class="btn-success btn">Tìm kiếm</button>
                            </form>
                            <a class="btn btn-success d-flex align-items-center" href="{{ route('user.create') }}">
                                <span class="icon-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
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
                                            <th>
                                                <input type="checkbox" class="toggleAll custom-control-input"
                                                    id="customCheck1">
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Mã nhân viên</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Email</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0">Tên đăng nhập</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0 text-center">Mật khẩu</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0 text-center">Tình trạng</h6>
                                            </th>
                                            <th>
                                                <h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userList as $user)
                                            <tr data-id="{{ $user->id }}">
                                                <td>
                                                    <input type="checkbox" class="toggleCheckbox custom-control-input"
                                                        id="user-" name="id[]" value="{{ $user->id }}">
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3">
                                                            <h6 class="fs-4 fw-semibold mb-0">
                                                                {{ $user->employee->employee_name }}</h6>
                                                            <span class="fw-normal">Admin</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-normal fs-4">
                                                        {{ !empty($user->employee->email) ? $user->employee->email : '' }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="mb-0 fw-normal fs-4">
                                                        {{ $user->username }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <input class="inputField form-control pw" name="password"
                                                            type="password" value="******" disabled="">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="badge rounded-pill {{ $user->active ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }} fw-semibold fs-2">
                                                        {{ $user->active ? 'active' : 'inactive' }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <h6 class="fs-4 fw-semibold mb-0">
                                                        <div class="btn-group d-flex">
                                                            <a href="{{ route('user.edit', ['id' => $user->id]) }}"
                                                                class="btn btn-success me-1">
                                                                <span class="icon-item-icon">
                                                                    <img
                                                                        src="{{ asset('img-system/system/edit_white.svg') }}">
                                                                </span>
                                                            </a>
                                                            <button class="btn btn-danger" data-id="{{ $user->id }}">
                                                                <span class="icon-item-icon">
                                                                    <img src="{{ asset('img-system/system/trash_white.svg') }}"
                                                                        alt="">
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </h6>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {!! $userList->onEachSide(1)->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
