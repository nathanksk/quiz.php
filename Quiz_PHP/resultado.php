<?php

$nome = $_POST['nome'];

$respostas = [
    $_POST['p1'],
    $_POST['p2'],
    $_POST['p3'],
    $_POST['p4'],
    $_POST['p5']
];

$frontend = 0;
$logica = 0;
$games = 0;
$algoritmos = 0;

foreach ($respostas as $r) {

    if ($r == "frontend") {
        $frontend++;
    }

    if ($r == "logica") {
        $logica++;
    }

    if ($r == "games") {
        $games++;
    }

    if ($r == "algoritmos") {
        $algoritmos++;
    }
}

if ($frontend > $logica && $frontend > $games && $frontend > $algoritmos) {

    $perfil = "Ninja do Front-end";
    $img = "image/frontend.jpg";

    $descricao = "Você domina a arte de criar interfaces bonitas e funcionais.
Seu talento está em transformar ideias em experiências visuais incríveis.
Você entende de design, usabilidade e criatividade.
O mundo precisa de mais desenvolvedores como você.";
} elseif ($logica > $frontend && $logica > $games && $logica > $algoritmos) {

    $perfil = "Caçador de Bugs";
    $img = "image/bugs.jpg";

    $descricao = "Você adora resolver problemas e encontrar erros escondidos.
Seu cérebro funciona como um verdadeiro detector de bugs.
Nada passa despercebido quando você analisa um código.
Programadores assim mantêm sistemas funcionando perfeitamente.";
} elseif ($games > $frontend && $games > $logica && $games > $algoritmos) {

    $perfil = "Criador de Games";
    $img = "image/programador.jpg";

    $descricao = "Você nasceu para criar mundos digitais e experiências interativas.
Game design, mecânicas e diversão fazem parte da sua mente criativa.
Seu objetivo é desenvolver jogos que marquem gerações.
O futuro dos games precisa de desenvolvedores como você.";
} else {

    $perfil = "Arquiteto do Código";
    $img = "image/arquiteto.jpg";

    $descricao = "Você pensa grande e gosta de sistemas complexos.
Algoritmos, estruturas de dados e eficiência fazem parte do seu mundo.
Seu talento está em criar soluções robustas e inteligentes.
Grandes softwares são construídos por mentes como a sua.";
}

setcookie("jogador", $nome, time() + 3600);

$contador = "contador.txt";

if (file_exists($contador)) {
    $visitas = file_get_contents($contador);
} else {
    $visitas = 0;
}

$visitas++;

file_put_contents($contador, $visitas);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultado</title>
</head>

<body>

    <div class="container">

        <h1>Resultado do Quiz</h1>

        <h2>Jogador: <?php echo $nome; ?></h2>

        <h1 class="perfil"><?php echo $perfil; ?></h1>

        <img src="<?php echo $img; ?>" width="250">

        <p class="descricao"><?php echo $descricao; ?></p>

        <p><i class="fa-solid fa-gamepad"></i> Este quiz já foi jogado <?php echo $visitas; ?> vezes</p>

        <a class="botao" href="quiz.php">Jogar novamente</a>

    </div>

</body>

</html>