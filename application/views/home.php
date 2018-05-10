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

    <title>中小型猪场管理系统（非专业版）</title>
    <base href="<?php echo site_url(); ?>">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>
    <section id="container" >
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="welcome/home" class="logo"><b>中小型猪场管理系统（非专业版）</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="iwelcome/home">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">您有4条提醒信息，请及时处理！</p>
                            </li>
                            <?php
                            foreach($reminds as $rem) {
                                ?>
                                <li>
                                    <div class="task-info">
                                        <div class="desc"><?php echo $rem->content;?></div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <!-- settings end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li id="welcome">欢迎您，<?php echo $login_user -> username; ?>（<?php echo $login_user -> identity; ?>）</li>
                </ul>
            </div>
        </header>

        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="welcome/home"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered">猪场管理系统</h5>

                    <li class="mt">
                        <a class="active"  href="welcome/home">
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
                            <li><a  href="daily/use">领用登记</a></li>
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
              <div class="row">
                  <div class="col-lg-12 main-chart">
                  首页页面内容<br>
                      应用猪场管理系统，把原有不规则的手工数据进行标准化、格式化，
                      提高了数据管理的效率，同时培养了企业员工的信息化能力，为将来
                      进一步引入企业资源、物流管理等储备生产管理数据和管理人员。
                      <br>
                      目前我国的生猪养殖仍以散养方式为主，大部分的饲养规模在头以下，
                      年出栏生猪占全国生猪出栏总量的比例虽然呈现逐年下降的趋势，但是
                      仍保持在左右。这种模式下的养猪成本相对较高，机械化、自动化程度
                      极低，没有形成规模，抗风险能力低，从而导致了较低的养殖效率以及
                      偏高的猪肉价格。随着物价上涨，养猪所需的饲料等价格也普遍上升，
                      这对采用散养方式的农户来说，是极为不利的，他们的竞争力也会变得
                      越来越弱，将很难在市场上生存。应用猪场管理系统，把原有不规则的
                      手工数据进行标准化、格式化，提高了数据管理的效率，同时培养了企
                      业员工的信息化能力，为将来进一步引入企业资源、物流管理等储备生
                      产管理数据和管理人员。
                      系统拟开发功能如下：种猪管理、商品猪管理、饲料管理、药品管理、
                      日常用品管理、收支管理等管理。
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
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
    <script src="assets/js/common-scripts.js"></script>
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>
  </body>
</html>
