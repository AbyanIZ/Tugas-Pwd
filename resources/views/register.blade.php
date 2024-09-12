<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - cineNexis</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #1c1c1c;
            font-family: Arial, sans-serif;
        }

        .register-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 400px;
            text-align: center;
            position: relative;
        }

        .logo img {
            width: 150px;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            background-color: #f2f2f2;
            font-size: 14px;
            outline: none;
        }

        .register-btn {
            width: calc(100% - 20px);
            padding: 15px;
            margin-top: 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-btn:hover {
            background-color: #0056b3;
        }

        .login-link {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #007BFF;
            font-size: 14px;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <a href="{{ route('login') }}" class="login-link">Login</a>
        <div class="logo">
            <img src="{{ asset('cinenexis-logo.png') }}" alt="cineNexis Logo">
        </div>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <input type="text" name="username" placeholder="Ketik username disini.." required>
            <input type="email" name="email" placeholder="Ketik email disini.." required>
            <input type="password" name="password" placeholder="Ketik password disini.." required>
            <button type="submit" class="register-btn">Register!</button>
        </form>
    </div>

</body>
</html>
