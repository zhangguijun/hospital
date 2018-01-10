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
                <h3><span>医院修改</span></h3>
            </div>
            <form action="<?php echo U('admin/System/editx');?>" method="post">
                <?php if(is_array($list)): foreach($list as $key=>$qq): ?><!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">医 院 代 码</label>
                                <input name="hospitalcode" style="display:none" class="input-xlarge" type="text" id="hoscode" placeholder="医院代码" value="<?php echo ($qq["hospitalcode"]); ?>">
                                <input class="input-xlarge" disabled type="text" id="hoscode" placeholder="医院代码" value="<?php echo ($qq["hospitalcode"]); ?>">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosName">医 院 名 称</label>
                                <input name="hospitalname" style="display:none" class="input-xlarge" type="text" id="hosName" placeholder="医院名称" value="<?php echo ($qq["hospitalname"]); ?>">
                                <input disabled class="input-xlarge" type="text" id="hosName" placeholder="医院名称" value="<?php echo ($qq["hospitalname"]); ?>">
                            </div>
                           
                    </div><?php endforeach; endif; ?>
                    <!-- 确认密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">行 政 区 划</label>
                                  <select name="governcode" class="input-xlarge" id="addr">
								      <option value="崂山区">崂山区</option>
								      <option value="市南区">市南区</option>
								      <option value="李沧区">李沧区</option>
								  </select>
                                
                            </div>
                            
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">医 院 级 别</label>
                                  <select name="hospitallevelcode" class="input-xlarge" id="addr">
								      <option value="一级甲等">一级甲等</option>
								      <option value="二级甲等">二级甲等</option>
								      <option value="三级甲等">三级甲等</option>
								      
								  </select>
                                
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