<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>个人信息管理界面</title>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/Home/css/base.css">
<link rel="stylesheet" href="/Public/Admin/css/b.tabs.css" type="text/css">
<style type="text/css">
div.menuSideBar { }
div.menuSideBar li.nav-header { font-size: 14px; padding: 3px 15px; }
div.menuSideBar .nav-list > li > a, div.menuSideBar .dropdown-menu li a { -webkit-border-radius: 0px; -moz-border-radius: 0px; -ms-border-radius: 0px; border-radius: 0px; }
</style>

</head>
<div class="content">
<div class="container">
    <div class="clearfix">
        <h3 class="page-header fl" style="width:200px" ><a href="http://hospital.com/index.php/Home/home/index">个人界面</a></h3>
          <div class="sn-quick-menu page-header fr ">
            <a class="sn-sys logo-behind" href="http://hospital.com/index.php/Admin/System/adminindex"></a>
            <a class="sn-hos logo-behind" href="http://hospital.com/index.php/Admin/Hospital/index"></a>
            <a class="sn-doc logo-behind" href="http://hospital.com/index.php/Admin/Doctor/yishengindex"></a>
            <a class="sn-pat logo-behind" href="http://hospital.com/index.php/Admin/Patient/personadmin"></a>
            <a class="sn-logout logo-behind" href="#">退出</a>
          </div>
      </div>
<div class="">
  <div class="row-fluid">
    <div class="col-md-2" style="padding-left: 0px;">
      <div class="well menuSideBar" style="padding: 8px 0px;">
        <ul class="nav nav-list" id="menuSideBar">
          <li class="nav-header">导航菜单</li>
          <li class="nav-divider"></li>
          <li mid="tab1" funurl="yuyuemanage.html"><a tabindex="-1" href="javascript:void(0);">预约管理</a></li>
          <li mid="tab2" funurl="personset.html"><a tabindex="-1" href="javascript:void(0);">个人信息</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-10" id="mainFrameTabs" style="padding : 0px;"> 
      
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active noclose"><a href="#bTabs_navTabsMainPage" data-toggle="tab">首页</a></li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="bTabs_navTabsMainPage">
          <div class="page-header">
            <h2 style="font-size: 31.5px;text-align: center;font-weight: normal;">你好</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/js/b.tabs.js" ></script> 
<script type="text/javascript" src="/Public/Admin/js/demo.js" ></script>
<script src="/Public/Home/js/js_header.js"></script>
</body>
</html>