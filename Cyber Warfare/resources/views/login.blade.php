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

<div class="background">
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('loginuser') }}" onsubmit="return validateForm()">
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
                <a href="{{ route('register') }}" style="color: white; text-align: center;">Don't have an account? </a>

            </div>
        </form>
    </div>
</div>

<script>
    function validateForm() {
        // Get the values of username and password
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Check if the fields are empty
        if (username.trim() === '' || password.trim() === '') {
            alert('Username and password are required.');
            return false; // Prevent form submission
        }

        // You can add more complex validation logic here if needed

        return true; // Allow form submission
    }
</script>


</body>
</html>
