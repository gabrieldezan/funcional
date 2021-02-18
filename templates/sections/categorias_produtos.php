<style type="text/css">
    #produtos{background: <?php echo $row_cores['cor_1'] ?>; color: #fff; text-align: center;}
    #produtos .categoria-icon{padding: 20px; min-width: 180px; min-height: 180px; border: solid 4px #fff; display: inline-block; margin: 10px;}
    #produtos .categoria-icon:hover{background: <?php echo $row_cores['cor_2'] ?>}
    #produtos .categoria-icon img{height:80px; display: inline-block;}
    #produtos .categoria-icon h3{color: #fff; font-size: 14px; font-weight: bold; text-transform: uppercase;}
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
        <form method="post" action="<?php echo $raiz; ?><?php echo $row_templates['paginas_url'] ?>">
            <div class="input-group">
                <input type="hidden" name="paginas_id" value="<?php echo $row_templates['templates_home_idpg'] ?>">
                <input type="hidden" name="paginas_url" value="<?php echo $row_templates['paginas_url'] ?>">
                <input type="text" name="buscar" placeholder="Digite o produto que você procura:" class="form-control" required="required">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" style="height: 55px;">Buscar</button>
                </span>
            </div>
        </form>
    </div>
    <div class="clear40"></div>
    <?php while ($row_categorias = mysqli_fetch_assoc($categorias)) { ?>
        <a class="categoria-icon" href="<?php echo $raiz ?><?php echo $row_templates['paginas_url'] ?>/<?php echo $row_categorias['categorias_url'] ?>">
            <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_categorias['categorias_imagem'] ?>">
            <h3><?php echo $row_categorias['categorias_titulo'] ?></h3>
        </a>
    <?php } ?>
</section>