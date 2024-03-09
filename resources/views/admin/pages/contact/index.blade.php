@extends('admin.layouts.master')

@section('title', 'Liên hệ')
@section('style')
<!-- Ckeditor Css -->
<link rel="stylesheet" href="assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<link rel="stylesheet" href="assets/libs/ckeditor/samples/css/samples.css">
@endsection
@section('content')
    @include('admin.partial.breadcrumb', ['breadcrumbTitle' => 'Liên hệ'])

    <div class="contact font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <div>
                                <h5 class="mb-2 fs-5">Liên hệ phản hồi</h5>
                            </div>
                            <p class="card-subtitle">
                                Các thắc mắc yêu cầu hệ thống quản lý thông tin tài khoản bảo hiểm và sức khỏe xin vui lòng gửi cho quản trị viên hệ thống.
                            </p>
                        </div>
                        <form action="{{ route('contact.form') }}" class="form-contact" method="POST" enctype="multipart/form-data>">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-xs-12">
                                    <div class="mb-2">
                                        <h5 class="mb-0">Gửi đến</h5>
                                    </div>
                                    <div class="d-flex">
                                        <div class="form-check py-2 me-3">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">Quản trị dữ liệu</label>
                                        </div>
                                        <div class="form-check py-2 me-3">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">Bộ phận phát triển phần mềm</label>
                                        </div>
                                        <div class="form-check py-2">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                            <label class="form-check-label" for="exampleRadios3">Nơi khác</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mr-sm-2" for="companySelect">Email người gửi</label>
                                        <input type="email" name="email_title" class="form-control @error('email_title') is-invalid @enderror" value="{{ old('email_title') }}">
                                        @error('email_title')
                                            <div class="text-danger w-100">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mr-sm-2" for="companySelect">Email người nhận</label>
                                        <input type="email" name="email_receive" class="form-control" value="minhbrots2@gmail.com">
                                        @error('email_receive')
                                            <div class="text-danger w-100">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mr-sm-2" for="companySelect">Chủ đề</label>
                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">
                                        @error('title')
                                            <div class="text-danger w-100">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mr-sm-2" for="companySelect">Tài liệu đính kém</label>
                                        <input class="form-control" type="file" id="formFile" name="file" value="{{ old('file') }}">
                                        @error('file')
                                            <div class="text-danger w-100">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                               <div class="p-6 @error('ckeditor_contact') is-invalid @enderror">
                                    <textarea name="ckeditor_contact" id="ckeditor-contact" cols="50" rows="15" class="form-control ckeditor " value="{{ old('ckeditor_contact') }}"></textarea>
                                    @error('ckeditor_contact')
                                        <div class="text-danger w-100">{{ $message }}</div>
                                    @enderror
                               </div>
                               <div class="d-md-flex align-items-center">
                                    <div class="ms-auto mt-3 mt-md-0">
                                        <button type="submit" class="btn btn-primary font-medium rounded-pill px-4">
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-send me-2 fs-4"></i>
                                                Gửi
                                            </div>
                                        </button>
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
@section('script')
    <script src="/js/pages/contact.js"></script>
    <script src="assets/libs/ckeditor/ckeditor.js"></script>
    <script src="assets/libs/ckeditor/samples/js/sample.js"></script>
    <script src="assets/js/plugins/ckeditor-init.js"></script>
@endsection
