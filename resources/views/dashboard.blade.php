<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Form chữ cơ bản nhất */
            padding-top: 20px;
        }

        .container {
            max-width: 800px;
            /* Ép cái khung nhỏ lại vừa phải như trong hình */
            margin: auto;
        }

        /* Cái khung bọc header và footer */
        .box-border {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        .box-border a {
            color: #000;
            text-decoration: none;
        }

        .box-border a:hover {
            text-decoration: underline;
        }

        .footer-box {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="box-border mb-4">
            <a href="#">Home</a> |
            <a href="{{ route('signout') }}" onclick="return confirm('Pro muốn đăng xuất hả?')">Đăng xuất</a>
        </div>

        @yield('content')

        <div class="box-border footer-box">
            Lập trình web @01/2024
        </div>

    </div>
</body>

</html>