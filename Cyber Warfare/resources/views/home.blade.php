<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home page</title>
</head>
<body class="body">
    <div class="top-bar">
        <div>
            <a href="{{route('contact')}}">  <button class="sign-in-button">Contact us</button></a>
            <a href="{{route('about')}}">  <button class="sign-in-button">About us</button></a>
        </div>
        <div class="options">
            <button class="option-buttons">Option 1</button>
            <button class="option-buttons">Option 2</button>
        </div>
        <div class="auth">
          <a href="{{route('login')}}">  <button class="sign-in-button">Sign in</button></a>
          <a href="{{route('register')}}"> <button class="sign-up-button">Sign up</button></a>
        </div>
    </div>
</body>
</html>