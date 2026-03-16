<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Descubra Seu Dev Interior</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <div class="container">

        <h1><i class="fa-solid fa-brain"></i> Descubra Seu Dev Interior</h1>

        <?php
        if (isset($_COOKIE['jogador'])) {
            echo "<p class='cookie'><i class='fa-solid fa-user'></i> Bem-vindo de volta, " . $_COOKIE['jogador'] . "</p>";
        }
        ?>

        <p>
            Responda algumas perguntas e descubra qual é
            seu verdadeiro perfil no mundo da tecnologia.
        </p>

        <a class="botao" href="formulario.php"><i class="fa-solid fa-rocket"></i> Começar Quiz</a>

    </div>

</body>

</html>