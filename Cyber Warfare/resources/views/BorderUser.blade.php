<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/BorderUser.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <div class="main-container">
            <div class="side-bar">
                <div class="logo">
                    <h1>CW</h1>
                </div>
                <div class="details">
                    <img src="{{asset('res/profile_icon.png')}}" alt="Profile Icon" width="50px" height="50px">
                    <h4 style="margin-left: 15px; margin-right: 15px;">Syed Haris Ahmed<br><span style="color: lime; ">Border Resident</span></h4>
                    <img src="{{asset('res/drop_down_icon.png')}}" alt="DrownDropIcon" width="40px" height="40px">
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
                    <img src="{{asset('res/logout_icon.png')}}" alt="Logout_Icon" width="50px" height="50px">
                    <h1 style="margin-left: 20px;">Logout</h1>
                </div>
            </div>
            <div class="main-option-container">
                <div class="inner-div">
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>