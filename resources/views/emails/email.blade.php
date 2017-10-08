<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div style="width: 100%; background-color: #b8b3ff; height: auto; padding: 5px; text-align: center; color: #FFF;">
		<h1>República Vira-latas</h1>
	</div>
	<div>
		<h2>Você recebeu o seguinte contato pelo site: </h2>
	</div>
	<ul>
		<li><p><strong>Nome: {{ $nome }}</strong></p></li>
		<li><p><strong>Email: {{ $email or '' }}</strong></p></li>
		<li><p><strong>Telefone: {{ $tel or '' }}</strong></p></li>
		<li><p><strong>Bairro: {{ $bairro or '' }}</strong></p></li>
	</ul>
	<br><br>
	<hr>

	<p>Contato realizado através do site <a href="www.republicadosviralatas.com.br" target="_blank">www.republicadosviralatas.com.br</a></p>
</body>
</html>