<?php
    //Id da Pagina
    $p="1";

    //Hierarquia de página
    $h="";

    //Configuração de cabecalho de paginas
    require_once($h."assets/inc/configs.php");
?>

        <header class="container-fluid full-vh container-principal" id="topo">
            <div class="container">
                <div class="row">
                    <div class="col-12 center-vh">
                        <h1 class="titulo-geral">
                            na Eora<br>
                            tudo pode ser<br>
                        </h1>
                        <div class="type-wrap">
                            <div id="typed-strings">
                                <h2>fácil</h2>
                                <h2>rápido</h2>
                                <h2>completo</h2>
                                <h2>feito</h2>
                            </div>
                            <span id="typed" style="white-space:pre;"></span>
                        </div>
                        <a href="#contato" class="btn btn-1 page-scroll" title="Também quero facilidade">Também quero facilidade</a>
                    </div>
                    
                    <div class="scroll-downs">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>

        <aside class="container-fluid full-vh bg-cor container-sobre" id="sobre">
            <div class="col-12 center-vh">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <h3 class="titulo-container mb-0">
                                oi<br>
                                nós<br>
                                somos<br>
                                a EORA<br>
                            </h3>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>
                                Nós nascemos da necessidade em facilitar as coisas de design, marketing e comunicação para você e a sua empresa. <br><br><br>
                                Prestamos serviços assim como uma agência comum, mas falamos do seu jeito, pois quem deve saber como fazer as coisas somos nós e você deve focar no mais importante: o seu negócio.<br><br><br>
                                Sabemos das complicações, burocracias e taxas do dia a dia, por isso, queremos simplificar ao máximo as coisas para você, falando a sua língua, vestindo a camisa do projeto, sem muito tecnês e mais resultado. <br><br><br>
                                Sua marca e sua comunicação alcançando resultados e do jeito que você quer. Pois pode e deve ser simples. Eora.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <main class="container-fluid full-vh container-servicos" id="servicos">
            <div class="col-12 p-0 center-vh">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h2 class="titulo-container mb-0">
                                Serviços
                            </h2>
                            <h5 class="subtitulo-container">
                                Estamos ansiosos para inovar com você
                            </h5>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-3 servico" data-toggle="collapse" data-target="#marca" aria-expanded="false" aria-controls="marca">
                                    <i class="far fa-lightbulb"></i>
                                    <h5>
                                        Marca
                                    </h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-3 servico" data-toggle="collapse" data-target="#identidade" aria-expanded="false" aria-controls="identidade">
                                    <i class="fas fa-fingerprint"></i>
                                    <h5>
                                        Identidade Visual
                                    </h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-3 servico" data-toggle="collapse" data-target="#papelaria" aria-expanded="false" aria-controls="papelaria">
                                    <i class="far fa-sticky-note"></i>
                                    <h5>
                                        Papelaria
                                    </h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-3 servico" data-toggle="collapse" data-target="#redes" aria-expanded="false" aria-controls="redes">
                                    <i class="fas fa-laptop"></i>
                                    <h5>
                                        Redes Sociais
                                    </h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-3 servico" data-toggle="collapse" data-target="#fotografia" aria-expanded="false" aria-controls="fotografia">
                                    <i class="fas fa-camera"></i>
                                    <h5>
                                        Fotografia
                                    </h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-3 servico" data-toggle="collapse" data-target="#editorial" aria-expanded="false" aria-controls="editorial">
                                    <i class="fas fa-book-open"></i>
                                    <h5>
                                        Editorial
                                    </h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-3 servico" data-toggle="collapse" data-target="#site" aria-expanded="false" aria-controls="site">
                                    <i class="fas fa-globe"></i>
                                    <h5>
                                        Site
                                    </h5>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-3 servico" data-toggle="collapse" data-target="#consultoria" aria-expanded="false" aria-controls="consultoria">
                                    <i class="fas fa-users"></i>
                                    <h5>
                                        Consultoria
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="accordion" id="listaServicos">

                                <div class="card">
                                    <div id="marca" class="collapse show" data-parent="#listaServicos">
                                        <div class="card-body">
                                            <h6>Marca</h6>
                                            <p>Sua marca é a cara e o coração da sua empresa, representando de forma resumida, o que seu cliente vai encontrar. Por isso, estamos aqui pra te ajudar desde a criação até a revisão de uma marca que já existe!</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div id="identidade" class="collapse" data-parent="#listaServicos">
                                        <div class="card-body">
                                            <h6>Identidade Visual</h6>
                                            <p>Quem te conhece, sabe exatamente como você é, mas como fazer que sua empresa também seja reconhecida? Bom é isso o que fazemos de melhor, ajustamos as arestas e fazemos com que seus clientes saibam quem você é.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div id="papelaria" class="collapse" data-parent="#listaServicos">
                                        <div class="card-body">
                                            <h6>Papelaria</h6>
                                            <p>Sabe aquele cartão, documento ou envelope da sua empresa? Depois de cuidar tão bem das outras coisas, você não pode fazer de qualquer jeito. Deixa que a gente faz as mais criativas artes para sua papelaria.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div id="redes" class="collapse" data-parent="#listaServicos">
                                        <div class="card-body">
                                            <h6>Redes Sociais</h6>
                                            <p>Será que faço um Facebook ou um Instagram? O que devo postar? Bom, não precisa ficar mais na dúvida, a gente ajuda nas escolhas mais adequadas ao seu negócio, na criação do seu perfil ou nas postagens estamos aqui.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div id="fotografia" class="collapse" data-parent="#listaServicos">
                                        <div class="card-body">
                                            <h6>Fotografia</h6>
                                            <p>Você acredita em amor a primeira vista? Não sei, mas a gente só quer que seus clientes se apaixonem pelos seus produtos ou serviços, por isso tiramos as fotos ideias da sua loja, produtos e tudo o que precisar.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div id="editorial" class="collapse" data-parent="#listaServicos">
                                        <div class="card-body">
                                            <h6>Editorial</h6>
                                            <p>Você tem um jornal ou uma revista? Quer fazer um livro para entregar aos seus clientes? Precisa escrever um perfil sobre a sua empresa? Bom não precisa mais se preocupar, pois temos os profissionais certos para te ajudar!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div id="site" class="collapse" data-parent="#listaServicos">
                                        <div class="card-body">
                                            <h6>Site</h6>
                                            <p>Hoje quando temos que procurar um produto, uma loja, fazer uma compra ou outras coisas, normalmente usamos a internet. Então ter um endereço na internet é essencial para dar credibilidade ao seu negócio, pode deixar que a gente te ajuda nessa!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div id="consultoria" class="collapse" data-parent="#listaServicos">
                                        <div class="card-body">
                                            <h6>Consultoria</h6>
                                            <p>Às vezes ficamos sem saber o que fazer para avançarmos no nosso negócio, então a gente pode ajudar na sua comunicação, marketing ou design, te dando as dicas e estratégias para conseguir alcançar grandes resultados.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </main>

        <article class="container-fluid bg-cor container-projetos" id="projetos">
            <div class="col-12">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h2 class="titulo-container mb-0">
                                Projetos
                            </h2>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                
                                <?php
                                    foreach ($projetos as $p) {
                                        if(isset($p['img'])){
                                ?>
                                
                                <div data-toggle="modal" data-target="#<?=$p['id']?>" class="col-md-4 col-sm-12 projeto" style="background-image:url(<?=$h?>assets/img/portfolio/<?=$p['img-prin']?>)">
                                    <div class="projeto-info">
                                        <h6><?=$p['nome']?></h6>
                                        <p><?=$p['servico']?></p>
                                    </div>
                                </div>

                                <?php
                                        }else{
                                ?>

                                <div class="col-md-4 col-sm-12 projeto" style="background-image:url(<?=$h?>assets/img/portfolio/<?=$p['img-prin']?>)">
                                    <a href="<?=$p['link']?>" title="<?=$p['nome']?>" target="_blank">
                                        <div class="projeto-info">
                                            <h6><?=$p['nome']?></h6>
                                            <p><?=$p['servico']?></p>
                                        </div>
                                    </a>
                                </div>

                                <?php
                                        }
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="container-fluid container-contato" id="contato">
            <div class="col-12">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 col-sm-12">
                            <h4 class="titulo-container">
                                Entre em contato conosco
                            </h4>
                            <h5 class="subtitulo-container">
                                Estamos ansiosos para inovar com você
                            </h5>

                            <form action="" method="post">
                                <div class="form-group">
                                    <input placeholder="Nome" type="text" class="form-control" id="nome" name="">
                                </div>
                                <div class="form-group">
                                    <input placeholder="E-amil" type="email" class="form-control" id="email" name="">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Telefone" type="text" class="form-control" id="telefone" name="">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Assunto" type="text" class="form-control" id="assunto" name="">
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Mensagem" name="" id="mensagem" class="form-control" rows="2"></textarea>
                                </div>
                                <button type="submit" class="btn btn-1">Enviar mensagem</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>

<?php
    //Portólio
    require_once($h."assets/portfolio/portfolios.php");
    //Rodape
    require_once($h."assets/modules/rodape.php");
?>