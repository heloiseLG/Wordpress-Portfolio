<div class="card" style="width: 18rem;">
    <?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => 'projet']) ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title() ?></h5>
        <p class="card-text"><?php the_excerpt() ?></p>
        <p class="card-subtitle">Autheur :<?php the_terms(get_the_ID(), 'projet', '<li>', '</li><li>', '</li>'); ?></p>
        <p class="card-subtitle">Catégorie :<?php the_terms(get_the_ID(), 'category', '<li>', '</li><li>', '</li>'); ?></p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>
    </div>
</div>