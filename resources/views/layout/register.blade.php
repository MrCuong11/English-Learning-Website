<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>English Learning Sign In</title>
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
            height: auto;
            background: rgba(0, 0, 0, 0.5);
            /* Dark overlay for readability */
            z-index: 0;
        }
    </style>
    @vite('resources/css/app.css');
</head>
<body>
  <div class="overlay"></div>
    <div class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-auto h-auto bg-white px-16 py-8 rounded-2xl shadow-2xl">
      <div class="logo text-center"> 
        <div class="dots">
          <div class="dot"></div><div class="dot"></div>
          <div class="dot"></div><div class="dot"></div>
        </div>
        <h2>English <br> Learning</h2>
      </div>
      <h2 class=" text-center">Register for an account</h2>
      <p class=" text-center">You need a <a href="#">English Learning account</a> to access our services. </br>
      If you already have an account you can <a href="{{ route('login') }}">sign in.</a><br> </p>
      
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <p class=" text-xl font-bold mb-2">Email address</p>
        <input class=" border-2 w-full h-12 mb-4 rounded-2xl px-4" type="email" id="email" name="email"/>
        @error('email')
        <div class="text-red-600 mt-2 mb-4 text-sm">{{ $message }}</div>
        @enderror
        <p class=" text-xl font-bold mb-2">Username</p>
        <input class=" border-2 w-full h-12 mb-4 rounded-2xl px-4" type="text" id="username" name="username" required />
        @error('username')
        <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror
        <p class=" text-xl font-bold mb-2">Password</p>
        <div class=" relative w-full">
                    <input id="passwordInput" class=" border-2 w-full h-12 mb-4 rounded-2xl px-4" type="password" name="password" maxlength="20" required>
                    <button 
                        id="toggleBtn"
                        type="button"
                        onclick="togglePassword()"
                        class=" absolute right-4 top-3 hover:underline hover:cursor-pointer font-bold"
                    >
                        Hiện
                    </button>
                </div>

        <div class="terms text-center">
            <input type="checkbox" id="agree" name="agree" required />
            <label for="agree">I am aged 18 or over and agree to the account registration <a href="#">Terms of Use</a>.</label>
          </div>
        <div class=" flex justify-center mb-8">
          <button class=" w-fit border-2 bg-blue-800 hover:bg-blue-950 hover:cursor-pointer text-white px-8 py-2 rounded-2xl font-bold" type="submit" class="signin-btn">Register</button>
        </div>

          
        <p class="goback">If you’re not ready, you can <a href="/">go back</a>.</p>
      </form>
    </div>
  </div>

  @if(session('success'))
        <div id="bgPopUp" class="fixed z-50 inset-0 bg-black/50 flex flex-col items-center justify-center">
          <div id="popUp" class="bg-white px-4 py-2 -translate-y-8 rounded-xl transition-all duration-300 transform scale-0">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Yes_Check_Circle.svg/1024px-Yes_Check_Circle.svg.png" alt="Success" class="w-16 h-16 font mx-auto mb-4 mt-2">
            <p class=" text-3xl font-medium">
              Đăng ký thành công!
            </p>
          </div>
        </div>
  @endif
  <script src="script.js"></script>
</body>
</html>
<script>
      function togglePassword() {
        const input = document.getElementById("passwordInput");
        const button =document.getElementById("toggleBtn");
        const isPassword = input.type === "password";
        input.type = isPassword ? "text" : "password";
        button.innerHTML =isPassword ? "Ẩn" : "Hiện";
    }
    function animationPopUp() {
      const popUp =document.getElementById("popUp");
      const bgPopUp =document.getElementById("bgPopUp");
      popUp.classList.remove("scale-0");
      popUp.classList.add("scale-120");
      setTimeout(() => {
        popUp.classList.remove("scale-120");
      }, 250);
      setTimeout(() => {
        popUp.classList.add("scale-0");
        setTimeout(() => {
          bgPopUp.classList.add("hidden");
        }, 500);
      }, 3000);

    }
    animationPopUp();
</script>