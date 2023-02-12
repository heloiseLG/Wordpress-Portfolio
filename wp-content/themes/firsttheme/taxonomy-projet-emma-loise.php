<?php get_header() ?>

<h1><?= get_queried_object()->name ?></h1>

<a>
    <?= get_queried_object()->description ?>
</a>

<?php $projets = get_terms(['taxonomy' => 'projet']); ?>

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
<?php endif; ?>

<?php get_footer() ?>