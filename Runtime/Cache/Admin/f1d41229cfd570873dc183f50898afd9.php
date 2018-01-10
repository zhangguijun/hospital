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
                <h3><span>科室修改</span></h3>
            </div>
            <form action="<?php echo U('admin/Hospital/editx');?>" method="post">
                <?php if(is_array($list)): foreach($list as $key=>$qq): ?><!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">科 室 类 别</label>
                                  <input name="keshitypecode" style="display:none" class="input-xlarge" value="<?php echo ($qq["keshitypecode"]); ?>" id="addr">
                                  <input disabled class="input-xlarge" value="<?php echo ($qq["keshitypecode"]); ?>" id="addr">
                                
                            </div>
                            
                    </div>
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">科 室 代 码</label>
                                <input name="keshicode" style="display:none" class="input-xlarge" type="text" id="hoscode" placeholder="科室代码" value="<?php echo ($qq["keshicode"]); ?>">
                                <input disabled class="input-xlarge" value="<?php echo ($qq["keshicode"]); ?>" id="addr">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosName">科 室 名 称</label>
                                <input name="keshiname" style="display:none" class="input-xlarge" type="text" id="hosName" placeholder="科室名称" value="<?php echo ($qq["keshiname"]); ?>">
                                <input disabled class="input-xlarge" value="<?php echo ($qq["keshiname"]); ?>" id="addr">
                            </div>
                           
                    </div><?php endforeach; endif; ?>
                    <!-- 确认密码 -->
                    
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">科 室 简 介</label>
                                <input name="keshiinfo" class="input-xlarge" type="text" id="hosName" placeholder="科室简介" value="<?php echo ($qq["keshiinfo"]); ?>">
                                
                            </div>
                            
                    </div>
                    
                    <!-- 注册按钮 -->
                   <div class="add-box">
                   	 <input type="submit" class="btn btn-success tijiao" value="提交">
                   </div>
                
            </form>
        </div>
    </div>
</body>
</html>