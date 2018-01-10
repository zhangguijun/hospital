<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主治医生</title>
    <link rel="stylesheet" href="/Public/Home/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Home/css/base.css">
    <link rel="stylesheet" href="/Public/Home/css/hosp.css">

    <script src="/Public/Home/js/jquery-1.11.1.min.js"></script>
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
    
    <div class="container">
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="ysjs clearfix">
            <div class="ysjs_title mb20">
                <span class="pr20 hui3-30-30"><?php echo ($vo["expertname"]); ?></span>
                <span class="pr20 hui3-30-30" style="color: rgb(95, 156, 236)"><?php echo ($vo["sex"]); ?></span>        
                <span class="mb20">职称：<?php echo ($vo["expertlevelcode"]); ?></span>
            </div>
            <div class="ysjs_yi">
                <p class="hui3-30-30 bb-01"><span>所属医院:<?php echo ($vo["hospitalcode"]); ?></span></p>
            </div>
            <div class="ysjs_content clearfix">
                <div class="doc-pic fl"><img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" title="" width="140" height="145">
                </div>
                <div class="doc-txt fr">
                    <div id="introduce">
                           <p>
                                擅长领域：<?php echo ($vo["goodat"]); ?>
                           </p>
                    </div>
                </div>   
            </div>
        </div><?php endforeach; endif; ?>
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
</body>
</html>