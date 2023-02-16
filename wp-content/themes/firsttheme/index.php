<?php if ( is_page('contact') ) {
  get_header( ); ?>
<H1>Formulaire de contact</H1>
<?php the_content() ?>


<?php } else {
  get_header();

    $projets = get_terms(['taxonomy' => 'projet', 'type']); ?>

    <ul class="nav nav-pills my-4">
        <?php require('parts/filter.php'); ?>
    </ul>

    <?php if (have_posts()) : ?>
        <div class="row">

            </ créer une boucle pour afficher les articles>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-sm-4">
                    <?php require('parts/post.php'); ?>
                </div>
            <?php endwhile ?>
        </div>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <h1>Pas d'articles</h1>
    <?php endif; 
}?>
<?php get_footer() ?>

