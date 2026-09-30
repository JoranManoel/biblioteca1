<h1>Leitores</h1>

<a href="/biblioteca">voltar</a>
<br> <br>

<?php 

    include "../conexao.php";
    
    $sql = "SELECT * FROM leitor";

    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        foreach($resultado as $leitor){
            echo $leitor['nome'];
            echo "<a href='apagar.php?id=".$leitor['id']."'>excluir</a>";
            echo "<br>";
        }


    }else{
        echo "Nenhum resultado encontrado!";
    }

?>