<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set("PRC");
session_start();
include_once('lib/mysql.class.php');
include_once('lib/user.class.php');
include_once('include/config.php');

//print_r($o);

$mysql = new mysql;

$sql = array(
    'table' => 'video',
    'order' => 'uid desc'
//    , 'condition' => "play = 1"
);

$players = $mysql->select($sql);

$player1 = 72587511;
$player2 = 50326584;
$player1 = 28446475; //【Ｈome娱乐】萌小美Ｍｏｎｋｅｙ❤直播间 新浪微博“萌小美Monkey”求关注
$player1 = 99678367; //quan

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>琦益直播</title>
    <meta name="keywords" content="主播，主持人，直播，琦益" />
    <meta name="description" content="琦益直播，由万达信息科技有限公司倾力打造，是你展示自我的舞台！" />
    <link href="css/head.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
<?php include_once('include/head.php'); ?>


<div class="pk">
    <div class="mian">

        <div class="chat"></div>
        <div class="player left">
            <embed src="http://v.ireoo.com/app/video/play.swf?uid=xyz123" type="application/x-shockwave-flash" style="width:400px; height: 300px";>
        </div>
        <div class="player right">
            <embed src="http://v.ireoo.com/app/video/play.swf?uid=xyz123" type="application/x-shockwave-flash" style="width:400px; height: 300px";>
        </div>

    </div>
</div>

<div class="background">
    <div class="mian">

        <ul class="list">
            <?php foreach($players as $key => $value) { $v = $value['video']; ?><li><a target="player" href="/<?php echo $v['uid']; ?>"><img src="http://ireoo.com/uploads/u/a<?php echo $v['uid']; ?>.jpg" /></a></li><?php } ?>
        </ul>

        <ol>
            <a class="reload"><i></i></a><a class="login" href="login"><i></i></a><a class="reg" href="reg"><i></i></a>
        </ol>

        <div class="clear"></div>

    </div>
</div>

</body>
</html>
