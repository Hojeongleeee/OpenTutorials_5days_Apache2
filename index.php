<!DOCTYPE html>
<html>
	<head>
		<title>작심5일 웹제작하기</title>
		<meta charset="utf-8">
		<meta name="author" content="hojeonglee">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="bootstrap.css">
	</head>

	<body>
		<div class="container">
		  <div class="navbar-header">
		    <p class="navbar-text">OPENTUTORIALS CUSTOM PAGE</p>
		    <a href="login.php">
		    <button type="button" class="btn btn-default navbar-btn">Login</button></a>
		  </div>
		</div>

		  <div class="jumbotron">
		    <div class="container">
		      <h1><a href="./index.html">작 심 5 일</a></h1>
		      <p>생활코딩 오프라인 수업 중 제작한 페이지입니다.</p>
		      <p><a class="btn btn-primary btn-lg" href="http://opentutorials.org" role="button">생활코딩</a></p>
		    </div>
		  </div>

<!--header 끝-->

		<div class="container-fluid">
			<div class="row-fluid">
	      <div class="span2">
					<ul class="nav nav-pills nav-stacked">
							<li role="presentation"><a href="index.php">index</a></li>
							<li role="presentation"><a href="index.php?id=1">HTML</a></li>
						  <li role="presentation"><a href="index.php?id=2">CSS</a></li>
						  <li role="presentation"><a href="index.php?id=3">JavaScript</a></li>
						</ul>
				</div>

	      <div class="span10">

          <div class="buttons">
            <input type="button" name="name" value="black" onclick="">
            <input type="button" name="name" value="white" onclick="">
          </div>

					<div class="panel panel-default">
            <?php
                $id = $_GET['id']; //html, css, javascript
                if ($id==null){ //index.php 기본 화면
                  print(file_get_contents('index.txt'));
                } else { //메뉴마다 다른 화면
                  $data = file_get_contents($id.'.txt'); //경로명으로 파일 파싱
                  print($data);
                }
            ?>
					</div><!--Panel-default 끝-->
				</div> <!--span 끝-->
		  </div><!--row fluid 끝-->
		</div><!--container fluid 끝-->
	</body>
</html>
