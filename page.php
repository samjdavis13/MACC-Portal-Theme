<?php get_header(); ?>

	<div id='main-content'>
		<div class='row'>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class='medium-8 column item-container'>
					<a href='<?php the_permalink(); ?>'><h2 id='post-title'><?php the_title(); ?></h2></a>
					<?php the_content(); ?>
				</article>
				<aside class='medium-4 column' id='sidebar'>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?>
						<p>[ do default stuff if no widgets ]</p>
					<?php endif; ?>
				</aside>
			<?php endwhile; else:?>
				<article class='container_12'>
					<p>There are no posts or pages here</p>
				</article>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>