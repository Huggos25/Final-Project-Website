<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Vintage Car Museum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styleusercontrol.css" />
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
                    <li><a href="#">Listar/Alterar/Eliminar Utilizadores</a></li>
                    <li><a href="reservas.html">Inserir Reservas</a></li>
                    <li><a href="listareservar.php">Listar Reservas</a></li>
                    <li><a href="listarcontactos.php">Listar Contactos</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="title">
        <h1 style="color: white; font-size: 50px; text-align: center;">Painel de Controlo </h1>
    </div>
    <div class="container">
        <form name="form" action="delete.php" method="GET">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" placeholder="Insira o Id a Apagar...">

            <input type="submit" name="deletebutton" value="Apagar">
        </form>
        <form name="form" action="update.php" method="GET">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" placeholder="Insira o Id a Alterar...">

            <input type="submit" name="alterbutton" value="Alterar Dados">
        </form>
    </div>
    </br>
    <table>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Login</th>
            <th>Nome</th>
            <th>Password</th>        
        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "vintagemuseu");
        if ($conn->connect_error) {
            die('Conexao Falhou : ' . $conn->connect_error);
        }

        $sql = "SELECT id, email, login, nome, password from admin";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["login"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["password"] ."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p><center>Não há Resultados</center></p>";
        }

        $conn->close();

        ?>
    </table>
</body>
<script type="text/javascript">
    function myfun() {
        var frm = document.getElementsByName('form')[0];
        frm.submit();
        frm.reset();
        return false();
    }
</script>

</html>