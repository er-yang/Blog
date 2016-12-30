<?php
/*
Template Name:起点
Description:尼玛出品，必属精品
Version:1.0
Author:吴尼玛
Author Url:http://nimaboke.com
Sidebar Amount:0
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link media='screen' type='text/css' rel='stylesheet' href='<?php echo TEMPLATE_URL; ?>css/main.css'/>
<meta name="themename" content="127002"/>
<meta charset="utf-8"/>
<title><?php echo $site_title; ?></title>
<meta name="Keywords" content="<?php echo $site_key; ?>"/>
<meta name="Description" content="<?php echo $site_description; ?>"/>
<style>
/* 
 * 自定义主题
 */
/* 每页文章数量 */
/* 文章显示摘要 */
body{background-color:#232327;}
body{background-attachment:fixed;}
.m-hdtop{background-color:#666;}
.m-hdtop{background-image:url(<?php echo TEMPLATE_URL; ?>images/bg.jpg);}
.m-ttl a{color:#fff;}
.m-about{color:#fff;}
/* 正文字号12px 默认 */
</style>
<!--[if gte IE 8]>
<style>
/* 以下代码只对有环绕需求的内容使用。副作用：导致ul和ol的每一个li只有一行 */
.m-post-leftimg .text ul,
.m-post-leftimg .text ol,
.m-detail-leftimg .text ul,
.m-detail-leftimg .text ol{padding-left:0;}
.m-post-leftimg .text ul li,
.m-detail-leftimg .text ul li{list-style:disc inside none;}
.m-post-leftimg .text ol li,
.m-detail-leftimg .text ol li{list-style:decimal inside none;}
.m-post-leftimg .text ul li p,
.m-post-leftimg .text ol li p,
.m-detail-leftimg .text ul li p,
.m-detail-leftimg .text ol li p{vertical-align:bottom;*vertical-align:baseline;display:-moz-inline-box;display:inline-block;*display:inline;zoom:1;margin:0;}
.m-post-leftimg .text ul li,
.m-post-leftimg .text ol li,
.m-detail-leftimg .text ul li,
.m-detail-leftimg .text ol li{overflow:hidden;height:27px;line-height:27px;padding-left:2px;}
.m-post-leftimg .text ul li p,
.m-post-leftimg .text ol li p,
.m-detail-leftimg .text ul li p,
.m-detail-leftimg .text ol li p{overflow:hidden;width:90%;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis;word-break:keep-all;}
</style>
<![endif]-->
</head>
<body class="p-homepage">
<div class="g-doc box">
	<div class="g-hd">
		<div class="m-hdtop">
			<h1 class="m-ttl">
				<a href="/"><?php echo $blogname; ?></a>
			</h1>
			
			<p class="m-about"><?php echo $bloginfo; ?></p>
			
		</div>
		<div class="m-hdbtm">
			<ul class="m-nav">
			<?php blog_navi();?>
				<!-- Search -->
				<li class="m-sch">
					<form class="form" target="_blank" action="<?php echo BLOG_URL; ?>index.php" method="get">
						<input type="text" name="keyword" class="txt" value="搜索" onfocus="if(this.value=='搜索'){this.value='';}" onblur="if(this.value==''){this.value='搜索';}"/>
					</form>
				</li>
			</ul>
		</div>
	</div>