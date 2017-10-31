<?php
/**
 * Page for English
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header-en.php');
?>

<div class="contenter">
    <div class="content">
        <h1><?php $this->title() ?></h1>
            <?php $this->content(); ?>
	</div>
</div> 

<?php $this->need('footer-en.php'); ?>
