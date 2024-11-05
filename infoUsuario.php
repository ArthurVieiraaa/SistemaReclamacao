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
            <div id="menu-bar">
                <div id="menu" onclick="Menu()">
                    <div id="bar1" class="bar"></div>
                    <div id="bar2" class="bar"></div>
                    <div id="bar3" class="bar"></div>
                </div>
                <ul class="nav" id="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sugestão</a></li>
                    <li><a href="#">Informações</a></li>
                    <li><a href="#">Denuncias</a></li>
                </ul>
            </div>
            <div class="menu-bg" id="menu-bg"></div>
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