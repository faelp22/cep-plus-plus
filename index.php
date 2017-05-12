  <?php include("cabecalho.php");

    $cep = '';
    $logradouro = '';
    $bairro = '';
    $cidade = '';
    $estado = '';

  if(isset($_GET['cep']) && strlen($_GET['cep']) == 8) {
    $dados_da_api = file_get_contents('http://api.postmon.com.br/v1/cep/'.$_GET['cep'] );
      if(!empty($dados_da_api)) {
        $dados_trados = json_decode($dados_da_api, 1);
        $cep = $_GET['cep'];
        $logradouro = $dados_trados['logradouro'];
        $bairro = $dados_trados['bairro'];
        $cidade = $dados_trados['cidade'];
        $estado = $dados_trados['estado'];
      }
    }
?>

  <form name="form1" method="POST" action="cadastro01.php">
    <table>
      <tr>
          <td>
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" max="8" placeholder="Informe o CEP:" value="<?=$cep?>" autofocus>
          </td>
      </tr>   
      <tr>
          <td>
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" id="logradouro" value="<?=$logradouro?>">
          </td>
      </tr>
      <tr>
          <td>
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" placeholder="Informe o número:" >
          </td>
      </tr>
      <tr>
          <td>
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" id="complemento" placeholder="Informe o complemento:" >
          </td>
      </tr>
      <tr>
          <td>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="<?=$bairro?>">
          </td>
      </tr>
      <tr>
          <td>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" value="<?=$cidade?>">
          </td>
      </tr>
      <tr>
          <td>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" value="<?=$estado?>" >
          </td>
      </tr>
    </table>
    <input onclick="submeter()" type="submit" name="submit" value="Cadastrar">
  </form>
   <?php include("rodape.php");?>