<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>字典新增</title>
	

	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/addstyle.css">
</head>
<body>
	
	<div class="container">
        <div class="add">
            <div class="add_head">
                <h3><span>字典新增</span></h3>
            </div>
            <form action="<?php echo U('admin/System/add2');?>" method="post">
                    <!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">字 典 名 称</label>
                                <input class="input-xlarge" name="item" type="text" id="hoscode" placeholder="字典名称">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="syspwd">字 典 代 码</label>
                                <input class="input-xlarge" name="code" type="text" id="syspwd" placeholder="字典代码">
                            </div>
                           
                    </div>
                    <!-- 确认密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="adminphone">字 典 值</label>
                                <input class="input-xlarge" name="value" type="text" id="adminphone" placeholder="字典值">
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