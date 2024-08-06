@extends('layouts.master')

@section('title', __('employee.add_account'))

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/libs/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => __('employee.add_account')])
    <div class="card">
        <div class="row">
            <div class="col-12">
                <div class="card w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">{{ __('employee.add_account') }}</h5>
                        <p class="card-subtitle mb-4">{{ __('employee.change_info') }}</p>
                        <form action="{{ route('employee.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="departmentInput" class="form-label">
                                            {{ __('employee.account') }}
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input type="text" id="departmentInput" name="employee_name"
                                            class="form-control  employee_name-user {{ $errors->has('employee_name') ? 'is-invalid' : '' }}"
                                            value="{{ old('employee_name') }}" maxlength="255"
                                            placeholder="{{ __('employee.account') }}" />
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
                                                    <option
                                                        value="{{ $department->id }}">
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
                                            class="form-control  address-user {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                            value="{{ old('address') }}" maxlength="255"
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
                                        <input type="email" name="email" id="emailInput"
                                            autocomplete="off"
                                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} email-user"
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
                                            class="form-control  phone-user {{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                                            value="{{ old('phone_number') }}"
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
                                                    <option
                                                        value="{{ $position->id }}">
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
                                    <div class="text-end mt-2">
                                        <button class="btn btn-primary"
                                            type="submit">{{ __('employee.add_new') }}</button>
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
