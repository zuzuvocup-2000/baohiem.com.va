@extends('layouts.master')

@section('title', 'Cập nhật quyền')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Cập nhật quyền'])
    <div class="user-list font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('permission.update', $permission->id) }}">
                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Tên quyền</label>
                                        <input value="{{ $permission->name }}" type="text" class="form-control"
                                            name="name" placeholder="Tên quyền" required>

                                        @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Mô tả</label>
                                        <input value="{{ $permission->description }}" type="text" class="form-control"
                                            name="description" placeholder="Mô tả">

                                        @if ($errors->has('description'))
                                            <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div style="text-align: right;">
                                <button type="submit" class="btn btn-success">
                                    <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-check" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg></span>
                                    Lưu
                                </button>
                                <a class="btn btn-primary btn-sm" href="{{ route('permission.index') }}"
                                    class="btn btn-default">
                                    <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 14l-4 -4l4 -4"></path>
                                            <path d="M5 10h11a4 4 0 1 1 0 8h-1"></path>
                                        </svg></span>
                                    Trở về
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
