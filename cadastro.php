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
        <input type="text" placeholder = "Nome Completo" name="nome">
        <input type="text" placeholder = "Matrícula" name="mac">
        <input type="text" placeholder = "Email institucional" name="email">
        <input type="text" placeholder = "Telofone" name="tel">
        <select name="Curso">
          <option value="" disabled selected></option>
          <option value="Edificações">Edificações</option>
          <option value="Informática">Informática</option>
          <option value="Meio ambiente">Meio ambiente</option>
        </select>
        <select name="Turma">
          <option value="" disabled selected></option>
          <option value="ED-11">ED-11</option>
          <option value="ED-12">ED-12</option>
          <option value="ED-21">ED-21</option>
          <option value="ED-22">ED-22</option>
          <option value="ED-31">ED-31</option>
          <option value="ED-32">ED-32</option>
          <option value="ED-41">ED-41</option>
          <option value="EI-11">EI-11</option>
          <option value="EI-12">EI-12</option>
          <option value="EI-21">EI-21</option>
          <option value="EI-22">EI-22</option>
          <option value="EI-31">EI-31</option>
          <option value="EI-32">EI-32</option>
          <option value="EI-41">EI-41</option>
          <option value="EMA-11">EMA-11</option>
          <option value="EMA-12">EMA-12</option>
          <option value="EMA-21">EMA-21</option>
          <option value="EMA-22">EMA-22</option>
          <option value="EMA-31">EMA-31</option>
          <option value="EMA-32">EMA-32</option>
          <option value="EMA-41">EMA-41</option>
        </select>
        <input type="password" placeholder = "Senha" name="sen">
        <input type="submit" value= "Entrar" name="en">
    </form>
    <?php
        extract($_POST);
        if(isset($en)){
            $consulta ="INSERT INTO `aluno`( `nome`,`matricula`, `email`, `telefone`,`curso`, `turma`,  `senha`) VALUES ('$nome','$mac','$email','$tel','$Curso','$Turma','$sen')";
            $resultado= banco($consulta);
            header('Location: index.php');
        }
    ?>
</body>
</html>

    