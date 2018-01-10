<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>医院专家管理</title>
	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>

	<div class="main container">
		<a class="btn btn-info" href="./yishengguahaoguanli.html">专家坐诊时间表</a>
		<a class="btn btn-info" href="./yishengtingzhenshengqibiao.html">医生停诊申请表</a>
		<form action="<?php echo U('admin/Hospital/yishengguahaoguanli');?>" method="post">
			专家：<input name="expertname" class="hospitaltext" type="text" placeholder="专家姓名">
			 <input type="submit" class="btn" value="搜索">
			 <a class="btn btn-success" href="<?php echo U('admin/hospital/add2');?>"> 添加</a>
		</form>

			<table class="table">
				    <thead>
					    <tr>
					        <th>专家</th>
					        <th></th>
					        <th>周一</th>
					        <th>周二</th>
					        <th>周三</th>
					        <th>周四</th>
					        <th>周五</th>
					        <th>周六</th>
							<th>周日</th>
							<th></th>
					        <th></th>
					    </tr>
				    </thead>
					<?php if(is_array($list)): foreach($list as $key=>$zj): ?><tbody>
						
					    <tr>
							<td rowspan="2"><?php echo ($zj["expertname"]); ?></td>
					        <td >上午 </td>
					        <td class="toggle"><?php echo ($zj["monmor"]); ?></td>
					        <td class="toggle"><?php echo ($zj["tuemor"]); ?></td>
					        <td class="toggle"><?php echo ($zj["wedmor"]); ?></td>
					        <td class="toggle"><?php echo ($zj["thumor"]); ?></td>
					        <td class="toggle"><?php echo ($zj["frimor"]); ?></td>
					        <td class="toggle"><?php echo ($zj["satmor"]); ?></td>
							<td class="toggle"><?php echo ($zj["sunmor"]); ?></td>
							<th rowspan="2">
								<form action="<?php echo U('admin/Hospital/yishengguahaoguanli',array('expertname'=>$zj['expertname']));?>" method="get">
								<input type="submit" class=" btn btn-danger" value="删除"> 
								</form>
							</th>
					        <th></th>
					    </tr> 
					     <tr>
					        
					        <td>下午 </td>
					        <td class="toggle"><?php echo ($zj["monaft"]); ?> </td>
					        <td class="toggle"><?php echo ($zj["tueaft"]); ?> </td>
					        <td class="toggle"><?php echo ($zj["wedaft"]); ?></td>
					        <td class="toggle"><?php echo ($zj["thuaft"]); ?></td>
					        <td class="toggle"><?php echo ($zj["friaft"]); ?></td>
					        <td class="toggle"><?php echo ($zj["sataft"]); ?></td>
					        <td class="toggle"><?php echo ($zj["sunaft"]); ?></td>
					    </tr> 
						
				    </tbody><?php endforeach; endif; ?>
			</table>
			<div style="text-align:center">
					<?php echo ($page); ?></div>
	</div>
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script> 
	<script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script>
	<script>
		$(function(){ 
			// if($('.toggle').text() == "坐诊"){
			// 	$(this).css('color','green');
			// }else{
			// 	$(this).css('color','red');
			// }
			
			var a = $('.toggle').text();

			var arr = a.split('诊');
			console.log(arr);

			
	}); 
		$(".toggle").click(function(){
			if($(this).text() == "坐诊"){
				$(this).text("停诊");
				$(this).css('color','red');
			}else{
				$(this).text("坐诊"); 
				$(this).css('color','green');
			}
			// alert("asas");
		})
		
	</script> 
</body>
</html>