<?php get_header() ?>

<?php while (have_posts()) : the_post() ?>

    <div id="carousel" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/796602/pexels-photo-796602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenu</h5>
                    <p>Voici notre portfolio.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/796602/pexels-photo-796602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/796602/pexels-photo-796602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   



    <!-- Trois icon  -->
    <hr class="featurette-divider"><!-- Ligne  -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="https://cdn-icons-png.flaticon.com/512/8982/8982091.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Innovation</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="https://cdn-icons-png.flaticon.com/512/9186/9186519.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Adaptation</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="https://cdn-icons-png.flaticon.com/512/1077/1077198.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Diversité</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

        </div>
    </div><!-- /.row -->

    <!-- IMAGE + TEXTE -->
    <hr class="featurette-divider"><!-- Ligne  -->
    <div class="row featurette">
        <div class="col-md-7">
            <br>
            <h2 class="featurette-heading">Héloise LE GELDRON </h2>
            <p class="lead">20 ans étudiante à WIS en 3ème année de Bachelor Chef de projet Digital.</p>
            <p>Code : </p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 80%"></div>
            </div>
            <br>
            <p>Design : </p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 65%"></div>
            </div>
            <br>
            <p>Managament : </p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 90%"></div>
            </div>
        </div>
        <br>
        <div class="col-md-5">
        <br>
        <img src="http://localhost/Wordpress-Portfolio/wp-content/uploads/2023/02/P11400701-e1675683643646-1024x1024.jpg" alt="Image" style="border-radius:50%; width:300px; height:300px;">
        </div>
    </div>
    <hr class="featurette-divider"><!-- Ligne  -->
    <div class="row featurette">
        <div class="col-md-5">
            <br>
            <img src="http://localhost/Wordpress-Portfolio/wp-content/uploads/2023/02/ELQ3-e1675683612627.jpg" alt="Image" style="border-radius:50%; width:300px; height:300px;">
        </div>
        <div class="col-md-7">
            <br>
            <h2 class="featurette-heading">Emma-Loïse QUIN </h2>
            <p class="lead">21 ans étudiante à WIS en 3ème année de Bachelor Chef de projet Digital.</p>
            <p>Organisation : </p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 80%"></div>
            </div>
            <br>
            <p>Prototype : </p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 65%"></div>
            </div>
            <br>
            <p>Marketing : </p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 90%"></div>
            </div>
        </div>
        
    </div>
    <hr class="featurette-divider"><!-- Ligne  -->

<style>
body{
    font-family: opensans;
}    
</style>
    <?php the_content() ?>

<?php endwhile; ?>
<?php get_footer() ?>