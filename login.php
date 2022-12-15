 <html>
<head>
<title>CryptiCode Login</title>
          <img src="logo3.png" height="50px" >

<link rel="stylesheet" href="styles.css">
 <link rel="icon" type="image/png" href="logo.png">
  </head>
   <link rel="icon" type="png" href="tablogo.png	">

 
<body>
 
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" id="nameTF" placeholder="Name" required/>
      <input type="email" id="emailTF" placeholder="Email ID" required/>
      <input type="password" id="passTF" placeholder="Password" required/>
      <input type="password" id="confirmPassTF" placeholder="Confirm Password" required/>

      <button type="button" id="submitButton" onclick="handleLogin()" <a href="main.html"></a> <type>Create Account</button>
            

      <p class="message"> Already Registered? <a href="#">Login</a></p>
       <p class="message"> Do you want to start learning without logging in? <a href="main.html">Click Here</a></p><br>
     <p class="message"> Click here to view our Terms and Policies <a href=""> Click here</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="Username" required/>
      <input type="password" placeholder="Password" required/>
     


      <button <a href=main.html></a>Login </button>
      <p class="message"> Not Registered? <a href="#">Register</a></p>
 <p class="message"> Do you want to start learning without logging in? <a href="main.html">Click Here</a></p><br>
    </form>
  </div>
</div>
 
<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<script>
  $('.message a').click(function () {
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
  });
  document.getElementByID("nameTF")
  document.getElementByID("emailTF")
  document.getElementByID("passTF")
  
 
 </script>
</body>
</html>
 
 <?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];

$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
