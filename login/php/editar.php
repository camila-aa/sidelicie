
<?php
    include ("config.php");
    $id = $_REQUEST["id"];
    $sql = "
    SELECT
        cliente.id,
        cliente.nome,
        cliente.email,
        cliente.numero,
        GROUP_CONCAT(papel.papel SEPARATOR ',') as papeis
    FROM cliente
    INNER JOIN papel_cliente
        ON papel_cliente.id_cliente = cliente.id
    INNER JOIN papel
        ON papel.id = papel_cliente.id_papel
    WHERE cliente.id = " . intval($id) . "
    GROUP BY cliente.id";
    $res = $conn ->query($sql);
    $row = $res -> fetch_object();
?>

<form class="form form-register" action = "salvar.php" method="post">
    <h2 class="form-title">Editar conta</h2>    <div class="form-input-container">
    <input type = "hidden" name = "acao" value = "editar"> 
    <input type = "hidden" name = "id" value= "<?=$id?>">
    <input type="text" class="form-input" placeholder="Nome completo" name="nome" value = "<?=$row->nome?>">
    <input type="text" class="form-input" placeholder="Número de telefone" name="numero" value = "<?=$row->numero?>">
    <input type="email" class="form-input" placeholder="Email" name="email" value = "<?=$row->email?>">
    Papel 
    <label> Cliente <input type = "checkbox" name = "papel[]" value = "1"> </label>
    <label> Administrador <input type = "checkbox" name = "papel[]" value = "2"> </label>
    <button type="submit" class="form-button">SALVAR</button>
</form>