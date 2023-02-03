<?php
$email = $_POST['email'];
$login = $_POST['login'];
$nome = $_POST['nome'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','vintagemuseu');
if($conn->connect_error){
    die('Conexao Falhou : ' .$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into admin(email, login, nome, password)
    values(?,?,?,?)");
    $stmt->bind_param("ssss", $email, $login, $nome, $password);
    $stmt->execute();
    echo "Registo Feito com Sucesso!";
    $stmt->close();
    $conn->close();
}
?>