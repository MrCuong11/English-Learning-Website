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
            /* Dark overlay for readability */
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

        /* disabled facebook btn */
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
    @vite('resources/css/app.css');
</head>

<body>
    <div class="overlay"></div>
    <div class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-auto h-auto bg-white px-16 py-8 rounded-2xl shadow-2xl">
        <div class=" text-center">
            <p class=" text-4xl font-bold">Reset mật khẩu</p>
        </div>
        <form method="POST" action="{{ route('password.update')}}">
            @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ request()->email }}">
                <p class=" text-xl font-bold mb-2">Mật khẩu</p>
                <div class=" relative w-96">
                    <input id="passwordInput" class=" border-2 w-full h-12 rounded-2xl px-4" type="password" name="password" maxlength="20">
                    <button 
                        id="toggleBtn"
                        type="button"
                        onclick="togglePassword()"
                        class=" absolute right-4 top-3 hover:underline hover:cursor-pointer font-bold"
                    >
                        Hiện
                    </button>
                </div>
                <p class=" text-xl font-bold mb-2">Xác nhận mật khẩu</p>
                <div class=" relative w-96">
                    <input id="passwordInput2" class=" border-2 w-full h-12 rounded-2xl px-4" type="password" name="password_confirmation" maxlength="20">
                </div>

                <div class=" flex justify-center mb-4">
                    <button class=" w-fit border-2 bg-blue-800 hover:bg-blue-950 hover:cursor-pointer text-white px-8 py-2 rounded-2xl font-bold" type="submit">Đổi mật khẩu</button>
                </div>
        </form>
    </div>

</body>
</html>
<script>
    function togglePassword() {
        const input = document.getElementById("passwordInput");
        const button =document.getElementById("toggleBtn");
        const input2 = document.getElementById("passwordInput2");
        const isPassword = input.type === "password";
        input.type = isPassword ? "text" : "password";
        input2.type = isPassword ? "text" : "password";
        button.innerHTML =isPassword ? "Ẩn" : "Hiện";
    }
</script>