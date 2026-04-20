@extends('dashboard')

@section('content')
<style>
    /* Bê nguyên xi style của trang Đăng ký/Đăng nhập qua cho đồng nhất */
    .form-wrapper {
        max-width: 600px;
        margin: 40px auto;
        border: 1px solid #ccc;
        padding: 40px;
        background-color: #fff;
    }

    .form-title {
        text-align: center;
        font-weight: normal;
        font-size: 26px;
        margin-bottom: 35px;
    }

    .custom-label {
        font-size: 16px;
        color: #333;
        margin-top: 6px;
    }

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
    <h3 class="form-title">Màn hình cập nhật</h3>

    <form method="POST" action="{{ route('user.postUpdate') }}">
        @csrf
        <input name="id" type="hidden" value="{{ $user->id }}">

        <div class="row mb-3">
            <div class="col-sm-4 text-start">
                <label class="custom-label">Username</label>
            </div>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4 text-start">
                <label class="custom-label">Mật khẩu mới</label>
            </div>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="Bỏ trống nếu không đổi">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4 text-start">
                <label class="custom-label">Nhập lại mật khẩu</label>
            </div>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Bỏ trống nếu không đổi">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-4 text-start">
                <label class="custom-label">Email</label>
            </div>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8 d-flex justify-content-between align-items-center">
                <a href="{{ route('user.list') }}" class="link-blue">Quay về danh sách</a>
                <button type="submit" class="btn-blue">Cập nhật</button>
            </div>
        </div>
    </form>
</div>
@endsection