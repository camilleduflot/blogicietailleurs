    <?php get_header(); ?>

    <div class="row">
        <div class="col-md-9">
            <section>

               <?php $my_query = new WP_Query('category_name=featured&posts_per_page=1');
                  while ($my_query->have_posts()) : $my_query->the_post();
                  $do_not_duplicate = $post->ID; ?>
                    <!-- Do stuff... -->

                   <article> 
                
                     <div class="post">
                        <div class="date">
                        <?php the_date(); ?></div>
                          <h2>
                          <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                          </h2>
                          <div class="excerpt"></div>
                          <?php the_excerpt(); ?>
                          <div class="image"></div>
                          <?php the_post_thumbnail('full', array("class" => "img-responsive")); ?>
                          <p class="post-info">
                            <?php the_date(); ?>
                          </p>                         
                     </div>
      
                    </article>
                  <?php endwhile; ?>


                  <div class="row">
                    <div class="col-md-6">
                  <?php query_posts($query_string . '&cat=-8'); ?>
                  <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article>
                        <?php if (in_category(5)) : ?>
                          <i class="fa fa-university"></i>
                        <?php elseif (in_category(6)) : ?>
                          <i class="fa fa-cloud"></i>
                        <?php elseif (in_category(4)) : ?>
                          <i class="fa fa-tag"></i>
                        <?php elseif (in_category(3)) : ?> 
                          <i class="fa fa-plane"></i>
                        <?php endif; ?>
                        <div class="image"></div>
                          
                        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array("class" => "img-responsive")); ?>
                        </a>
                        <div class="date">
                          <?php the_date(); ?></div>
                        <p class="post-title">  
                          <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                        </article>

                  <?php $counter++;
                    if ($counter % 2 == 0) {
                    echo '</div><div class="row">';
                  }
                  endwhile; ?>
                <?php endif; ?>
              </div>
              </div><!-- /row -->

                 
             

                


            <div class="col-md-12" class='suivants'>
              <p class="align-right"></p>
                <?php posts_nav_link('separator' , 'Articles précédents' , 'Articles suivants'); ?>
              <i class="fa fa-long-arrow-right align-right middle"></i>
            </div>

       
          </section>
          </div> <!-- fermeture div class col-md-9 -->

        <?php get_sidebar('second'); ?>
          
        
    </div> <!-- fermeture div class row -->


        <?php get_footer(); ?>
    </div> <!--fermeture div class container:text-align center-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
  
