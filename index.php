<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Importar dados do Excel</title>
	<head>
		<link rel="style" href="style.css">
	<body>
		<h1>Upload Excel</h1>
		
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			<input type="submit" value="Enviar">
		</form>
		
	</body>
</html>