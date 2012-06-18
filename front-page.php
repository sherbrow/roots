<?php 
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div class="<?php echo FULLWIDTH_CLASSES; ?>">
      <div id="main" class="<?php echo HUBARTICLE_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
      </div><!-- /FULLWIDTH_CLASSES -->
    <?php roots_main_after(); ?>
	  <div id="hub" class="" role="main">
	  <?php dynamic_sidebar('sidebar-hub'); ?>
	  </div><!-- /#hub -->
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>