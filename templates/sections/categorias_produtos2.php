<style type="text/css">
    #produtos{color: #fff; text-align: center; background: <?php echo $row_cores['cor_1'] ?>;}
    #produtos .categoria-icon{padding: 80px 20px; min-height: 400px; width: 100%; float: left; text-align: center; margin-bottom: 30px;}
    #produtos .categoria-icon:hover{background-image: none; background: <?php echo $row_cores['cor_2'] ?>; }
    #produtos .categoria-icon img{height:100px; display: inline-block;}
    #produtos .categoria-icon h3{color: #fff; font-size: 14px; font-weight: bold; text-transform: uppercase; margin-top: 60%}
</style>
<section id="produtos">
    <?php 
    $query = "SELECT * FROM categorias WHERE categorias_idpg = $template_idpg";
    $categorias = mysqli_query($config, $query) or die(mysqli_error());
    ?>
    <center>
        <h1>Produtos</h1>
    </center>
    <div class="clear40"></div>
    <div class="container">
        <div class="row">
            <?php while ($row_categorias = mysqli_fetch_assoc($categorias)) { ?>
            <div class="col-sm-4">
                <a style="background:url(<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_categorias['categorias_imagem'] ?>) center center" class="categoria-icon" href="<?php echo $raiz ?><?php echo $row_templates['paginas_url'] ?>/<?php echo $row_categorias['categorias_url'] ?>">
                    <h3><?php echo $row_categorias['categorias_titulo'] ?></h3>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>