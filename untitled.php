
<!-- category-->



             
<!--category-->



















<div class="col-sm-6">
                  <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                  <article>
                    <div class="post">
                    <div class="image"></div>
                      <?php the_post_thumbnail('thumbnail', array("class" => "img-responsive")); ?>
                    <div class="date">
                      <?php the_date(); ?></div>
                      <p class="post-title">
                        <?php the_title(); ?> </p>
                    </div>
                  <?php endwhile; ?>
                </article>
                <?php endif; ?>
                </div>
              </div>

              <div class="row"> 
                <div class="col-sm-6">
                     <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                  <article>
                    <div class="post">
                    <div class="image"></div>
                      <?php the_post_thumbnail('thumbnail', array("class" => "img-responsive")); ?>
                    <div class="date">
                      <?php the_date(); ?></div>
                    <p class="post-title">
                      <?php the_title(); ?> </p>
                    </div>
                  <?php endwhile; ?>
                  </article>
                  <?php endif; ?>
                </div>


                <div class="col-sm-6">
                   <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                  <article>
                      <div class="post">
                      <div class="image"></div>
                        <?php the_post_thumbnail('thumbnail', array("class" => "img-responsive")); ?>
                      <div class="date">
                        <?php the_date(); ?></div>
                      <p class="post-title">  
                        <?php the_title(); ?> </p>
                      </div>
                    <?php endwhile; ?>             
                  </article>
                  <?php endif; ?>
                </div>
              </div>



<!-- contenu dans category -->
              <?php twentytwelve_content_nav( 'nav-below' );?>
          <?php else : ?>
          <?php get_template_part( 'content', 'none' ); ?>
          <?php endif; ?>