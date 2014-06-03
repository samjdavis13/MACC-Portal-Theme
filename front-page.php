<?php get_header(); ?>

	<div id='main-content'>
    	<div class='row'>
    		<ul id='main-grid' class='medium-block-grid-2 small-block-grid-1'>
    			<?php 
					$args = array(
						'post_type' => 'portal-link'
					);
					$the_query = new WP_Query( $args );
				?>
				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li>
			        	<a href='<?php the_field('link'); ?>'>
			            	<div class='item-container'>
			            		<div class='large-4 columns'>
				                  	<img src="<?php the_field( 'image' ); ?>">
			                	</div>
			                	<div class='large-8 columns'>
				                  	<h3><?php the_title(); ?></h3>
				                  	<p><div class='hide-for-small-only'><?php the_field( 'description' ); ?></div></p>
			                	</div>
			             	</div>
			            </a>
			        </li>
		        <?php endwhile; else:?>

		        <?php endif; ?>

        	</ul>
      	</div>
    </div>

<?php get_footer(); ?>