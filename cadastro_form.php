<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Usuário</title>
  </head>
  <body>
    <div>
        <form action="cad_usuario.php" method="post">
            <div>
              <h1>Cadastro de Usuário</h1>
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div>
                <label for="tipo_usuario">Tipo de Usuário</label>
                <select id="tipo_usuario" name="tipo_usuario">
                    <option value="usuario">Usuário</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            <div>
                <button type="submit">Salvar</button>
            </div>
            </div>
        </form>
        <div>
            <button onclick="window.location.href='login.php'">Ir para Login</button>
        </div>
    </div>
  </body>
</html>
