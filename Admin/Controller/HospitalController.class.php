<?php
namespace Admin\Controller;
use Think\Controller;
class HospitalController extends Controller {


    public function blacklist(){  //黑名单显示
        $bl = D('Patient');
        //var_dump($_GET);
        if(!empty($_GET)){
            $hmd['id']=$_GET['id'];
            //$bl->where($hmd)->delete();
            $data['num']=0;
            $bl->where($hmd)->save($data);
            echo "<script>alert('删除成功！');</script>";
        }
        $count = $bl->where('num >= 3')->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,4);
            $page -> setConfig('header','共%TOTAL_ROW%条');
$page -> setConfig('first','首页');
$page -> setConfig('last','共%TOTAL_PAGE%页');
$page -> setConfig('prev','上一页');
$page -> setConfig('next','下一页');
$page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
$page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            //实例化分页类 传入总记录数和每页显示的条数(4)
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $bl->where('num >= 3')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            //var_dump($list);
        $this->display();
    }


    public function datalist(){
        $yuyueModel = D('Yuyue');
        $list = $yuyueModel->field("count(*) as count,expertname,keshiname")->group('expertname')->select();
        //var_dump($list);
        $this->assign('list',$list);
        $this->display();
    }


    public function hospitalinfomanage(){
        
        $HospitalorderModel = D('Hospitalorder');
        $HospitaloneModel = D('Hospitalone');
        $HospitaladminModel= D('Hospitaladmin');
        $hn['hospitaladminname'] = $_SESSION['userName'];
        //var_dump($hn);
        //var_dump($_POST);
        if(IS_POST){
            //var_dump($_FILES);
            echo "<br/>";
            //var_dump($_POST);
            echo "<br/>";
            $data1['hospitalcode']=$_POST['hospitalcode'];
            $dt['hospitalcode']=$_POST['hospitalcode'];
            $data1['hospitalname']=$_POST['hospitalname'];
            $dt2['hospitalname']=$_POST['hospitalname'];
            $data2['hospitalcode']=$_POST['hospitalcode'];
            $data2['tel']=$_POST['tel'];
            $data2['info']=$_POST['info'];
            $data2['address']=$_POST['address'];
           
            //var_dump($data1);
           // var_dump($data2);
           
            //var_dump($_FILES);
            $HospitalorderModel->where($dt)->save($data1);
            if(!$_FILES['image']['name']){
                //var_dump($_POST);
                $HospitaloneModel->where($dt)->save($data2);
            }else{
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     'Public/Admin/img/'; // 设置附件上传根目录
                $upload->savePath  =     ''; // 设置附件上传（子）目录
                $upload->subName  =     '';
                $upload->saveName = $_POST['image'];
                $info   =   $upload->upload();
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                    }else{// 上传成功
                //$this->success('上传成功！');
            }
                
                $data2['image']=$_FILES['image']['name'];
                //var_dump($_FILES);
                //var_dump($data2);
                $HospitaloneModel->where($dt)->save($data2);
                //echo "<script>alert('修改成功！！');</script>";
                      
                }
            echo "<script>alert('修改成功！！');</script>";
        }
        
        $hm = $HospitaladminModel->where($hn)->field('hospitalname')->select();
        //var_dump($hm);
        
        $list= M('Hospitalorder as a')->join('Hospitalone as b on b.hospitalcode=a.hospitalcode')->where($hm)->select();
       //var_dump($hm);
      // var_dump($list);
        $this->assign('list',$list);
        $this->display();
    }


    public function index(){
        $this->display();
    }


    public function add(){  //科室页面新增
        $kg = D('Keshi');
        $ha = D('Hospitaladmin');
        $di = D('Dicitem');
        $ge['hospitaladminname']=$_SESSION['userName'];
        $pp = $ha->where($ge)->field('hospitalname')->select();

        $list2 = $di->distinct(true)->field('code,value')->select();
        $this->assign('list2',$list2);
        if(IS_POST){
            //var_dump($pp);
            $_POST['hospitalname']=$pp['0']['hospitalname'];
            //var_dump($_POST);
            $cc['keshiname']=$_POST['keshiname'];
            $cd['code']=$_POST['keshicode'];
            $cd['value']=$_POST['keshitypecode'];
            $ca = $kg->where($cc)->count(); //0
            $cb = $di->where($cd)->count(); //0
            if(!$ca){
                if(!$cb){
                    echo "<script>alert('科室代码与科室类别不匹配,请重新输入！！');</script>";
                }else{
                $kg->add($_POST);
           // var_dump($_POST);
                echo "<script>alert('添加成功！');</script>";}
                
        }else{
                echo "<script>alert('已存在科室名称,请重新输入！！');</script>";
        }
        }
        // var_dump($_GET);
        // $code_item = $di->where($_GET)->field('item')->select();
        // //echo json_encode($code_item);
        // $this->assign("code_item",$code_item);
        $this->display();
    }

    public function edit(){     //科室页面修改
        $keshiModel = D('Keshi');
        $dicitem = D('Dicitem');
        
        if(!empty($_GET)){
            $aa['keshiname']=$_GET['keshiname'];
            //var_dump($_GET);
            //$list1 = $dicitem->where($aa)->select();
            //var_dump($list1);
            $list = $keshiModel->where($aa)->select();
        }
        
        $this->assign('list',$list);
        $this->assign('list1',$list1);
        $this->display();
    }

    public function editx(){        //科室页面修改提交
        $keshiModel = D('Keshi');
        //var_dump($_POST);
        $data['keshicode']=$_POST['keshicode'];
        $data['keshiname']=$_POST['keshiname'];
        $data['keshitypecode']=$_POST['keshitypecode'];
        $data1['keshiinfo']=$_POST['keshiinfo'];
        $keshiModel->where($data)->save($data1);
        echo "<script>alert('修改成功！');</script>";
        echo "<script>window.location='http://hospital.com/index.php/Admin/Hospital/keshiguanli';</script>";

    }


    public function edit1(){     //专家页面修改
        $expertModel = D('Expert');
        if(!empty($_GET)){
            $aa['expertcode']=$_GET['expertcode'];
            //var_dump($_GET);
            //$list1 = $dicitem->where($aa)->select();
            //var_dump($list1);
            $list = $expertModel->where($aa)->select();
        }
        
        $this->assign('list',$list);
        $this->display();
    }

    public function edit1x(){        //专家页面修改提交
        $expertModel = D('Expert');
        $dicitem = D('Dicitem');
        //var_dump($_POST);
        $data['expertcode']=$_POST['expertcode'];
        $data['expertname']=$_POST['expertname'];
        $data1['keshicode']=$_POST['keshicode'];
        $data2['item']=$_POST['keshicode'];
        $data1['keshilevelcode']=$_POST['keshilevelcode'];
        $data1['tel']=$_POST['tel'];
        $num=$dicitem->where($data2)->count();
        if($num==0){
            echo "<script>alert('科室名称不正确，请重新输入！！');</script>";
            echo "<script>window.location='http://hospital.com/index.php/Admin/Hospital/zhuanjiaguanli';</script>";
        }else{
        $expertModel->where($data)->save($data1);
        echo "<script>alert('修改成功！');</script>";
        echo "<script>window.location='http://hospital.com/index.php/Admin/Hospital/zhuanjiaguanli';</script>";
    }
    }




    public function type_code(){
        $dicitem = D('Dicitem');
        $type_code=$dicitem->where($_POST)->field('code')->select();
        echo json_encode($type_code);
    }
    
    public function code_item(){
        $dicitem = D('Dicitem');
        $code_item = $dicitem->where($_POST)->field('item')->select();
        //var_dump($_POST);
        echo json_encode($code_item);
        //$this->assign("code_item",$code_item);
    }


    public function add1(){  //专家页面新增
        $ex = D('expert');
        $ha = D('Hospitaladmin');
        $ks = D('Keshi');
        $ge['hospitaladminname']=$_SESSION['userName'];
        $pp = $ha->where($ge)->field('hospitalname')->select();
        $ks_a=$ks->field('keshiname')->select();
        if(IS_POST){
            if(preg_match("/^QD/",$_POST['expertcode'])){
                $cc['expertcode']=$_POST['expertcode'];
                $cd['expertname']=$_POST['expertname'];
                //$cd['value']=$_POST['keshitypecode'];
                $ca = $ex->where($cc)->count(); //0
                $cb = $ex->where($cd)->count(); //0
                $_POST['hospitalcode']=$pp['0']['hospitalname'];
                if($ca==0&&$cb==0){
                $ex->add($_POST);
            // var_dump($_POST);
                echo "<script>alert('添加成功！');</script>";}else{
                    echo "<script>alert('专家代码或专家名称存在,请重新输入！');</script>";
                }
            }else{
                echo "<script>alert('为了方便您的统一管理,请输入的专家代码以QD开头！');</script>";
            }
        }
        $this->assign("list1",$ks_a);
        $this->display();
    }


    public function add2(){   //专家坐诊信息新增
        $zjzz = D('Jiuzhentime');
        $expertModel =D('Expert');
        $list = $expertModel->field('expertname')->select();
        if(IS_POST){
            $zjzz->add($_POST);
            echo "<script>alert('添加成功！');</script>";
        }
        $this->assign('list',$list);
        $this->display();
    }



    public function judge(){  //判断是否存在该专家坐诊时间
        $zjzz = D('Jiuzhentime');
        $num = $zjzz->where($_POST)->count(); //0
        if($num==0){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function keshiguanli(){    //科室页面搜索
        $kg = D('Keshi');
        $expertModel = D('Expert');
        if(!empty($_GET)){      //科室删除
            $ksn['keshiname']=$_GET['keshiname'];
            $ksnn['keshicode']=$_GET['keshiname'];
            $ww = $expertModel->where($ksnn)->count();
            if($ww==0){
                $kg->where($ksn)->delete();
            }else{
                echo "<script>alert('该科室下还有医生存在，请先删除属于该科室的医生！！');</script>";
            }
            
            //echo "<script>alert('删除成功！');</script>";
        }
        if(IS_POST){
             $kgn['keshiname']=$_POST['keshiname'];
             $list=$kg->where($kgn)->select();
             //var_dump($list);
             $this->assign('list',$list);
         }else{
            $count = $kg->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,4);
            $page -> setConfig('header','共%TOTAL_ROW%条');
$page -> setConfig('first','首页');
$page -> setConfig('last','共%TOTAL_PAGE%页');
$page -> setConfig('prev','上一页');
$page -> setConfig('next','下一页');
$page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
$page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            //实例化分页类 传入总记录数和每页显示的条数(4)
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $kg->order('keshicode')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            //var_dump($list);
        }
        $this->display();
    }


    public function yishengguahaoguanli(){   //医生挂号管理
        $zjzz = D('Jiuzhentime');
        if(!empty($_GET)){
            $zjzz->where($_GET)->delete();
        }
        if(IS_POST){
             $exn['expertname']=$_POST['expertname'];
             $list=$zjzz->where($exn)->select();
             //var_dump($list);
             $this->assign('list',$list);
         }else{
            $count = $zjzz->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,3);
            $page -> setConfig('header','共%TOTAL_ROW%条');
            $page -> setConfig('first','首页');
            $page -> setConfig('last','共%TOTAL_PAGE%页');
            $page -> setConfig('prev','上一页');
            $page -> setConfig('next','下一页');
            $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
            $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            //实例化分页类 传入总记录数和每页显示的条数(3)
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $zjzz->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            //var_dump($list);
        }

        $this->display();
    }


    public function yishengtingzhenshengqibiao(){  //医生停诊申请表
        $str = D('Stoprequire');
        $jiuzjModel = D('Jiuzhentime');
        $expertModel = D('Expert');
        $yuyueModel = D('Yuyue');
        $patient = D('Patient');
        if(!empty($_GET)){
            $ss['id'] = $_GET['id'];
            
            $ss['statues'] = $_GET['statues'];
            $ff = $str->where($id)->save($ss);
            if($ss['statues']=='同意'){
                $sa['expertcode'] = $_GET['expertname'];
                $sg = M('expert as a')->join('jiuzhentime as b on b.expertname=a.expertname')->field('a.expertname')->where($sa)->select();
                //var_dump($sg);
                switch($_GET['time']){
                    case '周一':$data['Monmor']='停诊'; $data['Monaft']='停诊';     
                                $jiuzjModel->where($sg)->save($data);
                    break;
                    case '周二':$data['Tuemor']='停诊'; $data['Tueaft']='停诊';     
                    $jiuzjModel->where($sg)->save($data);
                    break;
                    case '周三':$data['Wedmor']='停诊'; $data['Wedaft']='停诊';     
                    $jiuzjModel->where($sg)->save($data);
                    break;
                    case '周四':$data['Thumor']='停诊'; $data['Thuaft']='停诊';     
                    $jiuzjModel->where($sg)->save($data);
                    break;
                    case '周五':$data['Frimor']='停诊'; $data['Friaft']='停诊';     
                    $jiuzjModel->where($sg)->save($data);
                    break;
                    case '周六':$data['Satmor']='停诊'; $data['Sataft']='停诊';     
                    $jiuzjModel->where($sg)->save($data);
                    break;
                    case '周日':$data['Sunmor']='停诊'; $data['Sunaft']='停诊';     
                    $jiuzjModel->where($sg)->save($data);
                    break;
                }
                $sg['yuyuetime']=$_GET['startdate'];
                $number=$yuyueModel->where($sg)->count();//0
                if($number==0){

                }else{
                    $pa=$yuyueModel->where($sg)->field('patientname')->select();
                    $count1=$yuyueModel->where($sg)->field('patientname')->count();
                    for($j=0;$j<$count1;$j++){
                        $tel_show[$j]=$pa[$j]['patientname'];
                        //$tel_show1['patientname']=$tel_show;
                        $c=$tel_show[$j];
                        $tell =$patient->where()->field('tel')->select();
                        //$tell[$j]=
                    }
                    //echo $c;
                    //var_dump($tell);
                    //var_dump($tel_show1);
                    
                    for($i=0;$i<$number;$i++){
                        echo $pa[$i]['patientname'];
                        echo $sg['yuyuetime'];
                        echo $sg['0']['expertname'];
                        echo $tell[$i]['tel'];
                        $smsapi = "http://www.smsbao.com/"; //短信宝的固定网址，不要动
                        $user = "q530470276"; //短信平台帐号（按自己的来）
                        $pass = md5("15613911777"); //短信平台密码（按自己的来）
                         $content="亲爱的".$pa[$i]['patientname'].",您好。您所预约的在日期为".$sg['yuyuetime']."的预约号,因医生".$sg['0']['expertname']."临时有事,请您及时更改预约。对于给您带来的不便,我们深感抱歉。";//要发送的短信内容（按自己的来）
                         $phone =$tell[$i]['tel'];//要发送的手机号（按自己的来）
                        $sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);//不要动
                        file_get_contents($sendurl) ;//不要动
                }
                }
                //var_dump($sa);
            }else{

            }
        //var_dump($ss);
        }
            $count = $str->where("statues='待审核'")->count();
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
            $list = $str->where("statues='待审核'")->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
         $this->display();
    }


    public function zhuanjiaguanli(){//专家管理页面搜索
        $zjgl = D('expert');
        $yuyueModel = D('Yuyue');
        $jiuzjModel = D('Jiuzhentime');
        if(!empty($_GET)){
            $ec['expertname']=$_GET['expertname'];
            $yy['expertname']=$_GET['expertname'];
            $yy['statues']='待就诊';
            $jilu=$yuyueModel->where($yy)->count();
            $num=$jiuzjModel->where($ec)->count();
            if($num==0){
                if($jilu==0){
                $zjgl->where($ec)->delete();}else{
                    echo "<script>alert('还存在病人预约该医生，请等待医生就诊完成即可删除！！');</script>";
                }
            }else{
                echo "<script>alert('请先删除该专家坐诊时间信息！！');</script>";
            }
            //echo "<script>alert('删除成功！');</script>";
        }
        if(IS_POST){
             $zjn['expertname']=$_POST['expertname'];
             $list=$zjgl->where($zjn)->select();
             //var_dump($list);
             $this->assign('list',$list);
         }else{
            $count = $zjgl->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,7);
            $page -> setConfig('header','共%TOTAL_ROW%条');
            $page -> setConfig('first','首页');
            $page -> setConfig('last','共%TOTAL_PAGE%页');
            $page -> setConfig('prev','上一页');
            $page -> setConfig('next','下一页');
            $page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
            $page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            //实例化分页类 传入总记录数和每页显示的条数(4)
            $show = $page->show();//分页显示输出
            //进行分页数据查询  注意Limit方法的参数要使用page类的属性
            $list = $zjgl->order('keshicode')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->assign('page',$show);
            //var_dump($list);
        }

        $this->display();
    }


}