<?php get_header (); ?>

		<!-- Content -->
			<div id="content">
				<div class="inner">


					<?php while( have_posts() ) : if( have_posts() ) : the_post(); ?>

					<!-- Post -->
						<article class="box post post-excerpt">
							<header>
								<h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
								<p>Feugiat interdum sed commodo ipsum consequat dolor nullam metus</p>
							</header>
							<div class="info">
								<span class="date"><span class="month">Jul<span>y</span></span> <span class="day">8</span><span class="year">, 2014</span></span>
								<ul class="stats">
									<li><a href="#" class="icon fa-comment">16</a></li>
									<li><a href="#" class="icon fa-heart">32</a></li>
									<li><a href="#" class="icon brands fa-twitter">64</a></li>
									<li><a href="#" class="icon brands fa-facebook-f">128</a></li>
								</ul>
							</div>
							<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
							<p>
								Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
								Nunc nulla velit, fermentum quis interdum quis, tate etiam commodo lorem ipsum dolor sit amet dolore.
								Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
								Nunc nulla velit, fermentum quis interdum quis, convallis eu sapien. Integer sed ipsum ante.
							</p>
						</article>
						
                    <?php endif; endwhile; ?>
					
					<!-- Pagination -->
						<div class="pagination">
							<!--<a href="#" class="button previous">Previous Page</a>-->
							<div class="pages">
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>&hellip;</span>
								<a href="#">20</a>
							</div>
							<a href="#" class="button next">Next Page</a>
						</div>

				</div>
			</div>

	


<?php get_footer(); ?>
