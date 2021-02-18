<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include("../wt_admin/cn/config.php");
// busca a biblioteca recaptcha
require_once "recaptchalib.php";
date_default_timezone_set('America/Sao_Paulo');

$query_configuracoes = "SELECT * FROM configuracoes";
$configuracoes = mysqli_query($config, $query_configuracoes);
$row_configuracoes = mysqli_fetch_assoc($configuracoes);
$emailsite = $row_configuracoes['configuracoes_email_formulario'];
$email_nome_site = $row_configuracoes['configuracoes_titulo'];


// sua chave secreta
$secret = $row_configuracoes['configuracoes_secret_key'];

// resposta vazia
$response = null;

// verifique a chave secreta
$reCaptcha = new ReCaptcha($secret);

// se submetido, verifique a resposta
if ($_POST["g-recaptcha-response"]) {
	$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}


if($response != null && $response->success){
	extract($_POST);

	$sqlinsere = "INSERT INTO email_contato (";
	foreach ($_POST as $key => $value) {
		if($key != 'g-recaptcha-response'){
			$key = addslashes($key);
			$key = mysqli_real_escape_string($config, $key);
			$sqlinsere .= "$key,";
		}
	}
	$sqlinsere .= ") VALUES (";
	foreach ($_POST as $key => $value) {
		if($key != 'g-recaptcha-response'){
			$value = addslashes($value);
			$value = mysqli_real_escape_string($config, $value);
			$sqlinsere .= "'$value',";
		}
	}
	$sqlinsere .= ")";
	$sqlinsere = str_replace(',)', ')', $sqlinsere);

	$inserir = mysqli_query($config, $sqlinsere);
	if($inserir){
		$mensagem  = '';
		$assunto = "Contato via WebSite";
        $dat = date('d/m/y H:i');

		foreach ($_POST as $key => $value) {

			if($key == "email") $email = $value;
			if($key == "nome") $nome = $value;
			if($key == "assunto") $assunto = $value;

			if($key == "mensagem"){
				$mensagem .= "<b>".ucwords($key)."</b>:<br />$value <br />";
			} else {
                if ($key != "g-recaptcha-response") {
                    if($key == "data") {
                        $mensagem .= "<b> Data e hora de envio: </b>" . $dat . "<br>";
                    } else {
                        $mensagem .= "<b>".ucwords($key)."</b>: $value <br />";
                    }
                }
			}
		}

        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Set the hostname of the mail server
        //$mail->Host = 'mail.gbocchi.com.br';
        $mail->Host = 'mail.webthomaz.com.br';
        //Set the SMTP port number - likely to be 25, 465 or 587
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        $mail->isHTML(true);
        //Username to use for SMTP authentication
        $mail->Username = 'funcional-email@webthomaz.com';
        //Password to use for SMTP authentication
        $mail->Password = 'funcional2019*';
        //Set who the message is to be sent from

        $mail->setFrom('funcional-email@webthomaz.com', 'Nao Responda');
        //Set an alternative reply-to address
        $mail->addReplyTo('desenvolvimento@webthomaz.com.br', 'Nao Responda');
        //Set who the message is to be sent to
        $mail->addAddress('angela.kelly@funcional.cnt.br', 'Funcional Contabilidade');
        //Set the subject line
        $mail->Subject = $assunto;

        //crio um email em html
        $txt = "
        <html>
        <head>
        <title>Formulário de contato do website</title>
        </head>
        <body>
        <p>Email enviado através do website www.funcional.cnt.br</p><br><br>
        <b>Nome</b>: $nome <br>
        <b>Email</b>: $email <br>
        <b>Telefone</b>: $telefone <br>
        $mensagem



        </body>
        </html>
        ";
        $txt = utf8_decode($txt);

        $mail->Body = $txt;
        $mail->AltBody = "{$nome} entrou em contato. seu email: {$email}. seu telefone: {$telefone}. Disse: {$mensagem} ";

		if($mail->send()){ ?>
			<script>
    			$('.load').hide();
    			$(document).ready(function(){
    				swal({
    					title: "Mensagem enviada!",
    					text: "Em breve entraremos em contato!",
    					type: "success",
    					confirmButtonColor: "#222222"
    				}, function() {
                        window.location.href = "http://funcional.cnt.br/#ficou-na-duvida";
                    });
                    $('#enviar_contato .btn-padrao2').text("AGENDE AGORA MESMO");
                    $('#enviar_contato .btn-padrao2').attr('type','submit');
                    $('form').trigger("reset");
                    $('#enviar_contato .note-editable.panel-body').html('');
    			});
			</script>
		<?php }else{ ?>
			<script>
				$(document).ready(function(){
					$('.load').hide();
					$('.btn-padrao').text(textoBotao);
					$('.btn-padrao').attr('type','submit');
					swal("Erro ao enviar email");
				});
			</script>
		<?php } ?>
	<? }else{ ?>
    	<script>
        	$(document).ready(function(){
        		$('.load').hide();
        		$('.btn-padrao').text(textoBotao);
        		$('.btn-padrao').attr('type','submit');
        		swal("Erro ao cadastrar mensagem");
        	});
    	</script>
	<?php } ?>
<?php }else{ ?>
    <script>
        $(document).ready(function(){
        	$('#enviar_contato .load').hide();
        	$('#enviar_contato .btn-padrao2').text(textoBotao);
        	$('#enviar_contato .btn-padrao2').attr('type','submit');
        	swal("Confirme que você não é um robo!");
        });
    </script>
<?php } ?>
