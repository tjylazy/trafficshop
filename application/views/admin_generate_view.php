
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../dist/docs-assets/ico/favicon.png">

    <title>管理员系统</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../dist/css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="..">交通网店</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">主页</a></li>
            <li><a href="#about">关于</a></li>
            <li><a href="#contact">联系</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h2>您可以录入交通违章信息，并生成交通处罚决定书</h2>
          </div>
        </div><!--/span-->
		
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="../admin" class="list-group-item ">主页</a>
            <a href="./insert" class="list-group-item active" >生成交通处罚决定书</a>
			<a href="#" class="list-group-item">扩展</a>
			<a href="#" class="list-group-item">扩展</a>
			<a href="#" class="list-group-item">扩展</a>
          </div>
        </div><!--/span-->
      </div><!--/row-->
	<div class = "col-sm-9" style="text-align:center">
		<h3><B>公安交通管理简易程序处罚决定书</B></h3>
	</div>
	</div>
	<div class = "container">  
	 <form class="form-horizontal" role="form" >
	 <div class="form-group">
		<label class="col-sm-2 control-label">被处罚人</label>
		<div class="col-sm-2">
		<p class="form-control-static"><U><?=$Name?></U></p>
		</div>
		<label class="col-sm-2 control-label">驾驶档案证编号</label>
		<div class="col-sm-3">
		<p class="form-control-static"><U>无</U></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">居民身份证号码</label>
		<div class="col-sm-7">
		<p class="form-control-static"><U><?=$ID?></U></p>
		</div>
	</div>
	 <div class="form-group">
		<label class="col-sm-2 control-label">准驾车型</label>
		<div class="col-sm-2">
		<p class="form-control-static"><U>无</U></p>
		</div>
		<label class="col-sm-2 control-label">联系方式</label>
		<div class="col-sm-3">
		<p class="form-control-static"><U><?=$Contact?></U></p>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">车辆牌号</label>
		<div class="col-sm-2">
		<p class="form-control-static"><U><?=$Carnum?></U></p>
		</div>
		<label class="col-sm-2 control-label">车辆类型</label>
		<div class="col-sm-3">
		<p class="form-control-static"><U><?=$Cartype?></U></p>
		</div>
	</div>

	 <div class="form-group">
		<label class="col-sm-9" style="text-indent:60px">
		被处罚人所有的机动车于<U><?=$Finetime?></U>，在<U><?=$Fineposition?></U>实施
		<U><?=$Finetype?></U>的违法行为，决定予以<U><?=$Fine?></U>元罚款，记<U><?=$Finescore?></U>分。
		</label>
	</div>
	 <div class="form-group">
		<label class="col-sm-9" style="text-indent:60px">
		如不服本决定，可以在收到决定60日内向本单位申请行政复议。
		</label>
	</div>		

	</form>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
