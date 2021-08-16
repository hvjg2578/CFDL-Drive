<!--本程序由Chuanrui（hvjg2578）编写-->
<!--尊重版权，请勿删除Powered By版权提示-->
<?php
error_reporting(0);
include('header.php');
$imgnum=1;
error_reporting(0);
$f = str_replace("//", "/", $_GET['f']);
if (!is_dir($localdir . $f)) {
    if (file_exists($localdir . $f)) {
        include('download.php');
        exit;
    } else {
        include('404.php');
        exit;
    }
}

if (empty($f)) $page_title = 'Index of /';
else  $page_title = 'Index of ' . $f;

?>
<!--<?php echo $page_title ?>-->
<br>
<div class="container">
    <div class="typo table-fluid">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>文件名</th>
                    <th>文件大小</th>
                    <th>修改日期</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $localdirdes="";
                $readme="";
                // include("function.php");
                if (dirname($f) == '/') $p = '';
                else $p = dirname($f);
                if ($rewrite) 
                {
                echo '<td><a href="' . $information['site_url'] . $p . '">上级目录</a></td>';
                    
                }
                else 
                {
                    echo '<td><a href="' . $information['site_url'] . '?f=' . $p . '">上级目录</a></td>';
                    
                }
                echo '<td>Dir</td><td>' . date("Y-m-d H:i:s", filemtime($localdir . $f)) . '</td>';
                if (is_dir($localdir . $f)) 
                {
                    if ($_SERVER["REQUEST_METHOD"] == "POST")
                  {
                      if(file_exists($localdir . $f.'/'.$information["Dirpassword"]))
                    {
                        $password=file_get_contents($localdir . $f."/".$information["Dirpassword"]);
                    }
                      if($password == $_POST["password"])
                      {
                         scandirs("dir");
                         scandirs("files");
                      }
                      else
                      {
                          echo "<p style='color:red;'>密码输入错误，请重新输入</p>";
                          include("password.php");
                      }
                  }
                  
                   else if(file_exists($localdir . $f.'/'.$information["Dirpassword"]))
                    {
                        $password=file_get_contents($localdir . $f.'/'.$information["Dirpassword"]);
                        include("password.php");
                    }
                    else
                    {
                        scandirs("dir");//先输出文件夹，再输出文件
                        scandirs("files");
                    }
                }
                
                ?>
                
<footer class="navbar navbar-default navbar-fixed-bottom">
   <div class="container">
       <ul> 
      Copyright &copy; 2021    <strong><a href="//www.1314.cool/" target="_blank">Chuanrui </a></strong>&nbsp;
     All Rights Reserved. 备案号：<a target="_blank" rel="nofollow" href="https://beian.miit.gov.cn/"><? echo $information["beian"];?></a>
     Powered By <a href="//www.1314.cool/" target="_blank">Chuanrui 文件目录列表程序</a>
     <!--尊重版权，请勿删除Powered By版权提示-->
     </ul>
 </footer>
</body>
</html>
