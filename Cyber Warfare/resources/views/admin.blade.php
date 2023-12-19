<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$username}}'s Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/BorderUser.css') }}">
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
                // alert("Clicked Report");
                reportButton.disabled =  true;
            });
        });
    </script>
</head>
<body>
    {{-- @php
        dd(reports);
    @endphp --}}
    <div class="background">
        <div class="main-container">
            <div class="side-bar">
                <div class="logo">
                    <h1>CW</h1>
                </div>
                <div class="details">
                    <img src="{{ asset('res/profile_icon.png') }}" alt="Profile Icon" width="50px" height="50px">
                    <h4 style="margin-left: 15px; margin-right: 15px;">{{$username}}<br><span style="color: lime; ">Admin</span></h4>
                    <img src="{{ asset('res/drop_down_icon.png') }}" alt="DrownDropIcon" width="40px" height="40px">
                </div>
                <div class="side-bar-options-container">
                    <div class="side-bar-option-div">
                        <button class="side-bar-option-button">Activate Live Chat</button>
                    </div>
                    <div class="side-bar-option-div">
                        <a href="{{ route('report') }}">
                            <button id="report" class="side-bar-option-button">
                                Show Reports
                            </button>
                        </a>
                    </div>
                </div>
                <div class="log-out-div">
                    <img src="{{ asset('res/logout_icon.png') }}" alt="Logout_Icon" width="50px" height="50px"> 
                    <a href="{{ route('logout') }}" style="display: inline-block; padding: 10px 20px; margin-left: 10px; background-color: #3490dc; color: #fff; text-decoration: none; border-radius: 5px;">Log Out</a>
                </div>
            </div>
            <div class="main-option-container">
                <div class="inner-div" id="liveChatOption">
                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                        <h1>Activate Live Chat</h1>
                        <div class="live-chat-activation">
                            <button class="live-chat-buttons" style="color: lime;">Activate</button> <button class="live-chat-buttons" style="color: red; margin-left: 16px">Dissable</button>
                        </div>
                    </div>
                </div>
                <div class="inner-div" id="reportOption" style="display: none;">
                    <h1>Show Reports</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
