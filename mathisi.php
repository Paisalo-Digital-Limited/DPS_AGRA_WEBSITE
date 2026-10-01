<?php
if(isset($_POST['msg']))
{
$msg = strtolower($_POST['msg']);

if(strpos($msg,"admission") !== false){
echo "Admissions are open at Delhi Public School Agra. Please visit the admission.html page of the website for details.";
}

elseif(strpos($msg,"timing") !== false){
echo "School timing is generally 8:00 AM to 2:00 PM.";
}
elseif(strpos($msg,"hello") !== false){
echo "Hello Sir/Madam. I am Mathisi a chatboat from Delhi Public School Agra. How can I help you!";
}

elseif(strpos($msg,"fees") !== false){
echo "Fee details are available in the fee structure page of DPS Agra website.";
}

elseif(strpos($msg,"contact") !== false){
echo "You can contact DPS Agra at the school office or through the contact us page of the website.";
}

elseif(strpos($msg,"location") !== false){
echo "Delhi Public School Agra is located at SHashripuram Agra, Uttar Pradesh.";
}

else{
echo "Sorry, I didn't understand. Please ask about Admission, Fees, Timing, Contact or Location.";
}

exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Mathisi - DPS Agra Chatbot</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f6f9;
}

.chatbot{
width:350px;
position:fixed;
bottom:20px;
right:20px;
background:white;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

.header{
background:#0d6efd;
color:white;
padding:12px;
font-weight:bold;
border-radius:10px 10px 0 0;
}

.chat-body{
height:300px;
overflow-y:auto;
padding:10px;
}

.bot{
background:#e9ecef;
padding:8px;
border-radius:10px;
margin-bottom:8px;
}

.user{
background:#0d6efd;
color:white;
padding:8px;
border-radius:10px;
margin-bottom:8px;
text-align:right;
}

.footer{
padding:10px;
border-top:1px solid #ddd;
}

</style>

</head>

<body>

<div class="chatbot">

<div class="header">
Mathisi – DPS Agra Virtual Assistant
</div>

<div class="chat-body" id="chatBody">

<div class="bot">
Hello 👋 <br>
I am <b>Mathisi</b>, virtual assistant of Delhi Public School Agra.<br>
How can I help you?
</div>

</div>

<div class="footer">

<div class="input-group">

<input type="text" id="message" class="form-control" placeholder="Type message...">

<button class="btn btn-primary" onclick="sendMessage()">Send</button>

</div>

</div>

</div>

<script>

function sendMessage(){

var msg=document.getElementById("message").value;

if(msg=="") return;

var chat=document.getElementById("chatBody");

chat.innerHTML+="<div class='user'>"+msg+"</div>";

var xhr=new XMLHttpRequest();

xhr.open("POST","",true);

xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

xhr.onload=function(){

chat.innerHTML+="<div class='bot'>"+this.responseText+"</div>";

chat.scrollTop=chat.scrollHeight;

}

xhr.send("msg="+msg);

document.getElementById("message").value="";

}

</script>

</body>
</html>
