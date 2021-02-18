<section class="container">
    <div class="row">
        <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
        <div class="col-sm-6">
            <?php echo $row_registros['registros_texto'] ?>
        </div>
        <div class="col-sm-6">
            <?php if(isset($row_registros['registros_imagem'])){ ?>
            <img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=2&w=285&h=150" class="img-responsive">
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>
