<?php error_reporting(E_ERROR|E_WARNING);?>
<?php include("../../../../database.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255" />
<title>Youth Mathematic Revolution</title>

</head>

<body>

    <h1 dir="rtl" 
    style="font-family:Cursive;font-size:36px;color:#3200cc;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">זוויות - רמה קלה</h1>
	<p dir="rtl"
    style="font-family:Cursive;font-size:24px;color:#ff0000;font-style:italic;font-weight:normal;text-shadow:4px 4px 8px black;">פתור את התרגילים הבאים</p> 
<canvas id="canvasID" width="500" height="300"></canvas>
</div>
<script type="text/javascript">
function drawDemo(cvsID) // canvas ID is passed in as a string
{
  var g = new CvsGraphCtx3D(cvsID);  // create a graphics context
  g.clearCanvas("#eeeea0");          // fill canvas to lightYellow
  g.setWorldCoords3D(-200, -200, 800);  // x axis 800 units long

  // create a blue circle centered on 0,0 with radius 100
  var circle = g.arc3D(0, 0, 100, 0, 360, true, "cyan");
  // write text centered on the origin 100 units high
  var txt = g.text3D("Ab", 0, 0, 5, 100, "white");

  var grp = g.groupPaths(circle, txt);  // group 2 paths
  g.renderGroup3D(grp);      // draw group

  g.rotateGroup3D(grp, 20, -30, 0);
  g.translateGroup3D(grp, 300, 200, 100);
  g.renderGroup3D(grp);      // draw after moving
}
</script>

<form action="geo_a1.php" method="get" name="frm">
<input name="submit" type="submit" />
<? echo $_GET['rand'];?>
</form>

</body>
</html>