<?php
$login = $_POST['usuario'];
$senhai = $_POST['senha'];
		try
		{
     		$pdo = new PDO("mysql:dbname=proj;host=localhost","root","");
     		$cmd = $pdo->prepare("SELECT * FROM cadastro_fornecedor WHERE usuario = :usuar and senha = :se");
     		$cmd->bindValue(":usuar",$login);
     		$cmd->bindValue(":se",$senhai);
     		$cmd->execute();
     		$resultado = $cmd->fetch();
     		if ($resultado){
     			header('Location: index.html');
     		}else
     		{
     			$message = "Usuario ou senha não conferem";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header("Refresh: 0; url=login.html");
				exit();


     		}
     		

		}
		catch(PDOException $e)
		{
			echo "Erro com banco de dados".$e->getMessage();
			exit();
		}
	    
		    catch(Exception $e)
		{
			echo "Erro generico ".$e->getMessage();
			exit();
    	}
?>