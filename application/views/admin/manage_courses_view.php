<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>健身课程管理 - 管理后台</title>

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
                <li><a href="<?php echo base_url(); ?>admin/content/courses">健身课程安排</a></li>
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
            <h1>内容管理 <small>健身课程管理</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>admin/backstage"><i class="fa fa-dashboard"></i> 管理后台</a></li>
              <li class="active"><i class="fa fa-file-text"></i> 内容管理</li>
            </ol>
            
          </div>
        </div><!-- /.row -->
        
        <h4>健身课程分类信息 <button class="btn btn-primary pull-right"   data-title="add" data-toggle="modal" data-target="#addtype" data-placement="top" rel="tooltip">新建分类</button>
</h4>
        
        <div class="row" style="margin-top:30px;">
          <?php foreach($infos as $io): ?>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title"><panelt id="ctype<?php echo $io->id;?>"><?php echo $io->type;?></panelt>
                        <div class="pull-right">
                       <button class="btn btn-primary btn-xs btnedit"  title="编辑" actname="<?php echo $io->id;?>" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><i class="fa fa-pencil-square-o"></i></button>
                        <button class="btn btn-danger btn-xs btndel" actname="<?php echo $io->id;?>" data-title="Delete" data-toggle="modal" data-target="#deletetype" data-placement="top" rel="tooltip" data-original-title="" title="删除"><i class="fa fa-trash-o"></i></button>
                        </div>
                        </h3>
                      </div>
                      <div class="panel-body">
                        <ul class="list-group">
                        <?php foreach($io->courselist as $ce): ?>
                          <li class="list-group-item">
                            <?php echo $ce->name;?>
                            <div class="pull-right">
                            <a class="btn btn-primary btn-xs btnedit" href="<?php echo base_url(); ?>admin/content/edit_coursei/<?php echo $ce->id;?>" title="编辑"><i class="fa fa-pencil-square-o"></i></a>
                            <button class="btn btn-danger btn-xs btndel" actname="<?php echo $ce->id;?>" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip" data-original-title="" title="删除"><i class="fa fa-trash-o"></i></button>
                            </div>
                          </li>
                        <?php endforeach ?>
                        
                        </ul>
                       
                      </div>
                      <div class="panel-footer"><a href="<?php echo base_url(); ?>admin/content/add_course/<?php echo $io->id;?>" class="btn btn-primary">添加二级项目</a></div>
                    </div>
                  
                </div>
          <?php endforeach ?>       
      </div>
       
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title custom_align" id="Heading">编辑分类信息</h4>
          </div>
              <div class="modal-body">
            <div class="form-group">
            <input class="form-control " id="ctypename" type="text" >
            </div>
          </div>
              <div class="modal-footer ">
            <button type="button" id="suremodify" actname="" class="btn btn-warning btn-lg" style="width: 100%;"><i class="fa fa-check"></i></span>修改信息</button>
          </div>
            </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
        </div>

        <div class="modal fade" id="addtype" tabindex="-1" role="dialog" aria-labelledby="addtype" aria-hidden="true">
              <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title custom_align" id="Heading">新建分类</h4>
              </div>
                  <div class="modal-body">
                <div class="form-group">
                <input class="form-control " id="add_typename" type="text" >
                </div>
              </div>
                  <div class="modal-footer ">
                <button type="button" id="add_cstype"  class="btn btn-warning btn-lg" style="width: 100%;"><i class="fa fa-check"></i></span>添加分类</button>
              </div>
                </div>
            <!-- /.modal-content --> 
          </div>
              <!-- /.modal-dialog --> 
            </div>
        
        
        
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title custom_align" id="Heading">删除</h4>
          </div>
              <div class="modal-body">
           
           <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> 确定删除项目信息?</div>
           
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

          <div class="modal fade" id="deletetype" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title custom_align" id="Heading">删除</h4>
            </div>
                <div class="modal-body">
             
             <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> 确定删除该分类所有信息（包括其中包含的项目）?</div>
             
            </div>
              <div class="modal-footer ">
              <button type="button" class="btn btn-warning" id="suredeltype" actname="" ><i class="fa fa-check"></i></span>确定</button>
              <button type="button" class="btn btn-warning" id="canceldeltype"><i class="fa fa-times"></i>取消</button>
            </div>
              </div>
          <!-- /.modal-content --> 
        </div>
            <!-- /.modal-dialog --> 
          </div>


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

        $("body").on("click",".btnedit",function(){
          act = $(this).attr("actname");
          $("#suremodify").attr("actname",act);
          cont = $("#ctype"+act).html();
          $("#ctypename").val(cont);
        });

         $("body").on("click",".btndel",function(){
          act = $(this).attr("actname");
          $("#suredel").attr("actname",act);
          $("#suredeltype").attr("actname",act);
        });

        $("body").on("click","#suredel",function(){
          act = $(this).attr("actname");
           url = "<?php echo base_url(); ?>admin/content/del_courseinfo/"+act;
          //alert(url);
          if(url!=""){
              window.location = url;
          }
        });

        $("body").on("click","#suredeltype",function(){
          act = $(this).attr("actname");
           url = "<?php echo base_url(); ?>admin/content/del_coursetype/"+act;
          //alert(url);
          if(url!=""){
              window.location = url;
          }
        });

        $("body").on("click","#add_cstype",function(){
          act = $("#add_typename").val();
          if(act != ""){
               $.ajax({
                      type: "post",
                      data:{    
                              typename : act
                           },
                      dataType:'json',    
                      url: "<?php echo base_url(); ?>admin/content/add_coursetype",
                      success: function(data){
                        url = "<?php echo base_url(); ?>admin/content/courses/";
                         window.location = url;
                
                    }
              }); 
            } 
        });

         $("body").on("click","#canceldel",function(){
          $('#delete').modal('hide')
        });

        $("body").on("click","#canceldeltype",function(){
          $('#deletetype').modal('hide')
        });

         $("body").on("click","#suremodify",function(){
          act = $(this).attr("actname");
          Typename = $("#ctypename").val();
          if(Typename != ""){
               $.ajax({
                      type: "post",
                      data:{    
                              tid : act,
                              typename : Typename
                           },
                      dataType:'json',    
                      url: "<?php echo base_url(); ?>admin/content/modify_ctype",
                      success: function(data){
                        if(data.status =="ok"){
                         $("#ctype"+act).html(Typename);
                         $('#edit').modal('hide');
                        }else if(data.status =="error"){
                          $('#edit').modal('hide');
                        }
                
                    }
              }); 
            } 
        }); 
     </script>
  </body>
</html>

