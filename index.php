<?php
/**
 * 这是 Typecho 1.0 系统的一套皮肤，用于个人简历
 * 
 * @package Sunzx Theme 
 * @author Kindsnake
 * @version 0.4
 * @link http://www.sunzexiang.com
 * @date 07/28/2017
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<div class="contenter">
    <div class="content">
        <h1><?php $this->title() ?></h1>
            <?php $this->content(); ?>
	</div>
</div> 

<?php $this->need('footer.php'); ?>