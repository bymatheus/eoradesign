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
                    <div class="col-5 center-vh">
                        <h1 class="titulo-geral">
                            Oi, nós somos a Eora
                        </h1>
                        <p>
                            Morbi fermentum diam ante, sit amet luctus odio posuere sit amet. Curabitur elementum augue lectus, et ornare tortor scelerisque vitae. Aliquam et diam in augue bibendum aliquet. Vivamus euismod orci velit, vel luctus ante tincidunt vitae. Nullam bibendum lorem at ex egestas, ac interdum nulla dapibus. Aliquam dapibus est tincidunt elementum volutpat.
                        </p>
                        <a href="#" class="btn btn-1" title="">Lorem ipsum dolor sit amet</a>
                    </div>
                </div>
            </div>
        </header>

        <aside class="container-fluid full-vh bg-cor container-sobre" id="sobre">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3 class="titulo-container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </h3>
                    </div>
                    <div class="col-6">
                        <p>
                            Quisque consectetur ligula purus, vitae malesuada tellus ornare in. Nunc scelerisque fermentum dui, in bibendum ligula pharetra non. Maecenas id tempor elit. Cras sed velit porta, tempor metus non, sollicitudin lorem. Nam dictum justo varius urna consectetur euismod. Nam maximus metus quis dolor pharetra, sit amet egestas quam pharetra.
                        </p>
                    </div>
                </div>
            </div>
        </aside>

        <main class="container-fluid full-vh container-servicos" id="servicos">
            <div class="container">
                <div class="row">
                    <div class="col-8">

                    </div>

                    <div class="col-4">
                    
                    </div>
                </div>
            </div>
        </main>

        <article class="container-fluid full-vh bg-cor container-projetos" id="projetos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="titulo-container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 projeto">
                        <div class="conteudo-hover">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </p>
                        </div>
                    </div>
                </div>    
            </div>
        </article>

        <article class="container-fluid full-vh container-contato" id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="titulo-container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </h4>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </article>

<?php
    //Rodape
    require_once($h."assets/modules/rodape.php");
?>