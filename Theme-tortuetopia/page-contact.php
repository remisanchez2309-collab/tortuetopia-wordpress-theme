<?php
/*
Template Name: Contact
*/
get_header();
?>

<!-- Ici WordPress affichera ce que tu as créé dans l’éditeur -->
<?php
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>

<?php get_footer(); ?>
