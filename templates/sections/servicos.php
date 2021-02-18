<style type="text/css">
#servicos{width: 100%; float: left; background: url(img/bg-servicos.jpg) top center fixed <?php echo $row_cores['cor_1'] ?>; }
#servicos h1{color: #fff; }
.servico{background:transparent; border: solid 1px #fff; min-height: 360px; width: 100%; float: left; text-align: center; margin-bottom: 30px;}
.servico h3{color: #371107; font-size: 14px; color: #fff; font-weight: bold}
.servico img{margin-top: 80px}
.servico:hover{background:<?php echo $row_cores['cor_2'] ?>; border-color: <?php echo $row_cores['cor_1'] ?>;}
</style>

<div class="clear"></div>
<section id="servicos">
    <center>
        <h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
    </center>
    <div class="clear40"></div>
    <div class="container">
        <div class="row">
            <?php 
            $query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_ordem ASC";
            $registros = mysqli_query($config, $query) or die(mysqli_error());
            ?>
            <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
                <div class="col-sm-4">
                    <div class="servico text-center">
                        <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>" style="height:150px;">
                        <h3><?php echo $row_registros['registros_titulo'] ?></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>