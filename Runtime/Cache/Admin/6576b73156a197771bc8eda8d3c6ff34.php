<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院新增</title>
	

	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/addstyle.css">
</head>
<body>
	
	<div class="container">
        <div class="add">
            <div class="add_head">
                <h3><span>个人信息设置</span></h3>
            </div>
            <form action="<?php echo U('admin/Patient/personset');?>" method="post">
                    <!--医院代码-->
                    <?php if(is_array($sho)): foreach($sho as $key=>$sh): ?><div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">姓名</label>
                                <input class="input-xlarge" style="display:none" type="text" id="hoscode"  name="patientname" value="<?php echo ($sh["patientname"]); ?>">
                                <input class="input-xlarge" type="text" id="hoscode" disabled value="<?php echo ($sh["patientname"]); ?>">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosName">身份证号</label>
                                <input class="input-xlarge" type="text" id="hosName" style="display:none" name="id" value="<?php echo ($sh["id"]); ?>">
                                <input class="input-xlarge" type="text" id="hosName" disabled value="<?php echo ($sh["id"]); ?>">
                            </div>
                           
                    </div>
                    <!-- 确认密码 -->
                   <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosName">手机号</label>
                                <input class="input-xlarge" type="text" id="hosName" placeholder="手机号" name="tel" value="<?php echo ($sh["tel"]); ?>">
                            </div>
                           
                    </div>
                  
                    
                    <!-- 注册按钮 -->
                   <div class="add-box">
                   	 <input type="submit" class="btn btn-success tijiao" value="提交">
                   </div><?php endforeach; endif; ?>
            </form>
        </div>
    </div>
</body>
</html>