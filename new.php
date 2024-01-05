<!doctype html>

<html>
    <body>
<h1> String and Number in php</h1>
<?php
echo 1+6/3;
?>
<h5>
// 1: php file 을 C: 내 컴퓨터 폴더의 xampp 폴더의 htdocs 폴더에 저장한다. xampp 의 controller exe file 을 클릭해 실행한다.
// 해당 서버 호스팅 소프트웨어 중 apache 소프트웨어의 서버를 start 한다. apache 는 로컬 호스트 : 127.0.0.1 or localhost/ 주소로 된 서버를 생성한다.
// htdocs 에 저장된 php file 을 불러오기 위해, 주소창에 127.0.0.1/name.php 를 입력한다. 그러면 호스트된 php 파일이, xampp 의 php compiler 에 의해 해석된 다음,
// 해당 서버로 그 결과가 송출된다. </h5>

<?php
echo 'h\'e\'llo';
?>

<h2> concatenation operator </h2>

<?php
echo 'hi '.'php';
$s='str';?>

<h3> </h3>
<?php
echo strlen($s);
?>

</body>
</html>
