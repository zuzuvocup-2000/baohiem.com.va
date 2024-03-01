@extends('layouts.master')

@section('title', 'Thông tin cá nhân')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Vai trò: {{ ucfirst($role->name) }} </h1>
        <div class="lead">

        </div>

        <div class="container mt-4">

            <h3>Quyền được chỉ định</h3>

            <div class="system-table table-responsive">
                <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                    <thead>
                        <th scope="col" width="20%">Tên quyền</th>
                        <th scope="col" width="1%">Vị trí</th>
                    </thead>
                    @foreach ($rolePermissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->guard_name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="mt-4" style="text-align: right;">
            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">
                <span class="icon-item-icon me-1"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M11.482 20.924a1.666 1.666 0 0 1 -1.157 -1.241a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.312 .318 1.644 1.794 .995 2.697"></path><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path><path d="M20 21l2 -2l-2 -2"></path><path d="M17 17l-2 2l2 2"></path></svg></span>
                Sửa
            </a>
            <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}" class="btn btn-default">
                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 14l-4 -4l4 -4"></path><path d="M5 10h11a4 4 0 1 1 0 8h-1"></path></svg></span>    
                Trở về
            </a>
        </div>
    </div>
    
@endsection
