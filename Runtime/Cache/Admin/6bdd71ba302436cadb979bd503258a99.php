<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>医院管理员管理</title>
  <link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>
  <div class="main">

    <form action="<?php echo U('admin/System/hospsysmang');?>" method="post">
      管理员：<input name="hospitalname" class="hospitaltext" type="text" placeholder="管理员所属医院">
       <input type="submit"  class="btn" value="搜索">
       <a class="btn btn-success" href="<?php echo U('admin/system/add1');?>"> 添加</a>
    </form>

      <table class="table table-striped">
            <thead>
              <tr>
                  <th>管理员代码</th>
                  <th>医院代码</th>
                  <th>管理员所属医院</th>
                  <th>手机号</th>
                 
                  <th></th>
                  <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($list)): foreach($list as $key=>$ve): ?><tr>
                  <td><?php echo ($ve["hospitaladminname"]); ?></td>
                  <td><?php echo ($ve["hospitalcode"]); ?></td>
                  <td><?php echo ($ve["hospitalname"]); ?></td>
                  <td><?php echo ($ve["admintel"]); ?></td>
                  
                  <td><a class="btn btn-info" href="<?php echo U('admin/System/edit1',array('hospitaladminname'=> $ve['hospitaladminname']));?>"> 修改</a></td>
                  <form action="<?php echo U('admin/System/hospsysmang');?>" method="get">
							<td><input style="display:none" name="hospitaladminname" class="btn btn-success" value="<?php echo ($ve["hospitaladminname"]); ?>">
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