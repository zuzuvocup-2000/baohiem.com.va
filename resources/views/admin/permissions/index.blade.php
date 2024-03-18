@extends('layouts.master')

@section('title', 'Danh sách quyền')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Danh sách quyền'])
    <div class="user-list font-weight-medium shadow-none position-relative overflow-hidden mb-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-2 align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Danh sách quyền</h5>
                            </div>
                            <a href="{{ route('permission.create') }}"
                                class="btn btn-success d-flex align-items-center btn-sm float-right">
                                <span class="icon-item-icon me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4">
                                        </path>
                                        <path d="M13.5 6.5l4 4"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                    </svg>
                                </span>
                                Thêm quyền
                            </a>
                        </div>
                        <div>
                            <div class="system-table table-responsive">
                                <table id="simpletable"
                                    class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="30%">Tên quyền</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col" colspan="3" width="5%" class="text-center">Thao tác
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $permission->name }}</td>
                                                <td>{{ $permission->description }}</td>
                                                <td class="text-center"><a
                                                        href="{{ route('permission.edit', $permission->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <span class="icon-item-icon">
                                                            <img src="{{ asset('img-system/system/edit_white.svg') }}">
                                                        </span>
                                                    </a>
                                                    <form method="POST"
                                                        action="{{ route('permission.destroy', $permission->id) }}"
                                                        style="display:inline;">
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
                                    </tbody>
                                </table>
                            </div>
                            {!! $permissions->onEachSide(1)->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
