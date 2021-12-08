<?php
require_once('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listagem</title>
    <link rel="stylesheet" href="css/listauser.css">
</head>


</head>

<body class="bg">

    <script>
    var usuario;
    var user = "abc";

    usuario = prompt('Digite seu Usuário Master');
    if (usuario == user) {

    } else {
        window.location.href = 'erro1.html';
    };
    </script>
    <script>
    var password;
    var pass1 = "123";

    password = prompt('Digite sua senha');
    if (password == pass1) {

    } else {
        window.location.href = 'erro.html';
    };
    </script>

    </div>




    <hr>
    <center>
        <h2 class="tim"> Dados dos clientes cadastrados no Sistema</h2>
    </center>
    <hr>
    <center>



        <table rules="all">
            <thead>
                <tr>
                    <th class="lista"> NOME </th>
                    <th class="lista"> EMAIL </th>
                    <th class="lista"> SENHA </th>
                    <th class="lista">TELEFONE </th>
                    <th class="lista">CPF </th>
                    <th class="lista">REDE SOCIAL </th>
                    <th class="lista">PAÍS </th>
                    <th class="lista">GÊNERO </th>
                    <th class="lista">NASCIMENTO </th>
                </tr>
            </thead>



            <tbody>


                <?php
                $sql_consulta = mysqli_query($ligar, " SELECT *FROM tb_usuarios ");
                $total = mysqli_num_rows($sql_consulta);
                while ($linha = mysqli_fetch_array($sql_consulta)) {
                ?>
                <tr>
                    <td class="lista_dados"> <?= $linha[1]  ?></td>
                    <!--USUÁRIO-->
                    <td class="lista_dados"> <?= $linha[2]  ?></td>
                    <!--EMAIL-->
                    <td class="lista_dados"> <?= $linha[3] ?></td>
                    <!--SENHA-->
                    <td class="lista_dados"> <?= $linha[4] ?></td>
                    <!--TELEFONE -->
                    <td class="lista_dados"> <?= $linha[5] ?></td>
                    <!--CPF-->
                    <td class="lista_dados"> <?= $linha[6] ?></td>
                    <!--RDSOCIAL-->
                    <td class="lista_dados"> <?= $linha[7] ?></td>
                    <!--PAÍS-->
                    <td class="lista_dados"> <?= $linha[8] ?></td>
                    <!--GENERO-->
                    <td class="lista_dados"> <?= $linha[9] ?></td>
                    <!--NASCIMENTO-->

                    <td class="lista_dados"><a class="main" href="eliminar.php?codigo=<?= $linha[0] ?>"> Exluir
                        </a> </td>
                    <td class="lista_dados"><a class="lista_dados" href="Editar.php?codigo=<?= $linha[0] ?>"> Editar
                        </a> </td>


                </tr>


                <?php
                }

                ?>

                <tr>
                    <td class="tim" colspan="6"> TOTAL DE REGISTROS: <?= $total  ?> </td>
                </tr>
            </tbody>
        </table>

    </center>

    <hr>
    <Center>
        <a class="home" href="inicio.php"> HOME </a> <br>

    </Center>

    <hr>

</body>

</html>

</html>