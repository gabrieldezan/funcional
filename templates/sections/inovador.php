<?php

$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";

$registros = mysqli_query($config, $query) or die(mysqli_error());

$row_registros = mysqli_fetch_assoc($registros)

?>

<style type="text/css">

#inovador{color: #fff; }

#inovador img{width: 18px !important;}

#inovador h1{color:<?php echo $row_cores['cor_1']; ?>; margin-top: 22%; margin-bottom: 30px;font-size:55px;text-shadow:1px 1px #000}

#inovador ul{list-style: none;}

#inovador ul li{list-style: none;margin-bottom: 15px;}

#inovador b{font-size: 25px; font-weight: 300}

#inovador .btn-padrao2 {
	background: #B3FF3C;
	border-radius: 6px;
	box-shadow: 3px 3px 2px rgba(0,0,0,0.5);
	color: #0c0805;
	border: none;
	text-shadow: none!important;
}


</style>

<section class="section-home" id="inovador" style="background:url(<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>) top center">

	<div class="container-fluid">

		<div class="row">

			<div class="col-sm-8 col-sm-offset-1" >

				<h1><?php echo $row_registros['registros_titulo'] ?></h1>

				<?php

				$texto = $row_registros['registros_texto'];

				$texto = str_replace('<img src="uploads/', '<img src="'.$raiz_admin.'uploads/', $texto);

				echo $texto;

				?>

				<div class="clear30"></div>

				<a class="btn btn-padrao3 transition" href="portfolio360">Portfólio 360°</a>

				<a class="btn btn-padrao2 transition" href="nossa-historia">Nossa história</a>

			</div>

		</div>

	</div>

</section>
