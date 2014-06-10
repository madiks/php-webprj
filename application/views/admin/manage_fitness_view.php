<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>健身常识管理 - 管理后台</title>

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
           
            <li class="dropdown active">
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
             <li><a href="<?php echo base_url(); ?>admin/content/add_fitness"><i class="fa fa-leaf"></i> 健身常识</a></li>
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
            <h1>内容管理 <small>健身常识管理</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>admin/backstage"><i class="fa fa-dashboard"></i> 管理后台</a></li>
              <li class="active"><i class="fa fa-file-text"></i> 内容管理</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        
        <div class="row">
            
                
                <div class="col-md-12">
                <h4>健身常识列表 <a href="<?php echo base_url(); ?>admin/content/add_fitness" class="btn btn-primary pull-right">新建优惠活动</a></h4>
                <div class="table-responsive">
                
                        
                      <table id="mytable" class="table table-bordred table-striped">
                           
                           <thead>
                           <th>标题</th>
                            <th>发布时间</th>
                              <th>修改</th>
                               <th>删除</th>
                           </thead>
            <tbody>
            <?php foreach($fits['fitness'] as $key=>$sl): ?>
            <tr id="<?php echo $sl->id;?>">
            <td><?php echo $sl->title;?></td>
            <td><?php echo $sl->updatetime;?></td>
            <td><p><a class="btn btn-primary btn-xs btnedit" href="<?php echo base_url(); ?>admin/content/edit_fitness/<?php echo $sl->id;?>"><i class="fa fa-pencil-square-o"></i></a></p></td>
            <td><p><button class="btn btn-danger btn-xs btndel" actname="<?php echo $sl->id;?>" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><i class="fa fa-trash-o"></i></button></p></td>
            </tr>
            <?php endforeach ?>
        
         
            
            
           
            
           
            
            </tbody>
                
        </table>

        <div class="clearfix"></div>
          <ul class="pager">
           <?php if($fits['link']['pageNo']>1){ ?>
             <li class="previous"><a href="<?php echo base_url(); ?>admin/content/activity/<?php echo $fits['link']['pageNo']-1;?>">&larr; 上一页</a></li>
           <?php } ?>
           <?php if($fits['link']['pageNo']<$fits['link']['totalPageNum']){ ?>
             <li class="next"><a href="<?php echo base_url(); ?>admin/content/activity/<?php echo $fits['link']['pageNo']+1;?>">下一页 &rarr;</a></li>
           <?php } ?>
           </ul>
                        
                    </div>
                    
                </div>
          </div>


         
              
              
              <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title custom_align" id="Heading">删除</h4>
                </div>
                    <div class="modal-body">
                 
                 <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> 确定删除该优惠活动?</div>
                 
                </div>
                  <div class="modal-footer ">
                  <button type="button" class="btn btn-warning" id="suredel" actname="" ><i class="fa fa-check"></i></span>确定</button>
                  <button type="button" class="btn btn-warning" id="canceldel"><i class="fa fa-times"></i>取消</button>
                </div>
                  </div>
              <!-- /.modal-content --> 
            </div>
                <!-- /.modal-dialog --> 
              </div>



      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="<?php echo base_url(); ?>public/admin/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>public/admin/js/bootstrap.js"></script>
    
    <!-- Page Specific Plugins -->
     <script type="text/javascript">
        $(document).ready(function(){
        
         $(function () {
                    $("[rel='tooltip']").tooltip();
                });
       });

     

       $("body").on("click",".btndel",function(){
        act = $(this).attr("actname");
        $("#suredel").attr("actname",act);
      });

      $("body").on("click","#suredel",function(){
        act = $(this).attr("actname");
         url = "<?php echo base_url(); ?>admin/content/del_fitness/"+act;
        //alert(url);
        if(url!=""){
            window.location = url;
        }
      });

       $("body").on("click","#canceldel",function(){
        $('#delete').modal('hide')
      });

     </script>
  </body>
</html>

