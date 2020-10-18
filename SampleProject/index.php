<!DOCTYPE html>
<!-- saved from url=(0057)https://getbootstrap.com/docs/4.4/examples/navbar-static/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Top navbar example · Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-static/">

  <!-- Bootstrap core CSS -->
  <link href="asset/bootstrap.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="./Top navbar example · Bootstrap_files/navbar-top.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="https://getbootstrap.com/docs/4.4/examples/navbar-static/#">Top navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://getbootstrap.com/docs/4.4/examples/navbar-static/#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://getbootstrap.com/docs/4.4/examples/navbar-static/#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="https://getbootstrap.com/docs/4.4/examples/navbar-static/#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <main role="main" class="container">
    <div class="jumbotron">
      <h1>Download Facebook Videos</h1>
      <p class="lead">Online websites that allows you to download and save Facebook videos online.</p>

      <form action="index.php#down" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">

          <input type="url" name="url" class="form-control" placeholder="Enter Facebook Video Link" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-block btn-success"> <i class="fa fa-download"></i> Download Video</button>
        </div>
      </form>
      <?php include(__DIR__ . "/systems/action.php"); ?>
    </div>
  </main>
  <script src="./Top navbar example · Bootstrap_files/jquery-3.4.1.slim.min.js.download" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="./Top navbar example · Bootstrap_files/bootstrap.bundle.min.js.download" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

</body>

</html>