<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

    <title>管理员登录|长春环宇健身中心</title>

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
   

    

    <div class="container">
      
     <div class="row" style="margin-top:50px">
             <div class="col-sm-6 col-md-4 col-md-offset-4">
                 <h1 class="text-center login-title">管理员登录</h1>
                 <div class="account-wall">
                     <img class="profile-img" src="<?php echo base_url(); ?>public/img/user.png"
                         alt="">
                    <?php echo form_open('admin/alogin/go', array('role'=>'form','class'=>'form-signin','method'=>'post')); ?>                  
                    <!-- <form class="form-signin" action="<?php echo base_url(); ?>login/go" method="post"> -->
                     <input name="uname" type="text" value="<?php if(!empty($_COOKIE['userName'])){ echo $_COOKIE['userName'];}?>" class="form-control" placeholder="管理员名" required autofocus>
                     <input name="pass" type="password" class="form-control" placeholder="密码" required>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">
                         登录</button>
                   
      
                     <!--</form>-->
                     <?php echo form_close(); ?>
                     <div style="margin-top:20px"><?php echo validation_errors(); ?><p class="text-danger text-center"><?php if(isset($errmsg)){ echo $errmsg;} ?></p></div>
                 </div>
                
             </div>
         </div>

      

      

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