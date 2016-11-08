<?php
/*
Template Name: Homepage
*/

    $id = get_the_ID();
?>

<?php get_header(); ?>

<?php get_template_part('partials/bienvenue'); ?>
<?php get_template_part('partials/concept'); ?>
<?php get_template_part('partials/plats'); ?>

<?php get_footer(); ?>