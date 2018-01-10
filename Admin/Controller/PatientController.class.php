<?php
namespace Admin\Controller;
use Think\Controller;
class PatientController extends Controller {
    public function personadmin(){
        $this->display();
    }


    public function personset(){
        
        $pp = D('Patient');
        $name['patientname'] = $_SESSION['userName'];
        if(IS_POST){
            $pp->where($name)->save($_POST);
            echo "<script>alert('修改成功！');</script>";
            echo "<script>window.location.href='http://hospital.com/index.php/admin/patient/personset';</script>";
        }
        $sho = $pp->where($name)->select();
        $this->assign('sho',$sho);

        $this->display();
    }


    public function yuyuemanage(){
        $yy = D('Yuyue');
        //var_dump($_GET);
        $name['patientname'] = $_SESSION['userName'];
        if(!empty($_GET)){
            $id['id']=$_GET['id'];
            $yy->where($id)->delete();
        }
        $count = $yy->where($name)->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,4);
            //实例化分页类 传入总记录数和每页显示的条数(4)
            $page -> setConfig('header','共%TOTAL_ROW%条');
$page -> setConfig('first','首页');
$page -> setConfig('last','共%TOTAL_PAGE%页');
$page -> setConfig('prev','上一页');
$page -> setConfig('next','下一页');
$page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
$page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $yy->where($name)->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->display();
    }

}