<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoDia Tech | Cadastrado</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        background-color: rgb(34, 34, 34);
        color: white;
        font-family: "Poppins", sans-serif;
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px;
    }

    header{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    #title{
        flex-direction: column;
        line-height: 27px;
    }

    li{
        display: inline-block;
        margin: 20px;
    }

    a{
        color: white;
    }
    a:hover{
        color: rgb(99, 255, 151);
        transition: 0.5s all;
    }

    a:last-child{
        border: 2px solid rgb(99, 255, 151);
        padding: 10px;
        border-radius: 15px;
    }
    a:last-child:hover{
        background-color: rgb(99, 255, 151);
        color: white;
    }

    h1{
        font-weight: 600;
    }
    h2{
        margin-top: 100px;
        font-weight: 900;
        font-size: 40px;
    }
    h3{
        margin-top: 20px;
    }
    header{
    	margin-bottom: 80px;
    }

</style>
</head>
<body>
    <!--Criando cabeçalho com nome da newsletter e botão para o formulário-->
    <header>
        <div id="title">
            <h1>TodoDia</h1>
            <h1>Tech</h1>
        </div>

        <ul>
            <a href="index.html" target="_self"><li>Início</li></a>
            <a href="sobre.html" target="_self"><li>Sobre</li></a>
            <a href="form.html" target="_self"><li>Responda nossa pesquisa!</li></a>
        </ul>
    </header>
<?php
$nome = $_POST['nome'];
$email = $_POST['mail'];
?>
<h2>Cadastro concluído</h2>
<?php echo"<h1>Olá,</h1> ". "<h1>".$nome."</h1>";?>
<?php echo"<h1>Você se cadastrou com o E-mail:</h1> " ."<h1>".$email."</h1>";?>
</body>