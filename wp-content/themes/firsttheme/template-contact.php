<?php
/*
    Template Name: Contact Page
    */
get_header();
?>
<div style="text-align:center;">
    <h1>
        <?php
        $title = get_field("test_title");

        if ($title) {
            echo $title;
        } else {
            echo 'empty';
        } ?>
    </h1>
    <p>
        <?php
        $desc = get_field("test_desc");

        if ($desc) {
            echo $desc;
        } else {
            echo 'empty';
        } ?>
    </p>

    <div >
        <?php the_content() ?>
    </div>
</div>

<?php get_footer() ?>