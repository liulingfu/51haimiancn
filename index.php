<?PHP
$useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";
$useragent = strtolower($useragent);
if(strpos($useragent,"mobile")){
include_once"haimianmobile/index.php";
}else {
    include_once "index_.php";
}
?>