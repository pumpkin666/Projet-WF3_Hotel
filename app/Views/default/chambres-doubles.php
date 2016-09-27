<?php $this->layout('layout', ['title' => '  ']) ?>

<?php $this->start('main_content') ?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chambres Doubles</title>

    <!- - Bootstrap Core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!- - Custom CSS 
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script src="js/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
	<link href="jquery-ui1.12.0.custom">
  <link  href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

</head>
 
<body>
-->

    <!-- Page Content -->

        <div class="row">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?= $this->assetUrl('img/chambres-doubles/grands-lits-1.jpg')?>" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?= $this->assetUrl('img/chambres-doubles/grands-lits-2.jpg')?>" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?= $this->assetUrl('img/chambres-doubles/grands-lits-3.jpg')?>" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('img/chambres-doubles/lits-separes-1.jpg') ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">50,00€</h4>
                                <h4> Double Classique
                                </h4>
                                <p>Chambre double lits jumeaux</p>
                            </div>
                            <!-- <div class="ratings">
                               
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('./img/chambres-doubles/lits-separes-2.jpg')?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">50,00€</h4>
                                <h4> Double Classique
                                </h4>
                                <p>Chambre double lits jumeaux</p>
                            </div>
                            <!-- <div class="ratings">
                                
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('img/chambres-doubles/lits-separes-3.jpg')?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">50,00€</h4>
                                <h4> Double Classique
                                </h4>
                                <p>chambre double lits jumeaux</p>
                            </div>
                            <!-- <div class="ratings">
                               
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('img/chambres-doubles/grands-lits-1.jpg')?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">59,00€</h4> Double Deluxe
                                <h4>
                                </h4>
                                <p> Chambre double grand lit</p>
                            </div>
                            <!-- <div class="ratings">
                              
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('img/chambres-doubles/grands-lits-2.jpg')?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">59.00€</h4>
                                <h4>Double Deluxe
                                </h4>
                                <p>Chambre double grand lit</p>
                            </div>
                            <!-- <div class="ratings">
                                
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div> -->
                        </div>
                    </div>

        </div>

    <!-- /.container -->

<?php $this->stop('main_content') ?>