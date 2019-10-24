<?php
	echo "<h1>Hello world</h1>";
?>
<h2>Bai tap 3, 4</h2>
<?php
	$userName = 'php03';
	echo $userName;
	echo "<Br>";
	$name = 'Thao';
	echo $name;
	echo "<Br>";
	$phone = '079508****';
	echo $phone;
	echo "<Br>";
	$address = 'Quang Nam';
	echo $address;
	echo "<Br>";
?>
<h2>Bai tap 5</h2>
<?php	
$month = 3;
$year = 2019;
switch($month){
case 1:
	echo "<p >31 ngày</p>";
	break;
case 3:
	echo "<p >31 ngày</p>";
	break;
case 5:
	echo "<p >31 ngày</p>";
	break;
case 7:
	echo "<p >31 ngày</p>";
	break;
case 8:
	echo "<p >31 ngày</p>";
	break;
case 10:
	echo "<p >31 ngày</p>";
	break;
case 12:
	echo "<p >31 ngày</p>";
	break;
case 2:
	if($year%4==0){
	echo "<b > 28 ngày</b><br>";}
	else{echo "<b > 29 ngày</b> ";}
	break;
case 4:
	echo "30 ngày";
	break;
case 6:
	echo "30 ngày";
	break;
case 9:
	echo "30 ngày";
	break;
case 11:
	echo "30 ngày";
	break;
default:
	echo "vui lòng nhập lại";
	break;
}	
?>