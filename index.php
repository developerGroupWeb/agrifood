<!doctype html>
<html lang="en">
  <head>
    <?php include  'pills/csslink.php'  ?>

    <title>Agrifoodcenter</title>
  </head>
  <body>

    <?php include 'template/nav.php' ?>

    <section class="home">
      <div class="container">
        <div class="">
          <div id="carouselExampleIndicators" class="carousel slide row" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="images/un-champ-de-tomates.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/cover-r4x3w1000-57e168b2342fe-un-fermier-bio-recolte-ses-tomates-a-perenchies-nord-de_0.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/avec-attention-il-contrc3b4le-ses-jeunes-plaants-de-tomates.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="section2 mt-5">
      <div style="background-color: rgba(0,0,0,0.8);">
        <div class="container py-5">
          <div class="row">
            <h1 class="mx-auto text-center pb-4">Découvrez AGRIFOOD CENTER</h1>
          </div>
          <div class="row">
            <h5 class="col-md-8 offset-md-2 text-center">AGRIFOOD Center est une startUp innonante et inspirante dans l'agronomie et l'agro-business, pour la production et la conservation longue durée des tomates fraiches cultivées au Bénin.</h5>
          </div>

          <div class="row">
            <h2 class="mx-auto text-center py-4">Avantages de nos produits:</h2>
          </div>
            
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <img src="images/979bdd0fda2b7cb05e5174f07f4737c3.jpg" class="img-fluid mx-auto" style="width: 180px; height: 180px; border-radius: 100px;">
              </div>
            </div>
            <div class="col-md-8 mt-4">
              <ul class="list-unstyled">
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>Longue durée de conservation</span></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>Conservent les même caracteristiques organoleptiques et nutritionnelles que la tomate fruit ou initial</span></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>Réduction du temps de cuisson</span></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>Peuvent se transformer au gré de vos envies et de vos recettes</span></li>
              </ul>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-8 mt-4 order-last order-md-first">
              <ul class="list-unstyled">
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>Disponibilé de la tomate à tout moment</span></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>Meilleur confort d’utilisation</span></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>Bienfait Contre Le cancer</span></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>Bien-être sanitaire et securité alimentaire garantis</span></li>
              </ul>
            </div>

            <div class="col-md-4 order-first order-md-last">
              <div class="row">
                <img src="images/images78.jpg" class="img-fluid mx-auto" style="width: 180px; height: 180px; border-radius: 100px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section3 py-5 py-5">
      <div class="container">
        <div class="row">
          <h1 class="mx-auto text-center">Quelques images de notre exploitation</h1>
        </div>

        <div class="row mt-4 mb-3">
          <div class="col-sm-4 offset-sm-4"><a href="" class="btn btn-lg btn-success w-100">Voir ici >></a></div>
        </div>
      </div>
    </section>

    <section class="section4 py-5 bg-light">
      <div class="container">
        <div class="row">
          <h1 class="mx-auto text-center mb-5">Nos Produits</h1>
        </div>

        <div class="">
          <div class="card-columns">
            <div class="card">
              <img src="images/IMG-20181212-WA0040.jpg" class=" w-100">
            </div>
            <div class="card">
              <img src="images/IMG-20181212-WA0041.jpg" class=" w-100">
            </div>
            <div class="card">
              <img src="images/455852.jpeg" class=" w-100">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-newsletters bg-danger py-5">
      <div class="col-lg-8 offset-lg-2">
        <div class="row mb-4">
          <h2 class="mx-auto text-center text-white font-weight-bold">Besoin d'un produit ou d'un partenaire ? Contactez-nous!</h2>
        </div>
        <div class="">
          <form method='post' action="treatment.php"  id="submit" class="row">
            <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
              <input type="name" name="name" id="name" placeholder="Votre nom et prenom..." class="form-control">
                <span class="error-name" style="display: none; color: white; font-style: italic"></span>
            </div>
            <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
              <input type="text" name="phone" id="phone" placeholder="Votre numero de telephone..." class="form-control">
                <span class="error-phone" style="display: none; color: white; font-style: italic"></span>
            </div>
            <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
              <input type="email" name="email" id="email" placeholder="Votre email..." class="form-control">
                <span class="error-email" style="display: none; color: white; font-style: italic"></span>
            </div>
            <div class="form-group col-sm-12 offset-sm-0 col-10 offset-1">
              <textarea name="message" id="message" placeholder="Laissez un message..." rows="4"  class=" w-100 form-control error-message"></textarea>
            </div>

            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1 mt-4">
              <input type="submit" value="Inscription gratuite" id="sendNewsletters" class="btn btn-success w-100">
            </div>
          </form>
        </div>
      </div>
    </section>

    <?php include 'footer.php'  ?>

    <?php include  'pills/scriptslink.php'  ?>
  </body>
</html>