<?php
//测试控制器类
class IndexControl extends Control{
    function index(){
        header("Content-type:text/html;charset=utf-8");
        echo 11111;
    }
}
?>