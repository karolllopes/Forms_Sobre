<!-- resources/views/contato.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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
                        <a class="nav-link" href="{{ url('/quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="jumbotron">
            <h1>Formulário de Contato</h1>
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('processar.contato') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required value="{{ old('nome') ?? session('nome') }}">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required value="{{ old('telefone') ?? session('telefone') }}">
                </div>
                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" required value="{{ old('endereco') ?? session('endereco') }}">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo:</label>
                    <select class="form-select" id="sexo" name="sexo" required>
                        <option value="Masculino" {{ (old('sexo') ?? session('sexo')) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Feminino" {{ (old('sexo') ?? session('sexo')) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                        <option value="Outro" {{ (old('sexo') ?? session('sexo')) == 'Outro' ? 'selected' : '' }}>Outro</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

            @if (session('nome') && session('telefone') && session('endereco') && session('sexo'))
                <h2 class="mt-4">Dados enviados:</h2>
                <ul>
                    <li><strong>Nome:</strong> {{ session('nome') }}</li>
                    <li><strong>Telefone:</strong> {{ session('telefone') }}</li>
                    <li><strong>Endereço:</strong> {{ session('endereco') }}</li>
                    <li><strong>Sexo:</strong> {{ session('sexo') }}</li>
                </ul>
            @endif
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
