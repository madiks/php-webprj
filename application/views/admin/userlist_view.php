<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>会员列表 - 管理后台</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>public/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <style  type="text/css">
    .row{
          margin-top:40px;
          padding: 0 10px;
      }
      .clickable{
          cursor: pointer;   
      }

      .panel-heading div {
        margin-top: -18px;
        font-size: 15px;
      }
      .panel-heading div span{
        margin-left:5px;
      }
      .panel-body{
        display: none;
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
            <h1>会员管理 <small>会员列表</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>admin/backstage"><i class="fa fa-dashboard"></i> 管理后台</a></li>
              <li class="active"><i class="fa fa-users"></i> 会员管理</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top:15px">
            <div class="col-md-11">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">会员列表(共<?php echo $tatolCount;?>位会员)</h3>
                  <div class="pull-right">
                    <span class="clickable filter" data-toggle="tooltip" title="检索会员" data-container="body">
                     <i class="fa fa-filter"></i>检索
                    </span>
                  </div>
                </div>
                <div class="panel-body">
                  <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="只能快速查找当页会员" />
                </div>
                <table class="table table-hover" id="dev-table">
                  <thead>
                    <tr>
                     <th>会员卡号</th>
                      <th>会员登录名</th>
                      <th>会员姓名</th>
                      <th>联系电话</th>
                      <th>所属分店</th>
                      <th>操作</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($users as $ur):?>
                    <tr id="uid<?php echo $ur->id;?>">
                      <td><?php echo $ur->cardnum;?></td>
                      <td><?php echo $ur->uname;?></td>
                      <td><?php echo $ur->name;?></td>
                      <td><?php echo $ur->tel;?></td>
                      <td><?php echo $ur->sname;?></td>
                      <td>
                        <button class="btn btn-primary btn-xs btnedit" actname="<?php echo $ur->id;?>" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip" title="编辑"><i class="fa fa-pencil-square-o"></i></button>&nbsp
                        <button class="btn btn-danger btn-xs btndel" actname="<?php echo $ur->id;?>" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip" title="删除"><i class="fa fa-trash-o"></i></button>
                        <a class="btn btn-primary btn-xs btnedit" title="查看详细信息" href="<?php echo base_url(); ?>admin/member/get_info/<?php echo $ur->id;?>"><i class="fa fa-eye"></i></a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>

              <ul class="pager">
               <?php if($link['pageNo']>1){ ?>
                 <li class="previous"><a href="<?php echo base_url(); ?>admin/member/index/<?php echo $link['pageNo']-1;?>">&larr; 上一页</a></li>
               <?php } ?>
               <?php if($link['pageNo']<$link['totalPageNum']){ ?>
                 <li class="next"><a href="<?php echo base_url(); ?>admin/member/index/<?php echo $link['pageNo']+1;?>">下一页 &rarr;</a></li>
               <?php } ?>
               </ul>
            </div>
        </div>



      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title custom_align" id="Heading">编辑用户信息</h4>
          </div>
          <div class="modal-body">
          <div class="form-group">
           <input class="form-control " id="uname" type="text" >
           </div>
           <div class="form-group">
           
           <input class="form-control " id="cardnum" type="text" >
           </div>
           
           <div class="form-group">
           
           <input class="form-control "  id="tel" type="text" >
           </div>

           <div class="form-group">
           <select id="sname" name="sname" class="form-control">
             <?php foreach($shoplist as $sl):?>
             <option value="<?php echo $sl->shopname;?>"><?php echo $sl->shopname;?></option>
             <?php endforeach ?>
           </select>
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
        
        
        
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title custom_align" id="Heading">删除</h4>
          </div>
              <div class="modal-body">
           
           <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> 确定彻底删除该用户信息（不可恢复）?</div>
           
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

    <!-- JavaScript -->
   
    <script src="<?php echo base_url(); ?>public/admin/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>public/admin/js/bootstrap.js"></script>
    
    <!-- Page Specific Plugins -->
     <script type="text/javascript">
         (function(){
             'use strict';
          var $ = jQuery;
          $.fn.extend({
            filterTable: function(){
              return this.each(function(){
                $(this).on('keyup', function(e){
                  $('.filterTable_no_results').remove();
                  var $this = $(this), search = $this.val().toLowerCase(), target = $this.attr('data-filters'), $target = $(target), $rows = $target.find('tbody tr');
                  if(search == '') {
                    $rows.show(); 
                  } else {
                    $rows.each(function(){
                      var $this = $(this);
                      $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                    })
                    if($target.find('tbody tr:visible').size() === 0) {
                      var col_count = $target.find('tr').first().find('td').size();
                      var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">无匹配结果！</td></tr>')
                      $target.find('tbody').append(no_results);
                    }
                  }
                });
              });
            }
          });
          $('[data-action="filter"]').filterTable();
         })(jQuery);

         $(function(){
             // attach table filter plugin to inputs
          $('[data-action="filter"]').filterTable();
          
          $("body").on('click', '.panel-heading span.filter', function(e){
            var $this = $(this), 
                $panel = $this.parents('.panel');
            
            $panel.find('.panel-body').slideToggle();
            if($this.css('display') != 'none') {
              $panel.find('.panel-body input').focus();
            }
          });
          $('[data-toggle="tooltip"]').tooltip();
         });


         $("body").on("click",".btnedit",function(){
           act = $(this).attr("actname");
           $("#cardnum").val($("#uid"+act+" td:first").html());
           $("#tel").val($("#uid"+act+" td").eq(3).html());
           $("#uname").val($("#uid"+act+" td").eq(2).html());
            $("#sname").val($("#uid"+act+" td").eq(4).html());
            $("#suremodify").attr("actname",act);
         });

          $("body").on("click",".btndel",function(){
           act = $(this).attr("actname");
           $("#suredel").attr("actname",act);
         });

         $("body").on("click","#suredel",function(){
           act = $(this).attr("actname");
            url = "<?php echo base_url(); ?>admin/member/del_user/"+act;
           //alert(url);
           if(url!=""){
               window.location = url;
           }
         });

          $("body").on("click","#canceldel",function(){
           $('#delete').modal('hide')
         });

          $("body").on("click","#suremodify",function(){
           act = $(this).attr("actname");
           Cardnum = $("#cardnum").val();
           Tel = $("#tel").val();
           Sname = $("#sname").val();
           uname = $("#uname").val();
           if(Cardnum != ""){
                $.ajax({
                       type: "post",
                       data:{    
                               uid : act,
                               name : uname,
                               tel : Tel,
                               sname : Sname,
                               cardnum : Cardnum
                            },
                       dataType:'json',    
                       url: "<?php echo base_url(); ?>admin/member/modify_user",
                       success: function(data){
                         if(data.status =="ok"){
                          $("#uid"+act+" td:first").html(Cardnum);
                          $("#uid"+act+" td").eq(3).html(Tel)
                          $("#uid"+act+" td").eq(2).html(uname);
                          $("#uid"+act+" td").eq(4).html(Sname);
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

