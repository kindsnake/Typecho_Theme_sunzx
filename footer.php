<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="footer">
	<p>
		Copyright&copy;2012-<?php echo date("Y")?>, 孙泽祥, All Rights Reserved.<br />
                北京市朝阳区北辰西路1号院5号，100101，Email: mail(at)sunzexiang.com<br />
                <a href="/admin/login.php" title="管理登陆" target="_black">管理登陆</a>&nbsp;|&nbsp;最后更新时间：2017年7月23日
	</p>
</div>
</div>

<?php if ($this->is('page', 'introduction')):?>
<script type="text/javascript" src="/usr/themes/sunzx/js/jquery.min.js"></script>
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
<script type="text/javascript" src="/usr/themes/sunzx/js/jquery.min.js"></script>
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

</body>
</html>