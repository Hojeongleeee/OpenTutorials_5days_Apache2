<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

<body>
  <h1>PHP syntax test</h1>
  <h2>while</h2>
  <!--php에서 html로 만들면서 코드 없어짐-->
  <?php
//    var_dump(10);
//    var_dump('my string');
//    var_dump(TRUE);
    $input=$_GET["integer"]; //PHP url통해서 받는 get방식
    $i=1;
    while ($i<$input+1){
      f_print($input, $i);
      $i=$i+1;
    }

    function f_print( $a, $i ){
      print('<br>');
      if ($a==$i){
        echo "{$i}/{$a} 반복끝 <br>";
      }else{
        echo "{$i}/{$a} 반복중 <br>";
      }
    }
    ?>

    <h2>Array</h2>
    <?php
    $arr = ['first','second','third','fourth','end'];
    $n=count($arr);
    echo "{$n}개의 요소 출력 완료";
    arr_print($arr);

//function
    function arr_print($arr){
      print('<br>');
      $i=0;
      while ($arr[$i]!=null){
        print ( "<li>{$i}번째 요소: {$arr[$i]} </li>" );
        $i=$i+1;
      }
    }
    ?>
   <!-- 자바스크립트 코드는 그대로 남아있음-->
 <h1>JavaScript</h1>
   <h2>array</h2>

   <script>
      var i=0;
      var arr = ['first','second','third','fourth','end'];
      while (i<arr.length){
        document.write(i, "번째 요소 ", arr[i],"<br>");
        i++;
      }
      document.write(' <br>');
   </script>
</body>
</html>
