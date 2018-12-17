<?php
/**
 * Created by PhpStorm.
 * User: kalika
 * Date: 28/11/2018
 * Time: 11:19
 */
?>

<?php get_header(); ?> <!-- ouvrir header,php -->
<!-- Page Content -->
<div class="row">
    <div class="col-md-12">
        <img class="card-img-top" src="../wp-content/uploads/2018/12/keloumak.jpg" alt="Card image cap">
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->

            <h1 class="my-4">Membres de la promo-21
                <small> </small>
            </h1>
            <!-- Blog Post -->
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                 <div id="profile_cards"><?php the_content(); ?></div>

                <?php endwhile; ?>
                <div class="navigation"> <?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?> </div>

                <?php include (TEMPLATEPATH . "/searchform.php"); ?>
            <?php endif; ?>
            <div class= "post" id="post-<?php the_ID(); ?>"> <div class= "post_content"> </div> </div>
        </div>
        <!-- Sidebar Widgets Column -->


    <!-- /.row -->
</div>
<!-- /.container -->
<?php get_footer(); ?>

</body>
</html>