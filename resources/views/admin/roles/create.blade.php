@extends('layouts.master')

@section('title', 'Thêm mới vai trò')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Thêm mới vai trò'])
    <div class="user-list font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('role.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên vai trò</label>
                                <input value="{{ old('name') }}" type="text" class="form-control" name="name"
                                    placeholder="Name" required>
                            </div>

                            <label for="permissions" class="form-label">Gán quyền</label>

                            <div class="row">
                                @if(count($permissions->all()))
                                    @foreach (array_chunk($permissions->all(), ceil(count($permissions) / 4)) as $chunk)
                                        <div class="col-md-3">
                                            <table class="table table-striped">
                                                <thead>
                                                    <th scope="col" width="1%"><input type="checkbox"
                                                            name="all_permission"></th>
                                                    <th scope="col" width="20%">Tên quyền</th>
                                                    <th scope="col" width="1%">Vị trí</th>
                                                </thead>
                                                @foreach ($chunk as $permission)
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" name="permission[{{ $permission->name }}]"
                                                                value="{{ $permission->name }}" class='permission'>
                                                        </td>
                                                        <td>
                                                            {{ $permission->description }}
                                                            <br>
                                                            {{ $permission->name }}
                                                        </td>
                                                        <td>{{ $permission->guard_name }}</td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    @endforeach
                                @endif
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
                                <a class="btn btn-primary btn-sm" href="{{ route('role.index') }}" class="btn btn-default">
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {
                let _this = $(this);
                if ($(this).is(':checked')) {
                    $.each(_this.parents('table').find('.permission'), function() {
                        $(this).prop('checked', true);
                    });
                } else {
                    $.each(_this.parents('table').find('.permission'), function() {
                        $(this).prop('checked', false);
                    });
                }

            });
        });
    </script>
@endsection
