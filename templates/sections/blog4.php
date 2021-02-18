<style type="text/css">
	#noticias{}
	#noticias h1{margin-bottom:-50px;}
	#noticias h2{margin-top: 130px; width: 100%; float: left;}
	#noticias .thumb{margin-right: 20px; float: left;}
	#noticias .pagerNoticias{list-style: none;}
</style>

<div class="clear"></div>
<section id="noticias">
	<div class="container-fluid">
		<div class="row">
		  	<div class="col-sm-4 col-sm-offset-2">
		  		<h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
		  	</div>
		</div>
  	</div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	  	<?php 
		$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_id DESC LIMIT 4";
		$registros = mysqli_query($config, $query) or die(mysqli_error());
		while($row_registros = mysqli_fetch_assoc($registros)){
		?>
	    <div class="item">
	    	<div class="container-fluid">
			  	<div class="row">
			  		<div class="col-sm-4 col-sm-offset-2">
				      	<h2><?php echo $row_registros['registros_titulo'] ?></h2>
						<?php 
						$dataBlog = $row_registros['registros_data']; 
						$dataBlog = explode('-', $dataBlog);
						echo " ".$dataBlog[2] . "/" . $dataBlog[1] . "/" . $dataBlog[0];
						?>
						<div class="clear40"></div>
						<?php echo preg_replace('/(<[^>]+) style=".*?"/i', '$1', abreviaString($row_registros['registros_texto'], '300')); ?>
						<div class="clear20"></div>
						<a href="<?php echo $raiz ?><?php echo $row_templates['paginas_url'] ?>/<?php echo $row_registros['registros_url'] ?>">Leia mais</a>
				    </div>
			  		<div class="col-sm-6">
			  			<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=1&w=960&h=500" class="img-responsive">
			  		</div>
			    </div>
		    </div>
	    </div>
		<?php } ?>
	  </div>
	  <div class="clear20"></div>
	  <div class="container-fluid">
	  	<div class="col-sm-6 col-sm-offset-6">
	  		<!-- Indicators -->
			<ul class="pagerNoticias">
				<?php 
				$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_id DESC LIMIT 4";
				$registros = mysqli_query($config, $query) or die(mysqli_error());
				$cont=0;
				while($row_registros = mysqli_fetch_assoc($registros)){
				?>
			    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $cont ?>">
			    	<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=1&w=175&h=150" class="img-responsive thumb">
			    </li>
			    <?php $cont++; } ?>
			</ul>
	  	</div>
	  </div>
  </div>
  <div class="clear80"></div>

  <center><a class="btn btn-padrao2" href="<?php echo $row_templates['paginas_url'] ?>">VER TODOS</a></center>
  <script type="text/javascript">
  	$('#noticias .item:first-child').addClass('active');
  	$('#carousel-indicators li:first-child').addClass('active');
  </script>
</section>