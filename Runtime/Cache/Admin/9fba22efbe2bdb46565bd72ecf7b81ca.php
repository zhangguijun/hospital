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
                <h3><span>医院管理员新增</span></h3>
            </div>
            <form action="<?php echo U('admin/System/add1');?>" method="post">
                    <!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">管理员代码</label>
                                <input class="input-xlarge" name="hospitaladminname" type="text" id="hoscode" placeholder="管理员代码">
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="syspwd">管理员密码</label>
                                <input class="input-xlarge" name="hospitaladminpwd" type="text" id="syspwd" placeholder="管理员密码">
                            </div>
                           
                    </div>
                    <!-- 确认密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="adminphone">管理员手机</label>
                                <input class="input-xlarge" name="admintel" type="text" id="adminphone" placeholder="管理员手机">
                            </div>
                            
                    </div>
                    <div class="add-box">
                        <!--表单项-->
                        <div class="box">
                            <label for="addr">医 院 名 称</label>
                              <select name="hospitalname" class="input-xlarge" id="addr">
                                  <?php if(is_array($list)): foreach($list as $key=>$bo): ?><option value="<?php echo ($bo["hospitalname"]); ?>"><?php echo ($bo["hospitalname"]); ?></option><?php endforeach; endif; ?>
                              </select>
                            
                        </div>
                       
                        
                </div>
                <div class="add-box">
                    <!--表单项-->
                    <div class="box">
                        <label for="adminphone">医 院 代 码</label>
                        <input class="input-xlarge" name="hospitalcode" type="text" id="hos_code" placeholder="医院代码">
                    </div>
                    
            </div>
                    
                    <!-- 注册按钮 -->
                   <div class="add-box">
                   	 <input type="submit" class="btn btn-success tijiao" value="提交">
                   </div>
            </form>
        </div>
    </div>
    <script>
        var subUrl = "http://hospital.com/index.php/Admin/System/show_code";
    </script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script> 
    <script src="/Public/Admin/js/ajaxselect.js"></script>
</body>
</html>