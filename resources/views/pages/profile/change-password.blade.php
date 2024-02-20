@extends('layouts.master')

@section('title', 'Thay đổi mật khẩu')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Thay đổi mật khẩu'])
    <div class="profiles font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Thay đổi mật khẩu</h5>
                        <p class="card-subtitle mb-4">Để thay đổi mật khẩu của bạn vui lòng xác nhận tại đây</p>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu cũ</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" value="12345678910">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword2" class="form-label">Mật khẩu mới</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" value="12345678910">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword3" class="form-label">Xác nhận mật khẩu </label>
                                <input type="password" class="form-control" id="exampleInputPassword3" value="12345678910">
                            </div>
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                <button class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection
