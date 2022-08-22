<body>
    <ul class="squares">
    </ul>
    <div class="login-form">
        <h2>Treino Projeto</h2>
        <p>Olá Seja Bem-vindo ao Login</p>
        <form class="form-flex" method="POST">
            <div class="single-i">
                <i class="icon fas fa-user"></i>
                <input class="inp" type="text" name="login" id="login" placeholder="Usuário">
            </div>
            <div class="single-i">
                <i class="icon fas fa-unlock"></i> 
                <input class="inp-2" type="password" name="password" id="password" placeholder="Senha">
                <i class="icon-2 fas fa-eye"></i>
            </div>
            <div>
                <p><?= $view_bag['error'] ?></p>
            </div>
            <div class="single-i">
                <input class="btn" type="submit" name="confirmar" value="Confirmar">
            </div>
            <div class="single-i">
                <a class="btn" href="register.php">Registrar</a>
            </div>
        </form>
    </div>
    <script src="js/index.js"></script>
</body>