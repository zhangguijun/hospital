<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="/Public/Home/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Home/css/base.css">
   <style>
 #login{
    width: 400px;
    height: 300px;
    background: #FFF;
    margin:20px auto;
    position: relative;
    border: 1px green solid;
}
#login h1{
    text-align:center;
    position:absolute;
    left:120px;
    top:-40px;
    font-size:21px;
}
#login form p{
    text-align: center;
}
#user{
    background:url(/Public/Home/img/user.png) rgba(0,0,0,.1) no-repeat;
    width: 200px;
    height: 30px;
    border:solid #ccc 1px;
    border-radius: 3px;
    padding-left: 32px;
    margin-top: 50px;
    margin-bottom: 30px;
}
#pwd{
    background: url(/Public/Home/img/pwd.png) rgba(0,0,0,.1) no-repeat;
    width: 200px;
    height: 30px;
    border:solid #ccc 1px;
    border-radius: 3px;
    padding-left: 32px;
    margin-bottom: 30px;
}
#submit{
    width: 200px;
    height: 30px;
    background: rgba(0,0,0,.1);
    border:solid #ccc 1px;
    border-radius: 3px;
}
#zhuce{
    width: 200px;
}
#submit:hover{
    cursor: pointer;
    background:#D8D8D8;
}
   </style>

    
    
</head>
<body>
        <div class="header container clearfix">
                <div class="hearder_top">
                        <div class="container">
                                <div class="hleft" style="float:left;">
                                     <span>您好，欢迎您来到青岛预约挂号系统</span>
                                </div>
                                <!-- <div class="sn-quick-menu fr">
                                        <a class="sn-sys logo-behind" href="http://hospital.com/index.php/Admin/System/adminindex"></a>
                                        <a class="sn-hos logo-behind" href="http://hospital.com/index.php/Admin/Hospital/index"></a>
                                        <a class="sn-doc logo-behind" href="http://hospital.com/index.php/Admin/Doctor/yishengindex"></a>
                                        <a class="sn-pat logo-behind" href="http://hospital.com/index.php/Admin/Patient/personadmin"></a>
                                        <a class="sn-logout logo-behind" href="#">退出</a>
                                </div> -->
                            </div>
                </div>
                <div class="heder_logo col-md-4 col-sm-12 fl "><a href="index.html"><img src="/Public/Home/img/ghlogo.jpg" alt="青岛挂号"></a></div>
               
        </div>
        <div class="container h20">
            <div class="web_login_left fl col-md-6">
                <img src="/Public/Home/img/login.jpg" alt="">
            </div>
            <div id="login" class="col-md-6">
                    <h1>登录管理</h1>	
                        <form method="post">
                            <p><input type="text" name="user" id="user"  required placeholder="用户名字"></p>
                            <p><input type="password" name="passwd" id="pwd" placeholder="用户身份证号"  required></p>
                            <p><input type="button" id="submit"  class="btn btn-success" value="登录"></p>
                            
                        </form>
            </div>
        </div>

        <div class="footer container">
                <p class="footer_p"> 
                   医院预约诊疗服务平台 <a href="index.html">青岛网上预约挂号</a> 2017年12月
                   <br>
                    NIIT版权所有
                </p>
            </div> 
            <script src="/Public/Home/js/jquery-2.2.4.min.js"></script>
            <script src="/Public/Home/dist/js/bootstrap.min.js"></script>
            <!-- <script>
                var submitUrl ="http://hospital.com/index.php/Home/Login/doLogin";
            </script> -->
            
            <script type="text/javascript" src="/Public/Home/js/login.js">
            </script> 
</body>
</html>