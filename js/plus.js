///plus 10
var num1=Math.floor(Math.random()*10)
var num2=Math.floor(Math.random()*10)
while (num1+num2>10)
{
var num1=Math.floor(Math.random()*10)
var num2=Math.floor(Math.random()*10)
}
var total = num1+num2

function plus10 (form) {
	var TestVar = form.inputbox.value;
	if (total ==TestVar)
    DisplayAlertT('AlertBoxT',100,250);
	else
	DisplayAlertF('AlertBoxF',100,250);
}

// plus 20
var num3=Math.floor(Math.random()*10)
var num4=Math.floor(Math.random()*10)
while (num3+num4>20)
{
var num3=Math.floor(Math.random()*10)
var num4=Math.floor(Math.random()*10)
}
var total2 = num3+num4

function plus20 (form) {
	var TestVar = form.inputbox.value;
	if (total2 ==TestVar)
    alert ("נכון");
	else
	alert (num3 + "+" + num4 + "=" + total2)
}