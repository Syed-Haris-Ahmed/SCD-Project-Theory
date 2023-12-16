<!-- login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <title>Login</title>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('loginuser') }}">
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
