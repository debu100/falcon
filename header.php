<?php
/*
* Header Template

* @package Falcon
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(); ?></title>
    <!-- we can change title by using add theme support function or wp ttile function -->
     <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <!-- navbar -->
     <div class="site" id="page">
        <header  id="masthead" class="site-header" role="banner">
            <?php get_template_part('./template-parts/header/nav') ?>
        </header>
        <div id="content" class="site-content">


    <!-- insert custom scripts for Google Analtics or Facebook Pixels -->
    <?php wp_body_open() ?>