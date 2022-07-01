  
<?php
require_once 'classes.php';
$p = new Pessoas("id17657458_proj","localhost","id17657458_root","Root-in12345");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/style.css">
    <link rel="shortcut icon" href="../banco de img/favicon.ico" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <?php
	if (isset($_POST['nome']))
	{
	  	$nome = addslashes($_POST['nome']);
	  	$telefone = addslashes($_POST['telefone']);

	  	$cpf = addslashes($_POST['cpf']);
	  	$endereco = addslashes($_POST['endereco']);

	  	$cidade = addslashes($_POST['cidade']);
	  	$estado = addslashes($_POST['estado']);

	  	$usuario = addslashes($_POST['usuario']);
	  	$senha = addslashes($_POST['senha']);
	  	$email = addslashes($_POST['email']);
	  	$cfornecedor = addslashes($_POST['cfornecedor']);
	  	if (!empty($nome) && !empty($telefone) && !empty($cpf) && !empty($endereco) && !empty($cidade) && !empty($estado) && !empty($usuario) && !empty($senha) && !empty($email) && !empty($cfornecedor))
	  	{
	  		// funcao cadastrar

		  	if ($p->cadastrarFornecedor($nome, $telefone, $cpf, $endereco, $cidade, $estado, $usuario, $senha, $email, $cfornecedor))

		  	{
		  		echo "Email ja cadastrado";
		  	}
	  	else
		  	{
		  		echo "Preencha todos os campos";
		  	}
		}
	}
 ?>
<div class="primeiraTela">       
    <header>
        <a href="../index.html">
            <h1 class="logo"> UaiTech </h1>
        </a>
        <div class="headerItens">
            <a class="headerItem" href="../index.html">Home</a>
            <a class="headerItem" href="../templates/produtos.html">Produtos</a>
            <a class="headerItem" href="../templates/frutasDaEstação.html">Frutas da Estação</a>
            <a class="headerItem" href="../templates/login.html">Login</a>
            <a class="headerItem" href="../templates/cadastro.html">Cadastro</a>
        </div>
    </header>
<main>
    <section>
        <form method="POST">
            <h2 class="cadastroTitulo">Cadastro De Fornecedores</h2>
            <label for="nome">Nome</label>
            <input class="cadastroInput" type="text" name="nome" id="nome" 
            placeholder="Digite seu nome completo..." size="50" required>
        
            <label for="telefone">Telefone</label>
            <input class="cadastroInput" type="tel" name="telefone" id="telefone" size="10" 
            placeholder="Digite seu número... Exemplo: (xx) xxxxx-xxxx"  required>
            
            <label for="cpf">CPF</label>
            <input class="cadastroInput" type="text" name="cpf" id="cpf" size="10" 
            placeholder="Digite seu CPF..." maxlength="11" required>
            <br>
            <label for="endereco">Endereço</label>
            <input class="cadastroInput" type="text" name="endereco" id="endereco" 
            placeholder="Digite seu enderço e número..." required>
        
            <label for="cidade">Cidade</label>
            <input class="cadastroInput" type="text" name="cidade" id="cidade" size="10" 
            placeholder="Digite a sua cidade..." required>
        
            <label for="estado">Estado</label>
            <input class="cadastroInput" type="text" name="estado" id="estado" size="2"
            placeholder="Digite seu estado... Ex: MG" maxlength="2" required>
            <br>
            <label for="usuario">Usuário</label>
            <input class="cadastroInput" type="text" name="usuario" id="usuario" size="9" 
            placeholder="Crie um nome de usuário..." required>
        
            <label for="senha">Senha</label>
            <input class="cadastroInput" type="password" name="senha" id="senha" size="6" 
            placeholder="Crie uma senha..." required>
        
            <label for="email">Email</label>
            <input class="cadastroInput" type="text" name="email" id="email" size="10" 
            placeholder="Digite seu email... Ex: email@empresa.com.br" required>
            <br>
            <label for="cfornecedor">Código do fornecedor</label>
            <input class="cadastroInput" type="text" name="cfornecedor" id="cfornecedor" size="4" 
            placeholder="Digite o código de fornedor" required>
            <br>
            <label for="checkbox">Deseja receber nossas novidades por email?</label>
            <input class="checkbox" type="checkbox" name="checkbox">
            <br>
            <input class="cadastrar" type="submit" name="Cadastrarf" value="Cadastrar Fornecedor"
            alt="Deseja receber nossas novidades por email?">
        </form>
    </section>

    <section>
        <form method="POST">
            <h2 class="cadastroTitulo">Cadastro Do Cliente</h2>
            <label for="nome">Nome</label>
            <input class="cadastroInput" type="text" name="nome" id="nome" 
            placeholder="Digite seu nome completo..." size="50" required>
        
            <label for="telefone">Telefone</label>
            <input class="cadastroInput" type="tel" name="telefone" id="telefone" size="10" 
            placeholder="Digite seu número... Exemplo: (xx) xxxxx-xxxx"  required>
            
            <label for="cpf">CPF</label>
            <input class="cadastroInput" type="text" name="cpf" id="cpf" size="10" 
            placeholder="Digite seu CPF..." maxlength="11"  required>
            <br>
            <label for="endereco">Endereço</label>
            <input class="cadastroInput" type="text" name="endereco" id="endereco" 
            placeholder="Digite seu enderço e número..." required>
        
            <label for="cidade">Cidade</label>
            <input class="cadastroInput" type="text" name="cidade" id="cidade" size="10" 
            placeholder="Digite a sua cidade..." required>
        
            <label for="estado">Estado</label>
            <input class="cadastroInput" type="text" name="estado" id="estado" size="2"
            placeholder="Digite seu estado... Ex: MG" maxlength="2" required>
            <br>
            <label for="usuario">Usuário</label>
            <input class="cadastroInput" type="text" name="usuario" id="usuario" size="9" 
            placeholder="Crie um nome de usuário..." required>
        
            <label for="senha">Senha</label>
            <input class="cadastroInput" type="password" name="senha" id="senha" size="6" 
            placeholder="Crie uma senha..." required>
        
            <label for="email">Email</label>
            <input class="cadastroInput" type="text" name="email" id="email" size="10" 
            placeholder="Digite seu email... Ex: email@empresa.com.br" required>
            <br>
            <label for="checkbox">Deseja receber nossas novidades por email?</label>
            <input class="checkbox" type="checkbox" name="checkbox">
            <br>
            <input class="cadastrar" type="submit" name="Cadastrarf" value="Cadastrar Usuário">
           
        </form>
    </section>
</main>
</div>
<footer>
    <ul class="footerList">
        <li class="list-inline-item"><a href="#">Home</a></li>
        <li class="list-inline-item"><a href="#">Services</a></li>
        <li class="list-inline-item"><a href="templates/sobre.html">Sobre nós</a></li>
        <li class="list-inline-item"><p class="copyright">UAITECH © 2021</p></li>
    </ul>
</footer>
</body>
</html>