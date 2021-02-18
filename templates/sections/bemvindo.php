<?php



$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";



$registros = mysqli_query($config, $query) or die(mysqli_error());



$row_registros = mysqli_fetch_assoc($registros)



?>



<style type="text/css">



#bem-vindo{color: #fff;}



#bem-vindo h1{color: #fff;  margin-top: 45%; margin-bottom: 30px; font-size: 55px;}



</style>



<section class="section-home" id="bem-vindo" style="background:url(<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>) top center" data-anchor="bem-vindo">



	<div class="container-fluid">



		<div class="row">



			<div class="col-sm-5 col-sm-offset-1">



				<h1><?php echo $row_registros['registros_titulo'] ?></h1>



				<?php echo $row_registros['registros_texto'] ?>



				<div class="clear30"></div>



				<a class="btn btn-padrao3 transition" href="nos-ajudamos-sua-empresa-decolar">Saiba mais</a>



			</div>



		</div>



	</div>



</section>
