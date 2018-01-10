<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院专家申停管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>
		
	<div class="main container">
		<a class="btn btn-info" href="zuozhenshijianguanli.html">停诊申请</a>
		<a class="btn btn-info" href="<?php echo U('admin/Doctor/shentingjilu');?>">申停纪录</a>
		
			<table class="table table-striped">
				    <thead>
					    <tr>
					        <th>专家代码</th>
					        <th>时间</th>
					        <th>范围</th>
					        <th>开始日期</th>
					        <th>结束日期</th>
					        <th>申请原因</th>
					        <th>申请时间</th>
					        <!-- <th>拒绝原因</th> -->
					        <th></th>
					    </tr>
				    </thead>
				    <tbody>
						<?php if(is_array($list)): foreach($list as $key=>$stj): ?><tr>
					        <td><?php echo ($stj["expertname"]); ?></td>
					        <td><?php echo ($stj["time"]); ?></td>
					        <td><?php echo ($stj["upaft"]); ?></td>
					        <td><?php echo ($stj["startdate"]); ?></td>
					        <td><?php echo ($stj["stopdate"]); ?></td>
					        <td><?php echo ($stj["requirereason"]); ?></td>
					        <td><?php echo ($stj["requiretime"]); ?></td>
					        <!-- <td><?php echo ($stj["rejectreason"]); ?></td> -->
							<?php if($stj["statues"] == '同意'): ?><td><button class="btn btn-success">同意</button></td>
							<?php elseif($stj["statues"] == '拒绝'): ?><td><button class="btn btn-danger">拒绝</button></td>
							<?php else: ?><td><button class="btn btn-warning">待审核</button></td><?php endif; ?>


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