<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 9:32
 */

namespace Home\Controller;


use Think\Controller;

class UserController extends Controller
{
        //注册;
        public function regist(){
//            var_dump(APP_PUBLIC_PATH);die;
            if(IS_POST){
                $model = D('User');
                if($model->create(I('post.'),1)){
                    if($model->add()){
                            $this->success('注册成功!',U('Home/User/login'));
                            exit;
                    }
                }
                $msg = $model->getError();
                $this->error($msg);
            }
            $this->display();
        }

        //登陆;
        public function login(){

            if(IS_POST){
                $phone = I('post.phone');
                $model = D('User');
                if($model->chkpwd()){
                    session('phone',$phone);
                    $this->success('登陆成功!',U('/'));
                    exit;
                }
                $this->error($model->getError());
            }
            $this->display();
        }

        public function send(){
            //引入发短信类
            Vendor('shumitech.smsgModel');


            $phone = I('post.phone');
            $code = rand(1000,9999);
            session('code',$code);
            $channel_id = 2;

            $smsgModel = new \smsgModel($channel_id);
           $info = $smsgModel->sendMsg([
//                'uid' => $uid,
                'phone' => $phone,
                'content' => $code
            ]);
            var_dump($info);

        }

        public function forget(){
            if(IS_POST){
                $model = D('User');

                if($model->create(I('post.'),2)){
//                    var_dump($model->uppassword());die;
                    if(FALSE !== $model->uppassword()){
                        //提示成功，并跳转到list方法中
                        $this->success('修改成功',U('login'));
                        exit;
                    }
                }
                $msg = $model->getError();
                $this->error($msg);
            }
            $this->display();


            $this->display();
        }







}