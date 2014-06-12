<?php get_header(); ?>

<div class="container" style="text-align:center">
	<div class="row">
			<div class="col-md-9">
				<section>

					<div class="col-md-6">
          			
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="post">
                        <div class="image">
                          <?php the_post_thumbnail('thumbnail', array("class" => "img-responsive")); ?></div>
                        <div class="date">
                          <?php the_date(); ?></div>
                        <div class="post-title">
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>  
                        </div>
                        <div class="excerpt">
                          <?php the_excerpt(); ?></div>
                        </div>

                    <?php $counter++;
                    if ($counter % 2 == 0) {
                    echo '</div><div class="row">';
                    }
                  endwhile; ?>
                  <?php else : ?>
					<p class="nothing">
						Vous vous êtes perdu!
					</p>

                <?php endif; ?>
                </div>

                </section>
      </div> <!--fermeture div class col-md-9 -->



  <?php get_sidebar('home'); ?>

        </div> <!-- fermeture div class row -->

  <?php get_footer(); ?>
    </div> <!--fermeture div class container:text-align center-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
    