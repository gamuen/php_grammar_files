<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>if_conditional</title>
</head>

<body>
    <h1><a href="Data/n.php"> if,else conditional.</a></h1>

<?php
if(2<3){echo "one<br>";
echo file_get_contents('new.php');}
else{echo "two<br>";}
$b=100;
?>

<?php
echo isset($a);
echo isset($b);
echo "<br>";
if(isset($b)){echo $b;}
else{echo null;}
?>
<h4>php loop statements,expression</h4>

<?php
$i=1;
while($i<8){echo $i;echo "<br>";$i++;}
$i=0;
while($i<7){echo $i;echo "<br>";$i=$i+1;}
?>
    
</body>
</html>