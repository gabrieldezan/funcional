<style type="text/css">
    
#servicos{background: <?php echo $row_cores['cor_1'] ?>; color: #fff;}
#servicos{position: relative;}
#servicos h1{color: #fff;}
#servicos h2{font-size: 80px; margin-top: 30%}
#servicos img{display: inline-block;}

</style>

<section id="servicos">
    <div class="container">
        <div class="clear60"></div>
        <center>
            <h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
        </center>
        <div id="servico-desktop" class="hidden-xs">
        <?php 
        $query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_ordem ASC";
        $registros = mysqli_query($config, $query) or die(mysqli_error());
        ?>
        <?php $cont==0; while($row_registros = mysqli_fetch_assoc($registros)){ ?> 
            <?php if($cont==0){ ?>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive">
                </div>
                <div class="col-sm-6 text-center">
                    <h2><?php echo $row_registros['registros_titulo'] ?></h2>
                    <?php echo $row_registros['registros_texto'] ?>
                </div>
            </div>
            <?php }else{ ?>
            <div class="row">
                <div class="col-sm-6 text-center">
                    <h2><?php echo $row_registros['registros_titulo'] ?></h2>
                    <?php echo $row_registros['registros_texto'] ?>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive">
                </div>
            </div>
            <?php } ?>
        <?php 
        $cont++;
        if($cont==2){
            $cont=0;
        }
        } 
        ?>
        </div>
        <div id="servico-mobile" class="visible-xs">
            <?php 
            $query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_ordem ASC";
            $registros = mysqli_query($config, $query) or die(mysqli_error());
            ?>
            <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?> 
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive">
                    </div>
                    <div class="col-sm-6 text-center">
                        <h2><?php echo $row_registros['registros_titulo'] ?></h2>
                        <?php echo $row_registros['registros_texto'] ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
