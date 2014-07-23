<?php
/*
Template Name: Default (Without Sidebar)
*/
?>
<?php get_header(); ?>

	<div id='main-content'>
		<div class='row'>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class='medium-12 column' id='article'>
					<div class="medium-12 column item-container addmargin">
						<a href='<?php the_permalink(); ?>'><h2 id='post-title'><?php the_title(); ?></h2></a>
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; else:?>
				<article class='container_12'>
					<p>There are no posts or pages here</p>
				</article>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>