/**
 * Created by Administrator on 2017-06-03.
 */
$(".drop-down").mouseover(function(){
    $(".drop-down-content").show();
});

$(".drop-down-content").mouseover(function(){
    $(".drop-down-content").show();
}).mouseout(function () {
    $(".drop-down-content").hide();
});

$(".span-hiden").mouseover(function(){
    $(".drop-down-content").hide();
})