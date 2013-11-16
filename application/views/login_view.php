
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../dist/docs-assets/ico/favicon.png">

    <title>登陆</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../dist/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form action = "" class="form-signin" method = "post">
        <h3 class="form-signin-heading">请登录</h3>
        <input type="text" class="form-control" name = "Username" placeholder="请输入用户名" required autofocus>
        <input type="password" class="form-control" name = "Password" placeholder="请输入密码" required>
        <!--label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
      </form>
	  <p>管理员账号：admin 密码： admin</p>
	  <p>客户账号 ： guest 密码： guest</p>

    </div> <!-- /container -->
	<?php
		if($_POST){
		$Username = $_POST["Username"];
		$Password = $_POST["Password"];
		
		if ($Username == "admin" and $Password =="admin")
		{
			$url = "./admin";
			echo " <script> window.location.href='$url' </script>";
		}
		else if ($Username == "guest" and $Password =="guest")
		{
			$url = "./guest";
			echo " <script> window.location.href='$url' </script>";
		}
		else
		{
			echo "<script>alert('用户名或密码错误')</script>";
		}
		}
	?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
