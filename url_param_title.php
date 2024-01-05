<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>url_param_title
    </title>
</head>
<body>
    <h1> n </h1>
    <ol>
        <li><a href="url_param_title.php?id=n.php&i1=function.php">n</li>
        <li><a href="url_param_title.php?id=n1.php&i1=new.php">n1</li>
        <li><a href="url_param_title.php?id=n2.php&i1=var_param_func.php">n2</li>
    </ol>
    
    <h2> 
        <?php 
        if($_GET["id"]!=null)
        {echo $_GET["id"];}
        else{echo "없어요";}
        ?>
    </h2>
    <?php
    $homepage=file_get_contents('Data/'.$_GET["id"]);
    $h=file_get_contents($_GET["i1"]);
    echo $homepage.'<br>'.$h;
    ?>
</body>
</html>