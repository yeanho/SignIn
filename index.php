<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>AWS Univ.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">


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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <body style="background-image: url('./assets/brand/cloudBG.jpg');background-size: auto;background-color: #f0f0f0";>
<main class="form-signin">
  <img class="mb-4" src="./assets/brand/aws.png" alt="" width="72" height="57">
  <h1 class="h3 mb-3 fw-normal">로그인</h1>
  <h6>통합로그인 아이디와 비밀번호를 사용해 로그인하세요.</h6>

  <form name="login_form" method="post" action="login.php">
    <div class="form-floating">
      <input type="text" class="form-control" name="id" placeholder="아이디">
      <label for="floatingInput">계정 입력</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
      <label for="floatingPassword">암호 입력</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button type="submit" class="w-100 btn btn-primary">Sign-in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021 AWSuniv.</p>
  </form>
</main>



  </body>
</html>
