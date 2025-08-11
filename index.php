<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giovana Frade I Portfólio</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&amp;display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/167f6b34b8.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    </head>

    <body>
        <header class="header">
            <div class="logo-header">
                <a href="index.php"><img src="media/fotoheader.png" class="img-logo-header" /></a>
                <a href="index.php" class="nome-logo-header">Giovana Frade.</a>
            </div>

            <div class="nav-header">
                <ul>
                    <li>
                        <a href="index.php#sobre" id="sobre-header">Sobre</a>
                    </li>
                    <li>
                        <a href="index.php#projetos" id="projetos-header">Projetos</a>
                    </li>
                    <li>
                        <a href="index.php#contato" id="contato-header">Contato</a>
                    </li>
                </ul>
            </div>
        </header>
        <section class="home" id="home">
            <div class="home-entrada">
                <div class="nome-home-entrada">
                    <h1>Olá!
                        <span class="wave" role="img" aria-labelledby="wave">👋🏻</span>
                    </h1>
                    <div class="nome-home">
                        <h1>eu sou</h1>
                        <h1 class="nomeprincipal-home">giovana frade</h1>
                    </div>
                </div>
                <div class="brief-home">
                    <p>
                        <?php
                            // Nome do arquivo de texto
                            $briefhome = 'media/informacoestxt/briefhome.txt';
                            // Verifica se o arquivo existe antes de tentar ler
                            if (file_exists($briefhome)) {
                                // Lê todo o conteúdo do arquivo para uma string
                                $briefhome = file_get_contents($briefhome);
                                // Exibe o conteúdo dentro do elemento
                                echo $briefhome;
                            } else{
                                echo 'Arquivo-fonte txt não encontrado!';
                            }
                        ?>
                        <!-- Há 6 anos envolvida na área de programação e amando cada vez mais a área. Busco por uma oportunidade profissional que me permita aplicar meus conhecimentos, desenvolver novas habilidades e contribuir com os resultados da empresa. Tenho interesse em atuar como desenvolvedora FullStack. Estou disposta à aprender, colaborar em equipe e assumir novos desafios. -->
                    </p>
                </div>
                <div class="sobre">
                    <div class="sobre-home">
                        <a href="index.php#sobre">Saiba Mais</a>
                    </div>
                    <div class="sociais">
                        <a href="https://github.com/giovanafrade" target="_blank"><i class="fa-brands fa-github fa-2xl" id="github"></i></a>
                        <a href="mailto:13gialves@gmail.com" target="_blank"><i class="fa-solid fa-envelope fa-2xl" id="email"></i></a>
                        <a href="https://wa.me/5511957150430?text=Ol%C3%A1!" target="_blank"><i class="fa-brands fa-whatsapp fa-2xl" id="whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="img-home-main">
                <div class="box">
                    <img src="media/fotogiovana.jpeg" class="img-home" />
                </div>
            </div>
        </section>
        <section id="sobre">
            <h1>sobre</h1>
            <div class="tela-sobre">
                <div class="foto-sobre">
                    <img src="media/mulher.png">
                </div>
                <div class="texto-sobre">
                    <p>
                        <?php 
                            // Nome do arquivo de texto
                            $textosobre = 'media/informacoestxt/textosobre.txt';

                            // Verifica se o arquivo existe
                            if (file_exists($textosobre)) {
                                // Lê todo o conteúdo do arquivo para uma string
                                $textosobre = file_get_contents($textosobre);
                                // Exibe o conteúdo dentro do elemento
                                echo $textosobre;
                            } else{
                                echo 'Arquivo-fonte txt não encontrado!';
                            }
                        ?>
                        <!-- Meu nome é Giovana Frade, tenho 16 anos e sou de São Paulo. Atualmente, estou no 2º ano do Ensino Médio e estou cursando o Técnico de Desenvolvimento de Sistemas pelo SENAI Armando de Arruda Pereira. Além disso, sou certificada pelo SENAI de Informática "Paulo Antonio Skaf" nos seguintes cursos:  -->

                    </p>
                    <ul>
                        <li>Microsoft AI-102: Desenvolvimento de Soluções em Inteligência Artificial (Maio – Junho de 2025,
                            60 horas)</li>
                        <li>Microsoft AI-900: Implantação de Serviços de Inteligência Artificial em Nuvem (Fevereiro de
                            2025, 40 horas)</li>
                        <li>Excel Básico (Março – Abril de 2025, 20 horas)</li>
                        <li>Ética na Inteligência Artificial (Março – Abril de 2025, 4 horas) </li>
                        <li>Segurança no Trabalho (Março – Abril de 2025, 14 horas)</li>
                        <li>Fluência - Fundamentos da Inteligência Artificial (Janeiro – Fevereiro de 2025, 8 horas)</li>
                        <li>Fotografia Digital (Janeiro – Fevereiro de 2025, 40 horas)</li>
                        <li>Design UX e UI (Novembro – Dezembro de 2024, 40 horas)</li>
                        <li>Microsoft Power-BI (Outubro – Novembro de 2024, 32 horas)</li>
                        <li>Microsoft PL-500: Desenvolvedor de RPA Microsoft Power Automate (Outubro – Novembro de 2024, 32 horas)</li>
                    </ul>
                    <h1>tecnologias</h1>
                    <div class="tecnologias">
                        <div class="tec-logos">
                            <img src="media/logostecnologias/html-logo.png" id="html-logo">
                        </div>
                        <div class="tec-logos">
                            <img src="media/logostecnologias/css-logo.png" id="css-logo">
                        </div>
                        <div class="tec-logos">
                            <img src="media/logostecnologias/javascript-logo.png" id="javascript-logo">
                        </div>
                        <div class="tec-logos">
                            <img src="media/logostecnologias/php-logo.png" id="php-logo">
                        </div>
                    </div>
                    <div class="tecnologias2">
                        <div class="tec-logos">
                            <img src="media/logostecnologias/python-logo.png" id="python-logo">
                        </div>
                        <div class="tec-logos">
                            <img src="media/logostecnologias/git-logo.png" id="git-logo">
                        </div>
                        <div class="tec-logos">
                            <img src="media/logostecnologias/azure-logo.png" id="azure-logo">
                        </div>
                        <div class="tec-logos">
                            <img src="media/logostecnologias/figma-logo.png" id="figma-logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projetos">
            <h1>projetos</h1>
            <div class="tela-projetos">
                <div class="eachprojeto">
                    <div class="imagem-projeto">
                        <img src="media/imagensprojetos/jogosvorazes-pc.png">
                    </div>
                    <div class="texto-projeto">
                        <h2>Projeto 1 - Jogos Vorazes</h2>
                        <p>
                            <?php 
                                // Nome do arquivo de texto
                                   $textoprojeto1 = 'media/informacoestxt/projeto1.txt';

                                // Verifica se o arquivo existe antes de tentar ler
                                if (file_exists($textoprojeto1)) {
                                    // Lê todo o conteúdo do arquivo para uma string
                                    $textoprojeto1 = file_get_contents($textoprojeto1);
                                    // Exibe o conteúdo dentro do elemento
                                    echo $textoprojeto1;
                                } else{
                                    echo 'Arquivo-fonte txt não encontrado!';
                                }
                            ?>
                            <!-- O projeto consiste em um website em que contém as informações gerais 
                                sobre cada filme da saga Jogos Vorazes, inspirado nos livros de 
                                Suzanne Collins, como ficha técnica, uma breve sinopse e o trailer.
                                A finalidade é induzir novos espectadores a consumir a saga de filmes. -->
                        </p>
                        <div class="tecnologias-projeto">
                            <i class="fa-brands fa-html5 fa-2xl" id="html-icon"></i>
                            <i class="fa-brands fa-css3-alt fa-2xl" id="css-icon"></i>
                        </div>
                        <div class="botao-versite">
                            <div class="botao">
                                <a href="media/Jogos Vorazes/home.html" target="_blank">Ver Site</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="eachprojeto2">
                    <div class="imagem-projeto">
                        <img src="media/imagensprojetos/sprout-pc.png">
                    </div>
                    <div class="texto-projeto">
                        <h2>Projeto 2 - Sprout</h2>
                        <p>
                            <?php 
                                // Nome do arquivo de texto
                                $textoprojeto2 = 'media/informacoestxt/projeto2.txt';

                                // Verifica se o arquivo existe antes de tentar ler
                                if (file_exists($textoprojeto2)) {
                                    // Lê todo o conteúdo do arquivo para uma string
                                    $textoprojeto2 = file_get_contents($textoprojeto2);
                                   // Exibe o conteúdo dentro do elemento
                                    echo $textoprojeto2;
                                } else{
                                    echo 'Arquivo-fonte txt não encontrado!';
                                }
                            ?>
                            <!-- O projeto consiste em um sistema em que o usuário poderá criar contatos e gerenciá-los,
                            criando grupos e adicionando contatos a eles. O utilizador do site também tem a opção
                            de mudar a cor-tema do site, alterando para cor de sua preferência, pois o sistema
                            prioriza a entrega de um sistema de qualidade ao usuário e que vá de acordo com o gosto do
                            usuário. -->
                        </p>
                        <div class="tecnologias-projeto">
                            <i class="fa-brands fa-html5 fa-2xl" id="html-icon"></i>
                            <i class="fa-brands fa-css3-alt fa-2xl" id="css-icon"></i>
                            <i class="fa-brands fa-square-js fa-2xl" id="js-icon"></i>
                            <i class="fa-brands fa-regular fa-php fa-2xl" id="php-icon"></i>
                        </div>
                        <div class="botao-versite">
                            <div class="botao">
                                <a href="media/Sprout/index.html" target="_blank">Ver Site</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contato">
            <h1>contato</h1>
            <div class="tela-contato">
                <div class="form-contato">
                    <div class="form-contato-container">
                        <form action="contato.php" method="POST" class="contact__form">
                            <div class="form-contato-conteudo">
                                <label for="name">Nome</label><br>
                                <div class="input_box">
                                    <input required="" placeholder="Digite seu Nome" type="text" class="contact__form-input" name="name" id="name">
                                </div>

                            </div>
                            <div class="form-contato-conteudo">
                                <label for="email">Email</label><br>
                                <div class="input_box">
                                    <input required="" placeholder="Digite seu Email" type="text" class="contact__form-input" name="email" id="email">
                                </div>
                            </div>
                            <div class="form-contato-conteudo">
                                <label for="message">Mensagem</label><br>
                                <div class="input_box">
                                    <textarea required="" cols="30" rows="10" class="contact__form-input" placeholder="Digite sua mensagem" name="message" id="message"></textarea>
                                </div>
                            </div>
                            <div class="botao-enviar-form-contato">
                                <button type="submit">Enviar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="mb-0">&copy; 2025 Giovana Frade. Todos os direitos reservados.</p>
                    </div>

                    <div class="col-md-6 text-center text-md-end">
                        <div class="social-icons">
                            <a href="https://github.com/giovanafrade" target="_blank"><i class="fa-brands fa-github" id="github"></i></a>
                            <a href="mailto:13gialves@gmail.com" target="_blank"><i class="fa-solid fa-at" id="email"></i></a>
                            <a href="https://wa.me/5511957150430?text=Ol%C3%A1!" target="_blank"><i class="fa-brands fa-whatsapp" id="whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>