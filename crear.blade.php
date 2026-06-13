<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar Usuários - PoliData</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="crear-usuario-page d-flex flex-column min-vh-100" >
	<nav class="navbar">
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
</svg>PoliData</h2>
                <div class="menu">
                    <button type="button" class="btn btn-outline-secondary"><a href="index.html">Início</a></button>
                    <button type="button" class="btn btn-outline-secondary"><a href="usuarios.html">Usuários</a></button>
                    <button type="button" class="btn btn-outline-secondary"><a href="">Perfis</a></button>
                    <button type="button" class="btn btn-outline-secondary"><a href="">Relatórios</a></button>
                </div>
            </nav>
           </header>
           <main class="container py-5 flew-grow-1">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="card bg-dark text-light border-0 shadow-lg">
							<div class="card-header text-center py-4">
								<h1 class="mb-0">
									Cadastrar Usuário
								</h1>
							</div>
							<div class="card-body p4">
								<form action="/usuarios" method="POST">
									@csrf
									<div class="mb-4">
										<label class="form-label">
											Nome Completo
										</label>
										<input type="text" class="form-control" name="nome" placeholder="Digite o nome do usuário">										
									</div>
									<div class="mb-4">
										<label class="form-label">
											E-mail
										</label>
										<input type="email" class="form-control" name="email" placeholder="Digite o e-mail">
									</div>
									<div class="mb-4">
										<label class="form-label">
											Senha
										</label>
										<input type="password" class="form-control" name="senha" placeholder="Digite a senha">
									</div>
									<div class="d-flex gap-2">
										<button type="submit" class="btn btn-primary flex-fill">
										Salvar Usuário
										</button>
										<a href="usuarios.html" class="btn btn-outline-light">Voltar</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
           </main>
           <footer class="footer-dark mt-auto">
			<div class="container text-center">
				<small>
					Construção de Páginas Web III <br> Gabriela Avila
				</small>
			</div>
			</footer>
     	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
