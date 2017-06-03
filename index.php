<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017-03-14
 * Time: 21:36:13
 */
$useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
$useragent = strtolower($useragent);
if(strpos($useragent,"mobile")){
    header("Location:haimianmobile/index.php");
}else{
    header("Location:index_.php");
}
