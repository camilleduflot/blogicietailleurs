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
						Il n'y a pas de post à afficher.
					</p>

                <?php endif; ?>
                </div>




					<!-- <article> 
						<div class="article1">
							<div class="date"> 27 mai 2014</div> 
							<h2> Californie</h2>								
							<p>Découverte de la Californie.</p>
						</div> 
							<img class="img-responsive" src="Image/Californie.jpg" alt= "Los Angeles Californie">
					</article>
				
		<div class="row">
			<div class="col-sm-6">
				<article>
					<i class="fa fa-plane"></i>
					<img class="img-responsive" src="Image/Hollywood.jpg" alt="Hollywood" height="200px" width="200px">		
					<p class='date'> 25 mai 2014</p>
					<p> Hollywood </p>
				</article>
			</div>

			<div class="col-sm-6">
				<article>
					<i class="fa fa-tag"></i>
					<img class="img-responsive" src="Image/Mode vogue.jpg" alt="Vogue Paris Mai 2014" height="200px" width="200px">
					<p class='date'> 20 mai 2014</p>
					<p> Un air de weekend </p>
				</article>
			</div>
		</div>
			

		<div class="row">	
			<div class="col-sm-6">
				<article>
					<i class="fa fa-university"></i>
					<img class="img-responsive" src="Image/Paris 1900 recadre.png" alt="Affiche Paris 1900" height="200px" width="200px">
					<p class='date'> 15 mai 2014</p>
					<p> Paris 1900, La ville spectacle</p>
				</article>
			</div>

			<div class="col-sm-6">
				<article>
					<i class="fa fa-cloud"></i>
					<img class="img-responsive" src="Image/Un air de Grèce recadre.jpg" alt="Image Grèce1" height="200px" width="200px">
					<p class='date'> 10 mai 2014</p>
					<p> Un air de Grèce</p>
				</article>
			</div>

			<div class="col-md-12" class='suivants'>
				<p class="align-right">Articles suivants</p>
				<i class="fa fa-long-arrow-right" class='align-right'></i>
			</div>
		</div>
		-->
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
		
	
	
	