<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>呼吸内科</title>
    <link rel="stylesheet" href="/Public/Home/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Home/css/base.css">
    <link rel="stylesheet" href="/Public/Home/css/hosp.css">

    <script src="/Public/Home/js/jquery-1.11.1.min.js"></script>
    <script src="/Public/Home/dist/js/bootstrap.min.js"></script>

    


<style>
                @media screen and (max-width :35.5em){
                    table thead{
                        display: none;
                    }
                    table tr{
                        margin-bottom: 10px;
                        display: block;
                        border-bottom: 1px dotted #ddd;
                    }
                    .tdh{
                            height: 30px;
                    }
                    table td{
                        display: block;
                        text-align: center;
                        font-size: 13px;
                       /* height: 30px; */
                        border-bottom: 1px dotted #ccc;
                    }
                    table td:last-child{
                        border-bottom: 0;
                    }
                    table td::before{
                        content: attr(data-label);
                        font-size: bold;
                        float: left;
                    }
                }
            </style>
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
       <div class="container">
               <?php if(is_array($list1)): foreach($list1 as $key=>$vv): ?><div class="ksym ">
                    <h3><span><?php echo ($vv["keshiname"]); ?></span></h3>
                    <p><span>医院:<?php echo ($vv["hospitalname"]); ?></span></p>
                    <p><span>
                            简介：<?php echo ($vv["keshiinfo"]); ?>
                    </span></p>
                </div>
               
            <div class="keshicontent">
                    <table class="table">
                                <thead>
                                                <tr>
                                                    <th>专家</th>
                                                    <th></th>
                                                    <th ><?php echo ($date1); ?><br/><?php echo ($xingqi1); ?></th>
                                                    <th ><?php echo ($date2); ?><br/><?php echo ($xingqi2); ?></th>
                                                    <th ><?php echo ($date3); ?><br/><?php echo ($xingqi3); ?></th>
                                                    <th ><?php echo ($date4); ?><br/><?php echo ($xingqi4); ?></th>
                                                    <th ><?php echo ($date5); ?><br/><?php echo ($xingqi5); ?></th>
                                                    <th ><?php echo ($date6); ?><br/><?php echo ($xingqi6); ?></th>
                                                    <th ><?php echo ($date7); ?><br/><?php echo ($xingqi7); ?></th>
                                                </tr>
                                            </thead>
                            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tbody>
                                <?php switch($xingqi1): case "星期一": ?><tr>
                                    <td rowspan="2"><a href="<?php echo U('Home/home/hosperson',array('expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>"><img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" width="100px" height="100px" alt=""></a> 
                                   <p><?php echo ($vo["expertname"]); ?></p>
                                    <p><?php echo ($vo["expertlevelcode"]); ?></p>            
                                    </td>
                                    <td>上午</td>
                                    <?php if($vo["monmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                    <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                    <?php if($vo["tuemor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                <?php if($vo["wedmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                <?php if($vo["thumor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                <?php if($vo["frimor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                <?php if($vo["satmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                <?php if($vo["sunmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                </tr> 
                                 <tr>
                                    
                                    <td>下午</td>
                                    <?php if($vo["monaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                                <?php if($vo["tueaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                            <?php if($vo["wedaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                            <?php if($vo["thuaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                    <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                            <?php if($vo["friaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                    <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                            <?php if($vo["sataft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                    <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                            <?php if($vo["sunaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                    <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                            </tr>
                                </tr><?php break;?>
                        <?php case "星期二": ?><tr>
                                            <td rowspan="2"><a href="<?php echo U('Home/home/hosperson',array('expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>"><img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" width="100px" height="100px" alt=""></a> 
                                           <p><?php echo ($vo["expertname"]); ?></p>
                                            <p><?php echo ($vo["expertlevelcode"]); ?></p>            
                                            </td>
                                            <td>上午</td>
                                            
                                            <?php if($vo["tuemor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                        <?php if($vo["wedmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                        <?php if($vo["thumor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                        <?php if($vo["frimor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                        <?php if($vo["satmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                        <?php if($vo["sunmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                        <?php if($vo["monmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                        </tr> 
                                         <tr>
                                            
                                            <td>下午</td>
                                            
                                                        <?php if($vo["tueaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                    <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                                    <?php if($vo["wedaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                    <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                                    <?php if($vo["thuaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                                    <?php if($vo["friaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sataft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sunaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                                    <?php if($vo["monaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                                    </tr>
                                        </tr><?php break;?>
                        <?php case "星期三": ?><tr>
                                            <td rowspan="2"><a href="<?php echo U('Home/home/hosperson',array('expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>"><img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" width="100px" height="100px" alt=""></a> 
                                           <p><?php echo ($vo["expertname"]); ?></p>
                                            <p><?php echo ($vo["expertlevelcode"]); ?></p>            
                                            </td>
                                            <td>上午</td>
                                            
                                           
                                        <?php if($vo["wedmor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh"  data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                        <?php if($vo["thumor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td  class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                        <?php if($vo["frimor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td  class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                        <?php if($vo["satmor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date4); ?>" ><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>" ></td><?php endif; ?>
                                        <?php if($vo["sunmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                        <?php if($vo["monmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                        <?php if($vo["tuemor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                        </tr> 
                                         <tr>
                                            
                                            <td>下午</td>
                                            
                                                       
                                                    <?php if($vo["wedaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                    <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                                    <?php if($vo["thuaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                                    <?php if($vo["friaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sataft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sunaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                                    <?php if($vo["monaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                                   <?php if($vo["tueaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                                    </tr>
                                        </tr><?php break;?>
                        <?php case "星期四": ?><tr>
                                            <td rowspan="2"><a href="<?php echo U('Home/home/hosperson',array('expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>"><img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" width="100px" height="100px" alt=""></a> 
                                           <p><?php echo ($vo["expertname"]); ?></p>
                                            <p><?php echo ($vo["expertlevelcode"]); ?></p>            
                                            </td>
                                            <td>上午</td>
                                            
                                        <?php if($vo["thumor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td  class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                        <?php if($vo["frimor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td  class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                        <?php if($vo["satmor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td  class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                        <?php if($vo["sunmor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td  class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                        <?php if($vo["monmor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td  class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                        <?php if($vo["tuemor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td  class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                        
                                           
                                        <?php if($vo["wedmor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                        <?php else: ?><td  class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                        </tr> 
                                         <tr>
                                            
                                            <td>下午</td>
                                            
                                                       
                                                    
                                                    <?php if($vo["thuaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                                    <?php if($vo["friaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sataft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sunaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                                    <?php if($vo["monaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                                   <?php if($vo["tueaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                                                <?php if($vo["wedaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                                    </tr>
                                        </tr><?php break;?>
                        <?php case "星期五": ?><tr>
                                            <td rowspan="2"><a href="<?php echo U('Home/home/hosperson',array('expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>"><img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" width="100px" height="100px" alt=""></a> 
                                           <p><?php echo ($vo["expertname"]); ?></p>
                                            <p><?php echo ($vo["expertlevelcode"]); ?></p>            
                                            </td>
                                            <td>上午</td>
                                            
                                        
                                        <?php if($vo["frimor"] == '坐诊'): ?><td  class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                        <?php if($vo["satmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                        <?php if($vo["sunmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                        <?php if($vo["monmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                        <?php if($vo["tuemor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                        
                                           
                                        <?php if($vo["wedmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                        <?php if($vo["thumor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                        
                                        </tr> 
                                         <tr>
                                            
                                            <td>下午</td>
                                            
                                                       
                                                    
                                                    
                                                    <?php if($vo["friaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sataft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sunaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                                    <?php if($vo["monaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                                   <?php if($vo["tueaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                                                <?php if($vo["wedaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                                                                <?php if($vo["thuaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                                                        </tr>
                                        </tr><?php break;?>
                        <?php case "星期六": ?><tr>
                                            <td rowspan="2"><a href="<?php echo U('Home/home/hosperson',array('expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>"><img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" width="100px" height="100px" alt=""></a> 
                                           <p><?php echo ($vo["expertname"]); ?></p>
                                            <p><?php echo ($vo["expertlevelcode"]); ?></p>            
                                            </td>
                                            <td>上午</td>
                                            
                                        
                                        
                                        <?php if($vo["satmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                        <?php if($vo["sunmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                        <?php if($vo["monmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                        <?php if($vo["tuemor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                        
                                           
                                        <?php if($vo["wedmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                        <?php if($vo["thumor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                        <?php if($vo["frimor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                        
                                        </tr> 
                                         <tr>
                                            
                                            <td>下午</td>
                                            
                                                       
                                                    
                                                    
                                                   
                                                    <?php if($vo["sataft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                                    <?php if($vo["sunaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                                    <?php if($vo["monaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                                   <?php if($vo["tueaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                                                <?php if($vo["wedaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                                                                <?php if($vo["thuaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                                                <?php if($vo["friaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                                                        </tr>
                                        </tr><?php break;?>
                        <?php case "星期日": ?><tr>
                                            <td rowspan="2"><a href="<?php echo U('Home/home/hosperson',array('expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>"><img src="/Public/Admin/img/<?php echo ($vo["photo"]); ?>" width="100px" height="100px" alt=""></a> 
                                           <p><?php echo ($vo["expertname"]); ?></p>
                                            <p><?php echo ($vo["expertlevelcode"]); ?></p>            
                                            </td>
                                            <td>上午</td>
                                            
                                        
                                        
                                        
                                        <?php if($vo["sunmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                        <?php if($vo["monmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                        <?php if($vo["tuemor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                        
                                           
                                        <?php if($vo["wedmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                        <?php if($vo["thumor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                        <?php if($vo["frimor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                        <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                                <?php if($vo["satmor"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'1','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                        
                                        </tr> 
                                         <tr>
                                            
                                            <td>下午</td>
                                            
                                                       
                                                    
                                                    
                                                   
                                                    
                                                    <?php if($vo["sunaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date1); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date1,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                            <?php else: ?><td class="tdh" data-label="<?php echo ($date1); ?>"></td><?php endif; ?>
                                                    <?php if($vo["monaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date2); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date2,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date2); ?>"></td><?php endif; ?>
                                                   <?php if($vo["tueaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date3); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date3,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date3); ?>"></td><?php endif; ?>
                                                                <?php if($vo["wedaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date4); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date4,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date4); ?>"></td><?php endif; ?>
                                                                                <?php if($vo["thuaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date5); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date5,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date5); ?>"></td><?php endif; ?>
                                                                <?php if($vo["friaft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date6); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date6,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date6); ?>"></td><?php endif; ?>
                                                                <?php if($vo["sataft"] == '坐诊'): ?><td class="tdh" data-label="<?php echo ($date7); ?>"><a href="<?php echo U('Home/home/yuyue',array('we'=>'2','yuyuetime'=>$date7,'expertname'=>$vo['expertname'],'keshicode'=>$vv['keshiname'],'hospitalcode'=>$vv['hospitalname']));?>">预约</a> </td>
                                                                                <?php else: ?><td class="tdh" data-label="<?php echo ($date7); ?>"></td><?php endif; ?>
                                                                        </tr>
                                        </tr><?php break; endswitch;?>
                            </tbody><?php endforeach; endif; ?>
                    </table>
                    <div style="text-align:center">
                                <?php echo ($page); ?>
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
               // var headerRequestUrl="http://hospital.com/index.php/Home/Header/header";
                //点击退出请求的地址
                //var logoutRequestUrl="http://hospital.com/index.php/Home/Header/logout";
        </script>
        <script src="/Public/Home/js/js_header.js"></script>
</body>
</html>