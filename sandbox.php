<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("database.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="indexs.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>
<script src="js/plus.js"></script>
	<script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script>
	<script src="js/popup.js" type="text/javascript"></script>

</head>

<div class="container" >
<div class="header" dir="rtl">

   <?php
	
session_start();
  
if ($_SESSION['username'])
	echo " " ;
	else
	die("You must be logged in!");
?>
     <table align="center" dir="rtl" >
<tr>
<td>
<FORM name="main" METHOD="post" action="main.php" dir="rtl">
<button type="submit"><img SRC="images/main.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="חיבור" ></button>
</FORM>
</td>
<td>
<FORM name="san1" METHOD="post" ACTION="sandbox.php" dir="rtl" >
<button type="submit"> <img SRC="images/kefel20.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="חיבור"></button>
</FORM>
</td>
<td>
<FORM name="san2" METHOD="post" ACTION="sandbox.php" dir="rtl">
<button type="submit"> <img SRC="images/kefel30.jpg" HEIGHT="50%" WIDTH="70%" BORDER="0" ALT="חיסור"></button>
</FORM>
</td>

</tr>
  </table>
    <!-- end .header --></div>
 <!-------------------------------------------------------->
  <div class="sidebar1" dir="rtl">
    <ul class="nav" dir="rtl">
	    <li>תרגילי בית</li>
    	<li><a href="#">תרגילי כיתה</a></li>
    	<li><a href="#">חומר עזר</a></li>
	    <li><a href="#">פורום</a></li>
	    <li><a href="#">שאלות למורה</a></li>
		<li><a href="#">תרגול אקראי</a></li>
		<li><a href="grades/first grade/games.php">משחקים</a></li>
        <li><a href="#">סטטיסטיקה אישית</a></li>
		<li><a href="#">סטטיסטיקה כיתתית</a></li>
		<li><a href="#">סטטיסטיקה ארצית</a></li>

    </ul>
     <p></p>

<!-- end .sidebar1 --></div>

<!-------------------------------------------------------->
    
  <div class="content">
      
	<?php if($x==1)
	include("k.php");
?>  
    <canvas id="myCanvas" width="200" height="100" >
Your browser does not support the canvas element.
</canvas>

<script type="text/javascript">
var num1=Math.floor(Math.random()*180)
while (num1<30){
var num1=Math.floor(Math.random()*180)	
}
//document.write("<p>" + num1 + "</p>");

var c=document.getElementById("myCanvas");

var cxt=c.getContext("2d");
cxt.moveTo(10,10);
cxt.lineTo(num1,70);
cxt.lineTo(10,70);
cxt.lineTo(10,10);
cxt.stroke();

</script>
<canvas id="myCanvas1" width="200" height="100" >
Your browser does not support the canvas element.
</canvas>

<script type="text/javascript">
var num2=Math.floor(Math.random()*180)
while (num2<30){
var num2=Math.floor(Math.random()*180)	
}
var c=document.getElementById("myCanvas1");
var cxt=c.getContext("2d");
cxt.moveTo(10,10);	// top line
cxt.lineTo(num2,10);

cxt.moveTo(10,10);  // left line
cxt.lineTo(10,70);

cxt.moveTo(num2,70); // buttom line
cxt.lineTo(10,70);

cxt.moveTo(num2,70); // right line
cxt.lineTo(num2,10);
var x=(num2-10) / 10;
var x1=Math.round(x*1)/1
var y=6;
cxt.font= '50px';
cxt.strokeText(x1, num2/2, 10);
cxt.strokeText(y, num2, 40);
cxt.stroke();


</script>
<table align="right"><tr><td></td></tr></table>
<!-- end .content --></div>


 <!-------------------------------------------------------->        
	<div class="sidebar2">
        <ul class="nav" dir="rtl">
		<li><?
			if ($_SESSION['username']);
			else
			die("You must be logged in!");
			
			$result = mysql_query("SELECT name from students");
			while($row = mysql_fetch_array($result))
			{
				echo " ברוך הבא,";
				echo  $row['name'];
			}
			?>
         </li>
         <li>
         <?
			$result = mysql_query("SELECT grade from grades WHERE grade='א'");
			while($row = mysql_fetch_array($result))
			{
				
				echo "     הנך בכיתה, ";
				echo  $row['grade'];
			}
			$result = mysql_query("SELECT number from grade_num WHERE number='4'");
			while($row = mysql_fetch_array($result))
			{
				
				echo  $row['number'];
			}
			?>
			
            
		</li>
		
    </ul>
    
    <p></p>
<!-- end .sidebar2 --></div>
<canvas id="myCanvas" width="500" height="200" style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>
<script src="js/logo.js">
</script>
<script>
    function initBalls(){
        balls = [];
 
        var blue = "#3A5BCD";
        var red = "#EF2B36";
        var yellow = "#FFC636";
        var green = "#02A817";
 
        // Y
		balls.push(new Ball(183, 42, 0, 0, blue));
        balls.push(new Ball(173, 52, 0, 0, blue));
        balls.push(new Ball(163, 62, 0, 0, blue));
        balls.push(new Ball(153, 72, 0, 0, blue));
		balls.push(new Ball(143, 82, 0, 0, blue));
        balls.push(new Ball(133, 72, 0, 0, blue));
        balls.push(new Ball(123, 62, 0, 0, blue));
        balls.push(new Ball(113, 52, 0, 0, blue));
        balls.push(new Ball(103, 42, 0, 0, blue));
       	balls.push(new Ball(143, 72, 0, 0, blue));
        balls.push(new Ball(143, 82, 0, 0, blue));
		balls.push(new Ball(143, 92, 0, 0, blue));
		balls.push(new Ball(143, 102, 0, 0, blue));
		balls.push(new Ball(143, 112, 0, 0, blue));
		balls.push(new Ball(143, 122, 0, 0, blue));
		balls.push(new Ball(143, 132, 0, 0, blue));
        // M
        balls.push(new Ball(183, 132, 0, 0, red));
        balls.push(new Ball(188, 122, 0, 0, red));
        balls.push(new Ball(193, 112, 0, 0, red));
        balls.push(new Ball(198, 102, 0, 0, red));
        balls.push(new Ball(203, 92, 0, 0, red));
        balls.push(new Ball(208, 82, 0, 0, red));
        balls.push(new Ball(213, 72, 0, 0, red));
		balls.push(new Ball(218, 62, 0, 0, red));
        balls.push(new Ball(223, 52, 0, 0, red));
		balls.push(new Ball(228, 42, 0, 0, red));
		balls.push(new Ball(233, 52, 0, 0, red));
        balls.push(new Ball(238, 62, 0, 0, red));
		balls.push(new Ball(243, 72, 0, 0, red));
		balls.push(new Ball(248, 82, 0, 0, red));
		balls.push(new Ball(253, 92, 0, 0, red));
		balls.push(new Ball(258, 82, 0, 0, red));
		balls.push(new Ball(263, 72, 0, 0, red));
		balls.push(new Ball(268, 62, 0, 0, red));
		balls.push(new Ball(273, 52, 0, 0, red));
		balls.push(new Ball(278, 42, 0, 0, red));
		balls.push(new Ball(283, 52, 0, 0, red));
 		balls.push(new Ball(288, 62, 0, 0, red));
        balls.push(new Ball(293, 72, 0, 0, red));
        balls.push(new Ball(298, 82, 0, 0, red));
        balls.push(new Ball(303, 92, 0, 0, red));
        balls.push(new Ball(308, 102, 0, 0, red));
        balls.push(new Ball(313, 112, 0, 0, red));
        balls.push(new Ball(318, 122, 0, 0, red));
		balls.push(new Ball(323, 132, 0, 0, red));

 
        // R
        balls.push(new Ball(363, 132, 0, 0, blue));
		balls.push(new Ball(363, 122, 0, 0, blue));
		balls.push(new Ball(363, 112, 0, 0, blue));
		balls.push(new Ball(363, 102, 0, 0, blue));
		balls.push(new Ball(363, 92, 0, 0, blue));
		balls.push(new Ball(363, 82, 0, 0, blue));
		balls.push(new Ball(363, 72, 0, 0, blue));
		balls.push(new Ball(363, 62, 0, 0, blue));
		balls.push(new Ball(363, 52, 0, 0, blue));
		balls.push(new Ball(363, 42, 0, 0, blue));
		
		balls.push(new Ball(381, 92, 0, 0, blue));
		balls.push(new Ball(387, 96, 0, 0, blue));
		balls.push(new Ball(393, 102, 0, 0, blue));
		balls.push(new Ball(399, 108, 0, 0, blue));
		balls.push(new Ball(405, 114, 0, 0, blue));
		balls.push(new Ball(411, 120, 0, 0, blue));
		balls.push(new Ball(417, 126, 0, 0, blue));
		balls.push(new Ball(423, 132, 0, 0, blue));
		
		balls.push(new Ball(373, 42, 0, 0, blue));
		balls.push(new Ball(383, 42, 0, 0, blue));
		balls.push(new Ball(393, 42, 0, 0, blue));
		balls.push(new Ball(403, 42, 0, 0, blue));
		balls.push(new Ball(403, 44, 0, 0, blue));
		balls.push(new Ball(413, 48, 0, 0, blue));
		balls.push(new Ball(423, 56, 0, 0, blue));
		balls.push(new Ball(423, 66, 0, 0, blue));
		balls.push(new Ball(413, 74, 0, 0, blue));
		balls.push(new Ball(403, 78, 0, 0, blue));
		balls.push(new Ball(393, 82, 0, 0, blue));
		balls.push(new Ball(383, 86, 0, 0, blue));
		balls.push(new Ball(375, 90, 0, 0, blue));

		
		
		
		
		
        return balls;
    }
 
    function updateBalls(kin, balls){
        var canvas = kin.getCanvas();
        var context = kin.getContext();

        var collisionDamper = 0.3;
        var floorFriction = 0.0005 * kin.getTimeInterval();
        var mouseForceMultiplier = 1 * kin.getTimeInterval();
        var restoreForce = 0.002 * kin.getTimeInterval();
 
        for (var n = 0; n < balls.length; n++) {
        	var ball = balls[n];
            // set ball position based on velocity
            ball.y += ball.vy;
            ball.x += ball.vx;
 
            // restore forces
            if (ball.x > ball.origX) {
                ball.vx -= restoreForce;
            }
            else {
                ball.vx += restoreForce;
            }
            if (ball.y > ball.origY) {
                ball.vy -= restoreForce;
            }
            else {
                ball.vy += restoreForce;
            }
 
            // mouse forces
            var mousePos = kin.getMousePos();
            mouseX = mousePos === null ? 99999 : mousePos.x;
            mouseY = mousePos === null ? 99999 : mousePos.y;
            var distX = ball.x - mouseX;
            var distY = ball.y - mouseY;
 
            var radius = Math.sqrt(Math.pow(distX, 2) +
            Math.pow(distY, 2));
 
            var totalDist = Math.abs(distX) + Math.abs(distY);
 
            var forceX = (Math.abs(distX) / totalDist) *
            (1 / radius) *
            mouseForceMultiplier;
            var forceY = (Math.abs(distY) / totalDist) *
            (1 / radius) *
            mouseForceMultiplier;
 
            if (distX > 0) { // mouse is left of ball
                ball.vx += forceX;
            }
            else {
                ball.vx -= forceX;
            }
            if (distY > 0) { // mouse is on top of ball
                ball.vy += forceY;
            }
            else {
                ball.vy -= forceY;
            }
 
            // floor friction
            if (ball.vx > 0) {
                ball.vx -= floorFriction;
            }
            else if (ball.vx < 0) {
                ball.vx += floorFriction;
            }
            if (ball.vy > 0) {
                ball.vy -= floorFriction;
            }
            else if (ball.vy < 0) {
                ball.vy += floorFriction;
            }
 
            // floor condition
            if (ball.y > (canvas.height - ball.radius)) {
                ball.y = canvas.height - ball.radius - 2;
                ball.vy *= -1;
                ball.vy *= (1 - collisionDamper);
            }
 
            // ceiling condition
            if (ball.y < (ball.radius)) {
                ball.y = ball.radius + 2;
                ball.vy *= -1;
                ball.vy *= (1 - collisionDamper);
            }
 
            // right wall condition
            if (ball.x > (canvas.width - ball.radius)) {
                ball.x = canvas.width - ball.radius - 2;
                ball.vx *= -1;
                ball.vx *= (1 - collisionDamper);
            }
 
            // left wall condition
            if (ball.x < (ball.radius)) {
                ball.x = ball.radius + 2;
                ball.vx *= -1;
                ball.vx *= (1 - collisionDamper);
            }
        }
    }
 
    function Ball(x, y, vx, vy, color){
        this.x = x;
        this.y = y;
        this.vx = vx;
        this.vy = vy;
        this.color = color;
        this.origX = x;
        this.origY = y;
        this.radius = 10;
    }
 
    window.onload = function(){
        kin = new Kinetic("myCanvas");
        var canvas = kin.getCanvas();
        var context = kin.getContext();
        var mouseX = 99999;
        var mouseY = 99999;
 
        canvas.onmouseout = function(){
            mouseX = 99999;
            mouseY = 99999;
        };
 
        var balls = initBalls();
 
        kin.setStage(function(){
            updateBalls(this, balls);
            this.clear();
            var mousePos = kin.getMousePos();
            mouseX = mousePos === null ? 99999 : mousePos.x;
            mouseY = mousePos === null ? 99999 : mousePos.y;
 
            for (var n = 0; n < balls.length; n++) {
				var ball = balls[n];
                context.beginPath();
                context.arc(ball.x, ball.y, ball.radius, 0, 2 * Math.PI, false);
                context.fillStyle = ball.color;
                context.fill();
            }
        });
 
        kin.startAnimation();
    };
</script>


<!-------------------------------------------------------->
  <div class="footer">
    <p>כל הזכויות שמורות. אין להעתיק את תוכן האתר או חלק ממנו</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>