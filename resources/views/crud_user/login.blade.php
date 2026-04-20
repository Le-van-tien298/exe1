@extends('dashboard')

@section('content')
<style>
    .login-container {
        max-width: 450px;
        margin: 60px auto;
    }

    .login-card {
        padding: 30px;
        border: 1px solid #767676;
        background-color: #fff;
    }

    .login-title {
        text-align: center;
        margin-bottom: 30px;
        font-weight: normal;
        font-size: 1.5rem;
    }

    .form-label {
        font-size: 15px;
        color: #333;
    }
</style>

<div class="container login-container">
    <div class="login-card">
        <h3 class="login-title">Màn hình đăng nhập</h3>

        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf

            <div class="row mb-4 align-items-center">
                <label for="email" class="col-sm-4 col-form-label form-label">Username</label>
                <div class="col-sm-8">
                    <input type="text" id="email" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger" style="font-size: 13px;">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label for="password" class="col-sm-4 col-form-label form-label">Mật Khẩu</label>
                <div class="col-sm-8">
                    <input type="password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger" style="font-size: 13px;">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" style="border-color: #767676; border-radius: 2px;">
                        <label class="form-check-label" for="remember" style="font-size: 14px; color: #333;">
                            Ghi nhớ đăng nhập
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8 d-flex justify-content-between align-items-center">
                    <a href="#" style="text-decoration: none; font-size: 14px; color: #0d6efd;">Quên Mật Khẩu</a>
                    <button type="submit" class="btn btn-primary" style="padding: 6px 20px;">Đăng Nhập</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection