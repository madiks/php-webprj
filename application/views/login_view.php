<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

    <title>用户登录|长春环宇健身中心</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/carousel.css" rel="stylesheet">
  <style id="holderjs-style" type="text/css">
  .form-signin
  {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
  }
  .form-signin .form-signin-heading, .form-signin .checkbox
  {
      margin-bottom: 10px;
  }
  .form-signin .checkbox
  {
      font-weight: normal;
  }
  .form-signin .form-control
  {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
  }
  .form-signin .form-control:focus
  {
      z-index: 2;
  }
  .form-signin input[type="text"]
  {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
  }
  .form-signin input[type="password"]
  {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
  }
  .account-wall
  {
      margin-top: 20px;
      padding: 40px 0px 20px 0px;
      background-color: #f7f7f7;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .login-title
  {
      color: #555;
      font-size: 30px;
      font-weight: 400;
      display: block;
  }
  .profile-img
  {
      width: 96px;
      height: 96px;
      margin: 0 auto 10px;
      display: block;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
  }
  .need-help
  {
      margin-top: 10px;
  }
  .new-account
  {
      display: block;
      margin-top: 10px;
  }
  </style></head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>"><b>环宇健身</b></a>
            </div>
            <div class="navbar-collapse collapse navbar-ex1-collapse" style="height: 1px;">
              <ul class="nav navbar-nav">
                <li ><a href="<?php echo base_url(); ?>">健身首页</a></li>
                <li ><a href="<?php echo base_url(); ?>about/">关于环宇</a></li>
                <li><a href="<?php echo base_url(); ?>courses/">健身课程</a></li>
                <li><a href="<?php echo base_url(); ?>activity/">优惠活动</a></li>
                <li class="dropdown">
                  <a href="<?php echo base_url(); ?>services/" class="dropdown-toggle" data-toggle="dropdown">会员服务 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>services">会员服务</a></li>
                    <li><a href="<?php echo base_url(); ?>fitness">健身常识</a></li>
        			<li><a href="<?php echo base_url(); ?>bmitest">BMI测试</a></li>
                  </ul>
                </li>

              </ul>
              <ul class="nav navbar-nav pull-right" style="padding-right: 15px;">
              	<li class="active"><a href="<?php echo base_url(); ?>login">登录</a></li>
              	<li ><a href="<?php echo base_url(); ?>register">注册</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    

    <div class="container">
      
     <div class="row" style="margin-top:100px">
             <div class="col-sm-6 col-md-4 col-md-offset-4">
                 <h1 class="text-center login-title">会员登录</h1>
                 <div class="account-wall">
                     <img class="profile-img" src="<?php echo base_url(); ?>public/img/user.png"
                         alt="">
                    <?php echo form_open('login/go', array('role'=>'form','class'=>'form-signin','method'=>'post')); ?>                  
                    <!-- <form class="form-signin" action="<?php echo base_url(); ?>login/go" method="post"> -->
                     <input name="uname" type="text" value="<?php if(!empty($_COOKIE['userName'])){ echo $_COOKIE['userName'];}?>" class="form-control" placeholder="用户名" required autofocus>
                     <input name="pass" type="password" class="form-control" placeholder="密码" required>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">
                         登录</button>
                     <label class="checkbox pull-left">
                         <input name="remember" type="checkbox" value="">
                         记住我
                     </label>
      
                     <!--</form>-->
                     <?php echo form_close(); ?>
                     <div style="margin-top:20px"><?php echo validation_errors(); ?><p class="text-danger"><?php if(isset($errmsg)){ echo $errmsg;} ?></p></div>
                 </div>
                 <a href="<?php echo base_url(); ?>register" class="text-center new-account">注册新用户</a>
             </div>
         </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">返回顶部</a></p>
        <p>© 2014 长春环宇健身中心&nbsp<a href="<?php echo base_url(); ?>">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/holder.min.js"></script>
    <script type="text/javascript">
      
    </script>

</body></html>