<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 9:44
 */

namespace  Home\Model;
use Think\Model;

class UserModel extends Model
{
    //定义可以提交到数据库的字段
    protected $fields  = array('phone','password');

    protected $_validate = array(
        array('phone','require','手机号必填'),
        array('phone','','手机号已被注册！',0,'unique',1),
        array('password','require','密码必填'),
        array('cpassword','password','确认密码不正确',0,'confirm'),
        array('code','require','验证码必填'),
        array('code','checkcode','验证码不正确',0,'callback'),
    );
    function checkcode(){
        $code = I('post.code');
        $chcode = session('code');
        if($code == $chcode){
            return true;
        }
        return true;
    }

    public function _before_insert(&$data, $options)
    {
           $data['password'] = md5($data['password']);
           $data['create_time'] = time();
    }

    public function chkpwd(){
        $password = I('post.password');
        $where['phone'] = I('post.phone');
        $where['password'] =md5($password);
        $info = $this->where($where)->select();
        if(!$info){
            $this->error = '输入的用户名或密码不正确';
            return false;
        }
        return true;



    }



    public function uppassword(){
        $phone = I('post.phone');
        $password =md5(I('post.password'));
        $sql = "UPDATE tj_user SET password = $password WHERE phone = $phone ";
        $this->query($sql);





    }


}