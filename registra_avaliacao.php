<?php
require("conecta.php");

if (isset($_POST['avaliar'])) {
    $obra_id = $_POST['obra_id'];
    $avaliacao = $_POST['desc'];
    $estrela_id = $_POST['estrelar'];

    $sql = "INSERT INTO avaliacoes (ID_OBRA, DESCRICAO, ID_STAR) VALUES ('$obra_id', '$avaliacao', '$estrela_id')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Avaliação registrada com sucesso!";
    } else {
        echo "Erro ao registrar avaliação: " . mysqli_error($conn);
    }
}
?>
