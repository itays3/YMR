<?php error_reporting(E_ERROR|E_WARNING);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">




<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
        
        <meta name="description" content="jQuery popup solution" />
        <meta name="keywords" content="cool, jquery, fancy popup, css, html"/>
		<link type="text/css" rel="stylesheet" href="demo.css" />
</head>
<body>

	<div id='content'>
    <h1 dir="rtl">חיבור עד 20</h1>
    <p dir="rtl">פתור את התרגילים הבאים</p>
		<?php 
		  session_start();
		  $bx = rand(0,10);
	      $by = rand(1,10);
		  while ($bx+$by >20 )
		  {
		  	$bx = rand(0,10);
	      	$by = rand(1,10);
		  }
		?>
<form method="post" action="index.php" dir="ltr">   
    <table cellpadding="3" cellspacing="3" align="right">
    	<tr>
    	<td><?php print $bx; ?></td>
		<td><input name="plus" type="hidden" value="+"/> + </td>
		<td><?php print $by; ?></td>
		<td>=</td>
        <?php $the_answer_b = $by+$bx;?><input name="the_answer_b" type="hidden" value="<?=$the_answer_b?>"/>
		<td><input name="answer_b" type="text" size="5"/></td>
		<td><input name="submit1" type='button' value="בדוק" id="button" /></td>
    <!-- this part shows the last exercise and the answer-->
		<tr>
	        <input name="last_bx" type="hidden" value="<?= $bx?>" />
		    <input name="last_by" type="hidden" value="<?= $by?>"/>
	    	<input name="oldanswer_b" type="hidden" value="<?= $the_answer_b?>"/>
</td></table>
</form>
   
		</div>

<!--popup content-->
	<div id="popupContainer" class="hidden">
		<a id="close" class="hidden" title="close popup"></a>
		<h1>Title goes here</h1>
		<p id="contactArea">
        	            
            <?php if(!empty($_POST['last_bx'])) {?>
            <td><?php print $_POST['last_bx']?></td>
		    <td> + </td>
		    <td><?php print $_POST['last_by'];?></td>
		    <td> = </td>
		    
		    <td><?php print $_POST['oldanswer_b'];?></td>
	            <?php } ?>
                <td>    <?php	
				if (isset($_POST['answer_b']) ) 
				{
					if ($_POST['the_answer_b']==$_POST['answer_b'])
						print "<font color='green'> כל הכבוד </font>";
					else
						print "<font color='red'> טעות</font>";
				}
			?>
		</p>
	</div>
	<div id="overlayEffect">
    </div>
  <!--end popup content--> 
   
   
	<script src="jquery-1.5.js" type="text/javascript"></script>
	<script src="script.js" type="text/javascript"></script>

</body>
</html>