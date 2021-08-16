<!--本程序由Chuanrui（hvjg2578）编写-->
<!--尊重版权，请勿删除Powered By版权提示-->
<?php
$rewrite = true;//目前伪静态功能部署不完善，请勿更改此值
$localdir = './files';//文件存放地址
$information=array();
$information["site_title"] = "CFDL System-Demo";//站点名称
$information['description'] = '';//站点描述
$information['keyword'] = '';//站点关键词，用','分割
$information['download_max_speed'] = 4096;//单个文件下载限速，单位：KB/S
$information['Dirpassword'] = "ChuanruiDirPassword.txt";//目录密码文件名称（强烈建议更改此文件名称！）
$information['beian'] = "XICP备xxxxxxxx号";//备案号
$information["site_url"]="";

    if ($information["site_url"] == '') 
    {
        $information["site_url"] = get_http_type() . $_SERVER['HTTP_HOST'];
    }
    
