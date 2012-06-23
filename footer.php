
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <div class="<?php echo CONTAINER_CLASSES; ?>">
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="<?php echo CONTAINER_CLASSES; ?>">
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('sidebar-footer2'); ?>
    </div>
    <p class="copy" style="text-align: center;"><small><a href="http://copyheart.org/" target="_blank">♡ Copyheart</a> - <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Copying is an act of love. Please copy and share.</small></p>
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>
</html>