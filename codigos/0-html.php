<!DOCTYPE html>
<html>
<?php if(isset($_GET['chave'])): ?>
<h1>Mensagem!!!</h1>
<?php endif; ?>

<h2>Chave <?php echo $_GET['chave'];?></h2>

<table border="1">
<?php
    for($i=0; $i < 6; $i++){
        if($i == 0){
            print "<tr><td colspan='2'>Titulo da tabela</td></tr>";
        }
        if ($i%2 == 0) {
        print "<tr style=\"background-color: yellow;\"><td>Linha ".$i." Coluna 1</td><td>Coluna 2</td></tr>";
        } else {
        print "<tr><td>Linha ".$i." Coluna 1</td><td>Coluna 2</td></tr>";            
            
        }
    }
?>    
</table>
</html>
