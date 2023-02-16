<?php
defined( 'ABSPATH' ) || die();

/**
 * Hero Block Template.
 *
 * @param  array       $block       The block settings and attributes.
 * @param  string      $content     The block inner HTML (empty).
 * @param  bool        $is_preview  True during AJAX preview.
 * @param  int|string  $post_id     The post ID this block is saved to.
 */ 

// Build the basic block id and class 
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block-hero-' . $block['id'];
$block_class  = 'block-hero';


// Get our data
$heading      = get_field( 'heading' ) ?: __( 'Titre', 'example' );
$heading2      = get_field( 'heading2' ) ?: __( 'Type de compétence', 'example' );
$heading3      = get_field( 'heading3' ) ?: __( 'Type de compétence', 'example' );
$heading4      = get_field( 'heading4' ) ?: __( 'Type de compétence', 'example' );?>



<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">
    <div class="groupe">
        <div class="hero-content">
            <p class="hero-title"><?php echo esc_html( $heading ); ?></p>
        </div>
        <ul>
       <li>
        <div class="competence" >
            <p class="hero-title"><?php echo esc_html( $heading2 ); ?></p>
        </div>
       </li> 
        <li>
        <div class="competence" >
            <p class="hero-title"><?php echo esc_html( $heading3 ); ?></p>
        </div>
        </li> 
        <li>
        <div class="competence" >
            <p class="hero-title"><?php echo esc_html( $heading4 ); ?></p>
        </div>
        <br>
        </li> 
        </ul>
    </div>
    <style>
            .hero-content {
                text-decoration: underline;
            }
    </style>
</div>

<?php return;