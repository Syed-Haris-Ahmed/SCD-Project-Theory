<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
</head>
<body>

    <div id="messages"></div>
    
    <form id="message_form">

        <input type="text" name="message" id="message_input" placeholder="Type a message">
        <button type="submit" id="send_message">Send Message</button>

    </form>

    <script src="{{asset('res/app.js')}}"> </script>
</body>
</html>