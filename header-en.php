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
Zexiang Sun
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
        <a id="logo" href="<?php $this->options->siteUrl('introduction-en.html'); ?>">
            <?php if ($this->options->logoUrl): ?>
                <img src="<?php $this->options->logoUrl() ?>" alt="Zexiang Sun" />
            <?php endif; ?>
            Zexiang Sun
        </a>
        <p class="description">A personal website</p>
    </div>
    <div class="top-link">
        <a href="http://www.sunzx.net/" title="Click here to visit my blog" target="_black">My Blog</a> | 
        <a href="<?php $this->options->siteUrl('album.html'); ?>" title="Album">Album</a> | 
        <a href="<?php $this->options->siteUrl('Download.html'); ?>" title="Download">Download</a> | 
        <a href="<?php $this->options->siteUrl('flink.html'); ?>" title="Friendly links">Friendly links</a> | 
        <a href="<?php $this->options->siteUrl(); ?>" title="点击此处访问中文版">中文版</a>
    </div>
</div>

<div class="nav-contenter">
<div class="nav">
<ul>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
    <?php if (strpos($pages->slug,'-en') == true): ?>
        <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
    <?php endif; ?>
<?php endwhile; ?>
</ul>
</div>
</div>

