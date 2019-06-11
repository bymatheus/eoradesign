        
        <?php
            foreach ($projetos as $p) {
                if(isset($p['img'])){
        ?>
        
        <div class="modal-portfolio modal fade" id="<?=$p['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                                <?php
                                    foreach ($p['img'] as $key => $value) {
                                        if($key=="1"){
                                ?>
                                <div class="carousel-item active" style="background-image: url('assets/img/portfolio/<?=$value?>');"></div>
                                <?php            
                                        }else{
                                ?>
                                <div class="carousel-item" style="background-image: url('assets/img/portfolio/<?=$value?>');"></div>
                                <?php            
                                        }
                                    }
                                ?>
                            </div>
                            
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
                }
            }
        ?>