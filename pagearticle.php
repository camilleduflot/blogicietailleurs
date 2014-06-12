		<?php get_header(); ?>

		<div class="row">
					<div class="col-md-9">
						<section>
							<article> 
								<div class="article1">
									<div class="date">27 mai 2014</div> 
									<h2>Californie</h2>								
								</div> 
									<img class="img-responsive" src="Image/Californie.jpg" alt= "Los Angeles Californie">
									<p>Texte</p>
									<ul>
										<li class="inline"><i class="fa fa-facebook"></i> </li>
										<li class="inline"><i class="fa fa-instagram"></i> </li>
										<li class="inline"><i class="fa fa-pinterest-square"></i> </li>
										<li class="inline"><i class="fa fa-twitter-square"></i></li>
									</ul>
							</article>
									
							<div class="col-md-12">
								<p class='vousaimerez'>Vous aimerez aussi...</p>
							</div>

							<div class="row">
								<div class="col-md-4">
									<article>
										<img class="img-responsive" src="Image/Santabarbara.jpg" alt="Santabarbara" height="200px" width="200px">
										<p> Santa Barbara </p>
										<p class='date'> 25 mai 2014</p>
									</article>
								</div>

								<div class="col-md-4">
									<article>
										<img class="img-responsive" src="Image/Hollywood.jpg" alt="Hollywood" height="200px" width="200px">
										<p> Hollywood </p>
										<p class='date'> 20 mai 2014</p>
									</article>
								</div>
							
								<div class="col-md-4">
									<article>
										<img class="img-responsive" src="Image/Grandcanyon.jpg" alt="GrandCanyon" height="200px" width="200px">
										<p> Grand Canyon</p>
										<p class='date'> 15 mai 2014</p>
									</article>
								</div>
							</div>

							<div class="commentaire">
								<article>
									<p> Commentaires</p>
									<p> "Tous les commentaires" </p>
								</article>

								<article class"commentaire">
									<p> Laisser un commentaire </p>
									<p> Nom </p>
										<form action="users/nom">
											<input type= "text" name="Nom">
										</form>
									<p> E-mail</p>
										<form action="users/E-mail">
											<input type= "text" name="E-mail">
										</form>
									<p> Commenter </p>
										<form action="users/commentaire">
											<input type= "text" name="Commenter">
										</form>
									<p></p>
										<form action="users/envoyer">
											<input type="submit" value="Envoyer">
										</form>
									
							</div>

						</section>
					</div>

				<?php get_sidebar('second'); ?>
					
				
		</div> <!-- fermeture div class row -->


















			<?php include "footer.php"; ?>
		</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>