<?php
    $title = "INFORMAÇÕES DO USUÁRIO";
    include "includes/header.php";
?>

<div class="info-usuario">
    <div class="info-usuario-navbar">
        <div class="info-usuario-navbar-content">
            <div class="logo">
                <a href="home.php"><i class="fa-solid fa-wifi"></i></a>
                <h1>Informações do Usuário</h1>
            </div>
            <div class="menu-hamburger">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="info-usuario-content">
        <div class="img-user">
            <div class="user-icon">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <div class="info-usuario-form">
            <form action="" method="POST">
                <h2>Usuário:</h2>
                <input type="text" name="user" placeholder="Alterar seu Usuário..." required>
                <h2>Email:</h2>
                <input type="text" name="email" placeholder="Alterar seu Email..."  required>
                <h2>Número:</h2>
                <input type="number" name="numero" placeholder="Alterar seu Número..."  required>
                <h2>Senha:</h2>
                <input type="password" name="senha" placeholder="Digite sua Senha..."  required>
                <div class="btn-salvar"><button type="submit">Salvar</button></div>
            </form>
        </div>
    </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>