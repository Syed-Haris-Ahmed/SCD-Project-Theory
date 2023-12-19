<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
/* Basic styling for the About Us page */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

h1 {
    margin: 0;
}

main {
    padding: 20px;
}

.about-content {
    text-align: center;
}

.team-members {
    display: flex;
    justify-content: space-around;
    margin-top: 30px;
}

.member {
    text-align: center;
    width: 30%;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.member img {
    border-radius: 50%;
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-bottom: 10px;
}
   
    </style>
</head>

<body>
    <header>
        <h1>About Us</h1>
    </header>
    <main>
        <section class="about-content">
            <h2>Our Story</h2>
            <p>Welcome to our website! We started our journey with the goal of securing our country in case of Invasion!</p>
        </section>
        <section class="team-members">
            <h2>Our Team</h2>
            <div class="member">
                <h3>Muhammad Abbas Abid</h3>
                <p>Role: Back-End Developer</p>
            </div>
            <div class="member">
                <h3>Haris Ahmed</h3>
                <p>Role: Front-End Developer</p>
            </div>
            <div class="member">
                <h3>Khawalid Mehmood</h3>
                <p>Role: Back-End Developer</p>
            </div>
        </section>
    </main>
</body>
</html>