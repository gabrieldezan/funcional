<?php 
$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_ordem ASC LIMIT 4";
$registros = mysqli_query($config, $query) or die(mysqli_error());
?>
<?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
    <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive transition">
<?php } ?>