<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends Controller {
    // public function 1(){
    //     //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    //     $this->display();
    // }
    public function add(){
        if(IS_POST){
            $add = D('Hospitalorder');
            $cc['hospitalcode'] = $_POST['hospitalcode'];
            $ca['hospitalname']=$_POST['hospitalname'];
            $jilu = $add->where($cc)->count();  //0
            $jil2 = $add->where($ca)->count();  //0
            if($jilu==0&&$jil2==0){
                if(preg_match("/^S/",$_POST['hospitalcode'])){
                $add->add($_POST);
           // var_dump($_POST);
           //echo $jil2.$jilu;
            echo "<script>alert('添加成功！');</script>";}else{
                echo "<script>alert('为了方便您的统一管理，医院代码请以S开头！');</script>";
            }
        }else{
            echo "<script>alert('医院代码或名称已存在,请重新输入！！');</script>";
        }
        }
        $this->display();
    }


    public function add1(){
        $hopitalorderModel = M('Hospitalorder');
        $add1 = D('Hospitaladmin');
        if(IS_POST){
           
            $cc['hospitaladminname'] = $_POST['hospitaladminname'];
            $cb['hospitalname']=$_POST['hospitalname'];
            $pp['hospitalname']=$_POST['hospitalname'];
            $pp['hospitalcode']=$_POST['hospitalcode'];
            $jilu = $add1->where($cc)->count();  //0
            $jilu1 = $add1->where($cb)->count(); //0
            if(preg_match("/^GM/",$_POST['hospitaladminname'])){

            
            if($jilu==0){
                if($jilu1==0){
                    $jilu3=$hopitalorderModel->where($pp)->count();
                    //var_dump($pp);
                    //echo $jilu3;
                    if($jilu3==0){
                        echo "<script>alert('您的医院代码与医院名称不相符，请重新输入！！');</script>";
                    }else{
                        $add1->add($_POST);
                        // var_dump($_POST);
                         echo "<script>alert('添加成功！');</script>";
                }}else{
                    echo "<script>alert('该医院已存在管理员，请选择其他医院！');</script>";
                }
            }else{
                echo "<script>alert('管理员代码已存在,请重新输入！！');</script>";
            }
        }else{
            //echo $_POST['hospitaladminname'];
            echo "<script>alert('为了方便您的统一管理,请使管理员代码为GM开头！！');</script>";
        }
    }
        $list = $hopitalorderModel->field('hospitalname')->select();
        // foreach($list1 $k=>$v){
        //     $list['0']
        // }
       // echo $list['0']['hospitalname'];
        $this->assign('list',$list);
        $this->display();
    }

    public function show_code(){    //通过ajax自动获取选择的医院的代码并显示。
        $hosorder = D('Hospitalorder');
        //var_dump($_POST);
        $hosc = $hosorder->where($_POST)->field('hospitalcode')->select();
        echo json_encode($hosc);    
    }


    public function add2(){
        
        if(IS_POST){
            $add2 = D('Dicitem');
            $cc['item'] = $_POST['item'];
            $jilu = $add2->where($cc)->count();  //0
            if($jilu==0){
            $add2->add($_POST);
           // var_dump($_POST);
            echo "<script>alert('添加成功！');</script>";}else{
                echo "<script>alert('字典名称已存在,请重新输入！！');</script>";
            }
        }
        $this->display();
    }
    public function adminindex(){
        $this->display();
    }
    public function doctorinfo(){
        $this->display();
    }


    public function edit(){

        $hospitalModel = D('Hospitalorder');
        $qq['hospitalcode']=$_GET['hospitalcode'];
        $list=$hospitalModel->where($qq)->select();
       // var_dump($list);
        $this->assign('list',$list);
        $this->display();
        
    }

    public function editx(){
        $hosadmin = D('Hospitaladmin');
        $hospitalModel = D('Hospitalorder');
        //var_dump($_POST);
        $qq['hospitalcode']=$_POST['hospitalcode'];
        $data['hospitalname']=$_POST['hospitalname'];
        $hospitalModel->where($qq)->save($_POST);
        $hosadmin->where($qq)->save($data);
        echo "<script>alert('修改成功！');</script>";
        echo "<script>window.location='http://hospital.com/index.php/Admin/System/hospitalmanage';</script>";

    }



    public function edit1(){
        $hospitalModel = D('Hospitaladmin');
        //var_dump($_GET);
        $qq['hospitaladminname']=$_GET['hospitaladminname'];
        $list=$hospitalModel->where($qq)->select();
        //var_dump($list);
        $this->assign('list',$list);
        $this->display();
    }

    public function edit1x(){

        $hospitalModel = D('Hospitaladmin');
        //var_dump($_POST);
        $qq['hospitaladminname']=$_POST['hospitaladminname'];
        $hospitalModel->where($qq)->save($_POST);
        echo "<script>alert('修改成功！');</script>";
        echo "<script>window.location='http://hospital.com/index.php/Admin/System/hospsysmang';</script>";

    }

    public function edit2(){
        $hospitalModel = D('Dicitem');
        //var_dump($_GET);
        $qq['item']=$_GET['item'];
        $list=$hospitalModel->where($qq)->select();
        //var_dump($list);
        $this->assign('list',$list);
        $this->display();
    }

    public function edit2x(){

        $hospitalModel = D('Dicitem');
        $qq['item']=$_POST['item'];
            $jilu = $hospitalModel->where($qq)->count();  //0
            if($jilu==0){
                //var_dump($_POST);
                $hospitalModel->where($qq)->save($_POST);
                echo "<script>alert('修改成功！');</script>";
                echo "<script>window.location='http://hospital.com/index.php/Admin/System/sysmange';</script>";
            }else{
                echo "<script>alert('字典名称已存在,请重新输入！！');</script>";
                echo "<script>window.location='http://hospital.com/index.php/Admin/System/sysmange';</script>";
            }
        //var_dump($_POST);
        
        

    }

    public function hospitalmanage(){
         $hospitalModel = D('Hospitalorder');
         //var_dump($_GET);
          if(!empty($_GET)){
            $hc['hospitalcode']=$_GET['hospitalcode'];
            $hospitalModel->where($hc)->delete();
            //echo "<script>alert('删除成功！');</script>";
        }
         if(IS_POST){
             $hn['hospitalname']=$_POST['hospitalname'];
             $list=$hospitalModel->where($hn)->select();
             //var_dump($list);
             $this->assign('list',$list);
         }else{
            $count = $hospitalModel->count();
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
            $list = $hospitalModel->order('hospitalcode')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            //var_dump($list);
        }

        $this->display();
    }


    public function hospsysmang(){
        $hosadmin = D('Hospitaladmin');
        $hosorder = D('Hospitalorder');
        if(!empty($_GET)){
            $hac['hospitaladminname']=$_GET['hospitaladminname'];
            $hosadmin->where($hac)->delete();
            //echo "<script>alert('删除成功！');</script>";
        }
        if(IS_POST){
             $han['hospitalname']=$_POST['hospitalname'];
             $list=$hosadmin->where($han)->select();
             //var_dump($list);
             $this->assign('list',$list);
         }else{
            $count = $hosadmin->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,4);
            //实例化分页类 传入总记录数和每页显示的条数(4)
            //$page = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
            $page -> setConfig('header','共%TOTAL_ROW%条');
            $page -> setConfig('first','首页');
            $page -> setConfig('last','共%TOTAL_PAGE%页');
            $page -> setConfig('prev','上一页');
            $page -> setConfig('next','下一页');
            $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
            $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $hosadmin->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            //var_dump($list);
        }
        $this->display();
    }

    //系统设置
    public function sysmange(){
        $hosadmin = D('Dicitem');
        if(!empty($_GET)){
            $hac['item']=$_GET['item'];
            $hosadmin->where($hac)->delete();
            //echo "<script>alert('删除成功！');</script>";
        }
        if(IS_POST){
             $han['item']=$_POST['item'];
             $list=$hosadmin->where($han)->select();
             //var_dump($list);
             $this->assign('list',$list);
         }else{
            $count = $hosadmin->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,3);
            //实例化分页类 传入总记录数和每页显示的条数(4)
            //$page = new Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数
$page -> setConfig('header','共%TOTAL_ROW%条');
$page -> setConfig('first','首页');
$page -> setConfig('last','共%TOTAL_PAGE%页');
$page -> setConfig('prev','上一页');
$page -> setConfig('next','下一页');
$page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
$page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $hosadmin->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            //var_dump($list);
        }


        $this->display();
    }


}