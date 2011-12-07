<?php include("../../database.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../style/index.css" />
<link rel="stylesheet" type="text/css" href="../style/fg_membersite.css" />

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body dir="rtl">
<div id='fg_membersite'>
<form id='register' action='register.php' method='post'>
<fieldset >
<legend>רישום תלמיד</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='container'>
    <label for='name' >שם מלא: </label><br/>
    <input type='text' name='name' id='name' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >כתובת אימייל:</label><br/>
    <input type='text' name='email' id='email' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='username' >שם משתמש (חובה מאנגלית):</label><br/>
    <input type='text' name='username' id='username' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >סיסמא:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" />
       
    <span id='register_password_errorloc' class='error' style='clear:both'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='הוסף' />
</div>

</fieldset>
</form>
</div>
</body>
</html>