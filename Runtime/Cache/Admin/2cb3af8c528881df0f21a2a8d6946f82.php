<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>专家新增</title>
	

	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/addstyle.css">
</head>
<body>
	
	<div class="container">
        <div class="add">
            <div class="add_head">
                <h3><span>专家新增</span></h3>
            </div>
            <form action="<?php echo U('admin/Hospital/add1');?>" method="post">
                    <!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">专 家 代 码</label>
                                <input class="input-xlarge"  name="expertcode" type="text" id="hoscode" placeholder="专家代码">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosName">专 家 姓 名</label>
                                <input class="input-xlarge" name="expertname" type="text" id="hosName" placeholder="专家姓名(若名字相同，请输入数字以区别)">
                            </div>
                           
                    </div>
                    <!-- 确认密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">科 室 名 称</label>
                                  <select name="keshicode" class="input-xlarge" id="addr">
                                      <?php if(is_array($list1)): foreach($list1 as $key=>$pp): ?><option value="<?php echo ($pp["keshiname"]); ?>"><?php echo ($pp["keshiname"]); ?></option><?php endforeach; endif; ?>
								  </select>
                                
                            </div>
                            
                    </div>
                    
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">专 家 级 别</label>
                                  <input type="text" name="expertlevelcode" class="input-xlarge" id="addr" placeholder="专家级别"/>
                                
                            </div>
                            
                    </div>
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">专 家 手 机</label>
                                  <input type="text" name="tel" class="input-xlarge" id="addr" placeholder="专家手机"/>
                                
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