<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

<body>
  <h1>PHP vs Javascript</h1>

  <h2>PHP practice</h2>
  <!--php에서 html로 만들면서 코드 없어짐-->
  <?php
    print("Hello php");
    $my_str="Hello php";
    $my_int1=123;
    $my_int2=432;
    $my_int3=$my_int1+$my_int2;
    print($my_int3+1000);
    print('print my_str: '.$my_str.' print my_int3:'.$my_int3);
    echo $my_str;
   ?>
   <!-- 자바스크립트 코드는 그대로 남아있음-->
   <h2>javascript practice</h2>
   <script>
    document.write("Hello javascript");
    document.write(1111111);
    document.write("2"+105321+"133 jpkp");

   </script>
</body>
</html>
