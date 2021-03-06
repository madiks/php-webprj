<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>添加课程安排 - 管理后台</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>public/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

     <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>admin/backstage">管理后台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="<?php echo base_url(); ?>admin/backstage"><i class="fa fa-dashboard"></i> 网站概况</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> 会员管理 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>admin/member">会员列表</a></li>
                <li><a href="<?php echo base_url(); ?>admin/member/add">创建会员</a></li>
                <li><a href="<?php echo base_url(); ?>admin/member/deal">处理会员申请</a></li>
                
              </ul>
            </li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table"></i> 课程安排 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>admin/course">课程列表</a></li>
                <li><a href="<?php echo base_url(); ?>admin/course/add">增加课程项目</a></li>
                
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap"></i>  分店管理 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>admin/shoplist">分店列表</a></li>
                <li><a href="<?php echo base_url(); ?>admin/shoplist/add">增加分店</a></li>
              </ul>
            </li>
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i> 内容管理 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>admin/content/indexm">首页模块管理</a></li>
                <li><a href="<?php echo base_url(); ?>admin/content/about">关于项目管理</a></li>
                <li><a href="<?php echo base_url(); ?>admin/content/activity">优惠活动管理</a></li>
                <li><a href="<?php echo base_url(); ?>admin/content/service">会员服务管理</a></li>
                <li><a href="<?php echo base_url(); ?>admin/content/fitness">健身常识管理</a></li>
                <li><a href="<?php echo base_url(); ?>admin/content/courses">健身课程管理</a></li>
              </ul>
            </li>
             <li><a href="<?php echo base_url(); ?>admin/content/add_activity"><i class="fa fa-list-alt"></i> 优惠活动</a></li>
             <li > <a href="<?php echo base_url(); ?>admin/content/add_fitness"><i class="fa fa-leaf"></i> 健身常识</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
            
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('aname'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">               
                <li><a href="<?php echo base_url(); ?>admin/setting"><i class="fa fa-gear"></i> 设置</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>admin/alogin/login_out"><i class="fa fa-power-off"></i> 登出</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>课程安排 <small>添加课程安排</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>admin/backstage"><i class="fa fa-dashboard"></i> 管理后台</a></li>
              <li class="active"><i class="fa fa-table"></i> 课程安排</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
        <div class="col-md-11" style="margin-top:20px;">
          <form class="form-horizontal" action="<?php echo base_url(); ?>admin/course/cshe_save" method="post">
                   <fieldset>
                     
             
                     <!-- Name input-->
                     <div class="form-group">
                       <label class="col-md-2 control-label" for="cname">课程名</label>
                       <div class="col-md-10">
                         <input id="cname" name="cname" type="text" placeholder="课程名" class="form-control">
                       </div>
                     </div>

                    <div class="form-group">
                       <label class="col-md-2 control-label" for="coach">教练</label>
                       <div class="col-md-10">
                         <input id="coach" name="coach" type="text" placeholder="教练" class="form-control">
                       </div>
                     </div>

                    <div class="form-group">
                      <label class="col-md-2 control-label" for="sname">地点</label>
                      <div class="col-md-10">
                        <select id="sname" name="shopname" class="form-control">
                          <?php foreach($shoplist as $sl):?>
                          <option value="<?php echo $sl->shopname;?>"><?php echo $sl->shopname;?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                               
                     <div class="form-group">
                       <label class="col-md-2 control-label" for="time">上课时间</label>
                       <div class="col-md-10">
                         <input id="time" name="time" type="text" placeholder="上课时间" class="form-control">
                       </div>
                     </div>

                      <div class="form-group">
                       <label class="col-md-2 control-label" for="time_start">选课开始时间</label>
                       <div class="col-md-10">
                         <input id="time_start" name="time_start" type="text" placeholder="选课开始时间" class="form-control">
                       </div>
                     </div>

                      <div class="form-group">
                       <label class="col-md-2 control-label" for="time_end">选课结束时间</label>
                       <div class="col-md-10">
                         <input id="time_end" name="time_end" type="text" placeholder="选课结束时间" class="form-control">
                       </div>
                     </div>

                      <div class="form-group">
                       <label class="col-md-2 control-label" for="limit">最大预约人数</label>
                       <div class="col-md-10">
                         <input id="limit" name="limit" type="text" placeholder="最大预约人数" class="form-control">
                       </div>
                     </div>

                      <div class="form-group">
                      <label class="col-md-2 control-label" for="status">状态</label>
                      <div class="col-md-10">
                        <select id="status" name="status" class="form-control">
                         <option value="1">可选课</option>
                         <option value="0">不可选课</option>
                        </select>
                      </div>
                    </div>

                    

                     
                     <!-- Form actions -->
                     <div class="form-group">
                       <div class="col-md-12 text-right">
                         <button type="submit" class="btn btn-primary btn-lg">发布</button>
                       </div>
                     </div>
                   </fieldset>
                   </form>
            
        </div>
        </div>
        



      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
   
    <script src="<?php echo base_url(); ?>public/admin/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>public/admin/js/bootstrap.js"></script>
    
    <!-- Page Specific Plugins -->
     <script type="text/javascript">
        
     </script>
  </body>
</html>

