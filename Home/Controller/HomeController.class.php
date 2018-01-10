<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller {


        public function hosperson(){
            $expertModel = D('Expert');
            $list = $expertModel->where($_GET)->select();
            //var_dump($_GET);
            $this->assign('list',$list);
            $this->display();
        }


        public function hospital(){
            $HospitalorderModel = D('Hospitalorder');
            $HospitaloneModel = D('Hospitalone');
            $list =  M('Hospitalorder as a')->join('Hospitalone as b on b.hospitalcode=a.hospitalcode')->where($_GET)->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('list',$list);
            $this->display();
        }


        public function huxineike(){ //呼吸内科专家坐诊情况
            $expertModel = D('Expert');
            $jiuzhentimeModel = D('Jiuzhentime');
            $keshiModel = D('Keshi');
            $list1 = $keshiModel->where($_GET)->select();
            $cc['keshicode']=$_GET['keshiname'];
            $count =$expertModel->where('1=1')->count();
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
            $list = M('expert as a')->join('jiuzhentime as b on b.expertname=a.expertname')->where($cc)->limit($page->firstRow.','.$page->listRows)->select();
            //var_dump($list);
            //获取第二天的日期与星期几
            $date1 = date("Y-m-d",strtotime("+1 day"));
            $xingqi1 = $this->get_week($date1);
            //$xingqi_show1=$this->judge($xingqi1);
            //获取第三天的日期与星期几
            $date2 = date("Y-m-d",strtotime("+2 day"));
            $xingqi2 = $this->get_week($date2);
            //$xingqi_show2=$this->judge($xingqi2);
            //获取第四天的日期与星期几
            $date3 = date("Y-m-d",strtotime("+3 day"));
            $xingqi3 = $this->get_week($date3);
           // $xingqi_show3=$this->judge($xingqi3);
            //获取第五天的日期与星期几
            $date4 = date("Y-m-d",strtotime("+4 day"));
            $xingqi4 = $this->get_week($date4);
            //$xingqi_show4=$this->judge($xingqi4);
            //获取第六天的日期与星期几
            $date5 = date("Y-m-d",strtotime("+5 day"));
            $xingqi5 = $this->get_week($date5);
            //$xingqi_show5=$this->judge($xingqi5);
            //获取第七天的日期与星期几
            $date6 = date("Y-m-d",strtotime("+6 day"));
            $xingqi6 = $this->get_week($date6);
            //$xingqi_show6=$this->judge($xingqi6);
            //获取第八天的日期与星期几
            $date7 = date("Y-m-d",strtotime("+7 day"));
            $xingqi7 = $this->get_week($date7);
           // $xingqi_show7=$this->judge($xingqi7);

            $this->assign('xingqi1',$xingqi1); //明天的星期
            $this->assign('xingqi2',$xingqi2);  
            $this->assign('xingqi3',$xingqi3);
            $this->assign('xingqi4',$xingqi4);
            $this->assign('xingqi5',$xingqi5);
            $this->assign('xingqi6',$xingqi6);
            $this->assign('xingqi7',$xingqi7);

            $this->assign('date1',$date1); //明天日期
            $this->assign('date2',$date2);  
            $this->assign('date3',$date3);
            $this->assign('date4',$date4);
            $this->assign('date5',$date5);
            $this->assign('date6',$date6);
            $this->assign('date7',$date7);
            $this->assign('list',$list);
            $this->assign('list1',$list1);
            $this->assign('page',$show);
            $this->display();
        }

        // public function judge($xingqi){
        //     switch($xingqi){
        //         case '星期一': return 'mon';
        //         case '星期二': return 'tue';
        //         case '星期三': return 'wed';
        //         case '星期四': return 'thu';
        //         case '星期五': return 'fri';
        //         case '星期六': return 'sat';
        //         case '星期日': return 'sun';
        //     }
        // }
        


        public function index(){
            $HospitalorderModel = D('Hospitalorder');
            $HospitaloneModel = D('Hospitalone');
            
            $count =$HospitalorderModel->where('1=1')->count();
            //查询满足要求的总记录数
            $page = new \Think\Page($count,2);
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
            $list =  M('Hospitalorder as a')->join('Hospitalone as b on b.hospitalcode=a.hospitalcode')->where('1=1')->limit($page->firstRow.','.$page->listRows)->select();
            //var_dump($list);
            if(IS_AJAX){  
                $this->assign('list',$list);// 赋值数据集  
                $this->assign('page',$show);// 赋值分页输出  
                $html = $this->fetch('Home/ajaxPage');   //另建一个html文件用来获取得到的分页内容  
                $this->ajaxReturn($html);  
            }  
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->display();
        }


        public function yuyue(){     //预约挂号
            $yuyueModel = D('Yuyue');
            $expertModel =D('Expert');
            $patient = D('Patient');
            $rest = D('Rest');
            $data1['patientname']=$_SESSION['userName'];
            $data['hospitalname']=$_GET['hospitalcode'];
            $data['keshiname']=$_GET['keshicode'];
            $data['expertname']=$_GET['expertname'];
            $data3['patientname']=$_SESSION['userName'];
            $data3['hospitalname']=$_GET['hospitalcode'];
            $data3['keshiname']=$_GET['keshicode'];
            $data3['yuyuetime']=$_GET['yuyuetime'];
            
           // var_dump($data);
            if(IS_POST){
                $data['yuyuetime']=$_GET['yuyuetime'];
                $data['timerange']=$_POST['timerange'];
                $data['patientname']=$_SESSION['userName'];
                //var_dump($data);
                $noyuyue = $patient->where($data1)->select();
                $jilu = $yuyueModel->where($data3)->count(); //1
                if($jilu){
                    echo "<script>alert('每个人同一天只能挂一个科室的一个号！！');</script>";
                    echo "<script>window.location.href='http://hospital.com/index.php/Home/home/index';</script>";
                }else{
                    if($noyuyue['0']['num']<3){
                
                $data6['yuyuetime']=$_GET['yuyuetime'];
                $data6['timerange']=$_POST['timerange'];
                $data6['expertname']=$_GET['expertname'];
                $rest->add($data6);
                $data7=$rest->where($data6)->field('num')->select();
                $ww = $data7['0']['num'];
                //var_dump($data7);
                $ww--;
                $we['num']=$ww;
                $rest->where($data6)->save($we);
                $num = $rest->where($data6)->field('num')->select();
                if($num['0']['num']<=0){
                    echo "<script>alert('该医生今天这个时段的号已满，请预约其他医生或其他时间段！');</script>";
                    echo "<script>window.location.href=http://hospital.com/index.php/Home/home/index;</script>";
                }
                $yuyueModel->add($data);
                $list2 = $yuyueModel->select($data);
                //var_dump($list2);
                //var_dump($noyuyue);
                $patient_tel['patientname'] = $_SESSION['userName'];
                $tel=$patient->where($patient_tel)->field('tel')->select();
                $smsapi = "http://www.smsbao.com/"; //短信宝的固定网址，不要动
                $user = "q530470276"; //短信平台帐号（按自己的来）
                $pass = md5("15613911777"); //短信平台密码（按自己的来）
                $content="亲爱的".$data['patientname'].",恭喜您预约成功！！您的预约日期为：".$data['yuyuetime'].",时间段为".$data['timerange']."。";//要发送的短信内容（按自己的来）
                $phone =$tel['0']['tel'];//要发送的手机号（按自己的来）
                $sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);//不要动
                file_get_contents($sendurl) ;//不要动

                
               echo "<script>alert('预约成功！！(请注意:3次爽约将被加入黑名单,不再拥有预约权限！)');</script>";
               
                echo "<script>window.location.href='http://hospital.com/index.php/Home/home/index'</script>";
            }else{
                echo "<script>alert('您因爽约次数过多,已被加入黑名单！预约失败！！');</script>";
                echo "<script>window.location.href='http://hospital.com/index.php/Home/home/index'</script>";
            }
        }
        }
            $list = $expertModel->where($data)->select();
            $list1 = $patient->where($data1)->select();
            $this->assign('list',$list);
            $this->assign('list1',$list1);
            $this->display();
        }

        

        function   get_week($date){   //排班时间星期函数
            //强制转换日期格式
            $date_str=date('Y-m-d',strtotime($date));
       
            //封装成数组
            $arr=explode("-", $date_str);
            
            //参数赋值
            //年
            $year=$arr[0];
            
            //月，输出2位整型，不够2位右对齐
            $month=sprintf('%02d',$arr[1]);
            
            //日，输出2位整型，不够2位右对齐
            $day=sprintf('%02d',$arr[2]);
            
            //时分秒默认赋值为0；
            $hour = $minute = $second = 0;   
            
            //转换成时间戳
            $strap = mktime($hour,$minute,$second,$month,$day,$year);
            
            //获取数字型星期几
            $number_wk=date("w",$strap);
            
            //自定义星期数组
            $weekArr=array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
            
            //获取数字对应的星期
            return $weekArr[$number_wk];
        }

}

?>