<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="<?= $this->assetUrl('css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= $this->assetUrl('css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= $this->assetUrl('css/shop-homepage.css') ?>" rel="stylesheet" type="text/css">
    <!--  	<link href="< ?= $this->assetUrl('css/reservation.css') ?>" rel="stylesheet" type="text/css"> -->
    <link href="<?= $this->assetUrl('img/favicon.ico') ?>" rel="icon">
    <link href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?= $this->assetUrl('js/jquery.js') ?>"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="<?= $this->assetUrl('css/style.css') ?>" rel="stylesheet" type="text/css"> 
    <!--  API Google Map -->
   <!--  <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
   <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyD4VeDJVZpc93wFFw0eK_rG4za6JH5wcYY "></script> -->
   <title>Hôtel des Voisins : <?= $this->e($title) ?></title> 

</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <!--    <span class="sr-only">Toggle navigation</span> -->
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= $this->url('accueil-index') ?>">Hôtel des Voisins</a>
            <!-- </div>
            Collect the nav links, forms, and other content for toggling
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= $this->url('accueil-index') ?>">Accueil</a>
                    </li>

                    <li>
                        <a href="<?= $this->url('contactez-nous') ?>">Contact</a>
                    </li>

                    <!-- <li>
                        <a href="< ?= $this->url(' ') ?>">Nos Chambres</a>
                    </li> -->
                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> 

    <div class="container">
     <div class="row">
        <div class="col-md-3">
            <p class="lead">Nos Chambres</p>
            <div class="list-group">
                <a href="<?= $this->url('chambres-simples') ?>" class="list-group-item">Chambre simple</a>
                <a href="<?= $this->url('chambres-doubles') ?>" class="list-group-item">Chambre double</a>
                <a href="<?= $this->url('chambres-triples') ?>" class="list-group-item">Chambre triple</a>
                <a href="<?= $this->url('suites') ?>" class="list-group-item">Suite</a>

                <Br/>
                <script type="text/javascript">
                    $(function(){
                        $('.datepicker').datepicker({showAnim: "fadeIn"});
                    }) 
                </script>


                <form method="post" action="<?= $this->url('reservation2-formulaire') ?>" class="form form-inline">
                    <h2>Choisissez vos dates</h2>
                    <p class="form-group">
                        <label for="datepicker1_arrivee">date arrivée :</label>
                        <input class="form-control datepicker" id="datepicker1_arrivee" name="datepicker1_arrivee" value="<?= date('m/d/Y') ?>">
                    </p>
                    <p class="form-group">
                        <label for="datepicker2_depart">date départ :</label>
                        <input class="form-control datepicker" id="datepicker2_depart" name="datepicker2_depart" value="">
                    </p>
                    <p class="form-group">
                        <label for="capacite">Nombre de personnes :</label>
                        <input class="form-control" type="number" id="capacite" name="capacite" value="">
                    </p><br/><br/>
                    <input class="btn btn-primary" type="submit" name="envoi" value="Suivant"> 
                </form>
            </div>
        </div>
        <div class="col-md-9">
          <section>
           <?= $this->section('main_content') ?>
       </section>
   </div>
   <!-- Footer -->
   <footer>
      <div class="row">
        <div class="col-lg-12">
           &copy; <?= date("Y"). " Hôtel des Voisins"; //-- -> ceci est un bas-de-page // ?>
       </div>
   </div>
</footer>
</div>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $this->assetUrl('js/bootstrap.min.js'); ?>"></script>


</body>
</html>