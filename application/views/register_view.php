<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

    <title>用户注册|长春环宇健身中心</title>

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
              	<li><a href="<?php echo base_url(); ?>login">登录</a></li>
              	<li class="active"><a href="<?php echo base_url(); ?>register">注册</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    

    <div class="container">
      
     <div class="row" style="margin-top:100px">
         <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" action="<?php echo base_url(); ?>register/create_account" method="post">
          <h2>注册新用户</h2>
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <input type="text" name="uname" id="uname" class="form-control input-lg" placeholder="用户名" tabindex="1">
              </div>
            </div>
          </div>
          <div class="form-group">
           <select  name = "sid" class="form-control input-lg">
            <?php foreach($shoplist as $sl):?>
             <option value="<?php echo $sl->id;?>"><?php echo $sl->shopname;?></option>
             <?php endforeach ?>
           </select>
          </div>
          <div class="form-group">
            <input type="text" name="tel" id="tel" class="form-control input-lg" placeholder="手机号码" tabindex="4">
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
          <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-3">
              <span class="button-checkbox">
                <button type="button" id = "btn_agree" class="btn" data-color="info" tabindex="7">我同意</button>
                             <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
              </span>
            </div>
            <div class="col-xs-8 col-sm-9 col-md-9">
               如果点击 <strong class="label label-primary">注册</strong>, 就代表你已经同意我们的 <a href="#" data-toggle="modal" data-target="#t_and_c_m">用户使用条例</a> .
            </div>
          </div>
          
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-12 col-md-6"><input type="submit" value="注册"  onclick="return check()" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            <div class="col-xs-12 col-md-6"><a href="<?php echo base_url(); ?>login" class="btn btn-success btn-block btn-lg">登录</a></div>
          </div>
        </form>
      </div>
     </div>
     <!-- Modal -->
     <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
     </div><!-- /.modal -->

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

      function check_agree(){

        if(!$("#btn_agree").hasClass("active")){
          alert("未同意用户协议!");
          return false;
        }
        return ture;
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
          if(!check_agree()){
            return false;
          }
          return true;
      }

      $(function () {
          $('.button-checkbox').each(function () {

              // Settings
              var $widget = $(this),
                  $button = $widget.find('button'),
                  $checkbox = $widget.find('input:checkbox'),
                  color = $button.data('color'),
                  settings = {
                      on: {
                          icon: 'glyphicon glyphicon-check'
                      },
                      off: {
                          icon: 'glyphicon glyphicon-unchecked'
                      }
                  };

              // Event Handlers
              $button.on('click', function () {
                  $checkbox.prop('checked', !$checkbox.is(':checked'));
                  $checkbox.triggerHandler('change');
                  updateDisplay();
              });
              $checkbox.on('change', function () {
                  updateDisplay();
              });

              // Actions
              function updateDisplay() {
                  var isChecked = $checkbox.is(':checked');

                  // Set the button's state
                  $button.data('state', (isChecked) ? "on" : "off");

                  // Set the button's icon
                  $button.find('.state-icon')
                      .removeClass()
                      .addClass('state-icon ' + settings[$button.data('state')].icon);

                  // Update the button's color
                  if (isChecked) {
                      $button
                          .removeClass('btn-default')
                          .addClass('btn-' + color + ' active');
                  }
                  else {
                      $button
                          .removeClass('btn-' + color + ' active')
                          .addClass('btn-default');
                  }
              }

              // Initialization
              function init() {

                  updateDisplay();

                  // Inject the icon if applicable
                  if ($button.find('.state-icon').length == 0) {
                      $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
                  }
              }
              init();
          });
      });
    </script>

</body></html>