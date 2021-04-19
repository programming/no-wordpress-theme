<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
</article>
<?php endwhile; endif; ?>
<p><?php posts_nav_link('&nbsp;','newer','older'); ?></p>
</main>
<?php get_footer(); ?>
