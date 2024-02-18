@extends('layouts.master')

@section('title', __('accounts.add_account'))

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/libs/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => __('accounts.add_account')])
    <div class="card">
        <div class="row">
            <div class="col-12">
                <div class="card w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">{{ __('accounts.add_account') }}</h5>
                        <p class="card-subtitle mb-4">{{ __('accounts.change_info') }}</p>
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            {{ __('accounts.employee') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <div class="{{ $errors->has('employee_code') ? 'is-invalid' : '' }}">
                                            <select class="select2" name="employee_code">
                                                <option selected="" value="">{{ __('accounts.employee_select') }}
                                                </option>
                                                @foreach ($employeeList as $employeeCode => $tennhanvien)
                                                    <option value="{{ $employeeCode }}"
                                                        {{ old('employee_code') == $employeeCode ? 'selected' : '' }}>
                                                        {{ $tennhanvien }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('employee_code'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('employee_code') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            {{ __('accounts.role') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <div class="{{ $errors->has('QUYENYTRUYCAP') ? 'is-invalid' : '' }}">
                                            <select class="select2" name="QUYENYTRUYCAP">
                                                <option selected="" value="">{{ __('accounts.role_select') }}
                                                </option>
                                            </select>
                                            @if ($errors->has('QUYENYTRUYCAP'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('QUYENYTRUYCAP') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="ussernameInput" class="form-label">
                                            {{ __('accounts.account') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="ussernameInput" name="username"
                                            class="form-control  username-user {{ $errors->has('username') ? 'is-invalid' : '' }}"
                                            value="{{ old('username') }}" maxlength="255"
                                            placeholder="{{ __('login.username') }}" />
                                        @if ($errors->has('username'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('username') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="passwordInput" class="form-label">
                                            {{ __('accounts.password') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input type="password" maxlength="255" name="password" id="passwordInput"
                                            autocomplete="off"
                                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} password-user"
                                            placeholder="{{ __('login.password') }}" />
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">{{ __('accounts.status') }}</label>
                                    <div>
                                        <div class="form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="activeUser"
                                                    name="active" value="{{ ACTIVE_USER }}"
                                                    {{ old('active', ACTIVE_USER) == ACTIVE_USER ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="activeUser">{{ __('accounts.active') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="inactiveUser"
                                                    name="active" value="{{ INACTIVE_USER }}"
                                                    {{ old('active', ACTIVE_USER) == INACTIVE_USER ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="inactiveUser">{{ __('accounts.inactive') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end mt-2">
                                        <button class="btn btn-primary"
                                            type="submit">{{ __('accounts.add_new') }}</button>
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
    <script src="{{ asset('/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('/assets/js/forms/select2.init.js') }}"></script>
@endsection
