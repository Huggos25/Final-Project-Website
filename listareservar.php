<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Vintage Car Museum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylelistareserva.css" />
    <style>
        table {
            background-color: grey;
            border-collapse: collapse;
            width: 80%;
            font-size: 25px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        th{
            background-color: #9b793c;
            color: white;
        }
        tr:nth-child(even){background-color: grey;}
    </style>
</head>

<body>
    <nav>
        <!-- Menu Principal -->
        <ul>
            <li><a href="#">Menu</a></li>
            <li><a href="homepage.html">Home</a></li>
            <li><a href="galeria.html">Galeria</a></li>
            <li><a href="sobrenos.html">Sobre Nós</a></li>
            <li><a href="contactos.html">Contactos</a></li>
            <li><a href="#">Admin</a>
                <ul>
                    <!-- submenu de admin -->
                    <li><a href="registaruser.html">Inserir Utilizador</a></li>
                    <li><a href="#">Listar/Alterar/Eliminar Utilizadores</a></li>
                    <li><a href="reservas.html">Inserir Reservas</a></li>
                    <li><a href="listareservar.php">Listar Reservas</a></li>
                    <li><a href="listarcontactos.php">Listar Contactos</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="title">
        <h1 style="color: white; font-size: 50px; text-align: center;">Test Drives Marcados!</h1>
    </div>

    <table>
        <tr>
            <th>Email</th>
            <th>Morada</th>
            <th>Morada2</th>
            <th>Cidade</th>
            <th>Distrito</th>
            <th>Código Postal</th>
            <th>Data</th>
            <th>Carro</th>
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "vintagemuseu");
        if ($conn->connect_error) {
            die('Conexao Falhou : ' . $conn->connect_error);
        }

        $sql = "SELECT email, morada, morada2, cidade, distrito, cdgpostal, data, carro from reservas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "</tr><td>" . $row["email"] . "</td><td>" . $row["morada"] . "</td><td>" .$row["morada2"] . "</td><td>" . $row["cidade"] . 
                "</td><td>" . $row["distrito"] . "</td><td>" . $row["cdgpostal"] . "</td><td>" . $row["data"] . "</td><td>" . $row["carro"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p><center>Não há Resultados</center></p>";
        }

        $conn->close();

        ?>
    </table>
</body>

</html>