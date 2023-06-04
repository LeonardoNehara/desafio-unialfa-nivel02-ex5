<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="recuperadados.php" method="POST">
            <label for="nome">nome</label>
            <input type="text" name="nome">
            <label for="email">e-mail</label>
            <input type="email" name="email" id="">
            <label for="idade">Idade</label>
            <input type="number" name="idade">
            <label for="hobbie">hobbie</label>
            <input type="text" name="hobbie">
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>