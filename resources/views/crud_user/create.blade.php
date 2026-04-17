@extends('dashboard')

@section('content')

<style>
    .container {
        width: 600px;
        margin: auto;
    }

    .header,
    .footer {
        border: 1px solid black;
        text-align: center;
        padding: 10px;
        margin-top: 10px;
    }

    .content {
        border: 1px solid black;
        padding: 20px;
        margin-top: 10px;
    }

    h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        margin: auto;
    }

    td {
        padding: 5px;
    }

    .actions {
        text-align: right;
    }

    a {
        margin-right: 10px;
        font-size: 13px;
    }

  .footer {
    width: 100%;
    text-align: center;
    border-top: 1px solid #000;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    left: 0;
    background-color: #f9f9f9;
}
</style>


<div class="container">
    <div class="content">
        <h3>Màn hình đăng ký</h3>

        <form method="POST" action="{{ route('user.postUser') }}">
            @csrf

            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Mật Khẩu</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Nhập lại mật khẩu</td>
                    <td><input type="password" name="password_confirmation"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td colspan="2" class="actions">
                        <a href="{{ route('login') }}">Đã có tài khoản</a>
                        <button type="submit">Đăng ký</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


@endsection