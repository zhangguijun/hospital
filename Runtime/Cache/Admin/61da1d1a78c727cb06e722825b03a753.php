<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数据报表管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>

	<div class="main container">
			<table class="table table-striped">
				    <thead>
					    <tr>
					        <th>医生名字</th>
					        <th>医生剩余号数</th>
					        <th>所属科室</th>
					    </tr>
				    </thead>
				    <tbody>
						<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
					        <td><?php echo ($vo["expertname"]); ?></td>
					        <td><?php echo ($vo["count"]); ?></td>
					        <td><?php echo ($vo["keshiname"]); ?></td>

						</tr><?php endforeach; endif; ?>
				    </tbody>
			</table>
	</div>
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script> 
	<script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script> 
</body>
</html>