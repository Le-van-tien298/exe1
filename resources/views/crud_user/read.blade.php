@extends('dashboard')

@section('content')

<style>
    .container {
        width: 800px;
        margin: 0 auto;
    }

    .header {
        border: 1px solid black;
        text-align: center;
        padding: 10px;
        margin-top: 10px;
    }

    .content {
        border: 1px solid black;
        padding: 30px;
        margin-top: 20px;
        width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        margin: auto;
    }

    td {
        padding: 8px 15px;
    }

    .btn {
        background-color: #007bff;
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
    }

    .actions {
        text-align: right;
        margin-top: 15px;
    }

    .footer {
        width: 100%;
        text-align: center;
        border: 1px solid black;
        padding: 10px;
        position: fixed;
        bottom: 0;
        left: 0;
        background-color: #f9f9f9;
    }
</style>

<div class="container">



    {{-- CONTENT --}}
    <div class="content">
        <h3>Màn hình chi tiết</h3>

        <table>
            <tr>
                <td>Username</td>
                <td>{{ $messi->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $messi->email }}</td>
            </tr>
        </table>

        <div class="actions">
            <a href="{{ route('user.update', ['id' => $messi->id]) }}" class="btn">Chỉnh sửa</a>
        </div>
    </div>

</div>



@endsection