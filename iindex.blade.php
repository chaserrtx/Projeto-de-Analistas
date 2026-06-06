<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuários - PoliData</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body class="usuarios-page d-flex flex-column min-vh-100" >
	<header>
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
			<main class="container my-5 flex-grow-1">
				<div class="d-flex justify-content-between align-items-center mb-4">
					<h1 class="text-light">
						Usuários Cadastrados
					</h1>
					<a href="crear-usuarios.html" class="btn btn-primary">
						Novo Usuário
					</a>
				</div>
				<div class="table-container shadow">
					<table class="table table-dark table-hover align-middle mb-0">
						<thead class="table-secondary">
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>E-mail</th>
								<th class="text-center">Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Gabriela Avila</td>
								<td>gabriela@gmail.com</td>
								<td class="text-center">
									<button class="btn btn-warning btn-sm btn-accion">
										Editar
									</button>
									<button class="btn btn-danger btn-sm btn-accion">
										Excluir
									</button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Gonzalo Rodriguez</td>
								<td>gonzalo@gmail.com</td>
								<td class="text-center">
									<button class="btn btn-warning btn-sm btn-accion">
										Editar
									</button>
									<button class="btn btn-danger btn-sm btn-accion">
										Excluir
									</button>									
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Ana Da Silva</td>
								<td>ana@gmail.com</td>
								<td class="text-center">
									<button class="btn btn-warning btn-sm btn-accion">
										Editar
									</button>
									<button class="btn btn-danger btn-sm btn-accion">
										Excluir
									</button>									
								</td>
							</tr>
						</tbody>
					</table>
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
