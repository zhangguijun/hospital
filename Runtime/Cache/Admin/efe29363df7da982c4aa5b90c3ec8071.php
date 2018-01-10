<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人信息管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/addstyle.css">
</head>
<body>
	<div class="container">
		<div class="person">
			<form action="<?php echo U('admin/doctor/personinfo');?>" enctype="multipart/form-data" method="post">
				<?php if(is_array($sh)): foreach($sh as $key=>$ss): ?><div class="person">
					<img src="/Public/Admin/img/<?php echo ($ss["photo"]); ?>" width="100px " height="100px" alt="">
				</div>
				<div class="person">
					医生代码: <input type="text" name="expertcode" value="<?php echo ($ss["expertcode"]); ?>">	
				</div>
				<div class="person">
					医生姓名: <input type="text" name="expertname" value="<?php echo ($ss["expertname"]); ?>">	
				</div>
				<div class="person">
					上传图片: <input type="file" name="photo" value="" />	
				</div>
				<div class="person">
					医生性别: 
					<input id="man" type="radio"  name="sex" value="男" />男
					<input id="woman" type="radio" checked="checked"  name="sex" value="女"/>女
				</div>	
				<div class="person">
					医生年龄: <input type="text" name="age" value="<?php echo ($ss["age"]); ?>">	
				</div>	
				<div class="person">
					医生手机: <input type="text" name="tel" value="<?php echo ($ss["tel"]); ?>">	
				</div>	
				<div class="person">
					医生密码: <input type="text" name="expertpwd" value="<?php echo ($ss["expertpwd"]); ?>">	
				</div>
				<div class="person">
					医生擅长: <input type="text" name="goodat" value="<?php echo ($ss["goodat"]); ?>">	
				</div>
				<div class="person">
					<input type="submit" class="btn btn-success" value="提交">
				</div><?php endforeach; endif; ?>
			</form>
		</div>
	</div>
</body>
</html>