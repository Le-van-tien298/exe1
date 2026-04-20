@extends('dashboard')

@section('content')
<style>
    /* Ép cái bảng phải kẻ chỉ đen thui như trong hình */
    table,
    th,
    td {
        border: 1px solid #000 !important;
    }

    th {
        background-color: #f8f9fa;
        /* Cho cái tiêu đề nó hơi xám nhẹ tí xíu */
    }

    /* Chỉnh mấy chữ Edit, View, Delete */
    .action-links a {
        color: #000;
        text-decoration: none;
    }

    .action-links a:hover {
        text-decoration: underline;
    }
</style>

<h3 class="text-center mb-4" style="font-weight: normal;">Danh sách user</h3>

<table class="table text-center align-middle mb-5">
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="action-links">
                <a href="{{ route('user.update', ['id' => $user->id]) }}">Edit</a> |
                <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                <a onclick="return confirm(`Bạn muốn xóa user {{ $user->name }}?`)" href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{ $users->links('pagination::bootstrap-5') }}
</div>

@endsection