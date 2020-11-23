<html>
<h1 align="center">CRUD Muito Simples usando PDO</h1>

<div align="center">
<a href="add.php">Novo Cliente</a>
</div>
<br>

<?php
ini_set('display_errors', 'On');

$pdo = new PDO('mysql:host=mysql-j;dbname=j320662_joomlariba', 'j328662rw', 'xxxx29rw');

try{
    $stmte = $pdo->query("SELECT * FROM clientes order by nome");
    $executa = $stmte->execute();
?>

    <table border="2" align="center">
    <tr><td><b>Nome</td><td colspan="2" align="center">Ação</td></tr>

<?php
    if($executa){
        while($reg = $stmte->fetch(PDO::FETCH_OBJ)){ // Para recuperar um ARRAY utilize PDO::FETCH_ASSOC 
?>
            <td><?=$reg->nome?></td>
            <td><a href="update.php?id=<?=$reg->id?>">Editar</a></td>
            <td><a href="delete.php?id=<?=$reg->id?>">Excluir</a></td></tr>
<?php
       }
       print '</table>';
    }else{
           echo 'Erro ao inserir os dados';
    }
}catch(PDOException $e){
      echo $e->getMessage();
}

// Veja online aqui
// https://joomlariba.sourceforge.io/
