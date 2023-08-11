<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" placeholder = "Matrícula" name="mac">
        <input type="password" placeholder = "Senha" name="sen">
        <input type="submit" value= "Entrar" name="en">
    </form>
    <a href="cadastro.php">
    <?php 
        include 'coisa.php';
        extract($_POST);
        if(isset($en)){
            if(strlen($mac) ==12){
                $consulta = "SELECT `username`, `password` FROM `estudantes` WHERE `username` = '$mac' LIMIT 1";
                $resultado = banco($consulta);
                $resultado -> fetch_assoc();
                if($resultado['password'] == $sen){
                    header(LINK);
                }

                      }
            if(strlen($mac) ==7){
                $consulta = "SELECT `username`, `password` FROM `coordenador` WHERE `username` = '$mac' LIMIT 1";
                $resultado = banco($consulta);
                $resultado -> fetch_assoc();
                if($resultado['password'] == $sen){
                            header(LINK);
                }
        
             } 
            if(strlen($mac) ==6){
                $consulta = "SELECT `username`, `password` FROM `cores` WHERE `username` = '$mac' LIMIT 1";
                $resultado = banco($consulta);
                $resultado -> fetch_assoc();
                if($resultado['password'] == $sen){
                                header(LINK);
                    }
            
                 }     
            
        }
    ?>
</body>
</html>