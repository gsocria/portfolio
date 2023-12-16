<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1b60912f0e.js" crossorigin="anonymous"></script>

    <title>Portfólio</title>
</head>

<body>
    <header>
        <section class="navbar">

            <div class="menu" id="menu">
                <ul class="itens" id="itens">
                    <li>
                        <a href="#"> HOME </a>
                    </li>
                    <li>
                        <a href="#sobre"> SOBRE MIM </a>
                    </li>
                    <li>
                        <a href="#projetos"> PROJETOS </a>
                    </li>
                    <li>
                        <a href="#contato"> CONTATO </a>
                    </li>
                </ul>

                <div class="mode" id="mode">
                    <input type="checkbox" class="checkbox" id="chk">

                    <label for="chk" class="label">
                        <i class="fas fa-sun" style="color: #ff4602;"></i>
                        <i class="fa-solid fa-moon" style="color: #ff4602;"></i>
                        <div class="ball"></div>
                    </label>
                </div>
            </div>

            <div class="menu-mobile">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>

        </section>
    </header>

    <nav>
        <section id="home">

            <div class="texto-home">
                <div class="titulo-home">
                    <h1> Desenvolvedor </h1>
                    <h1 class="titulo-baixo"> Web<span>.</span> </h1>
                </div>

                <div class="subTitulo-home">
                    <p class="text-subTitulo">
                    </p>
                </div>

            </div>

            <div class="imagem-home">
                <img src="./assets/img/6200_8_09-fotor-bg-remover-2023061717233.png" alt="">
            </div>
        </section>

        <section id="sobre">

            <div class="titulo-sobre">
                <div class="text-titulo">
                    <h1>SOBRE MIM</h1>
                </div>
            </div>

            <div class="info">
                <div class="imagem-sobre">
                    <img src="./assets/img/fotoGui.jpg" alt="">
                </div>

                <div class="caixa-texto-sobre">
                    <div class="texto-sobre">
                        <h1>Olá,</h1>
                    </div>

                    <div class="subTexto-sobre">
                        <p>
                            Meu nome é Guilherme Gonçalves sou um desenvolvedor altamente motivado e apaixonado pela criação de soluções inovadoras. Com experiência em desenvolvimento de software e uma compreensão dos princípios fundamentais de programação, estou entusiasmado em continuar crescendo, aprendendo e contribuindo para projetos desafiadores.
                        </p>
                    </div>

                    <div class="icons-sobre">
                        <ul>
                            <li>
                                <a href="https://github.com/gsocria?tab=repositories" target="_blank"><i
                                        class="fa-brands fa-github fa-2xl" style="color: var(--branco);"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/guilherme-gon%C3%A7alves-de-souza-7941b2273/"
                                    target="_blank"><i class="fa-brands fa-linkedin fa-2xl"
                                        style="color: var(--branco);"></i></a>
                            </li>
                            <li>
                                <a href="https://wa.me/5533999415207" target="_blank"> <i
                                        class="fa-brands fa-whatsapp fa-2xl" style="color: var(--branco);"></i></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section class="minhas-skills">
            <div class="caixa-item-skill">
                <div class="linha1"></div>

                <div class="titulo-skill">
                    <h1>HABILIDADES</h1>
                </div>

                <div class="linha2"></div>
            </div>

            <div class="icons-skills" id="icons-skill">
                <ul class="modo-claro" id="modo-claro">
                    <li>
                        <img src="./assets/img/icons8-html-100.png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-css-100.png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-javascript-100.png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-php-100.png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-mysql-100.png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-git-100.png" alt="">
                    </li>
                </ul>

                <ul class="modo-escuro" id="modo-escuro">
                    <li>
                        <img src="./assets/img/icons8-html-100 (1).png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-css-100 (1).png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-javascript-100 (1).png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-php-100 (1).png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-mysql-100 (1).png" alt="">
                    </li>
                    <li>
                        <img src="./assets/img/icons8-git-100 (1).png" alt="">
                    </li>
                </ul>
            </div>

        </section>

        <section id="projetos">

            <div class="titulo-projetos">
                <div class="text-titulo">
                    <h1>PROJETOS</h1>
                </div>
            </div>

            <div class="caixa-projetos">
                <div class="meu-projeto">
                    <div class="foto-projeto">
                        <img src="./assets/img/Captura de Tela (2)-fotor-2023062314418.png" alt="">

                    </div>

                    <div class="text-projeto">
                        <p>
                            Torneios.gg é um empreendimento pessoal em desenvolvimento, dedicado ao público dos
                            e-Sports. O objetivo central desse projeto é proporcionar uma plataforma abrangente que
                            permita aos usuários participar, monitorar e promover torneios em diversas modalidades dos
                            e-Sports.</p>
                    </div>

                    <div class="footer-projeto">
                        <div class="icons-projeto">
                            <div>
                                <ul>
                                    <li><i class="fa-brands fa-html5 fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-css3-alt fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-square-js fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-php fa-2xl" style="color: var(--branco);"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="botao-projeto">
                            <button>
                                <a href="https://github.com/gsocria/Torneio.gg" target="_blank"> VER MAIS </a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="meu-projeto">

                    <div class="foto-projeto">
                        <img src="./assets/img/lojaKAVG.PNG" alt="">

                    </div>

                    <div class="text-projeto">
                        <p>
                            O KAVG é um projeto pessoal de e-commerce voltado para a venda de produtos de confeitaria, desde bolos e cupcakes até doces personalizados. O objetivo é criar uma plataforma online que ofereça uma experiência encantadora aos clientes, proporcionando fácil navegação, visual atraente e um processo de compra intuitivo.</p>
                    </div>

                    <div class="footer-projeto">
                        <div class="icons-projeto">
                            <div>
                                <ul>
                                    <li><i class="fa-brands fa-html5 fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-css3-alt fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-square-js fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-php fa-2xl" style="color: var(--branco);"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="botao-projeto">
                            <button>
                                <a href="https://github.com/oGuilherme1/KAVG.ourmet/tree/main" target="_blank"> VER MAIS </a>
                            </button>
                        </div>
                    </div>

                </div>

                <div class="meu-projeto">

                    <div class="foto-projeto">
                        <img src="./assets/img/Captura de Tela (6)-fotor-20230626161543.png" alt="">

                    </div>

                    <div class="text-projeto">
                        <p>
                            Uma lista de tarefas prática, que permite salvar os itens no localStorage. Você pode organizar suas tarefas facilmente, sabendo que elas ficarão salvas no seu dispositivo para você acessar quando precisar. </p>
                    </div>

                    <div class="footer-projeto">
                        <div class="icons-projeto">
                            <div>
                                <ul>
                                    <li><i class="fa-brands fa-html5 fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-css3-alt fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-square-js fa-2xl" style="color: var(--branco);"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="botao-projeto">
                            <button>
                                <a href="https://github.com/gsocria/listaTarefa" target="_blank"> VER MAIS </a>
                            </button>
                        </div>
                    </div>

                </div>
              

                <div class="meu-projeto">
                    <div class="foto-projeto">
                        <img src="./assets/img/foto_IA.PNG" alt="">
    
                    </div>
    
                    <div class="text-projeto">
                        <p>
                            Sistema que busca e trasncreve videos do yotube, utilizando IA.
                        </p>
                    </div>
    
                    <div class="footer-projeto">
                        <div class="icons-projeto">
                            <div>
                                <ul>
                                    <li><i class="fa-brands fa-html5 fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-css3-alt fa-2xl" style="color: var(--branco);"></i></li>
                                    <li><i class="fa-brands fa-square-js fa-2xl" style="color: var(--branco);"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="botao-projeto">
                            <button>
                                <a href="https://github.com/oGuilherme1/Transcricao-com-IA" target="_blank"> VER MAIS </a>
                            </button>
                        </div>
                    </div>
            </div>
          

            <div class="btn-verTodos">
                <button>
                    <a href="https://github.com/gsocria?tab=repositories" target="_blank"> VER TODOS </a>
                </button>
            </div>


        </section>

        <section id="contato">

            <div class="titulo-contato">
                <div class="text-titulo">
                    <h1>CONTATO</h1>
                </div>

            </div>

            <form action="php/envio.php" class="formulario" method="post">

                <div class="conteudo">

                    <div class="coluna">
                        <div class="campos">
                            <label for="nome">Seu nome:</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>

                        <div class="campos">
                            <label for="email">Seu email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="campos">
                            <label for="assunto">Assunto:</label>
                            <input type="text" id="assunto" name="assunto" required>
                        </div>
                    </div>

                    <div class="area">
                        <label for="mensagem">Mensagem:</label><br>
                        <textarea id="mensagem" name="mensagem" rows="5" cols="" required></textarea>
                    </div>

                    <div class="botao-contato">
                        <button class="btn-contato" name="enviar" type="submit">ENVIAR</button>
                    </div>

                </div>

            </form>


        </section>
    </nav>

    <script src="./assets/js/script.js"></script>

</body>

</html>