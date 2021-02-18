<style type="text/css">
#ambientes{width: 100%; float: left; }
#ambientes h1{color: <?php echo $row_cores['cor_1'] ?>}
#ambientes .grid2{position: relative; min-height: 518px; width: 100%; float: left;}
#ambientes .grid2 h3{margin-top:-250px; z-index: 30; color: #fff; /*text-shadow:1px 1px 1px #000;*/ position: relative; font-size: 25px; text-transform: uppercase;}
#ambientes .grid2 img{filter: brightness(80%); webkit-filter: brightness(80%); z-index: 20; position: relative; display: inline-block;}
#ambientes .grid2:hover img{filter: brightness(40%); webkit-filter: brightness(40%); z-index: 20; position: relative; display: inline-block;}

</style>
   
<div class="clear"></div>
<section id="ambientes">
    <center>
        <h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
    </center>
    <div class="clear40"></div>
    <div class="container">
        <div class="row">
            <?php 
            $query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_ordem ASC LIMIT 4";
            $registros = mysqli_query($config, $query) or die(mysqli_error());
            ?>
            <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
                <div class="col-sm-3">
                    <a href="<?php echo $raiz ?><?php echo $row_templates['paginas_url'] ?>/<?php echo $row_registros['registros_url'] ?>" class="grid2 text-center">
                        <img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=1&w=263&h=518" class="img-responsive transition">
                        <h3><?php echo $row_registros['registros_titulo'] ?></h3>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

</section>
