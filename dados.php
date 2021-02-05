<?php
//conexao com banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "pedzap";
$connect = mysqli_connect($servidor, $usuario, $senha, $db);
if(mysqli_connect_error()){
    echo "falha na conexão: ".mysqli_connect_error();
}
session_start();


//recebendo dados do formulario
$nome = $_POST['nome'];
$estabelecimento = $_POST['estabelecimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

//verificando se o formulario não esta vazio
if(!empty($nome) or !empty($estabelecimento) or!empty($telefone) or!empty($email)){

    //inserindo dados na tabela
    $sql = "INSERT INTO cadastro (nome, telefone, estabelecimento, email) VALUES ('$nome', '$telefone', '$estabelecimento', '$email')";
    if(mysqli_query($connect, $sql)){

        /////////////////////////////////////////////////////////////////////////////////////
        /*FALHA AO CONECTAR AO SERVIDOR DE EMAIL - NAO ENCONTREI SOLUÇÃO :C
        //enviando email de confirmação de cadastro
        $destinatario = $email;
        $assunto = "Cadastro Pedzap!";
        $remetente = "vinygarcez@gmail.com";

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/plain; charset=iso-8859-1';
        $headers[] = 'To: '.$destinatario;
        $headers[] = 'From: '.$remetente;

        $body = "=======================================================" . "\r\n";
        $body = $body . "PEDZAP! - Seu cadastro foi realizado, aguarde contato." . "\r\n";
        $body = $body . "=======================================================" . "\r\n";
        $body = $body . "Nome: " . $nome . "\r\n";
        $body = $body . "Email: " . $email . "\r\n";
        $body = $body . "Telefone: " . $telefone . "\r\n";
        $body = $body . "Estabelecimento: " . $estabelecimento . "\r\n";
        $body = $body . "=======================================================" . "\r\n";

        $envio = mail($destinatario, $assunto , $body, implode("\r\n", $headers));
        *////////////////////////////////////////////////////////////////////////////////////

        
        //redireciona para a página de confirmação
        header("location: confirmacao.php");
    }else{
        header("location: erro.php");
    }
}else{
    header("location: erro.php");
}
?>