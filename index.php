<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php

/*
Quick and dirty implementation of my own version of 'Asides' (https://ma.tt/2004/05/asides/). Basically, a personal del.icio.us integrated with my existing installation of WordPress.

Save your links as new posts in its own category ("links") and its URL as a custom field ("bookmark").
*/

$slug = 'links';
$cat = get_category_by_slug($slug);
$catID = $cat->term_id;

if ( is_home() && in_category($catID) ) :

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php echo get_post_meta($post->ID, 'bookmark', true); ?>" title="<?php the_title_attribute(); ?>" rel="nofollow" class="external"><?php the_title(); ?></a>
</article>

<?php else : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
</article>

<?php endif; ?>

<?php endwhile; endif; ?>
<p><?php posts_nav_link('&nbsp;','newer','older'); ?></p>
</main>
<?php get_footer(); ?>
