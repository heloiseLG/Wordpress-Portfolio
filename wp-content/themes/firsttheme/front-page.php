<?php get_header() ?>

<?php while (have_posts()) : the_post() ?>

  <?php the_content() ?>



  <div class="container">
    <div class="main-timeline">
      <?php
      // check for rows (parent repeater)
      if (have_rows('timeline')) : ?>
        <?php

        // loop through rows (parent repeater)
        while (have_rows('timeline')) : the_row(); ?>
          <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
              <div class="date-outer">
                <span class="date">
                  <span class="month">1 Years</span>
                  <span class="year"><?php the_sub_field('annee'); ?></span>
                </span>
              </div>
            </div>
              <div class="timeline-content">
                <h5 class="title"><?php the_sub_field('time_titre'); ?></h5>
                <?php
            // check for rows (sub repeater)
            if (have_rows('events')) : ?>
            <?php

                // loop through rows (sub repeater)
                while (have_rows('events')) : the_row();

                  // display each item as a list - with a class of completed ( if completed )
                ?>
                  <p><?php the_sub_field('event'); ?></p>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile; // while( has_sub_field('to-do_lists') ): 
        ?>
      <?php endif; ?>
    </div>
  </div>



  <div class="flex-parent-element">
    <?php
    // Check rows existexists.
    if (have_rows('youtube')) :
      // Loop through rows.
      while (have_rows('youtube')) : the_row();
        // Load sub field value.
        $epitech = get_sub_field('epitech');
        $wis = get_sub_field('wis'); ?>

        <div class="flex-child-element">
          <?php echo $epitech; ?>
        </div>
        <div class="flex-child-element">
          <?php echo $wis; ?>
        </div>
    <?php endwhile;

    // No value.
    else :
    // Do something...
    endif; ?>
  </div>
<?php endwhile; // end of the loop. 
?>

<?php get_footer() ?>