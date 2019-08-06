<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form validation with JavaScript</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <form method="POST" action="index.php" onsubmit="return Validate()" name="vform" novalidate>
            <div id="username_div">
                <h3><label>Username</label></h3> <br>
                <input type="text" name="username" class="textInput" placeholder="Insert your name...">
                <div id="name_error"></div>
            </div>
            <div id="email_div">
                <h3><label>Email</label></h3> <br>
                <input type="email" name="email" class="textInput" placeholder="Insert your email...">
                <div id="email_error"></div>
            </div>
            <div id="subject_div">
                <h3><label>Subject</label></h3> <br>
                <textarea id ="subject" name="subject" form="vform"></textarea>
                <div id="subject_error"></div>
            </div>
            <div>
                <input type="submit" name="register" value="Register" class="btn">
            </div>
        </form>
    </div>
</body>

</html>
<script type="">// SELECTING ALL TEXT ELEMENTS
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var subject = document.getElementById("subject");
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var subject_error = document.getElementById('subject_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
subject.addEventListener('blur', subjectVerify, true);
// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    console.log(subject.value)
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red"; 
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
    
    if (email.value.indexOf("@")<1){
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Invalid email"
    email.focus();
    return false;
    }
  // validate subject
  if (subject.value == "") {
    subject.style.border = "1px solid red";
    document.getElementById('subject_div').style.color = "red";
    subject_confirm.style.border = "1px solid red";
    subject_error.textContent = "subject is required";
    subject.focus();
    return false;
  }
    
    
 if (subject.value.length < 3) {
    subject.style.border = "1px solid red";
    document.getElementById('subject_div').style.color = "red";
    subject_error.textContent = "Username must be at least 3 characters";
    subject.focus();
     return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function subjectVerify() {
  if (subject.value != "") {
  	subject.style.border = "1px solid #5e6e66";
  	document.getElementById('subject_div').style.color = "#5e6e66";
  	subject_error.innerHTML = "";
    
  	return false;
  }
}</script>
