<?php
$score = $_GET["score"];
$scorex = explode(":", $score);
$highscore = $scorex[0];
?>
<html>
<head>
<title>The Lost Queen HighScore</title>
<meta property="og:title" content="Highscore on The Lost Queen is <?echo $score;?>!"/>
<meta property="og:image" content="https://rawcdn.githack.com/linggar95/share/95f1c70f37dbe3479f8f84cb0ab2c81e2a78a62a/icon2.png"/>
<meta property="og:site_name" content="The Lost Queen"/>
<meta property="og:description" content="<?echo $score;?> is mine new highscore on The Lost Queen How far do you think you can get? Try it for free!"/> 
</head>
<body>
<meta http-equiv="refresh" content="0;URL=http://www.yoursite.com" /
</body>
</html>
