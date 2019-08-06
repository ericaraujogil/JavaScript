<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form validation with JavaScript</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <h1 style="text-align: center"> CONTACT FORM </h1>
        <form name="RegForm" action="index.php" onsubmit="return Validate()" method="post">
            <div id="name_div">
                <h3>Name: <input type="text" size=65 name="Name"> </h3><br>
                <div id="name_error"></div>
            </div>
            <div id="lastname_div">
                <h3>Last Name: <input type="text" size=65 name="lastName"> </h3><br>
                <div id="lastname_error"></div>
            </div>
            <div id="email_div">
                <h3>E-mail Address: <input type="text" size=65 name="Email"> </h3><br>
                <div id="email_error"></div>
            </div>
            <div id="phone_div">
                <h3>Telephone: <input type="text" size=65 name="Telephone"> </h3><br>
                <div id="phone_error"></div>
            </div>
            <div id="subject_div">
                <h3>SELECT A SUBJECT
                    <select type="text" value="" name="Subject">
                        <option>Choose an option</option>
                        <option>WORK</option>
                        <option>REQUEST</option>
                        <option>EVENT</option>
                        <option>Others</option>
                    </select></h3><br><br>
                <div id="subject_error"></div>
            </div>
            <div id="message_div">
                <h3>Message: <textarea cols="55" name="Message">  </textarea></h3>
            </div>
            <h3>
                <input id="button1" type="submit" value="send" name="Submit">
                <input id="button2" type="reset" value="Reset" name="Reset">
            </h3>
        </form>
    </div>
</body>

</html>
<script type="">
    function Validate() {
  { 
    var name = document.forms["RegForm"]["Name"];               
    var email = document.forms["RegForm"]["Email"];    
    var phone = document.forms["RegForm"]["Telephone"];  
    var subject =  document.forms["RegForm"]["Subject"];  
    var lastname = document.forms["RegForm"]["lastName"];
      
    //Añadimos event handlers para restaurar los estilos
      
      name.addEventListener('blur', nameVerify, true);
      email.addEventListener('blur', emailVerify, true);
      phone.addEventListener('blur', phoneVerify, true);
      subject.addEventListener('blur', subjectVerify, true);
      lastname.addEventListener('blur', lastnameVerify, true);
   
    if (name.value == "")                                  
    { 
        name.style.border = "1px solid red";
        document.getElementById('name_div').style.color = "red";
        name_error.textContent = "Name is required"; 
        name.focus(); 
        return false; 
    } 
   
    if (lastname.value == "")                               
    { 
        lastname.style.border = "1px solid red";
        document.getElementById('lastname_div').style.color = "red";
        lastname_error.textContent = "Lastname is required"; 
        lastname.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        email.style.border = "1px solid red";
        document.getElementById('email_div').style.color = "red";
        email_error.textContent = "Email is required";
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        email.style.border = "1px solid red";
        document.getElementById('email_div').style.color = "red";
        email_error.textContent = "Please enter a valid e-mail address.";
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        email.style.border = "1px solid red";
        document.getElementById('email_div').style.color = "red";
        email_error.textContent = "Please enter a valid e-mail address."; 
        email.focus(); 
        return false; 
    } 
   
    if (phone.value == "")                           
    { 
        phone.style.border = "1px solid red";
        document.getElementById('phone_div').style.color = "red";
        phone_error.textContent = "Phone is required";
        phone.focus(); 
        return false; 
    } 
   
    if (subject.selectedIndex < 1)                  
    { 
        subject.style.border = "1px solid red";
        document.getElementById('subject_div').style.color = "red";
        subject_error.textContent = "Please enter the subject of the message";
        subject.focus(); 
        return false; 
    }
      
    function nameVerify() {
    if (name.value != "") {
    name.style.border = "1px solid #00ff00";
    document.getElementById('name_div').style.color = "#00ff00";
    name_error.innerHTML = "";
    return true;
    }
    }
    function emailVerify() {
    if (email.value != "") {
    email.style.border = "1px solid #00ff00";
    document.getElementById('email_div').style.color = "#00ff00";
    email_error.innerHTML = "";
    return true;
    }
    }
    function subjectVerify() {
    if (subject.value != "") {
    subject.style.border = "1px solid #00ff00";
    document.getElementById('subject_div').style.color = "#00ff00";
    subject_error.innerHTML = "";

    return true;
    }
    }
      
    function lastnameVerify() {
  if (lastname.value != "") {
   lastname.style.border = "1px solid #00ff00";
   document.getElementById('lastname_div').style.color = "#00ff00";
   lastname_error.innerHTML = "";
   return true;
  }
}
function phoneVerify() {
  if (phone.value != "") {
  	phone.style.border = "1px solid #00ff00";
  	document.getElementById('phone_div').style.color = "#00ff00";
  	phone_error.innerHTML = "";
  	return true;
  }
}

   
    return true; 
}
}
</script>
