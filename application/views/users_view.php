<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

    <title>更改密码|长春环宇健身中心</title>

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
  <style type="text/css">
 .colorgraph {
      height: 5px;
      border-top: 0;
      background: #c4e17f;
      border-radius: 5px;
      background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
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
                <?php if(!$this->session->userdata('uid')){ ?>
                <li><a href="<?php echo base_url(); ?>login">登录</a></li>
                <li><a href="<?php echo base_url(); ?>register">注册</a></li>
               <?php }else{ ?>
                  <li><a href="<?php echo base_url(); ?>users"><span class="glyphicon glyphicon-user" style="margin-right: 1px;"></span><?php echo $this->session->userdata('uname'); ?></a></li>
                 <li><a href="<?php echo base_url(); ?>login/login_out">退出登录</a></li>
               <?php } ?>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    

    <div class="container">
      
     

      <div class="row" style="margin-top:100px;" >
          <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
         <form role="form" action="<?php echo base_url(); ?>users/change_pwd" method="post">
           <h2>更改密码</h2>
           <hr class="colorgraph">
          
           <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-6">
               <div class="form-group">
                 <input type="password" name="password" id="password" class="form-control input-lg" placeholder="新密码" tabindex="5">
               </div>
             </div>
             <div class="col-xs-12 col-sm-6 col-md-6">
               <div class="form-group">
                 <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="确认密码" tabindex="6">
               </div>
             </div>
           </div>
          
           
           <hr class="colorgraph">
           <div class="row">
             <div class="col-xs-12 col-md-6"><input type="submit" value="更改密码"  onclick="return check()" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
             
           </div>
         </form>
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
        function cpassword(){
          var ps = $("#password").val();
          var pass = $("#password_confirmation").val();
         if(ps.length==""||pass.length==""){
           alert("密码不能为空！");
           return false;
         }else if(ps != pass){
           alert("两次输入密码不一致!");
           return false;
         }
         return true;
       }


       function check()
       {
           
           if(!cpassword()){
             return false;
           }
           
           return true;
       }
    </script>

</body></html>