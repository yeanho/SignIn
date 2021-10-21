<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["usertype"])) $usertype = $_SESSION["usertype"];
    else $usertype = "";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/headers.css" rel="stylesheet">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>

<main>
  <h1 class="visually-hidden">Headers examples</h1>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/index.php" class="nav-link px-2 text-secondary">aws</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-2 text-white" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">교육과정 소개</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="#">정규교육 과정</a></li>
              <li><a class="dropdown-item" href="#">국비지원 과정</a></li>
              <li><a class="dropdown-item" href="#">기업교육</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-2 text-white" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">지점 소개</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="#">종로 캠퍼스</a></li>
              <li><a class="dropdown-item" href="#">노량진 캠퍼스</a></li>
              <li><a class="dropdown-item" href="#">강남 캠퍼스</a></li>
            </ul>
          </li>
          <li><a href="#" class="nav-link px-2 text-white">수강신청</a></li>
          <li><a href="/board/board_list.php" class="nav-link px-2 text-white">게시판</a></li>
        </ul>

        <?php
            if(!$userid) {
        ?>
        <div class="text-end">
          <button type="button" onclick="location.href='/index.php';" class="btn btn-outline-light me-2">Login</button>
          <button type="button" onclick="location.href='/member/member_form.php';" class="btn btn-primary">Sign-up</button>
        </div>
        <?php
            } else {
                $logged = $username."(".$userid.")님[Level:".$usertype."]";
                ?>
                <li style="padding-right: 20px"><?=$logged?> </li>
                <div class="dropdown text-end">
                  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                  </a>
                  <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project</a></li>
                    <li><a class="dropdown-item" href="/member/member_modify_form.php">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/logout.php">Sign out</a></li>
                  </ul>
                </div>
      <?php
          }
      ?>
      </div>
    </div>
  </header>
</main>

    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>
