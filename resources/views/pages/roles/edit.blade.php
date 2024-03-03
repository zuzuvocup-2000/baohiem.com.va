@extends('layouts.master')

@section('title', 'Thông tin cá nhân')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Update role</h1>
        <div class="lead">
            Edit role and manage permissions.
        </div>

        <div class="container mt-4">

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

            <form method="POST" action="{{ route('role.update', $role->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tên vai trò</label>
                    <input value="{{ $role->name }}" type="text" class="form-control" name="name" placeholder="Name"
                        required>
                </div>

                <label for="permissions" class="form-label">Gán quyền</label>

                <div class="system-table table-responsive">
                    <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                        <thead>
                            <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                            <th scope="col" width="20%">Tên quyền</th>
                            <th scope="col" width="1%">Vị trí</th>
                        </thead>

                        @foreach ($permissions as $permission)
                            <tr>
                                <td>
                                    <input type="checkbox" name="permission[{{ $permission->name }}]"
                                        value="{{ $permission->name }}" class='permission'
                                        {{ in_array($permission->name, $rolePermissions) ? 'checked' : '' }}>
                                </td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->guard_name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-success">
                        <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
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
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if ($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked', true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked', false);
                    });
                }

            });
        });
    </script>
@endsection
