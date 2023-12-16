<!-- login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 3px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Username -->
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>

</body>
</html>
