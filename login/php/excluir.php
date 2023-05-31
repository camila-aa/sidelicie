<?php
include ("config.php")
$sql = "DELETE FROM cliente WHERE id =" . $_REQUEST["id"]; 
$res = $conn -> query ($sql);

if($res==true){
    print "<script>alert('Cadastro excluido')</script>";
    print "<script>location.href='listar.php';</script>";
}else{
    print "<script>alert('Não foi excluir')</script>";
}
?>