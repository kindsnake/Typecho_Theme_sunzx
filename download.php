<?php
/**
 * 下载页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('header.php');
?>
<div class="contenter">
    <div class="download">
        <h1><?php $this->title() ?></h1>
         <?php $this->content(); ?>
	</div>
</div> 
<?php $this->need('footer.php'); ?>
