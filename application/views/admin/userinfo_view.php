<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>会员详细信息 - 管理后台</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>public/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <style  type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
    body
    {
        font-family: 'Lato', 'sans-serif';
        }
    .profile 
    {
        min-height: 355px;
        display: inline-block;
        }
    figcaption.ratings
    {
        margin-top:20px;
        }
    figcaption.ratings a
    {
        color:#f1c40f;
        font-size:11px;
        }
    figcaption.ratings a:hover
    {
        color:#f39c12;
        text-decoration:none;
        }
    .divider 
    {
        border-top:1px solid rgba(0,0,0,0.1);
        }
    .emphasis 
    {
        border-top: 4px solid transparent;
        }
    .emphasis:hover 
    {
        border-top: 4px solid #1abc9c;
        }
    .emphasis h2
    {
        margin-bottom:0;
        }
   
  
    </style>
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
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> 会员管理 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>admin/member">会员列表</a></li>
                <li><a href="<?php echo base_url(); ?>admin/member/add">创建会员</a></li>
                <li><a href="<?php echo base_url(); ?>admin/member/deal">处理会员申请</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
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
                <li><a href="<?php echo base_url(); ?>admin/member/index">优惠活动管理</a></li>
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

        <div class="row" style="margin-top:15px">
          <div class="col-lg-12">
            <h1>会员管理 <small>会员详细信息</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>admin/backstage"><i class="fa fa-dashboard"></i> 管理后台</a></li>
              <li class="active"><i class="fa fa-users"></i> 会员管理</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
             <div class="well profile">
                   <div class="col-sm-12">
                       <div class="col-xs-12 col-sm-8">
                           <h2><?php echo $uinfo->name;?></h2>
                           <p><strong>登录名: </strong><?php echo $uinfo->uname;?> </p>
                          <p><strong>联系电话: </strong><?php echo $uinfo->tel;?> </p>
                            <p><strong>会员卡号: </strong><?php echo $uinfo->cardnum;?> </p>
                            <p><strong>所属分店: </strong><?php echo $uinfo->sname;?> </p>
                            <p><strong>账户创建时间: </strong><?php echo $uinfo->create_time;?> </p>
                        
                       </div>             
                       <div class="col-xs-12 col-sm-4 text-center">
                           <figure>
                               <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                              
                           </figure>
                       </div>
                   </div>            
                   <div class="col-xs-12 divider text-center">
                   <h3>已预约课程列表</h3>
                               <div class="table-responsive">
                               
                                       
                                     <table id="mytable" class="table table-bordred table-striped">
                                          
                                          <thead>
                                          <th>课程名</th>
                                           <th>教练信息</th>
                                           <th>地点</th>
                                           <th>上课时间</th>
                                          </thead>
                           <tbody>
                           <?php if(!empty($cses['brd'])){ ?>
                           <?php foreach($cses['brd'] as $sl): ?>
                           <tr id="cshe<?php echo $sl->id;?>">
                           <td><?php echo $sl->cname;?></td>
                           <td><?php echo $sl->coach;?></td>
                           <td><?php echo $sl->shopname;?></td>
                           <td><?php echo $sl->time;?></td>
                           
                           </tr>
                           <?php endforeach ?>
                           <?php }else { ?>
                           <div class="alert alert-warning">
                                该用户还没有预约课程！
                            </div> 
                                   
                           <?php } ?> 
                          
                           
                          
                           
                           </tbody>
                               
                       </table>

                       <div class="clearfix"></div>
                         <ul class="pager">
                          <?php if($cses['link']['pageNo']>1){ ?>
                            <li class="previous"><a href="<?php echo base_url(); ?>admin/member/get_info/<?php echo $uinfo->id;?>/<?php echo $cses['link']['pageNo']-1;?>">&larr; 上一页</a></li>
                          <?php } ?>
                          <?php if($cses['link']['pageNo']<$cses['link']['totalPageNum']){ ?>
                            <li class="next"><a href="<?php echo base_url(); ?>admin/member/get_info/<?php echo $uinfo->id;?>/<?php echo $cses['link']['pageNo']+1;?>">下一页 &rarr;</a></li>
                          <?php } ?>
                          </ul>
                                       
                          </div>
                      
                   </div>
             </div>                 
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

