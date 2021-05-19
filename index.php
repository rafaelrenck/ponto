<!doctype html>
<?php session_start(); ?>
<?php include_once("config.php"); ?>
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
            <a href="<?= $root ?>index.php"><i class="fas fa-home"></i> Home</a>
            <a href="index.php" class='<?php if ((!(isset($_GET['page']))) || ($_GET['page'] == "schedule")) echo "active"; ?>'><i class="far fa-calendar-alt"></i> Minha Escala</a>
            <a href="index.php?page=shifts" class='<?php if ((isset($_GET['page'])) && ($_GET['page'] == "shifts")) echo "active"; ?>'><i class="fas fa-users"></i> Minha Equipe</a>
            <a href="index.php?page=documents" class='<?php if ((isset($_GET['page'])) && ($_GET['page'] == "documents")) echo "active"; ?>'><i class="fas fa-paste"></i> Meus Documentos</a>
          </nav>
          <div class="profile">
            <?php if (file_exists($root."img/users/".$_SESSION['matricula'].".jpg")) { ?>
              <img src="<?= $root ?>img/users/<?= $_SESSION['matricula']?>.jpg" alt="<?= $_SESSION['nomereduzido']?>">
            <?php } else { ?>
              <?php echo file_get_contents($root."img/users/nophoto.svg"); ?>
            <?php } ?>
            <?= $_SESSION['nomereduzido'] ?>
            <a href="<?= $root ?>logout.php"><i class="fas fa-times"></i></a>
          </div>
        <?php } else { ?>
          <div class="close">
            <a href="<?= $root ?>index.php"><i class="fas fa-times"></i></a>
          </div>
        <?php } ?>
      </div>
    </header>
    <main>
      <?php if (isset($_SESSION["matricula"])) { ?>
        <?php if ((!(isset($_GET['page']))) || ($_GET['page'] == "schedule")) { ?>
          <?php include_once("schedule.php"); ?>
        <?php } ?>
        <?php if ((isset($_GET['page'])) && ($_GET['page'] == "shifts")) { ?>
          <?php include_once("shifts.php"); ?>
        <?php } ?>
        <?php if ((isset($_GET['page'])) && ($_GET['page'] == "documents")) { ?>
          <?php include_once("documents.php"); ?>
        <?php } ?>
      <?php } else { ?>
        <div class="splash">
          <div class="content">
            <h1>Aviso</h1>
            <p>Você precisa estar logado para acessar esta página.</p>
            <p>Clique <a href="<?= $root ?>index.php">aqui</a> para realizar o seu login.</p>
          </div>
        </div>
      <?php } ?>
    </main>
    <footer>

    </footer>
    <script src="js/app.js"></script>
  </body>
</html>
