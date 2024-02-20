@extends('layouts.master')

@section('title', 'Thông tin cá nhân')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Thông tin cá nhân'])
    <div class="profiles font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <p class="card-subtitle mb-4">Để thay đổi thông tin cá nhân của bạn, hãy chỉnh sửa và lưu từ đây</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputtext" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" id="exampleInputtext" placeholder="Mathew Anderson" value="Hoàng Lê Minh">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Giới tính</label>
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected="">Nam</option>
                                    <option value="1">Nữ</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputtext1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputtext1" value="minhbrots2@gmail.com">
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputtext2" class="form-label">Mã nhân viên</label>
                                    <input type="text" class="form-control" id="exampleInputtext2" value="88201648">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputtext2" class="form-label">Mã bảo hiểm</label>
                                    <input type="text" class="form-control" id="exampleInputtext2" value="25251325">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputtext3" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="exampleInputtext3" value="0961187500">
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="">
                                    <label for="exampleInputtext4" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="exampleInputtext4" value="Hoan Kiem Ha Noi">
                                </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                        <button class="btn btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
