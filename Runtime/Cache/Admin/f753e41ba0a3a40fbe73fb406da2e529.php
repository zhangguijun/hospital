<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院专家管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>

	<div class="main container">
			<table class="table table-striped">
				    <thead>
					    <tr>
					        <th>名字</th>
					        <th>身份证号</th>
					        
					        <th></th>
					    </tr>
				    </thead>
				    <tbody>
						<?php if(is_array($list)): foreach($list as $key=>$bl): ?><tr>
							<td><?php echo ($bl["patientname"]); ?></td>
							<td><?php echo ($bl["id"]); ?></td>
							
							<form action="<?php echo U('admin/Hospital/blacklist');?>" method="get">
							<td>
								<input style="display: none" name="id" value="<?php echo ($bl["id"]); ?>">
								<input type="submit" class="btn btn-danger" value="删除"/></td>
							
							</form>
					    </tr><?php endforeach; endif; ?>
				    </tbody>
			</table>
			<div style="text-align:center">
					<?php echo ($page); ?></div>
	</div>
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script> 
	<script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script> 
</body>
</html>