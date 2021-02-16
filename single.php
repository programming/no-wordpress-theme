<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<strong><?php the_title(); ?></strong>
<hr />

<?php

$slug = 'links';
$cat = get_category_by_slug($slug);
$catID = $cat->term_id;

if ( in_category($catID) ) :

?>

<?php echo get_post_meta($post->ID, 'bookmark', true); ?>

<?php else : ?>

<?php the_content(); ?>

<?php endif; ?>

<?php edit_post_link('Edit','<p>','</p>'); ?>
<small><?php the_time( get_option( 'date_format' ) ); ?></small>
</article>
<?php endwhile; endif; ?>
<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">index</a></p>
</main>
<?php get_footer(); ?>
