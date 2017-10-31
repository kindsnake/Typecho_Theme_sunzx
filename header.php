<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=11;IE=10;IE=9;IE=8;IE=7"; charset="utf-8" />
<!--
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
-->
<title>
<?php $this->archiveTitle(array(
                                'category'  =>  _t('分类 %s 下的文章'),
                                'search'    =>  _t('包含关键字 %s 的文章'),
                                'tag'       =>  _t('标签 %s 下的文章'),
                                'author'    =>  _t('%s 发布的文章')
                                ), '', ' - '); ?>
<?php $this->options->title(); ?>
</title>
<link rel="stylesheet" href="<?php $this->options->siteUrl('usr/themes/sunzx/style.css'); ?>">
<?php if ($this->is('page', 'introduction'||'album')):?>
    <link rel="stylesheet" href="<?php $this->options->siteUrl('usr/themes/sunzx/flexslider.css'); ?>">
<?php endif ?>
<?php $this->header(); ?>
</head>
<body>
<div class="whole-page">
<div class="header-contenter">
    <div class="title">
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <?php if ($this->options->logoUrl): ?>
                <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
            <?php endif; ?>
            <?php $this->options->title() ?>
        </a>
        <p class="description">个人网站</p>
    </div>
    <div class="top-link">
        <a href="http://1.sunzexiang.com/" title="点击访问我的一页简历" target="_black">一页简历</a> | 
        <a href="http://www.sunzx.net/" title="点击访问我的博客" target="_black">我的博客</a> | 
        <a href="<?php $this->options->siteUrl('album.html'); ?>" title="我的相册" target="_black">我的相册</a> | 
        <a href="<?php $this->options->siteUrl('download.html'); ?>" title="文件下载" target="_black">文件下载</a> |
        <a href="<?php $this->options->siteUrl('flink.html'); ?>" title="常用链接" target="_black">常用链接</a> | 
        <a href="https://en.sunzexiang.com/" title="Click here to visit the English version" target="_black">English</a>
    </div>
</div>
<div class="nav-contenter">
<div class="nav">
    <ul>
        <li><a<?php if(($this->is('index')) || ($this->is('introduction'))): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('个人简介'); ?></a></li>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
            <?php if (($pages->slug != 'album') && ($pages->slug != 'flink') && ($pages->slug != 'download') && (strpos($pages->slug,'-en') == false)): ?>
                <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endif; ?>
        <?php endwhile; ?>
</ul>
</div>
</div>
