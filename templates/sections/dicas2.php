<?php include('../wt_admin/php/funcoes.php'); ?>

<div class="clear40"></div>
<style type="text/css">
	#dicas h1{color: <?php echo $row_cores['cor_1'] ?>}
	.post{text-align: center; margin-bottom: 50px;}
	.post a{color: #777;}
	.post h2{color: <?php echo $row_cores['cor_1'] ?>; margin-bottom: 20px; text-align: center;}
</style>

<section class="container" id="dicas">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-6">
			<h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
			<div class="clear40"></div>
			<?php
			$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg LIMIT 3";
			$registros = mysqli_query($config, $query) or die(mysqli_error());
			while ($row_registros = mysqli_fetch_assoc($registros)) { ?>
				<div class="post">
					<a href="<?=$raiz;?><?php echo $row_templates['paginas_url'] ?>/<?=$row_registros['registros_url'];?>">
						<h2>
							<?php echo $row_registros['registros_titulo'];?>
						</h2>
						<div class="clear10"></div>
						<?php echo preg_replace('/(<[^>]+) style=".*?"/i', '$1', abreviaString($row_registros['registros_texto'], '300')); ?>
						<div class="clear20"></div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>