<!DOCTYPE html>
<html>
<head>
	<?php include  'pills/csslink.php'  ?>
	<title></title>
</head>
<body>

	<?php include 'template/nav.php' ?>


	<section class="section-aboutus">
		<div class="container">
			<div class="row my-5">
				<div class="col-lg-8">
					<div class="row">
						<h1 class="mb-5">Qui sommes-nous</h1>
					</div>
					<div class="row">
						<h4 class="my-5">A rediger</h4>
					</div>
				</div>

				<div class="col-lg-4 mb-5">
					<div class="row">
						<h3 class="ml-md-auto">Adresse</h3>
					</div>

					<div class="row">
						<div class="ml-md-auto text-md-right" id="adresseBox">
							<p class="my-0">REP-BENIN</p>
							<p class="my-0">Avrankou</p>
							<p class="my-0">BP: 24 Avrankou</p>
							<p class="my-0">E-mail: contact@agrifoodcenter.com</p>
							<p class="my-0">Web: www.agrifoodcenter.com</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-7">
					<div class="row">
						<h3>Contactez-nous pour toutes demandes!</h3>
					</div>
				</div>
                <div class="alert alert-info" style="display: none"></div>
				<div class="col-md-5">
					<div class="row">
						<div class="">
				          <form  method='post' action="treatment.php"  id="submit" class="row">
				            <div class="form-group col-12">
                                <input type="name" name="name" id="name" placeholder="Votre nom et prenom..." class="form-control">
                                <span class="error-name" style="display: none; color: red; font-style: italic"></span>
				            </div>
				            <div class="form-group col-12">
                                <input type="text" name="phone" id="phone" placeholder="Votre numero de telephone..." class="form-control">
                                <span class="error-phone" style="display: none; color:  red; font-style: italic"></span>
				            </div>
				            <div class="form-group col-12">
                                <input type="email" name="email" id="email" placeholder="Votre email..." class="form-control">
                                <span class="error-email" style="display: none; color:  red; font-style: italic"></span>
				            </div>
				            <div class="form-group col-12">
                                <textarea name="message" id="message" placeholder="Laissez un message..." rows="4"  class="form-control"></textarea>
                                <span class="error-message" style="display: none; color:  red; font-style: italic"></span>
				            </div>

				            <div class="col-12 mt-4 mb-5">
				              <input type="submit" value="Envoyer" id="sendNewsletters" class="btn btn-success w-100">
				            </div>
				          </form>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php include 'footer.php' ?>

	<?php include  'pills/scriptslink.php'  ?>
</body>
</html>