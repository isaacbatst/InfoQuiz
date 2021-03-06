<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SuperQuiz</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url()?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="<?= base_url()?>/assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?= base_url()?>/assets/css/freelancer.min.css" rel="stylesheet">

   <link href="<?= base_url()?>/assets/css/style.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-verde fixed-top text-uppercase " id="mainNav">

    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><?=$titulo?></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0" method="POST" action="login-autenticar">
            <input class="form-control mr-sm-2" name="username"   id="password"  type="text" placeholder="Email" required>
            <input class="form-control mr-sm-2" id="password" type="password" name="password" placeholder="Senha" required>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button>
          </form>

        </ul>
      </div>
    </div>
  </nav>
