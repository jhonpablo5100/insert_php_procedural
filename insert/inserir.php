<?php

  require "connect/con.php";
 $nome =$_POST['nome'];
 $senha = $_POST['senha'];

 $sql = "INSERT INTO cadastro_tb(id,nome,senha)VALUES(null,'$nome','$senha');";
  $query = mysqli_query($con,$sql);
  print "<br><br>";
  print "<center>Inserido com sucesso!!!</center>";
?>
