<?php
    include ("config.php");

    switch ($_REQUEST["acao"]){
        case "cadastrar":
            $nome = @$_POST["nome"];
            $numero = @$_POST["numero"];
            $email = @$_POST["email"];
            $senha = @$_POST["senha"];
            $sql = "INSERT INTO cliente (nome, numero, email, senha) VALUES ('$nome', '$numero', '$email', '$senha')";
            $res = $conn -> query($sql);

            $ultimoID = mysqli_insert_id($conn);

            if (@$_REQUEST['papel']){

                foreach (@$_REQUEST['papel'] as $value){
                    $sql = "INSERT INTO papel_cliente (id_papel, id_cliente) VALUES ('$value', '$ultimoID')";
                    $res = $conn -> query($sql);
                }
            
            }

            if($res==true){
                print "<script>alert('Cadastro realizado com sucesso')</script>";
                print "<script>location.href='listar.php';</script>";
            }else{
                print "<script>alert('Não foi possível finalizar cadastro')</script>";
            }
        break;
        case "editar":
            $nome = @$_POST["nome"];
            $numero = @$_POST["numero"];
            $email = @$_POST["email"];
            $sql = "UPDATE cliente SET
                    nome = '{$nome}',
                    numero = '{$numero}',
                    email = '{$email}'
                WHERE 
                    id = " . $_REQUEST["id"];
            $res = $conn -> query($sql);

            $id = $_REQUEST["id"];
            $sql = "DELETE FROM papel_cliente WHERE id_cliente = " . $_REQUEST["id"];
            $res = $conn -> query($sql);

            if (isset($_REQUEST['papel'])){
                foreach ($_REQUEST['papel'] as $value){
                    $sql = "INSERT INTO papel_cliente (id_papel, id_cliente) VALUES ($value, $id)";
                    $res = $conn -> query($sql);
                }
            
            }

            if($res==true){
                print "<script>alert('Edição realizada com sucesso')</script>";
                print "<script>location.href='listar.php';</script>";
            }else{
                print "<script>alert('Não foi possível finalizar edição')</script>";
                print "<script>location.href='listar.php';</script>";
            }
        break;
        case "excluir":
            $sql = "DELETE FROM papel_cliente WHERE id_cliente = " . $_REQUEST["id"];
            $res = $conn -> query($sql);
            $sql = "DELETE FROM cliente WHERE id =" . $_REQUEST["id"]; 
            $res = $conn -> query ($sql);

            if($res==true){
                print "<script>alert('Cadastro excluido')</script>";
                print "<script>location.href='listar.php';</script>";
            }else{
                print "<script>alert('Não foi excluir')</script>";
            }
    }
?>