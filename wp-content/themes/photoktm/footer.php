<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div class="clearfix"></div>
<div class="footer-full text-center">
	© photo.circle 2015
</div>
<?php wp_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.jcarousel.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jcarousel.responsive.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/holder.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
<script  type="text/javascript">
$(document).ready(function(){
    $(".date-list").click(function(){
        var a_id = $(this).attr('id');
        $.ajax({  
		    type: 'POST',  
		    url: '<?php echo esc_url( get_template_directory_uri() ); ?>/schedule-event.php', 
		    data: { id: a_id },
		    success: function(response) {
		        $('.result').html(response);
		    }
		});
        //$(".result").load("<?php echo esc_url( get_template_directory_uri() ); ?>/schedule-event.php",function(data){
	//example of callback
//	console.log(data);
//});
    });
});
 </script>
</body>
</html>
