<?php
namespace Admin\Controller;
use Think\Controller;
class DoctorController extends Controller {


    public function guahaoxinxiguanli(){
        $yuyueModel = D('Yuyue');
        $expertModel = D('Expert');
        $ss['expertcode'] = $_SESSION['userName'];
        $sa=$expertModel->where($ss)->field('expertname')->select();
        if(!empty($_GET)){
            $id['id'] = $_GET['id'];
            $d['statues'] = $_GET['statues'];
            $yuyueModel->where($id)->save($d);
        }
        //var_dump($sa);
        //$shh['expertname'] = $sa['expertname'];
        //echo $sa['expertname'];
        //var_dump($ss);
        //var_dump($sa);
        //var_dump($shh);
      
        $count = $yuyueModel->where($sa)->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,4);  //实例化page类
            $page -> setConfig('header','共%TOTAL_ROW%条');
            $page -> setConfig('first','首页');
            $page -> setConfig('last','共%TOTAL_PAGE%页');
            $page -> setConfig('prev','上一页');
            $page -> setConfig('next','下一页');
            $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
            $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            //实例化分页类 传入总记录数和每页显示的条数<4></4>
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $yuyueModel->where($sa)->limit($page->firstRow.','.$page->listRows)->select();
            //var_dump($list);
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->display();
    }


    public function personinfo(){
        $ex = D('Expert'); 
        $ss['expertcode'] = $_SESSION['userName'];
        
       // var_dump($_SESSION);
        if(IS_POST){
            
            if($_FILES['photo']['name']){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Admin/img/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->subName  =     '';
        $upload->saveName = $_POST['photo'];
        //var_dump($upload);
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
        }else{// 上传成功
        //$this->success('上传成功！');
        //$FilePath = $upload->rootPath . $info['表单name值']['savepath'] . $info['表单name值']['savename'];
        }
        
       // var_dump($_FILES);echo "<br/>";
        $_POST['photo']=$_FILES['photo']['name'];
        //var_dump($_POST);echo "<br/>";
        $ex->where($ss)->save($_POST);
        echo "<script>alert('修改成功！！');</script>";
    }else{
            $data['expertcode']=$_POST['expertcode'];
            $data['expertname']=$_POST['expertname'];
            $data['sex']=$_POST['sex'];
            $data['age']=$_POST['age'];
            $data['tel']=$_POST['tel'];
            $data['expertpwd']=$_POST['expertpwd'];
            $data['goodat']=$_POST['goodat'];
            $ex->where($ss)->save($data);
        echo "<script>alert('修改成功！！');</script>";

        }
        
    }
        $sh = $ex->where($ss)->select();
        $this->assign('sh',$sh);
        $this->display();
    }


    public function yishengindex(){
        $this->display();
    }


    public function zuozhenshijianguanli(){
        $re = D('Stoprequire');
        $date = date("Y-m-d",strtotime("+1 days"));
        $date1 = date("Y-m-d",strtotime("+2 days"));
        //var_dump($_SESSION);
        $exname = $_SESSION['userName'];
        if(IS_POST){
            $time= date("Y-m-d H:i:s");
            $_POST['requiretime'] = $time;
            $re->add($_POST);
            //var_dump($_POST);
            echo "<script>alert('提交成功！');</script>";
        }
        $this->assign("date",$date);
        $this->assign("date1",$date1);
        $this->assign("exname",$exname);
        $this->display();
    }


    public function shentingjilu(){
        $stj = D('Stoprequire');
        //var_dump($_SESSION);
        $ss['expertname'] = $_SESSION['userName'];
       // var_dump($ss);
        $count = $stj->where($ss)->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,4);
            $page -> setConfig('header','共%TOTAL_ROW%条');
            $page -> setConfig('first','首页');
            $page -> setConfig('last','共%TOTAL_PAGE%页');
            $page -> setConfig('prev','上一页');
            $page -> setConfig('next','下一页');
            $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
            $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            //实例化分页类 传入总记录数和每页显示的条数<4></4>
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $stj->where($ss)->limit($page->firstRow.','.$page->listRows)->select();
            //var_dump($list);
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->display();
    }

}