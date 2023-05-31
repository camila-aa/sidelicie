<h1>Lista de usuários</h1>

<?php
    include ("config.php");
    $sql = "
        SELECT
            cliente.id,
            cliente.nome,
            cliente.email,
            cliente.numero,
            GROUP_CONCAT(papel.papel SEPARATOR ', ') as papeis
        FROM cliente
            INNER JOIN papel_cliente
                ON papel_cliente.id_cliente = cliente.id
            INNER JOIN papel
                ON papel.id = papel_cliente.id_papel
        GROUP BY cliente.id
    ";

    $ultimoID = mysqli_insert_id($conn);

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    //calcula a quantidade de linhas no código

    if($qtd > 0){

        print "<table>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Numero</th>";
        print "<th>Papéis</th>";
        print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>" . $row->numero . "</td>";
            print "<td>" . $row->papeis . "</td>";
            print "<td>

                        <button onclick= \"location.href='editar.php?id=" . $row->id . "';\">Editar</button>
                        <button onclick = \"if(confirm ('Tem certeza que deseja excluir?')){location.href='salvar.php?&acao=excluir&id= " .$row->id. "';}else{false;}\">Excluir</button>

                    </td>";
            print "</th>";
        }

        print "</table>";

    }else {
        echo "<p class = 'alert alert-danger>Nenhum resultado foi encontrado</p>";
    }
?>