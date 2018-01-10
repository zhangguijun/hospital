<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>专家修改</title>
	

	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/addstyle.css">
</head>
<body>
	
	<div class="container">
        <div class="add">
            <div class="add_head">
                <h3><span>专家修改</span></h3>
            </div>
            <form action="<?php echo U('admin/Hospital/edit1x');?>" method="post">
                <?php if(is_array($list)): foreach($list as $key=>$qq): ?><!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">专 家 代 码</label>
                                  <input name="expertcode" style="display:none" class="input-xlarge" value="<?php echo ($qq["expertcode"]); ?>" id="addr">
                                  <input disabled class="input-xlarge" value="<?php echo ($qq["expertcode"]); ?>" id="addr">
                                
                            </div>
                            
                    </div>
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">专 家 名 称</label>
                                <input name="expertname" style="display:none" class="input-xlarge" type="text" id="hoscode"  value="<?php echo ($qq["expertname"]); ?>">
                                <input disabled class="input-xlarge" value="<?php echo ($qq["expertname"]); ?>" id="addr">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosName">科 室 名 称</label>
                                <input name="keshicode"  class="input-xlarge" type="text" id="hosName" placeholder="科室名称" value="<?php echo ($qq["keshicode"]); ?>">
                            </div>
                           
                    </div><?php endforeach; endif; ?>
                    <!-- 确认密码 -->
                    
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">专 家 级 别</label>
                                <input name="expertlevelcode" class="input-xlarge" type="text" id="hosName" placeholder="专家级别" value="<?php echo ($qq["expertlevelcode"]); ?>">
                                
                            </div>
                            
                    </div>
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">专 家 手 机</label>
                                <input name="tel" class="input-xlarge" type="text" id="hosName" placeholder="专家手机" value="<?php echo ($qq["tel"]); ?>">
                                
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