<?php get_header() ?>

<h1><?= get_queried_object()->name ?></h1>

<a>
    <?= get_queried_object()->description ?>
</a>

<?php $projets = get_terms(['taxonomy' => 'projet']); ?>

<ul class="nav nav-pills my-4">
<a href="<?= get_post_type_archive_link('post')?>" class="nav-link">Tous</a>
    <?php foreach($projets as $projet): ?>
    <li class="nav-item">
        <a href="<?= get_term_link($projet) ?>" class="nav-link <?= is_tax('projet', $projet->term_id) ? 'active' : '' ?>"><?= $projet->name ?></a>
    </li>
    <?php endforeach; ?>
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