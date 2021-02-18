<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <script>
        function numero()
        {
            alert("Digite apenas os numeros!");
        }
    </script>
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script language="JavaScript" type="text/javascript" src="mascara.js"></script> 
        <script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
        <script src="js/jquery.mask.test.js" type="text/javascript"></script>   
        <script language="JavaScript" type="text/javascript" src="funcao.js"></script>
        <script src="js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript" /></script>
    <title>Funcional Contabilidade</title>	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>
    <div class="form-signin" style="background: #42dea4;">

        <h1 text-center>Cadastre-se</h1>
        <h3>Mentoria com quem entende de negócios!</h3>
        <form method="POST" action="processa.php" name=form1 onSubmit = "return validacao()" action="www.funcionalcontabilidade.com.br";>

            <input type="text" name="nome" placeholder="Digite o nome completo" class="form-control" required><br>

            <input class="form-control" type="text" name="cnpj" placeholder="00.000.000/0000-00" maxlength="18" onkeypress="return event.charCode >= 48 && event.charCode <= 57" onclick="numero()"><br>    

            <input type="text" name="ramo" placeholder="Digite o seu ramo" class="form-control" required><br>

            <input type="text" name="qtd_func" placeholder="Digite a quantidade de funcionarios" class="form-control" required><br>

            <input type="text" name="telefone" id="telefone" onclick="numero()" placeholder="(xx) xxxxx-xxxx" class="form-control" maxlength="15" onkeypress="return event.charCode >= 48 && event.charCode <= 57"><br>

            <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Regime Tributário</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="tributacao" rerquerid>
                    <option selected>Regime Tributário</option>
                    <option value="MEI">MEI</option>
                    <option value="Simples">Simples Nacional</option>
                    <option value="presumido">Lucro Presumido</option>
                    <option value="real">Lucro Real</option>
                </select>
            </div><br>

            <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Faturamento</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="faturamento" required>
                    <option selected>Média de Faturamento</option>
                    <option value="R$1.000,00 à R$10.000,00">R$1.000,00 à R$10.000,00</option>
                    <option value="R$10.000,00 à R$50.000,00">R$10.000,00 à R$50.000,00</option>
                    <option value="R$50.000,00 à R$150.000,00">R$50.000,00 à R$150.000,00</option>
                    <option value="R$150.000,00 à R$300.000,00">R$150.000,00 à R$300.000,00</option>
                    <option value="Acima de R$300.000,00">Acima de R$300.000,00</option>
                </select>
                <br>
            </div><br>

            <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success" ><br><br>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

