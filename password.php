<!DOCTYPE html>
<div class=container>
    <h1>该目录已被密码保护</h1>
    <h2>请输入密码：</h2>
    <form class="form-group" method="post" action="<?php if($rewrite==false){echo "?f=";} echo $f?>">
        <input type=password name="password">
        <input class="btn btn-default" type=submit value="确定">
    </form>
</div>