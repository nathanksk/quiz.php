<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Geek</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h1>Quiz Geek</h1>

        <form action="resultado.php" method="POST">

            <label>Seu nome:</label>
            <input type="text" name="nome" required>

            <h3>1. O que você mais gosta de fazer no computador?</h3>

            <input type="radio" name="p1" value="frontend" required> Criar interfaces bonitas<br>
            <input type="radio" name="p1" value="logica"> Resolver problemas<br>
            <input type="radio" name="p1" value="games"> Criar jogos<br>
            <input type="radio" name="p1" value="algoritmos"> Programar sistemas complexos<br>

            <h3>2. Qual matéria você prefere?</h3>

            <input type="radio" name="p2" value="frontend"> Artes<br>
            <input type="radio" name="p2" value="logica"> Matemática<br>
            <input type="radio" name="p2" value="games"> Informática<br>
            <input type="radio" name="p2" value="algoritmos"> Física<br>

            <h3>3. Qual linguagem te chama mais atenção?</h3>

            <input type="radio" name="p3" value="frontend"> HTML/CSS<br>
            <input type="radio" name="p3" value="logica"> Python<br>
            <input type="radio" name="p3" value="games"> C#<br>
            <input type="radio" name="p3" value="algoritmos"> C++<br>

            <h3>4. O que mais te irrita em programação?</h3>

            <input type="radio" name="p4" value="frontend"> Layout quebrado<br>
            <input type="radio" name="p4" value="logica"> Código sem lógica<br>
            <input type="radio" name="p4" value="games"> FPS baixo<br>
            <input type="radio" name="p4" value="algoritmos"> Algoritmos lentos<br>

            <h3>5. Seu sonho na tecnologia seria:</h3>

            <input type="radio" name="p5" value="frontend"> Criar sites incríveis<br>
            <input type="radio" name="p5" value="logica"> Resolver grandes bugs<br>
            <input type="radio" name="p5" value="games"> Desenvolver jogos<br>
            <input type="radio" name="p5" value="algoritmos"> Criar sistemas avançados<br>

            <button type="submit">Descobrir meu perfil</button>

        </form>

    </div>

</body>

</html>