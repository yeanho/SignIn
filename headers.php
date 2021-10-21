<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>AWSUniv.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">



    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
  </head>
  <body>

<main>

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="top-logo">
          <h1>
              <a href="/index.php" title="aws 바로가기">
              <img class="/img/aws1.png" img src="/img/aws1.png" >
          </h1>
        </div>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <a href="/index.php" class="nav-link px-5 text-dark"></a></li>
        <li><a href="#" class="nav-link px-5 link-dark">수강신청</a></li>
        <li><a href="#" class="nav-link px-5 link-dark">학교생활</a></li>
        <li><a href="#" class="nav-link px-5 link-dark">어쩌구</a></li>
        <li><a href="#" class="nav-link px-5 link-dark">저쩌구</a></li>
      </ul>

        <div class="text-end">
          <button type="button" onclick="location.href='/login_form.php';" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" onclick="location.href='/member/member_form.php';" class="btn btn-primary">Sign-up</button>
    </header>
  </div>
</main>


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
