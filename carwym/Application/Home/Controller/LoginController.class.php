<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
    function login(){
    	$this->display();
    }
    function loging(){
    	if(!empty($_POST)){
    		$user = D('user');
    		$arr = Array(
    			'user_name' =>$_POST['user_name'],
    			'user_password' =>$_POST['user_password'],
    		);
    		$z = $user -> where($arr) ->count();
    		echo $z;
    	}else{
    		$this ->display();
    	}
    }
    function register(){
    	if(!empty($_POST)){
    		$user = D("user");
    		$arr = array(
    			'user_name' => $_POST["user_name"],
    			'user_password' => $_POST["user_password"], 
    		);
    		$z = $user->add($arr);
    		$this->redirect('login',array(),2,"您是第".$z."个用户");
    	}else{
    		$this->display();
    	}
    }
}