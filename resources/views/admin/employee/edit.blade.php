@extends('layouts.master')

@section('title', __('accounts.edit_account'))

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/libs/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => __('accounts.edit_account')])
    <div class="card">
        <div class="row">
            <div class="col-12">
                <div class="card w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">{{ __('accounts.edit_account') }}</h5>
                        <p class="card-subtitle mb-4">{{ __('accounts.change_info') }}</p>
                        <form action="{{ route('employee.update', $employee->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            {{ __('accounts.employee') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="employee_nameInput" name="employee_name"
                                            class="form-control employee_name-user {{ $errors->has('employee_name') ? 'is-invalid' : '' }}"
                                            value="{{ old('employee_name', $employee->employee_name) }}" maxlength="255"
                                            placeholder="{{ __('login.employee_name') }}" />
                                        @if ($errors->has('employee_name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('employee_name') }}
                                            </div>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            {{ __('employee.department') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <div class="{{ $errors->has('department_id') ? 'is-invalid' : '' }}">
                                            <select class="select2" name="department_id">
                                                <option value="">{{ __('employee.department_select') }}</option>
                                                @foreach ($departmentList as $department)
                                                    <option value="{{ $department->id }}" 
                                                        {{ $department->department_name == $employee->department_name ? 'selected' : '' }}>
                                                        {{ $department->department_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('department_id'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('department_id') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="addressInput" class="form-label">
                                            {{ __('employee.address') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="addressInput" name="address"
                                            class="form-control address-user {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                            value="{{ old('address', $employee->address) }}"
                                            placeholder="{{ __('employee.address') }}" />
                                        @if ($errors->has('address'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">
                                            {{ __('employee.email') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="emailInput" name="email"
                                            class="form-control email-user {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            value="{{ old('email', $employee->email) }}"
                                            placeholder="{{ __('employee.email') }}" />
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phoneInput" class="form-label">
                                            {{ __('employee.phone') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="phoneInput" name="phone_number"
                                            class="form-control phone_number-user {{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                                            value="{{ old('phone_number', $employee->phone_number) }}"
                                            placeholder="{{ __('employee.phone') }}" />
                                        @if ($errors->has('phone_number'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('phone_number') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            {{ __('employee.position') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <div class="{{ $errors->has('position_id') ? 'is-invalid' : '' }}">
                                            <select class="select2" name="position_id">
                                                <option value="">{{ __('employee.employee_select') }}</option>
                                                @foreach ($positionList as $position)
                                                    <option value="{{ $position->id }}" 
                                                        {{ $position->id == $employee->position_id ? 'selected' : '' }}>
                                                        {{ $position->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('position_id'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('position_id') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-none">
                                        <div class="form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="activeemployee"
                                                    name="active" value="{{ STATUS_ACTIVE }}"
                                                    {{ old('active', $employee->active) == STATUS_ACTIVE ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="activeemployee">{{ __('accounts.active') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="inactiveemployee"
                                                    name="active" value="{{ STATUS_INACTIVE }}"
                                                    {{ old('active', $employee->active) == STATUS_INACTIVE ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="inactiveemployee">{{ __('accounts.inactive') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end mt-2">
                                        <button class="btn btn-primary" type="submit">{{ __('accounts.update') }}</button>
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
