<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-info">
            <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
                <h4 class="footer-logo"><a href="/">Linh Chi's <b>Shoppe</b> <span class="tag">Everything</span> </a></h4>
                <p><?=isset($setting['address'])? $setting['address']:''?></p>
            </div>
            <?= $this->load->widget('menu_footer'); ?>
            <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
                <div class="fb-page" data-href="https://www.facebook.com/tatcadeuhay/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tatcadeuhay/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tatcadeuhay/">Thư Viện Thông Tin</a></blockquote></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">Thông tin giỏ hàng</h4>
            </div>
            <div class="modal-body" id="cartsp">

            </div>
        </div>
    </div>
</div>
<!--//footer-->
<!--search jQuery-->
<script src="<?=CDN?>/frontend/js/main.js"></script>
<!--//search jQuery-->
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        $().UItoTop({ easingType: 'easeOutQuart' });

    });

</script>
<!--//smooth-scrolling-of-move-up-->
<!--Bootstrap core JavaScript
================================================== -->
<!--Placed at the end of the document so the pages load faster -->
<script src="<?=CDN?>/frontend/js/bootstrap.js"></script>
<script src="<?=CDN?>/frontend/js/cart.js?vs=<?=time()?>"></script>
</body>
</html>