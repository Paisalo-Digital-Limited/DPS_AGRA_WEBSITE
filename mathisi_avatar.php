<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Mathisi AI Assistant</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f7fa;
font-family:Arial;
}

/* Chat Widget */

.chatbot{
position:fixed;
bottom:20px;
right:20px;
width:370px;
background:white;
border-radius:15px;
box-shadow:0 0 15px rgba(0,0,0,0.2);
overflow:hidden;
}

/* Header */

.chat-header{
background:#0d6efd;
color:white;
padding:12px;
font-weight:bold;
display:flex;
align-items:center;
}

/* Avatar */

.avatar{
width:45px;
height:45px;
border-radius:50%;
margin-right:10px;
animation:float 3s ease-in-out infinite;
}

@keyframes float{
0%{transform:translateY(0px);}
50%{transform:translateY(-5px);}
100%{transform:translateY(0px);}
}

/* Online Dot */

.online{
width:10px;
height:10px;
background:limegreen;
border-radius:50%;
margin-left:5px;
}

/* Chat Body */

.chat-body{
height:300px;
overflow-y:auto;
padding:10px;
background:#f9fafc;
}

/* Messages */

.bot{
background:#e9ecef;
padding:8px 10px;
border-radius:12px;
margin-bottom:8px;
max-width:80%;
}

.user{
background:#0d6efd;
color:white;
padding:8px 10px;
border-radius:12px;
margin-bottom:8px;
margin-left:auto;
max-width:80%;
}

/* Footer */

.chat-footer{
padding:10px;
border-top:1px solid #ddd;
}

/* Talking animation */

.talking{
animation:talk 0.5s infinite alternate;
}

@keyframes talk{
0%{transform:scale(1);}
100%{transform:scale(1.08);}
}

</style>

</head>

<body>

<div class="chatbot">

<div class="chat-header">

<img src="ava.png" class="avatar" id="avatar">

Mathisi – DPS Agra Virtual Assistant

<div class="online"></div>

</div>

<div class="chat-body" id="chatBody">

<div class="bot">
Hello 👋<br>
I am <b>Mathisi</b>, your school assistant.<br>
How can I help you today?
</div>

</div>

<div class="chat-footer">

<div class="input-group">

<input type="text" id="msg" class="form-control" placeholder="Ask something...">

<button class="btn btn-primary" onclick="sendMessage()">Send</button>

</div>

</div>

</div>

<script>

function sendMessage(){

var message=document.getElementById("msg").value;

if(message=="") return;

var chat=document.getElementById("chatBody");

var avatar=document.getElementById("avatar");

chat.innerHTML+="<div class='user'>"+message+"</div>";

avatar.classList.add("talking");

setTimeout(function(){

var reply=getReply(message);

chat.innerHTML+="<div class='bot'>"+reply+"</div>";

avatar.classList.remove("talking");

chat.scrollTop=chat.scrollHeight;

},800);

document.getElementById("msg").value="";

}

/* Simple AI Replies */

function getReply(msg){

msg=msg.toLowerCase();

if(msg.includes("admission"))
return "Admissions are open. Please visit the admission section of the DPS Agra website.";

if(msg.includes("fees"))
return "Fee details are available in the admission section.";

if(msg.includes("timing"))
return "School timing is generally 8:00 AM to 2:00 PM.";

if(msg.includes("contact"))
return "You can contact the school office for assistance.";

if(msg.includes("location"))
return "Delhi Public School Agra is located in Agra, Uttar Pradesh.";

return "Thank you for your question. Our team will assist you.";

}

</script>

</body>
</html>
