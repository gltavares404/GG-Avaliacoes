<?php
    require("conecta.php");

    if (isset($_POST['avaliar'])) {
        $avaliacao = $_POST['desc'];
        $sql = "UPDATE obras SET ID_AVALIACAO = '$avaliacao'";

        if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Registro Inserido com Sucesso</h1>";
            echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
        } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
        }
    }
?>
