<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Learning - Sign In</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background: url('https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=2073&auto=format&fit=crop') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .btn-social {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-google {
            background: #fff;
            color: #444;
            border: 1px solid #ddd;
        }

        .btn-google:hover {
            background: rgb(228, 224, 224);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-facebook {
            background: #3b5998;
            color: #fff;
            border: none;
        }

        .btn-facebook:hover {
            background: #344e86;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .btn-social img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .disabled-link {
            pointer-events: none;
            color: #999;
            text-decoration: none;
            cursor: not-allowed;
            opacity: 0.6;
        }

        .disabled-link:hover {
            color: #999;
            text-decoration: none;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="overlay"></div>
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-auto h-auto bg-white px-16 py-8 rounded-2xl shadow-2xl">
        <div class="text-center">
            <p class="text-4xl font-bold">Đăng nhập</p>
        </div>
        <p class="text-center">Sign in to start your language journey</p>
        <hr class="w-12 mb-12 border-3 rounded-4xl">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p class="text-xl font-bold mb-2">Tên đăng nhập</p>
            <input class="border-2 w-96 h-12 mb-4 rounded-2xl px-4" type="text" name="name" maxlength="20">

            <p class="text-xl font-bold mb-2">Mật khẩu</p>
            <div class="relative w-96">
                <input id="passwordInput" class="border-2 w-full h-12 rounded-2xl px-4" type="password" name="password"
                    maxlength="20">
                <button id="toggleBtn" type="button" onclick="togglePassword()"
                    class="absolute right-4 top-3 hover:underline hover:cursor-pointer font-bold">Hiện</button>
            </div>

            @error('wrong')
                <div class="text-red-600 mt-2 mb-4 text-sm">{{ $message }}</div>
            @enderror

            <p class="flex justify-center">
                Nếu quên mật khẩu, bạn có thể&nbsp;
                <a href="{{ route('reset-password') }}"
                    class="text-blue-800 hover:underline hover:text-blue-950 font-bold">cài lại</a>
            </p>
            <p class="flex justify-center mb-8">
                Nếu chưa có tài khoản bạn có thể đăng ký&nbsp;
                <a class="text-blue-800 hover:underline hover:text-blue-950 font-bold"
                    href="{{ route('registerDB') }}">tại đây</a>
            </p>
            <div class="flex justify-center mb-4">
                <button
                    class="w-fit border-2 bg-blue-800 hover:bg-blue-950 hover:cursor-pointer text-white px-8 py-2 rounded-2xl font-bold"
                    type="submit">Đăng nhập</button>
            </div>
        </form>

        <a href="{{ route('auth/google') }}" class="btn btn-social btn-google">
            <img src="https://www.google.com/favicon.ico" alt="Google Icon">
            Sign in with Google
        </a>
        <a href="{{ route('auth/facebook') }}" class="btn btn-social btn-facebook disabled-link">
            <img src="https://www.facebook.com/favicon.ico" alt="Facebook Icon">
            Sign in with Facebook (Developing)
        </a>
        <a class="hover:underline hover:text-blue-950" href="/">
            < Quay lại</a>
    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<script>
    function togglePassword() {
        const input = document.getElementById("passwordInput");
        const button = document.getElementById("toggleBtn");
        const isPassword = input.type === "password";
        input.type = isPassword ? "text" : "password";
        button.innerHTML = isPassword ? "Ẩn" : "Hiện";
    }
</script>
