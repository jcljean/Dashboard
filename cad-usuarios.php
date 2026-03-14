<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
            <section class="card-form">
                
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
                    <p>Preencha os dados abaixo para registrar um novo acesso.</p>
                </div>
                
                <form action="processa.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex. Jean Carlos Livero" required>
                    </div>
                                
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="jean.livero@email.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group Flex-1" >
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required>        
                        </div>
                        <div class="form-group Flex-1" >
                            <label for="nivel">Nivel</label>
                            <select id="nivel" name="nivel">
                                <option value="1">Usuário</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save"><i class="fa-solid fa-floppy-disk"></i></button>
                        <button type="index.php" class="btn-cancel">Cancelar</button>
                    </div>
                </form>

            </section>
        </main>
    </div>
     <?php include 'footer.php'; ?>
</body>
</html>