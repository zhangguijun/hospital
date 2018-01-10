<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>
	<div class="main">

		<form action="<?php echo U('admin/System/hospitalmanage');?>" method="post">
			医院名称：<input class="hospitaltext" name='hospitalname' type="text" placeholder="医院名称">
			 <input type="submit" class="btn" value="搜索">
			 <a class="btn btn-success" href="<?php echo U('admin/system/add');?>"> 添加</a>
		</form>

			<table class="table table-striped">
				    <thead>
					    <tr>
					        <th>医院代码</th>
					        <th>医院名称</th>
					        <th>行政区划</th>
					        <th>医院级别</th>
					        <th></th>
					        <th></th>
					    </tr>
				    </thead>
				    <tbody>		
						<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
							<td><?php echo ($vo["hospitalcode"]); ?></td>
							<td><?php echo ($vo["hospitalname"]); ?></td>
							<td><?php echo ($vo["governcode"]); ?></td>
							<td><?php echo ($vo["hospitallevelcode"]); ?></td>
					        <td><a class="btn btn-info" href="<?php echo U('admin/System/edit',array('hospitalcode'=> $vo['hospitalcode']));?>"> 修改</a></td>
							<form action="<?php echo U('admin/System/hospitalmanage');?>" method="get">
							<td><input style="display:none" name="hospitalcode" class="btn btn-success" value="<?php echo ($vo["hospitalcode"]); ?>">
							<input type="submit" class="btn btn-success" value="删除"/>
							</td>
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