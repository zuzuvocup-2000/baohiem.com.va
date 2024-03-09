@extends('admin.layouts.master')

@section('title', 'Thay đổi mật khẩu')

@section('content')
    @include('admin.partial.breadcrumb', ['breadcrumbTitle' => 'Thay đổi mật khẩu'])
    <div class="profiles font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Thay đổi mật khẩu</h5>
                        <p class="card-subtitle mb-4">Để thay đổi mật khẩu của bạn vui lòng xác nhận tại đây</p>
                        <form method="post" action="{{ route('change.password') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Mật khẩu cũ</label>
                                <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password">
                                @error('current_password')
                                <div class="text-danger w-100">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Mật khẩu mới</label>
                                <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password">
                                @error('new_password')
                                <div class="text-danger w-100">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Xác nhận mật khẩu </label>
                                <input id="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password">
                                @error('confirm_password')
                                <div class="text-danger w-100">{{ $message }}</div>
                                @enderror
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
