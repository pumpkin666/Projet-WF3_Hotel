<?php $this->layout('layout', ['title' => '  ']) ?>

<?php $this->start('main_content') ?>

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
                                    <img class="slide-image" src="<?= $this->assetUrl('img/chambres-triples/lits-separes-1.jpg')?>"  alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?= $this->assetUrl('img/chambres-triples/lits-1.jpg')?>" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?= $this->assetUrl('img/chambres-triples/lits-2.jpg') ?>" alt="">
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
                        <div class="row-1">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('img/chambres-triples/lits-separes-1.jpg')?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">70,00€</h4>
                                <h4><a href="#">Triple classique</a>
                                </h4>
                                <p>Chambre triple : trois lits séparés.</p>
                            </div>
                            

                        </div>
                    </div>
                </div>   

                   <div class="row-2"> 
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('img/chambres-triples/lits-separes-2.jpg') ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">70,00€</h4>
                                <h4><a href="#">Triple classique</a>
                                </h4>
                                <p>Chambre triple : trois lits séparés</p>
                            </div>
                            

                        </div>
                    </div>
                </div>
                
                <div class="row-3">    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('img/chambres-triples/lits-separes-3.jpg')?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">70,00€</h4>
                                <h4><a href="#">Triple classique</a>
                                </h4>
                                <p>Chambre triple : trois lits séparés</p>
                            </div>
                            

                        </div>
                    </div>
                </div>
                
                <div class="row-4">    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('image/chambres-triples/lits-1.jpg')?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">79,00€</h4>
                                <h4><a href="#">Triple Deluxe</a>
                                </h4>
                                <p>Chambre Deluxe : un grand lit et un petit lit.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="row-5">        
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?= $this->assetUrl('img/chambres-triples/lits-2.jpg')?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">79,00€</h4>
                                <h4><a href="#">Triple Deluxe</a>
                                </h4>
                                <p>Chambre Deluxe avec un grand lit et un petit lit.</p>
                            </div>
                            

                        </div>
                    </div>
                </div> 
            </div>    
        </div>
    </div>
 </div>       

    
<?php $this->stop('main_content') ?>