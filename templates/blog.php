<?php 
if(isset($_POST['paginas_id'])){
$busca = @$_POST['buscar'];
$paginas_id = @$_POST['paginas_id'];
$row_paginas['paginas_url'] = @$_POST['paginas_url'];
$query = "SELECT registros_imagem, registros_titulo, registros_url FROM registros WHERE registros_idpg = $paginas_id AND registros_titulo LIKE '%$busca%' OR registros_idpg = $paginas_id AND registros_texto LIKE '%$busca%'";
$registros = mysqli_query($config, $query) or die(mysqli_error());
$rows_registros = mysqli_num_rows($registros);
}
?>
<div class="clear40"></div>
<section class="container">
	<h4>Buscar por palavra</h4>
	<form method="post" action="<?php echo $raiz; ?>blog">
        <div class="input-group">
            <input type="hidden" name="paginas_id" value="<?php echo $row_paginas['paginas_id'] ?>">
            <input type="hidden" name="paginas_url" value="<?php echo $row_paginas['paginas_url'] ?>">
            <input type="text" name="buscar" placeholder="Procure por uma palavra:" class="form-control" required="required">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit" style="height: 55px;">Buscar</button>
            </span>
        </div>
    </form>
    <div class="clear20"></div>
    <?php if(isset($_POST['paginas_id'])){ ?>
    Você buscou por: <strong><?php echo $_POST['buscar']; ?></strong>
    <div class="clear40"></div>
    <?php } ?>
    <h4>Buscar por categorias</h4>
		<a class="categoria label label-default" href="<?php echo $raiz ?>blog">Todas</a>
    <?php 
	$query = "SELECT categorias_id, categorias_titulo, categorias_url FROM categorias WHERE categorias_idpg = $paginas_id and categorias_pai = 0";
	$categorias = mysqli_query($config, $query) or die(mysqli_error());
    while($row_categorias = mysqli_fetch_assoc($categorias)){
	?>
		<a class="categoria label label-default" href="<?php echo $raiz.$url[0]."/".$row_categorias['categorias_url'] ?>"><?php echo $row_categorias['categorias_titulo'] ?></a>
	<?php } ?>
	<hr>
	<div class="row blog">
		<?php while ($row_registros = mysqli_fetch_assoc($registros)) { ?>
			<div class="col-sm-6" data-mh="mygroup">
				<div class="post">
					<a href="<?=$raiz;?><?php echo $row_paginas['paginas_url'] ?>/<?=$row_registros['registros_url'];?>">
						<h2>
							<?php echo $row_registros['registros_titulo'];?>
						</h2>
						<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=1&w=650&h=500" class="img-responsive">
						<div class="clear10"></div>
						<strong>Publicado em:</strong> 
						<?php 
						$dataBlog = $row_registros['registros_data']; 
						$dataBlog = explode('-', $dataBlog);
						echo " ".$dataBlog[2] . "/" . $dataBlog[1] . "/" . $dataBlog[0];
						?>
						<div class="clear10"></div>
						<?php echo preg_replace('/(<[^>]+) style=".*?"/i', '$1', abreviaString($row_registros['registros_texto'], '300')); ?>
						<div class="clear20"></div>
						<a class="bt-blog" href="<?=$raiz;?><?php echo $row_paginas['paginas_url'] ?>/<?=$row_registros['registros_url'];?>">Leia mais</a>
					</a>
				</div>
			</div>
    	<?php }?>
	</div>
</section>

<div class="container text-center">
	<div class="clear40"></div>
<?php
if($pagina !== 0){ // Sem isto irá exibir "Página Anterior" na primeira página.
?>
<a class="btn btn-default" href="<?php echo $raiz.$urlPaginacao ?>?pagina=<?php echo $pagina-1; ?>"><i class="fa fa-step-backward" aria-hidden="true"></i> Anterior</a>
<?php
}
if($rows_registros > 0){
?>
<a class="btn btn-default" href="<?php echo $raiz.$urlPaginacao ?>?pagina=<?php echo $pagina+1; ?>"><i class="fa fa-step-forward" aria-hidden="true"></i> Próxima</a>
<?php } ?>
</div>
<div class="clear40"></div>

<style type="text/css">
	.post{text-align: justify; margin-bottom: 50px;}
	.post a{color: #777;}
	.post h2{color: #555; margin-bottom: 20px; text-align: left;}
</style>