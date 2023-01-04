<?php

  // Connect to database
  $conn = mysqli_connect('localhost', 'george', 'rootPassword!!',
    'ninja_pizza');

  if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

?>