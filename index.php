<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Cadastro</title>
  
</head>
<body>

    <div class="form-container">
        <h2>Cadastre-se e receba informações sobre os novos lançamentos.</h2>
        <form action="processar.php" method="post">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <div class="small-inputs">
                <input type="text" name="ddd" placeholder="DDD" required>
                <input type="tel" name="telefone" placeholder="Telefone" required>
            </div>
            <button type="submit">ENVIAR</button>
        </form>
        <p class="privacy">Clicando em enviar você concorda com a nossa <a href="#">Política de Privacidade</a></p>
    </div>

</body>
</html>
