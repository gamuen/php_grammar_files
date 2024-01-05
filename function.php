<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title> 한국어 함수</title>
</head>

<body>
    <h1> 함수를 정의하라 </h1>
    <?php
    $s= "나는 문자열이다. 
    <br>
    string! 알겠지? ";
    echo $s;
    ?>
    <br>
    <?php
    echo strlen($s);
    ?>

    <h2> nl2br </h2>
    <?php
    echo nl2br($s);
    ?>
    
</body>
</html>