<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院专家管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>
	<div class="main container">

		<form action="<?php echo U('admin/Hospital/zhuanjiaguanli');?>" method="post">
			专家：<input class="hospitaltext" name="expertname" type="text" placeholder="专家姓名">
			 <input type="submit" class="btn" value="搜索">
			 <a class="btn btn-success" href="<?php echo U('admin/hospital/add1');?>"> 添加</a>
		</form>

			<table class="table table-striped">
				    <thead>
					    <tr>
					        <th>专家代码</th>
					        <th>专家名称</th>
							<th>科室名称</th>
					        <th>专家级别</th>
					        <th>专家手机</th>
					        <th></th>
					        <th></th>
					    </tr>
				    </thead>
				    <tbody>
						<?php if(is_array($list)): foreach($list as $key=>$zj): ?><tr>
							<td><?php echo ($zj["expertcode"]); ?></td>
					        <td><?php echo ($zj["expertname"]); ?></td>
							<td><?php echo ($zj["keshicode"]); ?></td>
					        <td><?php echo ($zj["expertlevelcode"]); ?></td>
					        <td><?php echo ($zj["tel"]); ?></td>
					        <td><a class="btn btn-info" href="<?php echo U('admin/Hospital/edit1',array('expertcode'=>$zj['expertcode']));?>"> 修改</a></td>
							<form action="<?php echo U('admin/Hospital/zhuanjiaguanli');?>" method="get">
					        <td><input style="display: none" class="btn btn-success" name="expertname" value="<?php echo ($zj["expertname"]); ?>"/>
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