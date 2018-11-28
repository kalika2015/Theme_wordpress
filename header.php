<?php
/**
 * Created by PhpStorm.
 * User: kalika
 * Date: 27/11/2018
 * Time: 15:26
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head profile="http://gmpg.org/xfn/11">
    <title>
        <?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo;
            <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo;
            <p class"description"><?php bloginfo('description'); ?></p><?php else : ?><?php wp_title() ?>
        <?php endif ?>
    </title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); <?php wp_head(); ?>
</head>
<body>
<div id="page">
    <div id="header">
        <!-- informations du blog -->
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php bloginfo('description'); ?>
    </div>

