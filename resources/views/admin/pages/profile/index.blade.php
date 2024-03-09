@extends('admin.layouts.master')

@section('title', 'Thông tin cá nhân')

@section('content')
    @include('admin.partial.breadcrumb', ['breadcrumbTitle' => 'Thông tin cá nhân'])
    <?php
        $currentUser = getInfoUserAdmin();
    ?>
    <div class="profiles font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <p class="card-subtitle mb-4">Để thay đổi thông tin cá nhân của bạn, hãy chỉnh sửa và lưu từ đây</p>
                        <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputtext" class="form-label">Họ và tên</label>
                                        <input type="text" name="employee_name" class="form-control" id="exampleInputtext" value="{{ $currentUser->employee->employee_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputtext1" value="{{ $currentUser->employee->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputtext3" class="form-label">Phone</label>
                                        <input type="text" name="phone_number" class="form-control" id="exampleInputtext3" value="{{ $currentUser->employee->phone_number }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputtext4" class="form-label">Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputtext4" value="{{ $currentUser->employee->address }}">
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
