<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
        }
        
        #chat-messages {
            max-width: 600px;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            max-height: 400px;
        }
        
        .message {
            padding: 8px;
            margin-bottom: 10px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        
        .message strong {
            font-weight: bold;
            color: #333;
        }
        
        #message-form {
            margin-top: 20px;
            display: flex;
        }
        
        #message-input {
            flex: 1;
            padding: 8px;
            margin-right: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }
        
        #message-input:focus {
            outline: none;
            border-color: dodgerblue;
        }
        
        button[type="submit"] {
            padding: 8px 15px;
            border-radius: 5px;
            border: none;
            background-color: dodgerblue;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button[type="submit"]:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>

    <!-- Chat messages container -->
    <div id="chat-messages">
        <!-- Existing messages will be loaded here -->
        @foreach($chatHistory as $message)
            <div class="message">
                <strong>{{ $message->username }}:</strong> {{ $message->content }}
            </div>
            <!-- Access other attributes of the $message model as needed -->
        @endforeach 
    </div>

    <!-- Form for sending messages -->
    <form id="message-form">
        <input type="text" id="message-input" placeholder="Type your message...">
        <button type="submit">Send</button>
    </form>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Form submission via AJAX
            $('#message-form').submit(function(e) {
                e.preventDefault();
                var message = $('#message-input').val();

                $.ajax({
                    type: 'POST',
                    url: '/chat',
                    data: {
                        message: message,
                        _token: '{{ csrf_token() }}' // Add CSRF token for Laravel
                    },
                    success: function(response) {
                        // Handle successful message submission
                        // Append the new message to the chat interface
                        $('#chat-messages').append('<div class="message"><strong>{{ $username }}:</strong> ' + message + '</div>');
                        $('#message-input').val(''); // Clear input field
                    },
                    error: function(error) {
                        // Handle error if message submission fails
                        console.error('Error sending message:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>
