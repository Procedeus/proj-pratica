<body>
    <ul class="squares">
    </ul>
    <div class="login-form">
        <h2>Treino Projeto</h2>
        <p>Olá Seja Bem-vindo ao Registro</p>
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
            <div class="single-i">
                <i class="icon fas fa-at"></i>
                <input class="inp" type="text" name="email" id="email" placeholder="E-mail">
            </div>
            <div class="single-i">
                <i class="icon fas fa-address-card"></i>
                <input class="inp" type="text" name="name" id="name" placeholder="Nome">
            </div>
            <div class="single-i">
                <i class="icon fas fa-address-card"></i>
                <input class="inp" type="text" name="lname" id="lname" placeholder="Sobrenome">
            </div>
            <div>
                <p><?php echo $view_bag['error'];?></p>
            </div>
            <div>
                <p><?php echo $view_bag['errore'];?></p>
            </div>
            <div class="single-i confirm-reg">
                <input class="btn" type="submit" name="confirmar" value="Confirmar">
                <a class="btn" href="login.php">Voltar</a>
            </div>
        </form>
    </div>
    <script src="./views/js/index.js"></script>
</body>