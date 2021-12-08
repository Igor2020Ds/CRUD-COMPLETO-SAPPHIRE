<?php

require_once('conexao.php');

$usuario= $_POST['usuario'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$telefone= $_POST['telefone'];
$cpf=$_POST['cpf'];
$rdsocial=$_POST['rdsocial'];
$pais=$_POST['pais'];
$genero=$_POST['genero'];
$nascimento=$_POST['nascimento'];
$sql_cad=mysqli_query( $ligar , " INSERT INTO tb_usuarios (usuario, email, senha,telefone,cpf,rdsocial,pais,genero,nascimento) VALUES ('$usuario','$email','$senha','$telefone','$cpf', '$rdsocial', '$pais','$genero','$nascimento')");

if($sql_cad==true) {

    echo " <script>

    alert('Cadastro Feito com Sucesso ');
    window.location.href='index.html';
    
    </script>";


}

else {

    echo " <script>

    alert(' Falha no Cadastro ');
    alert(' Já existe um Usuário com este Email '); 
    window.location.href='cad.html';
    </script>";


}



?>