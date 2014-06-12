
<?php get_header(); ?>

	<div class="container" style="text-align:center">
		<div class="row">
			<div class="col-md-9" id="content" role="main">
				<section>
					
					<div class="col-md-12">
							<div class="barrecategorie">
								<?php if (in_category(5)) : ?>
		                          <i class="fa fa-university"></i>
		                        <?php elseif (in_category(6)) : ?>
		                          <i class="fa fa-cloud"></i>
		                        <?php elseif (in_category(4)) : ?>
		                          <i class="fa fa-tag"></i>
		                        <?php elseif (in_category(3)) : ?> 
		                          <i class="fa fa-plane"></i>
		                        <?php endif; ?>

								<p class='voyages'> <?php single_cat_title( '', true); ?> </p>
						
								<?php if ( category_description() ) : // Show an optional category description ?>
								<div class="archive-meta"><?php echo category_description(); ?></div>							
							</div>
								<?php endif; ?>
					</div>
							
						
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
                <?php endif; ?>
                </div>


				</section>		

			</div>

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


				
			
			

					<!-- beginning
					<div class="col-md-6">

						<article>
							<i class="fa fa-plane"></i>
							<img class="img-responsive" src="Image/Californie.jpg" alt="Californie" height="200px" width="200px">
							<p class='date'> 25 mai 2014</p>
							<p> Californie </p>
							<p> Résumé </p>
						</article>
					</div>

					<div class="col-md-6">
						<article>
							<i class="fa fa-plane"></i>
							<img class="img-responsive" src="Image/Hollywood.jpg" alt="Hollywood" height="200px" width="200px">
							<p class='date'> 20 mai 2014</p>
							<p> Hollywood </p>
							<p> Résumé </p>
						</article>
					</div>
				</div>
					

				<div class="row">	
					<div class="col-md-6">
						<article>
							<i class="fa fa-plane"></i>
							<img class="img-responsive" src="Image/Grandcanyon.jpg" alt="GrandCanyon" height="200px" width="200px">
							<p class='date'> 15 mai 2014</p>
							<p> Grand Canyon</p>
							<p> Résumé </p>
						</article>
					</div>

					<div class="col-md-6">
						<article>
							<i class="fa fa-plane"></i>
							<img class="img-responsive" src="Image/Santabarbara.jpg" alt="Santabarbara" height="200px" width="200px">
							<p class='date'> 10 mai 2014</p>
							<p> Santa Barbara</p>
							<p> Résumé </p>
						</article>
					</div>

					<div class="col-md-12" class='suivants'>
						<p class="align-right">Articles suivants</p>
						<i class="fa fa-long-arrow-right"></i>
					</div>
				</div>

			-->


					

				