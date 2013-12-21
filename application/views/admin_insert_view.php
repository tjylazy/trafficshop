
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
            <a href="#" class="list-group-item active" >新增处罚记录</a>
			<a href="#" class="list-group-item">扩展</a>
			<a href="#" class="list-group-item">扩展</a>
			<a href=".." class="list-group-item">登出</a>
          </div>
        </div><!--/span-->
      </div><!--/row-->
	  <form class="form-horizontal" action = "../admin/generate" method = "post" enctype="multipart/form-data">
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
          <label class="col-sm-2 control-label">上传证据</label>
          <div class="col-sm-6">
            <input id="Evidence" name = "Evidence" type="file">
          </div>
        </div> 
    <!--div class="form-group">
    <label for="Finecontent" class="col-sm-2 control-label">详情描述</label>
    <div class="col-sm-6">
      <textarea rows="3" class="form-control" id="Finecontent" name = "Finecontent" > </textarea>
    </div>
  </div-->
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
		<option>机动车驾驶证丢失期间驾驶机动车</option>
		<option>机动车驾驶证损毁期间驾驶机动车</option>
		<option>机动车驾驶证被依法扣留期间驾驶机动车</option>
		<option>违法记分达到12分驾驶机动车</option>
		<option>不在机动车道内行驶</option>
		<option>违反规定使用专用车道</option>
		<option>不服从交警指挥</option>
		<option>遇前方机动车停车排队等候或者缓慢行驶时，未依次交替驶入车道减少后的路口、路段</option>
		<option>在没交通信号灯或交警指挥的交叉路口遇到停车排队或者缓行时，机动车未依次交替通行</option>
		<option>遇前方机动车停车排队等候或者缓慢行驶时，在人行横道停车等候</option>
		<option>行经铁路道口，不按规定通行</option>
		<option>运载危险物品未经批准</option>
		<option>未将故障机动车移到不妨碍交通的地方停放</option>
		<option>不避让正在作业的道路养护车、工程作业车</option>
		<option>机动车违反规定停放、临时停车且驾驶人不在现场</option>
		<option>机动车喷涂、粘贴标识或广告影响安全驾驶</option>
		<option>在划分快、慢车道的道路上，不按规定车道行驶</option>
		<option>在同方向划有两条以上机动车道的道路上，变更车道时影响正常行驶的机动车</option>
		<option>在铁路道口、人行横道、桥梁、急弯、陡坡、隧道或者容易发生危险的路段掉头</option>
		<option>掉头时妨碍正常行驶的车辆和行人通行</option>
		<option>未按规定鸣喇叭示意</option>
		<option>在禁止鸣喇叭的区域或者路段鸣喇叭</option>
		<option>在机动车驾驶室的前后窗范围内悬挂、放置妨碍驾驶人视线的物品</option>
		<option>机动车载运超限物品行经铁路道口时不按指定的道口通过</option>
		<option>机动车载运超限物品行经铁路道口时不按指定的时间通过</option>
		<option>机动车行经渡口，不服从渡口管理人员指挥，不依次待渡</option>
		<option>机动车在单位院内居民居住区内不避让行人</option>
		<option>驾驶摩托车手离车把</option>
		<option>驾驶摩托车在车把上悬挂物品</option>
		<option>使用教练车时有与教学无关的人员乘坐</option>
		<option>实习期内未粘贴或悬挂实习标志</option>
		<option>驾驶安全设施不全的机动车</option>
		<option>驾驶机件不符合技术标准的机动车</option>
		<option>不按规定倒车</option>
		<option>在车门、车厢没有关好时行车</option>
		<option>机动车在没有划分机动车道、非机动车道和人行道的道路上，不在道路中间通行</option>
		<option>驾驶机动车下陡坡时熄火、空挡滑行</option>
		<option>连续驾驶机动车超过4小时未停车休息或休息时间少于20分钟</option>
		<option>使用他人机动车驾驶证驾驶机动车</option>
		<option>改变车身颜色，更换发动机，更换车身或车架，未按规定时限办理变更登记</option>
		<option>机动车所有权转移后，现机动车所有人未按规定时限办理转移登记</option>
		<option>机动车所有人办理变更登记，未按规定时限到住所地车辆管理所申请机动车转入</option>
		<option>以欺骗、贿赂等不正当手段办理补、换领机动车证书号牌行驶证和检验合格标志等业务</option>
		<option>机动车违反警告标志指示</option>
		<option>机动车违反警告标线指示</option>
		<option>公路客运车辆以外的载客汽车违反规定载货</option>
		<option>驾驶时观看电视</option>
		<option>在同车道行驶中，不按规定与前车保持必要的安全距离</option>
		<option>违反转向灯使用规定</option>
		<option>违反夜间没有路灯照明不良或者低能见度下情况灯光使用规定</option>
		<option>违反交替使用远近光灯示意规定</option>
		<option>不按规定会车</option>
		<option>上道路行驶的机动车未按规定粘贴保险标志</option>
		<option>未随车携带行驶证</option>
		<option>未随身携带驾驶证</option>
		<option>载货长度、宽度、高度超过规定</option>
		<option>上道路行驶的机动车未按规定粘贴检验合格标志</option>
		<option>行经人行横道，未减速行驶</option>
		<option>遇行人正在通过人行横道时未停车让行</option>
		<option>行经没有交通信号的道路时，遇行人横过道路未避让</option>
		<option>驾驶摩托车时驾驶人未按规定戴安全头盔</option>
		<option>通过有灯控路口时，不按所需行进方向驶入导向车道</option>
		<option>左转弯时，未靠路口中心点左侧转弯</option>
		<option>通过路口遇放行信号不依次通过</option>
		<option>通过路口遇停止信号时，停在停止线以内或路口内</option>
		<option>通过路口向右转弯遇同车道内有车等候放行信号时，不依次停车等候</option>
		<option>驾驶时拨打接听手持电话</option>
		<option>驾驶时有其他妨碍安全行车的行为</option>
		<option>摩托车载人超过核定人数</option>
		<option>公路客运车辆以外的载客汽车载人超过核定人数，未超过20%</option>
		<option>遇有前方车辆停车排队等候或者缓慢行驶时，穿插等候车辆</option>
		<option>城市快速路上行驶时驾驶人未按规定使用安全带</option>
		<option>逆向行驶</option>
		<option>不按交通信号灯规定通行</option>
		<option>1、超过规定时速，未超过20%</option>
		<option>2、超过规定时速20%，未超过50%</option>
		<option>从前车右侧超车</option>
		<option>前车左转弯时超车</option>
		<option>前车掉头时超车</option>
		<option>前车超车时超车</option>
		<option>与对面来车有会车可能时超车</option>
		<option>超越执行紧急任务的警车、消防车、救护车、工程救险车</option>
		<option>在铁路道口路口窄桥弯道陡坡隧道人行横道等没有超车条件的地点超车</option>
		<option>机动车在道路上发生故障或事故后，不按规定设置警告标志或未按规定使用警示灯光</option>
		<option>准备进入环形路口不让已在路口内的机动车先行</option>
		<option>在有交通信号灯没有方向指示灯的路口，转弯的机动车未让直行的车辆、行人先行</option>
		<option>在没有交通信号灯也没有交通警察指挥的路口，转弯的机动车未让直行的车辆、行人先行</option>
		<option>在有交通信号灯没有方向指示灯的路口相对方向行驶的右转弯机动车不让左转弯车辆先行</option>
		<option>在没有交通信号灯也没有交通警察指挥的路口相对行驶右转弯机动车不让左转弯车辆先行</option>
		<option>机动车通过无灯控或交警指挥的路口，不按交通标志、标线指示让优先通行的一方先行</option>
		<option>机动车通过无灯控、交警指挥、交通标志标线控制的路口，不让右方道路的来车先行</option>
		<option>小型载客汽车牵引旅居挂车以外的且总质量700千克以上挂车</option>
		<option>不避让执行任务的警车、消防车、救护车、工程救险车</option>
		<option>不避让盲人</option>
		<option>上道路行驶的机动车未按规定定期进行安全技术检验</option>
		<option>机动车违反禁令标志指示</option>
		<option>机动车违反禁止标线指示</option>
		<option>上道路行驶的机动车未悬挂机动车号牌</option>
		<option>故意遮挡机动车号牌</option>
		<option>故意污损机动车号牌</option>
		<option>不按规定安装机动车号牌</option>
		<option>运载危险物品时不按规定的时间、路线、速度行驶</option>
		<option>运载危险物品时未悬挂警示标志</option>
		<option>运载危险物品时未采取必要的安全措施</option>
		<option>机动车在城市快速路上遇交通拥堵，占用应急车道行驶</option>
		<option>机动车从匝道进入或驶离高速公路时不按规定使用灯光</option>
		<option>机动车从匝道进入高速公路时妨碍已在高速公路内的机动车正常行驶</option>
		<option>在高速公路的路肩上行驶</option>
		<option>非紧急情况下在高速公路应急车道上行驶</option>
		<option>在高速公路上通过施工作业路段，不减速行驶</option>
		<option>在高速公路上骑、轧车行道分界线</option>
		<option>在高速公路上试车</option>
		<option>在高速公路上发生故障或交通事故，无法行驶的，拖曳、牵引不使用救援车或者清障车</option>
		<option>低能见度气象条件下在高速公路上不按规定行驶</option>
		<option>在高速公路上行驶的载货汽车车厢载人</option>
		<option>在高速公路上行驶的两轮摩托车载人</option>
		<option>在高速公路上行驶时，驾驶人未按规定使用安全带</option>
		<option>驾驶设计最高时速低于70公里的机动车进入高速公路</option>
		<option>在高速公路上发生故障或交通事故，驾驶人不按规定使用危险报警闪光灯</option>
		<option>高速公路上车辆发生故障或交通事故，不按规定设置警告标志</option>
		<option>在高速公路上超过规定时速行驶的，未超过50%</option>
		<option>在高速公路上正常情况下以低于规定最低时速行驶</option>
		<option>在匝道、加速车道或者减速车道上超车</option>
		<option>非紧急情况下在高速公路应急车道上停车</option>
		<option>在高速公路上的车道内停车</option>
		<option>机动车在高速公路遇交通拥堵，占用应急车道行驶</option>
		<option>在高速公路上倒车</option>
		<option>在高速公路上逆行</option>
		<option>在高速公路上穿越中央分隔带掉头</option>
		<option>非警车、消防车、、救护车、工程救险车喷涂专用的或者与其相类似的标志</option>
		<option>服用国家管制的精神药品或麻醉药品，驾驶机动车</option>
		<option>患有妨碍安全驾驶机动车的疾病，驾驶机动车</option>
		<option>过度疲劳，驾驶机动车</option>
		<option>牵引故障机动车时，被牵引的机动车除驾驶员外载人</option>
		<option>牵引故障机动车时，被牵引的机动车拖带挂车</option>
		<option>牵引故障机动车时，被牵引的机动车宽度大于牵引的机动车</option>
		<option>使用软连接装置牵引机动车时，牵引车与被牵引车之间未保持安全距离</option>
		<option>牵引制动失效的被牵引车，未使用硬连接牵引装置</option>
		<option>使用摩托车牵引车辆</option>
		<option>牵引摩托车</option>
		<option>未使用专用清障车拖曳转向或照明、信号装置失效的机动车</option>
		<option>高速公路或者城市快速路以外道路行驶时驾驶人未按规定使用安全带</option>
		<option>摩托车后座载乘不满十二周岁未成年人</option>
		<option>驾驶轻便摩托车载人</option>
		<option>载物行驶时遗洒、飘散载运物</option>
		<option>运载超限物品时不按规定的时间、路线、速度行驶</option>
		<option>运载超限物品时未悬挂明显标志</option>
		<option>载客汽车以外的其他机动车载人超过核定人数</option>
		<option>补领机动车驾驶证后，继续使用原机动车驾驶证</option>
		<option>驾驶机动车时向路上抛撒物品</option>
		<option>不避让借道通行的行人</option>
		<option>在设有禁停标志、标线的地点停放、临时停车，妨碍其他车辆、行人通行</option>
		<option>在施划的停车泊位之外的人行道上停放、临时停车</option>
		<option>机动车使用声响装置、音响器材，超过规定的噪音限值</option>
		<option>机动车安装、使用干扰交通技术监控设备或者妨碍其他车辆、行人通行安全的装置、材料</option>
		</select>
    </div>
  </div>
  <div class="form-group">
    <label for="Fine" class="col-sm-2 control-label">处罚金额</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Fine" name = "Fine" placeholder="建议处罚金额">
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
      <input type="submit" class="btn btn-default" name = "submit" value = "提交"/>
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
			Fine.value = "100";
			Fscore.value = "6";
			break;
		case "不系安全带":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "超速行驶":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "有意遮挡号牌":
			Fine.value = "1500";
			Fscore.value = "12";
			break;
		case "行驶途中拨打手机":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "机动车驾驶证丢失期间驾驶机动车":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "机动车驾驶证损毁期间驾驶机动车":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "机动车驾驶证被依法扣留期间驾驶机动车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "违法记分达到12分驾驶机动车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "不在机动车道内行驶":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "违反规定使用专用车道":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "不服从交警指挥":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "遇前方机动车停车排队等候或者缓慢行驶时，未依次交替驶入车道减少后的路口、路段":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "在没交通信号灯或交警指挥的交叉路口遇到停车排队或者缓行时，机动车未依次交替通行":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "遇前方机动车停车排队等候或者缓慢行驶时，在人行横道停车等候":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "行经铁路道口，不按规定通行":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "运载危险物品未经批准":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "未将故障机动车移到不妨碍交通的地方停放":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "不避让正在作业的道路养护车、工程作业车":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "机动车违反规定停放、临时停车且驾驶人不在现场":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "机动车喷涂、粘贴标识或广告影响安全驾驶":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "在划分快、慢车道的道路上，不按规定车道行驶":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "在同方向划有两条以上机动车道的道路上，变更车道时影响正常行驶的机动车":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "在铁路道口、人行横道、桥梁、急弯、陡坡、隧道或者容易发生危险的路段掉头":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "掉头时妨碍正常行驶的车辆和行人通行":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "未按规定鸣喇叭示意":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "在禁止鸣喇叭的区域或者路段鸣喇叭":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "在机动车驾驶室的前后窗范围内悬挂、放置妨碍驾驶人视线的物品":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "机动车载运超限物品行经铁路道口时不按指定的道口通过":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "机动车载运超限物品行经铁路道口时不按指定的时间通过":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "机动车行经渡口，不服从渡口管理人员指挥，不依次待渡":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "机动车在单位院内居民居住区内不避让行人":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "驾驶摩托车手离车把":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "驾驶摩托车在车把上悬挂物品":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "使用教练车时有与教学无关的人员乘坐":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "实习期内未粘贴或悬挂实习标志":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "驾驶安全设施不全的机动车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "驾驶机件不符合技术标准的机动车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "不按规定倒车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在车门、车厢没有关好时行车":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "机动车在没有划分机动车道、非机动车道和人行道的道路上，不在道路中间通行":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "驾驶机动车下陡坡时熄火、空挡滑行":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "连续驾驶机动车超过4小时未停车休息或休息时间少于20分钟":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "使用他人机动车驾驶证驾驶机动车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "改变车身颜色，更换发动机，更换车身或车架，未按规定时限办理变更登记":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "机动车所有权转移后，现机动车所有人未按规定时限办理转移登记":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "机动车所有人办理变更登记，未按规定时限到住所地车辆管理所申请机动车转入":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "以欺骗、贿赂等不正当手段办理补、换领机动车证书号牌行驶证和检验合格标志等业务":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "机动车违反警告标志指示":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "机动车违反警告标线指示":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "公路客运车辆以外的载客汽车违反规定载货":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "驾驶时观看电视":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在同车道行驶中，不按规定与前车保持必要的安全距离":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "违反转向灯使用规定":
			Fine.value = "50";
			Fscore.value = "1";
			break;
		case "违反夜间没有路灯照明不良或者低能见度下情况灯光使用规定":
			Fine.value = "50";
			Fscore.value = "1";
			break;
		case "违反交替使用远近光灯示意规定":
			Fine.value = "50";
			Fscore.value = "1";
			break;
		case "不按规定会车":
			Fine.value = "100";
			Fscore.value = "1";
			break;
		case "上道路行驶的机动车未按规定粘贴保险标志":
			Fine.value = "50";
			Fscore.value = "1";
			break;
		case "未随车携带行驶证":
			Fine.value = "50";
			Fscore.value = "1";
			break;
		case "未随身携带驾驶证":
			Fine.value = "50";
			Fscore.value = "1";
			break;
		case "载货长度、宽度、高度超过规定":
			Fine.value = "100";
			Fscore.value = "1";
			break;
		case "上道路行驶的机动车未按规定粘贴检验合格标志":
			Fine.value = "50";
			Fscore.value = "1";
			break;
		case "行经人行横道，未减速行驶":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "遇行人正在通过人行横道时未停车让行":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "行经没有交通信号的道路时，遇行人横过道路未避让":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "驾驶摩托车时驾驶人未按规定戴安全头盔":
			Fine.value = "50";
			Fscore.value = "2";
			break;
		case "通过有灯控路口时，不按所需行进方向驶入导向车道":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "左转弯时，未靠路口中心点左侧转弯":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "通过路口遇放行信号不依次通过":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "通过路口遇停止信号时，停在停止线以内或路口内":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "通过路口向右转弯遇同车道内有车等候放行信号时，不依次停车等候":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "驾驶时拨打接听手持电话":
			Fine.value = "200";
			Fscore.value = "2";
			break;
		case "驾驶时有其他妨碍安全行车的行为":
			Fine.value = "200";
			Fscore.value = "2";
			break;
		case "摩托车载人超过核定人数":
			Fine.value = "200";
			Fscore.value = "2";
			break;
		case "公路客运车辆以外的载客汽车载人超过核定人数，未超过20%":
			Fine.value = "200";
			Fscore.value = "2";
			break;
		case "遇有前方车辆停车排队等候或者缓慢行驶时，穿插等候车辆":
			Fine.value = "200";
			Fscore.value = "2";
			break;
		case "城市快速路上行驶时驾驶人未按规定使用安全带":
			Fine.value = "50";
			Fscore.value = "2";
			break;
		case "逆向行驶":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "不按交通信号灯规定通行":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "1、超过规定时速，未超过20%":
			Fine.value = "50";
			Fscore.value = "3";
			break;
		case "2、超过规定时速20%，未超过50%":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "从前车右侧超车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "前车左转弯时超车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "前车掉头时超车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "前车超车时超车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "与对面来车有会车可能时超车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "超越执行紧急任务的警车、消防车、救护车、工程救险车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "在铁路道口路口窄桥弯道陡坡隧道人行横道等没有超车条件的地点超车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "机动车在道路上发生故障或事故后，不按规定设置警告标志或未按规定使用警示灯光":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "准备进入环形路口不让已在路口内的机动车先行":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "在有交通信号灯没有方向指示灯的路口，转弯的机动车未让直行的车辆、行人先行":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "在没有交通信号灯也没有交通警察指挥的路口，转弯的机动车未让直行的车辆、行人先行":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "在有交通信号灯没有方向指示灯的路口相对方向行驶的右转弯机动车不让左转弯车辆先行":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "在没有交通信号灯也没有交通警察指挥的路口相对行驶右转弯机动车不让左转弯车辆先行":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "机动车通过无灯控或交警指挥的路口，不按交通标志、标线指示让优先通行的一方先行":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "机动车通过无灯控、交警指挥、交通标志标线控制的路口，不让右方道路的来车先行":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "小型载客汽车牵引旅居挂车以外的且总质量700千克以上挂车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "不避让执行任务的警车、消防车、救护车、工程救险车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "不避让盲人":
			Fine.value = "100";
			Fscore.value = "3";
			break;
		case "上道路行驶的机动车未按规定定期进行安全技术检验":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "机动车违反禁令标志指示":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "机动车违反禁止标线指示":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "上道路行驶的机动车未悬挂机动车号牌":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "故意遮挡机动车号牌":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "故意污损机动车号牌":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "不按规定安装机动车号牌":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "运载危险物品时不按规定的时间、路线、速度行驶":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "运载危险物品时未悬挂警示标志":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "运载危险物品时未采取必要的安全措施":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "机动车在城市快速路上遇交通拥堵，占用应急车道行驶":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "机动车从匝道进入或驶离高速公路时不按规定使用灯光":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "机动车从匝道进入高速公路时妨碍已在高速公路内的机动车正常行驶":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在高速公路的路肩上行驶":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "非紧急情况下在高速公路应急车道上行驶":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在高速公路上通过施工作业路段，不减速行驶":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "在高速公路上骑、轧车行道分界线":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在高速公路上试车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在高速公路上发生故障或交通事故，无法行驶的，拖曳、牵引不使用救援车或者清障车":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "低能见度气象条件下在高速公路上不按规定行驶":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在高速公路上行驶的载货汽车车厢载人":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在高速公路上行驶的两轮摩托车载人":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在高速公路上行驶时，驾驶人未按规定使用安全带":
			Fine.value = "100";
			Fscore.value = "2";
			break;
		case "驾驶设计最高时速低于70公里的机动车进入高速公路":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "在高速公路上发生故障或交通事故，驾驶人不按规定使用危险报警闪光灯":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "高速公路上车辆发生故障或交通事故，不按规定设置警告标志":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "在高速公路上超过规定时速行驶的，未超过50%":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "在高速公路上正常情况下以低于规定最低时速行驶":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "在匝道、加速车道或者减速车道上超车":
			Fine.value = "200";
			Fscore.value = "3";
			break;
		case "非紧急情况下在高速公路应急车道上停车":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "在高速公路上的车道内停车":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "机动车在高速公路遇交通拥堵，占用应急车道行驶":
			Fine.value = "200";
			Fscore.value = "6";
			break;
		case "在高速公路上倒车":
			Fine.value = "200";
			Fscore.value = "12";
			break;
		case "在高速公路上逆行":
			Fine.value = "200";
			Fscore.value = "12";
			break;
		case "在高速公路上穿越中央分隔带掉头":
			Fine.value = "200";
			Fscore.value = "12";
			break;
		case "非警车、消防车、、救护车、工程救险车喷涂专用的或者与其相类似的标志":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "服用国家管制的精神药品或麻醉药品，驾驶机动车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "患有妨碍安全驾驶机动车的疾病，驾驶机动车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "过度疲劳，驾驶机动车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "牵引故障机动车时，被牵引的机动车除驾驶员外载人":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "牵引故障机动车时，被牵引的机动车拖带挂车":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "牵引故障机动车时，被牵引的机动车宽度大于牵引的机动车":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "使用软连接装置牵引机动车时，牵引车与被牵引车之间未保持安全距离":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "牵引制动失效的被牵引车，未使用硬连接牵引装置":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "使用摩托车牵引车辆":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "牵引摩托车":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "未使用专用清障车拖曳转向或照明、信号装置失效的机动车":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "高速公路或者城市快速路以外道路行驶时驾驶人未按规定使用安全带":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "摩托车后座载乘不满十二周岁未成年人":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "驾驶轻便摩托车载人":
			Fine.value = "50";
			Fscore.value = "0";
			break;
		case "载物行驶时遗洒、飘散载运物":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "运载超限物品时不按规定的时间、路线、速度行驶":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "运载超限物品时未悬挂明显标志":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "载客汽车以外的其他机动车载人超过核定人数":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "补领机动车驾驶证后，继续使用原机动车驾驶证":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "驾驶机动车时向路上抛撒物品":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "不避让借道通行的行人":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "在设有禁停标志、标线的地点停放、临时停车，妨碍其他车辆、行人通行":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "在施划的停车泊位之外的人行道上停放、临时停车":
			Fine.value = "200";
			Fscore.value = "0";
			break;
		case "机动车使用声响装置、音响器材，超过规定的噪音限值":
			Fine.value = "100";
			Fscore.value = "0";
			break;
		case "机动车安装、使用干扰交通技术监控设备或者妨碍其他车辆、行人通行安全的装置、材料":
			Fine.value = "200";
			Fscore.value = "0";
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
