<?php
$email = $_POST['email'];
$name = $_POST['nome'];
$pais = $_POST['pais'];
$questao = $_POST['questao'];

$conn = new mysqli('localhost','root','','vintagemuseu');
if($conn->connect_error){
    die('Conexao Falhou : ' .$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into contactos(email, nome, pais, questao)
    values(?,?,?,?)");
    $stmt->bind_param("ssss", $email, $name, $pais, $questao);
    $stmt->execute();
    echo "Questão Enviada com sucesso!";
    $stmt->close();
    $conn->close();
}
?>