<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>创建会员 - 管理后台</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>public/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <style  type="text/css">
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
            <li class="dropdown">
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
            <h1>会员管理 <small>创建会员</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>admin/backstage"><i class="fa fa-dashboard"></i> 管理后台</a></li>
              <li class="active"><i class="fa fa-users"></i> 会员管理</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row" >
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
           <form role="form" action="<?php echo base_url(); ?>admin/member/create_account" method="post">
             <h2>创建会员</h2>
             <hr class="colorgraph">
             <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <input type="text" name="uname" id="uname" class="form-control input-lg" placeholder="用户名" tabindex="1">
                 </div>
               </div>
             </div>
             <div class="form-group">
              <select  name = "sname" class="form-control input-lg">
                <?php foreach($shoplist as $sl):?>
               <option value="<?php echo $sl->shopname;?>"><?php echo $sl->shopname;?></option>
              <?php endforeach ?>
              </select>
             </div>
             <div class="form-group">
               <input type="text" name="tel" id="tel" class="form-control input-lg" placeholder="手机号码" tabindex="4">
             </div>
             <div class="form-group">
               <input type="text" name="name" id="name" class="form-control input-lg" placeholder="真实姓名" tabindex="4">
             </div>
             <div class="form-group">
               <input type="text" name="cardnum" id="cardnum" class="form-control input-lg" placeholder="会员卡号" tabindex="4">
             </div>
             <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-6">
                 <div class="form-group">
                   <input type="password" name="password" id="password" class="form-control input-lg" placeholder="密码" tabindex="5">
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
               <div class="col-xs-12 col-md-6"><input type="submit" value="创建用户"  onclick="return check()" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
               
             </div>
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
       function phone(){
         var phone = $("#tel").val();
         var reg01 = new RegExp(/^0?(13[0-9]|15[012356789]|18[0-9]|14[57])[0-9]{8}$/);
         if(phone.length==""){
           alert("手机号码不能为空！");
           return false;
         }else if(!reg01.test(phone)){
           alert("请输入正确的手机号码!");
           return false;
         }
         return true;
       }

       function username(){
         var uname = $("#uname").val();
         var reg2  = new RegExp(/^\d+$/);
         
         var uunamelength = uname.replace(/[^\x0-\xf]/g,"##").length;
         if(uunamelength<5 || uunamelength>18){
           alert("用户名必须5-18个字符，可使用文字，字母、数字、下划线 ");
           return false;
         }else{
           if (reg2.test(uname) || uname.indexOf(",")>=0 || uname.indexOf("，")>=0 ) {
             alert("用户名不能为纯数字/不能包括逗号");
             return false;
           } else{
             $.ajax({
             url:"<?php echo base_url(); ?>register/check_uname",
             type:"post",dataType:"json",
             timeout:"10000",
             data:{
               "chkvalue":uname,
             },success:function(data){
               if(data.status!="ok"){
                 alert("用户名已存在！");
                 return false;
               }else{
                   return true;    
                 }
               }
             });
           };
           
         }
         return true;
       }

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
           if(!username()){
             return false;
           }        
           if (!phone())
           {
             return false;
           }
           if(!cpassword()){
             return false;
           }
           
           return true;
       }

      
     </script>
  </body>
</html>

