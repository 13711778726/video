<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="/video/Public/static/Home/css/scojs.css" rel="stylesheet">
  <link href="/video/Public/static/Home/css/colpick.css" rel="stylesheet">
  <link href="/video/Public/static/Home/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="/video/Public/static/Home/css/main.css">
<!--   <link rel="stylesheet" href="../dist/css/danmuplayer.css"> -->
</head>
<body>
<div id="danmup" style="left: 50%;margin-left:-400px;top:100px">


</div>
<div style="display: none">
  <span class="glyphicon" aria-hidden="true">&#xe072</span>
  <span class="glyphicon" aria-hidden="true">&#xe073</span>
  <span class="glyphicon" aria-hidden="true">&#xe242</span>
  <span class="glyphicon" aria-hidden="true">&#xe115</span>
  <span class="glyphicon" aria-hidden="true">&#xe111</span>
  <span class="glyphicon" aria-hidden="true">&#xe096</span>
  <span class="glyphicon" aria-hidden="true">&#xe097</span>
</div>


</body>
<script src="/video/Public/static/Home/js/jquery-2.1.4.min.js"></script>
<script src="/video/Public/static/Home/js/jquery.shCircleLoader.js"></script>
<script src="/video/Public/static/Home/js/sco.tooltip.js"></script>
<script src="/video/Public/static/Home/js/colpick.js"></script>
<script src="/video/Public/static/Home/js/jquery.danmu.js"></script>
<script src="/video/Public/static/Home/js/main.js"></script>
<!--<script src="../dist/js/danmuplayer.min.js"></script>-->
<script>
  $("#danmup").DanmuPlayer({
    src:"/video/Public/static/Home/img/1.mp4",
    height: "480px", //区域的高度
    width: "800px" //区域的宽度
    ,urlToGetDanmu:"query.php"
    ,urlToPostDanmu:"stone.php"
  });

  $("#danmup .danmu-div").danmu("addDanmu",[
    { "text":"这是滚动弹幕" ,color:"white",size:1,position:0,time:2}
    ,{ "text":"我是帽子绿" ,color:"green",size:1,position:0,time:3}
    ,{ "text":"哈哈哈啊哈" ,color:"black",size:1,position:0,time:10}
    ,{ "text":"这是顶部弹幕" ,color:"yellow" ,size:1,position:1,time:3}
    ,{ "text":"这是底部弹幕" , color:"red" ,size:1,position:2,time:9}
    ,{ "text":"大家好，我是伊藤橙" ,color:"orange",size:1,position:1,time:3}

  ])
</script>
</html>