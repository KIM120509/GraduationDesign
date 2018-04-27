<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <title>中小型猪场管理系统（非专业版）</title>
    <base href="<?php echo site_url();?>">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <form id="frm_login" action="welcome/check_login" method="POST" >
        <div class="login">
            <div class="box png">
              <div class="logo png"></div>
              <div class="input">
                  <div class="log">
                      <div class="name">
                          <label>用户名</label><input type="text" class="text" id="value_1" placeholder="用户名" name="username" tabindex="1">
                      </div>
                      <div class="pwd">
                          <label>密　码</label><input type="password" class="text" id="value_2" placeholder="密码" name="password" tabindex="2">
                          <input type="submit" class="submit" tabindex="3" value="登录">
                          <div class="check"></div>
                      </div>
                      <div class="tip"></div>
                  </div>
              </div>
          </div>
            <div class="air-balloon ab-1 png"></div>
            <div class="air-balloon ab-2 png"></div>
            <div class="footer"></div>
        </div>
    </form>

    <script type="text/javascript" src="assets/js/jQuery.js"></script>
    <script type="text/javascript" src="assets/js/fun.base.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
