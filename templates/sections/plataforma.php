<?php



$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";



$registros = mysqli_query($config, $query) or die(mysqli_error());



$row_registros = mysqli_fetch_assoc($registros)



?>



<style type="text/css">



#plataforma-integrada{color: #fff; background-position: bottom center !important;}



#plataforma-integrada h1{color: #fff; margin-top: 100px; margin-bottom: 30px;font-size: 55px!important;}
#plataforma-integrada p{text-shadow: 1px 1px rgba(0,0,0,0.65)}
#plataforma-integrada .btn-padrao3{
  background: #B3FF3C;
	border-radius: 6px;
	box-shadow: 3px 3px 2px rgba(0,0,0,0.5);
	color: #0c0805;
	border: none;
	text-shadow: none!important;
}



</style>



<section class="section-home" id="plataforma-integrada" style="background:url(<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>) top center <?php echo $row_cores['cor_1'] ?>" data-anchor="plataforma-integrada">



	<div class="container-fluid">



		<div class="row">



			<div class="col-sm-8 col-sm-offset-2 text-center">



				<h1><?php echo $row_registros['registros_titulo'] ?></h1>



				<?php echo $row_registros['registros_texto'] ?>



				<div class="clear30"></div>



				<a class="btn btn-padrao3 transition" href="tecnologia">Nossa tecnologia</a>



			</div>



		</div>



	</div>



</section>
