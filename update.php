<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Vintage Car Museum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylecontact.css" />
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
                    <li><a href="#">Inserir Utilizador</a></li>
                    <li><a href="usercontrol.php">Listar/Alterar/Eliminar Utilizadores</a></li>
                    <li><a href="reservas.html">Inserir Reservas</a></li>
                    <li><a href="listareserva.php">Listar Reservas</a></li>
                    <li><a href="listarcontactos.php">Listar Contactos</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="title">
        <h1 style="color: white; font-size: 50px; text-align: center;">Alterar Dados</h1>
    </div>
    <div class="container">
        <div>
            <?php if (isset($message)) {
                echo $message;
            } ?>
        </div>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "vintagemuseu");
        if ($conn->connect_error) {
            die('Conexao Falhou : ' . $conn->connect_error);
        }
        $email = $_POST['email'];
        $login = $_POST['login'];
        $nome = $_POST['nome'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $sql = "UPDATE admin " . "email = '$email' " . "login = '$login'" . "nome = '$nome'" . "password = '$password'" . "WHERE id = '$id'";
        ?>

        <form name="form" action="update.php" method="post">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Insira o seu nome" required>

            <label for="login">Login</label>
            <input type="text" id="login" name="login" placeholder="Insira nome de login..." required>

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Insira o seu nome ..." required>

            <label for="password">Password</label>
            <input type="text" style="-webkit-text-security: disc" id="password" name="password" minlength="8"
                placeholder="Insira password ..." required>

            <input type="submit" value="Atualizar">
        </form>
    </div>
</body>

</html>