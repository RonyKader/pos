
<section class="main-container">
	<!--Footer Start Here -->
	<footer class="footer-container">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-md-6 col-sm-6">
	                <div class="footer-left">
	                    <span>© 2015 <a href="">CodeNinja</a></span>
	                </div>
	            </div>
	            <div class="col-md-6 col-sm-6">
	                <div class="footer-right">
	                    <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="">CodeNinja</a></span>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
	<!--Footer End Here -->
</section>
<!--Rightbar End Here-->
<script src="<?php echo base_url();?>/assets/js/lib/jquery.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery-migrate.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/bootstrap.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.ui.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jRespond.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/nav.accordion.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/hover.intent.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/hammerjs.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.hammer.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.fitvids.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/scrollup.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/smoothscroll.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.syntaxhighlighter.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/velocity.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery-jvectormap.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery-jvectormap-world-mill.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery-jvectormap-us-aea.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/smart-resize.js"></script>
<!--iCheck-->
<script src="<?php echo base_url();?>/assets/js/lib/icheck.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.switch.button.js"></script>
<!--CHARTS-->
<script src="<?php echo base_url();?>/assets/js/lib/chart/sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/easypie/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/excanvas.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/curvedLines.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/jquery.flot.stack.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/jquery.flot.axislabels.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/chart/flot/jquery.flot.pie.min.js"></script>
<!--Forms-->
<script src="<?php echo base_url();?>/assets/js/lib/jquery.maskedinput.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.validate.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.form.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/j-forms.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/jquery.loadmask.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/vmap.init.js"></script>
<script src="<?php echo base_url();?>/assets/js/lib/theme-switcher.js"></script>
<script src="<?php echo base_url();?>/assets/js/apps.js"></script>
<script>
	$("#checkAll").change(function () {
	    $("input:checkbox").prop('checked', $(this).prop("checked"));
	});
</script>
<script type="text/javascript">
function menuChk(key)
{
    if(document.getElementById('menu_id'+key).checked==true){
        $('#sub_div'+key).show();
        $("td[name='optionTd"+key+"'] input:checkbox").attr('checked','checked');
        //$('#sub_div'+key+' input').attr('checked','checked');
    }
    else{
        $('#sub_div'+key).hide();
        $("td[name='optionTd"+key+"'] input:checkbox").removeAttr('checked','checked');
        $('#sub_div'+key+' input').removeAttr('checked','checked');
    }
}
</script>
</body>
</html>