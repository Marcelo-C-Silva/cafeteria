<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include 'header.php';
    ?>

<body>
    <div class="wrapper">

        <?php
        include 'menu.php';
        ?>
        <div class="main">
        <?php
        include 'top.php'; 
        ?>
        <main class="content">
            <form action="" mathod="post">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Cadastro do cliente</h1>

					<div class="row">
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nome</h5>
								</div>
								<div class="card-body">
                                    <input type="text" name="nome" id="nome" placeholder="Digite o nome">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Endereço</h5>
								</div>
								<div class="card-body">
                                    <input type="text" name="endereco" id="endereco" placeholder="Digite o endereço">
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Telefone</h5>
								</div>
								<div class="card-body">
                                    <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Data de cadastro</h5>
								</div>
								<div class="card-body">
                                    <input type="datetime-local" name="date" id="date">
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">E-mail</h5>
								</div>
								<div class="card-body">
                                    <input type="email" name="email" id="email" placeholder="Digite o email">
								</div>
							</div>
						</div>
					</div>

				</div>
                <input type="submit" class="btn btn-dark btn-lg btn-block" value="salvar">
                </form>
			</main>


            <footer class="footer">
            <?php
            include 'footer.php'; 
            ?>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</head>

</html>