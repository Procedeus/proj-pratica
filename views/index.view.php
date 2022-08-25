<nav>
    <ul class="flex">
        <li  class="letter"><?php echo $_SESSION['id'].' Teste';?></li>
        <li>
            <a class="letter-nav" href="#sobre">Sobre</a> 
            <a class="letter-nav" href="#experiencia">Experiência</a> 
            <a class="letter-nav" href="#projetos">Projetos</a>
            <a class="letter-nav" href="#contatos">Contatos</a>
        </li>
        <li><a  class="letter" href="logout.php">Logout</a></li>
    </ul>
</nav>

<section id="sobre">
    <div class="space">
        <h2>Sobre</h2>
        <p class="explicacao">Um breve resumo sobre mim.</p>
    </div>
    <div class="grid">
        <div class="div-img-perfil">
            <div class="icons">
                <a href=""><i class="fab fa-linkedin fa-lg"></i></a>
                <a href=""><i class="fab fa-github fa-lg"></i></a>
                <a href=""><i class="fab fa-instagram fa-lg"></i></a>
            </div>
            <img class="img-perfil" src="https://i.imgur.com/JtQ68c5.jpg" alt="">
        </div>
        <div class="perfil">
            <h2>Nome Sobrenome</h2>
            <p class="p-perfil">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quis et, veniam nam optio error sequi nemo, eveniet harum vitae, aliquid rerum? At, tempora quibusdam ab cumque facilis laboriosam? Quis.</p>
            <p class="letter">Cidade, Estado</p>
        </div>
    </div>
</section>

<section id="experiencia">
    <div class="space">
        <h2>Experiência</h2>
        <p class="explicacao">Experiências profissionais.</p>
    </div>
    <div class="div-flex-wrap">
        <div class="div-experiencia">
            <div>
                <i class="fas fa-building fa-lg"></i><h2>Empresa</h2>
            </div>
            <div>
                <i class="fas fa-briefcase fa-lg"></i><p class="letter">Cargo na Empresa</p>
            </div>
            <div>
            <i class="fas fa-business-time fa-lg"></i><p class="letter">Tempo na empresa</p>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis veritatis necessitatibus dolorum sint ea tempore? Consequuntur culpa aut esse soluta dicta tempora, dolores debitis ea illum itaque placeat non eos.</p>
        </div>
        <div class="div-experiencia">
            <div>
                <i class="fas fa-building fa-lg"></i><h2>Empresa</h2>
            </div>
            <div>
                <i class="fas fa-briefcase fa-lg"></i><p class="letter">Cargo na Empresa</p>
            </div>
            <div>
            <i class="fas fa-business-time fa-lg"></i><p class="letter">Tempo na empresa</p>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis veritatis necessitatibus dolorum sint ea tempore? Consequuntur culpa aut esse soluta dicta tempora, dolores debitis ea illum itaque placeat non eos.</p>
        </div>
    </div>
</section>

<section id="projetos">
    <div class="space">
        <h2>Projetos</h2>
        <p class="explicacao">Projetos que contribuiu.</p>
    </div>
    <div class="div-flex-wrap">
        <div class="div-projetos div-flex">
            <div>
                <img src="https://i.imgur.com/p7KCPvZ.png" alt="">
            </div>
            <div>
                <h2>Nome Projeto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptas, excepturi illum consequatur dignissimos rerum numquam voluptatum.</p>
                <p class="letter">Data inicial e final</p>
                <div>
                    <a href="" class="btn-proj">Acessar</a>
                </div>
            </div>
        </div>
        <div class="div-projetos div-flex">
            <div>
                <img src="https://i.imgur.com/p7KCPvZ.png" alt="">
            </div>
            <div>
                <h2>Nome Projeto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptas, excepturi illum consequatur dignissimos rerum numquam voluptatum.</p>
                <p class="letter">Data inicial e final</p>
                <div>
                    <a href="" class="btn-proj">Acessar</a>
                </div>
            </div>
        </div>
        <div class="div-projetos div-flex">
            <div>
                <img src="https://i.imgur.com/p7KCPvZ.png" alt="">
            </div>
            <div>
                <h2>Nome Projeto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptas, excepturi illum consequatur dignissimos rerum numquam voluptatum.</p>
                <p class="letter">Data inicial e final</p>
                <div>
                    <a href="" class="btn-proj">Acessar</a>
                </div>
            </div>
        </div>
        <div class="div-projetos div-flex">
            <div>
                <img src="https://i.imgur.com/p7KCPvZ.png" alt="">
            </div>
            <div>
                <h2>Nome Projeto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptas, excepturi illum consequatur dignissimos rerum numquam voluptatum.</p>
                <p class="letter">Data inicial e final</p>
                <div>
                    <a href="" class="btn-proj">Acessar</a>
                </div>
            </div>
        </div>
    </div>
    
</section>

<section id="contatos">
    <div class="space">
        <h2>Contatos </h2>
        <p class="explicacao">Contatos que possuí.</p>
    </div>
    <div class="div-flex-wrap">
        <div class="div-contatos div-flex">
            <i class="fas fa-phone fa-lg"></i>
            <h2>Telefone</h2>
        </div>
        <div class="div-contatos div-flex">
            <i class="fab fa-github fa-lg"></i>
            <h2>Github</h2>
        </div>
        <div class="div-contatos div-flex">
        <i class="fab fa-instagram fa-lg"></i>
            <h2>Instagram</h2>
        </div>
        <div class="div-contatos div-flex">
            <i class="fab fa-linkedin fa-lg"></i>
            <h2>Linkedin</h2>
        </div>
    </div>
</section>
<footer>
    <p class="explicacao"> Criado por</p>
    <h2>Murilo Rezende</h2>
    <div class="div-flex">
        <a href=""><i class="fab fa-linkedin fa-lg"></i></a>
        <a href=""><i class="fab fa-github fa-lg"></i></a>
        <a href=""><i class="fab fa-instagram fa-lg"></i></i></a>
    </div>
</footer>

