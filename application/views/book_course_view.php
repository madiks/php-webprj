<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

    <title>课程预约|长春环宇健身中心</title>

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
      
     <div class="row" style="margin-top:100px;">
         <div class="col-md-12">
             <h3>可预约课程列表 <a href="<?php echo base_url(); ?>checkshe" class="btn btn-primary pull-right">查看我的课表</a></h3>
             <div class="table-responsive">
             
                     
                   <table id="mytable" class="table table-bordred table-striped">
                        
                        <thead>
                        <th>课程名</th>
                         <th>教练信息</th>
                         <th>地点</th>
                         <th>上课时间</th>
                         
                         <th>已预约人数</th>
                         <th>最大预约人数</th>
                         
                         <th>操作</th>
                        </thead>
         <tbody>
         <?php if(!empty($cshes)){ ?>
         <?php foreach($cshes as $sl): ?>
         <tr id="cshe<?php echo $sl->id;?>">
         <td><?php echo $sl->cname;?></td>
         <td><?php echo $sl->coach;?></td>
         <td><?php echo $sl->shopname;?></td>
         <td><?php echo $sl->time;?></td>
         
         <td><?php echo $sl->hasjoin;?></td>
         <td><?php echo $sl->limit;?></td>
        
         <td><button class="btn btn-danger btn-xs btndel" title="预约" actname="<?php echo $sl->id;?>" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">预约</button></p></td>
         </tr>
         <?php endforeach ?>
         <?php }else { ?>
         <div class="alert alert-warning">
              现在没有可选课程！
          </div> 
                 
         <?php } ?> 
        
         
        
         
         </tbody>
             
     </table>

     <div class="clearfix"></div>
       <ul class="pager">
        <?php if($link['pageNo']>1){ ?>
          <li class="previous"><a href="<?php echo base_url(); ?>admin/course/index/<?php echo $link['pageNo']-1;?>">&larr; 上一页</a></li>
        <?php } ?>
        <?php if($link['pageNo']<$link['totalPageNum']){ ?>
          <li class="next"><a href="<?php echo base_url(); ?>admin/course/index/<?php echo $link['pageNo']+1;?>">下一页 &rarr;</a></li>
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
               <h4 class="modal-title custom_align" id="Heading">课程预约</h4>
             </div>
                 <div class="modal-body">
              
              <div class="alert alert-info"><span class="glyphicon glyphicon-warning-sign"></span> 确定预约此项课程?</div>
              
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
        if(act != ""){
           $.ajax({
                  type: "post",
                  data:{    
                          cid : act
                       },
                  dataType:'json',    
                  url: "<?php echo base_url(); ?>bookingcourse/book_cshe",
                  success: function(data){
                    if(data.status =="1"){
                      alert("预约课程成功！");
                      $('#delete').modal('hide');
                    }else if(data.status =="01"){
                      alert("预约人数已满！");
                      $('#delete').modal('hide');
                    }else if(data.status =="02"){
                      alert("您已经预约过该课程！");
                      $('#delete').modal('hide');
                    }
              }
          }); 
        } 
      });

       $("body").on("click","#canceldel",function(){
        $('#delete').modal('hide')
      });
    </script>

</body></html>