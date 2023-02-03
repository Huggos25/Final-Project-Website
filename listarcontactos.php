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

        th {
            background-color: #9b793c;
            color: white;
        }

        tr:nth-child(even) {
            background-color: grey;
        }
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
                    <li><a href="usercontrol.php">Listar/Alterar/Eliminar Utilizadores</a></li>
                    <li><a href="reservas.html">Inserir Reservas</a></li>
                    <li><a href="listareservar.php">Listar Reservas</a></li>
                    <li><a href="#">Listar Contactos</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="title">
        <h1 style="color: white; font-size: 50px; text-align: center;">Questões Enviadas!</h1>
    </div>

    <table>
        <tr>
            <th>Email</th>
            <th>Nome</th>
            <th>País</th>
            <th>Questão</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "vintagemuseu");
        if ($conn->connect_error) {
            die('Conexao Falhou : ' . $conn->connect_error);
        }

        $sql = "SELECT email, nome, pais, questao from contactos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "</tr><td>" . $row["email"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["pais"] . "</td><td>" . $row["questao"] . "</td></tr>";
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