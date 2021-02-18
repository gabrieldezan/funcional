<style type="text/css">
	#promocoes{background: url(img/bg-promocoes.jpg) top center;}
	#promocoes h1{color: <?php echo $row_cores['cor_1'] ?>}
	#promocoes img{border: solid 10px <?php echo $row_cores['cor_2'] ?>;}
	#promocoes h3{color: <?php echo $row_cores['cor_1'] ?>; font-size:40px; font-weight: bold;}
	#promocoes {color: #444; font-size: 16px;}
	#promocoes b{font-size: 50px; font-weight: bold; color: <?php echo $row_cores['cor_1'] ?>;}
</style>
<?php 
$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";
$registros = mysqli_query($config, $query) or die(mysqli_error());
?>
<section id="promocoes">
	<center>
		<h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
	</center>
	<div class="clear60"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-11 col-sm-offset-1">
				<ul id="slidepromocoes">
					<?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
				    <li>
				    	<div class="col-sm-8">
					    	<img src="<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive">
				    	</div>
				    	<div class="col-sm-4">
				    		<div class="clear100"></div>
				    		<h3><?php echo $row_registros['registros_titulo'] ?></h3>
				    		<?php echo $row_registros['registros_texto'] ?>
				    	</div>
				    </li>
				    <?php } ?>
				</ul>
			</div>
		</div>
	</div>
</section>


<script type="text/javascript">
$(document).ready(function(){
	$('#slidepromocoes').lightSlider({
	    // gallery:true,
	    item:1,
	    thumbItem:0,
	    slideMargin: 0,
	    speed:500,
	    pause:5000,
	    pauseOnHover:true,
	    pager: false,
	    auto:true,
	    loop:true
	});
});
</script>