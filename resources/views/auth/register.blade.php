<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #020202e8;
            /* Màu đen */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #120f0f;
            /* Màu trắng cho chữ */
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            background-color: rgba(71, 67, 67, 0.8);
            /* Màu đen mờ */
            box-shadow: 0px 0px 10px 0px rgba(213, 164, 164, 1);
            border-radius: 5px;
            color: #000000;
            /* Màu đen cho chữ */
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 40px;
            /* Kích thước chữ là 40px */
            color: #fbfbfba6;
            /* Màu đỏ nhẹ */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #fbfbfba6;
            /* Màu đỏ nhẹ */
        }

        .form-control {
            border-radius: 3px;
            box-shadow: 0px 0px 5px 0px rgb(255 97 97);
        }

        .btn-login {
            background-color: #db5360c7;
            /* Màu đỏ */
            color: #ffffff;
            margin-left: 70px;
        }

        .btn-login:hover {
            background-color: #c82333;
            /* Màu đỏ nhạt hơn */
        }

        a {
            text-decoration: none;
            color: white;
        }

        .forgot {
            margin-top: 10px;
            margin-left: 120px;
        }

        .logo-container {
            text-align: center;
            font-size: 40px;
            /* Kích thước chữ là 40px */
            font-weight: bold;
            color: #b73945;
            /* Màu trắng cho chữ */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo-container">PHP</div>
        <h2>Đăng kí</h2>

        <form action="{{ route('registerStore')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ten_nguoi_dung">Tên người dùng:</label>
                <input type="text" class="form-control" id="ten_nguoi_dung" name="ten_nguoi_dung" autofocus autocomplete="ten_nguoi_dung" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                <div style="color: red">@error('email') {{ $message }} @enderror</div>
            </div>
            <div class="form-group">
                <label for="sdt">Số điện thoại:</label>
                <input type="text" class="form-control" id="sdt" name="sdt" required>
            </div>
            <div class="form-group">
                <label for="ten_dang_nhap">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" required>
                <div>@error('Ten_dang_nhap') {{ $message }} @enderror </div>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div> @error('password') {{ $message }} @enderror </div>
            </div>
            <button class="btn btn-primary btn-login" type="submit">Đăng kí</button>
            <button class="btn btn-primary btn-login" type="button"><a href="{{ route('login') }}">Đăng nhập</a></button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>