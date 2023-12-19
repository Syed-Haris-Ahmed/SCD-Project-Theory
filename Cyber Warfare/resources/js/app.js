import axios from 'axios';
import './bootstrap';

const message_el = document.getElementById("messages")
const messages= document.getElementById('message_input');
const message_form = document.getElementById('message_form');

message_form.addEventListener('submit',function(e){

let has_errors = false;

if(messages.value == ''){
    alert('Please Enter a message');
    has_errors = true;
}

if(has_errors){
    return;
}

const options ={
    method: 'post',
    url: '/send-message',
    data: {
        message: messages.value
    }
}

axios(options);

});

window.Echo.channel('chat')
.listen('.message', (e) => {
    message_el.innerHTML += '<div class="messages"' + e.message + '</div>'
});

// window.Echo.channel('chat')
// .listen('App/Events/message', (e) => {
//     console.log(e);
// });

// window.Echo.channel('chat').listen('.message', (e) => {
//     message_el.classList.add('message')
//     message_el.textContent = e.message; // Assuming e.message contains the message text

//     message_el.appendChild(message_el);
// });
