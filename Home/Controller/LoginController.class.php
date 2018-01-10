<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {


        public function login(){
            $this->assign();
            $this->display();
        }

            //此方法用于登陆逻辑
    public function doLogin(){
        //获取前台页面传来的用户名和密码
        //var_dump($_POST);
        $name=$_POST["username"];
        $pwd=$_POST["userpwd"];
        
        /*4个角色：
        1.系统管理员 ：admin
        2.医院管理员：HA001
        3.专家：QH001D001
        4.患者：身份证号
        */
        if(preg_match("/admin/",$name)){
            //说明是系统管理员
            if($pwd=="123"){
                //说明密码正确
                session("userType",1);
                session("userName",'系统管理员');
                echo 1;
            }else{
                echo "密码错误!";
            }
        }elseif (preg_match("/^GM/",$name)){
            //说明是医院管理员
            $selectModel=M("Hospitaladmin");//调表
            $selectData=$selectModel->where("hospitaladminname="."'".$name."'")->getField("hospitaladminpwd");
            if($selectData==null){
                echo "抱歉,您没有权限进入系统!";
            }else{
                if($selectData==$pwd){
                    session("userType",2);
                    session("userName",$name);
                    echo 1;
                }else{
                    echo "您输入的密码错误!";
                }
            }
        }elseif(preg_match("/^QD/",$name)){
            //说明是专家
            $selectModel=M("Expert");
            $selectData=$selectModel->where("expertcode="."'".$name."'")->getField("expertpwd");
            if($selectData==null){
                echo "抱歉,您没有权限进入系统!";
            }else{
                if($selectData==$pwd){
                    session("userType",3);
                    session("userName",$name);
                    echo 1;
                }else{
                    echo "您输入的密码错误!";
                }
            }
        }else{
            //说明是患者
            $selectModel=M("Patient");
            $selectData=$selectModel->where("id="."'".$pwd."'")->getField("patientname");
            if($selectData==null){
                //说明patient表中没有该患者，那么我们要添加患者
                $addModel=M("Patient");
                $data["id"]=$pwd;
                $data["patientname"]=$name;
                $addModel->add($data);
                session("userType", 4);
                session("userName", $name);
                echo 1;
            }
            else {
                if($selectData==$name){
                    session("userType", 4);
                    session("userName", $name);
                    echo 1;
                }else{
                    echo "您输入的密码错误！";
                }
            }
        }
    }

}



?>