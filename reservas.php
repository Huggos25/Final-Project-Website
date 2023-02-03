<?php
$email = $_POST['email'];
$password = $_POST['password'];
$morada = $_POST['morada'];
$morada2 = $_POST['morada2'];
$cidade = $_POST['cidade'];
$distrito = $_POST['distrito'];
$cdgpostal = $_POST['cdgpostal'];
$data = $_POST['data'];
$carro = $_POST['carro'];

$conn = new mysqli('localhost', 'root', '', 'vintagemuseu');
if ($conn->connect_error) {
    die('Conexao Falhou : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into reservas(email, password, morada, morada2, cidade, distrito, cdgpostal, data, carro)
    values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss", $email, $password, $morada, $morada2, $cidade, $distrito, $cdgpostal, $data, $carro);
    $stmt->execute();
    echo "Reserva feita com Sucesso!";
    $stmt->close();
    $conn->close();
}
?>