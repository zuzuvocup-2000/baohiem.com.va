@extends('layouts.master')

@section('title', 'Quản lý Vai trò')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Quản lý vai trò</h2>
        <div class="lead d-flex no-block justify-content-between align-items-center mb-3">
            <p>Quản lý các chức năng và quyền của người dùng trong hệ thống.</p>
            <a href="{{ route('roles.create') }}" class="btn btn-success d-flex align-items-center btn-sm float-right">
                <span class="icon-item-icon me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4">
                        </path>
                        <path d="M13.5 6.5l4 4"></path>
                        <path d="M16 19h6"></path>
                        <path d="M19 16v6"></path>
                    </svg>
                </span>
                Thêm vai trò mới
            </a>
        </div>
        <div class="system-table table-responsive">
            <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                <tr>
                    <th width="1%">STT</th>
                    <th>Tên vai trò</th>
                    <th width="3%" colspan="3">Thao tác</th>
                </tr>
                @foreach ($roles as $key => $role)
                    <tr>
                        <td class="text-center">{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">
                                <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-cog" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M12 18c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path><path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M19.001 15.5v1.5"></path><path d="M19.001 21v1.5"></path><path d="M22.032 17.25l-1.299 .75"></path><path d="M17.27 20l-1.3 .75"></path><path d="M15.97 17.25l1.3 .75"></path><path d="M20.733 20l1.3 .75"></path></svg></span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">
                                <span class="icon-item-icon">
                                    <img
                                        src="{{ asset('img-system/system/edit_white.svg') }}">
                                </span>
                            </a>
                            <form method="POST" action="{{ route('roles.destroy', $role->id) }}" style="display:inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('img-system/system/trash_white.svg') }}"
                                            alt="">
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="d-flex">
            {!! $roles->links() !!}
        </div>

    </div>
@endsection
