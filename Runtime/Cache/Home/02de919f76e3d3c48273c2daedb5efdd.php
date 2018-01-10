<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>医院详细信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                
            </div>
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="container " id="yyjs-content">
                <div class="yyjs">
                        <div class="yyjs-title clearfix">
                                <span class="hui3-30-30 pr20" title='$vo.hospitalname'><?php echo ($vo["hospitalname"]); ?></span>
                                <span class="dj pr20"><?php echo ($vo["hospitallevelcode"]); ?></span>
                                <span class="xz"><?php echo ($vo["governcode"]); ?></span>
                        </div>
                        <div class="yyjs_content clearfix">
                                <div class="hos-pic col-md-4 fl"><img class="img-responsive" src="/Public/Admin/img/<?php echo ($vo["image"]); ?>" ></div>
                                <div class="hos-text col-md-8 fl">
                                    <p><span>电话：<?php echo ($vo["tel"]); ?></span></p>
                                    <p><span>地址：<?php echo ($vo["address"]); ?></span></p>
                                    <p><span>简介：<?php echo ($vo["info"]); ?></span></p>
                                </div>
                        </div>
                </div>

                <div class="ksfb">
                        <h3><span>科室分布</span></h3>
                        <dl class="dl-horizontal">
                                <dt>内科</dt>
                                <dd>
                                    <ul class="list-inline">
                                         <li><a href="<?php echo U('Home/home/huxineike',array('hospitalname'=>$vo['hospitalname'],'keshiname'=>'呼吸内科'));?>" target="_blank">呼吸内科</a></li>
                                         <li><a href="xiaohuapaiban" target="_blank">消化内科</a></li>
                                         <li><a href="-/1793-xinneikepaiban" target="_blank">心血管内科</a></li>
                                         <li><a href="-/1794-xueyeneikepaiban" target="_blank">血液内科</a></li>
                                         <li><a href="-/1795-shenneikepaiban" target="_blank">肾病科</a></li>
                                        <li><a href="-/1796-neifenmikepaiban" target="_blank">内分泌科</a></li>
                                     </ul>
                                </dd>
                        </dl>
                        <dl class="dl-horizontal">
                                <dt>外科</dt>
                                <dd>
                                    <ul class="list-inline">
                                                                <li><a href="-/1799-puwaikepaiban" target="_blank">普外科</a></li>
                                                                <li><a href="-/1800-gandanpaiban" target="_blank">肝胆胰外科</a></li>
                                                                <li><a href="-/1801-xueguanwaikepaiban" target="_blank">血管外科</a></li>
                                                                <li><a href="-/1802-jiawaipaiban" target="_blank">甲状腺外科</a></li>
                                                                <li><a href="-/1803-guanjiepaiban" target="_blank">关节外科</a></li>
                                                                <li><a href="-/1804-jizhuwaikepaiban" target="_blank">脊柱外科</a></li>
                                                                </ul>
                                </dd>
                        </dl>
                        <dl class="dl-horizontal">
                                <dt>其他</dt>
                                <dd>
                                    <ul class="list-inline">
                                                                <li><a href="-/3883-zhongyike" target="_blank">中医内科</a></li>
                                                                <li><a href="-/1821-gangchangpaiban" target="_blank">肛肠科</a></li>
                                                                <li><a href="-/1822-zhongliukepaiban" target="_blank">肿瘤科</a></li>
                                                                <li><a href="-/1823-pifukepaiban" target="_blank">皮肤科</a></li>
                                                                <li><a href="-/1824-yingyangmenzhen" target="_blank">营养科</a></li>
                                                                <li><a href="-/1826-jierukepaiban" target="_blank">介入医学科</a></li>
                                                                </ul>
                                </dd>
                            </dl>
                </div>   
            </div><?php endforeach; endif; ?>
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