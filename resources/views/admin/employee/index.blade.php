@extends('layouts.master')

@section('title', 'Danh sách nhân viên')

@section('content')
@include('partial.breadcrumb', ['breadcrumbTitle' => 'Danh sách nhân viên'])
<div class="user-list font-weight-medium shadow-none position-relative overflow-hidden mb-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-2 align-items-center">
                        <div>
                            <h5>Danh sách nhân viên</h5>
                        </div>
                    </div>
                    <form action="" method="get">
                        <div class="row mb-3">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group d-flex align-items-center">
                                    <label class="d-inline-block" style="width: 100px;" for="department">Tên phòng ban</label>
                                    <select name="department" id="department" class="form-select" style="width: calc(100% - 100px)">
                                        <option value="">Tất cả</option>
                                        @foreach ($departmentList as $department)
                                        <option value="{{ $department->id }}" {{ request('department') == $department->id ? 'selected' : '' }}>
                                            {{ $department->department_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group d-flex align-items-center">
                                    <label class="d-inline-block" style="width: 100px;" for="positionSelect">Vị trí chức vụ</label>
                                    <select class="form-select mr-sm-2" style="width: calc(100% - 100px)" id="positionSelect" name="position">
                                        <option value="">Tất cả</option>
                                        @foreach ($positionList as $position)
                                        <option value="{{ $position->id }}" {{ request('position') == $position->id ? 'selected' : '' }}>
                                            {{ $position->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group d-flex align-items-center">
                                    <label class="d-inline-block" style="width: 100px;" for="keyword">Từ khoá</label>
                                    <input type="search" name="keyword" style="width: calc(100% - 100px)" class="form-control mr-sm-2" value="{{ request('keyword') }}" placeholder="Tìm kiếm...">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-3 justify-content-end">
                            <div class="me-3">
                                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            </div>
                            <a class="btn btn-success d-inline-flex align-items-center" href="{{ route('employee.create') }}">
                                <span class="icon-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                                        <path d="M13.5 6.5l4 4"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                    </svg>
                                </span>
                                <span class="ms-1">Thêm mới</span>
                            </a>
                        </div>
                    </form>
                    <div>
                        <div class="system-table table-responsive">
                            <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th><input type="checkbox" class="toggleAll custom-control-input" id="customCheck1"></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">STT</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Tên nhân viên</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Địa chỉ</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0 text-center">Điện thoại</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0 text-center">Email</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($employeeList)
                                    @foreach ($employeeList as $key => $employee)
                                    <tr data-id="{{ $employee->employee_code }}">
                                        <td><input type="checkbox" class="toggleCheckbox custom-control-input" id="user-" name="id[]" value="{{ $employee->employee_code }}"></td>
                                        <td><div class="d-flex align-items-center"><div class="ms-3"><h6 class="fs-4 fw-semibold mb-0">{{ ++$key }}</h6></div></div></td>
                                        <td><p class="mb-0 fw-normal fs-4">{{ $employee->employee_name }}</p></td>
                                        <td><p class="mb-0 fw-normal fs-4">{{ $employee->address }}</p></td>
                                        <td class="text-center"><p class="mb-0 fw-normal fs-4">{{ $employee->phone_number }}</p></td>
                                        <td class="text-center"><p class="mb-0 fw-normal fs-4">{{ $employee->email }}</p></td>
                                        <td>
                                            <h6 class="fs-4 fw-semibold mb-0">
                                                <div class="btn-group d-flex" style="justify-content: center;">
                                                    <a href="{{ route('employee.edit', ['id' => $employee->employee_code]) }}" class="btn btn-success me-1">
                                                        <span class="icon-item-icon">
                                                            <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                                        </span>
                                                    </a>
                                                    <button class="btn btn-danger tabledit-delete-button" data-id="{{ $employee->employee_code }}">
                                                        <span class="icon-item-icon">
                                                            <img src="{{ asset('img-system/system/trash_white.svg') }}" alt="">
                                                        </span>
                                                    </button>
                                                </div>
                                            </h6>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {!! $employeeList->onEachSide(1)->render('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="/js/pages/employee.js"></script>
@endsection
