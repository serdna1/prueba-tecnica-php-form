<?php

  error_reporting(0);
  header('Content-type: application/json; charset=utf-8');
    
  $name =  $_POST['name'];
  $email = $_POST['email'];
  $phone =  $_POST['phone'];
  $subject = $_POST['subject'];
  $comments = $_POST['comments'];

  function validateData($name, $email, $comments) {
    if ($name == '' || $email == '' || $comments == '') {
      return false;
    }

    return true;
  }

  $response = [];

  if (validateData($name, $email, $comments)) {
    $conn = mysqli_connect("localhost", "root", "", "prueba_tecnica_php_form_db", 3307);
    
    if (!$conn) {
      $response = ['error' => true];
    } else {
      $sql = "INSERT INTO users(user_name, email, phone, user_subject, user_comments) VALUES 
      (
        '$name', 
        '$email',
        '$phone',
        '$subject',
        '$comments'
      )";
  
      if (!mysqli_query($conn, $sql)) {
        $response = ['error' => true];
      }
  
    }

    mysqli_close($conn);

  } else {
    $response = ['error' => true];
  }
  
  echo json_encode($response);
  