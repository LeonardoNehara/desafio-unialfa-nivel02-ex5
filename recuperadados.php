<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <?php
        if (isset($_POST)){
            $nome = str_replace(' ', '', $_POST["nome"]);
            $email = $_POST["email"];
            $idade = $_POST["idade"];
            $hobbie = $_POST["hobbie"];
    
            if(strlen($nome)<= 6){
                // echo"Salvo com sucesso";
                die("Nome invalido, menor de 6 letras");
            }
            if($idade < 18){  
                die("Você não é maior de idade");
            }
            echo"nome: ".$nome;
            echo"</br>";
            echo"email: ".$email;
            echo"</br>";
            echo"idade: ".$idade;
            echo"</br>";
            echo"hobbie: ".$hobbie;

        }
    ?>
</main>
</body>
</html>