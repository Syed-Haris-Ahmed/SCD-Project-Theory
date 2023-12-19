<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard User</title>
    <link rel="stylesheet" href="{{ asset('css/BorderUser.css') }}">
    <script>
        let buttonClicked = "live";
        document.addEventListener('DOMContentLoaded', function () {
            var liveChatOption = document.getElementById('liveChatOption');
            var reportOption = document.getElementById('reportOption');
            var profileOption = document.getElementById('profileOption');

            var liveChatButton = document.getElementById('liveChatButton');
            var reportButton = document.getElementById('reportButton');
            var profileButton = document.getElementById('profileButton');

            liveChatButton.addEventListener('click', function () {
                console.log(buttonClicked);
                if (buttonClicked == "live") {
                    return;
                }
                buttonClicked = "live";
                liveChatOption.style.display = 'flex';
                reportOption.style.display = 'none';
                profileOption.style.display = 'none';
                // alert("Clicked Live");
                window.location.href = '/chat'; 
            });

            reportButton.addEventListener('click', function () {
                console.log(buttonClicked);
                if (buttonClicked == "report") {
                    return;
                }
                buttonClicked = "report";
                liveChatOption.style.display = 'none';
                reportOption.style.display = 'flex';
                profileOption.style.display = 'none';
            });

            profileButton.addEventListener('click', function () {
                console.log(buttonClicked);
                if (buttonClicked == "profile") {
                    return;
                }
                buttonClicked = "profile";
                liveChatOption.style.display = 'none';
                reportOption.style.display = 'none';
                profileOption.style.display = 'flex';
            });
        });
    </script>
</head>
<body>
    <div class="background">
        <div class="main-container">
            <div class="side-bar">
                <div class="logo">
                    <h1>CW</h1>
                </div>
                <div class="details">

                    <img src="{{ asset('res/profile_icon.png') }}" alt="Profile Icon" width="50px" height="50px">
                    <h4 style="margin-left: 15px; margin-right: 15px;">Name<br><span style="color: lime; ">Standard User</span></h4>
                    <button id="profileButton" style="background-color: transparent; border: none"><img src="{{ asset('res/drop_down_icon.png') }}" alt="DrownDropIcon" width="40px" height="40px"></button>

                </div>
                <div class="side-bar-options-container">
                    <div class="side-bar-option-div">
                        <button id="liveChatButton" class="side-bar-option-button">Live Chat</button>
                    </div>
                    
                    <!-- <div class="side-bar-option-div">
                        <button class="side-bar-option-button">Option 3</button>
                    </div> -->
                </div>
                <div class="log-out-div">

                    <img src="{{ asset('res/logout_icon.png') }}" alt="Logout_Icon" width="50px" height="50px"> 

                    <a href="{{ route('logout') }}" style="display: inline-block; padding: 10px 20px; margin-left: 10px; background-color: #3490dc; color: #fff; text-decoration: none; border-radius: 5px;">Log Out</a>

                </div>
            </div>
            <div class="main-option-container">
                <div class="inner-div" id="liveChatOption">
                    <!-- <div class="inner-row">
                        <button class="live-chat" style="background-color: rgba(255, 0, 0, 0.4);">Live Chat 1</button>
                        <button class="live-chat" style="background-color: rgba(0, 0, 0, 0.4);">Live Chat 2</button>
                        <button class="live-chat" style="background-color: rgba(0, 255, 4, 0.4);">Live Chat 3</button>
                    </div>
                    <div class="inner-row" style="margin-top: 10px;">
                        <button class="live-chat" style="background-color: rgba(8, 0, 255, 0.4);">Live Chat 4</button>
                        <button class="live-chat" style="background-color: rgba(128, 128, 128, 0.4);">Live Chat 5</button>
                        <button class="live-chat" style="background-color: #7F2982;">Live Chat 6</button>
                    </div> -->
                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                        <h1>Live Chat</h1>
                    </div>
                </div>
                <div class="inner-div" id="profileOption" style="display: none;">
                    <form method="POST">
                    @csrf
                        <div>
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required>
                        </div>

                        
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>

                        
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>

                        <div>
                            <button type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
</html>
