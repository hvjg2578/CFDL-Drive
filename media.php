<?php 
//本程序由Chuanrui（hvjg2578）编写
//尊重版权，请勿删除页脚“Powered By”提示
include("function.php");
include("config.php");
include("Parsedown.php");
global $information;
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php global $information; echo $information['site_title']; ?></title>
    <meta name="description" content="<? echo $information['description'];?>">
    <meta name="keyword" content="<? echo $information['keyword'];?>">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"/>
	<link href="/css/prettify.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="/css/prettify.js"></script>
	<script src="/css/html5media.min.js"></script> 
	<style>
	div
{
	/*width:100px;*/
	/*height:100px;*/
	/*background:red;*/
	/*visibility: hidden;*/
	/*opacity: 1;
	animation:myfirst 0.5s;*/
	/*-moz-animation:myfirst 0.5s; /* Firefox */
	/*-webkit-animation:myfirst 0.5s;  Safari and Chrome */
	/*-o-animation:myfirst 0.5s;  Opera */
}
* {
  box-sizing: border-box;
}

.subbox table {
  /*max-width: 800px;*/
   /*border-radius: 25px;*/
  margin: 40px auto;
  text-align: left;
  border-spacing: 0;
  color: #333;
  border: 1px solid #ddd;
  border-radius: 4px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
}

.subbox td {
  padding: 8px 16px;
  font-size: 14px;
  border-bottom: 1px solid #f4f4f4;
  /*display: block;*/
}

.subbox th {
  padding: 16px;
}

.subbox img {
  width: 40px;
  border-radius: 50%;
}

.subbox tr:last-child > td {
  border: 0;
}

.subbox tbody > tr:hover {
  background-color: rgba(221, 221, 221, 0.2);
}

.subbox thead {
  text-transform: uppercase;
  font-size: 12px;
  background-color: #efefef;
  letter-spacing: 0.5px;
  color: rgba(0, 0, 0, 0.4);
}

.option {
  display: inline-block;
  padding: 5px 10px;
  background-color: #ddd;
  border-radius: 4px;
  margin-right: 15px;
}

.name {
  min-width: 110px;
  display: inline-block;
}

.comment {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 300px;
  display: inline-block;
}

a{
    color: #585858;
    /*display: block;*/
    /*text-decoration:none;*/
}
a:hover,a:active
{
	/*background-color:#7A991A;*/
	text-decoration:none;
}

.option.is-blue {
  background-color: #bceefd;
}

.option.is-orange {
  background-color: #ffd89e;
}

.option.is-purple {
  background-color: #e9cbff;
}

.option.is-green {
  background-color: #bef1a9;
}
	</style>
</head>
<body onload="prettyPrint()">
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
       echo "<a class='btn btn-success' href='".$information['site_url'] .$_GET['url'] ."'".'>'."下载此文件</a>";
   }
   else
   {
       echo "<a class='btn btn-success' href='".$information['site_url']."?f=" .urlencode($_GET['url'])."'" .'>'."下载此文件</a>";
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
      echo "<div class=container><audio controls autoplay width=100% src='".$information['site_url'] .str_replace("./","/",$localdir).$_GET['url'] ."'".'>'."</audio></div>";
  }
  else if(checkvalue(".ppt",$_GET['url']) ||checkvalue(".pptx",$_GET['url'])||checkvalue(".doc",$_GET['url']) ||checkvalue(".docx",$_GET['url'])||checkvalue(".xls",$_GET['url'])||checkvalue(".xlsx",$_GET['url']))
  {
        $srcurl= $information['site_url'].str_replace("./","/",$localdir).$_GET["url"];
        $srcurl=urlencode($srcurl);
        $fileurl= "https://view.officeapps.live.com/op/embed.aspx?src=".$srcurl;
        echo "<div class=container style=height:700px><iframe  width='100%' height='800px' frameborder='0' src='".$fileurl."'".'>'."</iframe></div>";
 
  }
  else if(checkvalue(".md",$_GET['url']))
  {
        $srcurl= $information['site_url'].str_replace("./","/",$localdir).$_GET["url"];
        $mdfile=file_get_contents($srcurl);
        $mdfile=strToUtf8($mdfile);
        echo "<div class=container>";
        echo "<div class='typo subbox table-fluid'>";
        echo "<table class='table  table-hover table-striped' style='height:90%;'><tr><th>MarkDown文件</th></tr><tr><td>";
        $Parsedown = new Parsedown();
        echo $Parsedown->text($mdfile); 
        echo "</td></tr></table></div></div>";
  }
  else if(checkvalue(".txt",$_GET['url']))
  {
        $srcurl= $information['site_url'].str_replace("./","/",$localdir).$_GET["url"];
        $handle = fopen($localdir.$_GET["url"],"r");
        $content = '';
        while(!feof($handle)){
        $content .= fread($handle, 8080);
        }
        fclose($handle);
        echo "<div class=container>";
        echo "<div class='typo subbox table-fluid'>";
        echo "<table class='table  table-hover table-striped' style='height:90%;'><tr><th>TXT文本文件</th></tr><tr><td>";
        $content=strToUtf8($content);
        echo str_replace("\r\n","<br />",$content);; 
        echo "</td></tr></table></div></div>";
  }
  else if(checkvalue(".cpp",$_GET['url'])||checkvalue(".c",$_GET['url'])||checkvalue(".java",$_GET['url'])||checkvalue(".cs",$_GET['url'])||checkvalue(".py",$_GET['url'])||checkvalue(".h",$_GET['url'])||checkvalue(".hpp",$_GET['url'])||checkvalue(".hxx",$_GET['url'])||checkvalue(".cc",$_GET['url'])||checkvalue(".cxx",$_GET['url'])||checkvalue(".html",$_GET['url'])||checkvalue(".css",$_GET['url'])||checkvalue(".php",$_GET['url'])||checkvalue(".vbp",$_GET['url'])||checkvalue(".frm",$_GET['url'])||checkvalue(".ctl",$_GET['url'])||checkvalue(".bas",$_GET['url'])||checkvalue(".cls",$_GET['url'])||checkvalue(".sql",$_GET['url'])||checkvalue(".go",$_GET['url'])||checkvalue(".json",$_GET['url'])||checkvalue(".sh",$_GET['url'])||checkvalue(".htm",$_GET['url'])||checkvalue(".cmd",$_GET['url'])||checkvalue(".bat",$_GET['url']))
  {
        $srcurl= $information['site_url'].str_replace("./","/",$localdir).$_GET["url"];
        echo "<div class=container>";
        echo "<div class='typo subbox table-fluid'>";
        echo "<table class='table  table-hover table-striped' style='height:90%;'><tr><th>Code</th></tr><tr><td><pre width=100% class='prettyprint linenums'>";
        $srcurl= $information['site_url'].str_replace("./","/",$localdir).$_GET["url"];
        $handle = fopen($localdir.$_GET["url"], 'r');
        $codefile = '';
        while(!feof($handle)){
        $codefile .= fread($handle, 8080);
        }
        fclose($handle);
        // $content=urlencode($content);
        // $codefile= str_replace("\r\n","<br />",$codefile);
        $codefile= str_replace("<","&lt;",$codefile);
        $codefile= str_replace(">","&gt;",$codefile);
        echo strToUtf8($codefile);
                echo "</pre></td></tr></table></div></div>";
  }
   
?>
</div>
</body>
