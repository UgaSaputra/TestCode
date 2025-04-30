<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="right-section">
            <div class="login-box">
                <h2 id="login-title">Login Untuk Lebih lanjut</h2>
                @if(session('success'))
                    <div class="alert success">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" placeholder="E-Mail" required>
                        <i class="fa fa-envelope"></i>
                    </div>

                    <div class="input-group">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class="fa fa-lock" id="togglePassword"></i>
                    </div>

                    <button type="submit" id="signin-btn">SIGN IN</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("togglePassword").addEventListener("click", function() {
            let passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        });
    </script>
</body>
</html>
