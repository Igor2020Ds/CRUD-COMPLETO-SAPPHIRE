<?php 
require_once('conexao.php');

?>


<?php 
require_once('conexao.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bora formar</title>

</head>

<body>



    <hr>
    <center>
        <h2> Lista de Usuários </h2>
    </center>
    <hr>
    <center>



        <table rules="all">
            <thead>
                <tr>
                    <th> NOME </th>
                    <th> EMAIL </th>
                    <th> SENHA </th>
                    <th> TELEFONE </th>
                    <th>CPF</th>
                    <th>REDE SOCIAL</th>
                    <th>PAÍS</th>
                    <th>GÊNERO</th>



                </tr>
            </thead>



            <tbody>


                <?php 
$sql_consulta=mysqli_query($ligar , " SELECT *FROM tb_usuarios ");

    while( $linha=mysqli_fetch_array($sql_consulta)){
        ?>
                <tr>

                    <td> <?= $linha[1]  ?></td> <!-- USUÁRIO-->
                    <td> <?= $linha[2]  ?></td><!-- EMAIL-->
                    <td> <?= $linha[3] ?></td><!-- SENHA-->
                    <td> <?= $linha[4]  ?></td><!-- TELEFONE-->
                    <td> <?= $linha[5]  ?></td><!-- CPF-->
                    <td> <?= $linha[6]  ?></td><!-- RDSOCIAL-->
                    <td> <?= $linha[7]  ?></td><!-- PAIS-->
                    <td> <?= $linha[8]  ?></td><!-- GENERO-->
                    <td> <?= $linha[9]  ?></td><!-- NASCIMENTO-->

                    <td><a href="eliminar.php?codigo=<?= $linha[0] ?>"> Exluir </a> </td>
                    <td><a href="Editar.php?codigo=<?= $linha[0] ?>"> Editar </a> </td>


                </tr>

                <?php 
    }

    ?>

            </tbody>
        </table>

    </center>

</body>

</html>