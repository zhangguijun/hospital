<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院信息管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/hosinfostyle.css">
</head>
<body>
	<div class="container">
		<div class="hos_info">
			<h3>医院信息编辑</h3>
		</div>
		<form action="<?php echo U('admin/Hospital/hospitalinfomanage');?>" enctype="multipart/form-data" method="post">
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><!--医院代码-->
                    <div class="hos_info">
                            <!--表单项-->
                            
                            <div class="box">
                                <label for="hoscode">医院名称</label>
                                <input class="input-xlarge" style="display:none" name="hospitalname" value="<?php echo ($vo["hospitalname"]); ?>" type="text" id="hoscode" placeholder="医院名称">
                                <input class="input-xlarge" disabled value="<?php echo ($vo["hospitalname"]); ?>" type="text" id="hoscode1" placeholder="医院名称">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="hos_info">
                            <!--表单项-->
                            <div class="box">
                                <label for="syspwd">医院代码</label>
                                <input class="input-xlarge" style="display:none" name="hospitalcode" value="<?php echo ($vo["hospitalcode"]); ?>" type="text" id="syspwd" placeholder="医院代码">
                                <input class="input-xlarge" disabled value="<?php echo ($vo["hospitalcode"]); ?>" type="text" id="syspwd1" placeholder="医院代码">
                            </div>
                           
                    </div>
                    <!-- 确认密码 -->
                    <div class="hos_info">
                            <!--表单项-->
                            <div class="box">
                                <label for="adminphone">医院图片</label>
                                <img src="/Public/Admin/img/<?php echo ($vo["image"]); ?>" width="100px " height="100px" alt="">
                                <input class="input-xlarge" name="image" type="file"  />
                            </div>
                            
                    </div>
                     <div class="hos_info">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosphone">医 院 电 话 </label>
                                 <input class="input-xlarge" name="tel" value="<?php echo ($vo["tel"]); ?>" type="text" id="hosphone" placeholder="医院电话">
                                
                            </div>
                            
                    </div>
                       <div class="hos_info">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosjianjie">医 院 简介 </label>
                                 <textarea type="" name="info" class="input-xlarge" id="hosjianjie"><?php echo ($vo["info"]); ?></textarea>
                                
                            </div>
                            
                    </div>
                       <div class="hos_info">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosaddr">医 院 地 址 </label>
                                <textarea type="" name="address" class="input-xlarge" id="hosaddr"><?php echo ($vo["address"]); ?></textarea>
                                
                            </div>
                            
                    </div>
                    
                    <!-- 注册按钮 -->
                   <div class="hos_info">
                   	 <input type="submit" class="btn btn-success tijiao" value="提交">
                   </div><?php endforeach; endif; ?>
            </form>
	</div>
	
	<script src="/Public/Admin/js/jquery.min.js"></script>
</body>
</html>