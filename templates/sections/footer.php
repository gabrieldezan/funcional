<style type="text/css">

/*rodape*/

footer{width: 100%; float: left; background: #eee; font-size: 16px; padding: 60px 0; color: #777; font-weight: 500;}



footer a{color: #222; margin: 10px;}



</style>

<footer>

	<div class="container text-center">

		

            <?php 

            $query = "SELECT * FROM registros WHERE registros_idpg = 22 ORDER BY registros_ordem ASC";

            $registros = mysqli_query($config, $query) or die(mysqli_error());

            ?>

            <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>

           

                <?php echo $row_registros['registros_texto'] ?>

            

            <?php } ?>

            <div class="clear30"></div>



            <?php 

            $query = "SELECT * FROM registros WHERE registros_idpg = 24 ORDER BY registros_ordem ASC";

            $registros = mysqli_query($config, $query) or die(mysqli_error());

            $row_registros = mysqli_fetch_assoc($registros);

            $num_rows = mysqli_num_rows($registros);

            if($num_rows > 0){

            ?>

            

	            <?php do{ ?>

	                <a href="<?php echo $row_registros['registros_link'] ?>" target="_blank"><?php echo $row_registros['registros_texto'] ?></a>

	            <?php }while($row_registros = mysqli_fetch_assoc($registros)); ?>

           

            <?php } ?>

       



		<div class="clear40"></div>

		<div class="text-center">

			<a href="http://webthomaz.com.br" target="_blank"><img src="<?php echo $raiz ?>img/webthomaz.png"></a>

		</div>



	</div>

</footer>