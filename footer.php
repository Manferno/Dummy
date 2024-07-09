<!-- FOOTER -->






    <div id="vue-helper"></div> <?php ####### NO ELIMINAR O MODIFICAR ESTA LÍNEA ?>
</section> <?php // Closes website-global ?>



<script>
    var staticRoute     = "<?php echo get_stylesheet_directory_uri(); ?>/static/img/";
    var adminAjx        = "<?php echo admin_url('admin-ajax.php') ?>";
    var ajaxurl        	= "<?php echo admin_url('admin-ajax.php') ?>";
    var blog        	= "<?php echo get_bloginfo('url') ?>";
</script>

<?php    
    wp_footer();
?>

</body>
</html>