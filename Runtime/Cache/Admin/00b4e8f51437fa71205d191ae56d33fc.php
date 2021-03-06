<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医生申停</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/addstyle.css">


</head>
<body>

	<div class="main container">
		<a class="btn btn-info" href="zuozhenshijianguanli.html">停诊申请</a>
		<a class="btn btn-info" href="shentingjilu.html">申停纪录</a>
			<div class="add">
            <div class="add_head">
                <h3><span>专家申停</span></h3>
            </div>
            <form action="<?php echo U('admin/Doctor/zuozhenshijianguanli');?>" method="post">
                    <!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">专家代码</label>
                                <input name="expertname" value="<?php echo ($exname); ?>" class="input-xlarge" type="text" id="hoscode" placeholder="专家代码">
                            </div>
                            
                    </div>
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="stardate">开始日期</label>
                                <input name="startdate" class="input-xlarge" type="date" id="stardate" value="<?php echo ($date); ?>" />
                            </div>
                           
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="enddate">结束日期</label>
                                <input name="stopdate" class="input-xlarge" type="date" id="enddate" value="<?php echo ($date1); ?>" />
                            </div>
                           
                    </div>
                  
                    <!-- 确认密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">停诊时间</label>
                                  <select name="time" class="input-xlarge" id="addr">
								      <option value="周一">周一</option>
								      <option value="周二">周二</option>
								      <option value="周三">周三</option>
								      <option value="周四">周四</option>
								      <option value="周五">周五</option>
								      <option value="周六">周六</option>
								      <!-- <option value="周日">周日</option>       -->
								  </select>                                
                            </div>
                            
                    </div>
                     <!-- <div class="add-box">
                           
                             <div class="box">
                                <label for="addr">范围</label>
                                  <select name="Upaft" class="input-xlarge" id="addr">
								      <option value="上午">上午</option>
								      <option value="下午">下午</option>				      
								  </select>
                                
                            </div>
                            
                    </div> -->
                     
                      <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="yuanyin">申请原因</label>
                                <input name="requirereason" class="input-xlarge" type="text" id="yuanyin" placeholder="填写申请原因" />
                            </div>
                           
                    </div>
                    
                    <!-- 注册按钮 -->
                   <div class="add-box">
                   	 <input type="submit" class="btn btn-success tijiao" value="提交">
                   </div>
            </form>
        </div>
			
	</div>
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script> 
	<script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script> 
</body>
</html>