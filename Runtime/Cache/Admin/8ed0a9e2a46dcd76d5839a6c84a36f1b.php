<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>科室新增</title>
	

	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/addstyle.css">
</head>
<body>
	
	<div class="container">
        <div class="add">
            <div class="add_head">
                <h3><span>科室新增</span></h3>
            </div>
            <form action="<?php echo U('admin/Hospital/add');?>" method="post">

                <div class="add-box">
                        <!--表单项-->
                        <div class="box">
                            <label for="addr">科 室 类 别</label>
                              <select name="keshitypecode" class="input-xlarge" id="ks_type">
                                  <?php if(is_array($list2)): foreach($list2 as $key=>$lp): ?><option value="<?php echo ($lp["value"]); ?>"><?php echo ($lp["value"]); ?></option><?php endforeach; endif; ?>
                              </select>
                            
                        </div>
                        
                </div>
                    <!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">科 室 代 码</label>
                                  <input name="keshicode" class="input-xlarge" id="ks_code"  value="" />
								 
                            </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hosName">科 室 名 称</label>
                                <select name="keshiname" class="input-xlarge" id="ks_item">
                                        
                                    </select>
                            </div>
                           
                    </div>
                    <!-- 确认密码 -->
                
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="addr">科 室 简 介</label>
                                  <input type="text" name="keshiinfo" class="input-xlarge" id="addr" placeholder="科室简介"/>
                                
                            </div>
                            
                    </div>
                    
                    <!-- 注册按钮 -->
                   <div class="add-box">
                   	 <input type="submit" class="btn btn-success tijiao" value="提交">
                   </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script> 
    <script src="/Public/Admin/js/keshiajax.js"></script>
    <script src="/Public/Admin/js/keshicode_item.js"></script>
</body>
</html>