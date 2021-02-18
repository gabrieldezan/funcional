<style type="text/css">

    .navbar-inverse{border-radius: 0; padding: 10px;}

    .navbar{margin-bottom: 0}

</style>

<div id="header-mobile" class="visible-xs visible-sm">

    <!-- Navigation -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a href="<?php echo $raiz ?>">

                    <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_configuracoes['configuracoes_logo'] ?>" class="img-responsive logo-mobile">

                </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <?php 

                $query = "SELECT paginas_id, paginas_titulo, paginas_url FROM paginas WHERE paginas_menu = 1 ORDER BY paginas_ordem_menu ASC";

                $paginas = mysqli_query($config, $query) or die(mysqli_error());

                ?>

                <ul class="nav navbar-nav">

                    <?php while($row_paginas = mysqli_fetch_assoc($paginas)){ ?>

                    <li><a  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="scroll" href="<?php echo $raiz ."#". $row_paginas['paginas_url'] ?>"><?php echo $row_paginas['paginas_titulo'] ?></a></li>

                    <?php } ?>

                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

        <!-- /.container -->

    </nav>

</div>  

<div class="clear"></div>