<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="css/register.css">
    <script src="js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    <center><a href="./index.html"><img src="img/logo.png" alt="" style="margin-top: 80px; width: 50%;"></a></center>
    <div class="title">Registration</div>
    <div class="content">
      <form id="form" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="user-details">
          <div class="input-box">
            <span class="details">UserName</span>
            <input type="text" id="username" name="username" placeholder="Enter your name">
            <p id="nameerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="email" placeholder="Enter your Email">
            <p id="emailerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="number" name="number" placeholder="Enter your Phone Number">
          	<p id="numbererror"></p>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" id="city" name="city" placeholder="Enter your City">
          	<p id="cityerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Enter your password">
          	<p id="passworderror"></p>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password">
          	<p id="cpassworderror"></p>
          </div>
          <div class="input-box">
            <span class="details">Image uploaded (Option)</span>
            <input type="file" id="image" name="image">
          </div>
        </div>
        <p id="error_para" ></p>
        <div id="err"></div>
        <div class="button">
          <input type="submit" value="Register" id="submit" name="submit">
        </div>
      </form>
    </div>
  </div>
<script type="text/javascript">
  function validate()
{
 var error="";
 var name = document.getElementById( "username" );
 var email = document.getElementById( "email" );
 var number = document.getElementById( "number" );
 var city = document.getElementById( "city" );
 var password = document.getElementById( "password" );
 var cpassword = document.getElementById( "cpassword" );

 if( name.value == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 }
 if(name.value.length <= 2) 
{
   error = " <font color='red'>!please not allow 2 and 20 chaecter</font> ";
 
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 
}
if(!isNaN(name.value)) 
{
   error = " <font color='red'>!please only charecter allowed</font> ";
 
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 
}






 else if( email.value == "")
 {
  error = " <font color='red'>!Requrie Email.</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }
 else if( email.value.indexOf('@') <= 0 )
 {
  error = " <font color='red'>! ** @ invail position</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }

 else if ((email.value.charAt(email.value.length-4)!='.') && (email.value.charAt(email.value.length-3)!='.'))
 {
  error = " <font color='red'>! ** . invaild position</font> ";
  document.getElementById( "emailerror" ).innerHTML = error;
  return false;
 }






 else if( number.value == "")
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
 }
else if( number.value.length!=10)
 {
  error = " <font color='red'>! ** mobile number must 10 digit</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
 }

else if(isNaN(number.value)){
  error = " <font color='red'>! ** mobile number must be not allow charecter</font> ";
  document.getElementById( "numbererror" ).innerHTML = error;
  return false;
}




 else if( city.value == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "cityerror" ).innerHTML = error;
  return false;
 }

 else if( password.value == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
 }

  if(password.value.length <= 2) 
{
   error = " <font color='red'>!not allow 2 and 10 chaecter</font> ";
 
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
 
}
  if(password.value.length >= 10) 
{
   error = " <font color='red'>!not allow 2 and 10 chaecter</font> ";
 
  document.getElementById( "passworderror" ).innerHTML = error;
  return false;
 
}


else if( cpassword.value == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "cpassworderror" ).innerHTML = error;
  return false;
 }

else if( cpassword.value != password.value)
 {
  error = " <font color='red'>!Conform Password Not Match.</font> ";
  document.getElementById( "cpassworderror" ).innerHTML = error;
  return false;
 }

 else
 {
  return true;
 }
}
</script>
</body>
</html>
