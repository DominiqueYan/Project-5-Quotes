<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

 $source = get_post_meta( get_the_ID(), '_qod_quote_source', true);
 $sourceUrl = get_post_meta( get_the_ID(), '_qod_quote_source_url', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<span class="source"><a href='<?php echo $sourceUrl; ?>'><?php echo $source; ?></a></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
