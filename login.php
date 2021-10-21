<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];

    #	$con = mysqli_connect("localhost", "user1", "12345", "sample");
    include "./dbconn.php";

   $sql = "select * from members where m_id='$id'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match)
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["m_pass"];

        mysqli_close($con);

        if($pass != $db_pass)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["m_id"];
            $_SESSION["username"] = $row["m_name"];
            $_SESSION["usertype"] = $row["m_type"];

            echo("
              <script>
                location.href = './dash.php';
              </script>
            ");
        }
     }
?>
