</div>
</div>
<footer>
  <a href="#up"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
  <div class="container">
  <hr>
  <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y');?></p>
  <ul class="social-links">
    <li><a href="http://instagram.com/carterknives" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
    </li>
    <li><i class="fa fa-envelope-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#contactForm"></i>
    </li>
    <li></li>
  </ul>
</div>
</footer>
 <!-- /container -->

<div class="modal fade" tabindex="-1" role="dialog" id="contactForm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Contact Me</h4>
      </div>
      <div class="modal-body">
        <?php
        if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php wp_footer();?>
</body>
</html>
