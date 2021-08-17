<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php if (!empty($page_title)) echo $page_title . " - ";
            echo $information["site_title"]; ?></title>
    <meta name="description" content="<? echo $information['description'];?>">
    <meta name="keyword" content="<? echo $information['keyword'];?>">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"/>
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
	@keyframes myfirst
{
	0%   {width:0px;visibility: hidden;opacity: 1;}
	/*25%  {display:none;}*/
	/*50%  {background:blue;}*/
	100% {width:100%;visibility: visible;opacity: 1;}
}

@-moz-keyframes myfirst /* Firefox */
{
	0%   {background:red;}
	/*25%  {background:yellow;}*/
	/*50%  {background:blue;}*/
	100% {background:green;}
}

@-webkit-keyframes myfirst /* Safari and Chrome */
{
	0%   {background:red;}
	/*25%  {background:yellow;}*/
	/*50%  {background:blue;}*/
	100% {background:green;}
}

@-o-keyframes myfirst /* Opera */
{
	0%   {background:red;}
	/*25%  {background:yellow;}*/
	/*50%  {background:blue;}*/
	100% {background:green;}
}
	
.footer-V{
    background: #333;
    flex: 0 0 auto;
}
	    .foot-container_2X1Nt {
	       /*width: 100%;*/
    height:100px;   /* footer的高度一定要是固定值*/ 
    /*position:absolute;*/
    bottom:0px;
    text-align: left;
    height: 42px;
    line-height: 42px;
    border-top: none;
    margin-top: 0;
    background: #f5f6f5;
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
<body>
<script src="//cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"></script>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	<div class="navbar-header">
		<a class="navbar-brand" href="#"><? echo $information["site_title"]; ?></a>
	</div>
	<div>
		<ul class="nav navbar-nav">
				</ul>
			</li>
		</ul>
	</div>
	</div>
</nav>
