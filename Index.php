<?php
/**
 * Created by PhpStorm.
 * User: 47322
 * Date: 2018/3/6
 * Time: 17:33
 */

class Index
{
    public function index(){
        //初始化
        $api =YBOpenApi::getInstance()->init('', '', '');
        $au  = $api->getAuthorize();

        //网站接入获取access_token，未授权则跳转至授权页面
        $info = $au->getToken();
        if(!$info['status']) {//授权失败
            session('token',$info['msg']);
            echo $info['msg'];
            die;
        }
    }

}