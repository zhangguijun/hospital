<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院科室管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>
	<div class="main">

		<form action="<?php echo U('admin/Hospital/keshiguanli');?>" method="post">
			科室名称：<input class="hospitaltext" name="keshiname" type="text" placeholder="医院科室名称">
			 <input type="submit" class="btn" value="搜索">
			 <a class="btn btn-success" href="<?php echo U('admin/hospital/add');?>"> 添加</a>
		</form>

		
				<table class="table ">
						<thead>
							<tr>
									<th style="width: 10%">科室代码</th>
									<th style="width: 10%">科室名称</th>
									<th style="width: 10%">科室类别</th>
									<th style="width: 60%">科室简介</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($list)): foreach($list as $key=>$ko): ?><tr>
								<td class="col-md-2"><?php echo ($ko["keshicode"]); ?></td>
								<td class="col-md-2"><?php echo ($ko["keshiname"]); ?></td>
								<td class="col-md-2"><?php echo ($ko["keshitypecode"]); ?></td>
								<td class="col-md-4"><?php echo ($ko["keshiinfo"]); ?></td>
								<td class="col-md-1"><a class="btn btn-info" href="<?php echo U('admin/Hospital/edit',array('keshiname'=>$ko['keshiname']));?>"> 修改</a></td>
								<form action="<?php echo U('admin/Hospital/keshiguanli');?>" method="get">
								<td class="col-md-1">
									<input style="display: none" name="keshiname" class="btn btn-success" value="<?php echo ($ko["keshiname"]); ?>">
									<input type="submit" class="btn btn-success" value="删除"/></td>
								
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