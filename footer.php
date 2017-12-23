<div class="scrollpage-footer" style="position: static;">
    <h3>联系我们</h3>
    <div class="footer-item-list flex flex-row flex-between align-center">
        <div class="footer-item flex flex-row flex-start align-center">
            <span class="wechat">
              <img src="./images/wechat.png" />
            </span>
            <p>17319017371</p>
        </div>
        <div class="footer-item flex flex-row flex-start align-center">
            <span class="qq">
              <img src="./images/qq.png" />
            </span>
            <p>1499171736</p>
        </div>
        <div class="footer-item flex flex-row flex-start align-center">
            <span class="mobile">
              <img src="./images/mobile.jpg" />
            </span>
            <p>17319017371</p>
        </div>
        <div class="footer-item flex flex-row flex-start align-center">
            <a href=" ">
<!--                <img border="0" src="http://img.webscan.360.cn/status/pai/hash/73eba215e890a2e44948d02bd7a37a6a"/>-->
            </a>
        </div>
    </div>
    <div class="enterprise">
        <p>北京众行天下科技有限公司  版权所有   京ICP备17000795号 <a href="http://hao.360.cn/" target="_blank" >360导航</a> <a href="http://se.360.cn/" target="_blank" >360安全浏览器</a></p>
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
    function stopPropagation(e) {
        if (e.stopPropagation)
            e.stopPropagation();
        else
            e.cancelBubble = true;
    }

    $(document).bind('click',function(){
        $('.drop-down-content').css('display','none');
    });

    $('#test').bind('click',function(e){
        stopPropagation(e);
    });
</script>
<!--右侧浮层-->
<div class="float-ico-box">
    <a href="javascript:void(0)" onclick="openwin()" class="float-ico wy-ico dp_block">
        <i class="dp_block jt"></i>
        <span class="alt_nr"><img src="images/right_fuceng/tx1.png" alt="" class="img"></span>
    </a>
    <!--<a href="https://hztk5.kuaishang.cn/bs/im.htm?cas=68912___679326&fi=78477&sText=PC" target="_blank" class="float-ico qq-ico  dp_block">-->
    <!--<i class="dp_block jt"></i>-->
    <!--<span class="alt_nr"><img src="images/right_fuceng/tx2.png" alt="" class="img"></span>-->
    <!--</a>-->
    <a href="#" class="float-ico zb-ico  dp_block">
        <i class="dp_block jt"></i>
        <span class="alt_nr"><img src="images/right_fuceng/tx3.jpg" alt="" class="img"></span>
    </a>
    <!--<a href="#" class="float-ico top-ico go-top  dp_block">-->
    <!--<i class="dp_block jt"></i>-->
    <!--<span class="alt_nr"><img src="images/right_fuceng/tx4.png" alt="" class="img"></span>-->
    <!--</a>-->
</div>
<!--右侧浮层end-->
<script>
    function openwin() {
        window.open("https://hztk5.kuaishang.cn/bs/im.htm?cas=68912___679326&fi=78477&sText=PC");
    }
</script>
<script type="text/javascript" src="https://hztk5.kuaishang.cn/bs/ks.j?cI=679326&fI=78477" charset="utf-8" defer="defer"></script>
<script src="/js/common.js"></script>
<script type="text/javascript" src="//s.union.360.cn/159974.js" async defer></script>