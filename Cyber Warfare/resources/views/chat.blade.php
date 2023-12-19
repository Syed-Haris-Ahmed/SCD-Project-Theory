<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>
<body>
    
    <div class="background">
        <div class="main-container">
            <a href="{{ route('BorderUser') }}" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px; border: 1px solid #007bff;">Dashboard</a>
            <div class="live-chat-div">
                <h1 style="text-align: center; color: white;"> LIVE CHAT </h1>

                <!-- Chat messages container -->
                <div id="chat-messages">
                    <!-- Existing messages will be loaded here -->
                    @foreach($chatHistory as $message)
                        @if(!empty($message->content))
                            
                        <div class="message">
                            <strong style="color: #d1d1d1;">{{ $message->username }}:</strong> <span style="color: white;">{{ $message->content }}</span>
                        </div>
                        
                        @endif
                        <!-- Access other attributes of the $message model as needed -->
                    @endforeach 
                </div>

                <!-- Form for sending messages -->
                <div class="message-body-container">
                    <form id="message-form" onsubmit="return validate()">
                        <input type="text" id="message-input" placeholder="Type your message...">
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validate(){
        let msg = document.getElementById('message-input').value;
        if(msg == ''){
            alert('Please type something in the message bar');
            return false;
        }
        return true;
    }
        </script>

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
                        $('#chat-messages').append('<div class="message"><strong style="color: #d1d1d1;">{{ $username }}:</strong> <span style="color: white;">'+ message +'</span> </div>');
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
