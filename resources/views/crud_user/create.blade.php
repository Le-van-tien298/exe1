@extends('dashboard')

@section('content')
<style>
    /* Chỉnh cái khung chứa form vừa vặn, y xì trang Login */
    .form-wrapper {
        max-width: 600px;
        /* Độ rộng ôm form */
        margin: 40px auto;
        /* Canh giữa màn hình, cách trên dưới 40px */
        border: 1px solid #ccc;
        /* Viền xám mờ giống trang Login */
        padding: 20px;

    }

    .form-title {
        text-align: center;
        font-weight: normal;
        /* Chữ mỏng giống hình */
        font-size: 26px;
        margin-bottom: 35px;
    }

    /* Ép độ cao ô input và canh chữ cho ngay hàng thẳng lối */
    .custom-label {
        font-size: 16px;
        color: #333;
        margin-top: 6px;
        /* Đẩy chữ xuống xíu cho ngay giữa ô input */
    }

    /* Làm cái nút màu xanh giống hệt trang Login */
    .btn-blue {
        background-color: #0d6efd;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-blue:hover {
        background-color: #0b5ed7;
    }

    .link-blue {
        color: #0d6efd;
        text-decoration: none;
        font-size: 15px;
    }

    .link-blue:hover {
        text-decoration: underline;
    }
</style>

<div class="form-wrapper">
    <h3 class="form-title">Màn hình đăng ký</h3>

    <form method="POST" action="{{ route('user.postUser') }}">
        @csrf

        <div class="row mb-3">
            <div class="col-sm-4 text-start">
                <label class="custom-label">Username</label>
            </div>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="name" required autofocus>
                @if ($errors->has('name'))
                <span class="text-danger" style="font-size: 13px;">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4 text-start">
                <label class="custom-label">Mật Khẩu</label>
            </div>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger" style="font-size: 13px;">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4 text-start">
                <label class="custom-label">Nhập lại mật khẩu</label>
            </div>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-4 text-start">
                <label class="custom-label">Email</label>
            </div>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" required>
                @if ($errors->has('email'))
                <span class="text-danger" style="font-size: 13px;">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8 d-flex justify-content-between align-items-center">
                <a href="{{ route('login') }}" class="link-blue">Đã có tài khoản</a>
                <button type="submit" class="btn-blue">Đăng ký</button>
            </div>
        </div>
    </form>
</div>
@endsection