<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- 页脚 -->
<div class="footer">
	<p>
		Copyright&copy;2012-<?php echo date("Y")?>, 孙泽祥, All Rights Reserved.<br />
        北京市朝阳区北辰西路1号院5号，100101，Email: mail(at)sunzexiang.com<br />
        <a href="/admin/login.php" title="管理登陆" target="_black">管理登陆</a>&nbsp;|&nbsp;最后更新时间：2017年7月23日
	</p>
</div>
<!-- /页脚 -->
</div>
<!-- 根据当前页面的名称，加载js文件，用于显示图片幻灯片 -->
<?php if ($this->is('page', 'introduction')):?>
    <script type="text/javascript" src="/usr/themes/sunzx/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/usr/themes/sunzx/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,
            });
        });
    </script>
<?php endif ?>

<?php if ($this->is('page', 'album')):?>
    <script type="text/javascript" src="/usr/themes/sunzx/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/usr/themes/sunzx/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(function() {
            SyntaxHighlighter.all();
        });
        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 200,
                itemMargin: 5,
                asNavFor: '#slider'
            });
            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                start: function(slider) {
                }
            });
        });
    </script>
<?php endif ?>
<!-- 根据当前页面的名称，加载js文件，用于显示图片幻灯片 -->
<?php if ($this->is('post')):?>
    <script type="text/javascript" src="/usr/themes/sunzx/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="/usr/themes/sunzx/js/jquery.imgbox.pack.js"></script>
    <script>
        $(function(){
    	    $(".imageClickZoom").imgbox({
	        	'speedIn'		: 250,
	        	'speedOut'		: 250,
	        	'alignment'		: 'center',
	        	'overlayShow'	: true,
		        'allowMultiple'	: false
	        });
        });
    </script>
<?php endif ?>

</body>
</html>
