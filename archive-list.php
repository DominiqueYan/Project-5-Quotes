<?php
/**
 * The template for displaying archive lists pages.
 *
 * Template Name: Archives Lists
 *  
 * @package QOD_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="archive-list">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h>' ); ?>
			</header>

			<section class="archive-post">
				<h2>Quote Authors</h2>
				<?php
					$posts=get_posts (array( 'posts_per_page' => -1 ));
				?>
				<ul>
					<?php foreach ( $posts as $post ) : setup_postdata ( $post ); ?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			</section>

			<section class= 'archive-categories'>
				<h2>Categories</h2>
				<ul>
					<?php wp_list_categories(array(
						'taxonomy' => 'category',
						'title' => '', ))?>
				</ul>
			</section>

			<section class= 'archive-tags'>
				<h2>Tags</h2>
				<ul>
				<?php $tags=get_tags (array(
					'orderby' => 'title',
					'order' => 'ASC' ))?>
				</ul>
				<ul>
					<?php foreach ( $tags as $tag ) : setup_postdata( $tag ); ?>
						<li>
							<a href= "<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->slug; ?></a>
						</li>
					<?php endforeach; wp_reset_postdata();?>
				</ul>
			</section>
		</div>
	</main><!-- #main -->
</div>   

