<!-- resources/views/quem_somos.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
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
                        <a class="nav-link" href="{{ url('/') }}">Página Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron">
                    <img src="{{ asset('images/imagem7.jpg') }}" class="img-fluid" alt="Imagem Quem Somos">
                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1>Quem Sou?</h1>
                    <p class="lead">Vulgo a Baiana</p>
                    <hr class="my-4">
                    <p>Conheça mais sobre mim e meu projeto. Estou compartilhando um pouco da minha vida pessoal e meus irmãos tanto de fé, quanto de aventuras! I TIMOTEO 4:12</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start">
        <div class="container">
            <div class="footer-credits">
                <div class="container">
                    &copy; 2024 Meu Site - Todos os direitos reservados
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
