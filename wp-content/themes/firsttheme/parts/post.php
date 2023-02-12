<div class="card text-bg-dark image" >
<?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => 'projet']) ?>
  <div class="card-img-overlay">
    <h5 class="card-title"><?php the_title() ?></h5>
    <p class="card-text">Autheur :<?php the_terms(get_the_ID(), 'projet'); ?></p>
    <p class="card-text "><small>Catégorie :<?php the_terms(get_the_ID(), 'category'); ?></small></p>
    <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir plus</a>    
</div>
</div>

<style>
.image {
    background: black;
    overflow: hidden;
    transition: transform .2s;
    margin-bottom: 2%; /* Animation */
}

img {
   object-fit: cover;
   opacity: 0.4;
}
.image:hover {
  transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>