<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

    <title>长春环宇健身中心</title>

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
  <style id="holderjs-style" type="text/css"></style></head>
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
                <li class="active"><a href="<?php echo base_url(); ?>">健身首页</a></li>
                <li><a href="<?php echo base_url(); ?>about/">关于环宇</a></li>
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


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <?php foreach ($couls as $key=>$citem): ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $key;?>" class="<?php if($key == 0) echo "active";?>"></li>
      <?php endforeach ?>
      </ol>
      <div class="carousel-inner">
        <?php foreach ($couls as $key=>$citem): ?>
        
        <div class="item <?php if($key == 0) echo "active";?>">
          <img src="<?php echo base_url(); ?><?php echo $citem->img;?>" alt="" >
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $citem->title;?></h1>
              <p><?php echo $citem->desc;?></p>
              
            </div>
          </div>
        </div>
      <?php endforeach ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <a href="<?php echo base_url(); ?>about/details/clubs">
            <img class="img-thumbnail" src="<?php echo base_url(); ?>img/index_04.jpg" alt="140x140">
            <h2>门店导航</h2>
          </a>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-4">
          <a href="<?php echo base_url(); ?>bookingcourse">
            <img class="img-thumbnail" src="<?php echo base_url(); ?>img/index_05.jpg" alt="140x140" >
            <h2>课程预约</h2>
          </a>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-4">
          <a href="<?php echo base_url(); ?>checkshe">
            <img class="img-thumbnail" src="<?php echo base_url(); ?>img/index_06.jpg" alt="140x140" >
            <h2>课表查看</h2>
          </a>
        </div><!-- /.col-lg-3 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->
      <?php foreach($descmodel as $key => $desc):?>
      <?php if($key%2 == 0){ ?>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $desc->title; ?> <span class="text-muted"><?php echo $desc->subtitle;?></span></h2>
          <p class="lead"><?php echo $desc->desc;?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive img-rounded" src="<?php echo base_url(); ?><?php echo $desc->img; ?>" alt="500x500" >
        </div>
      </div>
      <?php }else{ ?>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive img-rounded" src="<?php echo base_url(); ?><?php echo $desc->img; ?>" alt="500x500" >
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $desc->title; ?> <span class="text-muted"><?php echo $desc->subtitle; ?></span></h2>
          <p class="lead"><?php echo $desc->desc; ?></p>
        </div>
      </div>
      <?php } ?>
    <?php endforeach ?>
     

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
  

</body></html>