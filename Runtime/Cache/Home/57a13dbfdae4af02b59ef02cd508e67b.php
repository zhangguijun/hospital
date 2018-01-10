<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>医院挂号系统</title>
    <link rel="stylesheet" href="/Public/Home/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Home/css/base.css">
    <link rel="stylesheet" href="/Public/Home/css/index.css">
    <link rel="stylesheet" href="/Public/Home/css/hosp.css">

    <script src="/Public/Home/js/jquery-2.2.4.min.js"></script>
    <script src="/Public/Home/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="header container clearfix">
        <div class="hearder_top">
                <div class="container ">
                        <div class="hleft" style="float:left;">
                             <span>您好，欢迎您来到青岛预约挂号系统</span>
                        </div>
                        <div class="sn-quick-menu fr">
                                <a class="sn-sys logo-behind" href="http://hospital.com/index.php/Admin/System/adminindex"></a>
                                <a class="sn-hos logo-behind" href="http://hospital.com/index.php/Admin/Hospital/index"></a>
                                <a class="sn-doc logo-behind" href="http://hospital.com/index.php/Admin/Doctor/yishengindex"></a>
                                <a class="sn-pat logo-behind" href="http://hospital.com/index.php/Admin/Patient/personadmin"></a>
                                <a class="sn-logout logo-behind" href="#">退出</a>
                        </div>
                    </div>
        </div>
    	<div class="heder_logo col-md-4 col-sm-12 fl "><a href="http://hospital.com/index.php/Home/home/index"><img src="/Public/Home/img/ghlogo.jpg" alt="青岛挂号"></a></div>
    	<!-- <div class="header_search col-md-8 col-sm-12 fr">
    		<input class="text_search" type="text" placeholder="请输入关键字" />
            <input class="btn btn-success" type="button" value="搜索" />
    	</div> -->
    </div>
    <div class="container ">

        <div class="web_body_slide_part clearfix">
            <div class="web_body_slide col-md-12 col-sm-12 col-xs-12">
                 <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>   
                <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="/Public/Home/img/1.jpg" alt="First slide">
                        </div>
                        <div class="item">
                            <img src="/Public/Home/img/2.png" alt="Second slide">
                        </div>
                        <div class="item">
                            <img src="/Public/Home/img/3.png" alt="Third slide">
                        </div>
                        <div class="item">
                            <img src="/Public/Home/img/4.jpg" alt="Third slide">
                        </div>
                       
                        
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="carousel-control left" href="#myCarousel" 
                        data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" 
                        data-slide="next">&rsaquo;</a>
                </div> 
            </div>
            
        </div>
        <div class="hospital_display" id="content-hospital">
            <?php if(is_array($list)): foreach($list as $key=>$ind): ?><div class="hdisplay_box clearfix">
                <div class="display_left col-md-3 col-xs-12">
                    <a href="<?php echo U('Home/home/hospital','hospitalname='.$ind['hospitalname']);?>"><img  class="img-responsive" src="/Public/Admin/img/<?php echo ($ind["image"]); ?>" alt=""></a>
                </div>
                <div class="display_right">
                        <h3 class="hostitle col-md-9 col-xs-12"><span><?php echo ($ind["hospitalname"]); ?></span></h3>
                        <p class="hostitle   col-md-4 col-xs-6"><span style="color: rgb(232, 116, 4);"><?php echo ($ind["hospitallevelcode"]); ?></span></p>
                        <p class="hostitle col-md-5 col-xs-6"><span style="color: rgb(61, 175, 167);"><?php echo ($ind["governcode"]); ?></span></p><br/>
                    <p ><span class="hosdes ">
                        <?php echo ($ind["info"]); ?>
                    </span></p>
                </div>
              </div><?php endforeach; endif; ?>
            <div class="page" style="text-align:center">
					<?php echo ($page); ?>
            </div>
        </div>
      
        
        <div class="specialist_hospital">
            
        </div>

    </div>
    <div class="footer container">
        <p class="footer_p"> 
           医院预约诊疗服务平台 <a href="http://hospital.com/index.php/Home/home/index">青岛网上预约挂号</a> 2017年12月
           <br>
            NIIT版权所有
        </p>
    </div> 

    <script>
            //标头需要ajax请求的地址
            //var headerRequestUrl="http://hospital.com/index.php/Home/Header/header";
            //点击退出请求的地址
           // var logoutRequestUrl="http://hospital.com/index.php/Home/Header/logout";
    </script>
    <script src="/Public/Home/js/js_header.js"></script>
    <script src="/Public/Home/js/jquery-1.8.3.min.js"></script>
    <script>  
    
    $(function(){  
        $(".page a").live('click',function(){ //直接用click点击事件因为js没刷新还是会出现跳转，on（“click”,function）事件测试有的页码也会出现跳转  
            var pageObj = this;  
            var url = pageObj.href;  
            $.ajax({  
                type:'get',  
                url:url,  
                success:function(res){ 
                    //console.log(res) ;
                     $("#content-hospital").html(res);  
                }  
            })  
  
            return false;//取消a链接的跳转  
        })  
  
    })  
</script>
</body>
</html>