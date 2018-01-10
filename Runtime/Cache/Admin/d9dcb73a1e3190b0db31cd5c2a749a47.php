<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>系统设置</title>
  <link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">


</head>
<body>
  <div class="main">

    <form action="<?php echo U('Admin/system/sysmange');?>" method="post">
      字典名称：<input class="hospitaltext" name="item" type="text" placeholder="字典名称">
       <input type="submit" class="btn" value="搜索">
       <a class="btn btn-success" href="<?php echo U('admin/system/add2');?>"> 添加</a>
    </form>

      <table class="table table-striped">
            <thead>
              <tr>
                  <th>字典名称</th>
                  <th>字典代码</th>
                  <th>字典值</th>
                 
                  <th></th>
                  <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                  <td><?php echo ($vo["item"]); ?></td>
                  <td><?php echo ($vo["code"]); ?></td>
                  <td><?php echo ($vo["value"]); ?></td>
                  
                  <td><a class="btn btn-info" href="<?php echo U('Admin/system/edit2',array('item'=>$vo['item']));?>"> 修改</a></td>
                  <td><a class="btn btn-warning" href="<?php echo U('Admin/system/sysmange',array('item'=>$vo['item']));?>"> 删除</a></td>
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