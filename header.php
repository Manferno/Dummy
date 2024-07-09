<?php
// Definición de variables de entorno para reducción de tiempos de escritura
define('_theme', get_template_directory_uri());
define('_blog', get_bloginfo('url'));
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es-CL" xml:lang="es-CL">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <?php # Forces the browser to render as that particular version's standards. 
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,IE=10,IE=EmulateIE10,IE=9,IE=EmulateIE9,IE=8,IE=EmulateIE8,IE=7,IE=EmulateIE7">
    <meta http-equiv="pragma" content="no-cache" />

    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="x-dns-prefetch-control" content="off">

    <meta http-equiv="expires" content="Mon, 5 Mar 2018 12:00:00 GMT">
    <meta name="last-modified" content="Mon, 6 Mar 2017 12:00:00 GMT">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php // Title / Description & Keyword page 
    ?>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="author" content="multidev - multidev.cl">
    
    <?php // Favicon 
    ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= _theme ?>/favicon.png">
    <link rel="icon" type="image/png" href="<?= _theme; ?>/favicon.png" sizes="128x128">

    <?php // Mobile Tags 
    ?>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telephone=yes">
    <meta name="apple-mobile-web-app-capable" content="no" />
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">

    <?php // Robots config 
    ?>
    <meta name="robots" content="index, follow, noydir, noodp">
    <meta name="googlebot" content="noarchive">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    
    <section id="website-global">