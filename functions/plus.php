<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="images/logo.jpg" alt="Insert Logo Here" name="Insert_logo" width="20%" height="90" id="Insert_logo" style="background: #8090AB; display:block;" /></a> 
    <!-- end .header --></div>
  <div class="sidebar1" dir="rtl">
    <ul class="nav" dir="rtl">
      <li>תרגילי כיתה</li>
      <li><a href="#">תרגילי בית</a></li>
      <li><a href="#">חומר עזר</a></li>
      <li><a href="#">סטטיסטיקות</a></li>
    </ul>
    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" >
    <p> The above links demonstrate a basic navigational structure using an unordered list styled with CSS. Use this as a starting point and modify the properties to produce your own unique look. If you require flyout menus, create your own using a Spry menu, a menu widget from Adobe's Exchange or a variety of other javascript or CSS solutions.</p>
    <p>If you would like the navigation along the top, simply move the ul.nav to the top of the page and recreate the styling.</p></marquee>
    <!-- end .sidebar1 --></div>
<!-------------------------------------------------------->
    
  <div class="content">
    <h1 dir="rtl">רמה קלה</h1>
	<p dir="rtl">פתור את התרגילים הבאים</p>
<form method="post" action="plus.php">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    	<td><?php $x = rand(1, 10); print $x; ?><input name="x" type="hidden" value="<?=$x;?>" /></td>
		<td><input name="plus" type="hidden" value="+"/> + </td>
		<td><?php $y = rand(0, 10); print $y; ?><input name="y" type="hidden" value="<?=$y?>"/></td>
		<td>=</td>
        <?php $the_answer = $y+$x;?><input name="the_answer" type="hidden" value="<?=$the_answer?>"/>
		<td><input name="answer" type="text" size="5"/></td>
		<td><input name="submit" type="submit" value="בדוק" /></td>
        </tr>
        
        <tr><td><input name="last_x" type="hidden" value="<?=$a?>"/></td>
        <td>    <?php	
		if (isset($_POST['answer']) ) {
			if ($_POST['the_answer']==$_POST['answer'])
				print $a;
			else
				print"False";
		}
	
    //echo ;
	?></td>
	</tr></table>
</form>
<!-------------------------------------------------------->
<br/>
    <h1 dir="rtl">רמה בינונית</h1>
<form method="post" action="plus.php">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    	<td><?php $bx = rand(1, 30); print $bx; ?><input name="bx" type="hidden" value="<?=$bx;?>" /></td>
		<td><input name="plus" type="hidden" value="+"/> + </td>
		<td><?php $by = rand(0, 99); print $by; ?><input name="by" type="hidden" value="<?=$by?>"/></td>
		<td>=</td>
        <?php $the_answer_b = $by+$bx;?><input name="the_answer_b" type="hidden" value="<?=$the_answer_b?>"/>
		<td><input name="answer_b" type="text" size="5"/></td>
		<td><input name="submit" type="submit" value="בדוק" /></td>
        <td>    <?php	
	if (isset($_POST['answer_b']) ) {
		if ($_POST['the_answer_b']==$_POST['answer_b'])
			print "True";
			else
			Print "False";	
	}
    //echo ;
	?></td>
	</tr></table>
</form>

<!-------------------------------------------------------->
<br/>
    <h1 dir="rtl">רמה קשה</h1>
<form method="post" action="plus.php">    
    <table cellpadding="3" cellspacing="3" align="center">
    	<tr>
    	<td><?php $cx = rand(100, 1000); print $cx; ?><input name="cx" type="hidden" value="<?=$bx;?>" /></td>
		<td><input name="plus" type="hidden" value="+"/> + </td>
		<td><?php $cy = rand(100, 1000); print $cy; ?><input name="cy" type="hidden" value="<?=$cy?>"/></td>
		<td>=</td>
        <?php $the_answer_c = $cy+$cx;?><input name="the_answer_c" type="hidden" value="<?=$the_answer_c?>"/>
		<td><input name="answer_c" type="text" size="5"/></td>
		<td><input name="submit" type="submit" value="בדוק" /></td>
        <td>    <?php	
	if (isset($_POST['answer_c']) ) {
		if ($_POST['the_answer_c']==$_POST['answer_c'])
			print "True";
			else
			Print "False";	
	}
    //echo ;
	?></td>
	</tr></table>
</form>

    <!-- end .content --></div>
  <div class="footer">
    <p>This .footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the .footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>