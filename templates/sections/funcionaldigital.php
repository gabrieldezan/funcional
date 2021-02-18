<?php



$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";



$registros = mysqli_query($config, $query) or die(mysqli_error());



$row_registros = mysqli_fetch_assoc($registros)



?>



<style type="text/css">



#funcional-digital{color: #fff;text-shadow:1px 1px #000}



#funcional-digital h1{color: #fff;  margin-top: 20%; margin-bottom: 30px;;text-shadow:1px 1px #000}



#funcional-digital ul{list-style: none; float: left; margin-right: 30px; margin-top: 30px; padding-left: 30px; border-left: solid 1px #fff;;text-shadow:1px 1px #000}



#funcional-digital ul li{line-height: 30px;;text-shadow:1px 1px #000}

#funcional-digital .btn-padrao3{
  background: #B3FF3C;
  border-radius: 6px;
  box-shadow: 3px 3px 2px rgba(0,0,0,0.5);
  color: #0c0805;
  border: none;
  font-size: 22px;
  padding: 15px 25px;
	text-shadow: none!important;
}





#funcional-digital b{font-size: 40px; font-weight: 300; margin-bottom: 30px; float: left; width: 100%; line-height: 42px;;text-shadow:1px 1px #000}



</style>



<section class="section-home" id="funcional-digital" style="background:url(<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>) top center">



	<div class="container-fluid">



		<div class="row">



			<div class="col-sm-6 col-sm-offset-1">



				<h1><?php echo $row_registros['registros_titulo'] ?></h1>



				<?php echo $row_registros['registros_texto'] ?>



				<div class="clear30"></div>



				<a href="abertura-gratuita-de-empresa" class="btn btn-padrao3 transition">Abra sua empresa grátis</a>



			</div>



		</div>



	</div>



</section>
