<?php include('../wt_admin/php/funcoes.php'); ?>

<div class="clear40"></div>
<style type="text/css">
	#blog2{background: <?php echo $row_cores['cor_1'] ?>; padding-bottom: 0}
	#blog2 h1{color: #fff}
	#blog2 h2{margin-top: 15%; margin-bottom: 50px; font-size: 30px; font-weight: 100}
	#blog2 a{color: #fff;}
	.padding-0{padding: 0;}
	.left-0{padding-left: 0;}
	.right-0{padding-right: 0;}
</style>

<section id="blog2">
	<center>
		<h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
		<div class="clear40"></div>
	</center>
	<div class="container-fluid">
		<?php
		$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg LIMIT 4";
		$registros = mysqli_query($config, $query) or die(mysqli_error());
		$cont = 0; while ($row_registros = mysqli_fetch_assoc($registros)) { ?>
		<?php if($cont==0){ ?>
			<div class="row">
				<div class="col-sm-6 right-0">
					<a href="<?=$raiz;?><?php echo $row_templates['paginas_url'] ?>/<?=$row_registros['registros_url'];?>">
						<div class="row">
							<div class="col-md-6 col-md-offset-5 col-sm-12">
								<h2>
									<?php echo $row_registros['registros_titulo'];?>
								</h2>
								<div class="clear10"></div>
								<?php echo preg_replace('/(<[^>]+) style=".*?"/i', '$1', abreviaString($row_registros['registros_texto'], '300')); ?>
								<div class="clear20"></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 padding-0">
					<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=1&w=960&h=600" class="img-responsive">
				</div>
			</div>
		<?php }else{ ?>
			<div class="row">
				<div class="col-sm-6 padding-0">
					<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=1&w=960&h=600" class="img-responsive">
				</div>
				<div class="col-sm-6 left-0">
					<a href="<?=$raiz;?><?php echo $row_templates['paginas_url'] ?>/<?=$row_registros['registros_url'];?>">
						<div class="row">
							<div class="col-md-6 col-md-offset-1 col-sm-12">
								<h2>
									<?php echo $row_registros['registros_titulo'];?>
								</h2>
								<div class="clear10"></div>
								<?php echo preg_replace('/(<[^>]+) style=".*?"/i', '$1', abreviaString($row_registros['registros_texto'], '300')); ?>
								<div class="clear20"></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		<?php } ?>
		<?php 
		$cont++;
		if($cont==2){
			$cont=0;
		}
		?>
		<?php } ?>
	</div>
</section>