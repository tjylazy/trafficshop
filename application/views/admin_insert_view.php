
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
          <a class="navbar-brand" href="#">交通网店</a>
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
            <a href="#" class="list-group-item active" >新增处罚记录</a>
			<a href="#" class="list-group-item">扩展</a>
			<a href="#" class="list-group-item">扩展</a>
			<a href="#" class="list-group-item">扩展</a>
          </div>
        </div><!--/span-->
      </div><!--/row-->
	  <form class="form-horizontal" role="form" action = "../admin/generate" method = "post">
  <div class="form-group">
    <label for="Name" class="col-sm-2 control-label">被处罚人</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Name" name = "Name" placeholder="被处罚人" required>
    </div>
  </div>
  <div class="form-group">
    <label for="ID" class="col-sm-2 control-label">身份证号</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="ID" name = "ID" placeholder="身份证号" required>
    </div>
  </div>
  <div class="form-group">
    <label for="Contact" class="col-sm-2 control-label">联系方式</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Contact" name = "Contact" placeholder="联系方式" required>
    </div>
  </div>
   <div class="form-group">
    <label for="Carnum" class="col-sm-2 control-label">车辆牌号</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Carnum" name = "Carnum" placeholder="车辆牌号" required>
    </div>
  </div>
   <div class="form-group">
    <label for="Cartype" class="col-sm-2 control-label">车辆类型</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Cartype" name = "Cartype" placeholder="车辆类型" required>
    </div>
  </div>
   <div class="form-group">
    <label for="Fineposition" class="col-sm-2 control-label">违规地点</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Fineposition" name = "Fineposition" placeholder="违规地点" required>
    </div>
  </div>
   <div class="form-group">
    <label for="Finetime" class="col-sm-2 control-label">违规时间</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Finetime" name = "Finetime" placeholder="违规时间" required>
    </div>
  </div>
    <div class="form-group">
    <label for="Finecontent" class="col-sm-2 control-label">详情描述</label>
    <div class="col-sm-6">
      <textarea rows="3" class="form-control" id="Finecontent" name = "Finecontent" > </textarea>
    </div>
  </div>
    <div class="form-group">
    <label for="Finetype" class="col-sm-2 control-label">违反条例</label>
    <div class="col-sm-6">
      <select class="form-control" id = "Finetype" name = "Finetype" onchange = "CalFine()" required> 
		<option></option>
		<option>闯红灯</option>
		<option>不系安全带</option>
		<option>超速行驶</option>
		<option>有意遮挡号牌</option>
		<option>行驶途中拨打手机</option>
		</select>
    </div>
  </div>
  <div class="form-group">
    <label for="Fine" class="col-sm-2 control-label">处罚金额</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Fine" name = "Fine" placeholder="处罚金额" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="Finescore" class="col-sm-2 control-label">处罚分数</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Finescore" name = "Finescore" placeholder="处罚分数" readonly>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-default">提交</button>
    </div>
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
	<script>
	function CalFine()
	{
		var Ftype = document.getElementById("Finetype");
		var Fine = document.getElementById("Fine");
		var Fscore = document.getElementById("Finescore");
		switch(Ftype.value)
		{
		case "闯红灯":
			Fine.value = "100元";
			Fscore.value = "6分";
			break;
		case "不系安全带":
			Fine.value = "100元";
			Fscore.value = "3分";
			break;
		case "超速行驶":
			Fine.value = "200元";
			Fscore.value = "6分";
			break;
		case "有意遮挡号牌":
			Fine.value = "1500元";
			Fscore.value = "12分";
			break;
		case "行驶途中拨打手机":
			Fine.value = "100元";
			Fscore.value = "3分";
			break;
		default:
			Fine.value = "";
			Fscore.value = "";
			break;
		}
	}
	</script>
  </body>
</html>
