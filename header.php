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
    <!-- insert custom scripts for Google Analtics or Facebook Pixels -->
    <?php wp_body_open() ?>
    <header>Header</header>