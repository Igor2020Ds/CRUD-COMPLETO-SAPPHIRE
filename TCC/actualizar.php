<?php 
require_once('conexao.php');

$codigo= $_POST['txtcodigo'];//0
$usuario= $_POST['usuario'];//1
$email= $_POST['email'];//2
$senha= $_POST['senha'];//3
$telefone= $_POST['telefone'];//4
$cpf=$_POST['cpf'];//5
$rdsocial=$_POST['rdsocial'];//6
$pais=$_POST['pais'];//7
$genero=$_POST['genero'];//8
$nascimento=$_POST['nascimento'];//8



$sql_atualizar=mysqli_query($ligar, " UPDATE tb_usuarios set usuario='$usuario', email='$email', senha='$senha',telefone='$telefone',cpf='$cpf',rdsocial='$rdsocial', pais='$pais',genero='$genero',nascimento='$nascimento' WHERE id='$codigo' ");

if ($sql_atualizar==true){

    print "<script>
    
    alert('Cliente Atualizado com Sucesso');
    window.location.href='listaUsuario.php';
    
    
    </script>";

}else{

    echo "<script>
    
    alert('Falha ao atualizar dados');
    window.location.href='editar.php';
    
    
    </script>";

}



?>

?>