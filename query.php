<?php 

$db = mysqli_connect("localhost", "root", "", "maraca_buku");

function query ($query) {
  global $db;
  $lemari = mysqli_query($db, $query);

  $rows = [];
  while($row = mysqli_fetch_assoc($lemari)) {
    $rows[] = $row;
  }
  return $rows; 
}

function registrasi($data) {
  global $db;

  $email = strtolower(stripcslashes($data["email"]));
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($db, $data["password"]);

  $result = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
      echo "<script>
          alert ('username / email telah terdaftar')
          </script>";
      return false;
    }

        mysqli_query($db, "INSERT INTO user VALUES
               ('', '$email','$username', '$password')");
        return mysqli_affected_rows($db);
}

  
    // hash pasword


?>