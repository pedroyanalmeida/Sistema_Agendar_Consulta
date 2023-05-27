<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
<nav>
<ul>
<li><a>Hospital Boa Vida</a></li>
<li><a href="../index.php">Home</a></li>
<li><a href="cadastro.php">Cadastra-se</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="dados.php">Segurança de dados</a></li>
<li><a href="profissional.php">Área do profissional de saúde</a></li>
</ul>
</nav> <br>
<div class="container_form">
<h1>Formulário</h1>
<form class="form" action="../model/dadosUsuario.php" method="post">

<div class="form_grupo">
<label for="nome" class="form_label">Nome: </label><input type="text" class="form_input" id="nome" name="nome" placeholder="Insira seu nome completo" required> <br>
</div>
<div class="form_grupo">
<label for="cpf" class="form_label">CPF: </label><input  type="text" class="form_input" id="cpf" name="cpf" placeholder="Insira seu CPF" required minlength="10" maxlenght="10">
</div> <br>
<div class="form_grupo">
<label for="idade" class="form_label">Idade: </label><input  type="number" class="form_input" id="idade" name="idade" placeholder="Insira sua idade" required>
</div> <br>
<div class="form_grupo">
<label for="telefone" class="form_label">Telefone: </label><input  type="text" class="form_input" id="telefone" name="telefone" placeholder="Insira seu telefone (se tiver)" minlength="10" maxlenght="11">
</div> <br>
<div class="form_grupo">
                    <label for="sexo">Sexo: </label>
<select name="sexo" id="sexo">
<option value="">-Escolha seu sexo-</option>
  <option value="m">Masculino</option>
  <option value="f">Feminino</option>
  <option value="o">Outro</option>
</select>
</div>
</select>
<br>
<div class="form_grupo">
<label>Data de nascimento: </label><input type="text" name="d" placeholder="Insira a data, formato:##/##/####"> <br>
<br>
</div>
<label>Estado: </label>
<select id="estado" name="estado">
    <option value="">-Escolha seu estado-</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select> <br><br>
<div class="form_grupo">
<label for="cidade" class="form_label">Cidade: </label><input  type="text" class="form_input" id="cidade" name="cidade" placeholder="Insira o nome de sua cidade" required>
</div> <br>
<div class="form_grupo">
<label for="cep" class="form_label">CEP: </label><input  type="text" class="form_input" id="cep" name="cep" placeholder="Insira seu CEP" required maxlenght="8">
</div> <br>
<div class="form_grupo">
<label for="rua" class="form_label">Rua: </label><input  type="text" class="form_input" id="rua" name="rua" placeholder="Insira o nome de sua rua" required>
</div> <br>
<div class="form_grupo">
<label for="sus" class="form_label">SUS: </label><input  type="text" class="form_input" id="sus" name="sus" placeholder="Insira seu número do sus" required minlenght="15" maxlenght="15">
</div> <br>
<div class="form_grupo">
<label for="email" class="form_label">E-mail: </label><input  type="text" class="form_input" id="email" name="email" placeholder="Insira um endereço de e-mail" required>
</div> <br>
<div class="form_grupo">
<label for="senha" class="form_label">Senha: </label><input  type="password" class="form_input" id="senha" name="senha" placeholder="Insira uma senha" required minlength="8" maxlenght="16">
</div> <br>
<div class="submit">
<button type="submit" name="Submit" class="submit_btn">Cadastrar</button>
</div>
</form>
</div>
</body>
</html>