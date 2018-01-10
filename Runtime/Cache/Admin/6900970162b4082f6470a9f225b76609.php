<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预约管理管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>

	<div class="main container">
			<table class="table table-striped">
				    <thead>
					    <tr><th>预约号</th>
					        <th>名字</th>
					        <th>医院名称</th>
					        <th>科室名称</th>
					        <th>专家</th>
					         <th>预约时间</th>
					        <th>时间段</th>
					    </tr>
				    </thead>
				    <tbody>
						<?php if(is_array($list)): foreach($list as $key=>$yy): ?><tr><td><?php echo ($yy["id"]); ?></td>
					        <td><?php echo ($yy["patientname"]); ?></td>
					        <td><?php echo ($yy["hospitalname"]); ?></td>
					        <td><?php echo ($yy["keshiname"]); ?></td>
					        <td><?php echo ($yy["expertname"]); ?></td>
							 <td><?php echo ($yy["yuyuetime"]); ?></td>
							 <td><?php echo ($yy["timerange"]); ?></td>
							 <form action="<?php echo U('admin/Patient/yuyuemanage',array('id'=>$yy['id']));?>" method="get">
								<td><input style="display: none" class="btn btn-success" name="id" value="<?php echo ($yy["id"]); ?>"/>
								<input type="submit" class="btn btn-warning" value="取消预约"/>
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