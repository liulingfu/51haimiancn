<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2017-03-14
 * Time: 21:36:13
 */
$url = "haimianmobile/index.html";
if(is_mobile())
{
    Header("Location: $url");
    exit; //
}
function is_mobile(){
    $useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $useragent = strtolower($useragent);
    if(strpos($useragent,"mobile")){
        return true;
    }
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>E兼职-官方网站</title>
    <meta name="author" content="ZhouShuo" />
    <meta name="description" content="fullPage callback function." />
    <meta name="keywords"  content="fullpage,jquery,demo,callbac,function,event" />
    <meta name="Resource-type" content="Document" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" href="./css/jquery.fullpage.min.css">
    <link rel="stylesheet" href="./css/base.css">
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/jquery.fullpage.360.min.js"></script>
  </head>
  <body>
    <div class="scrollpage-head">
      <div class="wrap header flex flex-space-between align-center">
        <a class="logo">海绵学堂</a>
        <div class="nav flex flex-start align-center">
          <a>首页</a>
          <span></span>
          <a>课程</a>
          <span></span>
          <a>讲师</a>
          <span></span>
          <a>常见问题</a>
        </div>
      </div>
    </div>
    <div id="fullpage">
      <!--第一页-->
      <div class="section" id="section0">
        <div class="wrap">
          <div class="section0-title">
            <h2>海绵学堂</h2>
            <h2>最具性价比的产品培训课程</h2>
          </div>
          <div class="section0-content">
            <p>短期培训让你快速达到3年的产品经验</p>
            <p>行业内最系统、实战型最强、最贴近产品经理真实工作情况的培训课程</p>
          </div>
          <div class="section0-small-title">
            <h3>实战为主、系统学习、保障就业</h3>
          </div>
          <div class="button-area flex flex-space-between">
            <a class="left-button flex flex-space-around align-center"><span>我要咨询</span></a>
            <a class="right-button flex flex-space-around align-center"><span>我要报名</span></a>
          </div>
        </div>
      </div>
      <!--第二页-->
      <div class="section" id="section1">
        <div class="wrap">
          <div class="section1-title">
            <h2>海绵学堂课程设置</h2>
          </div>
          <div class="section1-content flex flex-space-between">
            <div class="left-content">
              <h3>产品经理全日班</h3>
              <h4>6周课程</h4>
              <div class="section1-p1">
                <p>时间集中、快速学习、快速上岗</p>
              </div>
              <div class="section1-border"></div>
              <div class="section1-p2">
                <p>行业内实战性最强、最系统的产品经理课程</p>
                <p>京东、百度、58同城产品总监亲自授课</p>
                <p>最具性价比的产品培训课程</p>
              </div>
              <div class="section1-button flex flex-space-between">
                <a class="left-button flex flex-space-around align-center"><span>我要咨询</span></a>
                <a class="right-button flex flex-space-around align-center"><span>我要报名</span></a>
              </div>
            </div>
            <div class="right-content">
              <h3>产品经理全日班</h3>
              <h4>6周课程</h4>
              <div class="section1-p1">
                <p>时间集中、快速学习、快速上岗</p>
              </div>
              <div class="section1-border"></div>
              <div class="section1-p2">
                <p>行业内实战性最强、最系统的产品经理课程</p>
                <p>京东、百度、58同城产品总监亲自授课</p>
                <p>最具性价比的产品培训课程</p>
              </div>
              <div class="section1-button flex flex-space-between">
                <a class="left-button flex flex-space-around align-center"><span>我要咨询</span></a>
                <a class="right-button flex flex-space-around align-center"><span>我要报名</span></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!--第三页-->
      <div class="section" id="section2">
        <div class="wrap">
          <div class="section2-part1 flex flex-space-between">
            <div class="section2-left section2-title">
              <h2>写在前面的话......</h2>
              <div class="section2-border"></div>
              <p>也许您现在正在犹豫、焦灼，迫切的希望快速入行但又无从入手；也许您考虑过从进行产品培训开始，但市面上的产品经理培训课程动辄过万，高则将近2万，让您望而止步！</p>
              <p>那么，海绵学堂来了，海绵学堂自创立之初就立志做两件事：</p>
              <p>其一，做最具性价比的产品培训机构；</p>
              <p>其二，做行业内最系统、实战型最强、最贴近产品经理真实工作情况的培训课程。</p>
            </div>
            <div class="section2-right">
              <img src="images/section3.png"/>
            </div>
          </div>
          <div class="section2-part2">
            <p>海绵学堂的培训费用在整个产品经理培训行业绝对是良心价，同时，我们的课程体系是数位平均产品经验在7年以上的产品大咖通过自己的工作经验和深入研究市面上所有培训课程的基础上研发出的一套课程，培训质量绝对有保证。我们最大的愿景便是：让每个热爱产品的人都能轻松的走上产品岗位。</p>
            <p>所以，只要您相信海绵学堂，海绵学堂必全力以赴让您走上产品经理的岗位！只要您选择海绵学堂，海绵学堂定不让您后悔！</p>
          </div>
        </div>
      </div>
      <!--第四页-->
      <div class="section" id="section3">
        <img src="images/section4.png"/></div>
      <!--第五页-->
      <div class="section" id="section4">
      </div>
      <!--第六页-->
      <div class="section" id="section5">
      </div>
    </div>
    <script>
$(document).ready(function() {
    var deviceWidth = document.documentElement.clientWidth;
    document.documentElement.style.fontSize = deviceWidth / 19.2 + 'px';
    $('#fullpage').fullpage({
            autoScrolling: false
        });
      });
    </script>
  </body>
</html>