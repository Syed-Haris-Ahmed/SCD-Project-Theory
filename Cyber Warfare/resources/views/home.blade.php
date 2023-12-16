<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Document</title>
</head>
<body class="body">
    <div class="top-bar">
        <div>
            <h1>Logo</h1>
        </div>
        <div class="options">
            <button class="option-buttons">Option 1</button>
            <button class="option-buttons">Option 2</button>
            <button class="option-buttons">Option 3</button>
            <button class="option-buttons">Option 4</button>
        </div>
        <div class="auth">
<<<<<<< HEAD
            <a href="{{route("login")}}"><button class="sign-in-button">Sign in</button></a>
            <button class="sign-up-button">Sign up</button>
=======
          <a href="{{route('login')}}">  <button class="sign-in-button">Sign in</button></a>
          <a href="{{route('register')}}"> <button class="sign-up-button">Sign up</button></a>
>>>>>>> b6e568fea33bbf5de371057a4a69dcfe957ea6e9
        </div>
    </div>
</body>
</html>