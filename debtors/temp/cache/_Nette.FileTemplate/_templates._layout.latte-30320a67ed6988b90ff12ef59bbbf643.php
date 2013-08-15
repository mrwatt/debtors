<?php //netteCache[01]000398a:2:{s:4:"time";s:21:"0.92550200 1376607248";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:76:"/data/web/virtuals/47669/virtual/www/subdom/daty/app/templates/@layout.latte";i:2;i:1376607248;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"80a7e46 released on 2013-08-08";}}}?><?php

// source file: /data/web/virtuals/47669/virtual/www/subdom/daty/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'btfmtydbdt')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Dlužníci</title>
</head>

<body>
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
<style>
*{
	margin:0;
	padding:0;
	font-family:Arial;
}
table{
	margin:30px 30px;
	border-spacing:0;
}
table th,
table td{
	height:50px;
	padding:0 10px;
	text-align:left;
	border-right:1px dotted #ccc;
	border-bottom:1px solid #ccc;
}
table th:last-child,
table td:last-child{
	border-right:none;
}
.paginator{
	left:50%;
	float:left;
	width:900px;
	height:20px;
	margin:10px 0 0 -450px;
	position:relative;
}
.paginator li{
	float:left;
	padding:0 5px 20px;
	list-style:none;
}
.paginator li a{
	color:#4d4d4d;
	text-decoration:none;
}
.active{
	font-weight:bold;
}
</style>
</body>
</html>
