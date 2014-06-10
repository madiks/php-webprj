<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

    <title>BMI测试|长春环宇健身中心</title>

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
    <link href="<?php echo base_url(); ?>css/formtoright.css" rel="stylesheet">
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
                <li ><a href="<?php echo base_url(); ?>">健身首页</a></li>
                <li><a href="<?php echo base_url(); ?>about/">关于环宇</a></li>
                <li><a href="<?php echo base_url(); ?>courses/">健身课程</a></li>
                <li><a href="<?php echo base_url(); ?>activity/">优惠活动</a></li>
                <li class="dropdown active">
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px;">
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
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">
      <h2>BMI测试</h2>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked">
         
            <li ><a href="<?php echo base_url(); ?>services">会员服务</a></li>
            <li ><a href="<?php echo base_url(); ?>fitness">健身常识</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>bmitest">BMI测试</a></li>
          </ul>
        </div>
        <div class="col-md-9 menu_rght_t">
        <h7 class="featurette-heading" style="margin-top:20px">BMI测试  <span class="text-muted">BMI Test</span></h7>
         <div class="row" style="margin-top:40px;background-color: #ffffff;">
           
              
                  <div class="col-md-6"><img title="BMI图片" alt="BMI图片" src="<?php echo base_url(); ?>/public/upload/9088d6ee6f98cddb23bb012d592600fc.jpg" width="380" height="313" border="0"></div>
                  <div class = "col-md-6" style="margin-top:20px;margin-bottom:40px;">
                    <p>你的BMI值是正常的吗？</p>
                    <p>想知道自己的身材偏瘦还是偏胖？一切让BMI值告诉你！BMI即身高体重比测试。输入身高和体重，立即检测出你的BMI值，并判断你的身材是否标准。</p>
                    <div class="row">
                      <form role="form"  class="go-right" >
                      <div class="form-group">
                          <input id="pheight" name="phight" type="text" class="form-control" required>
                          <label for="phight">身高(CM)</label>
                      </div>
                      <div class="form-group">
                          <input id="pweight" name="pweight" type="text" class="form-control" required>
                          <label for="pweight">体重(Kg)</label>
                      </div>
                      <div class="form-group">
                      <select id = "sex" class="form-control">
                        <option value="1">男</option>
                        <option value="2">女</option>
                      </select>
                      </div>

                       <div class="form-group">
                         <a href="javascript:goTest();" class="btn btn-default col-md-3 col-md-offset-9">立即测试</a>
                       </div>
                      </form>
                      <div class="res" style='margin-top: 20px;margin-right:20px;'>
                        
                      </div>  
                    </div>
                    
                  </div>
                          
              
              
         </div>
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
    function goTest(){
      pheight = $('#pheight').val();
      pweight = $('#pweight').val();
      psex = $('#sex').val();
        if(pheight ==""||pweight==""){
          alert("请输入完整的数据！");
        }else{
           bmi = pweight/((pheight/100)*(pheight/100));
           //alert(bmi); 
           if(psex==1){
            if(bmi<=20){
              res = "<span class='f_red'><h2>underweight&nbsp;过轻<br><span style='font-size:12px;font-weight:normal;'>一般为营养不足，消化系统问题。通过健身运动中的力量练习可以帮助改善营养吸收问题，同时教练还会给予营养饮食计划安排，只要按照教练要求运动和饮食，可以帮助这类人群改善健康、适当增重，并保证脂肪和肌肉的均衡发展。</span><br><span style='font-size:14px;color:#F00'>建议通过运动和营养膳食帮助脂肪和肌肉均衡发展。</span></h2></span>";
            }else if(bmi>20&&bmi<=25){
              res = "<span class='f_red'><h2>Normal&nbsp;正常<br><span style='font-size:12px;font-weight:normal;'>这是比较标准的BMI水平，一般人在这个状态时表现为身体脂肪含量和肌肉含量适中，体型不会很夸张。这样的人群可以通过教练的指导进一步改善身体的线条和身体健康的质量。</span><br><span style='font-size:14px;color:#F00'>建议保持运动改善身体线条和身体健康的质量。</span></h2></span>";
            }else if(bmi>25&&bmi<=30){
              res = "<span class='f_red'><h2>Overweight&nbsp;超重<br><span style='font-size:12px;font-weight:normal;'>这个水平的BMI一般表现为运动不足，营养过剩，肌肉过多等现象，是属于减肥减重的主要人群，相比过度肥胖的人群也比较容易见到健身效果。</span><br><span style='font-size:14px;color:#F00'>建议通过专业教练指导制定有效的健身计划。</span></h2></span>";
            }else if(bmi>30&&bmi<=35){
              res = "<span class='f_red'><h2>Obese &nbsp;严重超重<br><span style='font-size:12px;font-weight:normal;'>实际上是已经达到肥胖水平，一般检测时确定为一度肥胖，身体笨拙，健康水平直线下降，通过健身运动来减肥和减重那是必须的！</span><br><span style='font-size:14px;color:#F00'>建议通过定期的健身训练实现减脂减重。</span></h2></span>";
            }else{
              res = "<span class='f_red'><h2><div style='float:left'>非常肥胖<br><span style='font-size:12px;font-weight:normal;'>痴肥就是真正意义的肥胖病，多见异常夸张的身体线条，行动笨拙且多发肥胖相关疾病——高血压、高血脂、关节疼痛等，一般需要有医生的诊断以确定其疾病程度，健身教练参考医生建议制定针对性的运动处方，以便更安全有效的开展运动。</span><br><span style='font-size:14px;color:#F00'>建议在健身教练指导下制定有针对性的运动处方。</span></div></h2></span>";
            }
           }else{
            if(bmi<=19){
              res = "<span class='f_red'><h2>underweight&nbsp;过轻<br><span style='font-size:12px;font-weight:normal;'>一般为营养不足，消化系统问题。通过健身运动中的力量练习可以帮助改善营养吸收问题，同时教练还会给予营养饮食计划安排，只要按照教练要求运动和饮食，可以帮助这类人群改善健康、适当增重，并保证脂肪和肌肉的均衡发展。</span><br><span style='font-size:14px;color:#F00'>建议通过运动和营养膳食帮助脂肪和肌肉均衡发展。</span></h2></span>";
            }else if(bmi>19&&bmi<=24){
              res = "<span class='f_red'><h2>Normal&nbsp;正常<br><span style='font-size:12px;font-weight:normal;'>这是比较标准的BMI水平，一般人在这个状态时表现为身体脂肪含量和肌肉含量适中，体型不会很夸张。这样的人群可以通过教练的指导进一步改善身体的线条和身体健康的质量。</span><br><span style='font-size:14px;color:#F00'>建议保持运动改善身体线条和身体健康的质量。</span></h2></span>";
            }else if(bmi>24&&bmi<=29){
              res = "<span class='f_red'><h2>Overweight&nbsp;超重<br><span style='font-size:12px;font-weight:normal;'>这个水平的BMI一般表现为运动不足，营养过剩，肌肉过多等现象，是属于减肥减重的主要人群，相比过度肥胖的人群也比较容易见到健身效果。</span><br><span style='font-size:14px;color:#F00'>建议通过专业教练指导制定有效的健身计划。</span></h2></span>";
            }else if(bmi>29&&bmi<=34){
              res = "<span class='f_red'><h2>Obese &nbsp;严重超重<br><span style='font-size:12px;font-weight:normal;'>实际上是已经达到肥胖水平，一般检测时确定为一度肥胖，身体笨拙，健康水平直线下降，通过健身运动来减肥和减重那是必须的！</span><br><span style='font-size:14px;color:#F00'>建议通过定期的健身训练实现减脂减重。</span></h2></span>";
            }else{
              res = "<span class='f_red'><h2><div style='float:left'>非常肥胖<br><span style='font-size:12px;font-weight:normal;'>痴肥就是真正意义的肥胖病，多见异常夸张的身体线条，行动笨拙且多发肥胖相关疾病——高血压、高血脂、关节疼痛等，一般需要有医生的诊断以确定其疾病程度，健身教练参考医生建议制定针对性的运动处方，以便更安全有效的开展运动。</span><br><span style='font-size:14px;color:#F00'>建议在健身教练指导下制定有针对性的运动处方。</span></div></h2></span>";
            }
           }
        }
        $('.res').html(res);   
      }  
    </script>

</body></html>