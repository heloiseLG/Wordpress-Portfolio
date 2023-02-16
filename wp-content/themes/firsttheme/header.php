<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style href="/wp-content/themes/firsttheme/style.css"/>
    <?php wp_head() ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portfolio</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(['
            theme_location' => 'header', 
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto',
            ]) ?>
            </div>
        </div>
    </nav>
    <div class="container">