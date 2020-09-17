<html lang = "pt-br">
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <style>
      body {background-color: #2F3235;}
      fieldset {
        margin-left: 20%;
        width: 700px;
        height: 1040px;
        line-height: 30px;
      }
      #nome, #email, #logradouro, #complemento, #bairro, #cidade, #estado {width: 380px;}
      #cep, #cpfCnpj, #numero {width: 220px;}
      #ddd {width: 60px;}
      #telefone {width: auto;}
      legend {
        font-size: 2.4em;
        font-family: verdana;
        color: #FFFFFF;
      }
      label {
        font-family: verdana;
        font-size: 1.8em;
        color: #FFFFFF;}
      input, #opcao {
        background-color: #6c757d;
        color: white;
        height: 30px;
        font-size: 1.2em;}
      #formulario {
        margin-left: 80px;
      }
      #area {
        position: relative;
      }
    </style>
  </head>
  <body>
    <img src="https://helpper.com.br/img/logos/helpper-logo.png" width="200px" height=""></img>
    <div id="area">
      <form method="post" action="processa_dados.php" id="formulario">
        <fieldset>
          <legend>Formulário de Cadastro</legend>
          <br><label for="nome">Nome:</label><br>
          <input type="text" name="nome" id="nome" maxlength="50"><br>
          <br><label for="email">E-mail:</label><br>
          <input type="text" name="email" id="email" maxlength="50"><br>
          <br><label for="cpfCnpj">CPF ou CNPJ:</label><br>
          <input type="number" name="cpfCnpj" id="cpfCnpj" maxlength="14"><br>
          <br><label for="ddd">DDD: </label><label for="telefone">Telefone:</label><br>
          <input type="number" name="ddd" id="ddd" maxlength="2" value="()">
          <input type="number" name="telefone" id="telefone" maxlength="10"><br>
          <br><label for="cep">CEP:</label><br>
          <input type="number" name="cep" id="cep" maxlength="50"><br>
          <br><label for="logradouro">Logradouro:</label><br>
          <input type="text" name="logradouro" id="logradouro" maxlength="50"><br>
          <br><label for="numero">Número:</label><br>
          <input type="number" name="numero" id="numero" maxlength="50"><br>
          <br><label for="complemento">Complemento:</label><br>
          <input type="text" name="complemento" id="complemento" maxlength="50"><br>
          <br><label for="bairro">Bairro:</label><br>
          <input type="text" name="bairro" id="bairro" maxlength="50"><br>
          <br><label for="cidade">Cidade:</label><br>
          <input type="text" name="cidade" id="cidade" maxlength="50"><br>
          <br><label for="estado">Estado:</label><br>
            <select name="opcao" id="opcao">
              <option value="">Escolha a opção</option>
              <option value="ac">Acre (AC)</option>
              <option value="al">Alagoas (AL)</option>
              <option value="ap">Amapá (AP)</option>
              <option value="am">Amazonas (AM)</option>
              <option value="ba">Bahia (BA)</option>
              <option value="ce">Ceará (CE)</option>
              <option value="df">Distrito Federal (DF)</option>
              <option value="es">Espírito Santo (ES)</option>
              <option value="go">Goiás (GO)</option>
              <option value="ma">Maranhão (MA)</option>
              <option value="mt">Mato Grosso (MT)</option>
              <option value="ms">Mato Grosso do Sul (MS)</option>
              <option value="mg">Minas Gerais (MG)</option>
              <option value="pa">Pará (PA)</option>
              <option value="pb">Paraíba (PB)</option>
              <option value="pr">Paraná (PR)</option>
              <option value="pe">Pernambuco (PE)</option>
              <option value="pi">Piauí (PI)</option>
              <option value="rj">Rio de Janeiro (RJ)</option>
              <option value="rn">Rio Grande do Norte (RN)</option>
              <option value="rs">Rio Grande do Sul (RS)</option>
              <option value="ro">Rondônia (RO)</option>
              <option value="rr">Roraima (RR)</option>
              <option value="sc">Santa Catarina (SC)</option>
              <option value="sp">São Paulo (SP)</option>
              <option value="se">Sergipe (SE)</option>
              <option value="to">Tocantins (TO)</option>
          <br><input type="submit" id="enviar" value="Enviar">
        </fieldset>
      </form>
    </div>
  </body>
</html>
