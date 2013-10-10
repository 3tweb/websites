<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Liberty Midstream | Home</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=3.0.4" type="text/javascript"></script>
<script src="<?php echo bloginfo( 'template_directory' ) . '/scripts/menu.js'; ?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<title><?php wp_title(); ?></title>
<?php wp_head(); ?> 
</head>
<body>

<div class="header">
    <div class="h_wrapper">
        <div class="logo"><img src="<?php echo bloginfo( 'template_directory' ) . '/images/logo.png'; ?>" width="100"/></div>
        <?php 
            wp_nav_menu(array(
              'menu' => 'Main Menu', 
              'container_id' => 'cssmenu', 
              'walker' => new CSS_Menu_Maker_Walker()
            )); 
        ?>
    </div>
</div>
    
<div class="content">
	<div class="content_left">
	   <img src="<?php echo bloginfo( 'template_directory' ) . '/images/pic1.png'; ?>" width="228" />
    </div>
    <div class="content_right">
    	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div id="posts">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
                
        <?php endwhile; ?>
            
        <?php else : ?>
            <h3>Not sure what you are looking for...</h3>            
        <?php endif; ?>
	</div>
    <div class="clear"></div>
</div>
    
<div class="footer">
    <div class="c_wrap">
        <p id="copyright">copyright &copy; 2013. liberty midstream services llc.<br />designed by <a href="http://www.3tpro.com" target="_blank">3tpro.com</a></p>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
