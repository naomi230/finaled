<?php
include "connect.php";

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<style>
a{color:white;
  text-decoration:none;}
 h1{color:white;
    font-size:xx-large;}

table{border-collapse;}
td{
color:white;
font-size:large;
padding:10px;
height:30px;
text-align:right;}

input{width:400px;
height:30px;
background-color:lightskyblue;}
.cham{color:white;}

</style>
<script type="text/javascript">
<!--
   function validateform()
   {
   var fname=document.form1.fname.value;
   var mname=document.form1.mname.value;
   var sname=document.form1.sname.value;
   var uname=document.form1.uname.value;
   var password=document.form1.password.value;
   var email=document.form1.email.value;
   var contacts=document.form1.contacts.value;
   var e=email.indexOf("@");
   var f=email.indexOf(".");
   
   if(fname<=0 || !isNaN(fname)){
    alert("Please enter a valid Firstname");
	}
	
  if(mname<=0 || !isNaN(mname)){
	alert("Please enter a valid Middlename");
	}
 if(sname<=0 || !isNaN(sname)){
	alert("Please enter a valid Surname");
	}
if(uname<=0 || !isNaN(uname)){
	alert("Please enter a valid Username");
	}
	
  if(password.length<=10 || password.length>100){
	alert("Invalid Password");}
	
if(email<=0 || e<1||(f-e)<2){
	alert("Please enter a valid email");
	}
if(contacts<=0){
    alert("Please enter your Contacts either phone number,Social media contact or Email");
}
   }
 //-->
   </script>

  
</head>
<body style background="canvaboxes.png">
<div style=" height:70px; ">
<center>
<ul><li style="display:inline;"><a href="Homepage.html">Home</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<li style="display:inline;"><a href="about me.html">About me</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<li style="display:inline;"><a href="register.php">Registration</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<li style="display:inline;"><a href="courses.html">Courses</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<li style="display:inline;"><a href="cv.html">CV</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<li style="display:inline;"><a href="contacts.html">Contacts</a></li>
</ul>
</center>
</div>
<div class="cham">
<center>
<form action="" method="POST" name="form1" onsubmit="return validateform();">
<table >
<tr>
<td>Firstname:</td>
<td><input type="text" name="fname"></td>
</tr>
<tr>
<td>Middlename:</td>
<td><input type="text" name="mname"></td>
</tr>
<tr>
<td>Surname:</td>
<td><input type="text" name="sname"></td>
</tr>
<tr>
<td>Username:</td>
<td><input type="text" name="uname"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" name="password"></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Other Contacts:</td>
<td><input type="text" name="contacts"></td>
</tr>
</table>
<p><label>upload your CV</label><br>
<input type="file" style="width:200px;height:30px; background-color:lightsteelblue; name="datafile" size="40"><br>
</p>
<p><input type="submit" style="width:100px;height:30px; background-color:lightsteelblue; name="submit" value="submit"></p>


</form>
</center>
</div>
</body>
</html>