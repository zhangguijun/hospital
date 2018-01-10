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
                <h3><span>医院管理员修改</span></h3>
            </div>
            <form action="<?php echo U('admin/System/edit1x');?>" method="post">
                    <!--医院代码-->
                    <?php if(is_array($list)): foreach($list as $key=>$qq): ?><div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">管理员代码</label>
                                <input name="hospitaladminname" style="display:none" value="<?php echo ($qq["hospitaladminname"]); ?>" class="input-xlarge" type="text" id="hoscode1" placeholder="管理员代码">
                                <input disabled value="<?php echo ($qq["hospitaladminname"]); ?>" class="input-xlarge" type="text" id="hoscode" placeholder="管理员代码">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="syspwd">管理员密码</label>
                                <input name="hospitaladminpwd" value="<?php echo ($qq["hospitaladminpwd"]); ?>" class="input-xlarge" type="text" id="syspwd" placeholder="管理员密码">
                            </div>
                           
                    </div>
                    <!-- 确认密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="adminphone">管理员手机</label>
                                <input name="admintel" value="<?php echo ($qq["admintel"]); ?>" class="input-xlarge" type="text" id="adminphone" placeholder="管理员手机">
                            </div>
                            
                    </div>
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hos">医 院 代 码 </label>
                                  <input name="hospitalcode" style="display:none" value="<?php echo ($qq["hospitalcode"]); ?>" type="text" class="input-xlarge" id="hos2" placeholder="医院代码"/>
								  <input value="<?php echo ($qq["hospitalcode"]); ?>" disabled type="text" class="input-xlarge" id="hos1" placeholder="医院代码"/>
                            </div>
                            
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hos">医 院 </label>
                                  <input name="hospitalname" style="display:none" value="<?php echo ($qq["hospitalname"]); ?>" type="text" class="input-xlarge" id="hos3" placeholder="管理员所属医院"/>
                                  <input disabled value="<?php echo ($qq["hospitalname"]); ?>" type="text" class="input-xlarge" id="hos" placeholder="管理员所属医院"/>
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