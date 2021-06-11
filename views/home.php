<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Feel Academia desde 1999 transforma vidas através deste mundo maravilhoso da atividade física, procuramos em nossa missão resgatar valores das pessoas e é isso que nos move diariamente nesta dádiva sagrada de viver e viver com saúde. Conseguimos unir na Feel Academia pessoas que amam o que fazem e quando isso acontece valores morais como a amizade, a solidariedade, a auto estima a vontade de viver contagia a todos levando você a ser um competidor vitorioso da vida.">
    <meta name="keywords" content="Academia, fitness, saúde, aulas cletivas, aulas de ginástica, personal treiner, personal, musculação, lutas, bike, rpm, funcioal, treinamento funcional, dança do ventre, dança, fitdance, zumba, brothers fight, jiu jitsu, jump, power jump, pilates, fit ball, hidroginástica, natação, hiit, spinning,thai boxe, boxe, step, workout">
    <meta name="author" content="Monica Craveiro">
    <title><?= $_SESSION['title'] ?></title>
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="views/img/favicon.ico" type="image/x-icon">
    <!-- RESET CSS-->
    <link rel="stylesheet" href="views/css/reset.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Rubik" rel="stylesheet">
    <!-- CSS PERSONALIZADO-->
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/m-style.css">
</head>
<body>
    <nav data-scroll-header class="navbar navbar-dark navbar-expand-lg fixed-top text-center">
        <a data-scroll class="navbar-brand" href="#top">
            <img src="views/img/logo fundo transparente.png" width="100" height="50" alt="">
        </a>
        <a data-scroll href="#" class="navbar-brand d-block d-lg-none">Feel Academia</a>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a data-scroll href="#modalidades" class="nav-link ">Modalidades</a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#horarios" class="nav-link ">Horários</a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#estrutura" class="nav-link ">Conheça a Feel</a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#novidades" class="nav-link ">Novidades</a>
                </li>
                <li class="nav-item">
                    <a data-scroll href="#localizacao" class="nav-link ">Localização</a>
                </li>
            </ul>
            <ul class="nav justify-content-between">
                <li class="nav-item">
                    <a class="social nav-link" title="Facebook" href="https://www.facebook.com/feelacademia/" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social nav-link" title="Instagram" href="https://www.instagram.com/feelacademia/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social nav-link" title="Messenger" href="http://m.me/feelacademia" target="_blank">
                        <i class="fab fa-facebook-messenger"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social nav-link" title="WhatsApp" href="https://api.whatsapp.com/send?phone=5511945244861&text=Olá, Vim pelo site da Feel Academia!" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social nav-link" title="YouTube" href="https://www.youtube.com/user/ACADEMIAFEEL" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="social nav-link" title="E-Mail" href="mailto:contato@feelacademia.com.br" target="_blank">
                        <i class="far fa-envelope"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <!-- <a class="social nav-link" title="Telefone" href="tel:+551137430781&tel:+551137437304" target="_blank">
                        <i class="fas fa-phone"></i>
                    </a> -->
                    <a role="button" class="btn popovers social nav-link" data-toggle="popover" title="Telefones" data-content="<a href='tel:+551137430781' title='Telefone'>(11) 3743-0781</a><br><a href='tel:+551137437304' title='Telefone'>(11) 3743-7304</a>" data-original-title="Telefones" data-placement="bottom">
                        <i class="fas fa-phone"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="top" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-white mt-5">Seja Feel</h1>
            <p class="display-4 d-none d-sm-block mt-5">Venha treinar conosco!</p>
            <p class="lead mt-5">Há 22 anos transformando a vida das pessoas através da Atividade Física.</p>
            <a data-scroll href="#localizacao" class="btn btn-outline-light  mt-5" role="button">Conheça a Feel Academia!</a>
        </div>
    </section>
    <div class="container">
        <section id="description">
            <blockquote class="blockquote">
                <p class="text-center">
                    <i class="fas fa-fw fa-quote-left text-secondary"></i>
                    Acreditamos que a palavra certa seria transformar vidas através deste mundo maravilhoso da atividade
                    física, procuramos em nossa missão resgatar valores das pessoas e é isso que nos move diariamente
                    nesta dádiva sagrada de viver e viver com saúde.
                    <br><br>
                    Conseguimos unir na Feel Academia pessoas que amam o que fazem e quando isso acontece valores morais
                    como a amizade, a solidariedade, a auto estima a vontade de viver contagia a todos levando você a
                    ser um competidor vitorioso da vida.
                    <i class="fas fa-fw fa-quote-right text-secondary"></i>
                </p>

                <footer class="blockquote-footer text-right">FEEL ACADEMIA/1999</footer>
            </blockquote>
        </section>
        <section id="modalidades">
            <h2 class="display-4 text-center mb-5 titulo ">Nossas Modalidades</h2>

            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#fitdance" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/Dance.png" alt="Dança">
                            <p class="m-0">FitDance</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#pilates" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/Feel Pilates.png" alt="Pilates">
                            <p class="m-0">Pilates</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#funcional" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/Funcional.png" alt="Funcional">
                            <p class="m-0">Funcional Feel</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#step" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/Step.png" alt="Step">
                            <p class="m-0">Step Feel</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#alongamento" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/along.png" alt="Alongamento">
                            <p class="m-0">Alongamento</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#bikefeel" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/bike feel.png" alt="Bike">
                            <p class="m-0">Bike Feel</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#crossfeel" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/cross feel.png" alt="Cross Feel">
                            <p class="m-0">Cross Feel</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#ventre" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/dança do ventre.png" alt="Dança do Ventre">
                            <p class="m-0">Dança do Ventre</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#feelcore" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/feel core.png" alt="Feel Core">
                            <p class="m-0">Feel Core</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#fitball" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/fit ball.png" alt="Fit Ball">
                            <p class="m-0">Fit Ball</p>
                        </a>
                    </div>
                </div>
                <div class="collapse" id="fitdance">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Mescla de dança e ginástica que une diversos estilos musicais durante a atividade, chega a
                        eliminar 1000 calorias em uma única aula com muita descontração e disposição.
                    </div>
                </div>
                <div class="collapse" id="pilates">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Uma aula que ativa toda a musculatura do corpo através de movimentos precisos usando muita
                        flexibilidade, força e equilíbrio. Usa-se bola tonificadora para alguns exercícios (opcional).
                    </div>
                </div>
                <div class="collapse" id="funcional">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Usa padrões fundamentais do movimento humano como agachar, levantar, avançar, puxar, empurrar,
                        girar, dentre outras visando sempre o equilíbrio das estruturas musculares e envolvendo o corpo
                        como um todo.
                    </div>
                </div>
                <div class="collapse" id="step">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Usa-se uma plataforma como base para que com movimentos contínuos de subida, descida e
                        deslocamentos laterais desenvolva a coordenação motora queimando muitas calorias. Um excelente
                        trabalho cardiovascular e de membros inferiores.
                    </div>
                </div>
                <div class="collapse" id="alongamento">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        É uma aula para ganhar flexibilidade, prevenir lesões, melhorar a postura, ideal para ser feita
                        após um treino exaustivo ou simplesmente em um dia em que você queira pegar leve no treino.
                    </div>
                </div>
                <div class="collapse" id="bikefeel">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Aula pra quem quer ganhar condicionamento e perder peso rapidamente, indicado para todos os
                        níveis de condicionamento desde o iniciante até o avançado. As opções são dadas no decorrer do
                        percurso, que chega até 50 minutos com muita energia e músicas que realmente fazem a diferença.
                        Em uma única aula você chega a perder 800 calorias.
                    </div>
                </div>
                <div class="collapse" id="crossfeel">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Treinamento com corda suspensa, argola, tábua de escalar e mina. O objetivo é potencializar
                        nossas principais capacidades físicas, cardiovasculares, resistência muscular, força,
                        coordenação, potência, agilidade e velocidade.
                    </div>
                </div>
                <div class="collapse" id="ventre">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        A arte da dança árabe que exalta a feminilidade do corpo e da mente.
                    </div>
                </div>
                <div class="collapse" id="feelcore">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Aula que envolve totalmente o abdômen com várias opções de execução, inclusive usa-se carga nos
                        alunos mais avançados, por exemplo, anilhas/elástico. O foco desta aula são movimentos
                        direcionados para o abdômem. São 15 min intermináveis.
                    </div>
                </div>
                <div class="collapse" id="fitball">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Aula indicada para melhorar a coordenação, equilíbrio e postura. Ótima para o fortalecimento
                        abdominal.
                    </div>
                </div>

                <div class="row">
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#hidroginastica" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/hidro.png" alt="Hidroginástica">
                            <p class="m-0">Hidroginástica</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#hiit" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/hiit.png" alt="HIIT">
                            <p class="m-0">HIIT</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#jiujitsu" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/jiu jitsu.png" alt="Jiu Jitsu">
                            <p class="m-0">Jiu Jitsu</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#jump" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/jump.png" alt="Jump Feel">
                            <p class="m-0">Jump Feel</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#maxstrong" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/max strong.png" alt="Max Strong">
                            <p class="m-0">Max Strong</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#natacao" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/natação.png" alt="Natação">
                            <p class="m-0">Natação</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#spinning" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/spinning.png" alt="Spinning">
                            <p class="m-0">Spinning</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#sprints" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/sprints.png" alt="Sprints">
                            <p class="m-0">Sprints</p>
                        </a>
                    </div>
                    <div class="col p-3">
                        <a class="text-danger" onclick="" data-toggle="collapse" href="#workout" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img class="img-fluid" src="views/img/workout.png" alt="Workout">
                            <p class="m-0">Workout</p>
                        </a>
                    </div>
                </div>
                <div class="collapse" id="hidroginastica">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Exercício físico aeróbico que ocorre dentro da piscina e com a ajuda de alguns equipamentos de
                        natação para poder garantir um melhor auxílio nas atividades que são propostas pelo professor.
                    </div>
                </div>
                <div class="collapse" id="hiit">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        É uma aula de curta duração e com alta intensidade para queima de calorias, varia entre 15 a 20
                        minutos. A aula é desenvolvida com peso corporal e implementos em sistema circuito.
                    </div>
                </div>
                <div class="collapse" id="jiujitsu">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        É uma arte marcial japonesa que utiliza uma série de diferentes técnicas e golpes corporais
                        com o objetivo de derrotar ou imobilizar o oponente.
                    </div>
                </div>
                <div class="collapse" id="jump">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Usa um mini-trampolim elástico realizando movimentos com os braços, pernas e saltos que
                        fazem toda a diferença ao rítmo de músicas contagiantes, chegando a perder 700 calorias por
                        aula.
                    </div>
                </div>
                <div class="collapse" id="maxstrong">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Usando barras e anilhas, esta aula faz com que você trabalhe todos os seus grupos musculares
                        adquirindo força, resistência e definição corporal, de quebra chega a queimar 500 calorias
                        ao som de músicas eletrizantes.
                    </div>
                </div>
                <div class="collapse" id="natacao">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        É uma atividade física praticada na água. É considerada um dos esportes mais saudáveis, pois
                        trabalha com diversos grupos musculares e articulações do corpo. Há também o benefício desta
                        prática desenvolver o sistema cardíaco e respiratório.
                    </div>
                </div>
                <div class="collapse" id="spinning">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Aula para quem quer ganhar condicionamento e gradativamente perder peso, para todos os
                        níveis de condicionamento desde o inciante até o avançado as opções são dadas no decorrer do
                        percurso que pode durar até 30 minutos de muita energia e músicas que realmente fazem a
                        diferença.
                    </div>
                </div>
                <div class="collapse" id="sprints">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        Aula de bike de 35 minutos com maior intensidade, muita energia e músicas que realmente
                        fazem a
                        diferença.
                    </div>
                </div>
                <div class="collapse" id="workout">
                    <div class="alert alert-danger d-none d-sm-block mb-4">
                        HIIT de 20 minutos. Aula intensa em tempo curto, onde visa o trabalho cardiorespiratório
                        usando peso corporal e acessórios.
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="container-fluid">

        <section id="horarios" class="text-center">
            <!-- <h2 class="display-4 mb-5 titulo">Aulas de Ginástica</h2> -->
            <h2 class="display-4 mb-5 titulo">Grade de Aulas</h2>

            <div class="container">
                <img src="views/img/novagrade.jpeg" class="img-fluid" alt="Nova Grade">
            </div>
            <!-- <div class="table-responsive mb-5">
                <table class="table-sm table-striped table-hover mx-auto">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Horário</th>
                            <th>Segunda</th>
                            <th>Terça</th>
                            <th>Quarta</th>
                            <th>Quinta</th>
                            <th>Sexta</th>
                            <th>Sábado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>06:15</td>
                            <td>HIT / Max Strong</td>
                            <td>Bike / Feel Pilates</td>
                            <td>Max Strong</td>
                            <td>Bike Feel</td>
                            <td>Workout</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>09:00</td>
                            <td>Feel Pilates</td>
                            <td>Spinning / ABS</td>
                            <td>Feel Pilates</td>
                            <td>Spinning / ABS</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>09:30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Jiu Kids</td>
                        </tr>
                        <tr>
                            <td>10:00</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>FitDance</td>
                        </tr>
                        <tr>
                            <td>11:30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Funcional Feel 30'</td>
                        </tr>
                        <tr>
                            <td>16:00</td>
                            <td>Jump 30' + ABD 5'</td>
                            <td>FitDance</td>
                            <td>Step 30'</td>
                            <td>Circuito Funcional</td>
                            <td>Fit Ball + Alongamento</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>16:45</td>
                            <td>Feel Core</td>
                            <td></td>
                            <td>Feel Core</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>18:00</td>
                            <td>Workout<br>(formando turma)</td>
                            <td>Funcional Feel 20'</td>
                            <td>Workout<br>(formando turma)</td>
                            <td>Funcional Feel 20'</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>19:00</td>
                            <td>Bike / Sprints</td>
                            <td>Feel Core</td>
                            <td>Bike / Sprints</td>
                            <td>Feel Core</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>19:30</td>
                            <td></td>
                            <td>Funcional Feel 20'</td>
                            <td></td>
                            <td>Funcional Feel 20'</td>
                            <td>Jump</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>20:00</td>
                            <td>Jump Feel</td>
                            <td>Step Feel</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h2 class="display-4 titulo">Aulas Extras</h2>
            <p>São aulas à parte, consulte-nos para saber mais detalhes!</p>

            <div class="row mt-5 d-flex justify-content-center">
                <div class="col mb-5">
                    <div class="table-responsive">
                        <table class="table-sm table-striped table-hover mx-auto mb-5">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Horário</th>
                                    <th>Segunda</th>
                                    <th>Terça</th>
                                    <th>Quarta</th>
                                    <th>Quinta</th>
                                    <th>Sexta</th>
                                    <th>Sábado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>09:30</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Jiu Kids</td>
                                </tr>
                                <tr>
                                    <td>16:00</td>
                                    <td></td>
                                    <td>Jiu Kids</td>
                                    <td></td>
                                    <td>Jiu Kids</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>17:00</td>
                                    <td></td>
                                    <td>Cross Feel</td>
                                    <td></td>
                                    <td>Cross Feel</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>18:00</td>
                                    <td></td>
                                    <td>Dança do Ventre <br> <small>(Iniciante)</small></td>
                                    <td></td>
                                    <td>Dança do Ventre <br> <small>(Iniciante)</small></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>19:00</td>
                                    <td></td>
                                    <td>Dança do Ventre <br> <small>(Intermediário)</small> </td>
                                    <td></td>
                                    <td>Dança do Ventre <br> <small>(Intermediário)</small> </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>19:10</td>
                                    <td></td>
                                    <td>Jiu Kids</td>
                                    <td></td>
                                    <td>Jiu Kids</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>19:30</td>
                                    <td>Cross Feel</td>
                                    <td></td>
                                    <td>Cross Feel</td>
                                    <td></td>
                                    <td>Cross Feel</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>20:30</td>
                                    <td></td>
                                    <td>Jiu Jitsu</td>
                                    <td></td>
                                    <td>Jiu Jitsu</td>
                                    <td>Jiu Jitsu</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="table-responsive">
                        <table class="table-sm table-striped table-hover mx-auto">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Horário</th>
                                    <th>Segunda</th>
                                    <th>Terça</th>
                                    <th>Quarta</th>
                                    <th>Quinta</th>
                                    <th>Sexta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>08:15</td>
                                    <td>Hidroginástica</td>
                                    <td></td>
                                    <td>Hidroginástica</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>09:15</td>
                                    <td></td>
                                    <td>Hidroginástica</td>
                                    <td></td>
                                    <td>Hidroginástica</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>18:45</td>
                                    <td>Hidroginástica</td>
                                    <td></td>
                                    <td>Hidroginástica</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>20:00</td>
                                    <td></td>
                                    <td>Hidroginástica</td>
                                    <td></td>
                                    <td>Hidroginástica</td>
                                    <td>Natação Adulto <br> <small>(Iniciante)</small></td>
                                </tr>
                                <tr>
                                    <td>20:15</td>
                                    <td></td>
                                    <td></td>
                                    <td>Natação Adulto <br> <small>(Iniciante)</small></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
        </section>
    </div>
    <div class="container">
        <section id="estrutura" class="text-center">
            <h2 class="display-4 mb-5 titulo ">Conheça a Feel</h2>
            <p class="lead text-center pb-5 mb-5">Em breve uma galeria de fotos com nossos ambientes para que vocês
                possam
                conhecer!</p>
        </section>
    </div>

    <section id="novidades">
        <h2 class="display-4 text-center titulo">Novidades</h2>
        <p class="lead text-center pb-5 mb-5">Fique ligado que em breve teremos novidades!</p>

        <div class="container mt-4">
            <div class="row justify-content-center align-items-baseline">
                <div class="col-lg-4 box">
                    <img class="card-img-top" src="views/img/treinoemcasa.jpeg" alt="Treino em casa">
                    <div class="card-body mt-2">
                        <h4>Treine em casa com a <span>Feel</span></h4>
                        <p class="lead mt-3">Nessa Quarentena não deixe de <span>TREINAR</span>, acesse nosso canal no <span><a class="" title="youtube" href="https://www.youtube.com/channel/UCTV0DzcciwsybfO0lYW1ieA" target="_blank">YouTube</a></span> e venha suar com a gente!!</p>
                        <a class="btn btn-danger" title="youtube" href="https://www.youtube.com/channel/UCTV0DzcciwsybfO0lYW1ieA" target="_blank">Treine Online</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid bg-dark text-white">
        <footer class="pt-5 mt-5" id="localizacao">
            <div class="row mx-auto">
                <div class="col d-none d-sm-block">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.5330854488716!2d-46.73796525057252!3d-23.58520720457873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce56887467e7bf%3A0x9c40ceae499349d5!2sFeel+Academia!5e0!3m2!1spt-BR!2sbr!4v1564020530069!5m2!1spt-BR!2sbr" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col my-auto">
                    <address class="text-center">
                        <strong class="text-danger">Feel Academia</strong><br>
                        <a class="text-white" href="https://goo.gl/maps/9dVJCHL2M5wEksKMA">Av. Min. Laudo Ferreira de
                            Camargo, 523</a><br>
                        <a class="text-white" href="https://goo.gl/maps/9dVJCHL2M5wEksKMA">Butantã, São Paulo -
                            SP</a><br>
                        <i class="fas fa-fw fa-phone"></i><span class="sr-only">Telefone:</span> <a class="text-danger"
                            href="tel:+551137430781">(11) 3743-0781</a><br>
                        <i class="fas fa-fw fa-phone"></i><span class="sr-only">Telefone:</span> <a class="text-danger"
                            href="tel:+551137437304">(11) 3743-7304</a><br>
                        <i class="far fa-envelope"></i><span class="sr-only">E-Mail:</span> <a
                            href="mailto:contato@feelacademia.com.br"
                            class="text-danger">contato@feelacademia.com.br</a><br>
                        <p class="text-danger m-0"> <i class="far fa-calendar-alt text-white"></i><span
                                class="sr-only">Funcionamento:</span> Segunda a Sexta das 6h às 22h</p>
                        <p class="text-danger"> <i class="far fa-calendar-alt text-white"></i><span
                                class="sr-only">Funcionamento:</span> Sábados das 9h às 14h</p>
                        <p>Estamos no km 12/5 da Rodovia Raposo Tavares, próximo ao Corpo de Bombeiros e a futura
                            estação de Metrô Vila Sônia da Linha 4 - Amarela.</p>
                    </address>
                </div>
                <div class="col d-none d-sm-block">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!4v1564020640717!6m8!1m7!1sbyIwkMktA-OHch1qemXEBg!2m2!1d-23.58521894111619!2d-46.73786199028705!3f208.39375380269652!4f-2.8084652024173096!5f0.7820865974627469" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <p class="text-center pb-3 m-0">&reg; Todos os direitos reservados - 1999</p>
        </footer>
    </div>
    <!-- <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="views/img/feeldevolta.png" alt="Retorno às atividades Feel Academia">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <a class="btn btn-success" title="youtube" href="https://api.whatsapp.com/send?phone=5511945244861&text=Olá, Quero informações aobre o fechamento!" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- SCRIPT SMOOTH SCROLL -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="views/js/smoothscroll.js"></script>
    <script>
        $(document).ready(function () {
            $("#modalInfo").modal("show");
        })

        $("[data-toggle=popover]").popover({html:true})
    </script>
</body>
</html>