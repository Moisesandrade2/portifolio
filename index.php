<?php

   /* print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Senha: ' . $_POST['senha']);
    print_r('<br>');
    print_r('Repetir_senha: ' . $_POST['repetir_senha']);
    print_r('<br>');
    print_r('Mensagem: ' . $_POST['mensagem']);
    print_r('<br>');
    print_r('Sexo: ' . $_POST['sexo']);
    print_r('<br>');
    print_r('Experiencias: ' . $_POST['experiencias']);*/
    
include_once('config.php');
if(isset($_POST['submit']))
{
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$repetir_senha = $_POST['repetir_senha'];
$mensagem = $_POST['mensagem'];
$sexo = $_POST['sexo'];
$experiencias = $_POST['experiencias'];

$result = mysqli_query($conexao, "INSERT INTO usuarios1(nome,email,senha,repetir_senha,mensagem,sexo,experiencias) VALUES ('$nome','$email','$senha','$repetir_senha','$mensagem','$sexo','$experiencias')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portifólio Moisés Andrade">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsivo.css">
    <title>Portifólio Moisés Andrade</title>
</head>

<body>
    <div class="main">
        <section class="section-1">
            <div class="apresent">
                <div class="sobre-mim">
                    <div class="main-title">
                        <p1>Moisés Andrade</p1>
                    </div>
                    <div class="sobre-mim-text">
                        <h2>Sobre mim:</h2><br>
                        <p>Forte comprometimento com o Trabalho, Proatividade e grande
                            facilidade de aprendizagem.
                            Amplo conhecimento em Marketing Digital, Pré-Vendas e Pós-Vendas online, Gerenciamento
                            de
                            Equipe
                            de
                            Vendas, Comunicação e Suporte ao Cliente.</p>
                    </div>
                </div>
                <div class="main-image-container">
                    <img src="img/moisesimg.jpg" class="main-image-top">
                </div>
            </div>
        </section>
        <!-------------------------------formações e cursos----------------------------------->
        <section class="carrosel">
            <div class="carrosel-main">
                <div class="container">
                    <button class="arrow-left control" aria-label="Previous image">◀</button>
                    <button class="arrow-right control" aria-label="Next Image">▶</button>
                    <div class="gallery-wrapper">
                        <div class="gallery">

                            <img src="img/1.jpg" alt="Beach Image" class="item current-item">
                            <img src="img/2.jpg" alt="Beach Image" class="item current-item">
                            <img src="img/3.jpg" alt="Beach Image" class="item current-item">
                            <img src="img/4.jpg" alt="Beach Image" class="item current-item">
                            <img src="img/5.jpg" alt="Beach Image" class="item current-item">
                            <img src="img/6.jpg" alt="Beach Image" class="item current-item">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------------------------------------INÍCIO DAS EXPERIÊNCIAS ----------------------------->
        <section class="section-2">
            <div class="experiencia">
                <div class="main-text-container">
                    <div class="main-text">
                        <p><b>Experiências:</b><br><br>

                            MIRANDA MARKETING<br>
                            Sócio e gerente de equipe (Treinamento de Equipe)
                            Janeiro de 2018 - Março de 2022
                        </p>
                    </div>
                </div>
                <div class="main-image-container">
                    <img src="img/foto1.jpg" class="main-image">
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="box">
            <div class="main-text-container">
                <div class="main-text">
                    <p><b>Problema:</b><br><br>
                        A falta de um acompanhamento e instrução semanais da equipe estava
                        comprometendo o senso de inovação e autonomia, o que gerava uma metodologia antiquada e
                        pouco
                        produtiva.</p>
                </div>
            </div>
            <div class="main-image-container">
                <img src="img/foto2.jpg" class="main-image">
            </div>
</div>
        </section>
        <section class="section-4">
        <div class="box">
            <div class="main-text-container">
                <div class="main-text">
                    <p><b>Solução:</b><br><br>
                        Para superar esses desafios, implementamos um novo processo de gerenciamento que incluiu
                        reuniões semanais e diárias, quando necessário. Cada membro da equipe foi designado com
                        uma
                        tarefa específica e diária, que envolvia pesquisar novas soluções e ideias no
                        mercado.<br><br>
                        Esses
                        estudos incluíram modelos de trabalho, exemplos de marcas, concorrentes, análise do
                        mercado
                        atual e visão geral dos negócios. A partir dessas informações, a equipe se reuniu para
                        gerar uma
                        síntese de ideias e focar seus esforços nos objetivos mais proeminentes.</p>
                </div>
            </div>
            <div class="main-image-container">
                <img src="img/foto03.jpg" class="main-image">
            </div>
            </div>
        </section>
        <section class="section-5">
        <div class="box">
            <div class="main-text-container">
                <div class="main-text">
                    <p><b>Resultado:</b><br><br>
                        Em apenas duas semanas após a implementação da nova metodologia, a equipe identificou
                        novas
                        estratégias de marketing,
                        incluindo a criação de campanhas publicitárias, anúncios, testes e o direcionamento de
                        público-alvo.<br><br>
                        Essas iniciativas aumentaram o rendimento da empresa de 10% para 300% em 21 dias.
                        Após sete semanas, a empresa obteve um valor de retorno de 2,5 milhões de faturamento.
                        Ao longo dos seis meses seguintes, a estratégia gerou um faturamento de cerca de 8,6
                        milhões,
                        confirmando a eficiência e produtividade da nova metodologia de gerenciamento e
                        treinamento da
                        equipe.</p>
                </div>
            </div>
            <div class="main-image-container">
                <img src="img/foto8.png" class="main-image">
            </div>
            </div>
        </section>
        <!------------------------------------------------NOVA EXPERIÊNCIA ----------------------------------------->
        <section class="section-6">
        <div class="box">
            <div class="main-text-container">
                <div class="main-text">
                    <p><b>Experiências:</b><br><br>
                        TOP3 PIZZARIA - CAMBORIÚ<br>
                        Sócio e gerente de produção
                        Outubro de 2021 - Fevereiro de 2022
                    </p>
                </div>
            </div>
            <div class="main-image-container">
                <img src="img/moisesimg.jpg" class="main-image">
            </div>
            </div>
        </section>
        <section class="section-7">
        <div class="box">
            <div class="main-text-container">
                <div class="main-text">
                    <p><b>Problema:</b><br><br>
                        Como gerente de produção, percebi que a falta de um padrão de tempo de preparo e
                        quantidades de
                        ingredientes para cada pizza resultava em sérios problemas de metrificação de rendimento
                        e
                        custo.<br><br> Além disso, os atrasos na produção comprometiam o tempo de entrega e a
                        gestão de
                        estoque
                        precisava de atenção imediata.</p>
                </div>
            </div>
            <div class="main-image-container">
                <img src="img/foto9.jpg" class="main-image">
            </div>
            </div>
        </section>
        <section class="section-8">
        <div class="box">
            <div class="main-text-container">
                <div class="main-text">
                    <p><b>Solução:</b><br><br>
                        Para solucionar esses desafios, realizei um brainstorm com a equipe para identificar os
                        problemas e desenvolver uma solução eficaz. <br><br>
                        Como resultado, implementamos novos processos que
                        incluíram a pesagem precisa de ingredientes e montagem com gramaturas exatas para cada
                        pizza.
                        Isso permitiu um custo fixo para cada tipo de pizza e evitou variações de custo durante
                        a
                        produção.<br><br>
                        Também implementamos um timer para controlar o tempo de montagem, cozimento, organização
                        e
                        finalização do pedido. Essa estratégia ajudou a garantir que as pizzas fossem entregues
                        antes do
                        prazo estimado, com alta qualidade e organização adequada.
                    </p>
                </div>
            </div>
            <div class="main-image-container">
                <img src="img/foto7.jpg" class=" main-image">
            </div>
            </div>
        </section>
        <section class="section-9">
        <div class="box">
            <div class="main-text-container">
                <div class="main-text">
                    <p><b>Resultado:</b><br><br>
                        Com esses novos processos em vigor, a equipe conseguiu executar todo o processo 40% mais
                        rápido,
                        desde o preparo até a entrega, o que resultou em maior satisfação dos clientes.<br><br>
                        Além
                        disso,
                        conseguimos ter uma metrificação precisa do custo de produção, permitindo controlar a
                        escalabilidade das campanhas de marketing e aumentar a previsibilidade de lucro.<br><br>
                        Como
                        gerente de
                        produção, fiquei satisfeito em ter implementado soluções eficazes que melhoraram
                        significativamente a operação da pizzaria.
                    </p>
                </div>
            </div>
            <div class="main-image-container">
                <img src="img/sucesso.jpg" class="main-image">
            </div>
            </div>
        </section>
        <!------------------------------------------------FIM DAS EXPERIÊNCIAS --------------------------------------->

        <!----------------------------------------------FORMULÁRIO DE CONTATO---------------------------------------------->
        <section class="form-container">
        <div class="box">
            <div class="content">
                <h1>Formulário de Contato</h1>
                <form action="index.php" method="POST" id="form">
                    <div>
                        <input type="text" placeholder="Digite seu nome" class="inputs required"
                            oninput="nameValidate()" name="nome" required>
                        <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
                    </div>
                    <div>
                        <input type="email" placeholder="Digite seu melhor email" class="inputs required"
                            oninput="emailValidate()" name="email" required>
                        <span class="span-required">Digite um email válido</span>
                    </div>
                    <div>
                        <input type="password" placeholder="Criar senha" class="inputs required"
                            oninput="mainPasswordValidate()" name="senha" required>
                        <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
                    </div>
                    <div>
                        <input type="password" placeholder="Repita a sua senha" class="inputs required"
                            oninput="comparePassword()" name="repetir_senha" required>
                        <span class="span-required">Senhas devem ser compatíveis</span>
                    </div>
                    <textarea class="inputs" name="mensagem" id="mensagem" cols="25" rows="10"
                        placeholder="Envie uma mensagem pra mim, me fale o que preciso melhorar no meu portifólio."></textarea>
                    <p>Sexo:</p>
                    <div class="box-select">
                        <div>
                            <input type="radio" id="m" value="m" name="sexo" required>
                            <label for="m">Masculino</label>
                        </div>
                        <div>
                            <input type="radio" id="f" value="f" name="sexo" required>
                            <label for="f">Feminino</label>
                        </div>

                    </div>
                    <p>Quais suas experiências ?</p>
                    <div class="box-select">
                        <div>
                            <input type="checkbox" id="html" value="html" name="experiencias">
                            <label for="html">Html</label>
                        </div>
                        <div>
                            <input type="checkbox" id="css" value="css" name="experiencias">
                            <label for="css">Css</label>
                        </div>
                        <div>
                            <input type="checkbox" id="js" value="js" name="experiencias">
                            <label for="js">JavaScript</label>
                        </div>
                        <div>
                            <input type="checkbox" id="php" value="php" name="experiencias">
                            <label for="php">PHP</label>
                        </div>
                    </div>
                    <button type="submit" name="submit" id="submit">Enviar</button>
                </form>
            </div>
        </div>
        </section>
    </div> <!---final main-->
    <script type="text/javascript" src="js/index.js"></script>

</body>

</html>