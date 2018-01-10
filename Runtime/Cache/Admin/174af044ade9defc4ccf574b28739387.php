<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院专家管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>
		
	<div class="main container">
		<a class="btn btn-info" href="<?php echo U('admin/Hospital/yishengguahaoguanli');?>">专家坐诊时间表</a>				
		<a  class="btn btn-info" href="<?php echo U('admin/Hospital/yishengtingzhenshengqibiao');?>">医生停诊申请表</a>
			<table class="table table-striped">
				    <thead>
					    <tr>
					        <th>专家代码</th>
					        <th>时间</th>
					        <!-- <th>范围</th> -->
					        <th>开始日期</th>
					        <th>结束日期</th>
					        <th>申请原因</th>
					        <th>申请时间</th>
					        <th></th>
					        <th></th>
					    </tr>
				    </thead>
				    <tbody>
						<?php if(is_array($list)): foreach($list as $key=>$st): ?><tr>
							<td><?php echo ($st["expertname"]); ?></td>
							<td><?php echo ($st["time"]); ?></td>
							<!-- <td><?php echo ($st["upaft"]); ?></td> -->
							<td><?php echo ($st["startdate"]); ?></td>
							<td><?php echo ($st["stopdate"]); ?></td>
							<td><?php echo ($st["requirereason"]); ?></td>
							<td><?php echo ($st["requiretime"]); ?></td>
					        <td>
								<form action="<?php echo U('admin/Hospital/yishengtingzhenshengqibiao',array('expertname'=>$st['expertname'],'time'=>$st['time'],'startdate'=>$st['startdate']));?>" method="get">
					        <input style="display: none"  name="id" value="<?php echo ($st["id"]); ?>"/>
							<input style="display: none"  name="statues" value="同意"/>
							<input type="submit" class="btn btn-success" value="同意"/>
								</form>
							</td>

							<td>
								<form action="<?php echo U('admin/Hospital/yishengtingzhenshengqibiao');?>" method="get">
					        <input style="display: none"  name="id" value="<?php echo ($st["id"]); ?>"/>
							<input style="display: none"  name="statues" value="拒绝"/>
							<input type="submit" class="btn btn-danger" value="拒绝"/>
								</form>
							</td>

	
						   
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