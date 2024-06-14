<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos para a navegação */
        .navbar {
            background-color: #ffc107; /* Amarelo escuro para a barra de navegação */
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #343a40 !important; /* Texto escuro para os links na navegação */
        }

        .navbar-toggler {
            border-color: #343a40; /* Cor da borda do ícone do toggle */
        }

        .navbar-toggler-icon {
            background-color: #343a40; /* Cor do ícone do toggle */
        }

        /* Estilos adicionais */
        .container {
            max-width: 600px;
        }

        .jumbotron {
            background-color: #ffeeba; /* Amarelo claro para o jumbotron */
            padding: 2rem;
            margin-bottom: 2rem;
            color: #343a40; /* Texto escuro para o texto no jumbotron */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para o carrossel */
        #carouselExampleIndicators {
            margin-top: 0;
            max-width: 600px; /* Ajuste o tamanho conforme necessário */
            margin-left: auto;
            margin-right: auto;
        }

        .carousel-control-prev, .carousel-control-next {
            color: #343a40; /* Cor das setas do carrossel */
        }

        .carousel-indicators button {
            background-color: #343a40; /* Cor dos indicadores do carrossel */
            border-color: #343a40;
        }

        .carousel-indicators .active {
            background-color: #ffffff; /* Cor de fundo do indicador ativo */
        }

        /* Estilo para o rodapé */
        footer {
            background-color: #ffc107; /* Amarelo escuro para o rodapé */
            color: #343a40; /* Texto escuro no rodapé */
            padding: 2rem 0;
            border-top: 1px solid rgba(52, 58, 64, 0.2);
            margin-top: 2rem; /* Espaçamento do topo */
        }

        /* Estilo para o texto dentro do rodapé */
        footer p {
            color: #343a40; /* Texto escuro dentro do parágrafo do rodapé */
        }

        /* Estilo para a seção de créditos no rodapé */
        .footer-credits {
            background-color: rgba(52, 58, 64, 0.2); /* Fundo do rodapé */
            color: #343a40; /* Texto escuro */
            padding: 1rem 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Meu Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Página Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/imagem1.jpg') }}" class="d-block w-100" alt="Imagem 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5> A dona do site, né</h5>
                    <p>Karoliss</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/imagem2.jpg') }}" class="d-block w-100" alt="Imagem 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Minha Família</h5>
                    <p>Família busca a Fé</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/imagem3.jpg') }}" class="d-block w-100" alt="Imagem 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Os melhores!!</h5>
                    <p>Eu e o Leo, meu ex líder do coração</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Bem-vindo ao Meu Site</h1>
            <p class="lead">Site desenvolvido por Karoliss Lessa</p>
            <hr class="my-4">
            <p>Aluna do 3º ano do NOVOTEC, cursando Desenvolvimento de Sistemas.</p>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/imagem4.jpg') }}" class="img-fluid rounded" alt="Imagem 1">
                    <p class="mt-2">Minha figura, mermã. vulgo Lorenna.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/imagem5.jpg') }}" class="img-fluid rounded" alt="Imagem 2">
                    <p class="mt-2">Aninha, minha casca!</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/imagem6.jpg') }}" class="img-fluid rounded" alt="Imagem 3">
                    <p class="mt-2">Minhas pessoas. Minhas casquinha de bala!!</p>
                </div>
            </div>
        </div>

    <footer class="text-center text-lg-start">
        
        <div class="footer-credits">
            <div class="container">
                &copy; 2024 MEU SITE - Todos os direitos reservados
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
