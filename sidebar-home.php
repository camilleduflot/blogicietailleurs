<div class="col-md-3" id="sidebar">
   <ul>
      <?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-home') ) :
      endif; ?>
   </ul>
</div>