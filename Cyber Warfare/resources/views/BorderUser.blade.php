<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/BorderUser.css')}}">

    <script src="{{ asset('node_modules/laravel-echo/dist/echo.js') }}"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>


    <title>Document</title>
    <script>
        let buttonClicked = "";
        document.addEventListener('DOMContentLoaded', function () {
            var liveChatOption = document.getElementById('liveChatOption');
            var reportOption = document.getElementById('reportOption');

            var liveChatButton = document.querySelector('.side-bar-option-div:nth-child(1) button');
            var reportButton = document.querySelector('.side-bar-option-div:nth-child(2) button');

            liveChatButton.addEventListener('click', function () {
                if (buttonClicked == "live") {
                    return;
                }
                buttonClicked = "live";
                liveChatOption.style.display = 'flex';
                reportOption.style.display = 'none';
                // alert("Clicked Live");
                window.location.href = '/chat';
            });

            reportButton.addEventListener('click', function () {
                if (buttonClicked == "report") {
                    return;
                }
                buttonClicked = "report";
                liveChatOption.style.display = 'none';
                reportOption.style.display = 'flex';
                alert("Clicked Report");
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
                    <h4 style="margin-left: 15px; margin-right: 15px;">Syed Haris Ahmed<br><span style="color: lime; ">Border Resident</span></h4>
                    <img src="{{ asset('res/drop_down_icon.png') }}" alt="DrownDropIcon" width="40px" height="40px">

                </div>
                <div class="side-bar-options-container">
                    <div class="side-bar-option-div">
                        <button class="side-bar-option-button">Live Chat</button>
                    </div>
                    <div class="side-bar-option-div">
                        <button class="side-bar-option-button">Report</button>
                    </div>
                    <!-- <div class="side-bar-option-div">
                        <button class="side-bar-option-button">Option 3</button>
                    </div> -->
                </div>
                <div class="log-out-div">

                    <img src="{{ asset('res/logout_icon.png') }}" alt="Logout_Icon" width="50px" height="50px">

                    <h1 style="margin-left: 20px;">Logout</h1>
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
                    <h1>Live Chat</h1>
                </div>
                <div class="inner-div" id="reportOption" style="display: none;">
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
                    <h1>Report</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>