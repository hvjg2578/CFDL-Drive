<?php
//本程序由Chuanrui（hvjg2578）编写
//尊重版权，请勿删除页脚“Powered By”提示
function scandirs($dirvalue)
{
    global $localdir,$f,$rewrite,$information;
    $dir = scandir($localdir . $f,1);
                    // $dir = scandir($localdir . 1);
                    foreach ($dir as $value) 
                    {
                        global $information,$pathdes,$readme;
                        if ($value == "readme.md")
                        {
                            $readme=file_get_contents($localdir . $f."/".$value);
                            // echo $readme;
                            // echo $localdir . $f."/".$value;
                            
                            continue;
                        }
                        
                        $sub_path = $localdir . $f . '/' . $value;
                        if ($value == '.' || $value == '..' || $value == $information["Dirpassword"]) 
                        {
                            continue;
                        } 
                        else 
                        {
                            echo '<tr>';
                            if (is_dir($sub_path)) 
                            {
                                $download_p = '';
                                $size = 'Dir';
                                if($dirvalue=="files")
                                {
                                    continue;
                                }
                            } 
                            else
                            {
                                if($dirvalue=="dir")
                                {
                                    continue;
                                }
                                $download_p = 'download="' . $value . '"';
                                $size = size_unit(filesize($sub_path));
                            }
                            if ($rewrite==true) 
                            {
                                
                                if(is_dir($sub_path))
                                {
                                    
                                    echo '<td><i class="mdui-icon material-icons">&#xe2c7;</i><a href="' . $information['site_url']  . str_replace("//", "/", $f . '/' . $value) . '" ' . $download_p . '>' ." &nbsp; ". $value . '</a></td>';
                                }
                                else
                                {
                                 if(checkvalue(".png",$value)==true || checkvalue(".jpg",$value)==true || checkvalue(".gif",$value)==true)
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                        
                                    }
                                    else if(checkvalue(".mp4",$value) || checkvalue(".webp",$value) || checkvalue(".ogg",$value))
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    }
                                    else if(checkvalue(".xml",$value)==true)
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    }
                                    else if(checkvalue(".ppt",$value) ||checkvalue(".pptx",$value)||checkvalue(".doc",$value) ||checkvalue(".docx",$value)||checkvalue(".xls",$value)||checkvalue(".xlsx",$value))
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    } 
                                    else if(checkvalue(".mp3",$value)||checkvalue(".wav",$value)||checkvalue(".mid",$value)||checkvalue(".aiff",$value)||checkvalue(".midi",$value)||checkvalue(".au",$value)||checkvalue(".m4a",$value))
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    }
                                    else if(checkvalue(".md",$value))
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    } 
                                    else 
                                    {
                                        if($rewrite==true)
                                        {
                                            echo '<td><i class="mdui-icon material-icons">&#xe8d2;</i><a href="' . $information['site_url'] . str_replace("//", "/", $f . '/' . $value) . '" ' . $download_p . '>' ." &nbsp; ". $value . '</a></td>';
                                        }
                                        else
                                        {
                                            echo '<td><i class="mdui-icon material-icons">&#xe8d2;</i><a href="' . $information['site_url'] . '?f=' . str_replace("//", "/", $f . '/' . $value) . '" ' . $download_p . '>' ." &nbsp; ". $value . '</a></td>';
                                        }
                                    
                                        
                                    }
                                }
                            }
                            else 
                            {
                                
                                if(is_dir($sub_path))
                                {
                                    
                                    echo '<td><i class="mdui-icon material-icons">&#xe2c7;</i><a href="' . $information['site_url'] . '?f=' . str_replace("//", "/", $f . '/' . $value) . '" ' . $download_p . '>' ." &nbsp; ". $value . '</a></td>';
                                }
                                else
                                {
                                    if(checkvalue(".png",$value)==true || checkvalue(".jpg",$value)==true || checkvalue(".gif",$value)==true)
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                        
                                    }
                                    else if(checkvalue(".mp4",$value) || checkvalue(".webp",$value) || checkvalue(".ogg",$value))
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    }
                                    else if(checkvalue(".xml",$value)==true)
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    }
                                    else if(checkvalue(".ppt",$value) ||checkvalue(".pptx",$value)||checkvalue(".doc",$value) ||checkvalue(".docx",$value)||checkvalue(".xls",$value)||checkvalue(".xlsx",$value))
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    } 
                                    else if(checkvalue(".mp3",$value)||checkvalue(".wav",$value)||checkvalue(".mid",$value)||checkvalue(".aiff",$value)||checkvalue(".midi",$value)||checkvalue(".au",$value)||checkvalue(".m4a",$value))
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    }
                                    else if(checkvalue(".md",$value))
                                    {
                                        $siteurl=str_replace("//", "/", $f . '/' . $value);
                                        $siteurl=urlencode($siteurl);
                                        $imgurl=$information['site_url'] . '/media.php?url=' .$siteurl ;
                                        printbutton($value,$imgurl);
                                    } 
                                    else
                                    {
                                        if($rewrite==true)
                                        {
                                            echo '<td><i class="mdui-icon material-icons">&#xe8d2;</i><a href="' . $information['site_url'] . str_replace("//", "/", $f . '/' . $value) . '" ' . $download_p . '>' ." &nbsp; ". $value . '</a></td>';
                                        }
                                        else
                                        {
                                            echo '<td><i class="mdui-icon material-icons">&#xe8d2;</i><a href="' . $information['site_url'] . '?f=' . str_replace("//", "/", $f . '/' . $value) . '" ' . $download_p . '>' ." &nbsp; ". $value . '</a></td>';
                                        }
                                    
                                        
                                    }
                                }
                                
                            }
                            echo '<td>' . $size . '</td>';
                            echo '<td>' . date("Y-m-d H:i:s", filemtime($sub_path)) . '</td>';
                            echo '</tr>';
                        }
                        
                    }
                    
} 

function get_http_type()
{
    $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
    return $http_type;
}

function printbutton($value,$imgurl)
{
    if(checkvalue(".png",$value)||checkvalue(".jpg",$value)||checkvalue(".gif",$value))
    {
        print<<<EOT
<td><i class="mdui-icon material-icons">&#xe1bc;</i><a href=$imgurl> &nbsp;  $value</a></td>
EOT;
    }else if (checkvalue(".mp4",$value)||checkvalue(".webp",$value)||checkvalue(".gif",$value))
    {
        print<<<EOT
<td><i class="mdui-icon material-icons">&#xe639;</i><a href=$imgurl> &nbsp;  $value</a></td>
EOT;
    }
    else if (checkvalue(".mp3",$value)||checkvalue(".wav",$value)||checkvalue(".mid",$value)||checkvalue(".aiff",$value)||checkvalue(".midi",$value)||checkvalue(".au",$value)||checkvalue(".m4a",$value))
    {
        print<<<EOT
<td><i class="mdui-icon material-icons">&#xe405;</i><a href=$imgurl> &nbsp;  $value</a></td>
EOT;
    }
    else if (checkvalue(".md",$value))
    {
        print<<<EOT
<td><i class="mdui-icon material-icons">&#xe23f;</i><a href=$imgurl> &nbsp;  $value</a></td>
EOT;
    }
    else
    {
        print<<<EOT
<td><i class="mdui-icon material-icons">&#xe24d;</i><a href=$imgurl> &nbsp;  $value</a></td>
EOT;
    }
    
    
}
function printimages($value,$nums)
{
    print<<<EOT

<td><i class="glyphicon glyphicon-file"></i><a mdui-dialog={target:'#example-$nums'}> &nbsp;  $value</a></td>
EOT;
}
function checkvalue($abb,$value1)
{
    if(count(explode($abb,$value1))>1)
    {
        return true;
    }
    else 
    {
        return false;
    }
};

function size_unit($num){
    $p = 0;
    $format='Byte';
    if($num>0 && $num<1024){
        $p = 0;
        return number_format($num).' '.$format;
    }
    if($num>=1024 && $num<pow(1024, 2)){
        $p = 1;
        $format = 'KB';
    }
    if ($num>=pow(1024, 2) && $num<pow(1024, 3)) {
        $p = 2;
        $format = 'MB';
    }
    if ($num>=pow(1024, 3) && $num<pow(1024, 4)) {
        $p = 3;
        $format = 'GB';
    }
    if ($num>=pow(1024, 4) && $num<pow(1024, 5)) {
        $p = 3;
        $format = 'TB';
    }
    $num /= pow(1024, $p);
    return number_format($num, 3).' '.$format;
}
