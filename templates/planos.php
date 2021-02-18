<style type="text/css">
	#planos{font-size: 14px;}
	#planos .table {overflow: auto;}
	#planos .table td{padding: 10px;}
	#planos .table thead tr th:first-child{background: #fff !important; color: #222; font-size: 20px; padding-left: 0}
	#planos .table thead tr th{background: <?php echo $row_cores['cor_2'] ?>; border:none; color: #fff; padding: 20px;}
	#planos .table thead tr th:nth-child(odd){background: <?php echo $row_cores['cor_1'] ?>}
	#planos .table b{margin-top: 30px; float: left; color:<?php echo $row_cores['cor_2']; ?>}
	#planos .table .price b{margin-top: 0; font-size: 25px; color:<?php echo $row_cores['cor_2']; ?>}
	#planos .table tr:nth-child(odd){background: #eee;}
	#planos .table tr:hover{background: #ddd}
	#planos .table td{border:none;}
	#planos .table td .fa-check{color:<?php echo $row_cores['cor_1']; ?>}

</style>
<div class="clear60"></div>
<div id="planos">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<?php 
				while($row_planos = mysqli_fetch_assoc($registros)){ ?>
					<h3><?php echo $row_planos['registros_titulo']; ?></h3>
					<?php echo str_replace('<td>x</td>', '<td><i class="fa fa-check" aria-hidden="true"></i></td>', $row_planos['registros_texto']); ?>
					<hr>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="clear60"></div>