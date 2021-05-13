<!doctype html>
<?php session_start(); ?>
<html lang="pt-br">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c3d1e7b667.js" crossorigin="anonymous"></script>
    <title>P.NTO</title>
  </head>
  <body>
    <header>
      <div class="content">
        <img src="img/ponto.svg" alt="">
        <?php if (isset($_SESSION["matricula"])) { ?>
          <nav>
            <a href="" class='active'>Minha Escala</a>
            <a href="" class=''>Minha Equipe</a>
          </nav>
          <div class="profile">
            <?php if (file_exists("../img/usssers/".$_SESSION['matricula'].".jpg")) { ?>
              <img src="../img/users/<?= $_SESSION['matricula']?>.jpg" alt="<?= $_SESSION['nomereduzido']?>">
            <?php } else { ?>
              <img src="../../img/users/nophoto.svg">
            <?php } ?>
            Rafael Renck
            <a href="http://172.20.1.1/index.php"><i class="fas fa-times"></i></a>
          </div>
        <?php } else { ?>
          <div class="close">
            <a href="http://172.20.1.1/index.php"><i class="fas fa-times"></i></a>
          </div>
        <?php } ?>
      </div>
    </header>
    <main>
      <?php if (isset($_SESSION["matriculaa"])) { ?>
      <?php } else { ?>
        <div class="splash">
          <div class="content">
            <h1>Aviso</h1>
            <p>Você precisa estar logado para acessar esta página.</p>
            <p>Clique <a href="http://172.20.1.1/index.php">aqui</a> para realizar o seu login.</p>
          </div>
        </div>
      <?php } ?>
    </main>
    <footer>

    </footer>
    <script src="js/app.js"></script>
  </body>
</html>

if (file_exists("img/users/".$_SESSION['matricula'].".jpg")) {
												echo "<img src='img/users/".$_SESSION['matricula'].".jpg' class='fotoperfil'>";
											} else {
												echo "<i class='fas fa-user-circle fa-2x'></i>";
											}
