<?php
Class Pessoas
{
	private $pdo;
// funcoes
	// Conexao com o banco de dados
	public function __construct($dbname, $host, $user, $senha)
	{
		try
		{
     		$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
		}
		catch(PDOException $e)
		{
			echo "Erro com banco de dados".$e->getMMessage();
			exit();
		}
	    
		    catch(Exception $e)
		{
			echo "Erro generico ".$e->getMMessage();
			exit();
    	}

	}	


	public function validarAcesso($id,$senha)
	{
		$res = array();
		$cmd = $this->pdo->prepare("SELECT * FROM cadastro_fornecedor WHERE usuario = :id and senha = :logi");
		$cmd->bindValue(":id",$id);
		$cmd->bindValue(":logi",$senha);

		$cmd->execute();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}
	public function buscarDados()
	{
		$res = array();
		$cmd = $this->pdo->query("SELECT * FROM cadastro_fornecedor ORDER BY nome");
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}	
	

	//cadastrar fornecedores
	
	public function cadastrarForcedor($nome, $telefone, $cpf, $endereco, $cidade, $estado, $usuario, $senha, $email, $cad_forne)
	{
		$cmd = $this->pdo->prepare("SELECT id from cadastro_fornecedor WHERE cpf = :CPF");
		$cmd->bindValue(":CPF",$cpf);
     	$cmd->execute();
     	if ($cmd->rowCount() > 0)
     	{
     		return false;
      	}else
      	{
     	$cmd = $this->pdo->prepare("INSERT INTO cadastro_fornecedor (nome, Telefone, cpf, endereco, cidade, estado, usuario, senha, email, cod_fornecedor) VALUES (:n, :tel, :Cpf, :ende, :cid, :esta, :usua, :senn, :emai, :cfor)");

      		$cmd->bindValue(":n",$nome);
      		$cmd->bindValue(":tel",$telefone);
      		$cmd->bindValue(":Cpf",$cpf);
      		$cmd->bindValue(":ende",$endereco);
      		$cmd->bindValue(":cid",$cidade);
      		$cmd->bindValue(":esta",$estado);
      		$cmd->bindValue(":usua",$usuario);
      		$cmd->bindValue(":senn",$senha);
      		$cmd->bindValue(":emai",$email);
      		$cmd->bindValue(":cfor",$cadastro_fornecedor);
      		$cmd->execute();
 

      		return true;
      	}

	}

}
?>
