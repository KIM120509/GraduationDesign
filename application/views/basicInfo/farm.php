<?php
$login_user = $this->session->userdata('login_user');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>中小型猪场管理系统</title>
    <base href="<?php echo site_url(); ?>">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <style>
      #main-content .wrapper .row button.add{
          float: right;
          width: 80px;
          margin-right: 20px;
      }
      #main-content table th,#main-content table td{
          text-align: center;
      }
      .content-panel{
          position: relative;
      }
      .alert{
          position: fixed;
          z-index: 5;
          width: 500px;
          height: 200px;
          background: #ffd777;
          display: none;
          left: 393px;
          top: 200px;
      }
      .alert .alert_title{
          display: inline-block;
          width: 100%;
          height: 50px;
          color: #ffffff;
          font-weight: bolder;
          font-size: 20px;
          text-align: center;
          line-height: 50px;
          border-bottom: double;
      }
      .alert .alert_con{
          width: 100%;
          /*height: 150px;*/
          padding-left: 20px;
          position: relative;
      }
      .alert .alert_con div{
          position: absolute;
          top: 35px;
          color: #ffffff;
          /*font-size: 18px;*/
      }
      .alert .alert_con .alert_con_tip{
          display: inline-block;
          width: 100px;
          height: 34px;
          text-align: center;
          color: #ffffff;
          font-size: 18px;
      }
      .alert .alert_con .alert_con_info{
          width: 150px;
          height: 34px;
          margin-right: 30px;
          border-radius: 6px;
          color: #000;
      }
    </style>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
          <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
          </div>
          <a href="welcome/home" class="logo"><b>中小型猪场管理系统</b></a>
          <div class="nav notify-row" id="top_menu">
              <ul class="nav top-menu">
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="welcome/home">
                          <i class="fa fa-tasks"></i>
                          <span class="badge bg-theme"><?php echo count($remind)?></span>
                      </a>
                      <ul class="dropdown-menu extended tasks-bar">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">您有<?php echo count($remind)?>条提醒信息，请及时处理！</p>
                          </li>
                          <?php
                          foreach($remind as $rem) {
                              ?>
                              <li class="remind">
                                  <div class="task-info">
                                      <div class="desc"><?php echo $rem->content;?></div>
                                  </div>
                              </li>
                              <?php
                          }
                          ?>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="top-menu">
              <ul class="nav pull-right top-menu">
                  <li id="welcome">欢迎您，<?php echo $login_user -> username; ?>（<?php echo $login_user -> identity; ?>）</li>
                  <li id="sign-out"><a href="welcome/index" class="btn btn-theme04">退出登录</a></li>
              </ul>
          </div>
      </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <p class="centered"><a href="welcome/home"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">猪场管理系统</h5>

                  <li class="mt">
                      <a  href="welcome/home">
                          <i class="fa fa-dashboard"></i>
                          <span>首页</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>基本信息</span>
                      </a>
                      <ul class="sub">
                          <li class="active" ><a href="basicInfo/index">猪场设置</a></li>
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
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>饲料管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="feed/index">饲料信息</a></li>
                          <li><a  href="feed/inventory">饲料库存明细</a></li>
                          <li><a  href="feed/storage">饲料入库</a></li>
                          <li><a  href="feed/out">饲料出库</a></li>
                          <li><a  href="feed/refund">饲料退库</a></li>
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
                          <li><a  href="daily/uses">领用登记</a></li>
                          <li><a  href="daily/scrap">报废登记</a></li>
                          <li><a  href="daily/articlesInfo">用品信息</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
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
                                  <td><?php echo $farm[0]->farm_name;?></td>
                                  <td>
                                      <button type="button" class="btn btn-warning edit">编辑</button>
                                      <div class="alert">
                                          <span class="alert_title">猪场名称设置</span>
                                          <div class="alert_con">
                                              <div>
                                                  <span class="alert_con_tip">猪场名称</span>
                                                  <input type="text" class="alert_con_info" placeholder="<?php echo $farm[0]->farm_name;?>">
                                                  <a href="javascript:;" class="save" data-index="1"><button type="button" class="btn btn-success">保存</button></a>
                                                  <a href="basicInfo/index"><button type="button" class="btn btn-danger">取消</button></a>
                                              </div>
                                          </div>
                                      </div>
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
                              <?php foreach ($builds as $build){?>
                              <tr>
                                  <td><?php echo $build -> build_id;?></td>
                                  <td><?php echo $build -> build_name;?></td>
                                  <td>
                                      <button type="button" class="btn btn-warning edit">编辑</button>
                                      <a href="basicInfo/delete_build?build_id=<?php echo $build->build_id?>"><button type="button" class="btn btn-primary">删除</button></a>
                                      <div class="alert">
                                          <span class="alert_title">栋别设置</span>
                                          <div class="alert_con">
                                              <div>
                                                  <span class="alert_con_tip">栋别名称</span>
                                                  <input type="text" class="alert_con_info" placeholder="<?php echo $build -> build_name;?>">
                                                  <a href="javascript:;" class="save" data-index="2"><button type="button" class="btn btn-success">保存</button></a>
                                                  <a href="basicInfo/index"><button type="button" class="btn btn-danger">取消</button></a>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <?php }?>
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
                              <?php foreach ($fences as $fence){?>
                              <tr>
                                  <td><?php echo $fence -> fence_id;?></td>
                                  <td><?php echo $fence -> fence_name;?></td>
                                  <td>
                                      <button type="button" class="btn btn-warning edit">编辑</button>
                                      <a href="basicInfo/delete_fence?fence_id=<?php echo $fence->fence_id?>"><button type="button" class="btn btn-primary">删除</button></a>
                                      <div class="alert">
                                          <span class="alert_title">栏别设置</span>
                                          <div class="alert_con">
                                              <div>
                                                  <span class="alert_con_tip">栏别名称</span>
                                                  <input type="text" class="alert_con_info" placeholder="<?php echo $fence -> fence_name;?>">
                                                  <a href="javascript:;" class="save" data-index="3"><button type="button" class="btn btn-success">保存</button></a>
                                                  <a href="basicInfo/index"><button type="button" class="btn btn-danger">取消</button></a>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </section>
      </section>
      <footer class="site-footer">
          <div class="text-center">
              2018届信息管理与信息系统一班马金金
              <a href="javascript:scrollTo(0,0);"  class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </section>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="assets/js/common-scripts.js"></script>
  <script>
    var edit = $("#main-content .row .edit");
    $(edit).on("click",function (e) {
        $(this).siblings(".alert").css("display","block")
    });
    var save = $("#main-content .row .save");
    $(save).on("click",function (e) {
        var index = $(this).attr("data-index");
        var info = $(this).siblings(".alert_con_info").val();
        console.log(typeof index);
        if(index == "1"){
            $(this).attr('href','basicInfo/farm_edit?farm_name='+info);

        }
    });
  </script>
  </body>
</html>
