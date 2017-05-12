 <?php 
 include("cabecalho.php");
 include_once 'conexao.php';


 $consulta = $pdo->query("SELECT * FROM endereco;");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
?>
   <table>
   		<tr>
   			<td><?php echo $linha['CEP']; ?></td>
   			<td><?php echo $linha['LOGRADOURO']; ?></td>
   			<td><?php echo $linha['NUMERO']; ?></td>
   			<td><?php echo $linha['COMPLEMENTO']; ?></td>
   			<td><?php echo $linha['BAIRRO']; ?></td>
   			<td><?php echo $linha['CIDADE']; ?></td>
   			<td><?php echo $linha['ESTADO']; ?></td>
   		</tr>
   </table>
<?php } include("rodape.php");?>