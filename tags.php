<?php /* Template Name: Tags */ ?>
<?php get_header(); ?>
<main id="content">
<?php

$tags = get_tags(array(
'orderby' => 'count',
'order' => 'DESC'
));

foreach($tags as $tag) {
   echo '<article><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></article>';
}

?>
</main>
<?php get_footer(); ?>
