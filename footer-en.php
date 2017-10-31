<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="footer">
	<p>
		Copyright&copy;2012-<?php echo date("Y")?>, Zexiang Sun, All Rights Reserved.<br />
        NO. 1, Beichen West Road, Chaoyang District, Beijing 100101, P.R.China.<br />
        Email: mail(at)sunzexiang.com<br />
        <a href="/admin/login.php" title="Click here to login for web master." target="_black">Login</a>&nbsp;|&nbsp;Updated on July 25th, 2017.
	</p>
</div>
</div>

<?php if ($this->is('page', 'introduction'||'album')):?>
<script type="text/javascript" src="/usr/themes/sunzx/js/jquery.min.js"></script>
<script type="text/javascript" src="/usr/themes/sunzx/js/jquery.flexslider.js"></script>
<?php endif ?>
<?php if ($this->is('page', 'introduction')):?>
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
