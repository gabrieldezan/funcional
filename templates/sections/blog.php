<?php include('../wt_admin/php/funcoes.php'); ?>

<div class="clear40"></div>
<style type="text/css">
	#blog h1{color: <?php echo $row_cores['cor_1'] ?>}
	.post{text-align: justify; margin-bottom: 50px;}
	.post a{color: #777;}
	.post h2{color: #555; margin-bottom: 20px; text-align: left;}
</style>

<section class="container" id="blog">
	<center>
		<h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
		<div class="clear40"></div>
	</center>
	<div class="row">
		<?php
		$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg LIMIT 2";
		$registros = mysqli_query($config, $query) or die(mysqli_error());
		while ($row_registros = mysqli_fetch_assoc($registros)) { ?>
			<div class="col-sm-6">
				<div class="post">
					<a href="<?=$raiz;?><?php echo $row_templates['paginas_url'] ?>/<?=$row_registros['registros_url'];?>">
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
						<a class="bt-blog" href="<?=$raiz;?><?php echo $row_templates['paginas_url'] ?>/<?=$row_registros['registros_url'];?>">Leia mais</a>
					</a>
				</div>
			</div>
		<?php } ?>
	</div>
</section>