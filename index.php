<?php
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
if ((strpos($_SERVER['HTTP_HOST'], 'www.') === false))
{
    header('Location: https://www.'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
session_start();
$fileconfig = 'wt_admin/cn/config.php';
if (file_exists($fileconfig)) {
    include('wt_admin/cn/config.php');
}else{
    if (file_exists('instalar.html')) {
        header('Location:instalar.html');
        exit();
    }else{
        header('Location:errors/404.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    include('wt_admin/php/funcoes.php');
    $query = "SELECT * FROM configuracoes";
    $configuracoes = mysqli_query($config, $query) or die(mysqli_error());
    $row_configuracoes = mysqli_fetch_assoc($configuracoes);
    $titulo = $row_configuracoes['configuracoes_titulo'];
    $query = "SELECT * FROM cores";
    $cores = mysqli_query($config, $query) or die(mysqli_error());
    $row_cores = mysqli_fetch_assoc($cores);
    if(isset($_GET['paginas_url'])){
        $paginas_url = $_GET['paginas_url'];
        $query = "SELECT * FROM paginas WHERE paginas_url = '$paginas_url'";
        $paginas = mysqli_query($config, $query) or die(mysqli_error());
        $row_paginas = mysqli_fetch_assoc($paginas);
        $titulo = $row_configuracoes['configuracoes_titulo'] . " | " . $row_paginas['paginas_titulo'];
        $metadescriptiontag = $row_paginas['paginas_metadescription'];
        $url = $_GET['paginas_url'];
        $url = explode('/', $url);
        if(isset($url[1])){
            $url = $url[1];
            $query = "SELECT categorias_titulo, categorias_metadescription FROM categorias WHERE categorias_url = '$url'";
            $metadescription = mysqli_query($config, $query) or die(mysqli_error());
            $row_metadescription = mysqli_fetch_assoc($metadescription);
            $rows_categoria = mysqli_num_rows($metadescription);
            if($rows_categoria > 0){
                if(isset($row_metadescription['categorias_metadescription'])){
                    $metadescriptiontag = $row_metadescription['categorias_metadescription'];
                }
                $titulo = $row_configuracoes['configuracoes_titulo'] . " | " . $row_metadescription['categorias_titulo'];
                $titulo2 = $row_metadescription['categorias_titulo'];
            }else{
                $query = "SELECT registros_titulo, registros_imagem, registros_metadescription FROM registros WHERE registros_url = '$url'";
                $metadescription = mysqli_query($config, $query) or die(mysqli_error());
                $row_metadescription = mysqli_fetch_assoc($metadescription);
                $metadescriptiontag = $row_metadescription['registros_metadescription'];
                $titulo = $row_configuracoes['configuracoes_titulo'] . " | " . $row_metadescription['registros_titulo'];
                $titulo2 = $row_metadescription['registros_titulo'];
                $name_img = str_replace(' ', '%20', $row_metadescription['registros_imagem']);
                echo "<meta property='og:image' content='http://{$_SERVER["SERVER_NAME"]}/wt_admin/uploads/{$name_img}'>";
            }
        }
    }else{
        $metadescriptiontag = $row_configuracoes['configuracoes_metadescription'];
    }

    ?>

    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="<?php echo $titulo ?>">
    <meta property="og:description" content="<?php echo $metadescriptiontag; ?>">
    <meta property="og:url" content="<?php echo $raiz; ?>">

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo $titulo ?>">
    <meta name="description" content="<?php echo $metadescriptiontag; ?>">
    <meta name="author" content="Web Thomaz">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <title><?php echo $titulo ?></title>
    <link rel="shortcut icon" href="<?=$raiz;?>wt_admin/uploads/<?=$row_configuracoes['configuracoes_favicon'];?>" />
    <!-- CSS -->
    <link href="<?php echo $raiz; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $raiz; ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">
    <link href="<?php echo $raiz ?>css/light-gallery/lightgallery.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="<?php echo $raiz ?>css/lightslider.min.css"/>

    <link href="<?php echo $raiz; ?>fonts/stylesheet.css" rel="stylesheet">
    <link href="<?php echo $raiz; ?>css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo $raiz; ?>js/jquery.js"></script>
    <script src="<?php echo $raiz; ?>js/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $raiz; ?>css/sweetalert.css">
    <?php echo $row_configuracoes['configuracoes_analytics']; ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style type="text/css">
    .btn-padrao{background: transparent; border-radius: 0; padding: 10px 30px; font-weight: bold; text-transform: uppercase; color: <?php echo $row_cores['cor_1'] ?>; border:1px solid #fff;border-radius:3px;}
    .btn-padrao:hover{background: <?php echo $row_cores['cor_1'] ?>; color: #fff;}
    .btn-padrao2{border-color:<?php echo $row_cores['cor_1'] ?>; background:transparent; border-radius: 0; padding: 10px 30px; font-weight: bold; text-transform: uppercase; color: <?php echo $row_cores['cor_1'] ?>;border:solid 2px;border-radius:3px;}
    .btn-padrao2:hover{background: <?php echo $row_cores['cor_2'] ?>; border-color: <?php echo $row_cores['cor_2'] ?>; color: #fff;}
    .btn-padrao3{border-color:#fff; background: transparent; border-radius: 0; padding: 10px 30px; font-weight: bold; text-transform: uppercase; color: #fff;}
    .btn-padrao3:hover{background: <?php echo $row_cores['cor_1'] ?>; color: #fff; border-color: <?php echo $row_cores['cor_1'] ?>;}
    .btn-padrao4{border-color:<?php echo $row_cores['cor_2'] ?>; background: transparent; border-radius: 0; padding: 10px 30px; font-weight: bold; text-transform: uppercase; color: <?php echo $row_cores['cor_2'] ?>;}
    .btn-padrao4:hover{background: <?php echo $row_cores['cor_2'] ?>; color: #fff; border-color: <?php echo $row_cores['cor_2'] ?>;}
    </style>

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2300023260284466');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2300023260284466&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-76123044-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-76123044-1');
    </script>
    <?php
        if(isset($_GET['paginas_url'])){
            if($_GET['paginas_url'] != "abertura-gratuita-de-empresa"){
    ?>
        <!-- PAGINA INTERNA -->
        <script>
        fbq('track', 'ViewContent');
        </script>
        <?php } ?>
    <?php } ?>
</head>
<body>
<!-- <script src="https://chat.octadesk.services/api/widget/funcional?showButton=true&openOnMessage=true"></script>
 -->
    <?php include('header.php'); ?>
    <?php include('nav/paginas.php'); ?>
    <?php
        if(isset($_GET['paginas_url'])){
         include('footer.php');
        }
     ?>

    <!-- jQuery -->
    <script src="<?php echo $raiz; ?>js/lightslider.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $raiz; ?>js/bootstrap.min.js"></script>
    <!-- light gallery -->
    <script src="<?php echo $raiz; ?>js/light-gallery/lightgallery.min.js"></script>
    <script src="<?php echo $raiz; ?>js/light-gallery/lg-zoom.min.js"></script>
    <script src="<?php echo $raiz; ?>js/jquery.mousewheel.min.js"></script>
    <!-- scripts -->
    <script src="<?php echo $raiz; ?>js/sweetalert.min.js"></script>
    <script src="<?php echo $raiz; ?>js/scripts2.js"></script>

</body>
</html>
