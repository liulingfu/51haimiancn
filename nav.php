<div class="nav flex flex-row flex-start align-center">

    <a href="./index_.php?nav=1"
        <?PHP if(isset($_GET['nav']) && $_GET['nav']==1) echo 'style="border-bottom:1px solid red;padding-bottom:1px;"';
        else if($_SERVER["REQUEST_URI"]=='/index_.php') echo 'style="border-bottom:1px solid red;padding-bottom:1px;"'?>
       class="span-hiden">首页</a>
    <span class="span-hiden"></span>
    <a href="./course.php?nav=2" class="drop-down" target="_blank" <?PHP if(isset($_GET['nav']) && $_GET['nav']==2) echo 'style="border-bottom:1px solid red;padding-bottom:1px;"' ?>>课程</a>
    <div class="drop-down-content">
        <ul >
            <li><a href="#"></a></li>
            <li><a href="./course.php?nav=2">产品经理培训</a></li>
            <li><a href="./blockchain_2.php?nav=2">区块链技术培训</a></li>
            <li><a href="./qklpm.php">区块链产品经理培训</a></li>
        </ul>
    </div>
    <span class="span-hiden"></span>
    <a href="./team.php?nav=3" target="_blank" class="span-hiden" <?PHP if(isset($_GET['nav']) && $_GET['nav']==3) echo 'style="border-bottom:1px solid red;padding-bottom:1px;"' ?>>讲师</a>
    <span></span>
    <a href="./question.php?nav=4" target="_blank" class="span-hiden" <?PHP if(isset($_GET['nav']) && $_GET['nav']==4) echo 'style="border-bottom:1px solid red;padding-bottom:1px;"' ?>>关于我们</a>
</div>