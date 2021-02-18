<style type="text/css">
	#tecnologia section{background: #fff; width: 100%; float: left; padding: 58px 0; color: #777; font-weight: 500; border-top:solid 1px #eee;}
	/*#tecnologia section:nth-child(odd){background: #eee;}*/
	#tecnologia .icone{display: inline-block; margin-top: 10%}
	#tecnologia h3{font-size: 25px;font-weight: bold; color:<?php echo $row_cores['cor_1']; ?>}
	#tecnologia .col-sm-8 img{max-width: 100%; margin-top: 20px;}
</style>
<article id="tecnologia">
	<?php $cont=0; while($row_registros = mysqli_fetch_assoc($registros)){ ?>
	<section data-anime="top">
		<div class="container">
			<div class="row">
				<?php if($cont==0){ ?>
					<div class="col-sm-4 text-center">
						<img src="<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive icone">
					</div>
					<div class="col-sm-8">
						<h3><?php echo $row_registros['registros_titulo'] ?></h3>
						<?php
						$texto = $row_registros['registros_texto'];
						$texto = str_replace('<img src="uploads/', '<img src="'.$raiz_admin.'uploads/', $texto);
						echo $texto;
						?>
					</div>
				<?php }else{ ?>
					<div class="col-sm-8">
						<h3><?php echo $row_registros['registros_titulo'] ?></h3>
						<?php
						$texto = $row_registros['registros_texto'];
						$texto = str_replace('<img src="uploads/', '<img src="'.$raiz_admin.'uploads/', $texto);
						echo $texto;
						?>
					</div>
					<div class="col-sm-4 text-center">
						<img src="<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive icone">
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php $cont++; 
		if($cont==2){$cont=0;} 
	} ?>
</article>
