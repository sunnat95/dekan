<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kirish </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0c0c0c43;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: center;
        }
        .login-container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input {
            width: 94%;
            padding: 10px;
            margin: 10px 0;
            border: 3px solid #ccc;
            border-radius: 10px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 26px;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>KIRISH</h1>
        <input type="text" id="username" placeholder="Login">
        <input type="password" id="password" placeholder="Parol">
        <button onclick="login()">Kirish</button>
        <div id="error" class="error"></div>
    </div>

    <script>
        function login() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorElement = document.getElementById('error');

            if (username === '1' && password === '123456') {
                window.location.href = 'http://127.0.0.1:8000/Talabalar';
            } else {
                errorElement.textContent = 'Login yoki parol noto\'g\'ri';
            }
        }
    </script>
</body>
</html>
