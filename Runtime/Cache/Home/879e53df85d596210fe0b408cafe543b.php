<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>医院挂号系统</title>
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
    	<div class="heder_logo col-md-4 col-sm-12 fl "><a href="index.html"><img src="/Public/Home/img/ghlogo.jpg" alt="青岛挂号"></a></div>
    	
    </div>
    <div class="container ">
            <div class="zjyy">
                <div class="zjyy_title">
                    <h3><span>专家预约</span></h3>
                </div>
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><form action="<?php echo U('Home/home/yuyue' ,array('expertname'=>$vo['expertname'] ,'keshicode'=>$vo['keshicode'] ,'hospitalcode'=>$vo['hospitalcode'] ,'yuyuetime'=>$_GET['yuyuetime'] ));?>" method="post">
                    
                <div class="zjyy_content_header">
                    <p><span>专家姓名：<?php echo ($vo["expertname"]); ?></span></p>
                    <p><span>专家级别：<?php echo ($vo["expertlevelcode"]); ?></span></p>
                    <p><span>所属医院：<?php echo ($vo["hospitalcode"]); ?></span></p>
                   <img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" width="100px" height="100px" alt="">
                </div>
            
                <div class="border mt20 "></div>
                <div class="yytime">
                    <div class="jzsj"><span>就诊时间</span></div>
                   

                        预约时间:<?php echo ($_GET['yuyuetime']); ?>
                        时间段： 
                        <?php if($_GET['we'] == 1): ?><select name="timerange">
                                    <option value="9:00-10:00">9:00-10:00</option>
                                    <option value="10:00-11:00">10:00-11:00</option>
                        </select>
                        <?php else: ?>
                        <select name="timerange">
                                <option value="14:00-15:00">14:00-15:00</option>
                                <option value="15:00-16:00">15:00-16:00</option>
                    </select><?php endif; ?>
                </div>
                <?php if(is_array($list1)): foreach($list1 as $key=>$vv): ?><div class="border mt20"></div>
                <div class="jiuzhen mt20">
                        <p><span>姓名：<?php echo ($vv["patientname"]); ?></span></p>
                        <p><span>身份证号: <?php echo ($vv["id"]); ?></span></p>
                        <p><span>手机号：<?php echo ($vv["tel"]); ?></span></p>
                </div><?php endforeach; endif; ?>
                <input type="submit" class="btn btn-success yuyue" value="立即预约">
            
            </form><?php endforeach; endif; ?>
            </div>

    </div>
    <div class="footer container">
        <p class="footer_p"> 
           医院预约诊疗服务平台 <a href="index.html">青岛网上预约挂号</a> 2017年12月
           <br>
            NIIT版权所有
        </p>
    </div> 
    <script>
            //标头需要ajax请求的地址
            //var headerRequestUrl="http://hospital.com/index.php/Home/Header/header";
            //点击退出请求的地址
            //var logoutRequestUrl="http://hospital.com/index.php/Home/Header/logout";
    </script>
    <script src="/Public/Home/js/js_header.js"></script>
</body>
</html>