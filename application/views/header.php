<?php
$login_user = $this->session->userdata('login_user');
$reminds = $this -> session -> userdata('remind');
?>
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