<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;

    include "../dbconn.php";
    $sql = "update members set m_pass='$pass', m_name='$name' , m_email='$email'";
    $sql .= " where m_id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
	      <script>
	          location.href = '../index.php';
	      </script>
	  ";
?>
