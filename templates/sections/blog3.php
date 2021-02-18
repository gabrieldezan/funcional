<?php include('../wt_admin/php/funcoes.php'); ?>

<div class="clear40"></div>
<style type="text/css">
	#blog3{background:  <?php echo $row_cores['cor_1'] ?>}
	#blog3 h1{color:#fff}
	#blog3 .post{text-align: center; margin-bottom: 50px; background: #fff; padding: 20px 0}
	#blog3 .post h2{color: <?php echo $row_cores['cor_1'] ?>; padding: 15px 0; text-align: center;}
	#blog3 .text{padding: 15px;}
</style>

<section id="blog3">
	<div class="container">
		<center>
			<h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
			<div class="clear40"></div>
		</center>
		<div class="row">
			<?php
			$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg LIMIT 3";
			$registros = mysqli_query($config, $query) or die(mysqli_error());
			while ($row_registros = mysqli_fetch_assoc($registros)) { ?>
				<div class="col-sm-4 text-center">
					<div class="post">
						<a href="<?=$raiz;?><?php echo $row_templates['paginas_url'] ?>/<?=$row_registros['registros_url'];?>">
							<h2>
								<?php echo $row_registros['registros_titulo'];?>
							</h2>
							<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=1&w=370&h=370" class="img-responsive">
							<div class="clear10"></div>
							<div class="text">
							<?php echo preg_replace('/(<[^>]+) style=".*?"/i', '$1', abreviaString($row_registros['registros_texto'], '300')); ?>
							</div>
							<div class="clear20"></div>
							<button class="btn btn-padrao2">Ver mais</button>
						</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>