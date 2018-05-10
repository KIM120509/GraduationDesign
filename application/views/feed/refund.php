<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <style>
      #main-content .wrapper .row button.add{
          float: right;
          width: 80px;
          margin-right: 20px;
      }
      #main-content table th,#main-content table td{
          text-align: center;
      }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header black-bg">
          <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <!--logo start-->
          <a href="../index.html" class="logo"><b>中小型猪场管理系统（非专业版）</b></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <ul class="nav top-menu">
                  <!-- settings start -->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="../index.html#">
                          <i class="fa fa-tasks"></i>
                          <span class="badge bg-theme">4</span>
                      </a>
                      <ul class="dropdown-menu extended tasks-bar">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">您有4条提醒信息，请及时处理！</p>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">DashGum Admin Panel</div>
                                      <div class="percent">40%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                          <span class="sr-only">40% Complete (success)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Database Update</div>
                                      <div class="percent">60%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Product Development</div>
                                      <div class="percent">80%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">80% Complete</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Payments Sent</div>
                                      <div class="percent">70%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                          <span class="sr-only">70% Complete (Important)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="external">
                              <a href="#">查看全部提醒</a>
                          </li>
                      </ul>
                  </li>
                  <!-- settings end -->
              </ul>
              <!--  notification end -->
          </div>
          <div class="top-menu">
              <ul class="nav pull-right top-menu">
                  <li id="welcome">欢迎您，马金金（管理员）</li>
              </ul>
          </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <p class="centered"><a href="welcome/home"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">猪场管理系统</h5>

                  <li class="mt">
                      <a  href="welcome/home">
                          <i class="fa fa-dashboard"></i>
                          <span>首页</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>基本信息</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basicInfo/index">猪场设置</a></li>
                          <li><a  href="basicInfo/juanShe">圈舍设置</a></li>
                          <li><a  href="basicInfo/customer">客户信息</a></li>
                          <li><a  href="basicInfo/employee">员工信息</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>种猪管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="breed/index">种猪资料</a></li>
                          <li><a  href="breed/info">种猪信息登记</a></li>
                          <li><a  href="breed/boar">公猪配种登记</a></li>
                          <li><a  href="breed/sow">母猪信息登记</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>商品猪管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="seller/index">商品猪资料</a></li>
                          <li><a  href="seller/info">商品猪信息登记</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>饲料管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="feed/index">饲料信息</a></li>
                          <li><a  href="feed/inventory">饲料库存明细</a></li>
                          <li><a  href="feed/storage">饲料入库</a></li>
                          <li><a  href="feed/out">饲料出库</a></li>
                          <li class="active" ><a href="feed/refund">饲料退库</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>药品管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="drug/index">药品库存明细</a></li>
                          <li><a  href="drug/storage">药品入库</a></li>
                          <li><a  href="drug/out">药品出库</a></li>
                          <li><a  href="drug/refund">药品退库</a></li>
                          <li><a  href="drug/treatment">诊疗登记</a></li>
                          <li><a  href="drug/disinfection">消毒登记</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>收支管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="money/index">收入登记</a></li>
                          <li><a  href="money/expenses">支出登记</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>日用商品管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="daily/index">库存明细</a></li>
                          <li><a  href="daily/purchase">采购登记</a></li>
                          <li><a  href="daily/use">领用登记</a></li>
                          <li><a  href="daily/scrap">报废登记</a></li>
                          <li><a  href="daily/articlesInfo">用品信息</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <h3><i class="fa fa-angle-right"></i> 猪场设置</h3>
              <div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <h4><i class="fa fa-angle-right"></i> 猪场名称设置</h4>
                          <hr>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>猪场名称</th>
                                  <th>操作</th>
                                  <th>备注</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>老马家的猪场</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                                  <td>猪场名称暂时不允许进行增加、删除等操作，只能在此基础上修改</td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="content-panel">
                          <h4>
                              <i class="fa fa-angle-right"></i> 栋别设置
                              <button type="button" class="btn btn-info add">添加</button>
                          </h4>
                          <hr>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>名称</th>
                                  <th>操作</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>种母猪</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <button type="button" class="btn btn-primary">删除</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>种公猪</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <button type="button" class="btn btn-primary">删除</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>育肥</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <button type="button" class="btn btn-primary">删除</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>产房</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <button type="button" class="btn btn-primary">删除</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="content-panel">
                          <h4>
                              <i class="fa fa-angle-right"></i> 栏别设置
                              <button type="button" class="btn btn-info add">添加</button>
                          </h4>
                          <hr>
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>名称</th>
                                  <th>操作</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>一号栏</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <button type="button" class="btn btn-primary">删除</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>二号栏</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <button type="button" class="btn btn-primary">删除</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>三号栏</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <button type="button" class="btn btn-primary">删除</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>四号栏</td>
                                  <td>
                                      <button type="button" class="btn btn-warning">编辑</button>
                                      <button type="button" class="btn btn-primary">删除</button>
                                      <!--<button type="button" class="btn btn-success">保存</button>-->
                                      <!--<button type="button" class="btn btn-danger">取消</button>-->
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018届信息管理与信息系统一班马金金
              <a href="refund.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>


  </body>
</html>