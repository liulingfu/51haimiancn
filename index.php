<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator tag1.0
 * Date: 2017-03-14
 * Time: 21:36:13
 */
$useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
$useragent = strtolower($useragent);
if(strpos($useragent,"mobile")){
    include_once "haimianmobile/index.html";
}else{
    include_once "index_.html";
}
