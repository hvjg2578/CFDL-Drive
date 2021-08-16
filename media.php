<?php 
// include("config.php"); 
// include("header.php")
include("function.php");
global $information;
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php global $information; echo $information['site_title']; ?></title>
    <meta name="description" content="<? echo $information['description'];?>">
    <meta name="keyword" content="<? echo $information['keyword'];?>">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"/>
</head>
<body>
<script src="//cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"></script>
<script>
    function goup()
    {
        window.history.go(-1);
    }
</script>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	<div class="navbar-header">
		<a class="navbar-brand" href="#"><? echo $information['site_title']; ?></a>
	</div>
	<div>
		<ul class="nav navbar-nav">
			
				</ul>
			</li>
		</ul>
	</div>
	</div>
</nav>
<?php
   echo "<div class=container>";
   echo "<a class='btn btn-warning' onclick=goup() >返回上一级</a>";
   if($rewrite)
   {
       echo "<a class='btn btn-warning' href='".$information['site_url'] .$_GET['url'] ."'".'>'."下载此文件</a>";
   }
   else
   {
       echo "<a class='btn btn-warning' href=".$information['site_url']."?f=" .urlencode($_GET['url']) .'>'."下载此文件</a>";
   }
  
  if(checkvalue(".jpg",$_GET['url']) || checkvalue(".png",$_GET['url']) || checkvalue(".gif",$_GET['url']))
  {
      echo "<img height=100% src='".$information['site_url'] .$_GET['url']."'" .'>'."</img></div>";
  }
  else if(checkvalue(".mp4",$_GET['url']) || checkvalue(".webp",$_GET['url']) || checkvalue(".ogg",$_GET['url']))
  {
      echo "<video controls autoplay width=100% src='".$information['site_url'] .str_replace("./","/",$localdir.$_GET['url']) ."'".'>'."</video></div>";
  }
  else if(checkvalue(".xml",$_GET['url']))
  {

        echo "<div class=container style=height:700px><iframe style='height:100%;width:100%;' src='".$information['site_url'].$_GET["url"]."'".'>'."</iframe></div>";
  }
  else if(checkvalue(".mp3",$_GET['url'])||checkvalue(".wav",$_GET['url'])||checkvalue(".mid",$_GET['url'])||checkvalue(".midi",$_GET['url'])||checkvalue(".aiff",$_GET['url'])||checkvalue(".au",$_GET['url'])||checkvalue(".m4a",$_GET['url']))
  {
      echo "<embed controls autoplay width=100% src='".$information['site_url'] .str_replace("./","/",$localdir).$_GET['url'] ."'".'>'."</video></div>";
  }
  else if(checkvalue(".ppt",$_GET['url']) ||checkvalue(".pptx",$_GET['url'])||checkvalue(".doc",$_GET['url']) ||checkvalue(".docx",$_GET['url'])||checkvalue(".xls",$_GET['url'])||checkvalue(".xlsx",$_GET['url']))
  {
        $srcurl= $information['site_url'].str_replace("./","/",$localdir).$_GET["url"];
        $srcurl=urlencode($srcurl);
        $fileurl= "https://view.officeapps.live.com/op/embed.aspx?src=".$srcurl;
        echo "<div class=container style=height:700px><iframe  width='100%' height='800px' frameborder='0' src='".$fileurl."'".'>'."</iframe></div>";
 
  }
   
?>
</body>