@extends('layouts.master')

@section('title', 'Quản lý phòng ban')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Quản lý phòng ban'])
    <div class="user-list font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-2 align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-0">Danh sách phòng ban</h5>
                                </div>
                                <a href="#" class="btn btn-success d-flex align-items-center btn-sm float-right"
                                    data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                                    <span class="icon-item-icon me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-pencil-plus" width="20" height="20"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                                            <path d="M13.5 6.5l4 4"></path>
                                            <path d="M16 19h6"></path>
                                            <path d="M19 16v6"></path>
                                        </svg>
                                    </span>
                                    Thêm phòng ban mới
                                </a>
                            </div>
                            <div>
                                <div class="system-table table-responsive">
                                    <div class="system-table table-responsive">
                                        <table id="simpletable"
                                            class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                            <thead>
                                                <tr>
                                                    <th width="1%">STT</th>
                                                    <th>Tên phòng ban</th>
                                                    <th width="3%" colspan="3">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Phòng giám đốc</td>
                                                    <td>
                                                        <button class="btn btn-success me-1 editButton" data-id="">
                                                            <span class="icon-item-icon">
                                                                <img
                                                                    src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                                            </span>
                                                        </button>
                                                        <button class="btn btn-danger tabledit-delete-button"
                                                            data-id="">
                                                            <span class="icon-item-icon">
                                                                <img src="{{ asset('/img-system/system/trash_white.svg') }}"
                                                                    alt="" />
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

@section('modal')
    <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDepartmentModalLabel">Thêm phòng ban mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addDepartmentForm">
                        <div class="mb-3">
                            <label for="departmentName" class="form-label">Tên phòng ban:</label>
                            <input type="text" class="form-control" id="departmentName" name="department_name" required>
                        </div>
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
