<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboards</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
            <ul>
                <li class="inicio"><a href="#">Início</a></li>
                <li class="projetos"><a href="#">Projetos</a></li>
                <li class="relatorios"><a href="#">Relatórios</a></li>
                <li class="config"><a href="#">Configurações</a></li>
            </ul>
            <div class="perfil-usuario">
                <img src="imagens/smiling-young-man.avif" alt="avatar">
                <span>Jean Livero</span>
            </div>
        </nav>

        <main>
            <section class="container-cards">
                <article>
                    <h2>Módulo de usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área</p>
                    <a href="usuario.php" class ="btn">Acessar</a>
                </article>
                <article>
                    <h2>Relatórios Gerenciais</h2>
                    <p>Acesse relatórios gerenciais nessa área</p>
                    <a href="#" class ="btn">Acessar</a>
                </article>
                <article>
                    <h2>Automações</h2>
                    <p>Gerencie automações do sistema</p>
                    <a href="#" class ="btn">Acessar</a>
                </article>
            </section>
        </main>            
    
    </div>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I</p> 
</footer>
</body>
</html>