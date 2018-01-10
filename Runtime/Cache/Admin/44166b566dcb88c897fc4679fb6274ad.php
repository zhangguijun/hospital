<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新增专家坐诊时间</title>
	

	<link rel="stylesheet" href="/Public/Admin/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/Admin/css/addstyle.css">
</head>
<body>
	
	<div class="container">
        <div class="add">
            <div class="add_head">
                <h3><span>新增专家坐诊时间</span></h3>
            </div>
            <form action="<?php echo U('admin/Hospital/add2');?>" method="post">
                    <!--医院代码-->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                <label for="hoscode">专 家 姓 名</label>
                                <select name="expertname" class="input-xlarge" id="hos_name">
                                        <?php if(is_array($list)): foreach($list as $key=>$vv): ?><option value="<?php echo ($vv["expertname"]); ?>"><?php echo ($vv["expertname"]); ?></option><?php endforeach; endif; ?>
                                </select>
                        </div>
                            
                    </div>
                    <!-- 密码 -->
                    <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                    <label for="hosName">周一</label>
                                    <br>
                                        <label for="hosName">上午</label>
                                    <input type="radio" name="Monmor" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Monmor"  type="radio" value="停诊"/><label>停诊</label>
                                    <label for="hosName">下午</label>
                                    <input type="radio" name="Monaft" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Monaft"  type="radio" value="停诊"/><label>停诊</label>
                                    
                            </div>
                           
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                    <label for="hosName">周二</label>
                                    <br>
                                        <label for="hosName">上午</label>
                                    <input type="radio" name="Tuemor" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Tuemor" type="radio" value="停诊"/><label>停诊</label>
                                    <label for="hosName">下午</label>
                                    <input type="radio" name="Tueaft" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Tueaft" type="radio" value="停诊"/><label>停诊</label>
                                    
                            </div>
                           
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                    <label for="hosName">周三</label>
                                    <br>
                                        <label for="hosName">上午</label>
                                    <input type="radio" name="Wedmor" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Wedmor"  type="radio" value="停诊"/><label>停诊</label>
                                    <label for="hosName">下午</label>
                                    <input type="radio" name="Wedaft" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Wedaft"  type="radio" value="停诊"/><label>停诊</label>
                                    
                            </div>
                           
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                    <label for="hosName">周四</label>
                                    <br>
                                        <label for="hosName">上午</label>
                                    <input type="radio" name="Thumor" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Thumor"  type="radio" value="停诊"/><label>停诊</label>
                                    <label for="hosName">下午</label>
                                    <input type="radio" name="Thuaft" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Thuaft"  type="radio" value="停诊"/><label>停诊</label>
                                    
                            </div>
                           
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                    <label for="hosName">周五</label>
                                    <br>
                                        <label for="hosName">上午</label>
                                    <input type="radio" name="Frimor" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Frimor"  type="radio" value="停诊"/><label>停诊</label>
                                    <label for="hosName">下午</label>
                                    <input type="radio" name="Friaft" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Friaft"  type="radio" value="停诊"/><label>停诊</label>
                                    
                            </div>
                           
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                    <label for="hosName">周六</label>
                                    <br>
                                        <label for="hosName">上午</label>
                                    <input type="radio" name="Satmor" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Satmor"  type="radio" value="停诊"/><label>停诊</label>
                                    <label for="hosName">下午</label>
                                    <input type="radio" name="Sataft" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Sataft"  type="radio" value="停诊"/><label>停诊</label>
                                    
                            </div>
                           
                    </div>
                     <div class="add-box">
                            <!--表单项-->
                            <div class="box">
                                    <label for="hosName">周日</label>
                                    <br>
                                        <label for="hosName">上午</label>
                                    <input type="radio" name="Sunmor" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Sunmor"  type="radio" value="停诊"/><label>停诊</label>
                                    <label for="hosName">下午</label>
                                    <input type="radio" name="Sunaft" value='坐诊' checked/><label>坐诊</label>  
                                    <input name="Sunaft"  type="radio" value="停诊"/><label>停诊</label>
                                    
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
    <script src="/Public/Admin/js/judgeajax.js"></script>
</body>
</html>