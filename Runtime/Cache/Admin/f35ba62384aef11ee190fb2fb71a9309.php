<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院专家申停管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>
		
	<div class="main container">
			<table class="table table-striped">
				    <thead>
					    <tr>
					        <th>患者</th>
							<th>就诊时间</th>
							<th>时间段</th>
					        <th>就诊状态</th>
					       
					        <th></th>
					    </tr>
				    </thead>
				    <tbody>
						<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
					        <td><?php echo ($vo["patientname"]); ?></td>
							<td><?php echo ($vo["yuyuetime"]); ?></td>
							<td><?php echo ($vo["timerange"]); ?></td>
					        <td><?php echo ($vo["statues"]); ?></td>
					        
							<!-- <td><button class="btn btn-success">完成就诊</button></td>
							<td><button class="btn btn-warning">未就诊</button></td> -->
							
							<td>
									<form action="<?php echo U('admin/doctor/guahaoxinxiguanli');?>" method="get">
								<input style="display: none"  name="id" value="<?php echo ($vo["id"]); ?>"/>
								<input style="display: none"  name="statues" value="完成就诊"/>
								<?php if($vo["statues"] == '待就诊'): ?><input type="submit"   class="dianji btn btn-success" value="完成就诊"/>
									<?php else: ?><input style="display: none"  class="dianji btn btn-success" value="完成就诊"/><?php endif; ?>	
							</form>
								</td>

							<td>
								<form action="<?php echo U('admin/doctor/guahaoxinxiguanli');?>" method="get">
								<input style="display: none"  name="id" value="<?php echo ($vo["id"]); ?>"/>
								<input style="display: none"  name="statues" value="未就诊"/>
								<?php if($vo["statues"] == '待就诊'): ?><input type="submit"  class="dianji btn btn-warning" value="未就诊"/>
								<?php else: ?><input  style="display: none"  class="dianji btn btn-success" value="未就诊"/><?php endif; ?>		
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
	<!-- <script>
		$(function(){
			$(".dianji").click(function(){ 
				var value = $('#va').val();
				console.log(value);
				$(".dianji").css("display","none"); 
			});
		});

	</script> -->
</body>
</html>