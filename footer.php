<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 27/11/2018
 * Time: 15:27
 */
?>
<div id="footer">
    <p> Copyright &#169; <?php print(date('Y')); ?> <?php bloginfo('name'); ?> <br /> Blog propulsé par
        <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par
        <a href="#">kalika</a> <br />
        <a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> et
        <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.
        <?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?> secondes.
    </p>
</div>
