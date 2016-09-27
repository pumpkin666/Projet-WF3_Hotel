<?php $this->layout('layout', ['title' => 'ACCUEIL']) // -> 'Layout' par défaut?>

<?php $this->start('main_content') ?>
<!-- Custom CSS -->
    <!--     <link href="css/shop-homepage.css" rel="stylesheet">
        <script src="js/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    	<link href="jquery-ui1.12.0.custom">
    -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

    <!-- </head>

    <body> -->

        <!--  - Navigation -->
    <!--     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!- - Brand and toggle get grouped for better mobile display -
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <!- -    <span class="sr-only">Toggle navigation</span> -
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                Collect the nav links, forms, and other content for toggling
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="< ?= $this->url('accueil-index') ?>">Accueil</a>
                        </li>
                       <li>
                            <a href="reservation.php">Réservation</a>
                        </li>
                        
                        <li>
                            <a href="< ?= $this->url('contactez-nous') ?>">Contact</a>
                        </li>

                    </ul>
                </div>
                <!- - /.navbar-collapse -
            </div>
            <!- - /.container -
        </nav> --> 

        <!-- Page Content -->


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
                            <img class="slide-image" src="<?= $this->assetUrl('img/suites/suites-1.jpg') ?>" alt="suite">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="<?= $this->assetUrl('img/suites/suites-2.jpg') ?>" alt="suite">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="<?= $this->assetUrl('img/suites/suites-3.jpg') ?>"" alt="suite">
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
                    <img src="<?=$this->assetUrl('img/chambres-simples/simples-1.jpg') ?>" alt="simple">
                    <div class="caption">
                        <h4 class="pull-right">39.00€</h4>
                        <h4>Simple Deluxe
                        </h4>
                        <p><a href="<?= $this->url('chambres-simples') ?>">Chambre Simple</a> </p>
                    </div>

                </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="<?=$this->assetUrl('img/chambres-doubles/grands-lits-1.jpg') ?>" alt="double">
                    <div class="caption">
                        <h4 class="pull-right">59.00€</h4>
                        <h4>Double Deluxe
                        </h4>
                        <p><a href="<?= $this->url('chambres-doubles') ?>">Chambre Double</a></p>
                    </div>

                </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="<?=$this->assetUrl('img/chambres-triples/lits-1.jpg') ?>" alt="triple">
                    <div class="caption">
                        <h4 class="pull-right">79.00€</h4>
                        <h4>Triple Deluxe
                        </h4>
                        <p><a href="<?= $this->url('chambres-triples') ?>">Chambre triple</a></p>
                    </div>

                </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="<?=$this->assetUrl('img/suites/suites-2.jpg') ?>"  alt="suite">
                    <div class="caption">
                        <h4 class="pull-right">99.00€</h4>
                        <h4>Suite César
                        </h4>
                        <p><a href="<?= $this->url('suites') ?>">Suite</a></p>
                    </div>
                                        <!-- <div class="ratings">

                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </p>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="thumbnail">
                                        <img src="<?=$this->assetUrl('img/suites/suites-1.jpg') ?>" alt="suite">
                                        <div class="caption">
                                            <h4 class="pull-right">99.00€</h4>
                                            <h4>Suite Constantine
                                            </h4>
                                            <p><a href="<?= $this->url('suites') ?>">Suite</a></p>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>



                            <!-- /.container -->
    <!--
    <div class="container">

        <hr>

    </div>-->
    <!-- /.container -->
    <!--
    <script type="text/javascript">
        $(function () {
        $("#datepicker1_arrivee").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function (selectedDate) {
                $("#datepicker2_depart").datepicker("option", "minDate", selectedDate);
            }
        });
        $("#datepicker2_depart").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function (selectedDate) {
                $("#datepicker1_arrivee").datepicker("option", "maxDate", selectedDate);
            }
        });
    }); 
-->

    <!-- 
    </body>
    </html>
-->
<?php $this->stop('main_content') ?>