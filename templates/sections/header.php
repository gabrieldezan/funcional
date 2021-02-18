<style type="text/css">



#header{
  position: fixed;
  top: 0;
  width: 100%;
  float: left;
  z-index: 3;
  padding-bottom: 30px;
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+29,000000+29,000000+71,000000+100&0.65+8,0.33+54,0.07+83,0+100 */
  background: -moz-linear-gradient(top, rgba(0,0,0,0.65) 8%, rgba(0,0,0,0.5) 29%, rgba(0,0,0,0.33) 54%, rgba(0,0,0,0.18) 71%, rgba(0,0,0,0.07) 83%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
  background: -webkit-linear-gradient(top, rgba(0,0,0,0.65) 8%,rgba(0,0,0,0.5) 29%,rgba(0,0,0,0.33) 54%,rgba(0,0,0,0.18) 71%,rgba(0,0,0,0.07) 83%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to bottom, rgba(0,0,0,0.65) 8%,rgba(0,0,0,0.5) 29%,rgba(0,0,0,0.33) 54%,rgba(0,0,0,0.18) 71%,rgba(0,0,0,0.07) 83%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
}



#header .btn{margin-left: 20px;}



#logo-quanto-custa{display: none;}



#logo-funcional-digital{display: none;}



#header.absolute{position: absolute;}







.menu{position: fixed; right: 20px; z-index: 10; top: 35%; text-align: right; list-style: none;}



.menu li a{color: #fff; padding-right: 15px; line-height: 35px;}



.menu li{position: relative; margin-bottom: 10px;}



.menu li .img{width: 35px; height: 35px; border:solid 2px #fff; border-radius: 100%; background: transparent; text-align: center; float: right;}



/*.menu li .img{width: 10px; height: 10px; border-radius: 100%; border:solid 2px #fff; background: #fff; position: absolute; right: 0; top: 50%; margin-top: -5px;}*/



.menu li .img img{opacity: 1; margin-top: -4px;}



.menu li:hover .img{background: <?php echo $row_cores['cor_1'] ?>; border-color: <?php echo $row_cores['cor_1'] ?>}



.menu li:hover img{display: inline-block; opacity: 1}



.menu li:hover a{color:<?php echo $row_cores['cor_1']; ?>}



.menu li a:focus{color:<?php echo $row_cores['cor_1']; ?>; font-weight: bold; text-decoration: none;}







.menu.escuro li a{color:<?php echo $row_cores['cor_2']; ?>}



.menu.escuro li .img{background:<?php echo $row_cores['cor_2']; ?>; border-color:<?php echo $row_cores['cor_2']; ?> }



.menu.escuro li:hover .img{background:<?php echo $row_cores['cor_1']; ?>; border-color:<?php echo $row_cores['cor_1']; ?> }



.menu.escuro li:hover a{color:<?php echo $row_cores['cor_1']; ?>;}





@media(max-width: 1600px){

.menu li span{opacity: 0;}

.menu li:hover span{opacity: 1;}

}

</style>







<?php if(!isset($_GET['paginas_url'])){ ?>



<ul class="menu hidden-xs hidden-sm">



    <li><a class="transition scroll" href="#bem-vindo"><span class="transition">Bem vindo</span><div class="img transition"><img class="transition" src="<?php echo $raiz ?>img/icon-bem-vindo.png"></div></a></li>



    <li><a class="transition scroll" href="#inovador"><span class="transition">Inovador</span><div class="img transition"><img class="transition" src="<?php echo $raiz ?>img/icon-inovacao.png"></div></a></li>



    <li><a class="transition scroll" href="#plataforma-integrada"><span class="transition">Plataforma Integrada</span><div class="img transition"><img class="transition" src="<?php echo $raiz ?>img/icon-plataforma-integrada.png"></div></a></li>



    <li><a class="transition scroll" href="#funcional-digital"><span class="transition">Funcional digital</span><div class="img transition"><img class="transition" src="<?php echo $raiz ?>img/icon-funcional-digital.png"></div></a></li>



    <li><a class="transition scroll" href="#quanto-custa"><span class="transition">Quanto custa?</span><div class="img transition"><img class="transition" src="<?php echo $raiz ?>img/icon-quanto-custa.png"></div></a></li>



    <li><a class="transition scroll" href="#ficou-na-duvida"><span class="transition">Ficou na dúvida?</span><div class="img transition"><img class="transition" src="<?php echo $raiz ?>img/icon-ficou-na-duvida.png"></div></a></li>



</ul>



<?php } ?>



<header id="header" class="hidden-xs hidden-sm <?php if(isset($_GET['paginas_url'])){echo "absolute";} ?>">



    <div class="container-fluid">



        <div class="row">



            <div class="col-sm-3">



                <div class="clear20"></div>



                <a href="<?php echo $raiz ?>">



                    <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_configuracoes['configuracoes_logo'] ?>" id="logo" class="logo img-responsive">



                    <img src="<?php echo $raiz ?>img/logo-quanto-custa.png" id="logo-quanto-custa" class="logo img-responsive">



                    <img src="<?php echo $raiz ?>img/logo-funcional-digital.png" id="logo-funcional-digital" class="logo img-responsive">



                </a>



            </div>



            <div class="col-sm-9 text-right">



                <div class="clear20"></div>



<!--                 <a class="btn btn-padrao transition" href=" https://funcional.octadesk.com/kb" target="_blank">Base de conhecimento</a>
 -->

                <a class="btn btn-padrao transition <?php if(!isset($_GET['paginas_url'])){ echo "scroll"; }?>" href="<?php echo $raiz ?>#ficou-na-duvida">Fale com um especialista</a>



                <a class="btn btn-padrao transition" href="<?php echo $raiz ?>blog">Blog</a>



                <a class="btn btn-padrao2 transition" href="https://www.dominioatendimento.com:82/login.html" target="_blank">Login</a>



            </div>



        </div>



    </div>



</header>



<?php include('header2-mobile.php'); ?>
