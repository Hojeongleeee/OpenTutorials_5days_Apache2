<?php
$id=$_GET['id']; //id 받아오기
$data = file_get_contents($id.'.txt'); //경로명으로 파일 파싱
print($data); 
?>
